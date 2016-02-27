<?php

namespace MyApp\EcommerceBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Utilisateurs\UtilisateursBundle\Entity\Utilisateurs;

class UtilisateursData extends AbstractFixture implements FixtureInterface, ContainerAwareInterface, OrderedFixtureInterface
{
     private $container;

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }
    
    public function load(ObjectManager $manager)
    {
        $utilisateur1 = new Utilisateurs();
        $utilisateur1 ->setUsername('youssouf');
        $utilisateur1 ->setEmail('ntyoussouf@gmail.com');
        $utilisateur1 ->setEnabled(1);
        $utilisateur1 ->setPassword($this->container->get('security.encoder_factory')->getEncoder($utilisateur1)->encodePassword('Pa$$w0rd1', $utilisateur1->getSalt()));
        $manager      ->persist($utilisateur1);
       
        $utilisateur2 = new Utilisateurs();
        $utilisateur2 ->setUsername('gino');
        $utilisateur2 ->setEmail('youfslair@hotmail.com');
        $utilisateur2 ->setEnabled(1);
        $utilisateur2 ->setPassword($this->container->get('security.encoder_factory')->getEncoder($utilisateur2)->encodePassword('Pa$$w0rd1', $utilisateur2->getSalt()));
        $manager      ->persist($utilisateur2);
        
        $utilisateur3 = new Utilisateurs();
        $utilisateur3 ->setUsername('danny');
        $utilisateur3 ->setEmail('youf@hotmail.com');
        $utilisateur3 ->setEnabled(1);
        $utilisateur3 ->setPassword($this->container->get('security.encoder_factory')->getEncoder($utilisateur3)->encodePassword('Pa$$w0rd1', $utilisateur3->getSalt()));
        $manager      ->persist($utilisateur3);
       
        $utilisateur4 = new Utilisateurs();
        $utilisateur4 ->setUsername('youf');
        $utilisateur4 ->setEmail('nassafou@hotmail.com');
        $utilisateur4 ->setEnabled(1);
        $utilisateur4 ->setPassword($this->container->get('security.encoder_factory')->getEncoder($utilisateur4)->encodePassword('Yatakafils1', $utilisateur4->getSalt()));
        $manager      ->persist($utilisateur4);
       
        $manager->flush();
        
        $this->addReference('utilisateur1', $utilisateur1);
        $this->addReference('utilisateur2', $utilisateur2);
        $this->addReference('utilisateur3', $utilisateur3);
        $this->addReference('utilisateur4', $utilisateur4);
        
    }
    
    public function getOrder()
    {
        return 5;
    }
}