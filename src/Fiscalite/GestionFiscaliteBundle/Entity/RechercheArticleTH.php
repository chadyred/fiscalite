<?php

namespace Fiscalite\GestionFiscaliteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RechercheBase
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Fiscalite\GestionFiscaliteBundle\Entity\RechercheArticleTHRepository")
 */
class RechercheArticleTH
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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

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
     * @ORM\Column(name="cotisationintercommunalitemin", type="integer")
     */
    private $cotisationintercommunalitemin;

    /**
     * @var integer
     *
     * @ORM\Column(name="cotisationintercommunalitemax", type="integer")
     */
    private $cotisationintercommunalitemax;

    /**
     * @var string
     *
     * @ORM\Column(name="nompersonne", type="string", length=255)
     */
    private $nompersonne;


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
     * Set nom
     *
     * @param string $nom
     * @return RechercheBase
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    
        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set anneetaxation
     *
     * @param integer $anneetaxation
     * @return RechercheBase
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
     * @return RechercheBase
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
     * Set cotisationintercommunalitemin
     *
     * @param integer $cotisationintercommunalitemin
     * @return RechercheArticleTH
     */
    public function setCotisationintercommunalitemin($cotisationintercommunalitemin)
    {
        $this->cotisationintercommunalitemin = $cotisationintercommunalitemin;
    
        return $this;
    }

    /**
     * Get cotisationintercommunalitemin
     *
     * @return integer 
     */
    public function getCotisationintercommunalitemin()
    {
        return $this->cotisationintercommunalitemin;
    }

    /**
     * Set cotisationintercommunalitemax
     *
     * @param integer $cotisationintercommunalitemax
     * @return RechercheArticleTH
     */
    public function setCotisationintercommunalitemax($cotisationintercommunalitemax)
    {
        $this->cotisationintercommunalitemax = $cotisationintercommunalitemax;
    
        return $this;
    }

    /**
     * Get cotisationintercommunalitemax
     *
     * @return integer 
     */
    public function getCotisationintercommunalitemax()
    {
        return $this->cotisationintercommunalitemax;
    }
}
