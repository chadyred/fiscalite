<?php

namespace Fiscalite\GestionFiscaliteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * Fichier
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Fiscalite\GestionFiscaliteBundle\Entity\FichierRepository")
 */
class Fichier
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
     * @var string
     *
     * @ORM\Column(name="typeimpot", type="string", length=2)
     */
    private $typeimpot;

    /**
     * @Assert\File( maxSize = "5M")
     */
    private $file;
    
    /**
     * @ORM\OneToMany(targetEntity="Fiscalite\GestionFiscaliteBundle\Entity\Article", mappedBy="fichier", cascade={"persist","remove"})
     */
    private $articles;
    
    // ManyToOne //
    /**
    * @ORM\ManyToOne(targetEntity="Fiscalite\GestionFiscaliteBundle\Entity\Commune", inversedBy="fichiers", cascade={"persist","remove"})
    */
    private $commune;
    /**
     * @ORM\OneToOne(targetEntity="Fiscalite\GestionFiscaliteBundle\Entity\ArticleCommune", mappedBy="fichier", cascade={"persist","remove"})
     */
    private $articlesCommune;
    /**
     * @ORM\OneToOne(targetEntity="Fiscalite\GestionFiscaliteBundle\Entity\THArticleCommuneIFPA3", mappedBy="fichier", cascade={"persist","remove"})
     */
    private $THArticleCommuneIFPA3;
    
    /**
     * @ORM\OneToMany(targetEntity="Fiscalite\GestionFiscaliteBundle\Entity\TFArticleCommuneEnTete", mappedBy="fichier", cascade={"persist","remove"})
     */
    private $tFarticlesCommuneEnTete;
    /**
     * @ORM\OneToMany(targetEntity="Fiscalite\GestionFiscaliteBundle\Entity\TFArticleCommuneIFP", mappedBy="fichier", cascade={"persist","remove"})
     */
    private $tFarticlesCommuneIFP;
    /**
     * @ORM\OneToMany(targetEntity="Fiscalite\GestionFiscaliteBundle\Entity\TFArticleCommuneSRA2", mappedBy="fichier", cascade={"persist","remove"})
     */
    private $tFarticlesCommuneSRA2;
    /**
     * @ORM\OneToMany(targetEntity="Fiscalite\GestionFiscaliteBundle\Entity\TFArticleCommuneSRA3", mappedBy="fichier", cascade={"persist","remove"})
     */
    private $tFarticlesCommuneSRA3;
    
    /**
     * @ORM\ManyToMany(targetEntity="Fiscalite\GestionFiscaliteBundle\Entity\RechercheArticleTH", inversedBy="fichier", cascade={"persist"})
     */
    private $rechercheArticleTH;
    
    /**
     * @ORM\ManyToMany(targetEntity="Fiscalite\GestionFiscaliteBundle\Entity\RechercheArticleTF", inversedBy="fichier", cascade={"persist"})
     */
    private $rechercheArticleTF;
    
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
     * @return Fichier
     */
    public function setNom($nom)
    {
        $nom=$this->file->getClientOriginalName();
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
     * @return Fichier
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
     * Set typeimpot
     *
     * @param string $typeimpot
     * @return Fichier
     */
    public function setTypeimpot($typeimpot)
    {
        $this->typeimpot = $typeimpot;
    
        return $this;
    }

    /**
     * Get typeimpot
     *
     * @return string 
     */
    public function getTypeimpot()
    {
        return $this->typeimpot;
    }
    
    /**
     * Set file
     *
     * @param string $file
     * @return Fichier
     */
    public function setFile($file)
    {
        $this->file = $file;
    
        return $this;
    }

    /**
     * Get file
     *
     * @return string 
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->articles = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add articles
     *
     * @param \Fiscalite\GestionFiscaliteBundle\Entity\Article $articles
     * @return Fichier
     */
    public function addArticle(\Fiscalite\GestionFiscaliteBundle\Entity\Article $articles)
    {
        $this->articles[] = $articles;
    
        return $this;
    }

    /**
     * Remove articles
     *
     * @param \Fiscalite\GestionFiscaliteBundle\Entity\Article $articles
     */
    public function removeArticle(\Fiscalite\GestionFiscaliteBundle\Entity\Article $articles)
    {
        $this->articles->removeElement($articles);
    }

    /**
     * Get articles
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getArticles()
    {
        return $this->articles;
    }

    /**
     * Set commune
     *
     * @param \Fiscalite\GestionFiscaliteBundle\Entity\Commune $commune
     * @return Fichier
     */
    public function setCommune(\Fiscalite\GestionFiscaliteBundle\Entity\Commune $commune = null)
    {
        $this->commune = $commune;
    
        return $this;
    }

    /**
     * Get commune
     *
     * @return \Fiscalite\GestionFiscaliteBundle\Entity\Commune 
     */
    public function getCommune()
    {
        return $this->commune;
    }


    /**
     * Add tFarticlesCommuneIFP
     *
     * @param \Fiscalite\GestionFiscaliteBundle\Entity\TFArticleCommuneIFP $tFarticlesCommuneIFP
     * @return Fichier
     */
    public function addTFarticlesCommuneIFP(\Fiscalite\GestionFiscaliteBundle\Entity\TFArticleCommuneIFP $tFarticlesCommuneIFP)
    {
        $this->tFarticlesCommuneIFP[] = $tFarticlesCommuneIFP;

        return $this;
    }

    /**
     * Remove tFarticlesCommuneIFP
     *
     * @param \Fiscalite\GestionFiscaliteBundle\Entity\TFArticleCommuneIFP $tFarticlesCommuneIFP
     */
    public function removeTFarticlesCommuneIFP(\Fiscalite\GestionFiscaliteBundle\Entity\TFArticleCommuneIFP $tFarticlesCommuneIFP)
    {
        $this->tFarticlesCommuneIFP->removeElement($tFarticlesCommuneIFP);
    }

    /**
     * Get tFarticlesCommuneIFP
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTFarticlesCommuneIFP()
    {
        return $this->tFarticlesCommuneIFP;
    }

    /**
     * Add tfarticletaxationnonbatis
     *
     * @param \Fiscalite\GestionFiscaliteBundle\Entity\TFArticleTaxationNonBati $tfarticletaxationnonbatis
     * @return Fichier
     */
    public function addTfarticletaxationnonbati(\Fiscalite\GestionFiscaliteBundle\Entity\TFArticleTaxationNonBati $tfarticletaxationnonbatis)
    {
        $this->tfarticletaxationnonbatis[] = $tfarticletaxationnonbatis;

        return $this;
    }

    /**
     * Remove tfarticletaxationnonbatis
     *
     * @param \Fiscalite\GestionFiscaliteBundle\Entity\TFArticleTaxationNonBati $tfarticletaxationnonbatis
     */
    public function removeTfarticletaxationnonbati(\Fiscalite\GestionFiscaliteBundle\Entity\TFArticleTaxationNonBati $tfarticletaxationnonbatis)
    {
        $this->tfarticletaxationnonbatis->removeElement($tfarticletaxationnonbatis);
    }

    /**
     * Get tfarticletaxationnonbatis
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTfarticletaxationnonbatis()
    {
        return $this->tfarticletaxationnonbatis;
    }

    /**
     * Add tfarticletaxationbatis
     *
     * @param \Fiscalite\GestionFiscaliteBundle\Entity\TFArticleTaxationBati $tfarticletaxationbatis
     * @return Fichier
     */
    public function addTfarticletaxationbati(\Fiscalite\GestionFiscaliteBundle\Entity\TFArticleTaxationBati $tfarticletaxationbatis)
    {
        $this->tfarticletaxationbatis[] = $tfarticletaxationbatis;

        return $this;
    }

    /**
     * Remove tfarticletaxationbatis
     *
     * @param \Fiscalite\GestionFiscaliteBundle\Entity\TFArticleTaxationBati $tfarticletaxationbatis
     */
    public function removeTfarticletaxationbati(\Fiscalite\GestionFiscaliteBundle\Entity\TFArticleTaxationBati $tfarticletaxationbatis)
    {
        $this->tfarticletaxationbatis->removeElement($tfarticletaxationbatis);
    }

    /**
     * Get tfarticletaxationbatis
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTfarticletaxationbatis()
    {
        return $this->tfarticletaxationbatis;
    }

    /**
     * Add tFarticlesCommuneSRA2
     *
     * @param \Fiscalite\GestionFiscaliteBundle\Entity\TFArticleCommuneSRA2 $tFarticlesCommuneSRA2
     * @return Fichier
     */
    public function addTFarticlesCommuneSRA2(\Fiscalite\GestionFiscaliteBundle\Entity\TFArticleCommuneSRA2 $tFarticlesCommuneSRA2)
    {
        $this->tFarticlesCommuneSRA2[] = $tFarticlesCommuneSRA2;

        return $this;
    }

    /**
     * Remove tFarticlesCommuneSRA2
     *
     * @param \Fiscalite\GestionFiscaliteBundle\Entity\TFArticleCommuneSRA2 $tFarticlesCommuneSRA2
     */
    public function removeTFarticlesCommuneSRA2(\Fiscalite\GestionFiscaliteBundle\Entity\TFArticleCommuneSRA2 $tFarticlesCommuneSRA2)
    {
        $this->tFarticlesCommuneSRA2->removeElement($tFarticlesCommuneSRA2);
    }

    /**
     * Get tFarticlesCommuneSRA2
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTFarticlesCommuneSRA2()
    {
        return $this->tFarticlesCommuneSRA2;
    }

    /**
     * Add tFarticlesCommuneSRA3
     *
     * @param \Fiscalite\GestionFiscaliteBundle\Entity\TFArticleCommuneSRA3 $tFarticlesCommuneSRA3
     * @return Fichier
     */
    public function addTFarticlesCommuneSRA3(\Fiscalite\GestionFiscaliteBundle\Entity\TFArticleCommuneSRA3 $tFarticlesCommuneSRA3)
    {
        $this->tFarticlesCommuneSRA3[] = $tFarticlesCommuneSRA3;

        return $this;
    }

    /**
     * Remove tFarticlesCommuneSRA3
     *
     * @param \Fiscalite\GestionFiscaliteBundle\Entity\TFArticleCommuneSRA3 $tFarticlesCommuneSRA3
     */
    public function removeTFarticlesCommuneSRA3(\Fiscalite\GestionFiscaliteBundle\Entity\TFArticleCommuneSRA3 $tFarticlesCommuneSRA3)
    {
        $this->tFarticlesCommuneSRA3->removeElement($tFarticlesCommuneSRA3);
    }

    /**
     * Get tFarticlesCommuneSRA3
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTFarticlesCommuneSRA3()
    {
        return $this->tFarticlesCommuneSRA3;
    }

    /**
     * Set articlesCommune
     *
     * @param \Fiscalite\GestionFiscaliteBundle\Entity\ArticleCommune $articlesCommune
     * @return Fichier
     */
    public function setArticlesCommune(\Fiscalite\GestionFiscaliteBundle\Entity\ArticleCommune $articlesCommune = null)
    {
        $this->articlesCommune = $articlesCommune;

        return $this;
    }

    /**
     * Get articlesCommune
     *
     * @return \Fiscalite\GestionFiscaliteBundle\Entity\ArticleCommune 
     */
    public function getArticlesCommune()
    {
        return $this->articlesCommune;
    }

    /**
     * Set THArticleCommuneIFPA3
     *
     * @param \Fiscalite\GestionFiscaliteBundle\Entity\THArticleCommuneIFPA3 $tHArticleCommuneIFPA3
     * @return Fichier
     */
    public function setTHArticleCommuneIFPA3(\Fiscalite\GestionFiscaliteBundle\Entity\THArticleCommuneIFPA3 $tHArticleCommuneIFPA3 = null)
    {
        $this->THArticleCommuneIFPA3 = $tHArticleCommuneIFPA3;

        return $this;
    }

    /**
     * Get THArticleCommuneIFPA3
     *
     * @return \Fiscalite\GestionFiscaliteBundle\Entity\THArticleCommuneIFPA3 
     */
    public function getTHArticleCommuneIFPA3()
    {
        return $this->THArticleCommuneIFPA3;
    }

    /**
     * Add tFarticlesCommuneEnTete
     *
     * @param \Fiscalite\GestionFiscaliteBundle\Entity\TFArticleCommuneEnTete $tFarticlesCommuneEnTete
     * @return Fichier
     */
    public function addTFarticlesCommuneEnTete(\Fiscalite\GestionFiscaliteBundle\Entity\TFArticleCommuneEnTete $tFarticlesCommuneEnTete)
    {
        $this->tFarticlesCommuneEnTete[] = $tFarticlesCommuneEnTete;

        return $this;
    }

    /**
     * Remove tFarticlesCommuneEnTete
     *
     * @param \Fiscalite\GestionFiscaliteBundle\Entity\TFArticleCommuneEnTete $tFarticlesCommuneEnTete
     */
    public function removeTFarticlesCommuneEnTete(\Fiscalite\GestionFiscaliteBundle\Entity\TFArticleCommuneEnTete $tFarticlesCommuneEnTete)
    {
        $this->tFarticlesCommuneEnTete->removeElement($tFarticlesCommuneEnTete);
    }

    /**
     * Get tFarticlesCommuneEnTete
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTFarticlesCommuneEnTete()
    {
        return $this->tFarticlesCommuneEnTete;
    }

    /**
     * Add rechercheArticleTH
     *
     * @param \Fiscalite\GestionFiscaliteBundle\Entity\RechercheArticleTH $rechercheArticleTH
     * @return Fichier
     */
    public function addRechercheArticleTH(\Fiscalite\GestionFiscaliteBundle\Entity\RechercheArticleTH $rechercheArticleTH)
    {
        $this->rechercheArticleTH[] = $rechercheArticleTH;

        return $this;
    }

    /**
     * Remove rechercheArticleTH
     *
     * @param \Fiscalite\GestionFiscaliteBundle\Entity\RechercheArticleTH $rechercheArticleTH
     */
    public function removeRechercheArticleTH(\Fiscalite\GestionFiscaliteBundle\Entity\RechercheArticleTH $rechercheArticleTH)
    {
        $this->rechercheArticleTH->removeElement($rechercheArticleTH);
    }

    /**
     * Get rechercheArticleTH
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRechercheArticleTH()
    {
        return $this->rechercheArticleTH;
    }

    /**
     * Add rechercheArticleTF
     *
     * @param \Fiscalite\GestionFiscaliteBundle\Entity\RechercheArticleTF $rechercheArticleTF
     * @return Fichier
     */
    public function addRechercheArticleTF(\Fiscalite\GestionFiscaliteBundle\Entity\RechercheArticleTF $rechercheArticleTF)
    {
        $this->rechercheArticleTF[] = $rechercheArticleTF;

        return $this;
    }

    /**
     * Remove rechercheArticleTF
     *
     * @param \Fiscalite\GestionFiscaliteBundle\Entity\RechercheArticleTF $rechercheArticleTF
     */
    public function removeRechercheArticleTF(\Fiscalite\GestionFiscaliteBundle\Entity\RechercheArticleTF $rechercheArticleTF)
    {
        $this->rechercheArticleTF->removeElement($rechercheArticleTF);
    }

    /**
     * Get rechercheArticleTF
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRechercheArticleTF()
    {
        return $this->rechercheArticleTF;
    }
}
