<?php

namespace Fiscalite\GestionFiscaliteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * SimulationArticleTH
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Fiscalite\GestionFiscaliteBundle\Entity\SimulationArticleTHRepository")
 */
class SimulationArticleTH {

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
     * @ORM\Column(name="nomSimulation", type="string", length=255, nullable=false)
     * @Assert\NotBlank(message="Le champ nom doit contenir un nom de simulation valide.")
     */
    private $nomSimulation;

    /**
     * @var integer
     *
     * @ORM\Column(name="abattementgeneralbasecommunale", type="integer", nullable=true)
     */
    private $abattementgeneralbasecommunale;

    /**
     * @var integer
     *
     * @ORM\Column(name="abattementpersonneschargecommunal12", type="integer", nullable=true)
     */
    private $abattementpersonneschargecommunal12;

    /**
     * @var integer
     *
     * @ORM\Column(name="abattementpersonneschargecommunal3", type="integer", nullable=true)
     */
    private $abattementpersonneschargecommunal3;

    /**
     * @var integer
     *
     * @ORM\Column(name="abattementspecialbasecommunal", type="integer", nullable=true)
     */
    private $abattementspecialbasecommunal;

    /**
     * @var integer
     *
     * @ORM\Column(name="abattementspecialhandicapebasecommunal", type="integer", nullable=true)
     */
    private $abattementspecialhandicapebasecommunal;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=32, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=32, nullable=true)
     */
    private $prenom;

    /**
     * @var float
     *
     * @ORM\Column(name="tauximpositioncommune", type="float", nullable=true)
     */
    private $tauximpositioncommune;
    
    
    /**
     * @ORM\ManyToMany(targetEntity="Fiscalite\GestionFiscaliteBundle\Entity\Secteur", inversedBy="simulationArticleTH", cascade={"persist"})
     */
    private $secteur;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set abattementgeneralbasecommunale
     *
     * @param integer $abattementgeneralbasecommunale
     * @return SimulationArticleTH
     */
    public function setAbattementgeneralbasecommunale($abattementgeneralbasecommunale) {
        $this->abattementgeneralbasecommunale = $abattementgeneralbasecommunale;

        return $this;
    }

    /**
     * Get abattementgeneralbasecommunale
     *
     * @return integer 
     */
    public function getAbattementgeneralbasecommunale() {
        return $this->abattementgeneralbasecommunale;
    }

    /**
     * Set abattementspecialbasecommunal
     *
     * @param integer $abattementspecialbasecommunal
     * @return SimulationArticleTH
     */
    public function setAbattementspecialbasecommunal($abattementspecialbasecommunal) {
        $this->abattementspecialbasecommunal = $abattementspecialbasecommunal;

        return $this;
    }

    /**
     * Get abattementspecialbasecommunal
     *
     * @return integer 
     */
    public function getAbattementspecialbasecommunal() {
        return $this->abattementspecialbasecommunal;
    }

    /**
     * Set abattementspecialhandicapebasecommunal
     *
     * @param integer $abattementspecialhandicapebasecommunal
     * @return SimulationArticleTH
     */
    public function setAbattementspecialhandicapebasecommunal($abattementspecialhandicapebasecommunal) {
        $this->abattementspecialhandicapebasecommunal = $abattementspecialhandicapebasecommunal;

        return $this;
    }

    /**
     * Get abattementspecialhandicapebasecommunal
     *
     * @return integer 
     */
    public function getAbattementspecialhandicapebasecommunal() {
        return $this->abattementspecialhandicapebasecommunal;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return SimulationArticleTH
     */
    public function setNom($nom) {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom() {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return SimulationArticleTH
     */
    public function setPrenom($prenom) {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom() {
        return $this->prenom;
    }

    /**
     * Set tauximpositioncommune
     *
     * @param float $tauximpositioncommune
     * @return SimulationArticleTH
     */
    public function setTauximpositioncommune($tauximpositioncommune) {
        $this->tauximpositioncommune = $tauximpositioncommune;

        return $this;
    }

    /**
     * Get tauximpositioncommune
     *
     * @return float 
     */
    public function getTauximpositioncommune() {
        return $this->tauximpositioncommune;
    }

    /**
     * Set nomSimulation
     *
     * @param string $nomSimulation
     * @return SimulationArticleTH
     */
    public function setNomSimulation($nomSimulation) {
        $this->nomSimulation = $nomSimulation;

        return $this;
    }

    /**
     * Get nomSimulation
     *
     * @return string 
     */
    public function getNomSimulation() {
        return $this->nomSimulation;
    }

    /**
     * Set abattementpersonneschargecommunal12
     *
     * @param integer $abattementpersonneschargecommunal12
     * @return SimulationArticleTH
     */
    public function setAbattementpersonneschargecommunal12($abattementpersonneschargecommunal12) {
        $this->abattementpersonneschargecommunal12 = $abattementpersonneschargecommunal12;

        return $this;
    }

    /**
     * Get abattementpersonneschargecommunal12
     *
     * @return integer 
     */
    public function getAbattementpersonneschargecommunal12() {
        return $this->abattementpersonneschargecommunal12;
    }

    /**
     * Set abattementpersonneschargecommunal3
     *
     * @param integer $abattementpersonneschargecommunal3
     * @return SimulationArticleTH
     */
    public function setAbattementpersonneschargecommunal3($abattementpersonneschargecommunal3) {
        $this->abattementpersonneschargecommunal3 = $abattementpersonneschargecommunal3;

        return $this;
    }

    /**
     * Get abattementpersonneschargecommunal3
     *
     * @return integer 
     */
    public function getAbattementpersonneschargecommunal3() {
        return $this->abattementpersonneschargecommunal3;
    }

    public function newSimulationArticleTH($nomSimulation, $abattementgeneralbasecommunale, $abattementpersonneschargecommunal12, $abattementpersonneschargecommunal3, $abattementspecialbasecommunal, $abattementspecialhandicapebasecommunal, $tauximpositioncommune, $nom, $prenom, $secteur) {
        if ($nomSimulation != NULL) {
            $this->setNomSimulation($nomSimulation);
        } else {
            $this->setNomSimulation("SimulationDefault");
        } if ($abattementgeneralbasecommunale != NULL) {
            $this->setAbattementgeneralbasecommunale($abattementgeneralbasecommunale);
        } else {
            $this->setAbattementgeneralbasecommunale(15);
        }if ($abattementpersonneschargecommunal12 != NULL) {
            $this->setAbattementpersonneschargecommunal12($abattementpersonneschargecommunal12);
        } else {
            $this->setAbattementpersonneschargecommunal12(10);
        }if ($abattementpersonneschargecommunal3 != NULL) {
            $this->setAbattementpersonneschargecommunal3($abattementpersonneschargecommunal3);
        } else {
            $this->setAbattementpersonneschargecommunal3(15);
        }if ($abattementspecialbasecommunal != NULL) {
            $this->setAbattementspecialbasecommunal($abattementspecialbasecommunal);
        } else {
            $this->setAbattementspecialbasecommunal(0);
        }if ($abattementspecialhandicapebasecommunal != NULL) {
            $this->setAbattementspecialhandicapebasecommunal($abattementspecialhandicapebasecommunal);
        } else {
            $this->setAbattementspecialhandicapebasecommunal(10);
        }if ($tauximpositioncommune != NULL) {
            $this->setTauximpositioncommune($tauximpositioncommune);
        } else {
            $this->setTauximpositioncommune(16.15);
        }
        return $this;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->secteur = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add secteur
     *
     * @param \Fiscalite\GestionFiscaliteBundle\Entity\Secteur $secteur
     * @return SimulationArticleTH
     */
    public function addSecteur(\Fiscalite\GestionFiscaliteBundle\Entity\Secteur $secteur)
    {
        $this->secteur[] = $secteur;

        return $this;
    }

    /**
     * Remove secteur
     *
     * @param \Fiscalite\GestionFiscaliteBundle\Entity\Secteur $secteur
     */
    public function removeSecteur(\Fiscalite\GestionFiscaliteBundle\Entity\Secteur $secteur)
    {
        $this->secteur->removeElement($secteur);
    }

    /**
     * Get secteur
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSecteur()
    {
        return $this->secteur;
    }
}
