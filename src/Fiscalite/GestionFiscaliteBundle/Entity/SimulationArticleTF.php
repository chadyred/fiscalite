<?php

namespace Fiscalite\GestionFiscaliteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * SimulationArticleTF
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Fiscalite\GestionFiscaliteBundle\Entity\SimulationArticleTFRepository")
 * 
 */
class SimulationArticleTF {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var float
     *
     * @ORM\Column(name="tauxBatiCommune", type="float", nullable=true)
     */
    private $tauxBatiCommune;

    /**
     * @var float
     *
     * @ORM\Column(name="tauxNonBatiCommune", type="float", nullable=true)
     */
    private $tauxNonBatiCommune;

    /**
     * @var string
     *
     * @ORM\Column(name="nomSimulation", type="string", length=255, nullable=false)
     * @Assert\NotBlank(message="Le champ nom doit contenir un nom de simulation valide.")
     */
    private $nomSimulation;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=true)
     */
    private $nom;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set tauxBatiCommune
     *
     * @param float $tauxBatiCommune
     * @return SimulationArticleTF
     */
    public function setTauxBatiCommune($tauxBatiCommune) {
        $this->tauxBatiCommune = $tauxBatiCommune;

        return $this;
    }

    /**
     * Get tauxBatiCommune
     *
     * @return float 
     */
    public function getTauxBatiCommune() {
        return $this->tauxBatiCommune;
    }

    /**
     * Set tauxNonBatiCommune
     *
     * @param float $tauxNonBatiCommune
     * @return SimulationArticleTF
     */
    public function setTauxNonBatiCommune($tauxNonBatiCommune) {
        $this->tauxNonBatiCommune = $tauxNonBatiCommune;

        return $this;
    }

    /**
     * Get tauxNonBatiCommune
     *
     * @return float 
     */
    public function getTauxNonBatiCommune() {
        return $this->tauxNonBatiCommune;
    }

    /**
     * Set nomSimulation
     *
     * @param string $nomSimulation
     * @return SimulationArticleTF
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
     * Set nom
     *
     * @param string $nom
     * @return SimulationArticleTF
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

    public function newSimulationArticleTF($nomSimulation, $tauxBatiCommune, $tauxNonBatiCommune, $nom) {
        if ($nomSimulation != NULL) {
            $this->setNomSimulation($nomSimulation);
        } else {
            $this->setNomSimulation("SimulationDefault");
        }
        if ($tauxBatiCommune != NULL) {
            $tauxBatiCommune = str_replace(',', '.', $tauxBatiCommune);
            $this->setTauxBatiCommune($tauxBatiCommune);
        } else {
            $this->setTauxBatiCommune(26.16);
        }
        if ($tauxNonBatiCommune != NULL) {
            $tauxNonBatiCommune = str_replace(',', '.', $tauxNonBatiCommune);
            $this->setTauxNonBatiCommune($tauxNonBatiCommune);
        } else {
            $this->setTauxNonBatiCommune(71.40);
        }
        if ($nom != NULL) {
            $this->setNom($nom);
        } else {
            $this->setNom(NULL);
        }
        return $this;
    }

}
