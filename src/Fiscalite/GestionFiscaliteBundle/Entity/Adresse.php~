<?php

namespace Fiscalite\GestionFiscaliteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Adresse
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Fiscalite\GestionFiscaliteBundle\Entity\AdresseRepository")
 */
class Adresse {

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
     * @ORM\Column(name="codevoie", type="string", length=4)
     */
    private $codevoie;

    /**
     * @var string
     *
     * @ORM\Column(name="numeroimmeubleaft", type="string", length=4)
     */
    private $numeroimmeubleaft;

    /**
     * @var string
     *
     * @ORM\Column(name="indicederepetition", type="string", length=1)
     */
    private $indicederepetition;

    /**
     * @var string
     *
     * @ORM\Column(name="libellevoieaft", type="string", length=30)
     */
    private $libellevoieaft;

    /**
     * @ORM\OneToOne(targetEntity="ArticleTH",inversedBy="adresse", cascade={"persist","remove"})
     */
    private $articleTH;
    // ManyToOne //
    /**
     * @ORM\ManyToOne(targetEntity="Fiscalite\GestionFiscaliteBundle\Entity\TypeRue", inversedBy="adresses", cascade={"persist","remove"})
     */
    private $typerue;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set codevoie
     *
     * @param string $codevoie
     * @return Adresse
     */
    public function setCodevoie($codevoie) {
        $this->codevoie = $codevoie;

        return $this;
    }

    /**
     * Get codevoie
     *
     * @return string 
     */
    public function getCodevoie() {
        return $this->codevoie;
    }

    /**
     * Set numeroimmeubleaft
     *
     * @param string $numeroimmeubleaft
     * @return Adresse
     */
    public function setNumeroimmeubleaft($numeroimmeubleaft) {
        $this->numeroimmeubleaft = $numeroimmeubleaft;

        return $this;
    }

    /**
     * Get numeroimmeubleaft
     *
     * @return string 
     */
    public function getNumeroimmeubleaft() {
        return $this->numeroimmeubleaft;
    }

    /**
     * Set indicederepetition
     *
     * @param string $indicederepetition
     * @return Adresse
     */
    public function setIndicederepetition($indicederepetition) {
        $this->indicederepetition = $indicederepetition;

        return $this;
    }

    /**
     * Get indicederepetition
     *
     * @return string 
     */
    public function getIndicederepetition() {
        return $this->indicederepetition;
    }

    /**
     * Set libellevoieaft
     *
     * @param string $libellevoieaft
     * @return Adresse
     */
    public function setLibellevoieaft($libellevoieaft) {
        $this->libellevoieaft = $libellevoieaft;

        return $this;
    }

    /**
     * Get libellevoieaft
     *
     * @return string 
     */
    public function getLibellevoieaft() {
        return $this->libellevoieaft;
    }

    /**
     * Set articleTH
     *
     * @param \Fiscalite\GestionFiscaliteBundle\Entity\ArticleTH $articleTH
     * @return Adresse
     */
    public function setArticleTH(\Fiscalite\GestionFiscaliteBundle\Entity\ArticleTH $articleTH = null) {
        $this->articleTH = $articleTH;

        return $this;
    }

    /**
     * Get articleTH
     *
     * @return \Fiscalite\GestionFiscaliteBundle\Entity\ArticleTH 
     */
    public function getArticleTH() {
        return $this->articleTH;
    }

    public function getAdresseComplete() {
        return $this->codevoie + "" + $this->numeroimmeubleaft + "" + $this->indicederepetition + "" + $this->libellevoieaft;
    }

    /**
     * Constructor
     */
    public function __construct() {
        
    }

    /**
     * Set typerue
     *
     * @param \Fiscalite\GestionFiscaliteBundle\Entity\TypeRue $typerue
     * @return Adresse
     */
    public function setTyperue(\Fiscalite\GestionFiscaliteBundle\Entity\TypeRue $typerue = null) {
        $this->typerue = $typerue;

        return $this;
    }

    /**
     * Get typerue
     *
     * @return \Fiscalite\GestionFiscaliteBundle\Entity\TypeRue 
     */
    public function getTyperue() {
        return $this->typerue;
    }

    public function newAdresse($chaine) {
        $this->setCodevoie(substr($chaine, 19, 4));
        $this->setIndicederepetition(substr($chaine, 27, 1));
        $this->setLibellevoieaft(substr($chaine, 28, 30));
        $this->setNumeroimmeubleaft(substr($chaine, 23, 4));
        return $this;
    }

}
