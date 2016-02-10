<?php

namespace MyApp\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProduitController extends Controller
{
    public function indexAction()
    {
        $message = "ici";
        return $this->render('EcommerceBundle:Default:index.html.twig', array('message' => $message ));
    }
    
    
    public function rechercheAction()
    {
        
    }
    public function rechercheTraitement()
    {
        
    }
    
}
