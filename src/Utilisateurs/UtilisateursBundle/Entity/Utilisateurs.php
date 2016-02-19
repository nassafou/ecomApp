<?php

namespace Utilisateurs\UtilisateursBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="utilisateurs")
 */
class Utilisateurs extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
    
    
    /**
     *@ORM\OneToMany(targetEntity="Ecommerce\EcommerceBundle\Entity\Commandes",,mappedBy="utilisateur" cascade={"persist","remove"})
     *@ORM\JoinColumn(nullable=true)
     */
    private $commandes;
}