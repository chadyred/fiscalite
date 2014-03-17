<?php

namespace Fiscalite\GestionFiscaliteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ArticleTFC2
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Fiscalite\GestionFiscaliteBundle\Entity\ArticleTFC2Repository")
 */
class ArticleTFC2 {

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
     * @ORM\Column(name="codeArticle", type="string", length=2)
     */
    private $codeArticle;

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
     * @ORM\Column(name="titreEtDesignation", type="string", length=35)
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
     * @ORM\Column(name="ligneCodePostal", type="string", length=32)
     */
    private $ligneCodePostal;

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
     * @ORM\OneToOne(targetEntity="ArticleTF", inversedBy="articleTFC2", cascade={"persist"})
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
     * Set numerosequentiel
     *
     * @param integer $numerosequentiel
     * @return ArticleTFC2
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

    /**
     * Set codeArticle
     *
     * @param string $codeArticle
     * @return ArticleTFC2
     */
    public function setCodeArticle($codeArticle) {
        $this->codeArticle = $codeArticle;

        return $this;
    }

    /**
     * Get codeArticle
     *
     * @return string 
     */
    public function getCodeArticle() {
        return $this->codeArticle;
    }

    /**
     * Set codeVoie
     *
     * @param string $codeVoie
     * @return ArticleTFC2
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
     * @return ArticleTFC2
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
     * @return ArticleTFC2
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

    /**
     * Set titreEtDesignation
     *
     * @param string $titreEtDesignation
     * @return ArticleTFC2
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
     * @return ArticleTFC2
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
     * @return ArticleTFC2
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
     * @return ArticleTFC2
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
     * @return ArticleTFC2
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
     * Set ligneCodePostal
     *
     * @param string $ligneCodePostal
     * @return ArticleTFC2
     */
    public function setLigneCodePostal($ligneCodePostal) {
        $this->ligneCodePostal = $ligneCodePostal;

        return $this;
    }

    /**
     * Get ligneCodePostal
     *
     * @return string 
     */
    public function getLigneCodePostal() {
        return $this->ligneCodePostal;
    }

    /**
     * Set codeDR
     *
     * @param string $codeDR
     * @return ArticleTFC2
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
     * @return ArticleTFC2
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

    public function newTFArticleTaxationCompteC2($annee, $chaine) {
        if ($annee == "2011") {
            $this->setNumeroSequentiel(substr($chaine, 7, 6));
            $this->setCodeArticle(substr($chaine, 17, 2));
            $this->setCodeVoie(substr($chaine, 19, 4));
            $this->setNumeroImmeuble(substr($chaine, 23, 4));
            $this->setBtq(substr($chaine, 27, 1));
            $this->setTitreEtDesignation(str_replace('-', ' ', substr($chaine, 63, 35)));
            $this->setSuiteDesignation(str_replace('-', ' ', substr($chaine, 98, 32)));
            $this->setComplementAdresse(substr($chaine, 130, 32));
            $this->setLigneVoie(substr($chaine, 162, 32));
            $this->setLigneLieuDit(substr($chaine, 194, 32));
            $this->setLigneCodePostal(substr($chaine, 226, 32));
            $this->setCodeDR(substr($chaine, 258, 1));
            $this->setCodeDEM(substr($chaine, 259, 1));
        } else if ($annee == "2012") {
            $this->setNumeroSequentiel(substr($chaine, 7, 6));
            $this->setCodeArticle(substr($chaine, 17, 2));
            $this->setCodeVoie(substr($chaine, 19, 4));
            $this->setNumeroImmeuble(substr($chaine, 23, 4));
            $this->setBtq(substr($chaine, 27, 1));
            $this->setTitreEtDesignation(str_replace('-', ' ', substr($chaine, 63, 35)));
            $this->setSuiteDesignation(str_replace('-', ' ', substr($chaine, 98, 32)));
            $this->setComplementAdresse(substr($chaine, 130, 32));
            $this->setLigneVoie(substr($chaine, 162, 32));
            $this->setLigneLieuDit(substr($chaine, 194, 32));
            $this->setLigneCodePostal(substr($chaine, 226, 32));
            $this->setCodeDR(substr($chaine, 258, 1));
            $this->setCodeDEM(substr($chaine, 259, 1));
        } else if ($annee == "2013") {
            $this->setNumeroSequentiel(substr($chaine, 7, 6));
            $this->setCodeArticle(substr($chaine, 17, 2));
            $this->setCodeVoie(substr($chaine, 19, 4));
            $this->setNumeroImmeuble(substr($chaine, 23, 4));
            $this->setBtq(substr($chaine, 27, 1));
            $this->setTitreEtDesignation(str_replace('-', ' ', substr($chaine, 63, 35)));
            $this->setSuiteDesignation(str_replace('-', ' ', substr($chaine, 98, 32)));
            $this->setComplementAdresse(substr($chaine, 130, 32));
            $this->setLigneVoie(substr($chaine, 162, 32));
            $this->setLigneLieuDit(substr($chaine, 194, 32));
            $this->setLigneCodePostal(substr($chaine, 226, 32));
            $this->setCodeDR(substr($chaine, 258, 1));
            $this->setCodeDEM(substr($chaine, 259, 1));
        } else {
            $this->setNumeroSequentiel(substr($chaine, 7, 6));
            $this->setCodeArticle(substr($chaine, 17, 2));
            $this->setCodeVoie(substr($chaine, 19, 4));
            $this->setNumeroImmeuble(substr($chaine, 23, 4));
            $this->setBtq(substr($chaine, 27, 1));
            $this->setTitreEtDesignation(str_replace('-', ' ', substr($chaine, 63, 35)));
            $this->setSuiteDesignation(str_replace('-', ' ', substr($chaine, 98, 32)));
            $this->setComplementAdresse(substr($chaine, 130, 32));
            $this->setLigneVoie(substr($chaine, 162, 32));
            $this->setLigneLieuDit(substr($chaine, 194, 32));
            $this->setLigneCodePostal(substr($chaine, 226, 32));
            $this->setCodeDR(substr($chaine, 258, 1));
            $this->setCodeDEM(substr($chaine, 259, 1));
        }
        return $this;
    }



    /**
     * Set articleTF
     *
     * @param \Fiscalite\GestionFiscaliteBundle\Entity\ArticleTF $articleTF
     * @return ArticleTFC2
     */
    public function setArticleTF(\Fiscalite\GestionFiscaliteBundle\Entity\ArticleTF $articleTF = null)
    {
        $this->articleTF = $articleTF;

        return $this;
    }

    /**
     * Get articleTF
     *
     * @return \Fiscalite\GestionFiscaliteBundle\Entity\ArticleTF 
     */
    public function getArticleTF()
    {
        return $this->articleTF;
    }
}
