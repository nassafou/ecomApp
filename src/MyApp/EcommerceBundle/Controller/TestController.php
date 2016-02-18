<?php

namespace MyApp\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MyApp\EcommerceBundle\Form\FormType;
use MyApp\EcommerceBundle\Entity\Utilisateurs;

class TestController extends Controller
{
    public function indexAction()
    {
        $message = "ici";
        return $this->render('EcommerceBundle:Default:index.html.twig', array('message' => $message ));
    }
    
    public function testFormulaireAction()
    {
        //$em    = $this->getDoctrine()->getManager();
        $form    = $this->createForm(new FormType());
        $request = $this->get('request');
        //var_dump($request);
        //die();
        if($request->getMethod() == "POST")
        {
            $form->bind($request);
            echo $form['email']->getData();
            var_dump($form->getData());
            //var_dump($form);
            
            $form    = $this->createForm(new FormType(), array('email' => 'contac@gmail.com'));
            
             //die();
            //return $this('EcommerceBundle:Test:index.html.twig', array( 'form' => $form['email']->createView()));
        }
        return $this->render('EcommerceBundle:Test:index.html.twig', array('form' => $form->createView()));
    }
}
