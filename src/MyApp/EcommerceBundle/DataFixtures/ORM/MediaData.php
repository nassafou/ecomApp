<?php



namespace MyApp\EcommerceBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use MyApp\EcommerceBundle\Entity\Media;

class MediaData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $media = new Media();
        $media->setAlt('test');
        $media->setPath('http://lougo.fr/logo.png');

        $manager->persist($media);
        $manager->flush();
    }
}