<?php

namespace Fiscalite\GestionFiscaliteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RechercheArticleTF
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Fiscalite\GestionFiscaliteBundle\Entity\RechercheArticleTFRepository")
 */
class RechercheArticleTF
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
     * @var integer
     *
     * @ORM\Column(name="anneetaxation", type="integer")
     */
    private $anneetaxation;

    /**
     * @var string
     *
     * @ORM\Column(name="titreetdesignation", type="string", length=255)
     */
    private $titreetdesignation;

    /**
     * @var integer
     *
     * @ORM\Column(name="sommeapayermin", type="integer")
     */
    private $sommeapayermin;

    /**
     * @var integer
     *
     * @ORM\Column(name="sommeapayermax", type="integer")
     */
    private $sommeapayermax;


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
     * Set anneetaxation
     *
     * @param integer $anneetaxation
     * @return RechercheArticleTF
     */
    public function setAnneetaxation($anneetaxation)
    {
        $this->anneetaxation = $anneetaxation;

        return $this;
    }

    /**
     * Get anneetaxation
     *
     * @return integer 
     */
    public function getAnneetaxation()
    {
        return $this->anneetaxation;
    }

    /**
     * Set titreetdesignation
     *
     * @param string $titreetdesignation
     * @return RechercheArticleTF
     */
    public function setTitreetdesignation($titreetdesignation)
    {
        $this->titreetdesignation = $titreetdesignation;

        return $this;
    }

    /**
     * Get titreetdesignation
     *
     * @return string 
     */
    public function getTitreetdesignation()
    {
        return $this->titreetdesignation;
    }

    /**
     * Set sommeapayermin
     *
     * @param integer $sommeapayermin
     * @return RechercheArticleTF
     */
    public function setSommeapayermin($sommeapayermin)
    {
        $this->sommeapayermin = $sommeapayermin;

        return $this;
    }

    /**
     * Get sommeapayermin
     *
     * @return integer 
     */
    public function getSommeapayermin()
    {
        return $this->sommeapayermin;
    }

    /**
     * Set sommeapayermax
     *
     * @param integer $sommeapayermax
     * @return RechercheArticleTF
     */
    public function setSommeapayermax($sommeapayermax)
    {
        $this->sommeapayermax = $sommeapayermax;

        return $this;
    }

    /**
     * Get sommeapayermax
     *
     * @return integer 
     */
    public function getSommeapayermax()
    {
        return $this->sommeapayermax;
    }
}
