<?php

namespace MorivenBundle\Controller;

use Doctrine\ORM\NonUniqueResultException;
use Doctrine\ORM\OptimisticLockException;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;


class VerificationController extends Controller
{
    use ControllerTrait;

    /**
     * @Route("/verification", name="verification")
     */
    public function getAction()
    {
        $verifications = $this->getVerificationRepository()->findAll();

        return $this->render('@moriven/views/verification.html.twig', ['verifications' => $verifications]);
    }

    /**
     * @Route("/verification/post", name="verification_post")
     * @param Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function postAction(Request $request)
    {
        $verification = $this->getVerificationRepository()->findBy(['id' => $request->get('verificationId')])[0];
        $order = $this->getOrdreRepository()->findBy(['id' => $verification->orderId])[0];
        unset($verification->orderId);
        unset($verification->id);

        try {
            $this->getOrdreRepository()->update($order, (array)$verification);
            $this->getVerificationRepository()->remove($request->get('verificationId'));
        } catch (NonUniqueResultException $e) {
        } catch (OptimisticLockException $e) {
        } catch (\ReflectionException $e) {
        }

        return $this->redirectToRoute('verification');
    }

    /**
     * @Route("/verification/delete", name="verification_delete")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function deleteAction(Request $request)
    {
        try {
            $this->getVerificationRepository()->remove($request->get('verificationId'));
        } catch (NonUniqueResultException $e) {
        } catch (OptimisticLockException $e) {
        } catch (\ReflectionException $e) {
        }

        return $this->redirectToRoute('verification');
    }
}
