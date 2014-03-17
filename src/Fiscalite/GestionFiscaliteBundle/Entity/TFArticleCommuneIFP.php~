<?php

namespace Fiscalite\GestionFiscaliteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TFArticleCommuneIFP
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Fiscalite\GestionFiscaliteBundle\Entity\TFArticleCommuneIFPRepository")
 */
class TFArticleCommuneIFP
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
     * @ORM\Column(name="typeTraitement", type="string", length=1)
     */
    private $typeTraitement;

    /**
     * @var string
     *
     * @ORM\Column(name="libCommunne", type="string", length=30)
     */
    private $libCommunne;

    /**
     * @var integer
     *
     * @ORM\Column(name="n0Role", type="integer")
     */
    private $n0Role;

    /**
     * @var string
     *
     * @ORM\Column(name="dMER", type="integer")
     */
    private $dMER;

    /**
     * @var integer
     *
     * @ORM\Column(name="dMajo", type="integer")
     */
    private $dMajo;

    /**
     * @var string
     *
     * @ORM\Column(name="libSyndicatTEOM", type="string", length=30)
     */
    private $libSyndicatTEOM;

    /**
     * @var integer
     *
     * @ORM\Column(name="tXNTATFPNB", type="float")
     */
    private $tXNTATFPNB;

    /**
     * @var integer
     *
     * @ORM\Column(name="tXBC", type="float")
     */
    private $tXBC;

    /**
     * @var integer
     *
     * @ORM\Column(name="tXBS", type="float")
     */
    private $tXBS;

    /**
     * @var integer
     *
     * @ORM\Column(name="tXBIC", type="float")
     */
    private $tXBIC;

    /**
     * @var integer
     *
     * @ORM\Column(name="tXBTSEGP", type="float")
     */
    private $tXBTSEGP;

    /**
     * @var integer
     *
     * @ORM\Column(name="tXBTSEF", type="float")
     */
    private $tXBTSEF;

    /**
     * @var integer
     *
     * @ORM\Column(name="tXBTOMP", type="float")
     */
    private $tXBTOMP;

    /**
     * @var integer
     *
     * @ORM\Column(name="tXBTOMRA", type="float")
     */
    private $tXBTOMRA;

    /**
     * @var integer
     *
     * @ORM\Column(name="tXBTOMRB", type="float")
     */
    private $tXBTOMRB;

    /**
     * @var integer
     *
     * @ORM\Column(name="tXBTOMRC", type="float")
     */
    private $tXBTOMRC;

    /**
     * @var integer
     *
     * @ORM\Column(name="tXBTOMRD", type="float")
     */
    private $tXBTOMRD;

    /**
     * @var string
     *
     * @ORM\Column(name="typeBENEFOM", type="string", length=1)
     */
    private $typeBENEFOM;

    /**
     * @var integer
     *
     * @ORM\Column(name="tXNC", type="float")
     */
    private $tXNC;

    /**
     * @var integer
     *
     * @ORM\Column(name="tXNS", type="float")
     */
    private $tXNS;

    /**
     * @var integer
     *
     * @ORM\Column(name="tXNIC", type="float")
     */
    private $tXNIC;

    /**
     * @var integer
     *
     * @ORM\Column(name="tXNTSEGP", type="float")
     */
    private $tXNTSEGP;

    /**
     * @var integer
     *
     * @ORM\Column(name="tXNTSEF", type="float")
     */
    private $tXNTSEF;

    /**
     * @var integer
     *
     * @ORM\Column(name="tXNCAAA", type="float")
     */
    private $tXNCAAA;

    /**
     * @var string
     *
     * @ORM\Column(name="libelleICAdhC", type="string", length=30)
     */
    private $libelleICAdhC;

    /**
     * @var string
     *
     * @ORM\Column(name="optionSupportIC", type="string", length=1)
     */
    private $optionSupportIC;
    
    /**
     * @var string
     *
     * @ORM\Column(name="optionSupportC", type="string", length=1)
     */
    private $optionSupportC;

    /**
     * @var string
     *
     * @ORM\Column(name="optionSupportDept", type="string", length=1)
     */
    private $optionSupportDept;

    /**
     * @var string
     *
     * @ORM\Column(name="codeBeneficiaireOM", type="string", length=4)
     */
    private $codeBeneficiaireOM;    
        
    /**
     * @var string
     *
     * @ORM\Column(name="sIREN", type="string", length=9)
     */
    private $sIREN; 
    
    /**
     * @var string
     *
     * @ORM\Column(name="codeKSyndicatBeneficiaireTEOM", type="string", length=4)
     */
    private $codeKSyndicatBeneficiaireTEOM; 
    
    /**
     * @var string
     *
     * @ORM\Column(name="codeBeneficiaireTATFPNB", type="string", length=4)
     */
    private $codeBeneficiaireTATFPNB; 
        
    /**
     * @var string
     *
     * @ORM\Column(name="batiEPCI", type="string", length=1)
     */
    private $batiEPCI; 
    
    /**
     * @var string
     *
     * @ORM\Column(name="nonBatiEPCI", type="string", length=1)
     */
    private $nonBatiEPCI; 
    
    /**
    * @ORM\ManyToOne(targetEntity="Fiscalite\GestionFiscaliteBundle\Entity\Fichier", inversedBy="tFarticlesCommuneIFP", cascade={"persist"})
    */
    private $fichier;
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
     * Set typeTraitement
     *
     * @param string $typeTraitement
     * @return TFArticleCommuneIFP
     */
    public function setTypeTraitement($typeTraitement)
    {
        $this->typeTraitement = $typeTraitement;

        return $this;
    }

    /**
     * Get typeTraitement
     *
     * @return string 
     */
    public function getTypeTraitement()
    {
        return $this->typeTraitement;
    }

    /**
     * Set libCommunne
     *
     * @param string $libCommunne
     * @return TFArticleCommuneIFP
     */
    public function setLibCommunne($libCommunne)
    {
        $this->libCommunne = $libCommunne;

        return $this;
    }

    /**
     * Get libCommunne
     *
     * @return string 
     */
    public function getLibCommunne()
    {
        return $this->libCommunne;
    }

    /**
     * Set n0Role
     *
     * @param integer $n0Role
     * @return TFArticleCommuneIFP
     */
    public function setN0Role($n0Role)
    {
        $this->n0Role = $n0Role;

        return $this;
    }

    /**
     * Get n0Role
     *
     * @return integer 
     */
    public function getN0Role()
    {
        return $this->n0Role;
    }

    /**
     * Set dMER
     *
     * @param string $dMER
     * @return TFArticleCommuneIFP
     */
    public function setDMER($dMER)
    {
        $this->dMER = $dMER;

        return $this;
    }

    /**
     * Get dMER
     *
     * @return string 
     */
    public function getDMER()
    {
        return $this->dMER;
    }

    /**
     * Set dMajo
     *
     * @param integer $dMajo
     * @return TFArticleCommuneIFP
     */
    public function setDMajo($dMajo)
    {
        $this->dMajo = $dMajo;

        return $this;
    }

    /**
     * Get dMajo
     *
     * @return integer 
     */
    public function getDMajo()
    {
        return $this->dMajo;
    }

    /**
     * Set libSyndicatTEOM
     *
     * @param string $libSyndicatTEOM
     * @return TFArticleCommuneIFP
     */
    public function setLibSyndicatTEOM($libSyndicatTEOM)
    {
        $this->libSyndicatTEOM = $libSyndicatTEOM;

        return $this;
    }

    /**
     * Get libSyndicatTEOM
     *
     * @return string 
     */
    public function getLibSyndicatTEOM()
    {
        return $this->libSyndicatTEOM;
    }

    /**
     * Set tXNTATFPNB
     *
     * @param integer $tXNTATFPNB
     * @return TFArticleCommuneIFP
     */
    public function setTXNTATFPNB($tXNTATFPNB)
    {
        $this->tXNTATFPNB = $tXNTATFPNB;

        return $this;
    }

    /**
     * Get tXNTATFPNB
     *
     * @return integer 
     */
    public function getTXNTATFPNB()
    {
        return $this->tXNTATFPNB;
    }

    /**
     * Set tXBC
     *
     * @param integer $tXBC
     * @return TFArticleCommuneIFP
     */
    public function setTXBC($tXBC)
    {
        $this->tXBC = $tXBC;

        return $this;
    }

    /**
     * Get tXBC
     *
     * @return integer 
     */
    public function getTXBC()
    {
        return $this->tXBC;
    }

    /**
     * Set tXBS
     *
     * @param integer $tXBS
     * @return TFArticleCommuneIFP
     */
    public function setTXBS($tXBS)
    {
        $this->tXBS = $tXBS;

        return $this;
    }

    /**
     * Get tXBS
     *
     * @return integer 
     */
    public function getTXBS()
    {
        return $this->tXBS;
    }

    /**
     * Set tXBIC
     *
     * @param integer $tXBIC
     * @return TFArticleCommuneIFP
     */
    public function setTXBIC($tXBIC)
    {
        $this->tXBIC = $tXBIC;

        return $this;
    }

    /**
     * Get tXBIC
     *
     * @return integer 
     */
    public function getTXBIC()
    {
        return $this->tXBIC;
    }

    /**
     * Set tXBTSEGP
     *
     * @param integer $tXBTSEGP
     * @return TFArticleCommuneIFP
     */
    public function setTXBTSEGP($tXBTSEGP)
    {
        $this->tXBTSEGP = $tXBTSEGP;

        return $this;
    }

    /**
     * Get tXBTSEGP
     *
     * @return integer 
     */
    public function getTXBTSEGP()
    {
        return $this->tXBTSEGP;
    }

    /**
     * Set tXBTSEF
     *
     * @param integer $tXBTSEF
     * @return TFArticleCommuneIFP
     */
    public function setTXBTSEF($tXBTSEF)
    {
        $this->tXBTSEF = $tXBTSEF;

        return $this;
    }

    /**
     * Get tXBTSEF
     *
     * @return integer 
     */
    public function getTXBTSEF()
    {
        return $this->tXBTSEF;
    }

    /**
     * Set tXBTOMP
     *
     * @param integer $tXBTOMP
     * @return TFArticleCommuneIFP
     */
    public function setTXBTOMP($tXBTOMP)
    {
        $this->tXBTOMP = $tXBTOMP;

        return $this;
    }

    /**
     * Get tXBTOMP
     *
     * @return integer 
     */
    public function getTXBTOMP()
    {
        return $this->tXBTOMP;
    }

    /**
     * Set tXBTOMRA
     *
     * @param integer $tXBTOMRA
     * @return TFArticleCommuneIFP
     */
    public function setTXBTOMRA($tXBTOMRA)
    {
        $this->tXBTOMRA = $tXBTOMRA;

        return $this;
    }

    /**
     * Get tXBTOMRA
     *
     * @return integer 
     */
    public function getTXBTOMRA()
    {
        return $this->tXBTOMRA;
    }

    /**
     * Set tXBTOMRB
     *
     * @param integer $tXBTOMRB
     * @return TFArticleCommuneIFP
     */
    public function setTXBTOMRB($tXBTOMRB)
    {
        $this->tXBTOMRB = $tXBTOMRB;

        return $this;
    }

    /**
     * Get tXBTOMRB
     *
     * @return integer 
     */
    public function getTXBTOMRB()
    {
        return $this->tXBTOMRB;
    }

    /**
     * Set tXBTOMRC
     *
     * @param integer $tXBTOMRC
     * @return TFArticleCommuneIFP
     */
    public function setTXBTOMRC($tXBTOMRC)
    {
        $this->tXBTOMRC = $tXBTOMRC;

        return $this;
    }

    /**
     * Get tXBTOMRC
     *
     * @return integer 
     */
    public function getTXBTOMRC()
    {
        return $this->tXBTOMRC;
    }

    /**
     * Set tXBTOMRD
     *
     * @param integer $tXBTOMRD
     * @return TFArticleCommuneIFP
     */
    public function setTXBTOMRD($tXBTOMRD)
    {
        $this->tXBTOMRD = $tXBTOMRD;

        return $this;
    }

    /**
     * Get tXBTOMRD
     *
     * @return integer 
     */
    public function getTXBTOMRD()
    {
        return $this->tXBTOMRD;
    }

    /**
     * Set typeBENEFOM
     *
     * @param string $typeBENEFOM
     * @return TFArticleCommuneIFP
     */
    public function setTypeBENEFOM($typeBENEFOM)
    {
        $this->typeBENEFOM = $typeBENEFOM;

        return $this;
    }

    /**
     * Get typeBENEFOM
     *
     * @return string 
     */
    public function getTypeBENEFOM()
    {
        return $this->typeBENEFOM;
    }

    /**
     * Set tXNC
     *
     * @param integer $tXNC
     * @return TFArticleCommuneIFP
     */
    public function setTXNC($tXNC)
    {
        $this->tXNC = $tXNC;

        return $this;
    }

    /**
     * Get tXNC
     *
     * @return integer 
     */
    public function getTXNC()
    {
        return $this->tXNC;
    }

    /**
     * Set tXNS
     *
     * @param integer $tXNS
     * @return TFArticleCommuneIFP
     */
    public function setTXNS($tXNS)
    {
        $this->tXNS = $tXNS;

        return $this;
    }

    /**
     * Get tXNS
     *
     * @return integer 
     */
    public function getTXNS()
    {
        return $this->tXNS;
    }

    /**
     * Set tXNIC
     *
     * @param integer $tXNIC
     * @return TFArticleCommuneIFP
     */
    public function setTXNIC($tXNIC)
    {
        $this->tXNIC = $tXNIC;

        return $this;
    }

    /**
     * Get tXNIC
     *
     * @return integer 
     */
    public function getTXNIC()
    {
        return $this->tXNIC;
    }

    /**
     * Set tXNTSEGP
     *
     * @param integer $tXNTSEGP
     * @return TFArticleCommuneIFP
     */
    public function setTXNTSEGP($tXNTSEGP)
    {
        $this->tXNTSEGP = $tXNTSEGP;

        return $this;
    }

    /**
     * Get tXNTSEGP
     *
     * @return integer 
     */
    public function getTXNTSEGP()
    {
        return $this->tXNTSEGP;
    }

    /**
     * Set tXNTSEF
     *
     * @param integer $tXNTSEF
     * @return TFArticleCommuneIFP
     */
    public function setTXNTSEF($tXNTSEF)
    {
        $this->tXNTSEF = $tXNTSEF;

        return $this;
    }

    /**
     * Get tXNTSEF
     *
     * @return integer 
     */
    public function getTXNTSEF()
    {
        return $this->tXNTSEF;
    }

    /**
     * Set tXNCAAA
     *
     * @param integer $tXNCAAA
     * @return TFArticleCommuneIFP
     */
    public function setTXNCAAA($tXNCAAA)
    {
        $this->tXNCAAA = $tXNCAAA;

        return $this;
    }

    /**
     * Get tXNCAAA
     *
     * @return integer 
     */
    public function getTXNCAAA()
    {
        return $this->tXNCAAA;
    }

    /**
     * Set libelleICAdhC
     *
     * @param string $libelleICAdhC
     * @return TFArticleCommuneIFP
     */
    public function setLibelleICAdhC($libelleICAdhC)
    {
        $this->libelleICAdhC = $libelleICAdhC;

        return $this;
    }

    /**
     * Get libelleICAdhC
     *
     * @return string 
     */
    public function getLibelleICAdhC()
    {
        return $this->libelleICAdhC;
    }

    /**
     * Set optionSupportIC
     *
     * @param string $optionSupportIC
     * @return TFArticleCommuneIFP
     */
    public function setOptionSupportIC($optionSupportIC)
    {
        $this->optionSupportIC = $optionSupportIC;

        return $this;
    }

    /**
     * Get optionSupportIC
     *
     * @return string 
     */
    public function getOptionSupportIC()
    {
        return $this->optionSupportIC;
    }

    /**
     * Set optionSupportC
     *
     * @param string $optionSupportC
     * @return TFArticleCommuneIFP
     */
    public function setOptionSupportC($optionSupportC)
    {
        $this->optionSupportC = $optionSupportC;

        return $this;
    }

    /**
     * Get optionSupportC
     *
     * @return string 
     */
    public function getOptionSupportC()
    {
        return $this->optionSupportC;
    }

    /**
     * Set optionSupportDept
     *
     * @param string $optionSupportDept
     * @return TFArticleCommuneIFP
     */
    public function setOptionSupportDept($optionSupportDept)
    {
        $this->optionSupportDept = $optionSupportDept;

        return $this;
    }

    /**
     * Get optionSupportDept
     *
     * @return string 
     */
    public function getOptionSupportDept()
    {
        return $this->optionSupportDept;
    }

    /**
     * Set codeBeneficiaireOM
     *
     * @param string $codeBeneficiaireOM
     * @return TFArticleCommuneIFP
     */
    public function setCodeBeneficiaireOM($codeBeneficiaireOM)
    {
        $this->codeBeneficiaireOM = $codeBeneficiaireOM;

        return $this;
    }

    /**
     * Get codeBeneficiaireOM
     *
     * @return string 
     */
    public function getCodeBeneficiaireOM()
    {
        return $this->codeBeneficiaireOM;
    }

    /**
     * Set sIREN
     *
     * @param string $sIREN
     * @return TFArticleCommuneIFP
     */
    public function setSIREN($sIREN)
    {
        $this->sIREN = $sIREN;

        return $this;
    }

    /**
     * Get sIREN
     *
     * @return string 
     */
    public function getSIREN()
    {
        return $this->sIREN;
    }

    /**
     * Set codeKSyndicatBeneficiaireTEOM
     *
     * @param string $codeKSyndicatBeneficiaireTEOM
     * @return TFArticleCommuneIFP
     */
    public function setCodeKSyndicatBeneficiaireTEOM($codeKSyndicatBeneficiaireTEOM)
    {
        $this->codeKSyndicatBeneficiaireTEOM = $codeKSyndicatBeneficiaireTEOM;

        return $this;
    }

    /**
     * Get codeKSyndicatBeneficiaireTEOM
     *
     * @return string 
     */
    public function getCodeKSyndicatBeneficiaireTEOM()
    {
        return $this->codeKSyndicatBeneficiaireTEOM;
    }

    /**
     * Set codeBeneficiaireTATFPNB
     *
     * @param string $codeBeneficiaireTATFPNB
     * @return TFArticleCommuneIFP
     */
    public function setCodeBeneficiaireTATFPNB($codeBeneficiaireTATFPNB)
    {
        $this->codeBeneficiaireTATFPNB = $codeBeneficiaireTATFPNB;

        return $this;
    }

    /**
     * Get codeBeneficiaireTATFPNB
     *
     * @return string 
     */
    public function getCodeBeneficiaireTATFPNB()
    {
        return $this->codeBeneficiaireTATFPNB;
    }

    /**
     * Set batiEPCI
     *
     * @param string $batiEPCI
     * @return TFArticleCommuneIFP
     */
    public function setBatiEPCI($batiEPCI)
    {
        $this->batiEPCI = $batiEPCI;

        return $this;
    }

    /**
     * Get batiEPCI
     *
     * @return string 
     */
    public function getBatiEPCI()
    {
        return $this->batiEPCI;
    }
    
    /**
     * Set nonBatiEPCI
     *
     * @param string $nonBatiEPCI
     * @return TFArticleCommuneIFP
     */
    public function setNonBatiEPCI($nonBatiEPCI)
    {
        $this->nonBatiEPCI = $nonBatiEPCI;

        return $this;
    }

    /**
     * Get nonBatiEPCI
     *
     * @return string 
     */
    public function getNonBatiEPCI()
    {
        return $this->nonBatiEPCI;
    }
    
    public function newTFArticleCommuneIFP($annee,$chaine){
        $pourcentage=100000;
        if ($annee>="2011" && $annee<="2013"){
          $this->setTypeTraitement(substr($chaine,28,1));
          $this->setLibCommunne(substr($chaine,29,30));
          $this->setN0Role(substr($chaine,59,3));
          $this->setDMER(substr($chaine,62,8));
          $this->setDMajo(substr($chaine,70,8));
          $this->setLibSyndicatTEOM(substr($chaine,78,30));
          $this->setTXNTATFPNB(substr($chaine,109,8)/$pourcentage);
          $this->setTXBC(substr($chaine,117,8)/$pourcentage);
          $this->setTXBS(substr($chaine,125,8)/$pourcentage);
          $this->setTXBIC(substr($chaine,133,8)/$pourcentage);
          $this->setTXBTSEGP(substr($chaine,141,8)/$pourcentage);
          $this->setTXBTSEF(substr($chaine,149,8)/$pourcentage);
          $this->setTXBTOMP(substr($chaine,157,8)/$pourcentage);
          $this->setTXBTOMRA(substr($chaine,165,8)/$pourcentage);
          $this->setTXBTOMRB(substr($chaine,173,8)/$pourcentage);
          $this->setTXBTOMRC(substr($chaine,181,8)/$pourcentage);
          $this->setTXBTOMRD(substr($chaine,189,8)/$pourcentage);
          $this->setTypeBENEFOM(substr($chaine,197,1));
          $this->setTXNC(substr($chaine,198,8)/$pourcentage);
          $this->setTXNS(substr($chaine,206,8)/$pourcentage);
          $this->setTXNIC(substr($chaine,214,8)/$pourcentage);
          $this->setTXNTSEGP(substr($chaine,222,8)/$pourcentage);
          $this->setTXNTSEF(substr($chaine,230,8)/$pourcentage);
          $this->setTXNCAAA(substr($chaine,238,8)/$pourcentage);
          $this->setLibelleICAdhC(substr($chaine,246,30));
          $this->setOptionSupportIC(substr($chaine,276,1));
          $this->setOptionSupportC(substr($chaine,277,1));
          $this->setOptionSupportDept(substr($chaine,278,1));
          $this->setCodeBeneficiaireOM(substr($chaine,280,4));
          $this->setSIREN(substr($chaine,284,9));
          $this->setCodeKSyndicatBeneficiaireTEOM(substr($chaine,293,4));
          $this->setCodeBeneficiaireTATFPNB(substr($chaine,297,4));
          $this->setBatiEPCI(substr($chaine,301,1));
          $this->setNonBatiEPCI(substr($chaine,302,1));
          
        }else {
          $this->setTypeTraitement(substr($chaine,28,1));
          $this->setLibCommunne(substr($chaine,29,30));
          $this->setN0Role(substr($chaine,59,3));
          $this->setDMER(substr($chaine,62,8));
          $this->setDMajo(substr($chaine,70,8));
          $this->setLibSyndicatTEOM(substr($chaine,78,30));
          $this->setTXNTATFPNB(substr($chaine,109,8)/$pourcentage);
          $this->setTXBC(substr($chaine,117,8)/$pourcentage);
          $this->setTXBS(substr($chaine,125,8)/$pourcentage);
          $this->setTXBIC(substr($chaine,133,8)/$pourcentage);
          $this->setTXBTSEGP(substr($chaine,141,8)/$pourcentage);
          $this->setTXBTSEF(substr($chaine,149,8)/$pourcentage);
          $this->setTXBTOMP(substr($chaine,157,8)/$pourcentage);
          $this->setTXBTOMRA(substr($chaine,165,8)/$pourcentage);
          $this->setTXBTOMRB(substr($chaine,173,8)/$pourcentage);
          $this->setTXBTOMRC(substr($chaine,181,8)/$pourcentage);
          $this->setTXBTOMRD(substr($chaine,189,8)/$pourcentage);
          $this->setTypeBENEFOM(substr($chaine,197,1));
          $this->setTXNC(substr($chaine,198,8)/$pourcentage);
          $this->setTXNS(substr($chaine,206,8)/$pourcentage);
          $this->setTXNIC(substr($chaine,214,8)/$pourcentage);
          $this->setTXNTSEGP(substr($chaine,222,8)/$pourcentage);
          $this->setTXNTSEF(substr($chaine,230,8)/$pourcentage);
          $this->setTXNCAAA(substr($chaine,238,8)/$pourcentage);
          $this->setLibelleICAdhC(substr($chaine,246,30));
          $this->setOptionSupportIC(substr($chaine,276,1));
          $this->setOptionSupportC(substr($chaine,277,1));
          $this->setOptionSupportDept(substr($chaine,278,1));
          $this->setCodeBeneficiaireOM(substr($chaine,280,4));
          $this->setSIREN(substr($chaine,284,9));
          $this->setCodeKSyndicatBeneficiaireTEOM(substr($chaine,293,4));
          $this->setCodeBeneficiaireTATFPNB(substr($chaine,297,4));
          $this->setBatiEPCI(substr($chaine,301,1));
          $this->setNonBatiEPCI(substr($chaine,302,1));
        }
        return $this;
    }

    

    /**
     * Set fichier
     *
     * @param \Fiscalite\GestionFiscaliteBundle\Entity\Fichier $fichier
     * @return TFArticleCommuneIFP
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
