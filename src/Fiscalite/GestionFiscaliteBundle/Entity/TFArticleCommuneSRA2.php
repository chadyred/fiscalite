<?php

namespace Fiscalite\GestionFiscaliteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TFArticleCommuneSRA2
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Fiscalite\GestionFiscaliteBundle\Entity\TFArticleCommuneSRA2Repository")
 */
class TFArticleCommuneSRA2 {
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
     * @ORM\Column(name="totBBC", type="integer")
     */
    private $totBBC;
    /**
     * @var integer
     *
     * @ORM\Column(name="totCBC", type="integer")
     */
    private $totCBC;
    /**
     * @var integer
     *
     * @ORM\Column(name="totBBS", type="integer")
     */
    private $totBBS;
    /**
     * @var integer
     *
     * @ORM\Column(name="totCBS", type="integer")
     */
    private $totCBS;
    /**
     * @var integer
     *
     * @ORM\Column(name="totBBI", type="integer")
     */
    private $totBBI;
    /**
     * @var integer
     *
     * @ORM\Column(name="totCBI", type="integer")
     */
    private $totCBI;
    /**
     * @var integer
     *
     * @ORM\Column(name="totBBD", type="integer")
     */
    private $totBBD;
    /**
     * @var integer
     *
     * @ORM\Column(name="totCBD", type="integer")
     */
    private $totCBD;
    /**
     * @var integer
     *
     * @ORM\Column(name="totBBTSEGP", type="integer")
     */
    private $totBBTSEGP;
    /**
     * @var integer
     *
     * @ORM\Column(name="totCBTSEGP", type="integer")
     */
    private $totCBTSEGP;
    /**
     * @var integer
     *
     * @ORM\Column(name="totBBF", type="integer")
     */
    private $totBBF;
    /**
     * @var integer
     *
     * @ORM\Column(name="totCBF", type="integer")
     */
    private $totCBF;
    /**
     * @var integer
     *
     * @ORM\Column(name="totBOP", type="integer")
     */
    private $totBOP;
    /**
     * @var integer
     *
     * @ORM\Column(name="totCOP", type="integer")
     */
    private $totCOP;
    /**
     * @var integer
     *
     * @ORM\Column(name="totBORA", type="integer")
     */
    private $totBORA;
    /**
     * @var integer
     *
     * @ORM\Column(name="totCORA", type="integer")
     */
    private $totCORA;
    /**
     * @var integer
     *
     * @ORM\Column(name="totBORB", type="integer")
     */
    private $totBORB;
    /**
     * @var integer
     *
     * @ORM\Column(name="totCORB", type="integer")
     */
    private $totCORB;
    /**
     * @var integer
     *
     * @ORM\Column(name="totBORC", type="integer")
     */
    private $totBORC;
      /**
     * @var integer
     *
     * @ORM\Column(name="totCORC", type="integer")
     */
    private $totCORC;
    /**
     * @var integer
     *
     * @ORM\Column(name="totBORD", type="integer")
     */
    private $totBORD;
    /**
     * @var integer
     *
     * @ORM\Column(name="totCORD", type="integer")
     */
    private $totCORD;
    /**
    * @ORM\ManyToOne(targetEntity="Fiscalite\GestionFiscaliteBundle\Entity\Fichier", inversedBy="tFarticlesCommuneSRA2", cascade={"persist","remove"})
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
     * Set totBBC
     *
     * @param integer $totBBC
     * @return TFArticleCommuneSRA2
     */
    public function setTotBBC($totBBC)
    {
        $this->totBBC = $totBBC;

        return $this;
    }

    /**
     * Get totBBC
     *
     * @return integer 
     */
    public function getTotBBC()
    {
        return $this->totBBC;
    }

    /**
     * Set totCBC
     *
     * @param integer $totCBC
     * @return TFArticleCommuneSRA2
     */
    public function setTotCBC($totCBC)
    {
        $this->totCBC = $totCBC;

        return $this;
    }

    /**
     * Get totCBC
     *
     * @return integer 
     */
    public function getTotCBC()
    {
        return $this->totCBC;
    }

    /**
     * Set totBBS
     *
     * @param integer $totBBS
     * @return TFArticleCommuneSRA2
     */
    public function setTotBBS($totBBS)
    {
        $this->totBBS = $totBBS;

        return $this;
    }

    /**
     * Get totBBS
     *
     * @return integer 
     */
    public function getTotBBS()
    {
        return $this->totBBS;
    }

    /**
     * Set totCBS
     *
     * @param integer $totCBS
     * @return TFArticleCommuneSRA2
     */
    public function setTotCBS($totCBS)
    {
        $this->totCBS = $totCBS;

        return $this;
    }

    /**
     * Get totCBS
     *
     * @return integer 
     */
    public function getTotCBS()
    {
        return $this->totCBS;
    }

    /**
     * Set totBBI
     *
     * @param integer $totBBI
     * @return TFArticleCommuneSRA2
     */
    public function setTotBBI($totBBI)
    {
        $this->totBBI = $totBBI;

        return $this;
    }

    /**
     * Get totBBI
     *
     * @return integer 
     */
    public function getTotBBI()
    {
        return $this->totBBI;
    }

    /**
     * Set totCBI
     *
     * @param integer $totCBI
     * @return TFArticleCommuneSRA2
     */
    public function setTotCBI($totCBI)
    {
        $this->totCBI = $totCBI;

        return $this;
    }

    /**
     * Get totCBI
     *
     * @return integer 
     */
    public function getTotCBI()
    {
        return $this->totCBI;
    }

    /**
     * Set totBBD
     *
     * @param integer $totBBD
     * @return TFArticleCommuneSRA2
     */
    public function setTotBBD($totBBD)
    {
        $this->totBBD = $totBBD;

        return $this;
    }

    /**
     * Get totBBD
     *
     * @return integer 
     */
    public function getTotBBD()
    {
        return $this->totBBD;
    }

    /**
     * Set totCBD
     *
     * @param integer $totCBD
     * @return TFArticleCommuneSRA2
     */
    public function setTotCBD($totCBD)
    {
        $this->totCBD = $totCBD;

        return $this;
    }

    /**
     * Get totCBD
     *
     * @return integer 
     */
    public function getTotCBD()
    {
        return $this->totCBD;
    }

    /**
     * Set totBBTSEGP
     *
     * @param integer $totBBTSEGP
     * @return TFArticleCommuneSRA2
     */
    public function setTotBBTSEGP($totBBTSEGP)
    {
        $this->totBBTSEGP = $totBBTSEGP;

        return $this;
    }

    /**
     * Get totBBTSEGP
     *
     * @return integer 
     */
    public function getTotBBTSEGP()
    {
        return $this->totBBTSEGP;
    }

    /**
     * Set totCBTSEGP
     *
     * @param integer $totCBTSEGP
     * @return TFArticleCommuneSRA2
     */
    public function setTotCBTSEGP($totCBTSEGP)
    {
        $this->totCBTSEGP = $totCBTSEGP;

        return $this;
    }

    /**
     * Get totCBTSEGP
     *
     * @return integer 
     */
    public function getTotCBTSEGP()
    {
        return $this->totCBTSEGP;
    }

    /**
     * Set totBBF
     *
     * @param integer $totBBF
     * @return TFArticleCommuneSRA2
     */
    public function setTotBBF($totBBF)
    {
        $this->totBBF = $totBBF;

        return $this;
    }

    /**
     * Get totBBF
     *
     * @return integer 
     */
    public function getTotBBF()
    {
        return $this->totBBF;
    }

    /**
     * Set totCBF
     *
     * @param integer $totCBF
     * @return TFArticleCommuneSRA2
     */
    public function setTotCBF($totCBF)
    {
        $this->totCBF = $totCBF;

        return $this;
    }

    /**
     * Get totCBF
     *
     * @return integer 
     */
    public function getTotCBF()
    {
        return $this->totCBF;
    }

    /**
     * Set totBOP
     *
     * @param integer $totBOP
     * @return TFArticleCommuneSRA2
     */
    public function setTotBOP($totBOP)
    {
        $this->totBOP = $totBOP;

        return $this;
    }

    /**
     * Get totBOP
     *
     * @return integer 
     */
    public function getTotBOP()
    {
        return $this->totBOP;
    }

    /**
     * Set totCOP
     *
     * @param integer $totCOP
     * @return TFArticleCommuneSRA2
     */
    public function setTotCOP($totCOP)
    {
        $this->totCOP = $totCOP;

        return $this;
    }

    /**
     * Get totCOP
     *
     * @return integer 
     */
    public function getTotCOP()
    {
        return $this->totCOP;
    }

    /**
     * Set totBORA
     *
     * @param integer $totBORA
     * @return TFArticleCommuneSRA2
     */
    public function setTotBORA($totBORA)
    {
        $this->totBORA = $totBORA;

        return $this;
    }

    /**
     * Get totBORA
     *
     * @return integer 
     */
    public function getTotBORA()
    {
        return $this->totBORA;
    }

    /**
     * Set totCORA
     *
     * @param integer $totCORA
     * @return TFArticleCommuneSRA2
     */
    public function setTotCORA($totCORA)
    {
        $this->totCORA = $totCORA;

        return $this;
    }

    /**
     * Get totCORA
     *
     * @return integer 
     */
    public function getTotCORA()
    {
        return $this->totCORA;
    }

    /**
     * Set totBORB
     *
     * @param integer $totBORB
     * @return TFArticleCommuneSRA2
     */
    public function setTotBORB($totBORB)
    {
        $this->totBORB = $totBORB;

        return $this;
    }

    /**
     * Get totBORB
     *
     * @return integer 
     */
    public function getTotBORB()
    {
        return $this->totBORB;
    }

    /**
     * Set totCORB
     *
     * @param integer $totCORB
     * @return TFArticleCommuneSRA2
     */
    public function setTotCORB($totCORB)
    {
        $this->totCORB = $totCORB;

        return $this;
    }

    /**
     * Get totCORB
     *
     * @return integer 
     */
    public function getTotCORB()
    {
        return $this->totCORB;
    }

    /**
     * Set totBORC
     *
     * @param integer $totBORC
     * @return TFArticleCommuneSRA2
     */
    public function setTotBORC($totBORC)
    {
        $this->totBORC = $totBORC;

        return $this;
    }

    /**
     * Get totBORC
     *
     * @return integer 
     */
    public function getTotBORC()
    {
        return $this->totBORC;
    }
    /**
     * Set totCORC
     *
     * @param integer $totCORC
     * @return TFArticleCommuneSRA2
     */
    public function setTotCORC($totCORC)
    {
        $this->totCORC = $totCORC;

        return $this;
    }

    /**
     * Get totCORC
     *
     * @return integer 
     */
    public function getTotCORC()
    {
        return $this->totCORC;
    }

    /**
     * Set totBORD
     *
     * @param integer $totBORD
     * @return TFArticleCommuneSRA2
     */
    public function setTotBORD($totBORD)
    {
        $this->totBORD = $totBORD;

        return $this;
    }

    /**
     * Get totBORD
     *
     * @return integer 
     */
    public function getTotBORD()
    {
        return $this->totBORD;
    }

    /**
     * Set totCORD
     *
     * @param integer $totCORD
     * @return TFArticleCommuneSRA2
     */
    public function setTotCORD($totCORD)
    {
        $this->totCORD = $totCORD;

        return $this;
    }

    /**
     * Get totCORD
     *
     * @return integer 
     */
    public function getTotCORD()
    {
        return $this->totCORD;
    }

    public function newTFArticleCommuneSRA2($annee,$chaine){
        if ($annee>="2011" && $annee<="2013"){
          $this->setTotBBC(substr($chaine,29,10));
          $this->setTotCBC(substr($chaine,39,10));
          $this->setTotBBS(substr($chaine,49,10));
          $this->setTotCBS(substr($chaine,59,10));
          $this->setTotBBI(substr($chaine,69,10));
          $this->setTotCBI(substr($chaine,79,10));
          $this->setTotBBD(substr($chaine,89,10));
          $this->setTotCBD(substr($chaine,99,10));
          $this->setTotBBTSEGP(substr($chaine,109,10));
          $this->setTotCBTSEGP(substr($chaine,119,10));
          $this->setTotBBF(substr($chaine,129,10));
          $this->setTotCBF(substr($chaine,139,10));
          $this->setTotBOP(substr($chaine,29,10));
          $this->setTotCOP(substr($chaine,169,10));
          $this->setTotBORA(substr($chaine,179,10));
          $this->setTotCORA(substr($chaine,189,10));
          $this->setTotBORB(substr($chaine,199,10));
          $this->setTotCORB(substr($chaine,209,10));
          $this->setTotBORC(substr($chaine,219,10));
          $this->setTotCORC(substr($chaine,229,10));
          $this->setTotBORD(substr($chaine,239,10));
          $this->setTotCORD(substr($chaine,249,10));
        }else {
          $this->setTotBBC(substr($chaine,29,10));
          $this->setTotCBC(substr($chaine,39,10));
          $this->setTotBBS(substr($chaine,49,10));
          $this->setTotCBS(substr($chaine,59,10));
          $this->setTotBBI(substr($chaine,69,10));
          $this->setTotCBI(substr($chaine,79,10));
          $this->setTotBBD(substr($chaine,89,10));
          $this->setTotCBD(substr($chaine,99,10));
          $this->setTotBBTSEGP(substr($chaine,109,10));
          $this->setTotCBTSEGP(substr($chaine,119,10));
          $this->setTotBBF(substr($chaine,129,10));
          $this->setTotCBF(substr($chaine,139,10));
          $this->setTotBOP(substr($chaine,29,10));
          $this->setTotCOP(substr($chaine,169,10));
          $this->setTotBORA(substr($chaine,179,10));
          $this->setTotCORA(substr($chaine,189,10));
          $this->setTotBORB(substr($chaine,199,10));
          $this->setTotCORB(substr($chaine,209,10));
          $this->setTotBORC(substr($chaine,219,10));
          $this->setTotCORC(substr($chaine,229,10));
          $this->setTotBORD(substr($chaine,239,10));
          $this->setTotCORD(substr($chaine,249,10));
        }
        return $this;
    }

    /**
     * Set fichier
     *
     * @param \Fiscalite\GestionFiscaliteBundle\Entity\Fichier $fichier
     * @return TFArticleCommuneSRA2
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
