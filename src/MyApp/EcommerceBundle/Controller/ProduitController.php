<?php

namespace MyApp\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MyApp\EcommerceBundle\Controller\Produit;

class ProduitController extends Controller
{
    public function indexAction()
    {
        $message = "ici";
        
        return $this->render('EcommerceBundle:Produit:index.html.twig', array('message' => $message ));
    }
    
    public function voirAction()
    {
        
        
        return $this->render('EcommerceBundle:Produit:produit.html.twig');
    }
    
    
    public function rechercheAction()
    {
        
    }
    public function rechercheTraitement()
    {
        
    }
    
}
