<?php

namespace MorivenBundle\Controller;

use Doctrine\ORM\OptimisticLockException;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;


class UserController extends Controller
{
    use ControllerTrait;

    /**
     * @Route("/users", name="users")
     */
    public function getAction()
    {
        $users = $this->getUserRepository()->findAll();
        return $this->render('@moriven/views/users.html.twig', ['users' => $users]);
    }

    /**
     * @Route("/users/edit", name="users_edit")
     *
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function patchAction(Request $request)
    {
        $user = $this->getUserRepository()->findBy(['id' => $request->get('userId')]);
        $orders = $this->getOrdreRepository()->findAll();

        if ('GET' === $request->getMethod()){
            $places = [];
            foreach ($orders as $order){
                if (!isset($places[$order->getVille()]) || !in_array($order->getLieu(), $places[$order->getVille()])){
                    $places[$order->getVille()] [] = $order->getLieu();
                }
            }
            return $this->render('@moriven/views/users_edit.html.twig', ['user' => $user, 'places' => $places]);
        }

        if ('POST' === $request->getMethod()){
            $data = $request->request->all();
            $ville = $lieu = '';

            foreach ($data as $key => $value){
                if (strpos($key, 'ville') !== false){
                    $ville .= $value . ';';
                }
                if (strpos($key, 'lieu') !== false){
                    $lieu .= $value . ';';
                }
            }

            $user[0]->setVille(rtrim($ville, ';'));
            $user[0]->setLieu(rtrim($lieu, ';'));

            try {
                $this->getUserRepository()->store($user[0]);
            } catch (OptimisticLockException $e) {
                var_dump($e->getMessage());
            }
        }
        return $this->redirectToRoute('users');
    }
}
