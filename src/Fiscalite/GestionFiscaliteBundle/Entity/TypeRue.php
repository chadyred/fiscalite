<?php

namespace Fiscalite\GestionFiscaliteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeRue
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Fiscalite\GestionFiscaliteBundle\Entity\TypeRueRepository")
 */
class TypeRue
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=35)
     */
    private $libelle;

    /**
     * @ORM\OneToMany(targetEntity="Fiscalite\GestionFiscaliteBundle\Entity\Adresse", mappedBy="typerue")
     */
    private $adresses;
    
   /**
    * @ORM\ManyToMany(targetEntity="Fiscalite\GestionFiscaliteBundle\Entity\Secteur", cascade={"persist","remove"})
    */
    private $secteur;
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     * @return TypeRue
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string 
     */
    public function getLibelle()
    {
        return $this->libelle;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->adresses = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add adresses
     *
     * @param \Fiscalite\GestionFiscaliteBundle\Entity\Adresse $adresses
     * @return TypeRue
     */
    public function addAdress(\Fiscalite\GestionFiscaliteBundle\Entity\Adresse $adresses)
    {
        $this->adresses[] = $adresses;

        return $this;
    }

    /**
     * Remove adresses
     *
     * @param \Fiscalite\GestionFiscaliteBundle\Entity\Adresse $adresses
     */
    public function removeAdress(\Fiscalite\GestionFiscaliteBundle\Entity\Adresse $adresses)
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

    /**
     * Add secteur
     *
     * @param \Fiscalite\GestionFiscaliteBundle\Entity\Secteur $secteur
     * @return TypeRue
     */
    public function addSecteur(\Fiscalite\GestionFiscaliteBundle\Entity\Secteur $secteur)
    {
        $this->secteur[] = $secteur;

        return $this;
    }

    /**
     * Remove secteur
     *
     * @param \Fiscalite\GestionFiscaliteBundle\Entity\Secteur $secteur
     */
    public function removeSecteur(\Fiscalite\GestionFiscaliteBundle\Entity\Secteur $secteur)
    {
        $this->secteur->removeElement($secteur);
    }

    /**
     * Get secteur
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSecteur()
    {
        return $this->secteur;
    }
    
    public function __toString() {
        return $this->libelle;
    }
}
