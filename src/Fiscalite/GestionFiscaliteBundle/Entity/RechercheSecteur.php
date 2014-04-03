<?php

namespace Fiscalite\GestionFiscaliteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RechercheSecteur
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Fiscalite\GestionFiscaliteBundle\Entity\RechercheSecteurRepository")
 */
class RechercheSecteur
{
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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="nombreIndividu", type="string", length=255)
     */
    private $nombreIndividu;

    /**
     * @var string
     *
     * @ORM\Column(name="left_name", type="string", length=255)
     */
    private $leftName;

    /**
     * @var string
     *
     * @ORM\Column(name="right_name", type="string", length=255)
     */
    private $rightName;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return RechercheSecteur
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set nombreIndividu
     *
     * @param string $nombreIndividu
     * @return RechercheSecteur
     */
    public function setNombreIndividu($nombreIndividu)
    {
        $this->nombreIndividu = $nombreIndividu;

        return $this;
    }

    /**
     * Get nombreIndividu
     *
     * @return string 
     */
    public function getNombreIndividu()
    {
        return $this->nombreIndividu;
    }

    /**
     * Set leftName
     *
     * @param string $leftName
     * @return RechercheSecteur
     */
    public function setLeftName($leftName)
    {
        $this->leftName = $leftName;

        return $this;
    }

    /**
     * Get leftName
     *
     * @return string 
     */
    public function getLeftName()
    {
        return $this->leftName;
    }

    /**
     * Set rightName
     *
     * @param string $rightName
     * @return RechercheSecteur
     */
    public function setRightName($rightName)
    {
        $this->rightName = $rightName;

        return $this;
    }

    /**
     * Get rightName
     *
     * @return string 
     */
    public function getRightName()
    {
        return $this->rightName;
    }
}
