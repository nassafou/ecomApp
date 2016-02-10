<?php

namespace MyApp\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $message = "ici";
        return $this->render('EcommerceBundle:Default:index.html.twig', array('message' => $message ));
    }
}
