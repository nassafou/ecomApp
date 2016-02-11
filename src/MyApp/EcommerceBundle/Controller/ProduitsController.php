<?php

namespace MyApp\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MyApp\EcommerceBundle\Controller\Produits;

class ProduitsController extends Controller
{
    public function produitsAction()
    {
        $message = "ici";
        
        return $this->render('EcommerceBundle:Produits:layout/produits.html.twig', array('message' => $message ));
    }
    
    public function presentationAction()
    {
        
        
        return $this->render('EcommerceBundle:Produits:layout/presentation.html.twig');
    }
    
    
    public function rechercheAction()
    {
        
    }
    public function rechercheTraitement()
    {
        
    }
    
}
