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
     * @ORM\Column(name="nompersonne", type="string", length=255)
     */
    private $nompersonne;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="nbpersonnesacharge", type="integer")
     */
    private $nbpersonnesacharge;

    /**
     * @var integer
     *
     * @ORM\Column(name="anneetaxation", type="integer")
     */
    private $anneetaxation;

    /**
     * @var integer
     *
     * @ORM\Column(name="basenettemin", type="integer")
     */
    private $basenettemin;

    /**
     * @var integer
     *
     * @ORM\Column(name="basenettemax", type="integer")
     */
    private $basenettemax;

    /**
     * @var integer
     *
     * @ORM\Column(name="abattementgeneralbasecommunale", type="integer")
     */
    private $abattementgeneralbasecommunale;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="abattementpersonneschargecommunnal", type="integer")
     */
    private $abattementpersonneschargecommunnal;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="abattementspecialbasecommunal", type="integer")
     */
    private $abattementspecialbasecommunal;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="abattementspecialhandicapecommunal", type="integer")
     */
    private $abattementspecialhandicapecommunal;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="cotisationcommunalemin", type="integer")
     */
    private $cotisationcommunalemin;

    /**
     * @var integer
     *
     * @ORM\Column(name="cotisationcommunalemax", type="integer")
     */
    private $cotisationcommunalemax;

    /**
     * @var integer
     *
     * @ORM\Column(name="montantnetapayermin", type="integer")
     */
    private $montantnetapayermin;

    /**
     * @var integer
     *
     * @ORM\Column(name="montantnetapayermax", type="integer")
     */
    private $montantnetapayermax;

    
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
     * Set anneetaxation
     *
     * @param integer $anneetaxation
     * @return RechercheArticleTH
     */
    public function setAnneetaxation($anneetaxation)
    {
        $this->anneetaxation = $anneetaxation;

        return $this;
    }

    /**
     * Get anneetaxation
     *
     * @return integer 
     */
    public function getAnneetaxation()
    {
        return $this->anneetaxation;
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
     * Set abattementgeneralbasecommunale
     *
     * @param integer $abattementgeneralbasecommunale
     * @return RechercheArticleTH
     */
    public function setAbattementgeneralbasecommunale($abattementgeneralbasecommunale)
    {
        $this->abattementgeneralbasecommunale = $abattementgeneralbasecommunale;

        return $this;
    }

    /**
     * Get abattementgeneralbasecommunale
     *
     * @return integer 
     */
    public function getAbattementgeneralbasecommunale()
    {
        return $this->abattementgeneralbasecommunale;
    }

    /**
     * Set abattementpersonneschargecommunnal
     *
     * @param integer $abattementpersonneschargecommunnal
     * @return RechercheArticleTH
     */
    public function setAbattementpersonneschargecommunnal($abattementpersonneschargecommunnal)
    {
        $this->abattementpersonneschargecommunnal = $abattementpersonneschargecommunnal;

        return $this;
    }

    /**
     * Get abattementpersonneschargecommunnal
     *
     * @return integer 
     */
    public function getAbattementpersonneschargecommunnal()
    {
        return $this->abattementpersonneschargecommunnal;
    }

    /**
     * Set abattementspecialbasecommunal
     *
     * @param integer $abattementspecialbasecommunal
     * @return RechercheArticleTH
     */
    public function setAbattementspecialbasecommunal($abattementspecialbasecommunal)
    {
        $this->abattementspecialbasecommunal = $abattementspecialbasecommunal;

        return $this;
    }

    /**
     * Get abattementspecialbasecommunal
     *
     * @return integer 
     */
    public function getAbattementspecialbasecommunal()
    {
        return $this->abattementspecialbasecommunal;
    }

    /**
     * Set abattementspecialhandicapecommunal
     *
     * @param integer $abattementspecialhandicapecommunal
     * @return RechercheArticleTH
     */
    public function setAbattementspecialhandicapecommunal($abattementspecialhandicapecommunal)
    {
        $this->abattementspecialhandicapecommunal = $abattementspecialhandicapecommunal;

        return $this;
    }

    /**
     * Get abattementspecialhandicapecommunal
     *
     * @return integer 
     */
    public function getAbattementspecialhandicapecommunal()
    {
        return $this->abattementspecialhandicapecommunal;
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
}
