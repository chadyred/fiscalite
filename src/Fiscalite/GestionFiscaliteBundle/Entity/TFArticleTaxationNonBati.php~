<?php

namespace Fiscalite\GestionFiscaliteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TFArticleTaxationNonBati
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Fiscalite\GestionFiscaliteBundle\Entity\TFArticleTaxationNonBatiRepository")
 */
class TFArticleTaxationNonBati {

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
     * @ORM\Column(name="numerosequentiel", type="integer")
     */
    private $numerosequentiel;

    /**
     * @var integer
     *
     * @ORM\Column(name="baseC", type="integer")
     */
    private $baseC;

    /**
     * @var integer
     *
     * @ORM\Column(name="baseIC", type="integer")
     */
    private $baseIC;

    /**
     * @var integer
     *
     * @ORM\Column(name="baseTATFPNB", type="integer")
     */
    private $baseTATFPNB;

    /**
     * @var integer
     *
     * @ORM\Column(name="baseTSE", type="integer")
     */
    private $baseTSE;

    /**
     * @var integer
     *
     * @ORM\Column(name="baseCA", type="integer")
     */
    private $baseCA;

    /**
     * @var integer
     *
     * @ORM\Column(name="baseCAAA", type="integer")
     */
    private $baseCAAA;

    /**
     * @var integer
     *
     * @ORM\Column(name="baseTerrainsConstr", type="integer")
     */
    private $baseTerrainsConstr;

    /**
     * @var integer
     *
     * @ORM\Column(name="bFF", type="integer")
     */
    private $bFF;

    /**
     * @var integer
     *
     * @ORM\Column(name="cotisationC", type="integer")
     */
    private $cotisationC;

    /**
     * @var integer
     *
     * @ORM\Column(name="cotisationS", type="integer")
     */
    private $cotisationS;

    /**
     * @var integer
     *
     * @ORM\Column(name="cotisationIC", type="integer")
     */
    private $cotisationIC;

    /**
     * @var integer
     *
     * @ORM\Column(name="cotisationTATFPNB", type="integer")
     */
    private $cotisationTATFPNB;

    /**
     * @var integer
     *
     * @ORM\Column(name="cotisationTSE", type="integer")
     */
    private $cotisationTSE;

    /**
     * @var integer
     *
     * @ORM\Column(name="cotisationTSEF", type="integer")
     */
    private $cotisationTSEF;

    /**
     * @var integer
     *
     * @ORM\Column(name="cotisationCA", type="integer")
     */
    private $cotisationCA;

    /**
     * @var integer
     *
     * @ORM\Column(name="cotisationCAAADF", type="integer")
     */
    private $cotisationCAAADF;

    /**
     * @var integer
     *
     * @ORM\Column(name="cotisationCAAADP", type="integer")
     */
    private $cotisationCAAADP;

    /**
     * @var integer
     *
     * @ORM\Column(name="total", type="integer")
     */
    private $total;

    /**
     * @var integer
     *
     * @ORM\Column(name="baseJACLC", type="integer")
     */
    private $baseJACLC;

    /**
     * @var integer
     *
     * @ORM\Column(name="baseJACLS", type="integer")
     */
    private $baseJACLS;

    /**
     * @var integer
     *
     * @ORM\Column(name="baseJACLIC", type="integer")
     */
    private $baseJACLIC;

    /**
     * @var integer
     *
     * @ORM\Column(name="baseJAEC", type="integer")
     */
    private $baseJAEC;

    /**
     * @var integer
     *
     * @ORM\Column(name="baseJAES", type="integer")
     */
    private $baseJAES;

    /**
     * @var integer
     *
     * @ORM\Column(name="baseJAEIC", type="integer")
     */
    private $baseJAEIC;

    /**
     * @var integer
     *
     * @ORM\Column(name="cotisationJACL", type="integer")
     */
    private $cotisationJACL;

    /**
     * @var integer
     *
     * @ORM\Column(name="cotisationJAEtat", type="integer")
     */
    private $cotisationJAEtat;

    /**
     * @var integer
     *
     * @ORM\Column(name="baseImposableTACetSyndicat", type="integer")
     */
    private $baseImposableTACetSyndicat;

    /**
     * @var integer
     *
     * @ORM\Column(name="baseImposableTAIC", type="integer")
     */
    private $baseImposableTAIC;

    /**
     * @var integer
     *
     * @ORM\Column(name="baseImposableTAChambreAgriculture", type="integer")
     */
    private $baseImposableTAChambreAgriculture;

    /**
     * @var integer
     *
     * @ORM\Column(name="baseImposableTACAAA", type="integer")
     */
    private $baseImposableTACAAA;

    /**
     * @var integer
     *
     * @ORM\Column(name="cotisationGlobaleTSE", type="integer")
     */
    private $cotisationGlobaleTSE;
    // ManyToOne //
    /**
     * @ORM\ManyToOne(targetEntity="Fiscalite\GestionFiscaliteBundle\Entity\ArticleTF", inversedBy="tfarticletaxationnonbatis", cascade={"persist"})
     */
    private $articleTF;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set baseC
     *
     * @param integer $baseC
     * @return TFArticleTaxationNonBati
     */
    public function setBaseC($baseC) {
        $this->baseC = $baseC;

        return $this;
    }

    /**
     * Get baseC
     *
     * @return integer 
     */
    public function getBaseC() {
        return $this->baseC;
    }

    /**
     * Set baseIC
     *
     * @param integer $baseIC
     * @return TFArticleTaxationNonBati
     */
    public function setBaseIC($baseIC) {
        $this->baseIC = $baseIC;

        return $this;
    }

    /**
     * Get baseIC
     *
     * @return integer 
     */
    public function getBaseIC() {
        return $this->baseIC;
    }

    /**
     * Set baseTATFPNB
     *
     * @param integer $baseTATFPNB
     * @return TFArticleTaxationNonBati
     */
    public function setBaseTATFPNB($baseTATFPNB) {
        $this->baseTATFPNB = $baseTATFPNB;

        return $this;
    }

    /**
     * Get baseTATFPNB
     *
     * @return integer 
     */
    public function getBaseTATFPNB() {
        return $this->baseTATFPNB;
    }

    /**
     * Set baseTSE
     *
     * @param integer $baseTSE
     * @return TFArticleTaxationNonBati
     */
    public function setBaseTSE($baseTSE) {
        $this->baseTSE = $baseTSE;

        return $this;
    }

    /**
     * Get baseTSE
     *
     * @return integer 
     */
    public function getBaseTSE() {
        return $this->baseTSE;
    }

    /**
     * Set baseCA
     *
     * @param integer $baseCA
     * @return TFArticleTaxationNonBati
     */
    public function setBaseCA($baseCA) {
        $this->baseCA = $baseCA;

        return $this;
    }

    /**
     * Get baseCA
     *
     * @return integer 
     */
    public function getBaseCA() {
        return $this->baseCA;
    }

    /**
     * Set baseCAAA
     *
     * @param integer $baseCAAA
     * @return TFArticleTaxationNonBati
     */
    public function setBaseCAAA($baseCAAA) {
        $this->baseCAAA = $baseCAAA;

        return $this;
    }

    /**
     * Get baseCAAA
     *
     * @return integer 
     */
    public function getBaseCAAA() {
        return $this->baseCAAA;
    }

    /**
     * Set baseTerrainsConstr
     *
     * @param integer $baseTerrainsConstr
     * @return TFArticleTaxationNonBati
     */
    public function setBaseTerrainsConstr($baseTerrainsConstr) {
        $this->baseTerrainsConstr = $baseTerrainsConstr;

        return $this;
    }

    /**
     * Get baseTerrainsConstr
     *
     * @return integer 
     */
    public function getBaseTerrainsConstr() {
        return $this->baseTerrainsConstr;
    }

    /**
     * Set cotisationC
     *
     * @param integer $cotisationC
     * @return TFArticleTaxationNonBati
     */
    public function setCotisationC($cotisationC) {
        $this->cotisationC = $cotisationC;

        return $this;
    }

    /**
     * Get cotisationC
     *
     * @return integer 
     */
    public function getCotisationC() {
        return $this->cotisationC;
    }

    /**
     * Set cotisationS
     *
     * @param integer $cotisationS
     * @return TFArticleTaxationNonBati
     */
    public function setCotisationS($cotisationS) {
        $this->cotisationS = $cotisationS;

        return $this;
    }

    /**
     * Get cotisationS
     *
     * @return integer 
     */
    public function getCotisationS() {
        return $this->cotisationS;
    }

    /**
     * Set cotisationIC
     *
     * @param integer $cotisationIC
     * @return TFArticleTaxationNonBati
     */
    public function setCotisationIC($cotisationIC) {
        $this->cotisationIC = $cotisationIC;

        return $this;
    }

    /**
     * Get cotisationIC
     *
     * @return integer 
     */
    public function getCotisationIC() {
        return $this->cotisationIC;
    }

    /**
     * Set cotisationTATFPNB
     *
     * @param integer $cotisationTATFPNB
     * @return TFArticleTaxationNonBati
     */
    public function setCotisationTATFPNB($cotisationTATFPNB) {
        $this->cotisationTATFPNB = $cotisationTATFPNB;

        return $this;
    }

    /**
     * Get cotisationTATFPNB
     *
     * @return integer 
     */
    public function getCotisationTATFPNB() {
        return $this->cotisationTATFPNB;
    }

    /**
     * Set cotisationTSE
     *
     * @param integer $cotisationTSE
     * @return TFArticleTaxationNonBati
     */
    public function setCotisationTSE($cotisationTSE) {
        $this->cotisationTSE = $cotisationTSE;

        return $this;
    }

    /**
     * Get cotisationTSE
     *
     * @return integer 
     */
    public function getCotisationTSE() {
        return $this->cotisationTSE;
    }

    /**
     * Set cotisationTSEF
     *
     * @param integer $cotisationTSEF
     * @return TFArticleTaxationNonBati
     */
    public function setCotisationTSEF($cotisationTSEF) {
        $this->cotisationTSEF = $cotisationTSEF;

        return $this;
    }

    /**
     * Get cotisationTSEF
     *
     * @return integer 
     */
    public function getCotisationTSEF() {
        return $this->cotisationTSEF;
    }

    /**
     * Set cotisationCA
     *
     * @param integer $cotisationCA
     * @return TFArticleTaxationNonBati
     */
    public function setCotisationCA($cotisationCA) {
        $this->cotisationCA = $cotisationCA;

        return $this;
    }

    /**
     * Get cotisationCA
     *
     * @return integer 
     */
    public function getCotisationCA() {
        return $this->cotisationCA;
    }

    /**
     * Set cotisationCAAADF
     *
     * @param integer $cotisationCAAADF
     * @return TFArticleTaxationNonBati
     */
    public function setCotisationCAAADF($cotisationCAAADF) {
        $this->cotisationCAAADF = $cotisationCAAADF;

        return $this;
    }

    /**
     * Get cotisationCAAADF
     *
     * @return integer 
     */
    public function getCotisationCAAADF() {
        return $this->cotisationCAAADF;
    }

    /**
     * Set cotisationCAAADP
     *
     * @param integer $cotisationCAAADP
     * @return TFArticleTaxationNonBati
     */
    public function setCotisationCAAADP($cotisationCAAADP) {
        $this->cotisationCAAADP = $cotisationCAAADP;

        return $this;
    }

    /**
     * Get cotisationCAAADP
     *
     * @return integer 
     */
    public function getCotisationCAAADP() {
        return $this->cotisationCAAADP;
    }

    /**
     * Set total
     *
     * @param integer $total
     * @return TFArticleTaxationNonBati
     */
    public function setTotal($total) {
        $this->total = $total;

        return $this;
    }

    /**
     * Get total
     *
     * @return integer 
     */
    public function getTotal() {
        return $this->total;
    }

    /**
     * Set baseJACLC
     *
     * @param integer $baseJACLC
     * @return TFArticleTaxationNonBati
     */
    public function setBaseJACLC($baseJACLC) {
        $this->baseJACLC = $baseJACLC;

        return $this;
    }

    /**
     * Get baseJACLC
     *
     * @return integer 
     */
    public function getBaseJACLC() {
        return $this->baseJACLC;
    }

    /**
     * Set baseJACLS
     *
     * @param integer $baseJACLS
     * @return TFArticleTaxationNonBati
     */
    public function setBaseJACLS($baseJACLS) {
        $this->baseJACLS = $baseJACLS;

        return $this;
    }

    /**
     * Get baseJACLS
     *
     * @return integer 
     */
    public function getBaseJACLS() {
        return $this->baseJACLS;
    }

    /**
     * Set baseJACLIC
     *
     * @param integer $baseJACLIC
     * @return TFArticleTaxationNonBati
     */
    public function setBaseJACLIC($baseJACLIC) {
        $this->baseJACLIC = $baseJACLIC;

        return $this;
    }

    /**
     * Get baseJACLIC
     *
     * @return integer 
     */
    public function getBaseJACLIC() {
        return $this->baseJACLIC;
    }

    /**
     * Set baseJAEC
     *
     * @param integer $baseJAEC
     * @return TFArticleTaxationNonBati
     */
    public function setBaseJAEC($baseJAEC) {
        $this->baseJAEC = $baseJAEC;

        return $this;
    }

    /**
     * Get baseJAEC
     *
     * @return integer 
     */
    public function getBaseJAEC() {
        return $this->baseJAEC;
    }

    /**
     * Set baseJAES
     *
     * @param integer $baseJAES
     * @return TFArticleTaxationNonBati
     */
    public function setBaseJAES($baseJAES) {
        $this->baseJAES = $baseJAES;

        return $this;
    }

    /**
     * Get baseJAES
     *
     * @return integer 
     */
    public function getBaseJAES() {
        return $this->baseJAES;
    }

    /**
     * Set baseJAEIC
     *
     * @param integer $baseJAEIC
     * @return TFArticleTaxationNonBati
     */
    public function setBaseJAEIC($baseJAEIC) {
        $this->baseJAEIC = $baseJAEIC;

        return $this;
    }

    /**
     * Get baseJAEIC
     *
     * @return integer 
     */
    public function getBaseJAEIC() {
        return $this->baseJAEIC;
    }

    /**
     * Set cotisationJACL
     *
     * @param integer $cotisationJACL
     * @return TFArticleTaxationNonBati
     */
    public function setCotisationJACL($cotisationJACL) {
        $this->cotisationJACL = $cotisationJACL;

        return $this;
    }

    /**
     * Get cotisationJACL
     *
     * @return integer 
     */
    public function getCotisationJACL() {
        return $this->cotisationJACL;
    }

    /**
     * Set cotisationJAEtat
     *
     * @param integer $cotisationJAEtat
     * @return TFArticleTaxationNonBati
     */
    public function setCotisationJAEtat($cotisationJAEtat) {
        $this->cotisationJAEtat = $cotisationJAEtat;

        return $this;
    }

    /**
     * Get cotisationJAEtat
     *
     * @return integer 
     */
    public function getCotisationJAEtat() {
        return $this->cotisationJAEtat;
    }

    /**
     * Set baseImposableTACetSyndicat
     *
     * @param integer $baseImposableTACetSyndicat
     * @return TFArticleTaxationNonBati
     */
    public function setBaseImposableTACetSyndicat($baseImposableTACetSyndicat) {
        $this->baseImposableTACetSyndicat = $baseImposableTACetSyndicat;

        return $this;
    }

    /**
     * Get baseImposableTACetSyndicat
     *
     * @return integer 
     */
    public function getBaseImposableTACetSyndicat() {
        return $this->baseImposableTACetSyndicat;
    }

    /**
     * Set baseImposableTAIC
     *
     * @param integer $baseImposableTAIC
     * @return TFArticleTaxationNonBati
     */
    public function setBaseImposableTAIC($baseImposableTAIC) {
        $this->baseImposableTAIC = $baseImposableTAIC;

        return $this;
    }

    /**
     * Get baseImposableTAIC
     *
     * @return integer 
     */
    public function getBaseImposableTAIC() {
        return $this->baseImposableTAIC;
    }

    /**
     * Set baseImposableTAChambreAgriculture
     *
     * @param integer $baseImposableTAChambreAgriculture
     * @return TFArticleTaxationNonBati
     */
    public function setBaseImposableTAChambreAgriculture($baseImposableTAChambreAgriculture) {
        $this->baseImposableTAChambreAgriculture = $baseImposableTAChambreAgriculture;

        return $this;
    }

    /**
     * Get baseImposableTAChambreAgriculture
     *
     * @return integer 
     */
    public function getBaseImposableTAChambreAgriculture() {
        return $this->baseImposableTAChambreAgriculture;
    }

    /**
     * Set baseImposableTACAAA
     *
     * @param integer $baseImposableTACAAA
     * @return TFArticleTaxationNonBati
     */
    public function setBaseImposableTACAAA($baseImposableTACAAA) {
        $this->baseImposableTACAAA = $baseImposableTACAAA;

        return $this;
    }

    /**
     * Get baseImposableTACAAA
     *
     * @return integer 
     */
    public function getBaseImposableTACAAA() {
        return $this->baseImposableTACAAA;
    }

    /**
     * Set cotisationGlobaleTSE
     *
     * @param integer $cotisationGlobaleTSE
     * @return TFArticleTaxationNonBati
     */
    public function setCotisationGlobaleTSE($cotisationGlobaleTSE) {
        $this->cotisationGlobaleTSE = $cotisationGlobaleTSE;

        return $this;
    }

    /**
     * Get cotisationGlobaleTSE
     *
     * @return integer 
     */
    public function getCotisationGlobaleTSE() {
        return $this->cotisationGlobaleTSE;
    }

    public function newTFArticleTaxationNonBati($annee, $chaine) {
        if ($annee >= "2011" && $annee <= "2013") {
            $this->setNumerosequentiel(substr($chaine, 7, 6));
            $this->setBaseC(substr($chaine, 28, 8));
            $this->setBaseIC(substr($chaine, 36, 8));
            $this->setBaseTATFPNB(substr($chaine, 44, 8));
            $this->setBaseTSE(substr($chaine, 60, 8));
            $this->setBaseCA(substr($chaine, 68, 8));
            $this->setBaseCAAA(substr($chaine, 76, 8));
            $this->setBaseTerrainsConstr(substr($chaine, 84, 8));
            $this->setBFF(substr($chaine, 92, 8));
            $this->setCotisationC(substr($chaine, 100, 8));
            $this->setCotisationS(substr($chaine, 108, 8));
            $this->setCotisationIC(substr($chaine, 116, 8));
            $this->setCotisationTATFPNB(substr($chaine, 124, 8));
            $this->setCotisationTSE(substr($chaine, 148, 8));
            $this->setCotisationTSEF(substr($chaine, 148, 8));
            $this->setCotisationCA(substr($chaine, 156, 8));
            $this->setCotisationCAAADF(substr($chaine, 164, 8));
            $this->setCotisationCAAADP(substr($chaine, 172, 8));
            $this->setTotal(substr($chaine, 180, 10));
            $this->setBaseJACLC(substr($chaine, 190, 8));
            $this->setBaseJACLS(substr($chaine, 198, 8));
            $this->setBaseJACLIC(substr($chaine, 206, 8));
            $this->setBaseJAEC(substr($chaine, 214, 8));
            $this->setBaseJAES(substr($chaine, 222, 8));
            $this->setBaseJAEIC(substr($chaine, 230, 8));
            $this->setCotisationJACL(substr($chaine, 238, 8));
            $this->setCotisationJAEtat(substr($chaine, 246, 8));
            $this->setBaseImposableTACetSyndicat(substr($chaine, 254, 8));
            $this->setBaseImposableTAIC(substr($chaine, 262, 8));
            $this->setBaseImposableTAChambreAgriculture(substr($chaine, 270, 8));
            $this->setBaseImposableTACAAA(substr($chaine, 278, 8));
            $this->setCotisationGlobaleTSE(substr($chaine, 286, 9));
        } else {
            $this->setNumerosequentiel(substr($chaine, 7, 6));
            $this->setBaseC(substr($chaine, 28, 8));
            $this->setBaseIC(substr($chaine, 36, 8));
            $this->setBaseTATFPNB(substr($chaine, 44, 8));
            $this->setBaseTSE(substr($chaine, 60, 8));
            $this->setBaseCA(substr($chaine, 68, 8));
            $this->setBaseCAAA(substr($chaine, 76, 8));
            $this->setBaseTerrainsConstr(substr($chaine, 84, 8));
            $this->setBFF(substr($chaine, 92, 8));
            $this->setCotisationC(substr($chaine, 100, 8));
            $this->setCotisationS(substr($chaine, 108, 8));
            $this->setCotisationIC(substr($chaine, 116, 8));
            $this->setCotisationTATFPNB(substr($chaine, 124, 8));
            $this->setCotisationTSE(substr($chaine, 148, 8));
            $this->setCotisationTSEF(substr($chaine, 148, 8));
            $this->setCotisationCA(substr($chaine, 156, 8));
            $this->setCotisationCAAADF(substr($chaine, 164, 8));
            $this->setCotisationCAAADP(substr($chaine, 172, 8));
            $this->setTotal(substr($chaine, 180, 10));
            $this->setBaseJACLC(substr($chaine, 190, 8));
            $this->setBaseJACLS(substr($chaine, 198, 8));
            $this->setBaseJACLIC(substr($chaine, 206, 8));
            $this->setBaseJAEC(substr($chaine, 214, 8));
            $this->setBaseJAES(substr($chaine, 222, 8));
            $this->setBaseJAEIC(substr($chaine, 230, 8));
            $this->setCotisationJACL(substr($chaine, 238, 8));
            $this->setCotisationJAEtat(substr($chaine, 246, 8));
            $this->setBaseImposableTACetSyndicat(substr($chaine, 254, 8));
            $this->setBaseImposableTAIC(substr($chaine, 262, 8));
            $this->setBaseImposableTAChambreAgriculture(substr($chaine, 270, 8));
            $this->setBaseImposableTACAAA(substr($chaine, 278, 8));
            $this->setCotisationGlobaleTSE(substr($chaine, 286, 9));
        }
        return $this;
    }

    /**
     * Set fichier
     *
     * @param \Fiscalite\GestionFiscaliteBundle\Entity\Fichier $fichier
     * @return TFArticleTaxationNonBati
     */
    public function setFichier(\Fiscalite\GestionFiscaliteBundle\Entity\Fichier $fichier = null) {
        $this->fichier = $fichier;

        return $this;
    }

    /**
     * Get fichier
     *
     * @return \Fiscalite\GestionFiscaliteBundle\Entity\Fichier 
     */
    public function getFichier() {
        return $this->fichier;
    }

    /**
     * Set tfarticletaxationcompte
     *
     * @param \Fiscalite\GestionFiscaliteBundle\Entity\TFArticleTaxationCompte $tfarticletaxationcompte
     * @return TFArticleTaxationNonBati
     */
    public function setTfarticletaxationcompte(\Fiscalite\GestionFiscaliteBundle\Entity\TFArticleTaxationCompte $tfarticletaxationcompte = null) {
        $this->tfarticletaxationcompte = $tfarticletaxationcompte;

        return $this;
    }

    /**
     * Get tfarticletaxationcompte
     *
     * @return \Fiscalite\GestionFiscaliteBundle\Entity\TFArticleTaxationCompte 
     */
    public function getTfarticletaxationcompte() {
        return $this->tfarticletaxationcompte;
    }

    /**
     * Set articleTF
     *
     * @param \Fiscalite\GestionFiscaliteBundle\Entity\ArticleTF $articleTF
     * @return TFArticleTaxationNonBati
     */
    public function setArticleTF(\Fiscalite\GestionFiscaliteBundle\Entity\ArticleTF $articleTF = null) {
        $this->articleTF = $articleTF;

        return $this;
    }

    /**
     * Get articleTF
     *
     * @return \Fiscalite\GestionFiscaliteBundle\Entity\ArticleTF 
     */
    public function getArticleTF() {
        return $this->articleTF;
    }

    /**
     * Set bFF
     *
     * @param integer $bFF
     * @return TFArticleTaxationNonBati
     */
    public function setBFF($bFF) {
        $this->bFF = $bFF;

        return $this;
    }

    /**
     * Get bFF
     *
     * @return integer 
     */
    public function getBFF() {
        return $this->bFF;
    }

    /**
     * Set numerosequentiel
     *
     * @param integer $numerosequentiel
     * @return TFArticleTaxationNonBati
     */
    public function setNumerosequentiel($numerosequentiel) {
        $this->numerosequentiel = $numerosequentiel;

        return $this;
    }

    /**
     * Get numerosequentiel
     *
     * @return integer 
     */
    public function getNumerosequentiel() {
        return $this->numerosequentiel;
    }

}
