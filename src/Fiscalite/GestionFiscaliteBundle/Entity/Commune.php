<?php

namespace Fiscalite\GestionFiscaliteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commune
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Fiscalite\GestionFiscaliteBundle\Entity\CommuneRepository")
 */
class Commune
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
     * @ORM\Column(name="code", type="string", length=3)
     */
    private $code;
    
    /**
     * @var string
     *
     * @ORM\Column(name="departement", type="string", length=2)
     */
    private $departement;

    /**
     * @var string
     *
     * @ORM\Column(name="codeintercommunalite", type="string", length=4)
     */
    private $codeintercommunalite;
    
    
    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=65)
     */
    private $libelle;
    /**
     * @ORM\OneToMany(targetEntity="Fiscalite\GestionFiscaliteBundle\Entity\Fichier", mappedBy="commune", cascade={"persist","remove"})
     */
    private $fichiers;

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
     * Set code
     *
     * @param string $code
     * @return Commune
     */
    public function setCode($code)
    {
        $this->code = $code;
    
        return $this;
    }

    /**
     * Get code
     *
     * @return string 
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set codeintercommunalite
     *
     * @param string $codeintercommunalite
     * @return Commune
     */
    public function setCodeintercommunalite($codeintercommunalite)
    {
        $this->codeintercommunalite = $codeintercommunalite;
    
        return $this;
    }

    /**
     * Get codeintercommunalite
     *
     * @return string 
     */
    public function getCodeintercommunalite()
    {
        return $this->codeintercommunalite;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     * @return Commune
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
        $this->fichiers = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add fichiers
     *
     * @param \Fiscalite\GestionFiscaliteBundle\Entity\Fichier $fichiers
     * @return Commune
     */
    public function addFichier(\Fiscalite\GestionFiscaliteBundle\Entity\Fichier $fichiers)
    {
        $this->fichiers[] = $fichiers;
    
        return $this;
    }

    /**
     * Remove fichiers
     *
     * @param \Fiscalite\GestionFiscaliteBundle\Entity\Fichier $fichiers
     */
    public function removeFichier(\Fiscalite\GestionFiscaliteBundle\Entity\Fichier $fichiers)
    {
        $this->fichiers->removeElement($fichiers);
    }

    /**
     * Get fichiers
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFichiers()
    {
        return $this->fichiers;
    }

    /**
     * Set departement
     *
     * @param string $departement
     * @return Commune
     */
    public function setDepartement($departement)
    {
        $this->departement = $departement;
    
        return $this;
    }

    /**
     * Get departement
     *
     * @return string 
     */
    public function getDepartement()
    {
        return $this->departement;
    }
}
