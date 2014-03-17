<?php

namespace Fiscalite\GestionFiscaliteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ArticleTF
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Fiscalite\GestionFiscaliteBundle\Entity\ArticleTFRepository")
 */
class ArticleTF extends Article {

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
     * @ORM\Column(name="codeDirection", type="string", length=3)
     */
    private $codeDirection;

    /**
     * @var integer
     *
     * @ORM\Column(name="codeCommune", type="integer")
     */
    private $codeCommune;

    /**
     * @var string
     *
     * @ORM\Column(name="codeAdresseTaxation", type="string",length=9 )
     */
    private $codeAdresseTaxation;

    /**
     * @var integer
     *
     * @ORM\Column(name="numeroRole", type="integer")
     */
    private $numeroRole;

    /**
     * @var integer
     *
     * @ORM\Column(name="cTresorerie", type="integer")
     */
    private $cTresorerie;

    /**
     * @var string
     *
     * @ORM\Column(name="cCDIF", type="string", length=4)
     */
    private $cCDIF;

    /**
     * @var string
     *
     * @ORM\Column(name="cSecteur", type="string", length=3)
     */
    private $cSecteur;

    /**
     * @var integer
     *
     * @ORM\Column(name="sommeAPayer", type="integer")
     */
    private $sommeAPayer;

    /**
     * @var integer
     *
     * @ORM\Column(name="cotisationInferieur12", type="integer")
     */
    private $cotisationInferieur12;

    /**
     * @var integer
     *
     * @ORM\Column(name="fraisDeFDL", type="integer")
     */
    private $fraisDeFDL;

    /**
     * @var string
     *
     * @ORM\Column(name="titreEtDesignation", type="string", length=32)
     */
    private $titreEtDesignation;

    /**
     * @var string
     *
     * @ORM\Column(name="suiteDesignation", type="string", length=32)
     */
    private $suiteDesignation;

    /**
     * @var string
     *
     * @ORM\Column(name="complementAdresse", type="string", length=32)
     */
    private $complementAdresse;

    /**
     * @var string
     *
     * @ORM\Column(name="ligneVoie", type="string", length=32)
     */
    private $ligneVoie;

    /**
     * @var string
     *
     * @ORM\Column(name="ligneLieuDit", type="string", length=32)
     */
    private $ligneLieuDit;

    /**
     * @var string
     *
     * @ORM\Column(name="ligneCodePostalEtCommune", type="string", length=32)
     */
    private $ligneCodePostalEtCommune;

    /**
     * @var string
     *
     * @ORM\Column(name="codeDR", type="string", length=1)
     */
    private $codeDR;

    /**
     * @var string
     *
     * @ORM\Column(name="codeDEM", type="string", length=1)
     */
    private $codeDEM;

    /**
     * @var integer
     *
     * @ORM\Column(name="baseECF", type="integer")
     */
    private $baseECF;

    /**
     * @var integer
     *
     * @ORM\Column(name="dECHABPLE", type="integer")
     */
    private $dECHABPLE;

    /**
     * @var string
     *
     * @ORM\Column(name="hCNT", type="string", length=4)
     */
    private $hCNT;

    /**
     * @var string
     *
     * @ORM\Column(name="bOND", type="string", length=4)
     */
    private $bOND;

    /**
     * @ORM\OneToMany(targetEntity="Fiscalite\GestionFiscaliteBundle\Entity\TFArticleTaxationNonBati", mappedBy="articleTF")
     */
    private $tfarticletaxationnonbatis;

    /**
     * @ORM\OneToMany(targetEntity="Fiscalite\GestionFiscaliteBundle\Entity\TFArticleTaxationBati", mappedBy="articleTF")
     */
    private $tfarticletaxationbatis;
    
    /**
    * @ORM\OneToOne(targetEntity="Fiscalite\GestionFiscaliteBundle\Entity\ArticleTFC2", mappedBy="articleTF")
    */
    private $articleTFC2;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set numeroRole
     *
     * @param integer $numeroRole
     * @return ArticleTF
     */
    public function setNumeroRole($numeroRole) {
        $this->numeroRole = $numeroRole;

        return $this;
    }

    /**
     * Get numeroRole
     *
     * @return integer 
     */
    public function getNumeroRole() {
        return $this->numeroRole;
    }

    /**
     * Set cTresorerie
     *
     * @param integer $cTresorerie
     * @return ArticleTF
     */
    public function setCTresorerie($cTresorerie) {
        $this->cTresorerie = $cTresorerie;

        return $this;
    }

    /**
     * Get cTresorerie
     *
     * @return integer 
     */
    public function getCTresorerie() {
        return $this->cTresorerie;
    }

    /**
     * Set cCDIF
     *
     * @param string $cCDIF
     * @return ArticleTF
     */
    public function setCCDIF($cCDIF) {
        $this->cCDIF = $cCDIF;

        return $this;
    }

    /**
     * Get cCDIF
     *
     * @return string 
     */
    public function getCCDIF() {
        return $this->cCDIF;
    }

    /**
     * Set cSecteur
     *
     * @param string $cSecteur
     * @return ArticleTF
     */
    public function setCSecteur($cSecteur) {
        $this->cSecteur = $cSecteur;

        return $this;
    }

    /**
     * Get cSecteur
     *
     * @return string 
     */
    public function getCSecteur() {
        return $this->cSecteur;
    }

    /**
     * Set sommeAPayer
     *
     * @param integer $sommeAPayer
     * @return ArticleTF
     */
    public function setSommeAPayer($sommeAPayer) {
        $this->sommeAPayer = $sommeAPayer;

        return $this;
    }

    /**
     * Get sommeAPayer
     *
     * @return integer 
     */
    public function getSommeAPayer() {
        return $this->sommeAPayer;
    }

    /**
     * Set cotisationInferieur12
     *
     * @param integer $cotisationInferieur12
     * @return ArticleTF
     */
    public function setCotisationInferieur12($cotisationInferieur12) {
        $this->cotisationInferieur12 = $cotisationInferieur12;

        return $this;
    }

    /**
     * Get cotisationInferieur12
     *
     * @return integer 
     */
    public function getCotisationInferieur12() {
        return $this->cotisationInferieur12;
    }

    /**
     * Set fraisDeFDL
     *
     * @param integer $fraisDeFDL
     * @return ArticleTF
     */
    public function setFraisDeFDL($fraisDeFDL) {
        $this->fraisDeFDL = $fraisDeFDL;

        return $this;
    }

    /**
     * Get fraisDeFDL
     *
     * @return integer 
     */
    public function getFraisDeFDL() {
        return $this->fraisDeFDL;
    }

    /**
     * Set titreEtDesignation
     *
     * @param string $titreEtDesignation
     * @return ArticleTF
     */
    public function setTitreEtDesignation($titreEtDesignation) {
        $this->titreEtDesignation = $titreEtDesignation;

        return $this;
    }

    /**
     * Get titreEtDesignation
     *
     * @return string 
     */
    public function getTitreEtDesignation() {
        return $this->titreEtDesignation;
    }

    /**
     * Set suiteDesignation
     *
     * @param string $suiteDesignation
     * @return ArticleTF
     */
    public function setSuiteDesignation($suiteDesignation) {
        $this->suiteDesignation = $suiteDesignation;

        return $this;
    }

    /**
     * Get suiteDesignation
     *
     * @return string 
     */
    public function getSuiteDesignation() {
        return $this->suiteDesignation;
    }

    /**
     * Set complementAdresse
     *
     * @param string $complementAdresse
     * @return ArticleTF
     */
    public function setComplementAdresse($complementAdresse) {
        $this->complementAdresse = $complementAdresse;

        return $this;
    }

    /**
     * Get complementAdresse
     *
     * @return string 
     */
    public function getComplementAdresse() {
        return $this->complementAdresse;
    }

    /**
     * Set ligneVoie
     *
     * @param string $ligneVoie
     * @return ArticleTF
     */
    public function setLigneVoie($ligneVoie) {
        $this->ligneVoie = $ligneVoie;

        return $this;
    }

    /**
     * Get ligneVoie
     *
     * @return string 
     */
    public function getLigneVoie() {
        return $this->ligneVoie;
    }

    /**
     * Set ligneLieuDit
     *
     * @param string $ligneLieuDit
     * @return ArticleTF
     */
    public function setLigneLieuDit($ligneLieuDit) {
        $this->ligneLieuDit = $ligneLieuDit;

        return $this;
    }

    /**
     * Get ligneLieuDit
     *
     * @return string 
     */
    public function getLigneLieuDit() {
        return $this->ligneLieuDit;
    }

    /**
     * Set ligneCodePostalEtCommune
     *
     * @param string $ligneCodePostalEtCommune
     * @return ArticleTF
     */
    public function setLigneCodePostalEtCommune($ligneCodePostalEtCommune) {
        $this->ligneCodePostalEtCommune = $ligneCodePostalEtCommune;

        return $this;
    }

    /**
     * Get ligneCodePostalEtCommune
     *
     * @return string 
     */
    public function getLigneCodePostalEtCommune() {
        return $this->ligneCodePostalEtCommune;
    }

    /**
     * Set codeDR
     *
     * @param string $codeDR
     * @return ArticleTF
     */
    public function setCodeDR($codeDR) {
        $this->codeDR = $codeDR;

        return $this;
    }

    /**
     * Get codeDR
     *
     * @return string 
     */
    public function getCodeDR() {
        return $this->codeDR;
    }

    /**
     * Set codeDEM
     *
     * @param string $codeDEM
     * @return ArticleTF
     */
    public function setCodeDEM($codeDEM) {
        $this->codeDEM = $codeDEM;

        return $this;
    }

    /**
     * Get codeDEM
     *
     * @return string 
     */
    public function getCodeDEM() {
        return $this->codeDEM;
    }

    /**
     * Set baseECF
     *
     * @param integer $baseECF
     * @return ArticleTF
     */
    public function setBaseECF($baseECF) {
        $this->baseECF = $baseECF;

        return $this;
    }

    /**
     * Get baseECF
     *
     * @return integer 
     */
    public function getBaseECF() {
        return $this->baseECF;
    }

    /**
     * Set dECHABPLE
     *
     * @param integer $dECHABPLE
     * @return ArticleTF
     */
    public function setDECHABPLE($dECHABPLE) {
        $this->dECHABPLE = $dECHABPLE;

        return $this;
    }

    /**
     * Get dECHABPLE
     *
     * @return integer 
     */
    public function getDECHABPLE() {
        return $this->dECHABPLE;
    }

    /**
     * Set hCNT
     *
     * @param string $hCNT
     * @return ArticleTF
     */
    public function setHCNT($hCNT) {
        $this->hCNT = $hCNT;

        return $this;
    }

    /**
     * Get hCNT
     *
     * @return string 
     */
    public function getHCNT() {
        return $this->hCNT;
    }

    /**
     * Set bOND
     *
     * @param string $bOND
     * @return ArticleTF
     */
    public function setBOND($bOND) {
        $this->bOND = $bOND;

        return $this;
    }

    /**
     * Get bOND
     *
     * @return string 
     */
    public function getBOND() {
        return $this->bOND;
    }

    /**
     * Constructor
     */
    public function __construct() {
        $this->tfarticletaxationnonbatis = new \Doctrine\Common\Collections\ArrayCollection();
        $this->tfarticletaxationbatis = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add tfarticletaxationnonbatis
     *
     * @param \Fiscalite\GestionFiscaliteBundle\Entity\TFArticleTaxationNonBati $tfarticletaxationnonbatis
     * @return ArticleTF
     */
    public function addTfarticletaxationnonbati(\Fiscalite\GestionFiscaliteBundle\Entity\TFArticleTaxationNonBati $tfarticletaxationnonbatis) {
        $this->tfarticletaxationnonbatis[] = $tfarticletaxationnonbatis;

        return $this;
    }

    /**
     * Remove tfarticletaxationnonbatis
     *
     * @param \Fiscalite\GestionFiscaliteBundle\Entity\TFArticleTaxationNonBati $tfarticletaxationnonbatis
     */
    public function removeTfarticletaxationnonbati(\Fiscalite\GestionFiscaliteBundle\Entity\TFArticleTaxationNonBati $tfarticletaxationnonbatis) {
        $this->tfarticletaxationnonbatis->removeElement($tfarticletaxationnonbatis);
    }

    /**
     * Get tfarticletaxationnonbatis
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTfarticletaxationnonbatis() {
        return $this->tfarticletaxationnonbatis;
    }

    /**
     * Add tfarticletaxationbatis
     *
     * @param \Fiscalite\GestionFiscaliteBundle\Entity\TFArticleTaxationBati $tfarticletaxationbatis
     * @return ArticleTF
     */
    public function addTfarticletaxationbati(\Fiscalite\GestionFiscaliteBundle\Entity\TFArticleTaxationBati $tfarticletaxationbatis) {
        $this->tfarticletaxationbatis[] = $tfarticletaxationbatis;

        return $this;
    }

    /**
     * Remove tfarticletaxationbatis
     *
     * @param \Fiscalite\GestionFiscaliteBundle\Entity\TFArticleTaxationBati $tfarticletaxationbatis
     */
    public function removeTfarticletaxationbati(\Fiscalite\GestionFiscaliteBundle\Entity\TFArticleTaxationBati $tfarticletaxationbatis) {
        $this->tfarticletaxationbatis->removeElement($tfarticletaxationbatis);
    }

    /**
     * Get tfarticletaxationbatis
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTfarticletaxationbatis() {
        return $this->tfarticletaxationbatis;
    }

    public function newTFArticleTaxationCompte($annee, $chaine) {
        if ($annee == "2011") {
            $this->setCodeDirection(substr($chaine, 1, 3));
            $this->setCodeCommune(substr($chaine, 4, 3));
            $this->setNumeroSequentiel(substr($chaine, 7, 6));
            $this->setCodeArticle(substr($chaine, 17, 2));
            $this->setCodeAdresseTaxation(substr($chaine, 19, 9));
            $this->setNumeroRole(substr($chaine, 28, 3));
            $this->setCTresorerie(substr($chaine, 31, 3));
            $this->setCCDIF(substr($chaine, 34, 4));
            $this->setCSecteur(substr($chaine, 38, 3));
            $this->setSommeAPayer(substr($chaine, 41, 10));
            $this->setCotisationInferieur12(substr($chaine, 51, 2));
            $this->setFraisDeFDL(substr($chaine, 53, 10));
            $this->setTitreEtDesignation(str_replace('-', ' ', substr($chaine, 63, 35)));
            $this->setSuiteDesignation(str_replace('-', ' ', substr($chaine, 98, 32)));
            $this->setComplementAdresse(substr($chaine, 130, 32));
            $this->setLigneVoie(substr($chaine, 162, 32));
            $this->setLigneLieuDit(substr($chaine, 194, 32));
            $this->setLigneCodePostalEtCommune(substr($chaine, 226, 32));
            $this->setCodeDR(substr($chaine, 258, 1));
            $this->setCodeDEM(substr($chaine, 259, 1));
            $this->setBaseECF(substr($chaine, 260, 10));
            $this->setDECHABPLE(substr($chaine, 270, 10));
            $this->setHCNT(substr($chaine, 300, 4));
            $this->setBOND(substr($chaine, 304, 4));
        } else if ($annee == "2012") {
            $this->setCodeDirection(substr($chaine, 1, 3));
            $this->setCodeCommune(substr($chaine, 4, 3));
            $this->setNumeroSequentiel(substr($chaine, 7, 6));
            $this->setCodeArticle(substr($chaine, 17, 2));
            $this->setCodeAdresseTaxation(substr($chaine, 19, 9));
            $this->setNumeroRole(substr($chaine, 28, 3));
            $this->setCTresorerie(substr($chaine, 31, 3));
            $this->setCCDIF(substr($chaine, 34, 4));
            $this->setCSecteur(substr($chaine, 38, 3));
            $this->setSommeAPayer(substr($chaine, 41, 10));
            $this->setCotisationInferieur12(substr($chaine, 51, 2));
            $this->setFraisDeFDL(substr($chaine, 53, 10));
            $this->setTitreEtDesignation(str_replace('-', ' ', substr($chaine, 63, 35)));
            $this->setSuiteDesignation(str_replace('-', ' ', substr($chaine, 98, 32)));
            $this->setComplementAdresse(substr($chaine, 130, 32));
            $this->setLigneVoie(substr($chaine, 162, 32));
            $this->setLigneLieuDit(substr($chaine, 194, 32));
            $this->setLigneCodePostalEtCommune(substr($chaine, 226, 32));
            $this->setCodeDR(substr($chaine, 258, 1));
            $this->setCodeDEM(substr($chaine, 259, 1));
            $this->setBaseECF(substr($chaine, 260, 10));
            $this->setDECHABPLE(substr($chaine, 270, 10));
            $this->setHCNT(substr($chaine, 300, 4));
            $this->setBOND(substr($chaine, 304, 4));
        } else if ($annee == "2013") {
            $this->setCodeDirection(substr($chaine, 1, 3));
            $this->setCodeCommune(substr($chaine, 4, 3));
            $this->setNumeroSequentiel(substr($chaine, 7, 6));
            $this->setCodeArticle(substr($chaine, 17, 2));
            $this->setCodeAdresseTaxation(substr($chaine, 19, 9));
            $this->setNumeroRole(substr($chaine, 28, 3));
            $this->setCTresorerie(substr($chaine, 31, 3));
            $this->setCCDIF(substr($chaine, 34, 4));
            $this->setCSecteur(substr($chaine, 38, 3));
            $this->setSommeAPayer(substr($chaine, 41, 10));
            $this->setCotisationInferieur12(substr($chaine, 51, 2));
            $this->setFraisDeFDL(substr($chaine, 53, 10));
            $this->setTitreEtDesignation(str_replace('-', ' ', substr($chaine, 63, 35)));
            $this->setSuiteDesignation(str_replace('-', ' ', substr($chaine, 98, 32)));
            $this->setComplementAdresse(substr($chaine, 130, 32));
            $this->setLigneVoie(substr($chaine, 162, 32));
            $this->setLigneLieuDit(substr($chaine, 194, 32));
            $this->setLigneCodePostalEtCommune(substr($chaine, 226, 32));
            $this->setCodeDR(substr($chaine, 258, 1));
            $this->setCodeDEM(substr($chaine, 259, 1));
            $this->setBaseECF(substr($chaine, 260, 10));
            $this->setDECHABPLE(substr($chaine, 270, 10));
            $this->setHCNT(substr($chaine, 300, 4));
            $this->setBOND(substr($chaine, 304, 4));
        } else {
            $this->setCodeDirection(substr($chaine, 1, 3));
            $this->setCodeCommune(substr($chaine, 4, 3));
            $this->setNumeroSequentiel(substr($chaine, 7, 6));
            $this->setCodeArticle(substr($chaine, 17, 2));
            $this->setCodeAdresseTaxation(substr($chaine, 19, 9));
            $this->setNumeroRole(substr($chaine, 28, 3));
            $this->setCTresorerie(substr($chaine, 31, 3));
            $this->setCCDIF(substr($chaine, 34, 4));
            $this->setCSecteur(substr($chaine, 38, 3));
            $this->setSommeAPayer(substr($chaine, 41, 10));
            $this->setCotisationInferieur12(substr($chaine, 51, 2));
            $this->setFraisDeFDL(substr($chaine, 53, 10));
            $this->setTitreEtDesignation(str_replace('-', ' ', substr($chaine, 63, 35)));
            $this->setSuiteDesignation(str_replace('-', ' ', substr($chaine, 98, 32)));
            $this->setComplementAdresse(substr($chaine, 130, 32));
            $this->setLigneVoie(substr($chaine, 162, 32));
            $this->setLigneLieuDit(substr($chaine, 194, 32));
            $this->setLigneCodePostalEtCommune(substr($chaine, 226, 32));
            $this->setCodeDR(substr($chaine, 258, 1));
            $this->setCodeDEM(substr($chaine, 259, 1));
            $this->setBaseECF(substr($chaine, 260, 10));
            $this->setDECHABPLE(substr($chaine, 270, 10));
            $this->setHCNT(substr($chaine, 300, 4));
            $this->setBOND(substr($chaine, 304, 4));
        }
        return $this;
    }

    /**
     * Set codeDirection
     *
     * @param string $codeDirection
     * @return ArticleTF
     */
    public function setCodeDirection($codeDirection) {
        $this->codeDirection = $codeDirection;

        return $this;
    }

    /**
     * Get codeDirection
     *
     * @return string 
     */
    public function getCodeDirection() {
        return $this->codeDirection;
    }

    /**
     * Set codeCommune
     *
     * @param integer $codeCommune
     * @return ArticleTF
     */
    public function setCodeCommune($codeCommune) {
        $this->codeCommune = $codeCommune;

        return $this;
    }

    /**
     * Get codeCommune
     *
     * @return integer 
     */
    public function getCodeCommune() {
        return $this->codeCommune;
    }

    /**
     * Set codeAdresseTaxation
     *
     * @param string $codeAdresseTaxation
     * @return ArticleTF
     */
    public function setCodeAdresseTaxation($codeAdresseTaxation) {
        $this->codeAdresseTaxation = $codeAdresseTaxation;

        return $this;
    }

    /**
     * Get codeAdresseTaxation
     *
     * @return string 
     */
    public function getCodeAdresseTaxation() {
        return $this->codeAdresseTaxation;
    }

    public function getLibelleCodeDR($codeDR) {
        switch ($codeDR) {
            case "P":
                return "Propriétaire(s) (débiteur légal)";
                break;
            case "U":
                return "Usufruitier (débiteur légal)";
                break;
            case "N":
                return "Nu-propriétaire";
                break;
            case "A":
                return "Locataire-attributaire (débiteur légal)";
                break;
            case "E":
                return "Preneur d'un bail emphytéotique (débiteur légal)";
                break;
            case "D":
                return "Domanier (débiteur légal)";
                break;
            case "F":
                return "Foncier";
                break;
            case "T":
                return "Ténuyer (débiteur légal)";
                break;
            case "R":
                return "Preneur d'un bail à construction (débiteur légal)";
                break;
            case "B":
                return "Bailleur à construction (débiteur légal)";
                break;
            case "W":
                return "Preneur d'un bail à réhabilitation (débiteur légal)";
                break;
            case "V":
                return "Bailleur à réhabilitation (débiteur légal)";
                break;
            case "K":
                return "Antichrésiste (débiteur légal)";
                break;
            case "H":
                return "Associé de la SCI transparente (débiteur légal)";
                break;
            case "O":
                return "Titulaire de l'AOT (débiteur légal)(Autorisation d'Occupation Temporaire du DP)";
                break;
            case "C":
                return "Fiduciaire (depuis 2009)";
                break;
            case "G":
                return "Gestionnaire";
                break;
            case "S":
                return "Syndic";
                break;
        }
    }



    /**
     * Set articleTFC2
     *
     * @param \Fiscalite\GestionFiscaliteBundle\Entity\ArticleTFC2 $articleTFC2
     * @return ArticleTF
     */
    public function setArticleTFC2(\Fiscalite\GestionFiscaliteBundle\Entity\ArticleTFC2 $articleTFC2 = null)
    {
        $this->articleTFC2 = $articleTFC2;

        return $this;
    }

    /**
     * Get articleTFC2
     *
     * @return \Fiscalite\GestionFiscaliteBundle\Entity\ArticleTFC2 
     */
    public function getArticleTFC2()
    {
        return $this->articleTFC2;
    }
}
