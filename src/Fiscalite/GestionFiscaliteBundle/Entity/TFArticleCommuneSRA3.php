<?php

namespace Fiscalite\GestionFiscaliteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TFArticleCommuneSRA3
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Fiscalite\GestionFiscaliteBundle\Entity\TFArticleCommuneSRA3Repository")
 */
class TFArticleCommuneSRA3 {
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="totBNC", type="integer")
     */
    private $totBNC;
    /**
     * @var integer
     *
     * @ORM\Column(name="totCNC", type="integer")
     */
    private $totCNC;
    /**
     * @var integer
     *
     * @ORM\Column(name="totBNS", type="integer")
     */
    private $totBNS;
    /**
     * @var integer
     *
     * @ORM\Column(name="totCNS", type="integer")
     */
    private $totCNS;
    /**
     * @var integer
     *
     * @ORM\Column(name="totBNI", type="integer")
     */
    private $totBNI;
    /**
     * @var integer
     *
     * @ORM\Column(name="totCNI", type="integer")
     */
    private $totCNI;
    /**
     * @var integer
     *
     * @ORM\Column(name="totBNTATFPNB", type="integer")
     */
    private $totBNTATFPNB;
    /**
     * @var integer
     *
     * @ORM\Column(name="totCNTATFPNB", type="integer")
     */
    private $totCNTATFPNB;
    /**
     * @var integer
     *
     * @ORM\Column(name="totBNTSEGP", type="integer")
     */
    private $totBNTSEGP;
    /**
     * @var integer
     *
     * @ORM\Column(name="totCNTSEGP", type="integer")
     */
    private $totCNTSEGP;
    /**
     * @var integer
     *
     * @ORM\Column(name="totBNF", type="integer")
     */
    private $totBNF;
    /**
     * @var integer
     *
     * @ORM\Column(name="totCNF", type="integer")
     */
    private $totCNF;
    /**
     * @var integer
     *
     * @ORM\Column(name="totBNCA", type="integer")
     */
    private $totBNCA;
    /**
     * @var integer
     *
     * @ORM\Column(name="totCNCA", type="integer")
     */
    private $totCNCA;
    /**
     * @var integer
     *
     * @ORM\Column(name="totBNCAAA", type="integer")
     */
    private $totBNCAAA;
    /**
     * @var integer
     *
     * @ORM\Column(name="totCNCAAA", type="integer")
     */
    private $totCNCAAA;
    /**
     * @var integer
     *
     * @ORM\Column(name="totDFCAAA", type="integer")
     */
    private $totDFCAAA;
    /**
     * @var integer
     *
     * @ORM\Column(name="totFrais", type="integer")
     */
    private $totFrais;
    /**
     * @var integer
     *
     * @ORM\Column(name="totMER", type="integer")
     */
    private $totMER;
    /**
     * @var integer
     *
     * @ORM\Column(name="totDegECF", type="integer")
     */
    private $totDegECF;
    /**
     * @var integer
     *
     * @ORM\Column(name="totDegJACL", type="integer")
     */
    private $totDegJACL;
    /**
     * @var integer
     *
     * @ORM\Column(name="totDegJAEt", type="integer")
     */
    private $totDegJAEt;
    /**
     * @var integer
     *
     * @ORM\Column(name="totNV", type="integer")
     */
    private $totNV;
    /**
    * @ORM\ManyToOne(targetEntity="Fiscalite\GestionFiscaliteBundle\Entity\Fichier", inversedBy="tFarticlesCommuneSRA3", cascade={"persist"})
    */
    private $fichier;

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
     * Set totBNC
     *
     * @param integer $totBNC
     * @return TFArticleCommuneSRA3
     */
    public function setTotBNC($totBNC)
    {
        $this->totBNC = $totBNC;

        return $this;
    }

    /**
     * Get totBNC
     *
     * @return integer 
     */
    public function getTotBNC()
    {
        return $this->totBNC;
    }

    /**
     * Set totCNC
     *
     * @param integer $totCNC
     * @return TFArticleCommuneSRA3
     */
    public function setTotCNC($totCNC)
    {
        $this->totCNC = $totCNC;

        return $this;
    }

    /**
     * Get totCNC
     *
     * @return integer 
     */
    public function getTotCNC()
    {
        return $this->totCNC;
    }

    /**
     * Set totBNS
     *
     * @param integer $totBNS
     * @return TFArticleCommuneSRA3
     */
    public function setTotBNS($totBNS)
    {
        $this->totBNS = $totBNS;

        return $this;
    }

    /**
     * Get totBNS
     *
     * @return integer 
     */
    public function getTotBNS()
    {
        return $this->totBNS;
    }

    /**
     * Set totCNS
     *
     * @param integer $totCNS
     * @return TFArticleCommuneSRA3
     */
    public function setTotCNS($totCNS)
    {
        $this->totCNS = $totCNS;

        return $this;
    }

    /**
     * Get totCNS
     *
     * @return integer 
     */
    public function getTotCNS()
    {
        return $this->totCNS;
    }

    /**
     * Set totBNI
     *
     * @param integer $totBNI
     * @return TFArticleCommuneSRA3
     */
    public function setTotBNI($totBNI)
    {
        $this->totBNI = $totBNI;

        return $this;
    }

    /**
     * Get totBNI
     *
     * @return integer 
     */
    public function getTotBNI()
    {
        return $this->totBNI;
    }

    /**
     * Set totCNI
     *
     * @param integer $totCNI
     * @return TFArticleCommuneSRA3
     */
    public function setTotCNI($totCNI)
    {
        $this->totCNI = $totCNI;

        return $this;
    }

    /**
     * Get totCNI
     *
     * @return integer 
     */
    public function getTotCNI()
    {
        return $this->totCNI;
    }

    /**
     * Set totBNTATFPNB
     *
     * @param integer $totBNTATFPNB
     * @return TFArticleCommuneSRA3
     */
    public function setTotBNTATFPNB($totBNTATFPNB)
    {
        $this->totBNTATFPNB = $totBNTATFPNB;

        return $this;
    }

    /**
     * Get totBNTATFPNB
     *
     * @return integer 
     */
    public function getTotBNTATFPNB()
    {
        return $this->totBNTATFPNB;
    }

    /**
     * Set totCNTATFPNB
     *
     * @param integer $totCNTATFPNB
     * @return TFArticleCommuneSRA3
     */
    public function setTotCNTATFPNB($totCNTATFPNB)
    {
        $this->totCNTATFPNB = $totCNTATFPNB;

        return $this;
    }

    /**
     * Get totCNTATFPNB
     *
     * @return integer 
     */
    public function getTotCNTATFPNB()
    {
        return $this->totCNTATFPNB;
    }

    /**
     * Set totBNTSEGP
     *
     * @param integer $totBNTSEGP
     * @return TFArticleCommuneSRA3
     */
    public function setTotBNTSEGP($totBNTSEGP)
    {
        $this->totBNTSEGP = $totBNTSEGP;

        return $this;
    }

    /**
     * Get totBNTSEGP
     *
     * @return integer 
     */
    public function getTotBNTSEGP()
    {
        return $this->totBNTSEGP;
    }

    /**
     * Set totCNTSEGP
     *
     * @param integer $totCNTSEGP
     * @return TFArticleCommuneSRA3
     */
    public function setTotCNTSEGP($totCNTSEGP)
    {
        $this->totCNTSEGP = $totCNTSEGP;

        return $this;
    }

    /**
     * Get totCNTSEGP
     *
     * @return integer 
     */
    public function getTotCNTSEGP()
    {
        return $this->totCNTSEGP;
    }

    /**
     * Set totBNF
     *
     * @param integer $totBNF
     * @return TFArticleCommuneSRA3
     */
    public function setTotBNF($totBNF)
    {
        $this->totBNF = $totBNF;

        return $this;
    }

    /**
     * Get totBNF
     *
     * @return integer 
     */
    public function getTotBNF()
    {
        return $this->totBNF;
    }

    /**
     * Set totCNF
     *
     * @param integer $totCNF
     * @return TFArticleCommuneSRA3
     */
    public function setTotCNF($totCNF)
    {
        $this->totCNF = $totCNF;

        return $this;
    }

    /**
     * Get totCNF
     *
     * @return integer 
     */
    public function getTotCNF()
    {
        return $this->totCNF;
    }

    /**
     * Set totBNCA
     *
     * @param integer $totBNCA
     * @return TFArticleCommuneSRA3
     */
    public function setTotBNCA($totBNCA)
    {
        $this->totBNCA = $totBNCA;

        return $this;
    }

    /**
     * Get totBNCA
     *
     * @return integer 
     */
    public function getTotBNCA()
    {
        return $this->totBNCA;
    }

    /**
     * Set totCNCA
     *
     * @param integer $totCNCA
     * @return TFArticleCommuneSRA3
     */
    public function setTotCNCA($totCNCA)
    {
        $this->totCNCA = $totCNCA;

        return $this;
    }

    /**
     * Get totCNCA
     *
     * @return integer 
     */
    public function getTotCNCA()
    {
        return $this->totCNCA;
    }

    /**
     * Set totBNCAAA
     *
     * @param integer $totBNCAAA
     * @return TFArticleCommuneSRA3
     */
    public function setTotBNCAAA($totBNCAAA)
    {
        $this->totBNCAAA = $totBNCAAA;

        return $this;
    }

    /**
     * Get totBNCAAA
     *
     * @return integer 
     */
    public function getTotBNCAAA()
    {
        return $this->totBNCAAA;
    }

    /**
     * Set totCNCAAA
     *
     * @param integer $totCNCAAA
     * @return TFArticleCommuneSRA3
     */
    public function setTotCNCAAA($totCNCAAA)
    {
        $this->totCNCAAA = $totCNCAAA;

        return $this;
    }

    /**
     * Get totCNCAAA
     *
     * @return integer 
     */
    public function getTotCNCAAA()
    {
        return $this->totCNCAAA;
    }

    /**
     * Set totDFCAAA
     *
     * @param integer $totDFCAAA
     * @return TFArticleCommuneSRA3
     */
    public function setTotDFCAAA($totDFCAAA)
    {
        $this->totDFCAAA = $totDFCAAA;

        return $this;
    }

    /**
     * Get totDFCAAA
     *
     * @return integer 
     */
    public function getTotDFCAAA()
    {
        return $this->totDFCAAA;
    }

    /**
     * Set totFrais
     *
     * @param integer $totFrais
     * @return TFArticleCommuneSRA3
     */
    public function setTotFrais($totFrais)
    {
        $this->totFrais = $totFrais;

        return $this;
    }

    /**
     * Get totFrais
     *
     * @return integer 
     */
    public function getTotFrais()
    {
        return $this->totFrais;
    }

    /**
     * Set totMER
     *
     * @param integer $totMER
     * @return TFArticleCommuneSRA3
     */
    public function setTotMER($totMER)
    {
        $this->totMER = $totMER;

        return $this;
    }

    /**
     * Get totMER
     *
     * @return integer 
     */
    public function getTotMER()
    {
        return $this->totMER;
    }

    /**
     * Set totDegECF
     *
     * @param integer $totDegECF
     * @return TFArticleCommuneSRA3
     */
    public function setTotDegECF($totDegECF)
    {
        $this->totDegECF = $totDegECF;

        return $this;
    }

    /**
     * Get totDegECF
     *
     * @return integer 
     */
    public function getTotDegECF()
    {
        return $this->totDegECF;
    }

    /**
     * Set totDegJACL
     *
     * @param integer $totDegJACL
     * @return TFArticleCommuneSRA3
     */
    public function setTotDegJACL($totDegJACL)
    {
        $this->totDegJACL = $totDegJACL;

        return $this;
    }

    /**
     * Get totDegJACL
     *
     * @return integer 
     */
    public function getTotDegJACL()
    {
        return $this->totDegJACL;
    }

    /**
     * Set totDegJAEt
     *
     * @param integer $totDegJAEt
     * @return TFArticleCommuneSRA3
     */
    public function setTotDegJAEt($totDegJAEt)
    {
        $this->totDegJAEt = $totDegJAEt;

        return $this;
    }

    /**
     * Get totDegJAEt
     *
     * @return integer 
     */
    public function getTotDegJAEt()
    {
        return $this->totDegJAEt;
    }

    /**
     * Set totNV
     *
     * @param integer $totNV
     * @return TFArticleCommuneSRA3
     */
    public function setTotNV($totNV)
    {
        $this->totNV = $totNV;

        return $this;
    }

    /**
     * Get totNV
     *
     * @return integer 
     */
    public function getTotNV()
    {
        return $this->totNV;
    }
    public function newTFArticleCommuneSRA3($annee,$chaine){
        if ($annee>="2011" && $annee<="2013"){
          $this->setTotBNC(substr($chaine,29,10));
          $this->setTotCNC(substr($chaine,39,10));
          $this->setTotBNS(substr($chaine,49,10));
          $this->setTotCNS(substr($chaine,59,10));
          $this->setTotBNI(substr($chaine,69,10));
          $this->setTotCNI(substr($chaine,79,10));
          $this->setTotBNTATFPNB(substr($chaine,89,10));
          $this->setTotCNTATFPNB(substr($chaine,99,10));
          $this->setTotBNTSEGP(substr($chaine,109,10));
          $this->setTotCNTSEGP(substr($chaine,119,10));
          $this->setTotBNF(substr($chaine,129,10));
          $this->setTotCNF(substr($chaine,139,10));
          $this->setTotBNCA(substr($chaine,169,10));
          $this->setTotCNCA(substr($chaine,179,10));
          $this->setTotBNCAAA(substr($chaine,189,10));
          $this->setTotCNCAAA(substr($chaine,199,10));
          $this->setTotDFCAAA(substr($chaine,209,10));
          $this->setTotFrais(substr($chaine,219,10));
          $this->setTotMER(substr($chaine,229,10));
          $this->setTotDegECF(substr($chaine,239,10));
          $this->setTotDegJACL(substr($chaine,249,10));
          $this->setTotDegJAEt(substr($chaine,259,10));
          $this->setTotNV(substr($chaine,269,10));                              
        }else {
          $this->setTotBNC(substr($chaine,29,10));
          $this->setTotCNC(substr($chaine,39,10));
          $this->setTotBNS(substr($chaine,49,10));
          $this->setTotCNS(substr($chaine,59,10));
          $this->setTotBNI(substr($chaine,69,10));
          $this->setTotCNI(substr($chaine,79,10));
          $this->setTotBNTATFPNB(substr($chaine,89,10));
          $this->setTotCNTATFPNB(substr($chaine,99,10));
          $this->setTotBNTSEGP(substr($chaine,109,10));
          $this->setTotCNTSEGP(substr($chaine,119,10));
          $this->setTotBNF(substr($chaine,129,10));
          $this->setTotCNF(substr($chaine,139,10));
          $this->setTotBNCA(substr($chaine,169,10));
          $this->setTotCNCA(substr($chaine,179,10));
          $this->setTotBNCAAA(substr($chaine,189,10));
          $this->setTotCNCAAA(substr($chaine,199,10));
          $this->setTotDFCAAA(substr($chaine,209,10));
          $this->setTotFrais(substr($chaine,219,10));
          $this->setTotMER(substr($chaine,229,10));
          $this->setTotDegECF(substr($chaine,239,10));
          $this->setTotDegJACL(substr($chaine,249,10));
          $this->setTotDegJAEt(substr($chaine,259,10));
          $this->setTotNV(substr($chaine,269,10));
        }
        return $this;
    }

    /**
     * Set fichier
     *
     * @param \Fiscalite\GestionFiscaliteBundle\Entity\Fichier $fichier
     * @return TFArticleCommuneSRA3
     */
    public function setFichier(\Fiscalite\GestionFiscaliteBundle\Entity\Fichier $fichier = null)
    {
        $this->fichier = $fichier;

        return $this;
    }

    /**
     * Get fichier
     *
     * @return \Fiscalite\GestionFiscaliteBundle\Entity\Fichier 
     */
    public function getFichier()
    {
        return $this->fichier;
    }
}
