<?php

namespace Fiscalite\GestionFiscaliteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * THArticleCommuneIFPA3
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Fiscalite\GestionFiscaliteBundle\Entity\THArticleCommuneIFPA3Repository")
 */
class THArticleCommuneIFPA3 {

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
     * @ORM\Column(name="totBaseNetteCommune", type="integer")
     */
    private $totBaseNetteCommune;

    /**
     * @var integer
     *
     * @ORM\Column(name="totCotisationCommune", type="integer")
     */
    private $totCotisationCommune;

    /**
     * @var integer
     *
     * @ORM\Column(name="totBaseNetteSyndicale", type="integer")
     */
    private $totBaseNetteSyndicale;

    /**
     * @var integer
     *
     * @ORM\Column(name="totCotisationSyndicale", type="integer")
     */
    private $totCotisationSyndicale;

    /**
     * @var integer
     *
     * @ORM\Column(name="totBaseNetteInterCommunale", type="integer")
     */
    private $totBaseNetteInterCommunale;

    /**
     * @var integer
     *
     * @ORM\Column(name="totCotisationInterCommunale", type="integer")
     */
    private $totCotisationInterCommunale;

    /**
     * @var integer
     *
     * @ORM\Column(name="totBaseNetteTSE", type="integer")
     */
    private $totBaseNetteTSE;

    /**
     * @var integer
     *
     * @ORM\Column(name="totCotisationTSEhorsGP", type="integer")
     */
    private $totCotisationTSEhorsGP;

    /**
     * @var integer
     *
     * @ORM\Column(name="totCotisationGP", type="integer")
     */
    private $totCotisationGP;

    /**
     * @var integer
     *
     * @ORM\Column(name="totFrais", type="integer")
     */
    private $totFrais;

    /**
     * @var integer
     *
     * @ORM\Column(name="totPrelevtsurforteVL", type="integer")
     */
    private $totPrelevtsurforteVL;

    /**
     * @var integer
     *
     * @ORM\Column(name="totPrelevt15surTHS", type="integer")
     */
    private $totPrelevt15surTHS;

    /**
     * @var integer
     *
     * @ORM\Column(name="totMER", type="integer")
     */
    private $totMER;

    /**
     * @var integer
     *
     * @ORM\Column(name="totDegG", type="integer")
     */
    private $totDegG;

    /**
     * @var integer
     *
     * @ORM\Column(name="totPlaft", type="integer")
     */
    private $totPlaft;

    /**
     * @var integer
     *
     * @ORM\Column(name="totNV", type="integer")
     */
    private $totNV;

    /**
     * @ORM\OneToOne(targetEntity="Fiscalite\GestionFiscaliteBundle\Entity\Fichier", inversedBy="THArticleCommuneIFPA3", cascade={"persist"})
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
     * Set totBaseNetteCommune
     *
     * @param integer $totBaseNetteCommune
     * @return THArticleCommuneIFPA3
     */
    public function setTotBaseNetteCommune($totBaseNetteCommune) {
        $this->totBaseNetteCommune = $totBaseNetteCommune;

        return $this;
    }

    /**
     * Get totBaseNetteCommune
     *
     * @return integer 
     */
    public function getTotBaseNetteCommune() {
        return $this->totBaseNetteCommune;
    }

    /**
     * Set totCotisationCommune
     *
     * @param integer $totCotisationCommune
     * @return THArticleCommuneIFPA3
     */
    public function setTotCotisationCommune($totCotisationCommune) {
        $this->totCotisationCommune = $totCotisationCommune;

        return $this;
    }

    /**
     * Get totCotisationCommune
     *
     * @return integer 
     */
    public function getTotCotisationCommune() {
        return $this->totCotisationCommune;
    }

    /**
     * Set totBaseNetteSyndicale
     *
     * @param integer $totBaseNetteSyndicale
     * @return THArticleCommuneIFPA3
     */
    public function setTotBaseNetteSyndicale($totBaseNetteSyndicale) {
        $this->totBaseNetteSyndicale = $totBaseNetteSyndicale;

        return $this;
    }

    /**
     * Get totBaseNetteSyndicale
     *
     * @return integer 
     */
    public function getTotBaseNetteSyndicale() {
        return $this->totBaseNetteSyndicale;
    }

    /**
     * Set totCotisationSyndicale
     *
     * @param integer $totCotisationSyndicale
     * @return THArticleCommuneIFPA3
     */
    public function setTotCotisationSyndicale($totCotisationSyndicale) {
        $this->totCotisationSyndicale = $totCotisationSyndicale;

        return $this;
    }

    /**
     * Get totCotisationSyndicale
     *
     * @return integer 
     */
    public function getTotCotisationSyndicale() {
        return $this->totCotisationSyndicale;
    }

    /**
     * Set totBaseNetteInterCommunale
     *
     * @param integer $totBaseNetteInterCommunale
     * @return THArticleCommuneIFPA3
     */
    public function setTotBaseNetteInterCommunale($totBaseNetteInterCommunale) {
        $this->totBaseNetteInterCommunale = $totBaseNetteInterCommunale;

        return $this;
    }

    /**
     * Get totBaseNetteInterCommunale
     *
     * @return integer 
     */
    public function getTotBaseNetteInterCommunale() {
        return $this->totBaseNetteInterCommunale;
    }

    /**
     * Set totCotisationInterCommunale
     *
     * @param integer $totCotisationInterCommunale
     * @return THArticleCommuneIFPA3
     */
    public function setTotCotisationInterCommunale($totCotisationInterCommunale) {
        $this->totCotisationInterCommunale = $totCotisationInterCommunale;

        return $this;
    }

    /**
     * Get totCotisationInterCommunale
     *
     * @return integer 
     */
    public function getTotCotisationInterCommunale() {
        return $this->totCotisationInterCommunale;
    }

    /**
     * Set totBaseNetteTSE
     *
     * @param integer $totBaseNetteTSE
     * @return THArticleCommuneIFPA3
     */
    public function setTotBaseNetteTSE($totBaseNetteTSE) {
        $this->totBaseNetteTSE = $totBaseNetteTSE;

        return $this;
    }

    /**
     * Get totBaseNetteTSE
     *
     * @return integer 
     */
    public function getTotBaseNetteTSE() {
        return $this->totBaseNetteTSE;
    }

    /**
     * Set totCotisationTSEhorsGP
     *
     * @param integer $totCotisationTSEhorsGP
     * @return THArticleCommuneIFPA3
     */
    public function setTotCotisationTSEhorsGP($totCotisationTSEhorsGP) {
        $this->totCotisationTSEhorsGP = $totCotisationTSEhorsGP;

        return $this;
    }

    /**
     * Get totCotisationTSEhorsGP
     *
     * @return integer 
     */
    public function getTotCotisationTSEhorsGP() {
        return $this->totCotisationTSEhorsGP;
    }

    /**
     * Set totCotisationGP
     *
     * @param integer $totCotisationGP
     * @return THArticleCommuneIFPA3
     */
    public function setTotCotisationGP($totCotisationGP) {
        $this->totCotisationGP = $totCotisationGP;

        return $this;
    }

    /**
     * Get totCotisationGP
     *
     * @return integer 
     */
    public function getTotCotisationGP() {
        return $this->totCotisationGP;
    }

    /**
     * Set totFrais
     *
     * @param integer $totFrais
     * @return THArticleCommuneIFPA3
     */
    public function setTotFrais($totFrais) {
        $this->totFrais = $totFrais;

        return $this;
    }

    /**
     * Get totFrais
     *
     * @return integer 
     */
    public function getTotFrais() {
        return $this->totFrais;
    }

    /**
     * Set totPrelevtsurforteVL
     *
     * @param integer $totPrelevtsurforteVL
     * @return THArticleCommuneIFPA3
     */
    public function setTotPrelevtsurforteVL($totPrelevtsurforteVL) {
        $this->totPrelevtsurforteVL = $totPrelevtsurforteVL;

        return $this;
    }

    /**
     * Get totPrelevtsurforteVL
     *
     * @return integer 
     */
    public function getTotPrelevtsurforteVL() {
        return $this->totPrelevtsurforteVL;
    }

    /**
     * Set totPrelevt15surTHS
     *
     * @param integer $totPrelevt15surTHS
     * @return THArticleCommuneIFPA3
     */
    public function setTotPrelevt15surTHS($totPrelevt15surTHS) {
        $this->totPrelevt15surTHS = $totPrelevt15surTHS;

        return $this;
    }

    /**
     * Get totPrelevt15surTHS
     *
     * @return integer 
     */
    public function getTotPrelevt15surTHS() {
        return $this->totPrelevt15surTHS;
    }

    /**
     * Set totMER
     *
     * @param integer $totMER
     * @return THArticleCommuneIFPA3
     */
    public function setTotMER($totMER) {
        $this->totMER = $totMER;

        return $this;
    }

    /**
     * Get totMER
     *
     * @return integer 
     */
    public function getTotMER() {
        return $this->totMER;
    }

    /**
     * Set totDegG
     *
     * @param integer $totDegG
     * @return THArticleCommuneIFPA3
     */
    public function setTotDegG($totDegG) {
        $this->totDegG = $totDegG;

        return $this;
    }

    /**
     * Get totDegG
     *
     * @return integer 
     */
    public function getTotDegG() {
        return $this->totDegG;
    }

    /**
     * Set totPlaft
     *
     * @param integer $totPlaft
     * @return THArticleCommuneIFPA3
     */
    public function setTotPlaft($totPlaft) {
        $this->totPlaft = $totPlaft;

        return $this;
    }

    /**
     * Get totPlaft
     *
     * @return integer 
     */
    public function getTotPlaft() {
        return $this->totPlaft;
    }

    /**
     * Set totNV
     *
     * @param integer $totNV
     * @return THArticleCommuneIFPA3
     */
    public function setTotNV($totNV) {
        $this->totNV = $totNV;

        return $this;
    }

    /**
     * Get totNV
     *
     * @return integer 
     */
    public function getTotNV() {
        return $this->totNV;
    }

    /**
     * Set fichier
     *
     * @param \Fiscalite\GestionFiscaliteBundle\Entity\Fichier $fichier
     * @return THArticleCommuneIFPA3
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

    public function newTHArticlecommuneIFPA3($annee, $chaine) {
        $pourcentage = 100000;
        if ($annee >= "2011" && $annee < "2013") {
            $this->setTotBaseNetteCommune(substr($chaine, 29, 10));
            $this->setTotCotisationCommune(substr($chaine, 39, 10));
            $this->setTotBaseNetteSyndicale(substr($chaine, 49, 10));
            $this->setTotCotisationSyndicale(substr($chaine, 59, 10));
            $this->setTotBaseNetteInterCommunale(substr($chaine, 69, 10));
            $this->setTotCotisationInterCommunale(substr($chaine, 79, 10));
            $this->setTotBaseNetteTSE(substr($chaine, 89, 10));
            $this->setTotCotisationTSEhorsGP(substr($chaine, 99, 10));
            $this->setTotCotisationGP(substr($chaine, 109, 10));
            $this->setTotFrais(substr($chaine, 149, 10));
            $this->setTotPrelevtsurforteVL(substr($chaine, 159, 10));
            $this->setTotPrelevt15surTHS(substr($chaine, 169, 10));
            $this->setTotMER(substr($chaine, 179, 10));
            $this->setTotDegG(substr($chaine, 189, 10));
            $this->setTotPlaft(substr($chaine, 199, 10));
            $this->setTotNV(substr($chaine, 209, 10));
        } else {
            $pourcentage = 100000;
            $this->setTotBaseNetteCommune(substr($chaine, 29, 10));
            $this->setTotCotisationCommune(substr($chaine, 39, 10));
            $this->setTotBaseNetteSyndicale(substr($chaine, 49, 10));
            $this->setTotCotisationSyndicale(substr($chaine, 59, 10));
            $this->setTotBaseNetteInterCommunale(substr($chaine, 69, 10));
            $this->setTotCotisationInterCommunale(substr($chaine, 79, 10));
            $this->setTotBaseNetteTSE(substr($chaine, 89, 10));
            $this->setTotCotisationTSEhorsGP(substr($chaine, 99, 10));
            $this->setTotCotisationGP(substr($chaine, 109, 10));
            $this->setTotFrais(substr($chaine, 149, 10));
            $this->setTotPrelevtsurforteVL(substr($chaine, 159, 10));
            $this->setTotPrelevt15surTHS(substr($chaine, 169, 10));
            $this->setTotMER(substr($chaine, 179, 10));
            $this->setTotDegG(substr($chaine, 189, 10));
            $this->setTotPlaft(substr($chaine, 199, 10));
            $this->setTotNV(substr($chaine, 209, 10));
        }
        return $this;
    }

}
