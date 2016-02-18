<?php

namespace MyApp\EcommerceBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Utilistateurs\UtilisateursBundle\Entity\Utilisateurs;


class FormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options )
    {
        //Ici nous allons créer un formulaire
        
        $builder
                ->add('email', 'email')
                ->add('pays', 'country')
                ->add('utilisateur', 'entity', array('class' =>'Utilisateurs\UtilisateursBundle\Entity\Utilisateurs'))
                ->add('contenu','textarea')
                ->add('date','datetime')
                ->add('envoyer','submit');
    }
    
    public function  getName()
    {
        return 'myapp_ecommercebundle_form';
    }
    
}
