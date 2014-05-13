<?php

namespace Fiscalite\GestionFiscaliteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RechercheArticleTF
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Fiscalite\GestionFiscaliteBundle\Entity\RechercheArticleTFRepository")
 */
class RechercheArticleTF
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
     * @ORM\Column(name="titreetdesignation", type="string", length=255, nullable=true)
     */
    private $titreetdesignation;

    /**
     * @var integer
     *
     * @ORM\Column(name="sommeapayermin", type="integer", nullable=true)
     */
    private $sommeapayermin;

    /**
     * @var integer
     *
     * @ORM\Column(name="sommeapayermax", type="integer", nullable=true)
     */
    private $sommeapayermax;
/**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255, nullable=true)
     */
    private $adresse;
    
    /**
     * @ORM\ManyToMany(targetEntity="Fiscalite\GestionFiscaliteBundle\Entity\Fichier", mappedBy="rechercheArticleTF", cascade={"persist"})
     */
    private $fichier;

    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->fichier = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set titreetdesignation
     *
     * @param string $titreetdesignation
     * @return RechercheArticleTF
     */
    public function setTitreetdesignation($titreetdesignation)
    {
        $this->titreetdesignation = $titreetdesignation;

        return $this;
    }

    /**
     * Get titreetdesignation
     *
     * @return string 
     */
    public function getTitreetdesignation()
    {
        return $this->titreetdesignation;
    }

    /**
     * Set sommeapayermin
     *
     * @param integer $sommeapayermin
     * @return RechercheArticleTF
     */
    public function setSommeapayermin($sommeapayermin)
    {
        $this->sommeapayermin = $sommeapayermin;

        return $this;
    }

    /**
     * Get sommeapayermin
     *
     * @return integer 
     */
    public function getSommeapayermin()
    {
        return $this->sommeapayermin;
    }

    /**
     * Set sommeapayermax
     *
     * @param integer $sommeapayermax
     * @return RechercheArticleTF
     */
    public function setSommeapayermax($sommeapayermax)
    {
        $this->sommeapayermax = $sommeapayermax;

        return $this;
    }

    /**
     * Get sommeapayermax
     *
     * @return integer 
     */
    public function getSommeapayermax()
    {
        return $this->sommeapayermax;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return RechercheArticleTF
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Add fichier
     *
     * @param \Fiscalite\GestionFiscaliteBundle\Entity\Fichier $fichier
     * @return RechercheArticleTF
     */
    public function addFichier(\Fiscalite\GestionFiscaliteBundle\Entity\Fichier $fichier)
    {
        $this->fichier[] = $fichier;

        return $this;
    }

    /**
     * Remove fichier
     *
     * @param \Fiscalite\GestionFiscaliteBundle\Entity\Fichier $fichier
     */
    public function removeFichier(\Fiscalite\GestionFiscaliteBundle\Entity\Fichier $fichier)
    {
        $this->fichier->removeElement($fichier);
    }

    /**
     * Get fichier
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFichier()
    {
        return $this->fichier;
    }
}
