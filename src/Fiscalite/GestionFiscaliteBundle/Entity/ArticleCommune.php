<?php

namespace Fiscalite\GestionFiscaliteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ArticleCommune
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Fiscalite\GestionFiscaliteBundle\Entity\ArticleCommuneRepository")
 */
class ArticleCommune {

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
     * @ORM\Column(name="vlmCne", type="integer")
     */
    private $vlmCne;

    /**
     * @var integer
     *
     * @ORM\Column(name="vlmICO", type="integer")
     */
    private $vlmICO;

    /**
     * @var integer
     *
     * @ORM\Column(name="vlmDept", type="integer")
     */
    private $vlmDept;

    /**
     * @var float
     *
     * @ORM\Column(name="TauxImpositionCommune", type="float")
     */
    private $tauxImpositionCommune;

    /**
     * @var float
     *
     * @ORM\Column(name="TauxImpositionSyndicats", type="float")
     */
    private $tauxImpositionSyndicats;

    /**
     * @var float
     *
     * @ORM\Column(name="TauxImpositionIntercommunalite", type="float")
     */
    private $tauxImpositionIntercommunalite;

    /**
     * @var float
     *
     * @ORM\Column(name="TauxImpositionTSE", type="float")
     */
    private $tauxImpositionTSE;

    /**
     * @var integer
     *
     * @ORM\Column(name="quotiteAbattementGeneralBaseCommuneSansAjustement", type="integer")
     */
    private $quotiteAbattementGeneralBaseCommuneSansAjustement;

    /**
     * @var integer
     *
     * @ORM\Column(name="quotiteAbattementGeneralBaseCommuneAvecAjustement", type="integer")
     */
    private $quotiteAbattementGeneralBaseCommuneAvecAjustement;

    /**
     * @var integer
     *
     * @ORM\Column(name="quotiteAbattementPAC12CommuneSansAjustement", type="integer")
     */
    private $quotiteAbattementPAC12CommuneSansAjustement;

    /**
     * @var integer
     *
     * @ORM\Column(name="quotiteAbattementPAC12CommuneAvecAjustement", type="integer")
     */
    private $quotiteAbattementPAC12CommuneAvecAjustement;

    /**
     * @var integer
     *
     * @ORM\Column(name="quotiteAbattementPAC3CommuneSansAjustement", type="integer")
     */
    private $quotiteAbattementPAC3CommuneSansAjustement;

    /**
     * @var integer
     *
     * @ORM\Column(name="quotiteAbattementPAC3CommuneAvecAjustement", type="integer")
     */
    private $quotiteAbattementPAC3CommuneAvecAjustement;

    /**
     * @var integer
     *
     * @ORM\Column(name="quotiteAbattementSpecialBaseCommuneSansAjustement", type="integer")
     */
    private $quotiteAbattementSpecialBaseCommuneSansAjustement;

    /**
     * @var integer
     *
     * @ORM\Column(name="quotiteAbattementSpecialBaseCommuneAvecAjustement", type="integer")
     */
    private $quotiteAbattementSpecialBaseCommuneAvecAjustement;

    /**
     * @var integer
     *
     * @ORM\Column(name="quotiteAbattementSpecialHandicapeCommuneSansAjustement", type="integer")
     */
    private $quotiteAbattementSpecialHandicapeCommuneSansAjustement;

    /**
     * @var integer
     *
     * @ORM\Column(name="quotiteAbattementSpecialHandicapeCommuneAvecAjustement", type="integer")
     */
    private $quotiteAbattementSpecialHandicapeCommuneAvecAjustement;

    /**
     * @var integer
     *
     * @ORM\Column(name="quotiteAbattementGeneralBaseInterCoApresAjustement", type="integer")
     */
    private $quotiteAbattementGeneralBaseInterCoApresAjustement;

    /**
     * @var integer
     *
     * @ORM\Column(name="quotiteAbattementPAC12InterCoApresAjustement", type="integer")
     */
    private $quotiteAbattementPAC12InterCoApresAjustement;

    /**
     * @var integer
     *
     * @ORM\Column(name="quotiteAbattementPAC3InterCoApresAjustement", type="integer")
     */
    private $quotiteAbattementPAC3InterCoApresAjustement;

    /**
     * @var integer
     *
     * @ORM\Column(name="quotiteAbattementSpecialBaseInterCoApresAjustement", type="integer")
     */
    private $quotiteAbattementSpecialBaseInterCoApresAjustement;

    /**
     * @var integer
     *
     * @ORM\Column(name="quotiteAbattementSpecialHandicapeInterCoApresAjustement", type="integer")
     */
    private $quotiteAbattementSpecialHandicapeInterCoApresAjustement;

    /**
     * @ORM\OneToOne(targetEntity="Fiscalite\GestionFiscaliteBundle\Entity\Fichier", inversedBy="articlesCommune", cascade={"persist","remove"})
     */
    private $fichier;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set vlmCne
     *
     * @param integer $vlmCne
     * @return ArticleCommune
     */
    public function setVlmCne($vlmCne) {
        $this->vlmCne = $vlmCne;

        return $this;
    }

    /**
     * Get vlmCne
     *
     * @return integer 
     */
    public function getVlmCne() {
        return $this->vlmCne;
    }

    /**
     * Set vlmICO
     *
     * @param integer $vlmICO
     * @return ArticleCommune
     */
    public function setVlmICO($vlmICO) {
        $this->vlmICO = $vlmICO;

        return $this;
    }

    /**
     * Get vlmICO
     *
     * @return integer 
     */
    public function getVlmICO() {
        return $this->vlmICO;
    }

    /**
     * Set vlmDept
     *
     * @param integer $vlmDept
     * @return ArticleCommune
     */
    public function setVlmDept($vlmDept) {
        $this->vlmDept = $vlmDept;

        return $this;
    }

    /**
     * Get vlmDept
     *
     * @return integer 
     */
    public function getVlmDept() {
        return $this->vlmDept;
    }

    /**
     * Set tauxImpositionCommune
     *
     * @param float $tauxImpositionCommune
     * @return ArticleCommune
     */
    public function setTauxImpositionCommune($tauxImpositionCommune) {
        $this->tauxImpositionCommune = $tauxImpositionCommune;

        return $this;
    }

    /**
     * Get tauxImpositionCommune
     *
     * @return float 
     */
    public function getTauxImpositionCommune() {
        return $this->tauxImpositionCommune;
    }

    /**
     * Set tauxImpositionSyndicats
     *
     * @param float $tauxImpositionSyndicats
     * @return ArticleCommune
     */
    public function setTauxImpositionSyndicats($tauxImpositionSyndicats) {
        $this->tauxImpositionSyndicats = $tauxImpositionSyndicats;

        return $this;
    }

    /**
     * Get tauxImpositionSyndicats
     *
     * @return float 
     */
    public function getTauxImpositionSyndicats() {
        return $this->tauxImpositionSyndicats;
    }

    /**
     * Set tauxImpositionIntercommunalite
     *
     * @param float $tauxImpositionIntercommunalite
     * @return ArticleCommune
     */
    public function setTauxImpositionIntercommunalite($tauxImpositionIntercommunalite) {
        $this->tauxImpositionIntercommunalite = $tauxImpositionIntercommunalite;

        return $this;
    }

    /**
     * Get tauxImpositionIntercommunalite
     *
     * @return float 
     */
    public function getTauxImpositionIntercommunalite() {
        return $this->tauxImpositionIntercommunalite;
    }

    /**
     * Set tauxImpositionTSE
     *
     * @param float $tauxImpositionTSE
     * @return ArticleCommune
     */
    public function setTauxImpositionTSE($tauxImpositionTSE) {
        $this->tauxImpositionTSE = $tauxImpositionTSE;

        return $this;
    }

    /**
     * Get tauxImpositionTSE
     *
     * @return float 
     */
    public function getTauxImpositionTSE() {
        return $this->tauxImpositionTSE;
    }


    /**
     * Set quotiteAbattementGeneralBaseCommuneSansAjustement
     *
     * @param integer $quotiteAbattementGeneralBaseCommuneSansAjustement
     * @return ArticleCommune
     */
    public function setQuotiteAbattementGeneralBaseCommuneSansAjustement($quotiteAbattementGeneralBaseCommuneSansAjustement) {
        $this->quotiteAbattementGeneralBaseCommuneSansAjustement = $quotiteAbattementGeneralBaseCommuneSansAjustement;

        return $this;
    }

    /**
     * Get quotiteAbattementGeneralBaseCommuneSansAjustement
     *
     * @return integer 
     */
    public function getQuotiteAbattementGeneralBaseCommuneSansAjustement() {
        return $this->quotiteAbattementGeneralBaseCommuneSansAjustement;
    }

    /**
     * Set quotiteAbattementGeneralBaseCommuneAvecAjustement
     *
     * @param integer $quotiteAbattementGeneralBaseCommuneAvecAjustement
     * @return ArticleCommune
     */
    public function setQuotiteAbattementGeneralBaseCommuneAvecAjustement($quotiteAbattementGeneralBaseCommuneAvecAjustement) {
        $this->quotiteAbattementGeneralBaseCommuneAvecAjustement = $quotiteAbattementGeneralBaseCommuneAvecAjustement;

        return $this;
    }

    /**
     * Get quotiteAbattementGeneralBaseCommuneAvecAjustement
     *
     * @return integer 
     */
    public function getQuotiteAbattementGeneralBaseCommuneAvecAjustement() {
        return $this->quotiteAbattementGeneralBaseCommuneAvecAjustement;
    }

    /**
     * Set quotiteAbattementPAC12CommuneSansAjustement
     *
     * @param integer $quotiteAbattementPAC12CommuneSansAjustement
     * @return ArticleCommune
     */
    public function setQuotiteAbattementPAC12CommuneSansAjustement($quotiteAbattementPAC12CommuneSansAjustement) {
        $this->quotiteAbattementPAC12CommuneSansAjustement = $quotiteAbattementPAC12CommuneSansAjustement;

        return $this;
    }

    /**
     * Get quotiteAbattementPAC12CommuneSansAjustement
     *
     * @return integer 
     */
    public function getQuotiteAbattementPAC12CommuneSansAjustement() {
        return $this->quotiteAbattementPAC12CommuneSansAjustement;
    }

    /**
     * Set quotiteAbattementPAC12CommuneAvecAjustement
     *
     * @param integer $quotiteAbattementPAC12CommuneAvecAjustement
     * @return ArticleCommune
     */
    public function setQuotiteAbattementPAC12CommuneAvecAjustement($quotiteAbattementPAC12CommuneAvecAjustement) {
        $this->quotiteAbattementPAC12CommuneAvecAjustement = $quotiteAbattementPAC12CommuneAvecAjustement;

        return $this;
    }

    /**
     * Get quotiteAbattementPAC12CommuneAvecAjustement
     *
     * @return integer 
     */
    public function getQuotiteAbattementPAC12CommuneAvecAjustement() {
        return $this->quotiteAbattementPAC12CommuneAvecAjustement;
    }

    /**
     * Set quotiteAbattementPAC3CommuneSansAjustement
     *
     * @param integer $quotiteAbattementPAC3CommuneSansAjustement
     * @return ArticleCommune
     */
    public function setQuotiteAbattementPAC3CommuneSansAjustement($quotiteAbattementPAC3CommuneSansAjustement) {
        $this->quotiteAbattementPAC3CommuneSansAjustement = $quotiteAbattementPAC3CommuneSansAjustement;

        return $this;
    }

    /**
     * Get quotiteAbattementPAC3CommuneSansAjustement
     *
     * @return integer 
     */
    public function getQuotiteAbattementPAC3CommuneSansAjustement() {
        return $this->quotiteAbattementPAC3CommuneSansAjustement;
    }

    /**
     * Set quotiteAbattementPAC3CommuneAvecAjustement
     *
     * @param integer $quotiteAbattementPAC3CommuneAvecAjustement
     * @return ArticleCommune
     */
    public function setQuotiteAbattementPAC3CommuneAvecAjustement($quotiteAbattementPAC3CommuneAvecAjustement) {
        $this->quotiteAbattementPAC3CommuneAvecAjustement = $quotiteAbattementPAC3CommuneAvecAjustement;

        return $this;
    }

    /**
     * Get quotiteAbattementPAC3CommuneAvecAjustement
     *
     * @return integer 
     */
    public function getQuotiteAbattementPAC3CommuneAvecAjustement() {
        return $this->quotiteAbattementPAC3CommuneAvecAjustement;
    }

    /**
     * Set quotiteAbattementSpecialBaseCommuneSansAjustement
     *
     * @param integer $quotiteAbattementSpecialBaseCommuneSansAjustement
     * @return ArticleCommune
     */
    public function setQuotiteAbattementSpecialBaseCommuneSansAjustement($quotiteAbattementSpecialBaseCommuneSansAjustement) {
        $this->quotiteAbattementSpecialBaseCommuneSansAjustement = $quotiteAbattementSpecialBaseCommuneSansAjustement;

        return $this;
    }

    /**
     * Get quotiteAbattementSpecialBaseCommuneSansAjustement
     *
     * @return integer 
     */
    public function getQuotiteAbattementSpecialBaseCommuneSansAjustement() {
        return $this->quotiteAbattementSpecialBaseCommuneSansAjustement;
    }

    /**
     * Set quotiteAbattementSpecialBaseCommuneAvecAjustement
     *
     * @param integer $quotiteAbattementSpecialBaseCommuneAvecAjustement
     * @return ArticleCommune
     */
    public function setQuotiteAbattementSpecialBaseCommuneAvecAjustement($quotiteAbattementSpecialBaseCommuneAvecAjustement) {
        $this->quotiteAbattementSpecialBaseCommuneAvecAjustement = $quotiteAbattementSpecialBaseCommuneAvecAjustement;

        return $this;
    }

    /**
     * Get quotiteAbattementSpecialBaseCommuneAvecAjustement
     *
     * @return integer 
     */
    public function getQuotiteAbattementSpecialBaseCommuneAvecAjustement() {
        return $this->quotiteAbattementSpecialBaseCommuneAvecAjustement;
    }

    /**
     * Set quotiteAbattementSpecialHandicapeCommuneSansAjustement
     *
     * @param integer $quotiteAbattementSpecialHandicapeCommuneSansAjustement
     * @return ArticleCommune
     */
    public function setQuotiteAbattementSpecialHandicapeCommuneSansAjustement($quotiteAbattementSpecialHandicapeCommuneSansAjustement) {
        $this->quotiteAbattementSpecialHandicapeCommuneSansAjustement = $quotiteAbattementSpecialHandicapeCommuneSansAjustement;

        return $this;
    }

    /**
     * Get quotiteAbattementSpecialHandicapeCommuneSansAjustement
     *
     * @return integer 
     */
    public function getQuotiteAbattementSpecialHandicapeCommuneSansAjustement() {
        return $this->quotiteAbattementSpecialHandicapeCommuneSansAjustement;
    }

    /**
     * Set quotiteAbattementSpecialHandicapeCommuneAvecAjustement
     *
     * @param integer $quotiteAbattementSpecialHandicapeCommuneAvecAjustement
     * @return ArticleCommune
     */
    public function setQuotiteAbattementSpecialHandicapeCommuneAvecAjustement($quotiteAbattementSpecialHandicapeCommuneAvecAjustement) {
        $this->quotiteAbattementSpecialHandicapeCommuneAvecAjustement = $quotiteAbattementSpecialHandicapeCommuneAvecAjustement;

        return $this;
    }

    /**
     * Get quotiteAbattementSpecialHandicapeCommuneAvecAjustement
     *
     * @return integer 
     */
    public function getQuotiteAbattementSpecialHandicapeCommuneAvecAjustement() {
        return $this->quotiteAbattementSpecialHandicapeCommuneAvecAjustement;
    }

    /**
     * Set quotiteAbattementGeneralBaseInterCoApresAjustement
     *
     * @param integer $quotiteAbattementGeneralBaseInterCoApresAjustement
     * @return ArticleCommune
     */
    public function setQuotiteAbattementGeneralBaseInterCoApresAjustement($quotiteAbattementGeneralBaseInterCoApresAjustement) {
        $this->quotiteAbattementGeneralBaseInterCoApresAjustement = $quotiteAbattementGeneralBaseInterCoApresAjustement;

        return $this;
    }

    /**
     * Get quotiteAbattementGeneralBaseInterCoApresAjustement
     *
     * @return integer 
     */
    public function getQuotiteAbattementGeneralBaseInterCoApresAjustement() {
        return $this->quotiteAbattementGeneralBaseInterCoApresAjustement;
    }

    /**
     * Set quotiteAbattementPAC12InterCoApresAjustement
     *
     * @param integer $quotiteAbattementPAC12InterCoApresAjustement
     * @return ArticleCommune
     */
    public function setQuotiteAbattementPAC12InterCoApresAjustement($quotiteAbattementPAC12InterCoApresAjustement) {
        $this->quotiteAbattementPAC12InterCoApresAjustement = $quotiteAbattementPAC12InterCoApresAjustement;

        return $this;
    }

    /**
     * Get quotiteAbattementPAC12InterCoApresAjustement
     *
     * @return integer 
     */
    public function getQuotiteAbattementPAC12InterCoApresAjustement() {
        return $this->quotiteAbattementPAC12InterCoApresAjustement;
    }

    /**
     * Set quotiteAbattementPAC3InterCoApresAjustement
     *
     * @param integer $quotiteAbattementPAC3InterCoApresAjustement
     * @return ArticleCommune
     */
    public function setQuotiteAbattementPAC3InterCoApresAjustement($quotiteAbattementPAC3InterCoApresAjustement) {
        $this->quotiteAbattementPAC3InterCoApresAjustement = $quotiteAbattementPAC3InterCoApresAjustement;

        return $this;
    }

    /**
     * Get quotiteAbattementPAC3InterCoApresAjustement
     *
     * @return integer 
     */
    public function getQuotiteAbattementPAC3InterCoApresAjustement() {
        return $this->quotiteAbattementPAC3InterCoApresAjustement;
    }

    /**
     * Set quotiteAbattementSpecialBaseInterCoApresAjustement
     *
     * @param integer $quotiteAbattementSpecialBaseInterCoApresAjustement
     * @return ArticleCommune
     */
    public function setQuotiteAbattementSpecialBaseInterCoApresAjustement($quotiteAbattementSpecialBaseInterCoApresAjustement) {
        $this->quotiteAbattementSpecialBaseInterCoApresAjustement = $quotiteAbattementSpecialBaseInterCoApresAjustement;

        return $this;
    }

    /**
     * Get quotiteAbattementSpecialBaseInterCoApresAjustement
     *
     * @return integer 
     */
    public function getQuotiteAbattementSpecialBaseInterCoApresAjustement() {
        return $this->quotiteAbattementSpecialBaseInterCoApresAjustement;
    }

    /**
     * Set quotiteAbattementSpecialHandicapeInterCoApresAjustement
     *
     * @param integer $quotiteAbattementSpecialHandicapeInterCoApresAjustement
     * @return ArticleCommune
     */
    public function setQuotiteAbattementSpecialHandicapeInterCoApresAjustement($quotiteAbattementSpecialHandicapeInterCoApresAjustement) {
        $this->quotiteAbattementSpecialHandicapeInterCoApresAjustement = $quotiteAbattementSpecialHandicapeInterCoApresAjustement;

        return $this;
    }

    /**
     * Get quotiteAbattementSpecialHandicapeInterCoApresAjustement
     *
     * @return integer 
     */
    public function getQuotiteAbattementSpecialHandicapeInterCoApresAjustement() {
        return $this->quotiteAbattementSpecialHandicapeInterCoApresAjustement;
    }

    public function newArticleCommune($annee, $chaine) {
        $pourcentage = 100000;
        if ($annee >= "2011" && $annee < "2013") {
            $this->setVlmCne(substr($chaine, 100, 8));
            $this->setVlmDept(substr($chaine, 116, 8));
            $this->setVlmICO(substr($chaine, 108, 8));
            $this->setTauxImpositionCommune(substr($chaine, 133, 8) / $pourcentage);
            $this->setTauxImpositionIntercommunalite(substr($chaine, 149, 8) / $pourcentage);
            $this->setTauxImpositionSyndicats(substr($chaine, 141, 8) / $pourcentage);
            $this->setTauxImpositionTSE(substr($chaine, 157, 8) / $pourcentage);
            $this->setQuotiteAbattementGeneralBaseCommuneSansAjustement(substr($chaine, 206, 8));
            $this->setQuotiteAbattementGeneralBaseCommuneAvecAjustement(substr($chaine, 214, 8));
            $this->setQuotiteAbattementPAC12CommuneSansAjustement(substr($chaine, 222, 8));
            $this->setQuotiteAbattementPAC12CommuneAvecAjustement(substr($chaine, 230, 8));
            $this->setQuotiteAbattementPAC3CommuneSansAjustement(substr($chaine, 238, 8));
            $this->setQuotiteAbattementPAC3CommuneAvecAjustement(substr($chaine, 246, 8));
            $this->setQuotiteAbattementSpecialBaseCommuneSansAjustement(substr($chaine, 254, 8));
            $this->setQuotiteAbattementSpecialBaseCommuneAvecAjustement(substr($chaine, 262, 8));
            $this->setQuotiteAbattementSpecialHandicapeCommuneSansAjustement(substr($chaine, 270, 8));
            $this->setQuotiteAbattementSpecialHandicapeCommuneAvecAjustement(substr($chaine, 278, 8));
            $this->setQuotiteAbattementGeneralBaseInterCoApresAjustement(substr($chaine, 286, 8));
            $this->setQuotiteAbattementPAC12InterCoApresAjustement(substr($chaine, 294, 8));
            $this->setQuotiteAbattementPAC3InterCoApresAjustement(substr($chaine, 302, 8));
            $this->setQuotiteAbattementSpecialBaseInterCoApresAjustement(substr($chaine, 310, 8));
            $this->setQuotiteAbattementSpecialHandicapeInterCoApresAjustement(substr($chaine, 318, 34));
        } else {
            $pourcentage = 100000;
            $this->setTauxImpositionCommune(substr($chaine, 133, 8));
            $this->setTauxImpositionIntercommunalite(substr($chaine, 149, 8));
            $this->setTauxImpositionSyndicats(substr($chaine, 141, 8));
            $this->setTauxImpositionTSE(substr($chaine, 157, 8));
            $this->setTauxImpositionCommune(substr($chaine, 133, 8) / $pourcentage);
            $this->setTauxImpositionIntercommunalite(substr($chaine, 149, 8) / $pourcentage);
            $this->setTauxImpositionSyndicats(substr($chaine, 141, 8) / $pourcentage);
            $this->setTauxImpositionTSE(substr($chaine, 157, 8) / $pourcentage);
            $this->setQuotiteAbattementGeneralBaseCommuneSansAjustement(substr($chaine, 206, 8));
            $this->setQuotiteAbattementGeneralBaseCommuneAvecAjustement(substr($chaine, 214, 8));
            $this->setQuotiteAbattementPAC12CommuneSansAjustement(substr($chaine, 222, 8));
            $this->setQuotiteAbattementPAC12CommuneAvecAjustement(substr($chaine, 230, 8));
            $this->setQuotiteAbattementPAC3CommuneSansAjustement(substr($chaine, 238, 8));
            $this->setQuotiteAbattementPAC3CommuneAvecAjustement(substr($chaine, 246, 8));
            $this->setQuotiteAbattementSpecialBaseCommuneSansAjustement(substr($chaine, 254, 8));
            $this->setQuotiteAbattementSpecialBaseCommuneAvecAjustement(substr($chaine, 262, 8));
            $this->setQuotiteAbattementSpecialHandicapeCommuneSansAjustement(substr($chaine, 270, 8));
            $this->setQuotiteAbattementSpecialHandicapeCommuneAvecAjustement(substr($chaine, 278, 8));
            $this->setQuotiteAbattementGeneralBaseInterCoApresAjustement(substr($chaine, 286, 8));
            $this->setQuotiteAbattementPAC12InterCoApresAjustement(substr($chaine, 294, 8));
            $this->setQuotiteAbattementPAC3InterCoApresAjustement(substr($chaine, 302, 8));
            $this->setQuotiteAbattementSpecialBaseInterCoApresAjustement(substr($chaine, 310, 8));
            $this->setQuotiteAbattementSpecialHandicapeInterCoApresAjustement(substr($chaine, 318, 34));
        }
        return $this;
    }


    /**
     * Set fichier
     *
     * @param \Fiscalite\GestionFiscaliteBundle\Entity\Fichier $fichier
     * @return ArticleCommune
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
