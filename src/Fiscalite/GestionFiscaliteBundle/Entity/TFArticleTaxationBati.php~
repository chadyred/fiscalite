<?php

namespace Fiscalite\GestionFiscaliteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TFArticleTaxationBati
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Fiscalite\GestionFiscaliteBundle\Entity\TFArticleTaxationBatiRepository")
 */
class TFArticleTaxationBati {

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
     * @var string
     *
     * @ORM\Column(name="codeVoie", type="string", length=4)
     */
    private $codeVoie;

    /**
     * @var string
     *
     * @ORM\Column(name="numeroImmeuble", type="string", length=4)
     */
    private $numeroImmeuble;

    /**
     * @var string
     *
     * @ORM\Column(name="btq", type="string", length=1)
     */
    private $btq;

    /**
     * @var string
     *
     * @ORM\Column(name="libVoie", type="string", length=30)
     */
    private $libVoie;

    /**
     * @var integer
     *
     * @ORM\Column(name="baseC", type="integer")
     */
    private $baseC;

    /**
     * @var integer
     *
     * @ORM\Column(name="baseS", type="integer")
     */
    private $baseS;

    /**
     * @var integer
     *
     * @ORM\Column(name="baseIC", type="integer")
     */
    private $baseIC;

    /**
     * @var integer
     *
     * @ORM\Column(name="baseD", type="integer")
     */
    private $baseD;

    /**
     * @var integer
     *
     * @ORM\Column(name="baseTSE", type="integer")
     */
    private $baseTSE;

    /**
     * @var integer
     *
     * @ORM\Column(name="baseOM", type="integer")
     */
    private $baseOM;

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
     * @ORM\Column(name="cotisationD", type="integer")
     */
    private $cotisationD;

    /**
     * @var integer
     *
     * @ORM\Column(name="cotisationTSE", type="integer")
     */
    private $cotisationTSE;

    /**
     * @var integer
     *
     * @ORM\Column(name="cotisationTSEetTSEGP", type="integer")
     */
    private $cotisationTSEetTSEGP;

    /**
     * @var integer
     *
     * @ORM\Column(name="cotisationOM", type="integer")
     */
    private $cotisationOM;

    /**
     * @var integer
     *
     * @ORM\Column(name="totalCotisationBatiesHorsFrais", type="integer")
     */
    private $totalCotisationBatiesHorsFrais;

    /**
     * @var string
     *
     * @ORM\Column(name="codeOM", type="string", length=2)
     */
    private $codeOM;
    // ManyToOne //
    /**
     * @ORM\ManyToOne(targetEntity="Fiscalite\GestionFiscaliteBundle\Entity\ArticleTF", inversedBy="tfarticletaxationbatis", cascade={"persist"})
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
     * Set libVoie
     *
     * @param string $libVoie
     * @return TFArticleTaxationBati
     */
    public function setLibVoie($libVoie) {
        $this->libVoie = $libVoie;

        return $this;
    }

    /**
     * Get libVoie
     *
     * @return string 
     */
    public function getLibVoie() {
        return $this->libVoie;
    }

    /**
     * Set baseC
     *
     * @param integer $baseC
     * @return TFArticleTaxationBati
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
     * Set baseS
     *
     * @param integer $baseS
     * @return TFArticleTaxationBati
     */
    public function setBaseS($baseS) {
        $this->baseS = $baseS;

        return $this;
    }

    /**
     * Get baseS
     *
     * @return integer 
     */
    public function getBaseS() {
        return $this->baseS;
    }

    /**
     * Set baseIC
     *
     * @param integer $baseIC
     * @return TFArticleTaxationBati
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
     * Set baseD
     *
     * @param integer $baseD
     * @return TFArticleTaxationBati
     */
    public function setBaseD($baseD) {
        $this->baseD = $baseD;

        return $this;
    }

    /**
     * Get baseD
     *
     * @return integer 
     */
    public function getBaseD() {
        return $this->baseD;
    }

    /**
     * Set baseTSE
     *
     * @param integer $baseTSE
     * @return TFArticleTaxationBati
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
     * Set baseOM
     *
     * @param integer $baseOM
     * @return TFArticleTaxationBati
     */
    public function setBaseOM($baseOM) {
        $this->baseOM = $baseOM;

        return $this;
    }

    /**
     * Get baseOM
     *
     * @return integer 
     */
    public function getBaseOM() {
        return $this->baseOM;
    }

    /**
     * Set cotisationC
     *
     * @param integer $cotisationC
     * @return TFArticleTaxationBati
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
     * @return TFArticleTaxationBati
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
     * @return TFArticleTaxationBati
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
     * Set cotisationD
     *
     * @param integer $cotisationD
     * @return TFArticleTaxationBati
     */
    public function setCotisationD($cotisationD) {
        $this->cotisationD = $cotisationD;

        return $this;
    }

    /**
     * Get cotisationD
     *
     * @return integer 
     */
    public function getCotisationD() {
        return $this->cotisationD;
    }

    /**
     * Set cotisationTSE
     *
     * @param integer $cotisationTSE
     * @return TFArticleTaxationBati
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
     * Set cotisationTSEetTSEGP
     *
     * @param integer $cotisationTSEetTSEGP
     * @return TFArticleTaxationBati
     */
    public function setCotisationTSEetTSEGP($cotisationTSEetTSEGP) {
        $this->cotisationTSEetTSEGP = $cotisationTSEetTSEGP;

        return $this;
    }

    /**
     * Get cotisationTSEetTSEGP
     *
     * @return integer 
     */
    public function getCotisationTSEetTSEGP() {
        return $this->cotisationTSEetTSEGP;
    }

    /**
     * Set cotisationOM
     *
     * @param integer $cotisationOM
     * @return TFArticleTaxationBati
     */
    public function setCotisationOM($cotisationOM) {
        $this->cotisationOM = $cotisationOM;

        return $this;
    }

    /**
     * Get cotisationOM
     *
     * @return integer 
     */
    public function getCotisationOM() {
        return $this->cotisationOM;
    }

    /**
     * Set totalCotisationBatiesHorsFrais
     *
     * @param integer $totalCotisationBatiesHorsFrais
     * @return TFArticleTaxationBati
     */
    public function setTotalCotisationBatiesHorsFrais($totalCotisationBatiesHorsFrais) {
        $this->totalCotisationBatiesHorsFrais = $totalCotisationBatiesHorsFrais;

        return $this;
    }

    /**
     * Get totalCotisationBatiesHorsFrais
     *
     * @return integer 
     */
    public function getTotalCotisationBatiesHorsFrais() {
        return $this->totalCotisationBatiesHorsFrais;
    }

    /**
     * Set codeOM
     *
     * @param string $codeOM
     * @return TFArticleTaxationBati
     */
    public function setCodeOM($codeOM) {
        $this->codeOM = $codeOM;

        return $this;
    }

    /**
     * Get codeOM
     *
     * @return string 
     */
    public function getCodeOM() {
        return $this->codeOM;
    }

    /**
     * Set fichier
     *
     * @param \Fiscalite\GestionFiscaliteBundle\Entity\Fichier $fichier
     * @return TFArticleTaxationBati
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

    public function newTFArticleTaxationBati($annee, $chaine) {
        if ($annee == "2011") {
            $this->setNumerosequentiel(substr($chaine, 7, 6));
            $this->setCodeVoie(substr($chaine, 19, 4));
            $this->setNumeroImmeuble(substr($chaine, 23, 4));
            $this->setBtq(substr($chaine, 27, 1));
            $this->setLibVoie(substr($chaine, 28, 30));
            $this->setBaseC(substr($chaine, 58, 10));
            $this->setBaseS(substr($chaine, 68, 10));
            $this->setBaseIC(substr($chaine, 78, 10));
            $this->setBaseD(substr($chaine, 88, 10));
            $this->setBaseTSE(substr($chaine, 118, 10));
            $this->setBaseOM(substr($chaine, 128, 10));
            $this->setCotisationC(substr($chaine, 148, 9));
            $this->setCotisationS(substr($chaine, 157, 9));
            $this->setCotisationIC(substr($chaine, 166, 9));
            $this->setCotisationD(substr($chaine, 175, 9));
            $this->setCotisationTSE(substr($chaine, 193, 9));
            $this->setCotisationTSEetTSEGP(substr($chaine, 202, 9));
            $this->setCotisationOM(substr($chaine, 211, 9));
            $this->setTotalCotisationBatiesHorsFrais(substr($chaine, 229, 9));
            $this->setCodeOM(substr($chaine, 238, 2));
        } else if ($annee == "2012") {
            $this->setNumerosequentiel(substr($chaine, 7, 6));
            $this->setCodeVoie(substr($chaine, 19, 4));
            $this->setNumeroImmeuble(substr($chaine, 23, 4));
            $this->setBtq(substr($chaine, 27, 1));
            $this->setLibVoie(substr($chaine, 28, 30));
            $this->setBaseC(substr($chaine, 58, 10));
            $this->setBaseS(substr($chaine, 68, 10));
            $this->setBaseIC(substr($chaine, 78, 10));
            $this->setBaseD(substr($chaine, 88, 10));
            $this->setBaseTSE(substr($chaine, 118, 10));
            $this->setBaseOM(substr($chaine, 128, 10));
            $this->setCotisationC(substr($chaine, 148, 9));
            $this->setCotisationS(substr($chaine, 157, 9));
            $this->setCotisationIC(substr($chaine, 166, 9));
            $this->setCotisationD(substr($chaine, 175, 9));
            $this->setCotisationTSE(substr($chaine, 193, 9));
            $this->setCotisationTSEetTSEGP(substr($chaine, 202, 9));
            $this->setCotisationOM(substr($chaine, 211, 9));
            $this->setTotalCotisationBatiesHorsFrais(substr($chaine, 229, 9));
            $this->setCodeOM(substr($chaine, 238, 2));
        } else if ($annee == "2013") {
            $this->setNumerosequentiel(substr($chaine, 7, 6));
            $this->setCodeVoie(substr($chaine, 19, 4));
            $this->setNumeroImmeuble(substr($chaine, 23, 4));
            $this->setBtq(substr($chaine, 27, 1));
            $this->setLibVoie(substr($chaine, 28, 30));
            $this->setBaseC(substr($chaine, 58, 10));
            $this->setBaseS(substr($chaine, 68, 10));
            $this->setBaseIC(substr($chaine, 78, 10));
            $this->setBaseD(substr($chaine, 88, 10));
            $this->setBaseTSE(substr($chaine, 118, 10));
            $this->setBaseOM(substr($chaine, 128, 10));
            $this->setCotisationC(substr($chaine, 148, 9));
            $this->setCotisationS(substr($chaine, 157, 9));
            $this->setCotisationIC(substr($chaine, 166, 9));
            $this->setCotisationD(substr($chaine, 175, 9));
            $this->setCotisationTSE(substr($chaine, 193, 9));
            $this->setCotisationTSEetTSEGP(substr($chaine, 202, 9));
            $this->setCotisationOM(substr($chaine, 211, 9));
            $this->setTotalCotisationBatiesHorsFrais(substr($chaine, 229, 9));
            $this->setCodeOM(substr($chaine, 238, 2));
        } else {
            $this->setNumerosequentiel(substr($chaine, 7, 6));
            $this->setCodeVoie(substr($chaine, 19, 4));
            $this->setNumeroImmeuble(substr($chaine, 23, 4));
            $this->setBtq(substr($chaine, 27, 1));
            $this->setLibVoie(substr($chaine, 28, 30));
            $this->setBaseC(substr($chaine, 58, 10));
            $this->setBaseS(substr($chaine, 68, 10));
            $this->setBaseIC(substr($chaine, 78, 10));
            $this->setBaseD(substr($chaine, 88, 10));
            $this->setBaseTSE(substr($chaine, 118, 10));
            $this->setBaseOM(substr($chaine, 128, 10));
            $this->setCotisationC(substr($chaine, 148, 9));
            $this->setCotisationS(substr($chaine, 157, 9));
            $this->setCotisationIC(substr($chaine, 166, 9));
            $this->setCotisationD(substr($chaine, 175, 9));
            $this->setCotisationTSE(substr($chaine, 193, 9));
            $this->setCotisationTSEetTSEGP(substr($chaine, 202, 9));
            $this->setCotisationOM(substr($chaine, 211, 9));
            $this->setTotalCotisationBatiesHorsFrais(substr($chaine, 229, 9));
            $this->setCodeOM(substr($chaine, 238, 2));
        }
        return $this;
    }

    /**
     * Set tfarticletaxationcompte
     *
     * @param \Fiscalite\GestionFiscaliteBundle\Entity\TFArticleTaxationCompte $tfarticletaxationcompte
     * @return TFArticleTaxationBati
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
     * @return TFArticleTaxationBati
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
     * Set codeVoie
     *
     * @param string $codeVoie
     * @return TFArticleTaxationBati
     */
    public function setCodeVoie($codeVoie) {
        $this->codeVoie = $codeVoie;

        return $this;
    }

    /**
     * Get codeVoie
     *
     * @return string 
     */
    public function getCodeVoie() {
        return $this->codeVoie;
    }

    /**
     * Set numeroImmeuble
     *
     * @param string $numeroImmeuble
     * @return TFArticleTaxationBati
     */
    public function setNumeroImmeuble($numeroImmeuble) {
        $this->numeroImmeuble = $numeroImmeuble;

        return $this;
    }

    /**
     * Get numeroImmeuble
     *
     * @return string 
     */
    public function getNumeroImmeuble() {
        return $this->numeroImmeuble;
    }

    /**
     * Set btq
     *
     * @param string $btq
     * @return TFArticleTaxationBati
     */
    public function setBtq($btq) {
        $this->btq = $btq;

        return $this;
    }

    /**
     * Get btq
     *
     * @return string 
     */
    public function getBtq() {
        return $this->btq;
    }

    public function getAdresseComplete() {
        return $this->codeVoie + "" + $this->numeroImmeuble + "" + $this->btq + "" + $this->libVoie;
    }

    /**
     * Set numerosequentiel
     *
     * @param integer $numerosequentiel
     * @return TFArticleTaxationBati
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
