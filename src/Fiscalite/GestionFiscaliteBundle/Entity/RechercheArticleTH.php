<?php

namespace Fiscalite\GestionFiscaliteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RechercheBase
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Fiscalite\GestionFiscaliteBundle\Entity\RechercheArticleTHRepository")
 */
class RechercheArticleTH {

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
     * @ORM\Column(name="nompersonne", type="string", length=255, nullable=true)
     */
    private $nompersonne;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbpersonnesacharge", type="integer", nullable=true)
     */
    private $nbpersonnesacharge;

    /**
     * @ORM\ManyToMany(targetEntity="Fiscalite\GestionFiscaliteBundle\Entity\Fichier", mappedBy="rechercheArticleTH", cascade={"persist"})
     */
    private $fichier;

    /**
     * @var integer
     *
     * @ORM\Column(name="basenettemin", type="integer", nullable=true)
     */
    private $basenettemin;

    /**
     * @var integer
     *
     * @ORM\Column(name="basenettemax", type="integer", nullable=true)
     */
    private $basenettemax;

    /**
     * @var integer
     *
     * @ORM\Column(name="abattementgeneralbasecommunalemin", type="integer", nullable=true)
     */
    private $abattementgeneralbasecommunalemin;

    /**
     * @var integer
     *
     * @ORM\Column(name="abattementgeneralbasecommunalemax", type="integer", nullable=true)
     */
    private $abattementgeneralbasecommunalemax;

    /**
     * @var integer
     *
     * @ORM\Column(name="abattementpersonneschargecommunnalmin", type="integer", nullable=true)
     */
    private $abattementpersonneschargecommunnalmin;

    /**
     * @var integer
     *
     * @ORM\Column(name="abattementpersonneschargecommunnalmax", type="integer", nullable=true)
     */
    private $abattementpersonneschargecommunnalmax;

    /**
     * @var integer
     *
     * @ORM\Column(name="abattementspecialbasecommunalmin", type="integer", nullable=true)
     */
    private $abattementspecialbasecommunalmin;

    /**
     * @var integer
     *
     * @ORM\Column(name="abattementspecialbasecommunalmax", type="integer", nullable=true)
     */
    private $abattementspecialbasecommunalmax;

    /**
     * @var integer
     *
     * @ORM\Column(name="abattementspecialhandicapecommunalmin", type="integer", nullable=true)
     */
    private $abattementspecialhandicapecommunalmin;

    /**
     * @var integer
     *
     * @ORM\Column(name="abattementspecialhandicapecommunalmax", type="integer", nullable=true)
     */
    private $abattementspecialhandicapecommunalmax;

    /**
     * @var integer
     *
     * @ORM\Column(name="cotisationcommunalemin", type="integer", nullable=true)
     */
    private $cotisationcommunalemin;

    /**
     * @var integer
     *
     * @ORM\Column(name="cotisationcommunalemax", type="integer", nullable=true)
     */
    private $cotisationcommunalemax;

    /**
     * @var integer
     *
     * @ORM\Column(name="montantnetapayermin", type="integer", nullable=true)
     */
    private $montantnetapayermin;

    /**
     * @var integer
     *
     * @ORM\Column(name="montantnetapayermax", type="integer", nullable=true)
     */
    private $montantnetapayermax;

 
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
     * Set nompersonne
     *
     * @param string $nompersonne
     * @return RechercheArticleTH
     */
    public function setNompersonne($nompersonne)
    {
        $this->nompersonne = $nompersonne;

        return $this;
    }

    /**
     * Get nompersonne
     *
     * @return string 
     */
    public function getNompersonne()
    {
        return $this->nompersonne;
    }

    /**
     * Set nbpersonnesacharge
     *
     * @param integer $nbpersonnesacharge
     * @return RechercheArticleTH
     */
    public function setNbpersonnesacharge($nbpersonnesacharge)
    {
        $this->nbpersonnesacharge = $nbpersonnesacharge;

        return $this;
    }

    /**
     * Get nbpersonnesacharge
     *
     * @return integer 
     */
    public function getNbpersonnesacharge()
    {
        return $this->nbpersonnesacharge;
    }

    /**
     * Set basenettemin
     *
     * @param integer $basenettemin
     * @return RechercheArticleTH
     */
    public function setBasenettemin($basenettemin)
    {
        $this->basenettemin = $basenettemin;

        return $this;
    }

    /**
     * Get basenettemin
     *
     * @return integer 
     */
    public function getBasenettemin()
    {
        return $this->basenettemin;
    }

    /**
     * Set basenettemax
     *
     * @param integer $basenettemax
     * @return RechercheArticleTH
     */
    public function setBasenettemax($basenettemax)
    {
        $this->basenettemax = $basenettemax;

        return $this;
    }

    /**
     * Get basenettemax
     *
     * @return integer 
     */
    public function getBasenettemax()
    {
        return $this->basenettemax;
    }

    /**
     * Set abattementgeneralbasecommunalemin
     *
     * @param integer $abattementgeneralbasecommunalemin
     * @return RechercheArticleTH
     */
    public function setAbattementgeneralbasecommunalemin($abattementgeneralbasecommunalemin)
    {
        $this->abattementgeneralbasecommunalemin = $abattementgeneralbasecommunalemin;

        return $this;
    }

    /**
     * Get abattementgeneralbasecommunalemin
     *
     * @return integer 
     */
    public function getAbattementgeneralbasecommunalemin()
    {
        return $this->abattementgeneralbasecommunalemin;
    }

    /**
     * Set abattementgeneralbasecommunalemax
     *
     * @param integer $abattementgeneralbasecommunalemax
     * @return RechercheArticleTH
     */
    public function setAbattementgeneralbasecommunalemax($abattementgeneralbasecommunalemax)
    {
        $this->abattementgeneralbasecommunalemax = $abattementgeneralbasecommunalemax;

        return $this;
    }

    /**
     * Get abattementgeneralbasecommunalemax
     *
     * @return integer 
     */
    public function getAbattementgeneralbasecommunalemax()
    {
        return $this->abattementgeneralbasecommunalemax;
    }

    /**
     * Set abattementpersonneschargecommunnalmin
     *
     * @param integer $abattementpersonneschargecommunnalmin
     * @return RechercheArticleTH
     */
    public function setAbattementpersonneschargecommunnalmin($abattementpersonneschargecommunnalmin)
    {
        $this->abattementpersonneschargecommunnalmin = $abattementpersonneschargecommunnalmin;

        return $this;
    }

    /**
     * Get abattementpersonneschargecommunnalmin
     *
     * @return integer 
     */
    public function getAbattementpersonneschargecommunnalmin()
    {
        return $this->abattementpersonneschargecommunnalmin;
    }

    /**
     * Set abattementpersonneschargecommunnalmax
     *
     * @param integer $abattementpersonneschargecommunnalmax
     * @return RechercheArticleTH
     */
    public function setAbattementpersonneschargecommunnalmax($abattementpersonneschargecommunnalmax)
    {
        $this->abattementpersonneschargecommunnalmax = $abattementpersonneschargecommunnalmax;

        return $this;
    }

    /**
     * Get abattementpersonneschargecommunnalmax
     *
     * @return integer 
     */
    public function getAbattementpersonneschargecommunnalmax()
    {
        return $this->abattementpersonneschargecommunnalmax;
    }

    /**
     * Set abattementspecialbasecommunalmin
     *
     * @param integer $abattementspecialbasecommunalmin
     * @return RechercheArticleTH
     */
    public function setAbattementspecialbasecommunalmin($abattementspecialbasecommunalmin)
    {
        $this->abattementspecialbasecommunalmin = $abattementspecialbasecommunalmin;

        return $this;
    }

    /**
     * Get abattementspecialbasecommunalmin
     *
     * @return integer 
     */
    public function getAbattementspecialbasecommunalmin()
    {
        return $this->abattementspecialbasecommunalmin;
    }

    /**
     * Set abattementspecialbasecommunalmax
     *
     * @param integer $abattementspecialbasecommunalmax
     * @return RechercheArticleTH
     */
    public function setAbattementspecialbasecommunalmax($abattementspecialbasecommunalmax)
    {
        $this->abattementspecialbasecommunalmax = $abattementspecialbasecommunalmax;

        return $this;
    }

    /**
     * Get abattementspecialbasecommunalmax
     *
     * @return integer 
     */
    public function getAbattementspecialbasecommunalmax()
    {
        return $this->abattementspecialbasecommunalmax;
    }

    /**
     * Set abattementspecialhandicapecommunalmin
     *
     * @param integer $abattementspecialhandicapecommunalmin
     * @return RechercheArticleTH
     */
    public function setAbattementspecialhandicapecommunalmin($abattementspecialhandicapecommunalmin)
    {
        $this->abattementspecialhandicapecommunalmin = $abattementspecialhandicapecommunalmin;

        return $this;
    }

    /**
     * Get abattementspecialhandicapecommunalmin
     *
     * @return integer 
     */
    public function getAbattementspecialhandicapecommunalmin()
    {
        return $this->abattementspecialhandicapecommunalmin;
    }

    /**
     * Set abattementspecialhandicapecommunalmax
     *
     * @param integer $abattementspecialhandicapecommunalmax
     * @return RechercheArticleTH
     */
    public function setAbattementspecialhandicapecommunalmax($abattementspecialhandicapecommunalmax)
    {
        $this->abattementspecialhandicapecommunalmax = $abattementspecialhandicapecommunalmax;

        return $this;
    }

    /**
     * Get abattementspecialhandicapecommunalmax
     *
     * @return integer 
     */
    public function getAbattementspecialhandicapecommunalmax()
    {
        return $this->abattementspecialhandicapecommunalmax;
    }

    /**
     * Set cotisationcommunalemin
     *
     * @param integer $cotisationcommunalemin
     * @return RechercheArticleTH
     */
    public function setCotisationcommunalemin($cotisationcommunalemin)
    {
        $this->cotisationcommunalemin = $cotisationcommunalemin;

        return $this;
    }

    /**
     * Get cotisationcommunalemin
     *
     * @return integer 
     */
    public function getCotisationcommunalemin()
    {
        return $this->cotisationcommunalemin;
    }

    /**
     * Set cotisationcommunalemax
     *
     * @param integer $cotisationcommunalemax
     * @return RechercheArticleTH
     */
    public function setCotisationcommunalemax($cotisationcommunalemax)
    {
        $this->cotisationcommunalemax = $cotisationcommunalemax;

        return $this;
    }

    /**
     * Get cotisationcommunalemax
     *
     * @return integer 
     */
    public function getCotisationcommunalemax()
    {
        return $this->cotisationcommunalemax;
    }

    /**
     * Set montantnetapayermin
     *
     * @param integer $montantnetapayermin
     * @return RechercheArticleTH
     */
    public function setMontantnetapayermin($montantnetapayermin)
    {
        $this->montantnetapayermin = $montantnetapayermin;

        return $this;
    }

    /**
     * Get montantnetapayermin
     *
     * @return integer 
     */
    public function getMontantnetapayermin()
    {
        return $this->montantnetapayermin;
    }

    /**
     * Set montantnetapayermax
     *
     * @param integer $montantnetapayermax
     * @return RechercheArticleTH
     */
    public function setMontantnetapayermax($montantnetapayermax)
    {
        $this->montantnetapayermax = $montantnetapayermax;

        return $this;
    }

    /**
     * Get montantnetapayermax
     *
     * @return integer 
     */
    public function getMontantnetapayermax()
    {
        return $this->montantnetapayermax;
    }

    /**
     * Add fichier
     *
     * @param \Fiscalite\GestionFiscaliteBundle\Entity\Fichier $fichier
     * @return RechercheArticleTH
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
