<?php

namespace Utilisateurs\UtilisateursBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use MyApp\EcommerceBundle\Entity\Commandes;

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
        $this->commandes = new \Doctrine\Common\Collections\ArrayCollection();
        $this->adresses  = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    
    /**
     *@ORM\OneToMany(targetEntity="MyApp\EcommerceBundle\Entity\Commandes", mappedBy="utilisateur", cascade={"remove"})
     *@ORM\JoinColumn(nullable=true)
     */
    protected $commandes;
    
    /**
     *@ORM\OneToMany(targetEntity="MyApp\EcommerceBundle\Entity\UtilisateursAdresses", mappedBy="utilisateur", cascade={"remove"})
     *@ORM\JoinColumn(nullable=true)
     */
    private $adresses;

    /**
     * Add commandes
     *
     * @param \MyApp\EcommerceBundle\Entity\Commandes $commandes
     * @return Utilisateurs
     */
    public function addCommande(\MyApp\EcommerceBundle\Entity\Commandes $commandes)
    {
        $this->commandes[] = $commandes;

        return $this;
    }

    /**
     * Remove commandes
     *
     * @param \MyApp\EcommerceBundle\Entity\Commandes $commandes
     */
    public function removeCommande(\MyApp\EcommerceBundle\Entity\Commandes $commandes)
    {
        $this->commandes->removeElement($commandes);
    }

    /**
     * Get commandes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCommandes()
    {
        return $this->commandes;
    }

    /**
     * Add adresses
     *
     * @param \MyApp\EcommerceBundle\Entity\UtilisateursAdresses $adresses
     * @return Utilisateurs
     */
    public function addAdress(\MyApp\EcommerceBundle\Entity\UtilisateursAdresses $adresses)
    {
        $this->adresses[] = $adresses;

        return $this;
    }

    /**
     * Remove adresses
     *
     * @param \MyApp\EcommerceBundle\Entity\UtilisateursAdresses $adresses
     */
    public function removeAdress(\MyApp\EcommerceBundle\Entity\UtilisateursAdresses $adresses)
    {
        $this->adresses->removeElement($adresses);
    }

    /**
     * Get adresses
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAdresses()
    {
        return $this->adresses;
    }
}
