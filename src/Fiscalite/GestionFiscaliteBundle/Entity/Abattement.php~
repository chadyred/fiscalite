<?php

namespace Fiscalite\GestionFiscaliteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Abattement
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Fiscalite\GestionFiscaliteBundle\Entity\AbattementRepository")
 */
class Abattement {

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
     * @ORM\Column(name="abattementgeneralbasecommunale", type="integer")
     */
    private $abattementgeneralbasecommunale;

    /**
     * @var integer
     *
     * @ORM\Column(name="abattementgeneralbaseintercommunalite", type="integer")
     */
    private $abattementgeneralbaseintercommunalite;

    /**
     * @var integer
     *
     * @ORM\Column(name="abattementgeneralbasesyndicatstse", type="integer")
     */
    private $abattementgeneralbasesyndicatstse;

    /**
     * @var integer
     *
     * @ORM\Column(name="abattementpersonneschargecommunnal", type="integer")
     */
    private $abattementpersonneschargecommunnal;

    /**
     * @var integer
     *
     * @ORM\Column(name="abattementpersonneschargeintercommunalite", type="integer")
     */
    private $abattementpersonneschargeintercommunalite;

    /**
     * @var integer
     *
     * @ORM\Column(name="abattementpersonneschargesyndicatstse", type="integer")
     */
    private $abattementpersonneschargesyndicatstse;

    /**
     * @var integer
     *
     * @ORM\Column(name="abattementspecialbasecommunal", type="integer")
     */
    private $abattementspecialbasecommunal;

    /**
     * @var integer
     *
     * @ORM\Column(name="abattementspecialbaseintercommunalite", type="integer")
     */
    private $abattementspecialbaseintercommunalite;

    /**
     * @var integer
     *
     * @ORM\Column(name="abattementspecialbasesyndicatstse", type="integer")
     */
    private $abattementspecialbasesyndicatstse;

    /**
     * @var integer
     *
     * @ORM\Column(name="abattementspecialhandicapecommunal", type="integer")
     */
    private $abattementspecialhandicapecommunal;

    /**
     * @var integer
     *
     * @ORM\Column(name="abattementspecialhandicapeintercommunalite", type="integer")
     */
    private $abattementspecialhandicapeintercommunalite;

    /**
     * @var integer
     *
     * @ORM\Column(name="abattementspecialhandicapesyndicatstse", type="integer")
     */
    private $abattementspecialhandicapesyndicatstse;
    
    /**
     * @var string
     *
     * @ORM\Column(name="identifiantinvariant1", type="string",length=11)
     */
    private $identifiantinvariant1;
    
    /**
     * @var string
     *
     * @ORM\Column(name="vlactureval1", type="string",length=8)
     */
    private $vlactureval1;
    
    /**
     * @var string
     *
     * @ORM\Column(name="nature1", type="string",length=2)
     */
    private $nature1;
    
    /**
     * @var string
     *
     * @ORM\Column(name="identifiantinvariant2", type="string",length=11)
     */
    private $identifiantinvariant2;
    
    /**
     * @var string
     *
     * @ORM\Column(name="vlactureval2", type="string",length=8)
     */
    private $vlactureval2;
    
    /**
     * @var string
     *
     * @ORM\Column(name="nature2", type="string",length=2)
     */
    private $nature2;
    
    /**
     * @var string
     *
     * @ORM\Column(name="identifiantinvariant3", type="string",length=11)
     */
    private $identifiantinvariant3;
    
    /**
     * @var string
     *
     * @ORM\Column(name="vlactureval3", type="string",length=8)
     */
    private $vlactureval3;
    
    /**
     * @var string
     *
     * @ORM\Column(name="nature3", type="string",length=2)
     */
    private $nature3;
    /**
     * @var string
     *
     * @ORM\Column(name="identifiantinvariant4", type="string",length=11)
     */
    private $identifiantinvariant4;
    
    /**
     * @var string
     *
     * @ORM\Column(name="vlactureval4", type="string",length=8)
     */
    private $vlactureval4;
    
    /**
     * @var string
     *
     * @ORM\Column(name="nature4", type="string",length=2)
     */
    private $nature4;
    
    
    /**
     * @var string
     *
     * @ORM\Column(name="nblocauxtaxesTHpure", type="string",length=4)
     */
    private $nblocauxtaxesTHpure;
    

    /**
     * @ORM\OneToOne(targetEntity="ArticleTH",inversedBy="abattement", cascade={"persist","remove"})
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
     * Set abattementgeneralbasecommunale
     *
     * @param integer $abattementgeneralbasecommunale
     * @return Abattement
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
     * Set abattementgeneralbaseintercommunalite
     *
     * @param integer $abattementgeneralbaseintercommunalite
     * @return Abattement
     */
    public function setAbattementgeneralbaseintercommunalite($abattementgeneralbaseintercommunalite) {
        $this->abattementgeneralbaseintercommunalite = $abattementgeneralbaseintercommunalite;

        return $this;
    }

    /**
     * Get abattementgeneralbaseintercommunalite
     *
     * @return integer 
     */
    public function getAbattementgeneralbaseintercommunalite() {
        return $this->abattementgeneralbaseintercommunalite;
    }

    /**
     * Set abattementgeneralbasesyndicatstse
     *
     * @param integer $abattementgeneralbasesyndicatstse
     * @return Abattement
     */
    public function setAbattementgeneralbasesyndicatstse($abattementgeneralbasesyndicatstse) {
        $this->abattementgeneralbasesyndicatstse = $abattementgeneralbasesyndicatstse;

        return $this;
    }

    /**
     * Get abattementgeneralbasesyndicatstse
     *
     * @return integer 
     */
    public function getAbattementgeneralbasesyndicatstse() {
        return $this->abattementgeneralbasesyndicatstse;
    }

    /**
     * Set abattementpersonneschargecommunnal
     *
     * @param integer $abattementpersonneschargecommunnal
     * @return Abattement
     */
    public function setAbattementpersonneschargecommunnal($abattementpersonneschargecommunnal) {
        $this->abattementpersonneschargecommunnal = $abattementpersonneschargecommunnal;

        return $this;
    }

    /**
     * Get abattementpersonneschargecommunnal
     *
     * @return integer 
     */
    public function getAbattementpersonneschargecommunnal() {
        return $this->abattementpersonneschargecommunnal;
    }

    /**
     * Set abattementpersonneschargeintercommunalite
     *
     * @param integer $abattementpersonneschargeintercommunalite
     * @return Abattement
     */
    public function setAbattementpersonneschargeintercommunalite($abattementpersonneschargeintercommunalite) {
        $this->abattementpersonneschargeintercommunalite = $abattementpersonneschargeintercommunalite;

        return $this;
    }

    /**
     * Get abattementpersonneschargeintercommunalite
     *
     * @return integer 
     */
    public function getAbattementpersonneschargeintercommunalite() {
        return $this->abattementpersonneschargeintercommunalite;
    }

    /**
     * Set abattementpersonneschargesyndicatstse
     *
     * @param integer $abattementpersonneschargesyndicatstse
     * @return Abattement
     */
    public function setAbattementpersonneschargesyndicatstse($abattementpersonneschargesyndicatstse) {
        $this->abattementpersonneschargesyndicatstse = $abattementpersonneschargesyndicatstse;

        return $this;
    }

    /**
     * Get abattementpersonneschargesyndicatstse
     *
     * @return integer 
     */
    public function getAbattementpersonneschargesyndicatstse() {
        return $this->abattementpersonneschargesyndicatstse;
    }

    /**
     * Set abattementspecialbasecommunal
     *
     * @param integer $abattementspecialbasecommunal
     * @return Abattement
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
     * Set abattementspecialbaseintercommunalite
     *
     * @param integer $abattementspecialbaseintercommunalite
     * @return Abattement
     */
    public function setAbattementspecialbaseintercommunalite($abattementspecialbaseintercommunalite) {
        $this->abattementspecialbaseintercommunalite = $abattementspecialbaseintercommunalite;

        return $this;
    }

    /**
     * Get abattementspecialbaseintercommunalite
     *
     * @return integer 
     */
    public function getAbattementspecialbaseintercommunalite() {
        return $this->abattementspecialbaseintercommunalite;
    }

    /**
     * Set abattementspecialbasesyndicatstse
     *
     * @param integer $abattementspecialbasesyndicatstse
     * @return Abattement
     */
    public function setAbattementspecialbasesyndicatstse($abattementspecialbasesyndicatstse) {
        $this->abattementspecialbasesyndicatstse = $abattementspecialbasesyndicatstse;

        return $this;
    }

    /**
     * Get abattementspecialbasesyndicatstse
     *
     * @return integer 
     */
    public function getAbattementspecialbasesyndicatstse() {
        return $this->abattementspecialbasesyndicatstse;
    }

    /**
     * Set abattementspecialhandicapecommunal
     *
     * @param integer $abattementspecialhandicapecommunal
     * @return Abattement
     */
    public function setAbattementspecialhandicapecommunal($abattementspecialhandicapecommunal) {
        $this->abattementspecialhandicapecommunal = $abattementspecialhandicapecommunal;

        return $this;
    }

    /**
     * Get abattementspecialhandicapecommunal
     *
     * @return integer 
     */
    public function getAbattementspecialhandicapecommunal() {
        return $this->abattementspecialhandicapecommunal;
    }

    /**
     * Set abattementspecialhandicapeintercommunalite
     *
     * @param integer $abattementspecialhandicapeintercommunalite
     * @return Abattement
     */
    public function setAbattementspecialhandicapeintercommunalite($abattementspecialhandicapeintercommunalite) {
        $this->abattementspecialhandicapeintercommunalite = $abattementspecialhandicapeintercommunalite;

        return $this;
    }

    /**
     * Get abattementspecialhandicapeintercommunalite
     *
     * @return integer 
     */
    public function getAbattementspecialhandicapeintercommunalite() {
        return $this->abattementspecialhandicapeintercommunalite;
    }

    /**
     * Set abattementspecialhandicapesyndicatstse
     *
     * @param integer $abattementspecialhandicapesyndicatstse
     * @return Abattement
     */
    public function setAbattementspecialhandicapesyndicatstse($abattementspecialhandicapesyndicatstse) {
        $this->abattementspecialhandicapesyndicatstse = $abattementspecialhandicapesyndicatstse;

        return $this;
    }

    /**
     * Get abattementspecialhandicapesyndicatstse
     *
     * @return integer 
     */
    public function getAbattementspecialhandicapesyndicatstse() {
        return $this->abattementspecialhandicapesyndicatstse;
    }

    public function newAbattement($annee, $chaine) {
        if ($annee == "2011") {
            $this->setAbattementgeneralbasecommunale(substr($chaine, 64, 8));
            $this->setAbattementgeneralbaseintercommunalite(substr($chaine, 72, 8));
            $this->setAbattementgeneralbasesyndicatstse(substr($chaine, 80, 8));
            $this->setAbattementpersonneschargecommunnal(substr($chaine, 88, 8));
            $this->setAbattementpersonneschargeintercommunalite(substr($chaine, 96, 8));
            $this->setAbattementpersonneschargesyndicatstse(substr($chaine, 104, 8));
            $this->setAbattementspecialbasecommunal(substr($chaine, 112, 8));
            $this->setAbattementspecialbaseintercommunalite(substr($chaine, 120, 8));
            $this->setAbattementspecialbasesyndicatstse(substr($chaine, 128, 8));
            $this->setAbattementspecialhandicapecommunal(substr($chaine, 136, 8));
            $this->setAbattementspecialhandicapeintercommunalite(substr($chaine, 144, 8));
            $this->setAbattementspecialhandicapesyndicatstse(substr($chaine, 152, 8));
            $this->setIdentifiantinvariant1(substr($chaine, 191,11));
            $this->setVlactureval1(substr($chaine, 202, 8));
            $this->setNature1(substr($chaine, 210, 2));
            $this->setIdentifiantinvariant2(substr($chaine, 212,11));
            $this->setVlactureval2(substr($chaine, 223, 8));
            $this->setNature2(substr($chaine, 231, 2));
            $this->setIdentifiantinvariant3(substr($chaine,233 ,11));
            $this->setVlactureval3(substr($chaine, 244, 8));
            $this->setNature3(substr($chaine, 252, 2));
            $this->setIdentifiantinvariant4(substr($chaine,254 ,11));
            $this->setVlactureval4(substr($chaine, 265, 8));
            $this->setNature4(substr($chaine, 273, 2));
            $this->setNblocauxtaxesTHpure(substr($chaine,275, 4));
        } else if ($annee >= "2012") {
            $this->setAbattementgeneralbasecommunale(substr($chaine, 137, 8));
            $this->setAbattementgeneralbaseintercommunalite(substr($chaine, 145, 8));
            $this->setAbattementgeneralbasesyndicatstse(substr($chaine, 153, 8));
            $this->setAbattementpersonneschargecommunnal(substr($chaine, 161, 8));
            $this->setAbattementpersonneschargeintercommunalite(substr($chaine, 169, 8));
            $this->setAbattementpersonneschargesyndicatstse(substr($chaine, 177, 8));
            $this->setAbattementspecialbasecommunal(substr($chaine, 185, 8));
            $this->setAbattementspecialbaseintercommunalite(substr($chaine, 193, 8));
            $this->setAbattementspecialbasesyndicatstse(substr($chaine, 201, 8));
            $this->setAbattementspecialhandicapecommunal(substr($chaine, 209, 8));
            $this->setAbattementspecialhandicapeintercommunalite(substr($chaine, 217, 8));
            $this->setAbattementspecialhandicapesyndicatstse(substr($chaine, 225, 8));
            $this->setIdentifiantinvariant1(substr($chaine, 264,11));
            $this->setVlactureval1(substr($chaine, 275, 8));
            $this->setNature1(substr($chaine, 283, 2));
            $this->setIdentifiantinvariant2(substr($chaine, 285,11));
            $this->setVlactureval2(substr($chaine, 296, 8));
            $this->setNature2(substr($chaine, 304, 2));
            $this->setIdentifiantinvariant3(substr($chaine,306 ,11));
            $this->setVlactureval3(substr($chaine, 317, 8));
            $this->setNature3(substr($chaine, 325, 2));
            $this->setIdentifiantinvariant4(substr($chaine,327 ,11));
            $this->setVlactureval4(substr($chaine, 338, 8));
            $this->setNature4(substr($chaine, 346, 2));
            $this->setNblocauxtaxesTHpure(substr($chaine,348, 4));
        } else {
            $this->setAbattementgeneralbasecommunale(substr($chaine, 137, 8));
            $this->setAbattementgeneralbaseintercommunalite(substr($chaine, 145, 8));
            $this->setAbattementgeneralbasesyndicatstse(substr($chaine, 153, 8));
            $this->setAbattementpersonneschargecommunnal(substr($chaine, 161, 8));
            $this->setAbattementpersonneschargeintercommunalite(substr($chaine, 169, 8));
            $this->setAbattementpersonneschargesyndicatstse(substr($chaine, 177, 8));
            $this->setAbattementspecialbasecommunal(substr($chaine, 185, 8));
            $this->setAbattementspecialbaseintercommunalite(substr($chaine, 193, 8));
            $this->setAbattementspecialbasesyndicatstse(substr($chaine, 201, 8));
            $this->setAbattementspecialhandicapecommunal(substr($chaine, 209, 8));
            $this->setAbattementspecialhandicapeintercommunalite(substr($chaine, 217, 8));
            $this->setAbattementspecialhandicapesyndicatstse(substr($chaine, 225, 8));
            $this->setIdentifiantinvariant1(substr($chaine, 264,11));
            $this->setVlactureval1(substr($chaine, 275, 8));
            $this->setNature1(substr($chaine, 283, 2));
            $this->setIdentifiantinvariant2(substr($chaine, 285,11));
            $this->setVlactureval2(substr($chaine, 296, 8));
            $this->setNature2(substr($chaine, 304, 2));
            $this->setIdentifiantinvariant3(substr($chaine,306 ,11));
            $this->setVlactureval3(substr($chaine, 317, 8));
            $this->setNature3(substr($chaine, 325, 2));
            $this->setIdentifiantinvariant4(substr($chaine,327 ,11));
            $this->setVlactureval4(substr($chaine, 338, 8));
            $this->setNature4(substr($chaine, 346, 2));
            $this->setNblocauxtaxesTHpure(substr($chaine,348, 4));
        }
        return $this;
    }

    /**
     * Set articleTH
     *
     * @param \Fiscalite\GestionFiscaliteBundle\Entity\ArticleTH $articleTH
     * @return Abattement
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

    public function moinssetAbattementspecialhandicapecommunal() {
        if ($this->getAbattementspecialhandicapecommunal() != NULL) {
            return $this->getAbattementspecialhandicapecommunal();
        } else {
            return 0;
        }
    }


    /**
     * Set identifiantinvariant1
     *
     * @param string $identifiantinvariant1
     * @return Abattement
     */
    public function setIdentifiantinvariant1($identifiantinvariant1)
    {
        $this->identifiantinvariant1 = $identifiantinvariant1;

        return $this;
    }

    /**
     * Get identifiantinvariant1
     *
     * @return string 
     */
    public function getIdentifiantinvariant1()
    {
        return $this->identifiantinvariant1;
    }

    /**
     * Set vlactureval1
     *
     * @param string $vlactureval1
     * @return Abattement
     */
    public function setVlactureval1($vlactureval1)
    {
        $this->vlactureval1 = $vlactureval1;

        return $this;
    }

    /**
     * Get vlactureval1
     *
     * @return string 
     */
    public function getVlactureval1()
    {
        return $this->vlactureval1;
    }

    /**
     * Set nature1
     *
     * @param string $nature1
     * @return Abattement
     */
    public function setNature1($nature1)
    {
        $this->nature1 = $nature1;

        return $this;
    }

    /**
     * Get nature1
     *
     * @return string 
     */
    public function getNature1()
    {
        return $this->nature1;
    }

    /**
     * Set identifiantinvariant2
     *
     * @param string $identifiantinvariant2
     * @return Abattement
     */
    public function setIdentifiantinvariant2($identifiantinvariant2)
    {
        $this->identifiantinvariant2 = $identifiantinvariant2;

        return $this;
    }

    /**
     * Get identifiantinvariant2
     *
     * @return string 
     */
    public function getIdentifiantinvariant2()
    {
        return $this->identifiantinvariant2;
    }

    /**
     * Set vlactureval2
     *
     * @param string $vlactureval2
     * @return Abattement
     */
    public function setVlactureval2($vlactureval2)
    {
        $this->vlactureval2 = $vlactureval2;

        return $this;
    }

    /**
     * Get vlactureval2
     *
     * @return string 
     */
    public function getVlactureval2()
    {
        return $this->vlactureval2;
    }

    /**
     * Set nature2
     *
     * @param string $nature2
     * @return Abattement
     */
    public function setNature2($nature2)
    {
        $this->nature2 = $nature2;

        return $this;
    }

    /**
     * Get nature2
     *
     * @return string 
     */
    public function getNature2()
    {
        return $this->nature2;
    }

    /**
     * Set identifiantinvariant3
     *
     * @param string $identifiantinvariant3
     * @return Abattement
     */
    public function setIdentifiantinvariant3($identifiantinvariant3)
    {
        $this->identifiantinvariant3 = $identifiantinvariant3;

        return $this;
    }

    /**
     * Get identifiantinvariant3
     *
     * @return string 
     */
    public function getIdentifiantinvariant3()
    {
        return $this->identifiantinvariant3;
    }

    /**
     * Set vlactureval3
     *
     * @param string $vlactureval3
     * @return Abattement
     */
    public function setVlactureval3($vlactureval3)
    {
        $this->vlactureval3 = $vlactureval3;

        return $this;
    }

    /**
     * Get vlactureval3
     *
     * @return string 
     */
    public function getVlactureval3()
    {
        return $this->vlactureval3;
    }

    /**
     * Set nature3
     *
     * @param string $nature3
     * @return Abattement
     */
    public function setNature3($nature3)
    {
        $this->nature3 = $nature3;

        return $this;
    }

    /**
     * Get nature3
     *
     * @return string 
     */
    public function getNature3()
    {
        return $this->nature3;
    }

    /**
     * Set nblocauxtaxesTHpure
     *
     * @param string $nblocauxtaxesTHpure
     * @return Abattement
     */
    public function setNblocauxtaxesTHpure($nblocauxtaxesTHpure)
    {
        $this->nblocauxtaxesTHpure = $nblocauxtaxesTHpure;

        return $this;
    }

    /**
     * Get nblocauxtaxesTHpure
     *
     * @return string 
     */
    public function getNblocauxtaxesTHpure()
    {
        return $this->nblocauxtaxesTHpure;
    }

    /**
     * Set identifiantinvariant4
     *
     * @param string $identifiantinvariant4
     * @return Abattement
     */
    public function setIdentifiantinvariant4($identifiantinvariant4)
    {
        $this->identifiantinvariant4 = $identifiantinvariant4;

        return $this;
    }

    /**
     * Get identifiantinvariant4
     *
     * @return string 
     */
    public function getIdentifiantinvariant4()
    {
        return $this->identifiantinvariant4;
    }

    /**
     * Set vlactureval4
     *
     * @param string $vlactureval4
     * @return Abattement
     */
    public function setVlactureval4($vlactureval4)
    {
        $this->vlactureval4 = $vlactureval4;

        return $this;
    }

    /**
     * Get vlactureval4
     *
     * @return string 
     */
    public function getVlactureval4()
    {
        return $this->vlactureval4;
    }

    /**
     * Set nature4
     *
     * @param string $nature4
     * @return Abattement
     */
    public function setNature4($nature4)
    {
        $this->nature4 = $nature4;

        return $this;
    }

    /**
     * Get nature4
     *
     * @return string 
     */
    public function getNature4()
    {
        return $this->nature4;
    }
}
