<?php

namespace MorivenBundle\Controller;

use Aspera\Spreadsheet\XLSX\Reader;
use Aspera\Spreadsheet\XLSX\SharedStringsConfiguration;
use Doctrine\ORM\OptimisticLockException;
use FOS\RestBundle\View\View;
use MorivenBundle\Entity\Ordre;
use MorivenBundle\Entity\Verification;
use Nelmio\ApiDocBundle\Annotation\Model;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Swagger\Annotations as SWG;
use Symfony\Component\Routing\Annotation\Route;


/**
 * Class OrdreController
 *
 * @package MorivenBundle\Controller
 */
class OrdreController extends Controller
{
    use ControllerTrait;

    /**
     * @Route("/ordre", name="moriven_ordre")
     */
    public function getAction()
    {
        if (in_array('ROLE_ADMIN',$this->getUser()->getRoles())){
            $orders = $this->getOrdreRepository()->findAll();
        }else{
            if (false !== strpos($this->getUser()->getLieu(), ';')){
                $lieus = explode(';', $this->getUser()->getLieu());
                $orders = [];
                foreach ($lieus as $lieu){
                    $order = $this->getOrdreRepository()->findBy(['lieu' => $lieu]);
                    $orders = array_merge($orders, $order);
                }
            }else{
                $criteria = ['ville' => $this->getUser()->getVille(), 'lieu' => $this->getUser()->getLieu()];
                $orders = $this->getOrdreRepository()->findBy($criteria);
            }
        }

        return $this->render('@moriven/views/ordre.html.twig', ['orders' => $orders]);
    }

    /**
     * @Route("/order/import", name="moriven_ordre_import")
     *
     * @param Request $request
     * @return Response
     * @throws \Exception
     */
    public function postAction(Request $request)
    {
        $file = $request->files->get('file');
        if (isset($file)) {
            $allowedFileType = ['application/vnd.ms-excel', 'text/xls', 'text/xlsx', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'];
            if (in_array($file->getMimeType(), $allowedFileType)) {
                $targetDir = dirname($this->getParameter('kernel.root_dir')) . '/web/';
                $file->move($targetDir, 'ordre.xlsx');
                $options = array(
                    'TempDir' => $targetDir,
                    'SkipEmptyCells' => false,
                    'ReturnDateTimeObjects' => true,
                    'SharedStringsConfiguration' => new SharedStringsConfiguration(),
                    'CustomFormats' => array(20 => 'hh:mm')
                );

                $reader = new Reader($options);
                $reader->open('ordre.xlsx');

                foreach ($reader as $key => $row) {
                    $data = [];
                    if ($key >= 9) {
                        foreach ($row as $key2 => $value) {
                            $data[$key2] = $value;
                        }
                        $order = new Ordre($data[0], $data[1], $data[2], $data[3], trim(strtolower($data[4])), trim(strtolower($data[5])), $data[6], $data[7], $data[8], $data[9], $data[10], $data[11], $data[12]);
                        $this->getOrdreRepository()->store($order);
                    }
                }
                return $this->redirectToRoute('moriven_ordre');
            }
        }
        return $this->render('@moriven/views/ordre.html.twig');
    }

    /**
     * @Route("/ordre/edit", name="moriven_ordre_edit")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     */
    public function patchAction(Request $request)
    {
        $order = $this->getOrdreRepository()->findBy(['id' => $request->get('orderId')]);

        if ('GET' === $request->getMethod()){
            return $this->render('@moriven/views/ordre_edit.html.twig', ['order' => $order]);
        }

        if ('POST' === $request->getMethod()){
            $data = $request->request->all();
//            dump($data);die;
            try {
//                $this->getOrdreRepository()->update($order[0], $data);
                switch ($data['status']){
                    case 'ok':
                        $data['next_date'] = null;
                        $data['description'] = null;
                        break;
                    case 'inj':
                        $data['next_date'] = null;
                        break;
                    case 'rdv':
                        $data['description'] = null;
                        break;
                    default:
                        break;
                }
                $this->getVerificationRepository()->create($data);
            } catch (OptimisticLockException $e) {
            }
            return $this->redirectToRoute('moriven_ordre');
        }
    }
}