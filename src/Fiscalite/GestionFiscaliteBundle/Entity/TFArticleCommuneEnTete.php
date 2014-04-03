<?php

namespace Fiscalite\GestionFiscaliteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TFArticleCommuneEnTete
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Fiscalite\GestionFiscaliteBundle\Entity\TFArticleCommuneEnTeteRepository")
 */
class TFArticleCommuneEnTete {

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
     * @ORM\Column(name="typeTaxe", type="string", length=2)
     */
    private $typeTaxe;

    /**
     * @var integer
     *
     * @ORM\Column(name="annee", type="integer")
     */
    private $annee;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateTraitement", type="integer")
     */
    private $dateTraitement;

    /**
     * @var string
     *
     * @ORM\Column(name="libDIR", type="string", length=30)
     */
    private $libDIR;

    /**
     * @var string
     *
     * @ORM\Column(name="libelleCollectivite", type="string", length=65)
     */
    private $libelleCollectivite;

    /**
     * @var integer
     *
     * @ORM\Column(name="tXBD", type="float")
     */
    private $tXBD;

    /**
     * @var integer
     *
     * @ORM\Column(name="tXNCA", type="float")
     */
    private $tXNCA;
    
     /**
    * @ORM\ManyToOne(targetEntity="Fiscalite\GestionFiscaliteBundle\Entity\Fichier", inversedBy="tFarticlesCommuneEnTete", cascade={"persist"})
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
     * Set typeTaxe
     *
     * @param string $typeTaxe
     * @return TFArticleCommuneEnTete
     */
    public function setTypeTaxe($typeTaxe) {
        $this->typeTaxe = $typeTaxe;

        return $this;
    }

    /**
     * Get typeTaxe
     *
     * @return string 
     */
    public function getTypeTaxe() {
        return $this->typeTaxe;
    }

   
    /**
     * Set libDIR
     *
     * @param string $libDIR
     * @return TFArticleCommuneEnTete
     */
    public function setLibDIR($libDIR) {
        $this->libDIR = $libDIR;

        return $this;
    }

    /**
     * Get libDIR
     *
     * @return string 
     */
    public function getLibDIR() {
        return $this->libDIR;
    }

    /**
     * Set libelleCollectivite
     *
     * @param string $libelleCollectivite
     * @return TFArticleCommuneEnTete
     */
    public function setLibelleCollectivite($libelleCollectivite) {
        $this->libelleCollectivite = $libelleCollectivite;

        return $this;
    }

    /**
     * Get libelleCollectivite
     *
     * @return string 
     */
    public function getLibelleCollectivite() {
        return $this->libelleCollectivite;
    }

    /**
     * Set tXBD
     *
     * @param integer $tXBD
     * @return TFArticleCommuneEnTete
     */
    public function setTXBD($tXBD) {
        $this->tXBD = $tXBD;

        return $this;
    }

    /**
     * Get tXBD
     *
     * @return integer 
     */
    public function getTXBD() {
        return $this->tXBD;
    }

    /**
     * Set tXNCA
     *
     * @param integer $tXNCA
     * @return TFArticleCommuneEnTete
     */
    public function setTXNCA($tXNCA) {
        $this->tXNCA = $tXNCA;

        return $this;
    }

    /**
     * Get tXNCA
     *
     * @return integer 
     */
    public function getTXNCA() {
        return $this->tXNCA;
    }

    public function newTFArticleCommuneEnTete($chaine) {
        $pourcentage = 100000;
        $this->setTypeTaxe(substr($chaine, 28, 2));
        $this->setAnnee(substr($chaine, 30, 4));
        $this->setDateTraitement(substr($chaine, 34, 8));
        $this->setLibDIR(substr($chaine, 42, 30));
        $this->setLibelleCollectivite(substr($chaine, 72, 65));
        $this->setTXBD(substr($chaine, 185, 8) / $pourcentage);
        $this->setTXNCA(substr($chaine, 217, 8) / $pourcentage);
    }


    /**
     * Set annee
     *
     * @param integer $annee
     * @return TFArticleCommuneEnTete
     */
    public function setAnnee($annee)
    {
        $this->annee = $annee;

        return $this;
    }

    /**
     * Get annee
     *
     * @return integer 
     */
    public function getAnnee()
    {
        return $this->annee;
    }

    /**
     * Set dateTraitement
     *
     * @param \DateTime $dateTraitement
     * @return TFArticleCommuneEnTete
     */
    public function setDateTraitement($dateTraitement)
    {
        $this->dateTraitement = $dateTraitement;

        return $this;
    }

    /**
     * Get dateTraitement
     *
     * @return \DateTime 
     */
    public function getDateTraitement()
    {
        return $this->dateTraitement;
    }

    /**
     * Set fichier
     *
     * @param \Fiscalite\GestionFiscaliteBundle\Entity\Fichier $fichier
     * @return TFArticleCommuneEnTete
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
