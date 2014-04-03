<?php

namespace Fiscalite\GestionFiscaliteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Secteur
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Fiscalite\GestionFiscaliteBundle\Entity\SecteurRepository")
 */
class Secteur {

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
     * @ORM\Column(name="nom", type="string", length=255, nullable=true)
     * @Assert\Type(type="string", message="La valeur {{ value }} n'est pas un type {{ type }} valide.")
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="nombreIndividu", type="string",length=255, nullable=true)
     * @Assert\Type(type="string", message="La valeur {{ value }} n'est pas un type {{ type }} valide.")

     */
    private $nombreIndividu;

    /**
     * @ORM\ManyToMany(targetEntity="Fiscalite\GestionFiscaliteBundle\Entity\TypeRue", cascade={"persist","remove"})
     */
    private $typerue;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Secteur
     */
    public function setNom($nom) {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom() {
        return $this->nom;
    }

    public function newSecteur($nom, $nombreIndividu) {
        $this->setNom($nom);
        $this->setNombreIndividu($nombreIndividu);
        return $this;
    }

    /**
     * Constructor
     */
    public function __construct() {
        $this->typerue = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set nombreIndividu
     *
     * @param string $nombreIndividu
     * @return Secteur
     */
    public function setNombreIndividu($nombreIndividu) {
        $this->nombreIndividu = $nombreIndividu;

        return $this;
    }

    /**
     * Get nombreIndividu
     *
     * @return string 
     */
    public function getNombreIndividu() {
        return $this->nombreIndividu;
    }

    /**
     * Add typerue
     *
     * @param \Fiscalite\GestionFiscaliteBundle\Entity\TypeRue $typerue
     * @return Secteur
     */
    public function addTyperue(\Fiscalite\GestionFiscaliteBundle\Entity\TypeRue $typerue) {
        $this->typerue[] = $typerue;

        return $this;
    }

    /**
     * Remove typerue
     *
     * @param \Fiscalite\GestionFiscaliteBundle\Entity\TypeRue $typerue
     */
    public function removeTyperue(\Fiscalite\GestionFiscaliteBundle\Entity\TypeRue $typerue) {
        $this->typerue->removeElement($typerue);
    }

    /**
     * Get typerue
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTyperue() {
        return $this->typerue;
    }

    public function setNombreIndividuRue(){
        $i=0;
        foreach ($this->getTyperue() as $typerue){
            foreach ($typerue->getAdresses() as $adr)
                $i++;
        }
        $this->setNombreIndividu($i);
        return $this;
    }
}
