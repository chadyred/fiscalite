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
     * @ORM\OneToMany(targetEntity="Fiscalite\GestionFiscaliteBundle\Entity\TFArticleTaxationNonBati", mappedBy="articleTF", cascade={"persist","remove"})
     */
    private $tfarticletaxationnonbatis;

    /**
     * @ORM\OneToMany(targetEntity="Fiscalite\GestionFiscaliteBundle\Entity\TFArticleTaxationBati", mappedBy="articleTF", cascade={"persist","remove"})
     */
    private $tfarticletaxationbatis;

    /**
     * @ORM\OneToOne(targetEntity="Fiscalite\GestionFiscaliteBundle\Entity\ArticleTFC2", mappedBy="articleTF", cascade={"persist","remove"})
     */
    private $articleTFC2;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return parent::getId();
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
    public function setArticleTFC2(\Fiscalite\GestionFiscaliteBundle\Entity\ArticleTFC2 $articleTFC2 = null) {
        $this->articleTFC2 = $articleTFC2;

        return $this;
    }

    /**
     * Get articleTFC2
     *
     * @return \Fiscalite\GestionFiscaliteBundle\Entity\ArticleTFC2 
     */
    public function getArticleTFC2() {
        return $this->articleTFC2;
    }

    public function setTableauTF2(SimulationTF $simulation) {
        $sommeTotalBati = 0;
        $cotisationFraisCompris = 0;
        $cotisationCommune = 0;
        $cotisationCommuneBDD = 0;
        $cotisationSyndicats = 0;
        $cotisationIntercommunalite = 0;
        $cotisationD = 0;
        $cotisationTSE = 0;
        $cotisationTSEGP = 0;
        $cotisationOM = 0;
        $cotisationTEOMRA = 0;
        $cotisationTEOMRBRCRD = 0;
        $baseCommune = 0;
        $baseSyndicats = 0;
        $baseIntercommunalite = 0;
        $baseD = 0;
        $baseTSE = 0;
        $baseTSEGP = 0;
        $baseOM = 0;
        $baseTEOMRA = 0;
        $baseTEOMRBRCRD = 0;
        foreach ($this->getTfarticletaxationbatis() as $bati) {
            $sommeTotalBati+=$bati->getTotalCotisationBatiesHorsFrais();
            $baseCommune += $bati->getBaseC();
            $cotisationCommune += round($bati->getBaseC() * $simulation->getSimulationArticleTF()->getTauxBatiCommune() / 100);
            $cotisationCommuneBDD += $bati->getCotisationC();
            $cotisationSyndicats += $bati->getCotisationS();
            $cotisationIntercommunalite += $bati->getCotisationIC();
            $cotisationD += $bati->getCotisationD();
            $cotisationTSE += $bati->getCotisationTSEetTSEGP();
            $cotisationOM += $bati->getCotisationOM();
            $baseSyndicats += $bati->getBaseS();
            $baseIntercommunalite += $bati->getBaseIC();
            $baseD += $bati->getBaseD();
            $baseTSE += $bati->getBaseTSE();
            $baseOM += $bati->getBaseOM();
        }
        $cotisationFraisCompris = $sommeTotalBati + $this->getFraisDeFDL();
        if ($this->getTfarticletaxationbatis() == null) {
            $simulation->setVecteur(2, 2, $simulation->getVecteur(2, 2) + 1);
        } else if ($sommeTotalBati == 0) {
            $simulation->setVecteur(4, 2, $simulation->getVecteur(4, 2) + 1);
        } else if ($sommeTotalBati >= 1 && $sommeTotalBati <= 11) {
            $simulation->setVecteur(5, 2, $simulation->getVecteur(5, 2) + 1);
            $simulation->setVecteur(5, 3, $simulation->getVecteur(5, 3) + $cotisationFraisCompris);
            $simulation->setVecteur(5, 4, $simulation->getVecteur(5, 4) + $cotisationCommune);
            $simulation->setVecteurBDD(5, 4, $simulation->getVecteurBDD(5, 4) + $cotisationCommuneBDD);
            $simulation->setVecteur(5, 5, $simulation->getVecteur(5, 5) + $cotisationSyndicats);
            $simulation->setVecteur(5, 6, $simulation->getVecteur(5, 6) + $cotisationIntercommunalite);
            $simulation->setVecteur(5, 7, $simulation->getVecteur(5, 7) + $cotisationD);
            $simulation->setVecteur(5, 8, $simulation->getVecteur(5, 8) + $cotisationTSE);
            $simulation->setVecteur(5, 9, $simulation->getVecteur(5, 9) + $cotisationTSEGP);
            $simulation->setVecteur(5, 10, $simulation->getVecteur(5, 10) + $cotisationOM);
            $simulation->setVecteur(5, 11, $simulation->getVecteur(5, 11) + $cotisationTEOMRA);
            $simulation->setVecteur(5, 12, $simulation->getVecteur(5, 12) + $cotisationTEOMRBRCRD);
        } else if ($sommeTotalBati >= 12 && $sommeTotalBati <= 149) {
            $simulation->setVecteur(6, 2, $simulation->getVecteur(6, 2) + 1);
            $simulation->setVecteur(6, 3, $simulation->getVecteur(6, 3) + $cotisationFraisCompris);
            $simulation->setVecteur(6, 4, $simulation->getVecteur(6, 4) + $cotisationCommune);
            $simulation->setVecteurBDD(6, 4, $simulation->getVecteurBDD(6, 4) + $cotisationCommuneBDD);
            $simulation->setVecteur(6, 5, $simulation->getVecteur(6, 5) + $cotisationSyndicats);
            $simulation->setVecteur(6, 6, $simulation->getVecteur(6, 6) + $cotisationIntercommunalite);
            $simulation->setVecteur(6, 7, $simulation->getVecteur(6, 7) + $cotisationD);
            $simulation->setVecteur(6, 8, $simulation->getVecteur(6, 8) + $cotisationTSE);
            $simulation->setVecteur(6, 9, $simulation->getVecteur(6, 9) + $cotisationTSEGP);
            $simulation->setVecteur(6, 10, $simulation->getVecteur(6, 10) + $cotisationOM);
            $simulation->setVecteur(6, 11, $simulation->getVecteur(6, 11) + $cotisationTEOMRA);
            $simulation->setVecteur(6, 12, $simulation->getVecteur(6, 12) + $cotisationTEOMRBRCRD);
        } else if ($sommeTotalBati >= 150 && $sommeTotalBati <= 449) {
            $simulation->setVecteur(7, 2, $simulation->getVecteur(7, 2) + 1);
            $simulation->setVecteur(7, 3, $simulation->getVecteur(7, 3) + $cotisationFraisCompris);
            $simulation->setVecteur(7, 4, $simulation->getVecteur(7, 4) + $cotisationCommune);
            $simulation->setVecteurBDD(7, 4, $simulation->getVecteurBDD(7, 4) + $cotisationCommuneBDD);
            $simulation->setVecteur(7, 5, $simulation->getVecteur(7, 5) + $cotisationSyndicats);
            $simulation->setVecteur(7, 6, $simulation->getVecteur(7, 6) + $cotisationIntercommunalite);
            $simulation->setVecteur(7, 7, $simulation->getVecteur(7, 7) + $cotisationD);
            $simulation->setVecteur(7, 8, $simulation->getVecteur(7, 8) + $cotisationTSE);
            $simulation->setVecteur(7, 9, $simulation->getVecteur(7, 9) + $cotisationTSEGP);
            $simulation->setVecteur(7, 10, $simulation->getVecteur(7, 10) + $cotisationOM);
            $simulation->setVecteur(7, 11, $simulation->getVecteur(7, 11) + $cotisationTEOMRA);
            $simulation->setVecteur(7, 12, $simulation->getVecteur(7, 12) + $cotisationTEOMRBRCRD);
        } else if ($sommeTotalBati >= 450 && $sommeTotalBati <= 749) {
            $simulation->setVecteur(8, 2, $simulation->getVecteur(8, 2) + 1);
            $simulation->setVecteur(8, 3, $simulation->getVecteur(8, 3) + $cotisationFraisCompris);
            $simulation->setVecteur(8, 4, $simulation->getVecteur(8, 4) + $cotisationCommune);
            $simulation->setVecteurBDD(8, 4, $simulation->getVecteurBDD(8, 4) + $cotisationCommuneBDD);
            $simulation->setVecteur(8, 5, $simulation->getVecteur(8, 5) + $cotisationSyndicats);
            $simulation->setVecteur(8, 6, $simulation->getVecteur(8, 6) + $cotisationIntercommunalite);
            $simulation->setVecteur(8, 7, $simulation->getVecteur(8, 7) + $cotisationD);
            $simulation->setVecteur(8, 8, $simulation->getVecteur(8, 8) + $cotisationTSE);
            $simulation->setVecteur(8, 9, $simulation->getVecteur(8, 9) + $cotisationTSEGP);
            $simulation->setVecteur(8, 10, $simulation->getVecteur(8, 10) + $cotisationOM);
            $simulation->setVecteur(8, 11, $simulation->getVecteur(8, 11) + $cotisationTEOMRA);
            $simulation->setVecteur(8, 12, $simulation->getVecteur(8, 12) + $cotisationTEOMRBRCRD);
        } else if ($sommeTotalBati >= 750 && $sommeTotalBati <= 1524) {
            $simulation->setVecteur(9, 2, $simulation->getVecteur(9, 2) + 1);
            $simulation->setVecteur(9, 3, $simulation->getVecteur(9, 3) + $cotisationFraisCompris);
            $simulation->setVecteur(9, 4, $simulation->getVecteur(9, 4) + $cotisationCommune);
            $simulation->setVecteurBDD(9, 4, $simulation->getVecteurBDD(9, 4) + $cotisationCommuneBDD);
            $simulation->setVecteur(9, 5, $simulation->getVecteur(9, 5) + $cotisationSyndicats);
            $simulation->setVecteur(9, 6, $simulation->getVecteur(9, 6) + $cotisationIntercommunalite);
            $simulation->setVecteur(9, 7, $simulation->getVecteur(9, 7) + $cotisationD);
            $simulation->setVecteur(9, 8, $simulation->getVecteur(9, 8) + $cotisationTSE);
            $simulation->setVecteur(9, 9, $simulation->getVecteur(9, 9) + $cotisationTSEGP);
            $simulation->setVecteur(9, 10, $simulation->getVecteur(9, 10) + $cotisationOM);
            $simulation->setVecteur(9, 11, $simulation->getVecteur(9, 11) + $cotisationTEOMRA);
            $simulation->setVecteur(9, 12, $simulation->getVecteur(9, 12) + $cotisationTEOMRBRCRD);
        } else if ($sommeTotalBati >= 1525) {
            $simulation->setVecteur(10, 2, $simulation->getVecteur(10, 2) + 1);
            $simulation->setVecteur(10, 3, $simulation->getVecteur(10, 3) + $cotisationFraisCompris);
            $simulation->setVecteur(10, 4, $simulation->getVecteur(10, 4) + $cotisationCommune);
            $simulation->setVecteurBDD(10, 4, $simulation->getVecteurBDD(10, 4) + $cotisationCommuneBDD);
            $simulation->setVecteur(10, 5, $simulation->getVecteur(10, 5) + $cotisationSyndicats);
            $simulation->setVecteur(10, 6, $simulation->getVecteur(10, 6) + $cotisationIntercommunalite);
            $simulation->setVecteur(10, 7, $simulation->getVecteur(10, 7) + $cotisationD);
            $simulation->setVecteur(10, 8, $simulation->getVecteur(10, 8) + $cotisationTSE);
            $simulation->setVecteur(10, 9, $simulation->getVecteur(10, 9) + $cotisationTSEGP);
            $simulation->setVecteur(10, 10, $simulation->getVecteur(10, 10) + $cotisationOM);
            $simulation->setVecteur(10, 11, $simulation->getVecteur(10, 11) + $cotisationTEOMRA);
            $simulation->setVecteur(10, 12, $simulation->getVecteur(10, 12) + $cotisationTEOMRBRCRD);
        }

        $simulation->setVecteur(11, 2, $simulation->getVecteur(11, 2) + 1);
        $simulation->setVecteur(11, 3, $simulation->getVecteur(11, 3) + $cotisationFraisCompris);
        $simulation->setVecteur(11, 4, $simulation->getVecteur(11, 4) + $cotisationCommune);
        $simulation->setVecteurBDD(11, 4, $simulation->getVecteurBDD(11, 4) + $cotisationCommuneBDD);
        $simulation->setVecteur(11, 5, $simulation->getVecteur(11, 5) + $cotisationSyndicats);
        $simulation->setVecteur(11, 6, $simulation->getVecteur(11, 6) + $cotisationIntercommunalite);
        $simulation->setVecteur(11, 7, $simulation->getVecteur(11, 7) + $cotisationD);
        $simulation->setVecteur(11, 8, $simulation->getVecteur(11, 8) + $cotisationTSE);
        $simulation->setVecteur(11, 9, $simulation->getVecteur(11, 9) + $cotisationTSEGP);
        $simulation->setVecteur(11, 10, $simulation->getVecteur(11, 10) + $cotisationOM);
        $simulation->setVecteur(11, 11, $simulation->getVecteur(11, 11) + $cotisationTEOMRA);
        $simulation->setVecteur(11, 12, $simulation->getVecteur(11, 12) + $cotisationTEOMRBRCRD);

        $simulation->setVecteur(3, 4, $simulation->getVecteur(3, 4) + $cotisationCommune);
        $simulation->setVecteurBDD(3, 4, $simulation->getVecteurBDD(3, 4) + $cotisationCommuneBDD);
        $simulation->setVecteur(3, 5, $simulation->getVecteur(3, 5) + $cotisationSyndicats);
        $simulation->setVecteur(3, 6, $simulation->getVecteur(3, 6) + $cotisationIntercommunalite);
        $simulation->setVecteur(3, 7, $simulation->getVecteur(3, 7) + $cotisationD);
        $simulation->setVecteur(3, 8, $simulation->getVecteur(3, 8) + $cotisationTSE);
        $simulation->setVecteur(3, 9, $simulation->getVecteur(3, 9) + $cotisationTSEGP);
        $simulation->setVecteur(3, 10, $simulation->getVecteur(3, 10) + $cotisationOM);
        $simulation->setVecteur(3, 11, $simulation->getVecteur(3, 11) + $cotisationTEOMRA);
        $simulation->setVecteur(3, 12, $simulation->getVecteur(3, 12) + $cotisationTEOMRBRCRD);

        $simulation->setVecteur(1, 4, $simulation->getVecteur(1, 4) + $baseCommune);
        $simulation->setVecteur(1, 5, $simulation->getVecteur(1, 5) + $baseSyndicats);
        $simulation->setVecteur(1, 6, $simulation->getVecteur(1, 6) + $baseIntercommunalite);
        $simulation->setVecteur(1, 7, $simulation->getVecteur(1, 7) + $baseD);
        $simulation->setVecteur(1, 8, $simulation->getVecteur(1, 8) + $baseTSE);
        $simulation->setVecteur(1, 9, $simulation->getVecteur(1, 9) + $baseTSEGP);
        $simulation->setVecteur(1, 10, $simulation->getVecteur(1, 10) + $baseOM);
        $simulation->setVecteur(1, 11, $simulation->getVecteur(1, 11) + $baseTEOMRA);
        $simulation->setVecteur(1, 12, $simulation->getVecteur(1, 12) + $baseTEOMRBRCRD);

/////////////////////////////////////////////////////////////////////////////////////////////
        $sommeTotalNonBati = 0;
        $cotisationFraisCompris = 0;
        $cotisationCommune = 0;
        $cotisationCommuneBDD = 0;
        $cotisationSyndicats = 0;
        $cotisationIntercommunalite = 0;
        $cotisationD = 0;
        $cotisationTSE = 0;
        $cotisationTSEGP = 0;
        $cotisationCA = 0;
        $cotisationTEOMRA = 0;
        $cotisationCAAA = 0;
        $baseCommune = 0;
        $baseSyndicats = 0;
        $baseIntercommunalite = 0;
        $baseD = 0;
        $baseTSE = 0;
        $baseTSEGP = 0;
        $baseCA = 0;
        $baseTEOMRA = 0;
        $baseCAAA = 0;
        $baseTerrainsConstr = 0;
        $baseCommunaleSupp = 0;
        $tarifMajoration = 0;
        $fraisDegrevement = 0;
        foreach ($this->getTfarticletaxationnonbatis() as $nonbati) {
            $sommeTotalNonBati+=$nonbati->getTotal();
            $baseCommune+= $nonbati->getBaseC() + $nonbati->getBaseImposableTACetSyndicat();
            $cotisationCommune += round(($nonbati->getBaseC() + $nonbati->getBaseImposableTACetSyndicat()) * $simulation->getSimulationArticleTF()->getTauxNonBatiCommune() / 100);
            $cotisationCommuneBDD += $nonbati->getCotisationC();
            $cotisationSyndicats += $nonbati->getCotisationS();
            $cotisationIntercommunalite += $nonbati->getCotisationIC();
            $cotisationD += $nonbati->getCotisationTATFPNB();
            $cotisationTSE += $nonbati->getCotisationTSE();
            $cotisationTSEGP += $nonbati->getCotisationGlobaleTSE();
            $cotisationCA += $nonbati->getCotisationCA();
            $cotisationCAAA +=$nonbati->getCotisationCAAADF() + $nonbati->getCotisationCAAADP();
            $baseIntercommunalite += $nonbati->getBaseIC() + $nonbati->getBaseImposableTAIC();
            $baseD += $nonbati->getBaseTATFPNB();
            $baseTSE += $nonbati->getBaseTSE();
            $baseCA += $nonbati->getBaseCA() + $nonbati->getBaseImposableTAChambreAgriculture();
            $baseCAAA +=$nonbati->getBaseCAAA() + $nonbati->getBaseImposableTACAAA();
            $baseTerrainsConstr+= $nonbati->getBaseTerrainsConstr();
        }

        $cotisationFraisCompris = $sommeTotalNonBati;

        if ($sommeTotalNonBati == 0) {
            $simulation->setVecteur(13, 2, $simulation->getVecteur(13, 2) + 1);
        } else if ($sommeTotalNonBati >= 1 && $sommeTotalNonBati <= 11) {
            $simulation->setVecteur(16, 2, $simulation->getVecteur(16, 2) + 1);
            $simulation->setVecteur(16, 3, $simulation->getVecteur(16, 3) + $cotisationFraisCompris);
            $simulation->setVecteur(16, 4, $simulation->getVecteur(16, 4) + $cotisationCommune);
            $simulation->setVecteurBDD(16, 4, $simulation->getVecteurBDD(16, 4) + $cotisationCommuneBDD);
            $simulation->setVecteur(16, 5, $simulation->getVecteur(16, 5) + $cotisationSyndicats);
            $simulation->setVecteur(16, 6, $simulation->getVecteur(16, 6) + $cotisationIntercommunalite);
            $simulation->setVecteur(16, 7, $simulation->getVecteur(16, 7) + $cotisationD);
            $simulation->setVecteur(16, 8, $simulation->getVecteur(16, 8) + $cotisationTSE);
            $simulation->setVecteur(16, 9, $simulation->getVecteur(16, 9) + $cotisationTSEGP);
            $simulation->setVecteur(16, 10, $simulation->getVecteur(16, 10) + $cotisationCA);
            $simulation->setVecteur(16, 12, $simulation->getVecteur(16, 12) + $cotisationCAAA);
        } else if ($sommeTotalNonBati >= 12 && $sommeTotalNonBati <= 74) {
            $simulation->setVecteur(17, 2, $simulation->getVecteur(17, 2) + 1);
            $simulation->setVecteur(17, 3, $simulation->getVecteur(17, 3) + $cotisationFraisCompris);
            $simulation->setVecteur(17, 4, $simulation->getVecteur(17, 4) + $cotisationCommune);
            $simulation->setVecteurBDD(17, 4, $simulation->getVecteurBDD(17, 4) + $cotisationCommuneBDD);
            $simulation->setVecteur(17, 5, $simulation->getVecteur(17, 5) + $cotisationSyndicats);
            $simulation->setVecteur(17, 6, $simulation->getVecteur(17, 6) + $cotisationIntercommunalite);
            $simulation->setVecteur(17, 7, $simulation->getVecteur(17, 7) + $cotisationD);
            $simulation->setVecteur(17, 8, $simulation->getVecteur(17, 8) + $cotisationTSE);
            $simulation->setVecteur(17, 9, $simulation->getVecteur(17, 9) + $cotisationTSEGP);
            $simulation->setVecteur(17, 10, $simulation->getVecteur(17, 10) + $cotisationCA);
            $simulation->setVecteur(17, 12, $simulation->getVecteur(17, 12) + $cotisationCAAA);
        } else if ($sommeTotalNonBati >= 75 && $sommeTotalNonBati <= 299) {
            $simulation->setVecteur(18, 2, $simulation->getVecteur(18, 2) + 1);
            $simulation->setVecteur(18, 3, $simulation->getVecteur(18, 3) + $cotisationFraisCompris);
            $simulation->setVecteur(18, 4, $simulation->getVecteur(18, 4) + $cotisationCommune);
            $simulation->setVecteurBDD(18, 4, $simulation->getVecteurBDD(18, 4) + $cotisationCommuneBDD);
            $simulation->setVecteur(18, 5, $simulation->getVecteur(18, 5) + $cotisationSyndicats);
            $simulation->setVecteur(18, 6, $simulation->getVecteur(18, 6) + $cotisationIntercommunalite);
            $simulation->setVecteur(18, 7, $simulation->getVecteur(18, 7) + $cotisationD);
            $simulation->setVecteur(18, 8, $simulation->getVecteur(18, 8) + $cotisationTSE);
            $simulation->setVecteur(18, 9, $simulation->getVecteur(18, 9) + $cotisationTSEGP);
            $simulation->setVecteur(18, 10, $simulation->getVecteur(18, 10) + $cotisationCA);
            $simulation->setVecteur(18, 12, $simulation->getVecteur(18, 12) + $cotisationCAAA);
        } else if ($sommeTotalNonBati >= 300 && $sommeTotalNonBati <= 749) {
            $simulation->setVecteur(19, 2, $simulation->getVecteur(19, 2) + 1);
            $simulation->setVecteur(19, 3, $simulation->getVecteur(19, 3) + $cotisationFraisCompris);
            $simulation->setVecteur(19, 4, $simulation->getVecteur(19, 4) + $cotisationCommune);
            $simulation->setVecteurBDD(19, 4, $simulation->getVecteurBDD(19, 4) + $cotisationCommuneBDD);
            $simulation->setVecteur(19, 5, $simulation->getVecteur(19, 5) + $cotisationSyndicats);
            $simulation->setVecteur(19, 6, $simulation->getVecteur(19, 6) + $cotisationIntercommunalite);
            $simulation->setVecteur(19, 7, $simulation->getVecteur(19, 7) + $cotisationD);
            $simulation->setVecteur(19, 8, $simulation->getVecteur(19, 8) + $cotisationTSE);
            $simulation->setVecteur(19, 9, $simulation->getVecteur(19, 9) + $cotisationTSEGP);
            $simulation->setVecteur(19, 10, $simulation->getVecteur(19, 10) + $cotisationCA);
            $simulation->setVecteur(19, 12, $simulation->getVecteur(19, 12) + $cotisationCAAA);
        } else if ($sommeTotalNonBati >= 750) {
            $simulation->setVecteur(20, 2, $simulation->getVecteur(20, 2) + 1);
            $simulation->setVecteur(20, 3, $simulation->getVecteur(20, 3) + $cotisationFraisCompris);
            $simulation->setVecteur(20, 4, $simulation->getVecteur(20, 4) + $cotisationCommune);
            $simulation->setVecteurBDD(20, 4, $simulation->getVecteurBDD(20, 4) + $cotisationCommuneBDD);
            $simulation->setVecteur(20, 5, $simulation->getVecteur(20, 5) + $cotisationSyndicats);
            $simulation->setVecteur(20, 6, $simulation->getVecteur(20, 6) + $cotisationIntercommunalite);
            $simulation->setVecteur(20, 7, $simulation->getVecteur(20, 7) + $cotisationD);
            $simulation->setVecteur(20, 8, $simulation->getVecteur(20, 8) + $cotisationTSE);
            $simulation->setVecteur(20, 9, $simulation->getVecteur(20, 9) + $cotisationTSEGP);
            $simulation->setVecteur(20, 10, $simulation->getVecteur(20, 10) + $cotisationCA);
            $simulation->setVecteur(20, 12, $simulation->getVecteur(20, 12) + $cotisationCAAA);
        }
        $simulation->setVecteur(21, 2, $simulation->getVecteur(21, 2) + 1);
        $simulation->setVecteur(21, 3, $simulation->getVecteur(21, 3) + $cotisationFraisCompris);
        $simulation->setVecteur(21, 4, $simulation->getVecteur(21, 4) + $cotisationCommune);
        $simulation->setVecteurBDD(21, 4, $simulation->getVecteurBDD(21, 4) + $cotisationCommuneBDD);
        $simulation->setVecteur(21, 5, $simulation->getVecteur(21, 5) + $cotisationSyndicats);
        $simulation->setVecteur(21, 6, $simulation->getVecteur(21, 6) + $cotisationIntercommunalite);
        $simulation->setVecteur(21, 7, $simulation->getVecteur(21, 7) + $cotisationD);
        $simulation->setVecteur(21, 8, $simulation->getVecteur(21, 8) + $cotisationTSE);
        $simulation->setVecteur(21, 9, $simulation->getVecteur(21, 9) + $cotisationTSEGP);
        $simulation->setVecteur(21, 10, $simulation->getVecteur(21, 10) + $cotisationCA);
        $simulation->setVecteur(21, 12, $simulation->getVecteur(21, 12) + $cotisationCAAA);

        $simulation->setVecteur(14, 7, $simulation->getVecteur(14, 7) + $cotisationD);
        $simulation->setVecteur(14, 8, $simulation->getVecteur(14, 8) + $cotisationTSE);
        $simulation->setVecteur(14, 9, $simulation->getVecteur(14, 9) + $cotisationTSEGP);
        $simulation->setVecteur(14, 10, $simulation->getVecteur(14, 10) + $cotisationCA);
        $simulation->setVecteur(14, 12, $simulation->getVecteur(14, 12) + $cotisationCAAA);

        $simulation->setVecteur(12, 5, $simulation->getVecteur(12, 5) + $baseSyndicats);
        $simulation->setVecteur(12, 4, $simulation->getVecteur(12, 4) + $baseCommune);
        $simulation->setVecteur(12, 6, $simulation->getVecteur(12, 6) + $baseIntercommunalite);
        $simulation->setVecteur(12, 7, $simulation->getVecteur(12, 7) + $baseD);
        $simulation->setVecteur(12, 8, $simulation->getVecteur(12, 8) + $baseTSE);
        $simulation->setVecteur(12, 9, $simulation->getVecteur(12, 9) + $baseTSEGP);
        $simulation->setVecteur(12, 10, $simulation->getVecteur(12, 10) + $baseCA);
        $simulation->setVecteur(12, 12, $simulation->getVecteur(12, 12) + $baseCAAA);


        $simulation->setVecteur(22, 2, $simulation->getVecteur(22, 2) + $baseTerrainsConstr);
        $simulation->setVecteur(22, 3, $simulation->getVecteur(22, 3) + $baseTerrainsConstr);
        $simulation->setVecteur(22, 4, $simulation->getVecteur(22, 4) + $baseTerrainsConstr);
        $simulation->setVecteur(22, 5, $simulation->getVecteur(22, 5) + $baseTerrainsConstr);
        $simulation->setVecteur(22, 7, $simulation->getVecteur(22, 7) + $baseCommunaleSupp);
        $simulation->setVecteur(22, 9, $simulation->getVecteur(22, 9) + $tarifMajoration);
    }

    public function setTableauTF2Taux(SimulationTF $simulation) {
        $baseCommune = $simulation->getArticleCommuneSRA3()->getTotBNC();
        $cotisationCommune = round($baseCommune * $simulation->getSimulationArticleTF()->getTauxNonBatiCommune() / 100);
        $cotisationCommuneBDD = $simulation->getArticleCommuneSRA3()->getTotCNC();
        $simulation->setVecteur(14, 4, $simulation->getVecteur(14, 4) + $cotisationCommune);
        $simulation->setVecteurBDD(14, 4, $simulation->getVecteurBDD(14, 4) + $cotisationCommuneBDD);
        $cotisationSyndicats = $simulation->getArticleCommuneSRA3()->getTotCNS();
        $cotisationIntercommunalite = $simulation->getArticleCommuneSRA3()->getTotCNI();
        $simulation->setVecteur(14, 5, $simulation->getVecteur(14, 5) + $cotisationSyndicats);
        $simulation->setVecteur(14, 6, $simulation->getVecteur(14, 6) + $cotisationIntercommunalite);

        $simulation->setVecteur(1, 3, "Base");
        $simulation->setVecteur(2, 3, "Taux");
        $simulation->setVecteur(3, 3, "Produit");
        $simulation->setVecteur(12, 3, "Base");
        $simulation->setVecteur(13, 3, "Taux");
        $simulation->setVecteur(14, 3, "Produit");
        $simulation->setVecteur(2, 4, $simulation->getSimulationArticleTF()->getTauxBatiCommune());
        $simulation->setVecteur(13, 4, $simulation->getSimulationArticleTF()->getTauxNonBatiCommune());
        $simulation->setVecteur(2, 5, $simulation->getArticleCommuneIFP()->getTXBS());
        $simulation->setVecteur(13, 5, $simulation->getArticleCommuneIFP()->getTXNS());
        $simulation->setVecteur(2, 6, $simulation->getArticleCommuneIFP()->getTXBIC());
        $simulation->setVecteur(13, 6, $simulation->getArticleCommuneIFP()->getTXNIC());
        $simulation->setVecteur(2, 7, $simulation->getArticleCommuneEnTete()->getTXBD());
        $simulation->setVecteur(13, 7, $simulation->getArticleCommuneIFP()->getTXNTATFPNB());
        $simulation->setVecteur(2, 8, $simulation->getArticleCommuneIFP()->getTXBTSEF());
        $simulation->setVecteur(13, 8, $simulation->getArticleCommuneIFP()->getTXNTSEF());
        $simulation->setVecteur(2, 9, 0);
        $simulation->setVecteur(13, 9, 0);
        $simulation->setVecteur(2, 10, $simulation->getArticleCommuneIFP()->getTXBTOMP());
        $simulation->setVecteur(13, 10, $simulation->getArticleCommuneEnTete()->getTXNCA());
        $simulation->setVecteur(2, 11, $simulation->getArticleCommuneIFP()->getTXBTOMRA());
        $simulation->setVecteur(13, 11, $simulation->getArticleCommuneIFP()->getTXBTOMRA());
        $simulation->setVecteur(2, 12, $simulation->getArticleCommuneIFP()->getTXBTOMRB() + $simulation->getArticleCommuneIFP()->getTXBTOMRC() + $simulation->getArticleCommuneIFP()->getTXBTOMRD());
        $simulation->setVecteur(13, 12, $simulation->getArticleCommuneIFP()->getTXNCAAA());

        $simulation->setVecteur(23, 2, $simulation->getArticleCommuneSRA3()->getTotDegJACL());
        $simulation->setVecteur(23, 3, $simulation->getArticleCommuneSRA3()->getTotDegJACL());
        $simulation->setVecteur(23, 4, $simulation->getArticleCommuneSRA3()->getTotDegJACL());
        $simulation->setVecteur(23, 5, $simulation->getArticleCommuneSRA3()->getTotDegJACL());
        $simulation->setVecteur(23, 6, $simulation->getArticleCommuneSRA3()->getTotDegJACL());
        $simulation->setVecteur(23, 10, "Non renseigné");
        $simulation->setVecteur(23, 11, $simulation->getArticleCommuneSRA3()->getTotDegECF());
        $simulation->setVecteur(23, 12, "Non renseigné");


        $simulation->setVecteur(24, 2, $simulation->getArticleCommuneSRA3()->getTotDegJAEt());
        $simulation->setVecteur(24, 3, $simulation->getArticleCommuneSRA3()->getTotDegJAEt());
        $simulation->setVecteur(24, 4, $simulation->getArticleCommuneSRA3()->getTotDegJAEt());
        $simulation->setVecteur(24, 5, $simulation->getArticleCommuneSRA3()->getTotDegJAEt());
        $simulation->setVecteur(24, 6, $simulation->getArticleCommuneSRA3()->getTotDegJAEt());
        $simulation->setVecteur(24, 7, $simulation->getArticleCommuneSRA3()->getTotDegJAEt());
        $simulation->setVecteur(24, 8, "Non renseigné");
        $simulation->setVecteur(24, 9, "Non renseigné");
    }

    public function setTableauTF5(SimulationTF $simulation) {
        $simulation->setVecteur(25, 1, $simulation->getArticleCommuneSRA3()->getTotFrais());
    }

    public function setTableauTF5bis(SimulationTF $simulation) {
        $simulation->setVecteur(26, 1, "Non renseigné");
        $simulation->setVecteur(26, 2, "Non renseigné");
        $simulation->setVecteur(26, 3, "Non renseigné");
        $simulation->setVecteur(26, 4, "Non renseigné");
        $simulation->setVecteur(26, 5, "Non renseigné");
        $simulation->setVecteur(26, 6, "Non renseigné");
        $simulation->setVecteur(26, 7, "Non renseigné");
        $simulation->setVecteur(26, 8, "Non renseigné");
    }

    public function setTableauTF6(SimulationTF $simulation) {
        $simulation->setVecteur(27, 1, $simulation->getVecteur(27, 1) + 1);
        $simulation->setVecteur(27, 2, $simulation->getArticleCommuneSRA3()->getTotMER());
    }

    public function setTableauTF7(SimulationTF $simulation) {
        if ($this->getSommeAPayer() > 0) {
            $simulation->setVecteur(28, 1, $simulation->getVecteur(28, 1) + 1);
            $simulation->setVecteur(28, 3, $simulation->getVecteur(28, 3) + $this->getSommeAPayer());
            if ($this->getBOND() == "B   " || $this->getBOND() == "  ND" ||
                    $this->getBOND() == "   D" || $this->getBOND() == "B  D" ||
                    $this->getBOND() == "  N " || $this->getBOND() == "B ND" ||
                    $this->getBOND() == "B N " || $this->getBOND() == "    ") {
                $simulation->setVecteur(28, 2, $simulation->getVecteur(28, 2) + 1);
            }
        } else if ($this->getSommeAPayer() == 0) {
            $simulation->setVecteur(28, 4, $simulation->getVecteur(28, 4) + 1);
            if ($this->getSommeAPayer() == 0 && $this->getCotisationInferieur12() == 0) {
                $simulation->setVecteur(28, 5, $simulation->getVecteur(28, 5) + 1);
            }
            if ($this->getCotisationInferieur12() >= 1 && $this->getCotisationInferieur12() <= 11) {
                $simulation->setVecteur(28, 6, $simulation->getVecteur(28, 6) + 1);
                $simulation->setVecteur(28, 7, $simulation->getVecteur(28, 7) + $this->getCotisationInferieur12());
            }
        }
    }

    public function setTableauTF8(SimulationTF $simulation) {
        $simulation->setVecteur(29, 1, "0*");
        $simulation->setVecteur(30, 1, "1-11 (non valeur)");
        $simulation->setVecteur(31, 1, "12-74");
        $simulation->setVecteur(32, 1, "75-299");
        $simulation->setVecteur(33, 1, "300-749");
        $simulation->setVecteur(34, 1, ">=750");
        $simulation->setVecteur(35, 1, "TOTAL");
        if ($this->getSommeAPayer() == 0 && $this->getCotisationInferieur12() == 0) {
            $simulation->setVecteur(29, 2, $simulation->getVecteur(29, 2) + 1);
            $simulation->setVecteur(29, 3, $simulation->getVecteur(29, 3) + $this->getSommeAPayer() + $this->getCotisationInferieur12());
        } else if ($this->getCotisationInferieur12() >= 1 && $this->getCotisationInferieur12() <= 11) {
            $simulation->setVecteur(30, 2, $simulation->getVecteur(30, 2) + 1);
            $simulation->setVecteur(30, 3, $simulation->getVecteur(30, 3) + $this->getSommeAPayer() + $this->getCotisationInferieur12());
        } else if ($this->getSommeAPayer() >= 12 && $this->getSommeAPayer() <= 74) {
            $simulation->setVecteur(31, 2, $simulation->getVecteur(31, 2) + 1);
            $simulation->setVecteur(31, 3, $simulation->getVecteur(31, 3) + $this->getSommeAPayer());
        } else if ($this->getSommeAPayer() >= 75 && $this->getSommeAPayer() <= 299) {
            $simulation->setVecteur(32, 2, $simulation->getVecteur(32, 2) + 1);
            $simulation->setVecteur(32, 3, $simulation->getVecteur(32, 3) + $this->getSommeAPayer());
        } else if ($this->getSommeAPayer() >= 300 && $this->getSommeAPayer() <= 749) {
            $simulation->setVecteur(33, 2, $simulation->getVecteur(33, 2) + 1);
            $simulation->setVecteur(33, 3, $simulation->getVecteur(33, 3) + $this->getSommeAPayer());
        } else if ($this->getSommeAPayer() >= 750) {
            $simulation->setVecteur(34, 2, $simulation->getVecteur(34, 2) + 1);
            $simulation->setVecteur(34, 3, $simulation->getVecteur(34, 3) + $this->getSommeAPayer());
        }
        $simulation->setVecteur(35, 2, $simulation->getVecteur(35, 2) + 1);
        $simulation->setVecteur(35, 3, $simulation->getVecteur(35, 3) + $this->getSommeAPayer() + $this->getCotisationInferieur12());
    }

}
