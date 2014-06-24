<?php

namespace Fiscalite\GestionFiscaliteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Article
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Fiscalite\GestionFiscaliteBundle\Entity\ArticleRepository")
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="type", type="string")
 * @ORM\DiscriminatorMap({"articleTH" = "ArticleTH", "articleTF" = "ArticleTF"})
 */
class Article {

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
     */
    private $type;
    
    // ManyToOne //
    /**
     * @ORM\ManyToOne(targetEntity="Fiscalite\GestionFiscaliteBundle\Entity\Fichier", inversedBy="articles", cascade={"persist","remove"})
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
     * Set numerosequentiel
     *
     * @param integer $numerosequentiel
     * @return Article
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
     * Set type
     *
     * @param string $type
     */
    public function setType($type) {
        $this->type = $type;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType() {
        return $this->type;
    }

    /**
     * Set fichier
     *
     * @param \Fiscalite\GestionFiscaliteBundle\Entity\Fichier $fichier
     * @return Article
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


    /**
     * Set codeArticle
     *
     * @param string $codeArticle
     * @return Article
     */
    public function setCodeArticle($codeArticle)
    {
        $this->codeArticle = $codeArticle;

        return $this;
    }

    /**
     * Get codeArticle
     *
     * @return string 
     */
    public function getCodeArticle()
    {
        return $this->codeArticle;
    }
}
