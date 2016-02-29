<?php

namespace MyApp\EcommerceBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use MyApp\EcommerceBundle\Entity\Produits;

class ProduitsData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $produits1 = new Produits();
        $produits1->setCategorie($this->getReference('categorie1'));
        $produits1->setDescription("Le poivron rouge appartient au groupe de l'espece Capusicum annuum");
        $produits1->setDisponible('1');
        $produits1->setImage($this->getReference('media3'));
        $produits1->setNom('Poivron');
        $produits1->setPrix('1.99');
        $produits1->setTva($this->getReference('tva2'));
        $manager  ->persist($produits1);
        
        $produits2 = new Produits();
        $produits2->setCategorie($this->getReference('categorie1'));
        $produits2->setDescription("Piment est généralement associé a la saveur du piquant  ");
        $produits2->setDisponible('1');
        $produits2->setImage($this->getReference('media4'));
        $produits2->setNom('Piment');
        $produits2->setPrix('3.99');
        $produits2->setTva($this->getReference('tva2'));
        $manager  ->persist($produits2);
        
        $produits3 = new Produits();
        $produits3->setCategorie($this->getReference('categorie1'));
        $produits3->setDescription("La tomate espece de plante herbacees de la famille des solonacée, originaire de l'amerique du sud ");
        $produits3->setDisponible('1');
        $produits3->setImage($this->getReference('media1'));
        $produits3->setNom('Tomate');
        $produits3->setPrix('0.99');
        $produits3->setTva($this->getReference('tva2'));
        $manager  ->persist($produits3);
        
        $produits4 = new Produits();
        $produits4->setCategorie($this->getReference('categorie1'));
        $produits4->setDescription("Le poivron vert appartient au groupe de l'espece Capusicum annuum");
        $produits4->setDisponible('1');
        $produits4->setImage($this->getReference('media6'));
        $produits4->setNom('Poivron');
        $produits4->setPrix('2.99');
        $produits4->setTva($this->getReference('tva2'));
        $manager  ->persist($produits4);
        
        $produits5 = new Produits();
        $produits5->setCategorie($this->getReference('categorie2'));
        $produits5->setDescription("Le raisin est le fruit de la vigne. le raisin est un fruit de plus en plus cultivée");
        $produits5->setDisponible('1');
        $produits5->setImage($this->getReference('media5'));
        $produits5->setNom('Raisin');
        $produits5->setPrix('0.97');
        $produits5->setTva($this->getReference('tva2'));
        $manager  ->persist($produits5);
        
        $produits6 = new Produits();
        $produits6->setCategorie($this->getReference('categorie2'));
        $produits6->setDescription("L'orange est un agrume, fruit des orangers, des arbres des differents especes de la famille des rutacées");
        $produits6->setDisponible('1');
        $produits6->setImage($this->getReference('media8'));
        $produits6->setNom('Orange');
        $produits6->setPrix('1.20');
        $produits6->setTva($this->getReference('tva2'));
        $manager  ->persist($produits6);
        
        $manager->flush();
    }
    
    public function getOrder()
    {
        return 4;
    }
}