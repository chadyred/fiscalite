<?php

namespace Fiscalite\GestionFiscaliteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Base
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Fiscalite\GestionFiscaliteBundle\Entity\BaseRepository")
 */
class Base {

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
     * @var integer
     *
     * @ORM\Column(name="basenettecommunale", type="integer")
     */
    private $basenettecommunale;

    /**
     * @var integer
     *
     * @ORM\Column(name="basenettesyndicats", type="integer")
     */
    private $basenettesyndicats;

    /**
     * @var integer
     *
     * @ORM\Column(name="basenetteintercommunalite", type="integer")
     */
    private $basenetteintercommunalite;

    /**
     * @var integer
     *
     * @ORM\Column(name="basenettetse", type="integer")
     */
    private $basenettetse;

    /**
     * @ORM\OneToOne(targetEntity="ArticleTH", inversedBy="base", cascade={"persist","remove"})
     */
    private $articleTH;

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
     * @return Base
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
     * Set basenettecommunale
     *
     * @param integer $basenettecommunale
     * @return Base
     */
    public function setBasenettecommunale($basenettecommunale) {
        $this->basenettecommunale = $basenettecommunale;

        return $this;
    }

    /**
     * Get basenettecommunale
     *
     * @return integer 
     */
    public function getBasenettecommunale() {
        return $this->basenettecommunale;
    }

    /**
     * Set basenettesyndicats
     *
     * @param integer $basenettesyndicats
     * @return Base
     */
    public function setBasenettesyndicats($basenettesyndicats) {
        $this->basenettesyndicats = $basenettesyndicats;

        return $this;
    }

    /**
     * Get basenettesyndicats
     *
     * @return integer 
     */
    public function getBasenettesyndicats() {
        return $this->basenettesyndicats;
    }

    /**
     * Set basenetteintercommunalite
     *
     * @param integer $basenetteintercommunalite
     * @return Base
     */
    public function setBasenetteintercommunalite($basenetteintercommunalite) {
        $this->basenetteintercommunalite = $basenetteintercommunalite;

        return $this;
    }

    /**
     * Get basenetteintercommunalite
     *
     * @return integer 
     */
    public function getBasenetteintercommunalite() {
        return $this->basenetteintercommunalite;
    }

    /**
     * Set basenettetse
     *
     * @param integer $basenettetse
     * @return Base
     */
    public function setBasenettetse($basenettetse) {
        $this->basenettetse = $basenettetse;

        return $this;
    }

    /**
     * Get basenettetse
     *
     * @return integer 
     */
    public function getBasenettetse() {
        return $this->basenettetse;
    }

    /**
     * Set articleTH
     *
     * @param \Fiscalite\GestionFiscaliteBundle\Entity\ArticleTH $articleTH
     * @return Base
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

    public function newBase($chaine) {
        $this->setNumerosequentiel(substr($chaine, 7, 6));
        $this->setBasenettecommunale(substr($chaine, 58, 10));
        $this->setBasenettesyndicats(substr($chaine, 68, 10));
        $this->setBasenetteintercommunalite(substr($chaine, 78, 10));
        $this->setBasenettetse(substr($chaine, 98, 10));
        return $this;
    }

}
