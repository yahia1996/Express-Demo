<?php

namespace MorivenBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


class DefaultController extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function renderAction()
    {
        return $this->render('@moriven/views/index.html.twig');
    }
}
