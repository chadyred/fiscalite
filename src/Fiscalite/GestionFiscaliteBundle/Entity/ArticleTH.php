<?php

namespace Fiscalite\GestionFiscaliteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ArticleTH
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Fiscalite\GestionFiscaliteBundle\Entity\ArticleTHRepository")
 */
class ArticleTH extends Article {

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
     * @ORM\Column(name="nomprenom", type="string", length=40)
     */
    private $nomprenom;

    /**
     * @var string
     *
     * @ORM\Column(name="suitenom", type="string", length=35, nullable=true)
     */
    private $suitenom;

    /**
     * @var integer
     *
     * @ORM\Column(name="montantnetapayer", type="integer")
     */
    private $montantnetapayer;

    /**
     * @var integer
     *
     * @ORM\Column(name="montantdesfraisderole", type="integer")
     */
    private $montantdesfraisderole;

    /**
     * @var string
     *
     * @ORM\Column(name="codeTAX", type="string", length=1)
     */
    private $codeTAX;

    /**
     * @var integer
     *
     * @ORM\Column(name="montantnonvaleureventuelle", type="integer")
     */
    private $montantnonvaleureventuelle;

    /**
     * @ORM\OneToOne(targetEntity="Fiscalite\GestionFiscaliteBundle\Entity\Base", mappedBy="articleTH", cascade={"persist","remove"})
     */
    private $base;

    /**
     * @ORM\OneToOne(targetEntity="Fiscalite\GestionFiscaliteBundle\Entity\Cotisation", mappedBy="articleTH", cascade={"persist","remove"})
     */
    private $cotisation;

    /**
     * @ORM\OneToOne(targetEntity="Fiscalite\GestionFiscaliteBundle\Entity\Abattement", mappedBy="articleTH", cascade={"persist","remove"})
     */
    private $abattement;

    /**
     * @ORM\OneToOne(targetEntity="Fiscalite\GestionFiscaliteBundle\Entity\Adresse", mappedBy="articleTH", cascade={"persist","remove"})
     */
    private $adresse;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return parent::getId();
    }

    /**
     * Set montantnetapayer
     *
     * @param integer $montantnetapayer
     * @return ArticleTH
     */
    public function setMontantnetapayer($montantnetapayer) {
        $this->montantnetapayer = $montantnetapayer;

        return $this;
    }

    /**
     * Get montantnetapayer
     *
     * @return integer 
     */
    public function getMontantnetapayer() {
        return $this->montantnetapayer;
    }

    /**
     * Set montantdesfraisderole
     *
     * @param integer $montantdesfraisderole
     * @return ArticleTH
     */
    public function setMontantdesfraisderole($montantdesfraisderole) {
        $this->montantdesfraisderole = $montantdesfraisderole;

        return $this;
    }

    /**
     * Get montantdesfraisderole
     *
     * @return integer 
     */
    public function getMontantdesfraisderole() {
        return $this->montantdesfraisderole;
    }

    /**
     * Set nomprenom
     *
     * @param string $nomprenom
     * @return ArticleTH
     */
    public function setNomprenom($nomprenom) {
        $this->nomprenom = $nomprenom;

        return $this;
    }

    /**
     * Get nomprenom
     *
     * @return string 
     */
    public function getNomprenom() {
        return $this->nomprenom;
    }

    /**
     * Set suitenom
     *
     * @param string $suitenom
     * @return ArticleTH
     */
    public function setSuitenom($suitenom) {
        $this->suitenom = $suitenom;

        return $this;
    }

    /**
     * Get suitenom
     *
     * @return string 
     */
    public function getSuitenom() {
        return $this->suitenom;
    }

    /**
     * Set base
     *
     * @param \Fiscalite\GestionFiscaliteBundle\Entity\Base $base
     * @return ArticleTH
     */
    public function setBase(\Fiscalite\GestionFiscaliteBundle\Entity\Base $base = null) {
        $this->base = $base;

        return $this;
    }

    /**
     * Get base
     *
     * @return \Fiscalite\GestionFiscaliteBundle\Entity\Base 
     */
    public function getBase() {
        return $this->base;
    }

    /**
     * Set cotisation
     *
     * @param \Fiscalite\GestionFiscaliteBundle\Entity\Cotisation $cotisation
     * @return ArticleTH
     */
    public function setCotisation(\Fiscalite\GestionFiscaliteBundle\Entity\Cotisation $cotisation = null) {
        $this->cotisation = $cotisation;

        return $this;
    }

    /**
     * Get cotisation
     *
     * @return \Fiscalite\GestionFiscaliteBundle\Entity\Cotisation 
     */
    public function getCotisation() {
        return $this->cotisation;
    }

    /**
     * Set abattement
     *
     * @param \Fiscalite\GestionFiscaliteBundle\Entity\Abattement $abattement
     * @return ArticleTH
     */
    public function setAbattement(\Fiscalite\GestionFiscaliteBundle\Entity\Abattement $abattement = null) {
        $this->abattement = $abattement;

        return $this;
    }

    /**
     * Get abattement
     *
     * @return \Fiscalite\GestionFiscaliteBundle\Entity\Abattement 
     */
    public function getAbattement() {
        return $this->abattement;
    }

    /**
     * Set adresse
     *
     * @param \Fiscalite\GestionFiscaliteBundle\Entity\Adresse $adresse
     * @return ArticleTH
     */
    public function setAdresse(\Fiscalite\GestionFiscaliteBundle\Entity\Adresse $adresse = null) {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return \Fiscalite\GestionFiscaliteBundle\Entity\Adresse 
     */
    public function getAdresse() {
        return $this->adresse;
    }

    public function getAbattementTotal() {
        if ($this->getAbattement() != NULL) {
            $totalabattementcommunale = $this->getAbattement()->getAbattementgeneralbasecommunale() +
                    $this->getAbattement()->getAbattementpersonneschargecommunnal() +
                    $this->getAbattement()->getAbattementspecialbasecommunal() +
                    $this->getAbattement()->getAbattementspecialhandicapecommunal();
            $totalabattementsyndicats = 0 + $this->getAbattement()->getAbattementspecialbasesyndicatstse() +
                    $this->getAbattement()->getAbattementspecialhandicapesyndicatstse();
            $totalabattementintercommunalite = $this->getAbattement()->getAbattementgeneralbaseintercommunalite() +
                    $this->getAbattement()->getAbattementpersonneschargeintercommunalite() +
                    $this->getAbattement()->getAbattementspecialbaseintercommunalite() +
                    $this->getAbattement()->getAbattementspecialhandicapeintercommunalite();
            $totalabattement = $totalabattementcommunale + $totalabattementsyndicats + $totalabattementintercommunalite;
            return $totalabattement;
        } else
            return 0;
    }

    public function getAbattementTotalCommunale() {
        if ($this->getAbattement() != NULL) {
            $totalabattementcommunale = $this->getAbattement()->getAbattementgeneralbasecommunale() +
                    $this->getAbattement()->getAbattementpersonneschargecommunnal() +
                    $this->getAbattement()->getAbattementspecialbasecommunal() +
                    $this->getAbattement()->getAbattementspecialhandicapecommunal();
            return $totalabattementcommunale;
        } else
            return 0;
    }

    public function getAbattementTotalSyndicats() {
        if ($this->getAbattement() != NULL) {
            $totalabattementsyndicats = $this->getAbattement()->getAbattementgeneralbasesyndicatstse() +
                    $this->getAbattement()->getAbattementpersonneschargesyndicatstse() +
                    $this->getAbattement()->getAbattementspecialbasesyndicatstse() +
                    $this->getAbattement()->getAbattementspecialhandicapesyndicatstse();
            return $totalabattementsyndicats;
        } else
            return 0;
    }

    public function getAbattementTotalIntercommunalite() {
        if ($this->getAbattement() != NULL) {
            $totalabattementintercommunalite = $this->getAbattement()->getAbattementgeneralbaseintercommunalite() +
                    $this->getAbattement()->getAbattementpersonneschargeintercommunalite() +
                    $this->getAbattement()->getAbattementspecialbaseintercommunalite() +
                    $this->getAbattement()->getAbattementspecialhandicapeintercommunalite();
            return $totalabattementintercommunalite;
        } else
            return 0;
    }

    public function getAbattementTotalTSE() {
        if ($this->getAbattement() != NULL) {
            $totalabattementintercommunalite = 0;
            return $totalabattementintercommunalite;
        } else
            return 0;
    }

    /**
     * Set montantnonvaleureventuelle
     *
     * @param integer $montantnonvaleureventuelle
     * @return ArticleTH
     */
    public function setMontantnonvaleureventuelle($montantnonvaleureventuelle) {
        $this->montantnonvaleureventuelle = $montantnonvaleureventuelle;

        return $this;
    }

    /**
     * Get montantnonvaleureventuelle
     *
     * @return integer 
     */
    public function getMontantnonvaleureventuelle() {
        return $this->montantnonvaleureventuelle;
    }

    /**
     * Set codeTAX
     *
     * @param string $codeTAX
     * @return ArticleTH
     */
    public function setCodeTAX($codeTAX) {
        $this->codeTAX = $codeTAX;

        return $this;
    }

    /**
     * Get codeTAX
     *
     * @return string 
     */
    public function getCodeTAX() {
        return $this->codeTAX;
    }

    public function newArticle($chaine, $fichier) {
        $this->setNumerosequentiel(substr($chaine, 7, 6));
        $this->setCodeArticle(substr($chaine, 17, 2));
        $this->setNomprenom(str_replace('-', ' ', substr($chaine, 63, 35)));
        $this->setSuitenom(str_replace('-', ' ', substr($chaine, 98, 32)));
        $this->setMontantnetapayer(substr($chaine, 41, 10));
        $this->setMontantdesfraisderole(substr($chaine, 53, 10));
        $this->setMontantnonvaleureventuelle(substr($chaine, 51, 2));
        $this->setCodeTAX(substr($chaine, 262, 1));
        $this->setFichier($fichier);
        return $this;
    }

    public function getRepartitionRole($simulation) {
        if ($this->getCodeTAX() == "P") {
            if ($this->getCotisation()->getNbpersonnesacharge() == 0) {
                if ($this->getCotisation()->getCodeRole() == "  " || $this->getCotisation()->getCodeRole() == "PA" || $this->getCotisation()->getCodeRole() == "DT" || $this->getCotisation()->getCodeRole() == "NV") {
                    $simulation->setNbpers0persacharge($simulation->getNbpers0persacharge() + 1);
                } else if ($this->getCotisation()->getCodeRole() == "EX" || $this->getCotisation()->getCodeRole() == "ED") {
                    $simulation->setNbpers0persachargeexoneres($simulation->getNbpers0persachargeexoneres() + 1);
                }
            } else if ($this->getCotisation()->getNbpersonnesacharge() == 1) {
                if ($this->getCotisation()->getCodeRole() == "  " || $this->getCotisation()->getCodeRole() == "PA" || $this->getCotisation()->getCodeRole() == "DT" || $this->getCotisation()->getCodeRole() == "NV") {
                    $simulation->setNbpers1persacharge($simulation->getNbpers1persacharge() + 1);
                } else if ($this->getCotisation()->getCodeRole() == "EX" || $this->getCotisation()->getCodeRole() == "ED") {
                    $simulation->setNbpers1persachargeexoneres($simulation->getNbpers1persachargeexoneres() + 1);
                }
            } else if ($this->getCotisation()->getNbpersonnesacharge() == 2) {
                if ($this->getCotisation()->getCodeRole() == "  " || $this->getCotisation()->getCodeRole() == "PA" || $this->getCotisation()->getCodeRole() == "DT" || $this->getCotisation()->getCodeRole() == "NV") {
                    $simulation->setNbpers2persacharge($simulation->getNbpers2persacharge() + 1);
                } else if ($this->getCotisation()->getCodeRole() == "EX" || $this->getCotisation()->getCodeRole() == "ED") {
                    $simulation->setNbpers2persachargeexoneres($simulation->getNbpers2persachargeexoneres() + 1);
                }
            } else if ($this->getCotisation()->getNbpersonnesacharge() == 3) {
                if ($this->getCotisation()->getCodeRole() == "  " || $this->getCotisation()->getCodeRole() == "PA" || $this->getCotisation()->getCodeRole() == "DT" || $this->getCotisation()->getCodeRole() == "NV") {
                    $simulation->setNbpers3persacharge($simulation->getNbpers3persacharge() + 1);
                } else if ($this->getCotisation()->getCodeRole() == "EX" || $this->getCotisation()->getCodeRole() == "ED") {
                    $simulation->setNbpers3persachargeexoneres($simulation->getNbpers3persachargeexoneres() + 1);
                }
            } else if ($this->getCotisation()->getNbpersonnesacharge() == 4) {
                if ($this->getCotisation()->getCodeRole() == "  " || $this->getCotisation()->getCodeRole() == "PA" || $this->getCotisation()->getCodeRole() == "DT" || $this->getCotisation()->getCodeRole() == "NV") {
                    $simulation->setNbpers4persacharge($simulation->getNbpers4persacharge() + 1);
                } else if ($this->getCotisation()->getCodeRole() == "EX" || $this->getCotisation()->getCodeRole() == "ED") {
                    $simulation->setNbpers4persachargeexoneres($simulation->getNbpers4persachargeexoneres() + 1);
                }
            } else if ($this->getCotisation()->getNbpersonnesacharge() >= 5) {
                if ($this->getCotisation()->getCodeRole() == "  " || $this->getCotisation()->getCodeRole() == "PA" || $this->getCotisation()->getCodeRole() == "DT" || $this->getCotisation()->getCodeRole() == "NV") {
                    $simulation->setNbpers5persacharge($simulation->getNbpers5persacharge() + 1);
                } else if ($this->getCotisation()->getCodeRole() == "EX" || $this->getCotisation()->getCodeRole() == "ED") {
                    $simulation->setNbpers5persachargeexoneres($simulation->getNbpers5persachargeexoneres() + 1);
                }
            }
            if ($this->getCotisation()->getCodeRole() == "  " || $this->getCotisation()->getCodeRole() == "PA" || $this->getCotisation()->getCodeRole() == "DT" || $this->getCotisation()->getCodeRole() == "NV") {
                $simulation->setNbperstotcumule($simulation->getNbperstotcumule() + 1);
                if ($this->getCotisation()->getNbpersonnesacharge() == 0) {
                    
                }
            } else if ($this->getCotisation()->getCodeRole() == "EX" || $this->getCotisation()->getCodeRole() == "ED") {
                $simulation->setNbperstotcumuleexoneres($simulation->getNbperstotcumuleexoneres() + 1);
            }
        } else if ($this->getCodeTAX() == "E") {
            if ($this->getCotisation()->getCodeRole() == "  " || $this->getCotisation()->getCodeRole() == "PA" || $this->getCotisation()->getCodeRole() == "DT" || $this->getCotisation()->getCodeRole() == "NV") {
                $simulation->setAfferentsdependancesprincipales($simulation->getAfferentsdependancesprincipales() + 1);
            } else if ($this->getCotisation()->getCodeRole() == "EX" || $this->getCotisation()->getCodeRole() == "ED") {
                $simulation->setAfferentsdependancesprincipalesexoneres($simulation->getAfferentsdependancesprincipalesexoneres() + 1);
            }
        } else if ($this->getCodeTAX() == "S") {
            $simulation->setAbattementegalenull($simulation->getAbattementegalenull() + 1);

            $simulation->setAfferentsresidencessecondaires($simulation->getAfferentsresidencessecondaires() + 1);
        } else if ($this->getCodeTAX() == "V") {
            $simulation->setAbattementegalenull($simulation->getAbattementegalenull() + 1);
            $simulation->setNbTHLV($simulation->getNbTHLV() + 1);
        }

        if ($this->getCodeTAX() != "S" || $this->getCodeTAX() != "E" || $this->getCodeTAX() != "V") {

            if ($this->getAbattement() != NULL) {
                if ($this->getCotisation()->getCodeRole() == "  " || $this->getCotisation()->getCodeRole() == "PA" || $this->getCotisation()->getCodeRole() == "DT" || $this->getCotisation()->getCodeRole() == "NV") {
                    if ($this->getCotisation()->getVlbruteimposeedeslocauxprincipaux() != null) {
                        $VLBrute = $this->getCotisation()->getVlbruteimposeedeslocauxprincipaux();
                    } else {
                        $VLBrute = $this->getCotisation()->getVlimposeedeslocauxsecondaires();
                    }
                    if ($VLBrute <= $this->getAbattement()->getAbattementpersonneschargecommunnal() + $this->getAbattement()->getAbattementgeneralbasecommunale()) {
                        $simulation->setAbattementpersonneschargecommunal($simulation->getAbattementpersonneschargecommunal() + $VLBrute);
                        $simulation->setVecteurBDD(3, 5, $simulation->getVecteurBDD(3, 5) + $VLBrute);
                        if ($this->getCotisation()->getNbpersonnesacharge() == 1) {
                            $simulation->setNbabattementpersonneschargecommunal12($simulation->getNbabattementpersonneschargecommunal12() + 1);
                            $simulation->setVecteurBDD(7, 5, $simulation->getVecteurBDD(7, 5) + 1);
                            $simulation->setAbattementpersonneschargecommunal12($simulation->getAbattementpersonneschargecommunal12() + $VLBrute);
                            $simulation->setVecteurBDD(1, 5, $simulation->getVecteurBDD(1, 5) + $VLBrute);
                        } else if ($this->getCotisation()->getNbpersonnesacharge() == 2) {
                            $simulation->setNbabattementpersonneschargecommunal12($simulation->getNbabattementpersonneschargecommunal12() + 1);
                            $simulation->setVecteurBDD(7, 5, $simulation->getVecteurBDD(7, 5) + 1);
                            $simulation->setAbattementpersonneschargecommunal12($simulation->getAbattementpersonneschargecommunal12() + $VLBrute);
                            $simulation->setVecteurBDD(1, 5, $simulation->getVecteurBDD(1, 5) + $VLBrute);
                        } else if ($this->getCotisation()->getNbpersonnesacharge() >= 3) {
                            $simulation->setNbabattementpersonneschargecommunal3($simulation->getNbabattementpersonneschargecommunal3() + 1);
                            $simulation->setVecteurBDD(8, 5, $simulation->getVecteurBDD(8, 5) + 1);
                            $simulation->setAbattementpersonneschargecommunal3($simulation->getAbattementpersonneschargecommunal3() + $VLBrute);
                            $simulation->setVecteurBDD(2, 5, $simulation->getVecteurBDD(2, 5) + $VLBrute);
                        }
                    } else {
                        if ($this->getCotisation()->getNbpersonnesacharge() == 1) {
                            $simulation->setNbabattementpersonneschargecommunal12($simulation->getNbabattementpersonneschargecommunal12() + 1);
                            $simulation->setVecteurBDD(7, 5, $simulation->getVecteurBDD(7, 5) + 1);
                            $simulation->setAbattementpersonneschargecommunal12($simulation->getAbattementpersonneschargecommunal12() + $this->getAbattement()->getAbattementpersonneschargecommunnal());
                            $simulation->setVecteurBDD(1, 5, $simulation->getVecteurBDD(1, 5) + $this->getAbattement()->getAbattementpersonneschargecommunnal());
                        } else if ($this->getCotisation()->getNbpersonnesacharge() == 2) {
                            $simulation->setNbabattementpersonneschargecommunal12($simulation->getNbabattementpersonneschargecommunal12() + 1);
                            $simulation->setVecteurBDD(7, 5, $simulation->getVecteurBDD(7, 5) + 1);
                            $simulation->setAbattementpersonneschargecommunal12($simulation->getAbattementpersonneschargecommunal12() + $this->getAbattement()->getAbattementpersonneschargecommunnal());
                            $simulation->setVecteurBDD(1, 5, $simulation->getVecteurBDD(1, 5) + $this->getAbattement()->getAbattementpersonneschargecommunnal());
                        } else if ($this->getCotisation()->getNbpersonnesacharge() >= 3) {
                            $simulation->setNbabattementpersonneschargecommunal3($simulation->getNbabattementpersonneschargecommunal3() + 1);
                            $simulation->setVecteurBDD(8, 5, $simulation->getVecteurBDD(8, 5) + 1);
                            $simulation->setAbattementpersonneschargecommunal3($simulation->getAbattementpersonneschargecommunal3() + $this->getAbattement()->getAbattementpersonneschargecommunnal());
                            $simulation->setVecteurBDD(2, 5, $simulation->getVecteurBDD(2, 5) + $this->getAbattement()->getAbattementpersonneschargecommunnal());
                        }
                        if ($this->getAbattement()->getAbattementspecialbasecommunal() != 0) {
                            $simulation->setNbabattementspecialbasecommunal($simulation->getNbabattementspecialbasecommunal() + 1);
                            $simulation->setVecteurBDD(10, 5, $simulation->getVecteurBDD(10, 5) + 1);
                            $simulation->setAbattementspecialbasecommunal($simulation->getAbattementspecialbasecommunal() + $this->getAbattement()->getAbattementspecialbasecommunal());
                            $simulation->setVecteurBDD(4, 5, $simulation->getVecteurBDD(4, 5) + $this->getAbattement()->getAbattementspecialbasecommunal());
                        }
                        if ($this->getAbattement()->getAbattementspecialhandicapecommunal() != 0) {
                            $simulation->setNbabattementspecialhandicapebasecommunal($simulation->getNbabattementspecialhandicapebasecommunal() + 1);
                            $simulation->setVecteurBDD(11, 5, $simulation->getVecteurBDD(11, 5) + 1);
                            $simulation->setAbattementspecialhandicapebasecommunal($simulation->getAbattementspecialhandicapebasecommunal() + $this->getAbattement()->getAbattementspecialhandicapecommunal());
                            $simulation->setVecteurBDD(5, 5, $simulation->getVecteurBDD(5, 5) + $this->getAbattement()->getAbattementspecialhandicapecommunal());
                        }
                    }
                }
            }
        }
    }

    public function setSoustractionAbattementsPersACharge12($VLBrute, $abgc, $abpch12) {
        $total = $VLBrute - $abgc - $abpch12;
        return $total;
    }

    public function setSoustractionAbattementsPersACharge3($VLBrute, $abgc, $abpch3) {
        $total = $VLBrute - $abgc - $abpch3;
        return $total;
    }

    public function setApplicationAbattementsCommunale($simulation, $abgcCOM, $absbCOM, $abshCOM, $abpch12COM, $abpch3COM, $total) {
        if ($this->getCotisation()->getVlbruteimposeedeslocauxprincipaux() != null) {
            $VLBrute = $this->getCotisation()->getVlbruteimposeedeslocauxprincipaux();
        } else {
            $VLBrute = $this->getCotisation()->getVlimposeedeslocauxsecondaires();
        }
        if ($this->getCodeTAX() == "S" || $this->getCodeTAX() == "E" || $this->getCodeTAX() == "V") {
            $total = $VLBrute;
        } else {
            if ($this->getAbattement() != NULL) {
                if ($this->getCotisation()->getCodeRole() == "  " || $this->getCotisation()->getCodeRole() == "PA" || $this->getCotisation()->getCodeRole() == "DT" || $this->getCotisation()->getCodeRole() == "NV") {
                    if ($VLBrute <= $abgcCOM) {
                        $simulation->setAbattementgeneralbasecommunale($simulation->getAbattementgeneralbasecommunale() + $VLBrute);
                    } else {
                        $simulation->setAbattementgeneralbasecommunale($simulation->getAbattementgeneralbasecommunale() + $abgcCOM);
                    }
                }
                $nbpers = $this->getCotisation()->getNbpersonnesacharge();
                if ($nbpers == 0) {
//$simulation->setAbattementpersonneschargecommunal($simulation->getAbattementpersonneschargecommunal()+0);
//$simulation->setAbattementpersonneschargecommunal12($simulation->getAbattementpersonneschargecommunal12()+0);
//$simulation->setAbattementpersonneschargecommunal3($simulation->getAbattementpersonneschargecommunal3()+0);
                    $total = $this->setSoustractionAbattementsPersACharge12($VLBrute, $abgcCOM, 0);
                } else if ($nbpers == 1) {
                    if (round($nbpers *
                                    round($simulation->getArticleCommuneTH()->getQuotiteAbattementPAC12CommuneSansAjustement()
                            )) != $this->getAbattement()->getAbattementpersonneschargecommunnal()) {
                        $abpch12COM = round(($abpch12COM *
                                ($this->getAbattement()->getAbattementpersonneschargecommunnal() /
                                $simulation->getArticleCommuneTH()->getQuotiteAbattementPAC12CommuneSansAjustement()
                                )
                                ) * $nbpers);
                    }

                    $total = $this->setSoustractionAbattementsPersACharge12($VLBrute, $abgcCOM, $abpch12COM);
                } else if ($nbpers == 2) {
                    if (round($nbpers *
                                    round($simulation->getArticleCommuneTH()->getQuotiteAbattementPAC12CommuneSansAjustement()
                            )) != $this->getAbattement()->getAbattementpersonneschargecommunnal()) {
                        $abpch12COM = round($abpch12COM *
                                $this->getAbattement()->getAbattementpersonneschargecommunnal() /
                                $simulation->getArticleCommuneTH()->getQuotiteAbattementPAC12CommuneSansAjustement()
                        );

                        $total = $this->setSoustractionAbattementsPersACharge12($VLBrute, $abgcCOM, $abpch12COM);
                    } else {
                        $total = $this->setSoustractionAbattementsPersACharge12($VLBrute, $abgcCOM, $abpch12COM);
                        $total = $total - $abpch12COM;
                    }
                } else if ($nbpers >= 3) {
                    $simule = 0;
                    $theorique = 2 * $simulation->getArticleCommuneTH()->getQuotiteAbattementPAC12CommuneSansAjustement() + ($nbpers - 2) * $simulation->getArticleCommuneTH()->getQuotiteAbattementPAC3CommuneSansAjustement();
                    $realite = $this->getAbattement()->getAbattementpersonneschargecommunnal();
                    if ($theorique != $realite) {
                        $simule = round(($abpch12COM * 2 + $abpch3COM * ($nbpers - 2)) * $realite / $theorique);
                        $total = $this->setSoustractionAbattementsPersACharge3($VLBrute, $abgcCOM, $simule);
                    } else {
                        $simule = round($abpch12COM * 2 + $abpch3COM * ($nbpers - 2));
                        $total = $this->setSoustractionAbattementsPersACharge3($VLBrute, $abgcCOM, $simule);
                    }
                }
                if ($this->getAbattement()->getAbattementspecialbasecommunal() != NULL) {
                    $total = $total - $absbCOM;
                }
                if ($this->getAbattement()->getAbattementspecialhandicapecommunal() != NULL) {
                    $total = $total - $abshCOM;
                }
            }
        }
        if ($total <= 0) {
            $total = 0;
        }


        return $total;
    }

    public function setApplicationAbattementsICO($simulation, $abgcICO, $absbICO, $abshICO, $abpch12ICO, $abpch3ICO, $totalICO) {
        if ($this->getCotisation()->getVlbruteimposeedeslocauxprincipaux() != null) {
            $VLBrute = $this->getCotisation()->getVlbruteimposeedeslocauxprincipaux();
        } else {
            $VLBrute = $this->getCotisation()->getVlimposeedeslocauxsecondaires();
        }
        if ($this->getCodeTAX() == "S" || $this->getCodeTAX() == "E") {
            $totalICO = $VLBrute;
        } else if ($this->getCodeTAX() == "V") {
            $totalICO = 0;
        } else {
            if ($this->getAbattement() != NULL) {
                $nbpers = $this->getCotisation()->getNbpersonnesacharge();

                if ($nbpers == 0) {
//$simulation->setAbattementpersonneschargeintercommunalite($simulation->getAbattementpersonneschargeintercommunalite()+0);
//$simulation->setAbattementpersonneschargeintercommunalite12($simulation->getAbattementpersonneschargeintercommunalite12()+0);
//$simulation->setAbattementpersonneschargeintercommunalite3($simulation->getAbattementpersonneschargeintercommunalite3()+0);
                    $totalICO = $this->setSoustractionAbattementsPersACharge12($VLBrute, $abgcICO, 0);
                } else if ($nbpers == 1) {
                    if (round($nbpers *
                                    round($simulation->getArticleCommuneTH()->getQuotiteAbattementPAC12CommuneSansAjustement()
                            )) != $this->getAbattement()->getAbattementpersonneschargecommunnal()) {
                        $abpch12ICO = round(($abpch12ICO *
                                ($this->getAbattement()->getAbattementpersonneschargecommunnal() /
                                $simulation->getArticleCommuneTH()->getQuotiteAbattementPAC12CommuneSansAjustement()
                                )
                                ) * $nbpers);
                    }

                    $totalICO = $this->setSoustractionAbattementsPersACharge12($VLBrute, $abgcICO, $abpch12ICO);
                } else if ($nbpers == 2) {
                    if (round($nbpers *
                                    round($simulation->getArticleCommuneTH()->getQuotiteAbattementPAC12CommuneSansAjustement()
                            )) != $this->getAbattement()->getAbattementpersonneschargecommunnal()) {
                        $abpch12ICO = round($abpch12ICO *
                                $this->getAbattement()->getAbattementpersonneschargecommunnal() /
                                $simulation->getArticleCommuneTH()->getQuotiteAbattementPAC12CommuneSansAjustement()
                        );

                        $totalICO = $this->setSoustractionAbattementsPersACharge12($VLBrute, $abgcICO, $abpch12ICO);
                    } else {
                        $totalICO = $this->setSoustractionAbattementsPersACharge12($VLBrute, $abgcICO, $abpch12ICO);
                        $totalICO = $totalICO - $abpch12ICO;
                    }
                } else if ($nbpers >= 3) {
                    $simule = 0;
                    $theorique = 2 * $simulation->getArticleCommuneTH()->getQuotiteAbattementPAC12CommuneSansAjustement() + ($nbpers - 2) * $simulation->getArticleCommuneTH()->getQuotiteAbattementPAC3CommuneSansAjustement();
                    $realite = $this->getAbattement()->getAbattementpersonneschargecommunnal();
                    if ($theorique != $realite) {
                        $simule = round(($abpch12ICO * 2 + $abpch3ICO * ($nbpers - 2)) * $realite / $theorique);
                        $totalICO = $this->setSoustractionAbattementsPersACharge3($VLBrute, $abgcICO, $simule);
                    } else {
                        $simule = round($abpch12ICO * 2 + $abpch3ICO * ($nbpers - 2));
                        $totalICO = $this->setSoustractionAbattementsPersACharge3($VLBrute, $abgcICO, $simule);
                    }
                }
                if ($this->getAbattement()->getAbattementspecialbaseintercommunalite() != NULL) {
                    $totalICO = $totalICO - $absbICO;
                }
                if ($this->getAbattement()->getAbattementspecialhandicapeintercommunalite() != NULL) {
                    $totalICO = $totalICO - $abshICO;
                }
            }
        }
        if ($totalICO <= 0) {
            $totalICO = 0;
        }
        return $totalICO;
    }

    public function setApplicationAbattementsTSE($simulation, $abgcTSE, $absbTSE, $abshTSE, $abpch12TSE, $abpch3TSE, $totalTSE) {
        if ($this->getCotisation()->getVlbruteimposeedeslocauxprincipaux() != null) {
            $VLBrute = $this->getCotisation()->getVlbruteimposeedeslocauxprincipaux();
        } else {
            $VLBrute = $this->getCotisation()->getVlimposeedeslocauxsecondaires();
        }
        if ($this->getCodeTAX() == "S" || $this->getCodeTAX() == "E") {
            $totalTSE = $VLBrute;
        } else if ($this->getCodeTAX() == "V") {
            $totalTSE = 0;
        } else {
            if ($this->getAbattement() != NULL) {
                $nbpers = $this->getCotisation()->getNbpersonnesacharge();
                if ($nbpers == 0) {
//$simulation->setAbattementpersonneschargetse($simulation->getAbattementpersonneschargetse()+0);
//$simulation->setAbattementpersonneschargetse12($simulation->getAbattementpersonneschargetse12()+0);
//$simulation->setAbattementpersonneschargetse3($simulation->getAbattementpersonneschargetse3()+0);
                    $totalTSE = $this->setSoustractionAbattementsPersACharge12($VLBrute, $abgcTSE, 0);
                } else if ($nbpers == 1) {
                    if (round($nbpers *
                                    round($simulation->getArticleCommuneTH()->getQuotiteAbattementPAC12CommuneSansAjustement()
                            )) != $this->getAbattement()->getAbattementpersonneschargecommunnal()) {
                        $abpch12TSE = round(($abpch12TSE *
                                ($this->getAbattement()->getAbattementpersonneschargecommunnal() /
                                $simulation->getArticleCommuneTH()->getQuotiteAbattementPAC12CommuneSansAjustement()
                                )
                                ) * $nbpers);
                    }

                    $totalTSE = $this->setSoustractionAbattementsPersACharge12($VLBrute, $abgcTSE, $abpch12TSE);
                } else if ($nbpers == 2) {
                    if (round($nbpers *
                                    round($simulation->getArticleCommuneTH()->getQuotiteAbattementPAC12CommuneSansAjustement()
                            )) != $this->getAbattement()->getAbattementpersonneschargecommunnal()) {
                        $abpch12TSE = round($abpch12TSE *
                                $this->getAbattement()->getAbattementpersonneschargecommunnal() /
                                $simulation->getArticleCommuneTH()->getQuotiteAbattementPAC12CommuneSansAjustement()
                        );

                        $totalTSE = $this->setSoustractionAbattementsPersACharge12($VLBrute, $abgcTSE, $abpch12TSE);
                    } else {
                        $totalTSE = $this->setSoustractionAbattementsPersACharge12($VLBrute, $abgcTSE, $abpch12TSE);
                        $totalTSE = $totalTSE - $abpch12TSE;
                    }
                } else if ($nbpers >= 3) {
                    $simule = 0;
                    $theorique = 2 * $simulation->getArticleCommuneTH()->getQuotiteAbattementPAC12CommuneSansAjustement() + ($nbpers - 2) * $simulation->getArticleCommuneTH()->getQuotiteAbattementPAC3CommuneSansAjustement();
                    $realite = $this->getAbattement()->getAbattementpersonneschargecommunnal();
                    if ($theorique != $realite) {
                        $simule = round(($abpch12TSE * 2 + $abpch3TSE * ($nbpers - 2)) * $realite / $theorique);
                        $totalTSE = $this->setSoustractionAbattementsPersACharge3($VLBrute, $abgcTSE, $simule);
                    } else {
                        $simule = round($abpch12TSE * 2 + $abpch3TSE * ($nbpers - 2));
                        $totalTSE = $this->setSoustractionAbattementsPersACharge3($VLBrute, $abgcTSE, $simule);
                    }
                }
                if ($this->getAbattement()->getAbattementspecialbasesyndicatstse() != NULL) {
                    $totalTSE = $totalTSE - $absbTSE;
                }
                if ($this->getAbattement()->getAbattementspecialhandicapesyndicatstse() != NULL) {
                    $totalTSE = $totalTSE - $abshTSE;
                }
            }
        }
        if ($totalTSE <= 0 || $this->getCotisation()->getExoTSE() == "E") {
            $totalTSE = 0;
        }
        return $totalTSE;
    }

    public function setTotalCalculSimulationAbattementCommunal(Simulation $simulation) {
// SIMULATION DE L'ABATTEMENT
//CALCUL DES ABATTEMENTS
        $abgcCOM = round($simulation->getVlmCne() * $simulation->getSimulationArticleTH()->getAbattementgeneralbasecommunale() / 100, 0);
        $absbCOM = round($simulation->getVlmCne() * $simulation->getSimulationArticleTH()->getAbattementspecialbasecommunal() / 100, 0);
        $abshCOM = round($simulation->getVlmCne() * $simulation->getSimulationArticleTH()->getAbattementspecialhandicapebasecommunal() / 100, 0);
        $abpch12COM = round($simulation->getVlmCne() * $simulation->getSimulationArticleTH()->getAbattementpersonneschargecommunal12() / 100, 0);
        $abpch3COM = round($simulation->getVlmCne() * $simulation->getSimulationArticleTH()->getAbattementpersonneschargecommunal3() / 100, 0);

        $abgcICO = round($simulation->getVlmICO() * $simulation->getSimulationArticleTH()->getAbattementgeneralbasecommunale() / 100, 0);
        $absbICO = round($simulation->getVlmICO() * $simulation->getSimulationArticleTH()->getAbattementspecialbasecommunal() / 100, 0);
        $abshICO = round($simulation->getVlmICO() * $simulation->getSimulationArticleTH()->getAbattementspecialhandicapebasecommunal() / 100, 0);
        $abpch12ICO = round($simulation->getVlmICO() * $simulation->getSimulationArticleTH()->getAbattementpersonneschargecommunal12() / 100, 0);
        $abpch3ICO = round($simulation->getVlmICO() * $simulation->getSimulationArticleTH()->getAbattementpersonneschargecommunal3() / 100, 0);

        $abgcTSE = round($simulation->getVlmTSE() * $simulation->getSimulationArticleTH()->getAbattementgeneralbasecommunale() / 100, 0);
        $absbTSE = round($simulation->getVlmTSE() * $simulation->getSimulationArticleTH()->getAbattementspecialbasecommunal() / 100, 0);
        $abshTSE = round($simulation->getVlmTSE() * $simulation->getSimulationArticleTH()->getAbattementspecialhandicapebasecommunal() / 100, 0);
        $abpch12TSE = round($simulation->getVlmTSE() * $simulation->getSimulationArticleTH()->getAbattementpersonneschargecommunal12() / 100, 0);
        $abpch3TSE = round($simulation->getVlmTSE() * $simulation->getSimulationArticleTH()->getAbattementpersonneschargecommunal3() / 100, 0);
//APPLICATION DES ABATTEMENTS COMMUNAL
        $total = 0;
        $total = $this->setApplicationAbattementsCommunale($simulation, $abgcCOM, $absbCOM, $abshCOM, $abpch12COM, $abpch3COM, $total);
//APPLICATION DES ABATTEMENTS ICO
        $totalICO = 0;
        $totalICO = $this->setApplicationAbattementsICO($simulation, $abgcICO, $absbICO, $abshICO, $abpch12ICO, $abpch3ICO, $totalICO);

//APPLICATION DES ABATTEMENTS TSE
        $totalTSE = 0;
        $totalTSE = $this->setApplicationAbattementsTSE($simulation, $abgcTSE, $absbTSE, $abshTSE, $abpch12TSE, $abpch3TSE, $totalTSE);
// SIMULATION DE LA BASE
        $baseTH = $this->getBase();
        $baseTH->setBasenettecommunale($total);
        $baseTH->setBasenetteintercommunalite($totalICO);
        $baseTH->setBasenettetse($totalTSE);
        $simulation->setBaseTH($baseTH);
// SIMULATION DE LA COTISATION
// PRENDRE EN COMPTE L'EXONERATION
        $cotisationTH = new Cotisation();
        if ($this->getCotisation()->getCodeRole() != "EX") {
            $cotisationTH->setCotisationcommunale(round($simulation->getBaseTH()->getBasenettecommunale() * $simulation->getSimulationArticleTH()->getTauximpositioncommune() / 100, 0));
            $cotisationTH->setCotisationintercommunalite(round($simulation->getBaseTH()->getBasenetteintercommunalite() * $simulation->getTauxImpositionICO() / 100, 0));
            $cotisationTH->setCotisationtse(round($simulation->getBaseTH()->getBasenettetse() * $simulation->getTauxImpositionTSE() / 100, 0));
        } else {
            $cotisationTH->setCotisationcommunale(0);
            $cotisationTH->setCotisationintercommunalite(0);
            $cotisationTH->setCotisationtse(0);
        }
        $cotisationTH->setTotalcotisationsbrutes($cotisationTH->getCotisationcommunale() + $cotisationTH->getCotisationintercommunalite() + $cotisationTH->getCotisationtse());
        $simulation->setCotisationTH($cotisationTH);

//VERIFICATION DE LA COTISATION
//        if ($this->getCotisation()->getCotisationintercommunalite() != $cotisationTH->getCotisationintercommunalite()) {
//            print ('<tr>');
//            print ('<td>' . $this->getCotisation()->getNbpersonnesacharge() . '</td>');
//            print ('<td>' . $this->getBase()->getNumerosequentiel() . '</td>');
//            print ('<td>' . $this->getCotisation()->getCotisationintercommunalite() . '</td>');
//            print ('<td>' . $cotisationTH->getCotisationintercommunalite() . '</td>');
//            print ('<td>' . $this->getCodeTAX() . '</td>');
//            print ('<td>' . $this->getCotisation()->getCodeRole() . '</td>');
//                print ('<td>' . $this->getBase()->getNumerosequentiel() . '</td>');
//                print ('<td>' . $this->getNomprenom() . '</td>');
//                print ('<td>' . $this->getCotisation()->getVlbruteimposeedeslocauxprincipaux() . '</td>');
//                print ('<td>' . $simulation->getAbattementgeneralbasecommunale() . '</td>');
//                print ('<td>' . $simulation->getAbattementpersonneschargecommunal() . '</td>');
//                print ('<td>' . $this->getAbattement()->getAbattementgeneralbasecommunale() . '</td>');
//                print ('<td>' . $this->getAbattement()->getAbattementpersonneschargecommunnal() . '</td>');
//                print ('<td>' . $this->getBase()->getBasenettecommunale() . '</td>');
//                print ('<td>' . $total . '</td>');
//                print ('<td>' . $this->getCotisation()->getNbpersonnesacharge() . '</td>');
//                print ('<td>' . $this->getCodeTAX() . '</td>');
//                print ('<td>' . $this->getCotisation()->getCodeRole() . '</td>');
//            print ('</tr>');
    }

    public function setTableauTH1(Simulation $simulation) {


        if ($this->getCodeTAX() == "P") {
            $simulation->setNombrelocauxtaxesensembledeslocauxetdependancesimposablesTHP($simulation->getNombrelocauxtaxesensembledeslocauxetdependancesimposablesTHP() + $this->getAbattement()->getNblocauxtaxesTHpure());
        } else if ($this->getCodeTAX() == "E") {
            $simulation->setNombrelocauxtaxesensembledeslocauxetdependancesimposablesTHE($simulation->getNombrelocauxtaxesensembledeslocauxetdependancesimposablesTHE() + $this->getAbattement()->getNblocauxtaxesTHpure());
        } else if ($this->getCodeTAX() == "S") {
            $simulation->setNombrelocauxtaxesensembledeslocauxetdependancesimposablesTHS($simulation->getNombrelocauxtaxesensembledeslocauxetdependancesimposablesTHS() + $this->getAbattement()->getNblocauxtaxesTHpure());
        }
        if ($this->getCodeTAX() != "V") {
            $simulation->setNombresarticlesdurolecorrespondantsensembledeslocauxetdependancesimposables($simulation->getNombresarticlesdurolecorrespondantsensembledeslocauxetdependancesimposables() + 1);
            $simulation->setValeurlocativebruterevaloriseetotaleensembledeslocauxetdependancesimposables($simulation->getValeurlocativebruterevaloriseetotaleensembledeslocauxetdependancesimposables() + $this->getCotisation()->getVlbruteimposeedeslocauxprincipaux() + $this->getCotisation()->getVlimposeedeslocauxsecondaires());

            if ($this->getCodeTAX() == "P") {
                $simulation->setNombresarticlesdurolecorrespondantslocauxhabitationproprementdits($simulation->getNombresarticlesdurolecorrespondantslocauxhabitationproprementdits() + 1);
            }
            if ($this->getCotisation()->getCodeRole() == "EX" || $this->getCotisation()->getCodeRole() == "ED") {
                $simulation->setValeurlocativebruterevaloriseedontbasesexonereesensembledeslocauxetdependancesimposables($simulation->getValeurlocativebruterevaloriseedontbasesexonereesensembledeslocauxetdependancesimposables() + $this->getCotisation()->getVlbruteimposeedeslocauxprincipaux() + $this->getCotisation()->getVlimposeedeslocauxsecondaires());
            }
        }
        if ($this->getCodeTAX() == "V") {
            $simulation->setValeurlocativebruterevaloriseetotalelogementsvacantsimposesalaTHLVsurdeliberationdelacommune($simulation->getValeurlocativebruterevaloriseetotalelogementsvacantsimposesalaTHLVsurdeliberationdelacommune() + $this->getCotisation()->getVlbruteimposeedeslocauxprincipaux() + $this->getCotisation()->getVlimposeedeslocauxsecondaires());
            $simulation->setNombrelocauxtaxeslogementsvacantsimposesalaTHLVsurdeliberationdelacommuneTHE($simulation->getNombrelocauxtaxeslogementsvacantsimposesalaTHLVsurdeliberationdelacommuneTHE() + 1);
            $simulation->setNombresarticlesdurolecorrespondantslogementsvacantsimposesalaTHLVsurdeliberationdelacommune($simulation->getNombresarticlesdurolecorrespondantslogementsvacantsimposesalaTHLVsurdeliberationdelacommune() + 1);
        }
    }

    public function setTableauTH2(Simulation $simulation) {
        if ($this->getCotisation()->getCodeRole() != "EX" || $this->getCotisation()->getCodeRole() != "ED") {
            $simulation->setBaseNetteCommune($simulation->getBaseNetteCommune() + $simulation->getBaseTH()->getBasenettecommunale());
            $simulation->setBaseNetteSansAjustementCommune($simulation->getBaseNetteSansAjustementCommune() + $simulation->getBaseTH()->getBasenettecommunale());
            $simulation->setBaseNetteICO($simulation->getBaseNetteICO() + $simulation->getBaseTH()->getBasenetteintercommunalite());
            $simulation->setBaseNetteSansAjustementICO($simulation->getBaseNetteSansAjustementICO() + $simulation->getBaseTH()->getBasenetteintercommunalite());
            $simulation->setBaseNetteTSE($simulation->getBaseNetteTSE() + $simulation->getBaseTH()->getBasenettetse());
            $simulation->setBaseNetteExoTSECommune($simulation->getBaseNetteExoTSECommune() + $simulation->getBaseTH()->getBasenettetse());
        }
    }

    public function setTableauTH7(Simulation $simulation) {
        if ($this->getCodeTAX() == "P") {
            if ($this->getCotisation()->getCodeRole() == "  ") {
                if ($this->getCotisation()->getTotalcotisationsbrutes() == null) {
                    $simulation->setNombreArticlesTHPCotisationsbrutesnulles($simulation->getNombreArticlesTHPCotisationsbrutesnulles() + 1);
                }
            } else if ($this->getCotisation()->getCodeRole() == "PA") {
                $simulation->setNombreArticlesTHPPlafonnements($simulation->getNombreArticlesTHPPlafonnements() + 1);
                $simulation->setNombreArticlesTHPTotaux($simulation->getNombreArticlesTHPTotaux() + 1);
                $simulation->setDegrevementsPlafonnementsPlafonnements($simulation->getDegrevementsPlafonnementsPlafonnements() + $this->getCotisation()->getMontantdudegrevementouplafonnementeffectif());
                $simulation->setDegrevementsPlafonnementsTotaux($simulation->getDegrevementsPlafonnementsTotaux() + $this->getCotisation()->getMontantdudegrevementouplafonnementeffectif());
                $simulation->setNonValeursTotaux($simulation->getNonValeursTotaux() + $this->getMontantnonvaleureventuelle());
            } else if ($this->getCotisation()->getCodeRole() == "DT") {
                $simulation->setDegrevementsPlafonnementsTotaux($simulation->getDegrevementsPlafonnementsTotaux() + $this->getCotisation()->getMontantdudegrevementouplafonnementeffectif());
                $simulation->setDegrevementsPlafonnementsDegrevementstotaux($simulation->getDegrevementsPlafonnementsDegrevementstotaux() + $this->getCotisation()->getMontantdudegrevementouplafonnementeffectif());
                $simulation->setNombreArticlesTHPDegrevementstotaux($simulation->getNombreArticlesTHPDegrevementstotaux() + 1);
                $simulation->setNombreArticlesTHPTotaux($simulation->getNombreArticlesTHPTotaux() + 1);
            } else if ($this->getCotisation()->getCodeRole() == "NV") {
                $simulation->setDegrevementsPlafonnementsTotaux($simulation->getDegrevementsPlafonnementsTotaux() + $this->getCotisation()->getMontantdudegrevementouplafonnementeffectif());
                $simulation->setNonValeursNonValeurs($simulation->getNonValeursNonValeurs() + 1);
                $simulation->setNombreArticlesNombreArticlesTHPNonValeurs($simulation->setNombreArticlesNombreArticlesTHPNonValeurs() + 1);
                $simulation->setNombreArticlesTHPTotaux($simulation->getNombreArticlesTHPTotaux() + 1);
                $simulation->setNonValeursTotaux($simulation->getNonValeursTotaux() + $this->getMontantnonvaleureventuelle());
            } else if ($this->getCotisation()->getCodeRole() == "EX") {
                $simulation->setNombreArticlesTHPCommune($simulation->getNombreArticlesTHPCommune() + 1);
                $simulation->setBasesNettesReductionsCommune($simulation->getBasesNettesReductionsCommune() + $simulation->getBaseTH()->getBasenettecommunale());
                $simulation->setBasesNettesReductionsICO($simulation->getBasesNettesReductionsICO() + $simulation->getBaseTH()->getBasenetteintercommunalite());
                if ($this->getCotisation()->getExoTSE() == "E") {
                    $simulation->setNombreArticlesTHPTSElocalHLMSEM($simulation->getNombreArticlesTHPTSElocalHLMSEM() + 1);
                    $simulation->setBasesNettesReductionsTSElocalHLMSEM($simulation->getBasesNettesReductionsTSElocalHLMSEM() + $simulation->getBaseTH()->getBasenetteintercommunalite());
                }
            } else if ($this->getCotisation()->getCodeRole() == "ED") {
                
            }
        } else if ($this->getCodeTAX() == "E") {
            if ($this->getCotisation()->getCodeRole() == "  ") {
                
            } else if ($this->getCotisation()->getCodeRole() == "PA") {
                $simulation->setNombreArticlesTHETHSPlafonnements($simulation->getNombreArticlesTHETHSPlafonnements() + 1);
                $simulation->setDegrevementsPlafonnementsPlafonnements($simulation->getDegrevementsPlafonnementsPlafonnements() + $this->getCotisation()->getMontantdudegrevementouplafonnementeffectif());
                $simulation->setDegrevementsPlafonnementsTotaux($simulation->getDegrevementsPlafonnementsTotaux() + $this->getCotisation()->getMontantdudegrevementouplafonnementeffectif());
                $simulation->setNombreArticlesTHETHSTotaux($simulation->getNombreArticlesTHETHSTotaux() + 1);
                $simulation->setNonValeursTotaux($simulation->getNonValeursTotaux() + $this->getMontantnonvaleureventuelle());
            } else if ($this->getCotisation()->getCodeRole() == "DT") {
                $simulation->setDegrevementsPlafonnementsTotaux($simulation->getDegrevementsPlafonnementsTotaux() + $this->getCotisation()->getMontantdudegrevementouplafonnementeffectif());
                $simulation->setDegrevementsPlafonnementsDegrevementstotaux($simulation->getDegrevementsPlafonnementsDegrevementstotaux() + $this->getCotisation()->getMontantdudegrevementouplafonnementeffectif());
                $simulation->setNombreArticlesTHETHSDegrevementstotaux($simulation->getNombreArticlesTHETHSDegrevementstotaux() + 1);
            } else if ($this->getCotisation()->getCodeRole() == "NV") {
                $simulation->setNonValeursNonValeurs($simulation->getNonValeursNonValeurs() + 1);
                $simulation->setDegrevementsPlafonnementsTotaux($simulation->getDegrevementsPlafonnementsTotaux() + $this->getCotisation()->getMontantdudegrevementouplafonnementeffectif());
                $simulation->setNombreArticlesTHETHSNonValeurs($simulation->getNombreArticlesTHETHSNonValeurs() + 1);
                $simulation->setNombreArticlesTHETHSTotaux($simulation->getNombreArticlesTHETHSTotaux() + 1);
                $simulation->setNonValeursTotaux($simulation->getNonValeursTotaux() + $this->getMontantnonvaleureventuelle());
            } else if ($this->getCotisation()->getCodeRole() == "EX") {
                $simulation->setNombreArticlesTHETHSCommune($simulation->getNombreArticlesTHETHSCommune() + 1);
                $simulation->setBasesNettesReductionsCommune($simulation->getBasesNettesReductionsCommune() + $simulation->getBaseTH()->getBasenettecommunale());
                $simulation->setBasesNettesReductionsICO($simulation->getBasesNettesReductionsICO() + $simulation->getBaseTH()->getBasenetteintercommunalite());
                if ($this->getCotisation()->getExoTSE() == "E") {
                    $simulation->setNombreArticlesTHETHSTSElocalHLMSEM($simulation->getNombreArticlesTHETHSTSElocalHLMSEM() + 1);
                    $simulation->setBasesNettesReductionsTSElocalHLMSEM($simulation->getBasesNettesReductionsTSElocalHLMSEM() + $simulation->getBaseTH()->getBasenetteintercommunalite());
                }
            } else if ($this->getCotisation()->getCodeRole() == "ED") {
                
            }
        } else if ($this->getCodeTAX() == "S") {
            if ($this->getCotisation()->getCodeRole() == "  ") {
                
            } else if ($this->getCotisation()->getCodeRole() == "PA") {
                $simulation->setNombreArticlesTHETHSPlafonnements($simulation->getNombreArticlesTHETHSPlafonnements() + 1);
                $simulation->setNombreArticlesTHETHSTotaux($simulation->getNombreArticlesTHETHSTotaux() + 1);
                $simulation->setNonValeursTotaux($simulation->getNonValeursTotaux() + $this->getMontantnonvaleureventuelle());
            } else if ($this->getCotisation()->getCodeRole() == "DT") {
                $simulation->setNombreArticlesTHETHSDegrevementstotaux($simulation->getNombreArticlesTHETHSDegrevementstotaux() + 1);
            } else if ($this->getCotisation()->getCodeRole() == "NV") {
                $simulation->setNonValeursNonValeurs($simulation->getNonValeursNonValeurs() + 1);
                $simulation->setNonValeursTotaux($simulation->getNonValeursTotaux() + $this->getMontantnonvaleureventuelle());
                $simulation->setNombreArticlesTHETHSNonValeurs($simulation->getNombreArticlesTHETHSNonValeurs() + 1);
                $simulation->setNombreArticlesTHETHSTotaux($simulation->getNombreArticlesTHETHSTotaux() + 1);
            } else if ($this->getCotisation()->getCodeRole() == "EX") {
                $simulation->setNombreArticlesTHETHSCommune($simulation->getNombreArticlesTHETHSCommune() + 1);
                $simulation->setBasesNettesReductionsCommune($simulation->getBasesNettesReductionsCommune() + $simulation->getBaseTH()->getBasenettecommunale());
                $simulation->setBasesNettesReductionsICO($simulation->getBasesNettesReductionsICO() + $simulation->getBaseTH()->getBasenetteintercommunalite());
                if ($this->getCotisation()->getExoTSE() == "E") {
                    $simulation->setNombreArticlesTHETHSTSElocalHLMSEM($simulation->getNombreArticlesTHETHSTSElocalHLMSEM() + 1);
                    $simulation->setBasesNettesReductionsTSElocalHLMSEM($simulation->getBasesNettesReductionsTSElocalHLMSEM() + $simulation->getBaseTH()->getBasenetteintercommunalite());
                }
            } else if ($this->getCotisation()->getCodeRole() == "ED") {
                
            }
        } else if ($this->getCodeTAX() == "V") {
            if ($this->getCotisation()->getCodeRole() == "  ") {
                
            } else if ($this->getCotisation()->getCodeRole() == "PA") {
                
            } else if ($this->getCotisation()->getCodeRole() == "DT") {
                
            } else if ($this->getCotisation()->getCodeRole() == "NV") {
                $simulation->setNonValeursNonValeurs($simulation->getNonValeursNonValeurs() + 1);
            } else if ($this->getCotisation()->getCodeRole() == "EX") {
                
            } else if ($this->getCotisation()->getCodeRole() == "ED") {
                
            }
        } else {
            if ($this->getCotisation()->getCodeRole() == "  ") {
                
            } else if ($this->getCotisation()->getCodeRole() == "PA") {
                $simulation->setNonValeursPlafonnements($simulation->getNonValeursPlafonnements() + 1);
            } else if ($this->getCotisation()->getCodeRole() == "DT") {
                
            } else if ($this->getCotisation()->getCodeRole() == "NV") {
                $simulation->setNonValeursNonValeurs($simulation->getNonValeursNonValeurs() + 1);
            } else if ($this->getCotisation()->getCodeRole() == "EX") {
                
            } else if ($this->getCotisation()->getCodeRole() == "ED") {
                
            }
        }
    }

    public function setTableauTH8(Simulation $simulation) {
        if (($this->getCotisation()->getVlimposeedeslocauxsecondaires() + $this->getCotisation()->getVlbruteimposeedeslocauxprincipaux()) > 0) {
            if ($this->getMontantnetapayer() > 12) {
                $simulation->setArticlesImposes($simulation->getArticlesImposes() + 1);
            } else if ($this->getMontantnetapayer() <= 12) {
                $simulation->setArticlesExoneres($simulation->getArticlesExoneres() + 1);
            }
        }
    }

    public function setTableauTH9(Simulation $simulation) {
        if ($this->getCodeTAX() == "P") {
            $simulation->setNombreArticlesTHFraisTHPTHE($simulation->getNombreArticlesTHFraisTHPTHE() + 1);
            $simulation->setNombreArticlesTHTotal($simulation->getNombreArticlesTHTotal() + 1);
            $simulation->setMontantReelTHCommune($simulation->getMontantReelTHCommune() + $simulation->getCotisationTH()->getCotisationcommunale());
            $simulation->setMontantReelTHICO($simulation->getMontantReelTHICO() + $simulation->getCotisationTH()->getCotisationintercommunalite());
            $simulation->setMontantReelTHTSE($simulation->getMontantReelTHTSE() + $simulation->getCotisationTH()->getCotisationtse());
            $simulation->setMontantReelTHFraisTHPTHE($simulation->getMontantReelTHFraisTHPTHE() + $this->getMontantdesfraisderole());
            $simulation->setMontantReelTHPrelt1($simulation->getMontantReelTHPrelt1() + $this->getCotisation()->getMontantprelevementsurfortevl());
            $simulation->setMontantNetTHTHLVICO($simulation->getMontantNetTHTHLVICO() + $simulation->getCotisationTH()->getCotisationintercommunalite());
            $simulation->setMontantNetTHTHLVCommune($simulation->getMontantNetTHTHLVCommune() + $simulation->getCotisationTH()->getCotisationcommunale());
            $simulation->setMontantNetTHTHLVTSE($simulation->getMontantNetTHTHLVTSE() + $simulation->getCotisationTH()->getCotisationtse());

            if ($this->getCotisation()->getMontantprelevementsurfortevl() != 0) {
                $simulation->setNombreArticlesTHPrelt1($simulation->getNombreArticlesTHPrelt1() + 1);
            }
        } else if ($this->getCodeTAX() == "E") {
            $simulation->setNombreArticlesTHFraisTHPTHE($simulation->getNombreArticlesTHFraisTHPTHE() + 1);
            $simulation->setNombreArticlesTHTotal($simulation->getNombreArticlesTHTotal() + 1);
            $simulation->setMontantReelTHCommune($simulation->getMontantReelTHCommune() + $simulation->getCotisationTH()->getCotisationcommunale());
            $simulation->setMontantReelTHICO($simulation->getMontantReelTHICO() + $simulation->getCotisationTH()->getCotisationintercommunalite());
            $simulation->setMontantReelTHTSE($simulation->getMontantReelTHTSE() + $simulation->getCotisationTH()->getCotisationtse());
            $simulation->setMontantReelTHFraisTHPTHE($simulation->getMontantReelTHFraisTHPTHE() + $this->getMontantdesfraisderole());
            $simulation->setMontantReelTHPrelt1($simulation->getMontantReelTHPrelt1() + $this->getCotisation()->getMontantprelevementsurfortevl());
            $simulation->setMontantNetTHTHLVICO($simulation->getMontantNetTHTHLVICO() + $simulation->getCotisationTH()->getCotisationintercommunalite());
            $simulation->setMontantNetTHTHLVCommune($simulation->getMontantNetTHTHLVCommune() + $simulation->getCotisationTH()->getCotisationcommunale());
            $simulation->setMontantNetTHTHLVTSE($simulation->getMontantNetTHTHLVTSE() + $simulation->getCotisationTH()->getCotisationtse());
            if ($this->getCotisation()->getMontantprelevementsurfortevl() != 0) {
                $simulation->setNombreArticlesTHPrelt1($simulation->getNombreArticlesTHPrelt1() + 1);
            }
        } else if ($this->getCodeTAX() == "S") {
            $simulation->setNombreArticlesTHFraisTHS($simulation->getNombreArticlesTHFraisTHS() + 1);
            $simulation->setNombreArticlesTHTotal($simulation->getNombreArticlesTHTotal() + 1);
            $simulation->setMontantReelTHCommune($simulation->getMontantReelTHCommune() + $simulation->getCotisationTH()->getCotisationcommunale());
            $simulation->setMontantReelTHICO($simulation->getMontantReelTHICO() + $simulation->getCotisationTH()->getCotisationintercommunalite());
            $simulation->setMontantReelTHTSE($simulation->getMontantReelTHTSE() + $simulation->getCotisationTH()->getCotisationtse());
            $simulation->setMontantReelTHFraisTHS($simulation->getMontantReelTHFraisTHS() + $this->getMontantdesfraisderole());
            $simulation->setMontantReelTHPrelt1($simulation->getMontantReelTHPrelt1() + $this->getCotisation()->getMontantprelevementsurfortevl());
            $simulation->setMontantNetTHTHLVICO($simulation->getMontantNetTHTHLVICO() + $simulation->getCotisationTH()->getCotisationintercommunalite());
            $simulation->setMontantNetTHTHLVTSE($simulation->getMontantNetTHTHLVTSE() + $simulation->getCotisationTH()->getCotisationtse());
            if ($this->getCotisation()->getMontantprelevementde15surths() != 0) {
                $simulation->setNombreArticlesTHPreltSupplementaireTHS($simulation->getNombreArticlesTHPreltSupplementaireTHS() + 1);
            }
            if ($this->getCotisation()->getMontantprelevementsurfortevl() != 0) {
                $simulation->setNombreArticlesTHPrelt1($simulation->getNombreArticlesTHPrelt1() + 1);
            }
            $simulation->setMontantReelTHPreltSupplementaireTHS($simulation->getMontantReelTHPreltSupplementaireTHS() + $this->getCotisation()->getMontantprelevementde15surths());
            $simulation->setMontantNetTHTHLVCommune($simulation->getMontantNetTHTHLVCommune() + $simulation->getCotisationTH()->getCotisationcommunale());
        } else if ($this->getCodeTAX() == "V") {
            $simulation->setNombreArticlesTHLVFrais8pourcent($simulation->getNombreArticlesTHLVFrais8pourcent() + 1);
            $simulation->setMontantReelTHLVFrais8pourcent($simulation->getMontantReelTHLVFrais8pourcent() + $this->getMontantdesfraisderole());
            $simulation->setMontantReelTHLVCommune($simulation->getMontantReelTHLVCommune() + $this->getCotisation()->getCotisationcommunale());
            $simulation->setNombreArticlesTHLVTotal($simulation->getNombreArticlesTHLVTotal() + 1);
            $simulation->setMontantReelTHLVTotal($simulation->getMontantReelTHLVTotal() + $simulation->getCotisationTH()->getTotalcotisationsbrutes() + $this->getMontantdesfraisderole());
            $simulation->setMontantNetTHTHLVCommune($simulation->getMontantNetTHTHLVCommune() + $simulation->getCotisationTH()->getCotisationcommunale());
            $simulation->setMontantNetTHTHLVICO($simulation->getMontantNetTHTHLVICO() + $simulation->getCotisationTH()->getCotisationintercommunalite());
            $simulation->setMontantNetTHTHLVTSE($simulation->getMontantNetTHTHLVTSE() + $simulation->getCotisationTH()->getCotisationtse());
        }
    }

}
