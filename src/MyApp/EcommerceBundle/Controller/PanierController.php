<?php

namespace MyApp\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MyApp\EcommerceBundle\Controller\Produit;

class PanierController extends Controller
{
    public function panierAction()
    {
    
        
        return $this->render('EcommerceBundle:Panier:panier.html.twig');
    }
    
    public function livraisonAction()
    {
        
        
        return $this->render('EcommerceBundle:Panier:livraison.html.twig');
    }
    
    public function validationAction()
    {
        
        
        return $this->render('EcommerceBundle:Panier:validation.html.twig');
    }
    
    
    public function rechercheAction()
    {
        
    }
    public function rechercheTraitement()
    {
        
    }
    
}
