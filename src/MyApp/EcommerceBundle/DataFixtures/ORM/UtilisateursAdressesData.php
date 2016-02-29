<?php

namespace MyApp\EcommerceBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use MyApp\EcommerceBundle\Entity\UtilisateursAdresses;


class UtilisateursAdressesData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $adresse1 = new UtilisateursAdresses();
        $adresse1 ->setUtilisateur($this->getReference('utilisateur1'));
        $adresse1 ->setNom('NTCHIRIFOU');
        $adresse1 ->setPrenom('Youssouf');
        $adresse1 ->setTelephone('06.52.54.77.91');
        $adresse1 ->setAdresse('23 AV Docteur Netter');
        $adresse1 ->setCp('75012');
        $adresse1 ->setPays('France');
        $adresse1 ->setVille('Paris');
        $adresse1 ->setComplement('Face 1er etage');
        $manager  ->persist($adresse1);
       
        $adresse2 = new UtilisateursAdresses();
        $adresse2 ->setUtilisateur($this->getReference('utilisateur2'));
        $adresse2 ->setNom('AFAHOUNKO');
        $adresse2 ->setPrenom('Gino');
        $adresse2 ->setTelephone('06.52.54.56.81');
        $adresse2 ->setAdresse('Av aladji');
        $adresse2 ->setCp('7012');
        $adresse2 ->setPays('Niger');
        $adresse2 ->setVille('Niamey');
        $adresse2 ->setComplement('Face banque');
        $manager  ->persist($adresse2);
       
       
        $manager->flush();
        
        //$this->addReference('adresse1', $adresse1);
        //$this->addReference('adresse2', $adresse2);
        
    }
    
    public function getOrder()
    {
        return 6;
    }
}