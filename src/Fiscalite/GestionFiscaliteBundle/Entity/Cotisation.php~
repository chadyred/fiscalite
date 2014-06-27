<?php

namespace Fiscalite\GestionFiscaliteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cotisation
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Fiscalite\GestionFiscaliteBundle\Entity\CotisationRepository")
 */
class Cotisation {

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
     * @ORM\Column(name="cotisationcommunale", type="integer")
     */
    private $cotisationcommunale;

    /**
     * @var integer
     *
     * @ORM\Column(name="cotisationintercommunalite", type="integer")
     */
    private $cotisationintercommunalite;

    /**
     * @var integer
     *
     * @ORM\Column(name="cotisationsyndicats", type="integer")
     */
    private $cotisationsyndicats;

    /**
     * @var integer
     *
     * @ORM\Column(name="cotisationtse", type="integer")
     */
    private $cotisationtse;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbpersonnesacharge", type="integer")
     */
    private $nbpersonnesacharge;

    /**
     * @var integer
     *
     * @ORM\Column(name="totalcotisationsbrutes", type="integer")
     */
    private $totalcotisationsbrutes;

    /**
     * @var integer
     *
     * @ORM\Column(name="montantprelevementsurfortevl", type="integer")
     */
    private $montantprelevementsurfortevl;

    /**
     * @var integer
     *
     * @ORM\Column(name="montantprelevementde15surths", type="integer")
     */
    private $montantprelevementde15surths;

    /**
     * @var integer
     *
     * @ORM\Column(name="totaldesCotisationsFraisPrelevements", type="integer")
     */
    private $totaldesCotisationsFraisPrelevements;

    /**
     * @var integer
     *
     * @ORM\Column(name="montantdudegrevementouplafonnementeffectif", type="integer")
     */
    private $montantdudegrevementouplafonnementeffectif;

    /**
     * @var integer
     *
     * @ORM\Column(name="vlbruteimposeedeslocauxprincipaux", type="integer")
     */
    private $vlbruteimposeedeslocauxprincipaux;

    /**
     * @var integer
     *
     * @ORM\Column(name="vlbruteexonereeloueemeubleeenZRRenTHP", type="integer")
     */
    private $vlbruteexonereeloueemeubleeenZRRenTHP;

    /**
     * @var integer
     *
     * @ORM\Column(name="vlimposeedeslocauxsecondaires", type="integer")
     */
    private $vlimposeedeslocauxsecondaires;

    /**
     * @var integer
     *
     * @ORM\Column(name="vlbruteexonereeloueemeubleeenZZRenTHS", type="integer")
     */
    private $vlbruteexonereeloueemeubleeenZZRenTHS;

    /**
     * @var string
     *
     * @ORM\Column(name="codeRole", type="string",length=2)
     */
    private $codeRole;

    /**
     * @var string
     *
     * @ORM\Column(name="exoTSE", type="string",length=1)
     */
    private $exoTSE;

    /**
     * @ORM\OneToOne(targetEntity="ArticleTH",inversedBy="cotisation", cascade={"persist","remove"})
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
     * Set cotisationcommunale
     *
     * @param integer $cotisationcommunale
     * @return Cotisation
     */
    public function setCotisationcommunale($cotisationcommunale) {
        $this->cotisationcommunale = $cotisationcommunale;

        return $this;
    }

    /**
     * Get cotisationcommunale
     *
     * @return integer 
     */
    public function getCotisationcommunale() {
        return $this->cotisationcommunale;
    }

    /**
     * Set cotisationintercommunalite
     *
     * @param integer $cotisationintercommunalite
     * @return Cotisation
     */
    public function setCotisationintercommunalite($cotisationintercommunalite) {
        $this->cotisationintercommunalite = $cotisationintercommunalite;

        return $this;
    }

    /**
     * Get cotisationintercommunalite
     *
     * @return integer 
     */
    public function getCotisationintercommunalite() {
        return $this->cotisationintercommunalite;
    }

    /**
     * Set article
     *
     * @param \Fiscalite\GestionFiscaliteBundle\Entity\Article $article
     * @return Cotisation
     */
    public function setArticle(\Fiscalite\GestionFiscaliteBundle\Entity\Article $article = null) {
        $this->article = $article;

        return $this;
    }

    /**
     * Get article
     *
     * @return \Fiscalite\GestionFiscaliteBundle\Entity\Article 
     */
    public function getArticle() {
        return $this->article;
    }

    /**
     * Set numerosequentiel
     *
     * @param integer $numerosequentiel
     * @return Cotisation
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
     * Set cotisationsyndicats
     *
     * @param integer $cotisationsyndicats
     * @return Cotisation
     */
    public function setCotisationsyndicats($cotisationsyndicats) {
        $this->cotisationsyndicats = $cotisationsyndicats;

        return $this;
    }

    /**
     * Get cotisationsyndicats
     *
     * @return integer 
     */
    public function getCotisationsyndicats() {
        return $this->cotisationsyndicats;
    }

    /**
     * Set cotisationtse
     *
     * @param integer $cotisationtse
     * @return Cotisation
     */
    public function setCotisationtse($cotisationtse) {
        $this->cotisationtse = $cotisationtse;

        return $this;
    }

    /**
     * Get cotisationtse
     *
     * @return integer 
     */
    public function getCotisationtse() {
        return $this->cotisationtse;
    }

    /**
     * Set nbpersonnesacharge
     *
     * @param integer $nbpersonnesacharge
     * @return Cotisation
     */
    public function setNbpersonnesacharge($nbpersonnesacharge) {
        $this->nbpersonnesacharge = $nbpersonnesacharge;

        return $this;
    }

    /**
     * Get nbpersonnesacharge
     *
     * @return integer 
     */
    public function getNbpersonnesacharge() {
        return $this->nbpersonnesacharge;
    }

    /**
     * Set totalcotisationsbrutes
     *
     * @param integer $totalcotisationsbrutes
     * @return Cotisation
     */
    public function setTotalcotisationsbrutes($totalcotisationsbrutes) {
        $this->totalcotisationsbrutes = $totalcotisationsbrutes;

        return $this;
    }

    /**
     * Get totalcotisationsbrutes
     *
     * @return integer 
     */
    public function getTotalcotisationsbrutes() {
        return $this->totalcotisationsbrutes;
    }

    /**
     * Set montantprelevementsurfortevl
     *
     * @param integer $montantprelevementsurfortevl
     * @return Cotisation
     */
    public function setMontantprelevementsurfortevl($montantprelevementsurfortevl) {
        $this->montantprelevementsurfortevl = $montantprelevementsurfortevl;

        return $this;
    }

    /**
     * Get montantprelevementsurfortevl
     *
     * @return integer 
     */
    public function getMontantprelevementsurfortevl() {
        return $this->montantprelevementsurfortevl;
    }

    /**
     * Set montantprelevementde15surths
     *
     * @param integer $montantprelevementde15surths
     * @return Cotisation
     */
    public function setMontantprelevementde15surths($montantprelevementde15surths) {
        $this->montantprelevementde15surths = $montantprelevementde15surths;

        return $this;
    }

    /**
     * Get montantprelevementde15surths
     *
     * @return integer 
     */
    public function getMontantprelevementde15surths() {
        return $this->montantprelevementde15surths;
    }

    /**
     * Set totaldesCotisationsFraisPrelevements
     *
     * @param integer $totaldesCotisationsFraisPrelevements
     * @return Cotisation
     */
    public function setTotaldesCotisationsFraisPrelevements($totaldesCotisationsFraisPrelevements) {
        $this->totaldesCotisationsFraisPrelevements = $totaldesCotisationsFraisPrelevements;

        return $this;
    }

    /**
     * Get totaldesCotisationsFraisPrelevements
     *
     * @return integer 
     */
    public function getTotaldesCotisationsFraisPrelevements() {
        return $this->totaldesCotisationsFraisPrelevements;
    }

    /**
     * Set montantdudegrevementouplafonnementeffectif
     *
     * @param integer $montantdudegrevementouplafonnementeffectif
     * @return Cotisation
     */
    public function setMontantdudegrevementouplafonnementeffectif($montantdudegrevementouplafonnementeffectif) {
        $this->montantdudegrevementouplafonnementeffectif = $montantdudegrevementouplafonnementeffectif;

        return $this;
    }

    /**
     * Get montantdudegrevementouplafonnementeffectif
     *
     * @return integer 
     */
    public function getMontantdudegrevementouplafonnementeffectif() {
        return $this->montantdudegrevementouplafonnementeffectif;
    }

    /**
     * Set vlbruteimposeedeslocauxprincipaux
     *
     * @param integer $vlbruteimposeedeslocauxprincipaux
     * @return Cotisation
     */
    public function setVlbruteimposeedeslocauxprincipaux($vlbruteimposeedeslocauxprincipaux) {
        $this->vlbruteimposeedeslocauxprincipaux = $vlbruteimposeedeslocauxprincipaux;

        return $this;
    }

    /**
     * Get vlbruteimposeedeslocauxprincipaux
     *
     * @return integer 
     */
    public function getVlbruteimposeedeslocauxprincipaux() {
        return $this->vlbruteimposeedeslocauxprincipaux;
    }

    /**
     * Set articleTH
     *
     * @param \Fiscalite\GestionFiscaliteBundle\Entity\ArticleTH $articleTH
     * @return Cotisation
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

    /**
     * Set vlbruteexonereeloueemeubleeenZRRenTHP
     *
     * @param integer $vlbruteexonereeloueemeubleeenZRRenTHP
     * @return Cotisation
     */
    public function setVlbruteexonereeloueemeubleeenZRRenTHP($vlbruteexonereeloueemeubleeenZRRenTHP) {
        $this->vlbruteexonereeloueemeubleeenZRRenTHP = $vlbruteexonereeloueemeubleeenZRRenTHP;

        return $this;
    }

    /**
     * Get vlbruteexonereeloueemeubleeenZRRenTHP
     *
     * @return integer 
     */
    public function getVlbruteexonereeloueemeubleeenZRRenTHP() {
        return $this->vlbruteexonereeloueemeubleeenZRRenTHP;
    }

    /**
     * Set vlimposeedeslocauxsecondaires
     *
     * @param integer $vlimposeedeslocauxsecondaires
     * @return Cotisation
     */
    public function setVlimposeedeslocauxsecondaires($vlimposeedeslocauxsecondaires) {
        $this->vlimposeedeslocauxsecondaires = $vlimposeedeslocauxsecondaires;

        return $this;
    }

    /**
     * Get vlimposeedeslocauxsecondaires
     *
     * @return integer 
     */
    public function getVlimposeedeslocauxsecondaires() {
        return $this->vlimposeedeslocauxsecondaires;
    }

    /**
     * Set vlbruteexonereeloueemeubleeenZZRenTHS
     *
     * @param integer $vlbruteexonereeloueemeubleeenZZRenTHS
     * @return Cotisation
     */
    public function setVlbruteexonereeloueemeubleeenZZRenTHS($vlbruteexonereeloueemeubleeenZZRenTHS) {
        $this->vlbruteexonereeloueemeubleeenZZRenTHS = $vlbruteexonereeloueemeubleeenZZRenTHS;

        return $this;
    }

    /**
     * Get vlbruteexonereeloueemeubleeenZZRenTHS
     *
     * @return integer 
     */
    public function getVlbruteexonereeloueemeubleeenZZRenTHS() {
        return $this->vlbruteexonereeloueemeubleeenZZRenTHS;
    }

    /**
     * Set codeRole
     *
     * @param string $codeRole
     * @return Cotisation
     */
    public function setCodeRole($codeRole) {
        $this->codeRole = $codeRole;

        return $this;
    }

    /**
     * Get codeRole
     *
     * @return string 
     */
    public function getCodeRole() {
        return $this->codeRole;
    }

    public function newCotisation($chaine) {
        $this->setNumerosequentiel(substr($chaine, 7, 6));
        $this->setCotisationcommunale(substr($chaine, 148, 9));
        $this->setCotisationintercommunalite(substr($chaine, 166, 9));
        $this->setCotisationsyndicats(substr($chaine, 157, 9));
        $this->setCotisationtse(substr($chaine, 175, 9));
        $this->setTotalcotisationsbrutes(substr($chaine, 210, 9));
        $this->setMontantprelevementsurfortevl(substr($chaine, 219, 9));
        $this->setMontantprelevementde15surths(substr($chaine, 228, 9));
        $this->setTotaldesCotisationsFraisPrelevements(substr($chaine, 237, 9));
        $this->setMontantdudegrevementouplafonnementeffectif(substr($chaine, 246, 9));
        $this->setVlbruteimposeedeslocauxprincipaux(substr($chaine, 255, 10));
        $this->setVlbruteexonereeloueemeubleeenZRRenTHP(substr($chaine, 265, 10));
        $this->setVlimposeedeslocauxsecondaires(substr($chaine, 275, 10));
        $this->setVlbruteexonereeloueemeubleeenZZRenTHS(substr($chaine, 285, 10));
        $this->setNbpersonnesacharge(substr($chaine, 295, 2));
        $this->setCodeRole(substr($chaine, 299, 2));
        $this->setExoTSE(substr($chaine, 193, 1));
        return $this;
    }

    public function getRepartitionNombreArticlesDuRole(Simulation $simulation) {
        if ($this->getArticleTH()->getCodeTAX() != "V") {
            if ($simulation->getCotisationTH()->getTotalcotisationsbrutes() >= 0 && $simulation->getCotisationTH()->getTotalcotisationsbrutes() <= 11) {
                $simulation->setNombreArticlesDuRole011($simulation->getNombreArticlesDuRole011() + 1);
                $simulation->setRepartitionCotisationsMisesEnRecouvrement011($simulation->getRepartitionCotisationsMisesEnRecouvrement011() + $simulation->getCotisationTH()->getTotalcotisationsbrutes());
                $simulation->setRepartitionCotisationsBrutesCommunesSyndicatsEtTSE011($simulation->getRepartitionCotisationsBrutesCommunesSyndicatsEtTSE011() + $simulation->getCotisationTH()->getCotisationcommunale() + $simulation->getCotisationTH()->getCotisationtse() + $simulation->getCotisationTH()->getCotisationsyndicats());
                $simulation->setRepartitionCotisationsBrutesICO011($simulation->getRepartitionCotisationsBrutesICO011() + $this->getCotisationintercommunalite());
                $simulation->setRepartitionCotisationsBrutesFraisDePrelevement011($simulation->getRepartitionCotisationsBrutesFraisDePrelevement011() + $this->getArticleTH()->getMontantdesfraisderole() + $this->getMontantprelevementde15surths() + $this->getMontantprelevementsurfortevl());
            } else if ($simulation->getCotisationTH()->getTotalcotisationsbrutes() >= 12 && $simulation->getCotisationTH()->getTotalcotisationsbrutes() <= 99) {
                $simulation->setNombreArticlesDuRole1299($simulation->getNombreArticlesDuRole1299() + 1);
                $simulation->setRepartitionCotisationsMisesEnRecouvrement1299($simulation->getRepartitionCotisationsMisesEnRecouvrement1299() + $simulation->getCotisationTH()->getTotalcotisationsbrutes());
                $simulation->setRepartitionCotisationsBrutesCommunesSyndicatsEtTSE1299($simulation->getRepartitionCotisationsBrutesCommunesSyndicatsEtTSE1299() + $simulation->getCotisationTH()->getCotisationcommunale() + $simulation->getCotisationTH()->getCotisationtse() + $simulation->getCotisationTH()->getCotisationsyndicats());
                $simulation->setRepartitionCotisationsBrutesICO1299($simulation->getRepartitionCotisationsBrutesICO1299() + $this->getCotisationintercommunalite());
                $simulation->setRepartitionCotisationsBrutesFraisDePrelevement1299($simulation->getRepartitionCotisationsBrutesFraisDePrelevement1299() + $this->getArticleTH()->getMontantdesfraisderole() + $this->getMontantprelevementde15surths() + $this->getMontantprelevementsurfortevl());
            } else if ($simulation->getCotisationTH()->getTotalcotisationsbrutes() >= 100 && $simulation->getCotisationTH()->getTotalcotisationsbrutes() <= 199) {
                $simulation->setNombreArticlesDuRole100199($simulation->getNombreArticlesDuRole100199() + 1);
                $simulation->setRepartitionCotisationsMisesEnRecouvrement100199($simulation->getRepartitionCotisationsMisesEnRecouvrement100199() + $simulation->getCotisationTH()->getTotalcotisationsbrutes());
                $simulation->setRepartitionCotisationsBrutesCommunesSyndicatsEtTSE100199($simulation->getRepartitionCotisationsBrutesCommunesSyndicatsEtTSE100199() + $simulation->getCotisationTH()->getCotisationcommunale() + $simulation->getCotisationTH()->getCotisationtse() + $simulation->getCotisationTH()->getCotisationsyndicats());
                $simulation->setRepartitionCotisationsBrutesICO100199($simulation->getRepartitionCotisationsBrutesICO100199() + $this->getCotisationintercommunalite());
                $simulation->setRepartitionCotisationsBrutesFraisDePrelevement100199($simulation->getRepartitionCotisationsBrutesFraisDePrelevement100199() + $this->getArticleTH()->getMontantdesfraisderole() + $this->getMontantprelevementde15surths() + $this->getMontantprelevementsurfortevl());
            } else if ($simulation->getCotisationTH()->getTotalcotisationsbrutes() >= 200 && $simulation->getCotisationTH()->getTotalcotisationsbrutes() <= 299) {
                $simulation->setNombreArticlesDuRole200299($simulation->getNombreArticlesDuRole200299() + 1);
                $simulation->setRepartitionCotisationsMisesEnRecouvrement200299($simulation->getRepartitionCotisationsMisesEnRecouvrement200299() + $simulation->getCotisationTH()->getTotalcotisationsbrutes());
                $simulation->setRepartitionCotisationsBrutesCommunesSyndicatsEtTSE200299($simulation->getRepartitionCotisationsBrutesCommunesSyndicatsEtTSE200299() + $simulation->getCotisationTH()->getCotisationcommunale() + $simulation->getCotisationTH()->getCotisationtse() + $simulation->getCotisationTH()->getCotisationsyndicats());
                $simulation->setRepartitionCotisationsBrutesICO200299($simulation->getRepartitionCotisationsBrutesICO200299() + $this->getCotisationintercommunalite());
                $simulation->setRepartitionCotisationsBrutesFraisDePrelevement200299($simulation->getRepartitionCotisationsBrutesFraisDePrelevement200299() + $this->getArticleTH()->getMontantdesfraisderole() + $this->getMontantprelevementde15surths() + $this->getMontantprelevementsurfortevl());
            } else if ($simulation->getCotisationTH()->getTotalcotisationsbrutes() >= 300 && $simulation->getCotisationTH()->getTotalcotisationsbrutes() <= 399) {
                $simulation->setNombreArticlesDuRole300399($simulation->getNombreArticlesDuRole300399() + 1);
                $simulation->setRepartitionCotisationsMisesEnRecouvrement300399($simulation->getRepartitionCotisationsMisesEnRecouvrement300399() + $simulation->getCotisationTH()->getTotalcotisationsbrutes());
                $simulation->setRepartitionCotisationsBrutesCommunesSyndicatsEtTSE300399($simulation->getRepartitionCotisationsBrutesCommunesSyndicatsEtTSE300399() + $simulation->getCotisationTH()->getCotisationcommunale() + $simulation->getCotisationTH()->getCotisationtse() + $simulation->getCotisationTH()->getCotisationsyndicats());
                $simulation->setRepartitionCotisationsBrutesICO300399($simulation->getRepartitionCotisationsBrutesICO300399() + $this->getCotisationintercommunalite());
                $simulation->setRepartitionCotisationsBrutesFraisDePrelevement300399($simulation->getRepartitionCotisationsBrutesFraisDePrelevement300399() + $this->getArticleTH()->getMontantdesfraisderole() + $this->getMontantprelevementde15surths() + $this->getMontantprelevementsurfortevl());
            } else if ($simulation->getCotisationTH()->getTotalcotisationsbrutes() >= 400 && $simulation->getCotisationTH()->getTotalcotisationsbrutes() <= 499) {
                $simulation->setNombreArticlesDuRole400499($simulation->getNombreArticlesDuRole400499() + 1);
                $simulation->setRepartitionCotisationsMisesEnRecouvrement400499($simulation->getRepartitionCotisationsMisesEnRecouvrement400499() + $simulation->getCotisationTH()->getTotalcotisationsbrutes());
                $simulation->setRepartitionCotisationsBrutesCommunesSyndicatsEtTSE400499($simulation->getRepartitionCotisationsBrutesCommunesSyndicatsEtTSE400499() + $simulation->getCotisationTH()->getCotisationcommunale() + $simulation->getCotisationTH()->getCotisationtse() + $simulation->getCotisationTH()->getCotisationsyndicats());
                $simulation->setRepartitionCotisationsBrutesICO400499($simulation->getRepartitionCotisationsBrutesICO400499() + $this->getCotisationintercommunalite());
                $simulation->setRepartitionCotisationsBrutesFraisDePrelevement400499($simulation->getRepartitionCotisationsBrutesFraisDePrelevement400499() + $this->getArticleTH()->getMontantdesfraisderole() + $this->getMontantprelevementde15surths() + $this->getMontantprelevementsurfortevl());
            } else if ($simulation->getCotisationTH()->getTotalcotisationsbrutes() >= 500 && $simulation->getCotisationTH()->getTotalcotisationsbrutes() <= 599) {
                $simulation->setNombreArticlesDuRole500599($simulation->getNombreArticlesDuRole500599() + 1);
                $simulation->setRepartitionCotisationsMisesEnRecouvrement500599($simulation->getRepartitionCotisationsMisesEnRecouvrement500599() + $simulation->getCotisationTH()->getTotalcotisationsbrutes());
                $simulation->setRepartitionCotisationsBrutesCommunesSyndicatsEtTSE500599($simulation->getRepartitionCotisationsBrutesCommunesSyndicatsEtTSE500599() + $simulation->getCotisationTH()->getCotisationcommunale() + $simulation->getCotisationTH()->getCotisationtse() + $simulation->getCotisationTH()->getCotisationsyndicats());
                $simulation->setRepartitionCotisationsBrutesICO500599($simulation->getRepartitionCotisationsBrutesICO500599() + $this->getCotisationintercommunalite());
                $simulation->setRepartitionCotisationsBrutesFraisDePrelevement500599($simulation->getRepartitionCotisationsBrutesFraisDePrelevement500599() + $this->getArticleTH()->getMontantdesfraisderole() + $this->getMontantprelevementde15surths() + $this->getMontantprelevementsurfortevl());
            } else if ($simulation->getCotisationTH()->getTotalcotisationsbrutes() >= 600 && $simulation->getCotisationTH()->getTotalcotisationsbrutes() <= 699) {
                $simulation->setNombreArticlesDuRole600699($simulation->getNombreArticlesDuRole600699() + 1);
                $simulation->setRepartitionCotisationsMisesEnRecouvrement600699($simulation->getRepartitionCotisationsMisesEnRecouvrement600699() + $simulation->getCotisationTH()->getTotalcotisationsbrutes());
                $simulation->setRepartitionCotisationsBrutesCommunesSyndicatsEtTSE600699($simulation->getRepartitionCotisationsBrutesCommunesSyndicatsEtTSE600699() + $simulation->getCotisationTH()->getCotisationcommunale() + $simulation->getCotisationTH()->getCotisationtse() + $simulation->getCotisationTH()->getCotisationsyndicats());
                $simulation->setRepartitionCotisationsBrutesICO600699($simulation->getRepartitionCotisationsBrutesICO600699() + $this->getCotisationintercommunalite());
                $simulation->setRepartitionCotisationsBrutesFraisDePrelevement600699($simulation->getRepartitionCotisationsBrutesFraisDePrelevement600699() + $this->getArticleTH()->getMontantdesfraisderole() + $this->getMontantprelevementde15surths() + $this->getMontantprelevementsurfortevl());
            } else if ($simulation->getCotisationTH()->getTotalcotisationsbrutes() >= 700 && $simulation->getCotisationTH()->getTotalcotisationsbrutes() <= 799) {
                $simulation->setNombreArticlesDuRole700799($simulation->getNombreArticlesDuRole700799() + 1);
                $simulation->setRepartitionCotisationsMisesEnRecouvrement700799($simulation->getRepartitionCotisationsMisesEnRecouvrement700799() + $simulation->getCotisationTH()->getTotalcotisationsbrutes());
                $simulation->setRepartitionCotisationsBrutesCommunesSyndicatsEtTSE700799($simulation->getRepartitionCotisationsBrutesCommunesSyndicatsEtTSE700799() + $simulation->getCotisationTH()->getCotisationcommunale() + $simulation->getCotisationTH()->getCotisationtse() + $simulation->getCotisationTH()->getCotisationsyndicats());
                $simulation->setRepartitionCotisationsBrutesICO700799($simulation->getRepartitionCotisationsBrutesICO700799() + $this->getCotisationintercommunalite());
                $simulation->setRepartitionCotisationsBrutesFraisDePrelevement700799($simulation->getRepartitionCotisationsBrutesFraisDePrelevement700799() + $this->getArticleTH()->getMontantdesfraisderole() + $this->getMontantprelevementde15surths() + $this->getMontantprelevementsurfortevl());
            } else if ($simulation->getCotisationTH()->getTotalcotisationsbrutes() >= 800 && $simulation->getCotisationTH()->getTotalcotisationsbrutes() <= 899) {
                $simulation->setNombreArticlesDuRole800899($simulation->getNombreArticlesDuRole800899() + 1);
                $simulation->setRepartitionCotisationsMisesEnRecouvrement800899($simulation->getRepartitionCotisationsMisesEnRecouvrement800899() + $simulation->getCotisationTH()->getTotalcotisationsbrutes());
                $simulation->setRepartitionCotisationsBrutesCommunesSyndicatsEtTSE800899($simulation->getRepartitionCotisationsBrutesCommunesSyndicatsEtTSE800899() + $simulation->getCotisationTH()->getCotisationcommunale() + $simulation->getCotisationTH()->getCotisationtse() + $simulation->getCotisationTH()->getCotisationsyndicats());
                $simulation->setRepartitionCotisationsBrutesICO800899($simulation->getRepartitionCotisationsBrutesICO800899() + $this->getCotisationintercommunalite());
                $simulation->setRepartitionCotisationsBrutesFraisDePrelevement800899($simulation->getRepartitionCotisationsBrutesFraisDePrelevement800899() + $this->getArticleTH()->getMontantdesfraisderole() + $this->getMontantprelevementde15surths() + $this->getMontantprelevementsurfortevl());
            } else if ($simulation->getCotisationTH()->getTotalcotisationsbrutes() >= 900 && $simulation->getCotisationTH()->getTotalcotisationsbrutes() <= 999) {
                $simulation->setNombreArticlesDuRole900999($simulation->getNombreArticlesDuRole900999() + 1);
                $simulation->setRepartitionCotisationsMisesEnRecouvrement900999($simulation->getRepartitionCotisationsMisesEnRecouvrement900999() + $simulation->getCotisationTH()->getTotalcotisationsbrutes());
                $simulation->setRepartitionCotisationsBrutesCommunesSyndicatsEtTSE900999($simulation->getRepartitionCotisationsBrutesCommunesSyndicatsEtTSE900999() + $simulation->getCotisationTH()->getCotisationcommunale() + $simulation->getCotisationTH()->getCotisationtse() + $simulation->getCotisationTH()->getCotisationsyndicats());
                $simulation->setRepartitionCotisationsBrutesICO900999($simulation->getRepartitionCotisationsBrutesICO900999() + $this->getCotisationintercommunalite());
                $simulation->setRepartitionCotisationsBrutesFraisDePrelevement900999($simulation->getRepartitionCotisationsBrutesFraisDePrelevement900999() + $this->getArticleTH()->getMontantdesfraisderole() + $this->getMontantprelevementde15surths() + $this->getMontantprelevementsurfortevl());
            } else if ($simulation->getCotisationTH()->getTotalcotisationsbrutes() >= 1000) {
                $simulation->setNombreArticlesDuRole1000plus($simulation->getNombreArticlesDuRole1000plus() + 1);
                $simulation->setRepartitionCotisationsMisesEnRecouvrement1000plus($simulation->getRepartitionCotisationsMisesEnRecouvrement1000plus() + $simulation->getCotisationTH()->getTotalcotisationsbrutes());
                $simulation->setRepartitionCotisationsBrutesCommunesSyndicatsEtTSE1000plus($simulation->getRepartitionCotisationsBrutesCommunesSyndicatsEtTSE1000plus() + $simulation->getCotisationTH()->getCotisationcommunale() + $simulation->getCotisationTH()->getCotisationtse() + $simulation->getCotisationTH()->getCotisationsyndicats());
                $simulation->setRepartitionCotisationsBrutesICO1000plus($simulation->getRepartitionCotisationsBrutesICO1000plus() + $this->getCotisationintercommunalite());
                $simulation->setRepartitionCotisationsBrutesFraisDePrelevement1000plus($simulation->getRepartitionCotisationsBrutesFraisDePrelevement1000plus() + $this->getArticleTH()->getMontantdesfraisderole() + $this->getMontantprelevementde15surths() + $this->getMontantprelevementsurfortevl());
            }
            
            if ($this->getTotalcotisationsbrutes() >= 0 && $this->getTotalcotisationsbrutes() <= 11) {
                $simulation->setVecteurBDD(0, 6, $simulation->getVecteurBDD(0, 6) + 1);
                $simulation->setVecteurBDD(13, 6, $simulation->getVecteurBDD(13, 6) + $this->getTotalcotisationsbrutes());
                $simulation->setVecteurBDD(26, 6, $simulation->getVecteurBDD(26, 6) + $this->getCotisationcommunale() + $this->getCotisationsyndicats() + $this->getCotisationtse());
                $simulation->setVecteurBDD(39, 6, $simulation->getVecteurBDD(39, 6) + $this->getCotisationintercommunalite());
                $simulation->setVecteurBDD(52, 6, $simulation->getVecteurBDD(52, 6) + $this->getArticleTH()->getMontantdesfraisderole() + $this->getMontantprelevementde15surths() + $this->getMontantprelevementsurfortevl());
            } else if ($this->getTotalcotisationsbrutes() >= 12 && $this->getTotalcotisationsbrutes() <= 99) {
                $simulation->setVecteurBDD(1, 6, $simulation->getVecteurBDD(1, 6) + 1);
                $simulation->setVecteurBDD(14, 6, $simulation->getVecteurBDD(14, 6) + $this->getTotalcotisationsbrutes());
                $simulation->setVecteurBDD(27, 6, $simulation->getVecteurBDD(27, 6) + $this->getCotisationcommunale() + $this->getCotisationsyndicats() + $this->getCotisationtse());
                $simulation->setVecteurBDD(40, 6, $simulation->getVecteurBDD(40, 6) + $this->getCotisationintercommunalite());
                $simulation->setVecteurBDD(53, 6, $simulation->getVecteurBDD(53, 6) + $this->getArticleTH()->getMontantdesfraisderole() + $this->getMontantprelevementde15surths() + $this->getMontantprelevementsurfortevl());
            } else if ($this->getTotalcotisationsbrutes() >= 100 && $this->getTotalcotisationsbrutes() <= 199) {
                $simulation->setVecteurBDD(2, 6, $simulation->getVecteurBDD(2, 6) + 1);
                $simulation->setVecteurBDD(15, 6, $simulation->getVecteurBDD(15, 6) + $this->getTotalcotisationsbrutes());
                $simulation->setVecteurBDD(28, 6, $simulation->getVecteurBDD(28, 6) + $this->getCotisationcommunale() + $this->getCotisationsyndicats() + $this->getCotisationtse());
                $simulation->setVecteurBDD(41, 6, $simulation->getVecteurBDD(41, 6) + $this->getCotisationintercommunalite());
                $simulation->setVecteurBDD(54, 6, $simulation->getVecteurBDD(54, 6) + $this->getArticleTH()->getMontantdesfraisderole() + $this->getMontantprelevementde15surths() + $this->getMontantprelevementsurfortevl());
            } else if ($this->getTotalcotisationsbrutes() >= 200 && $this->getTotalcotisationsbrutes() <= 299) {
                $simulation->setVecteurBDD(3, 6, $simulation->getVecteurBDD(3, 6) + 1);
                $simulation->setVecteurBDD(16, 6, $simulation->getVecteurBDD(16, 6) + $this->getTotalcotisationsbrutes());
                $simulation->setVecteurBDD(29, 6, $simulation->getVecteurBDD(29, 6) + $this->getCotisationcommunale() + $this->getCotisationsyndicats() + $this->getCotisationtse());
                $simulation->setVecteurBDD(42, 6, $simulation->getVecteurBDD(42, 6) + $this->getCotisationintercommunalite());
                $simulation->setVecteurBDD(55, 6, $simulation->getVecteurBDD(55, 6) + $this->getArticleTH()->getMontantdesfraisderole() + $this->getMontantprelevementde15surths() + $this->getMontantprelevementsurfortevl());
            } else if ($this->getTotalcotisationsbrutes() >= 300 && $this->getTotalcotisationsbrutes() <= 399) {
                $simulation->setVecteurBDD(4, 6, $simulation->getVecteurBDD(4, 6) + 1);
                $simulation->setVecteurBDD(17, 6, $simulation->getVecteurBDD(17, 6) + $this->getTotalcotisationsbrutes());
                $simulation->setVecteurBDD(30, 6, $simulation->getVecteurBDD(30, 6) + $this->getCotisationcommunale() + $this->getCotisationsyndicats() + $this->getCotisationtse());
                $simulation->setVecteurBDD(43, 6, $simulation->getVecteurBDD(43, 6) + $this->getCotisationintercommunalite());
                $simulation->setVecteurBDD(56, 6, $simulation->getVecteurBDD(56, 6) + $this->getArticleTH()->getMontantdesfraisderole() + $this->getMontantprelevementde15surths() + $this->getMontantprelevementsurfortevl());
            } else if ($this->getTotalcotisationsbrutes() >= 400 && $this->getTotalcotisationsbrutes() <= 499) {
                $simulation->setVecteurBDD(5, 6, $simulation->getVecteurBDD(5, 6) + 1);
                $simulation->setVecteurBDD(18, 6, $simulation->getVecteurBDD(18, 6) + $this->getTotalcotisationsbrutes());
                $simulation->setVecteurBDD(31, 6, $simulation->getVecteurBDD(31, 6) + $this->getCotisationcommunale() + $this->getCotisationsyndicats() + $this->getCotisationtse());
                $simulation->setVecteurBDD(44, 6, $simulation->getVecteurBDD(44, 6) + $this->getCotisationintercommunalite());
                $simulation->setVecteurBDD(57, 6, $simulation->getVecteurBDD(57, 6) + $this->getArticleTH()->getMontantdesfraisderole() + $this->getMontantprelevementde15surths() + $this->getMontantprelevementsurfortevl());
            } else if ($this->getTotalcotisationsbrutes() >= 500 && $this->getTotalcotisationsbrutes() <= 599) {
                $simulation->setVecteurBDD(6, 6, $simulation->getVecteurBDD(6, 6) + 1);
                $simulation->setVecteurBDD(19, 6, $simulation->getVecteurBDD(19, 6) + $this->getTotalcotisationsbrutes());
                $simulation->setVecteurBDD(32, 6, $simulation->getVecteurBDD(32, 6) + $this->getCotisationcommunale() + $this->getCotisationsyndicats() + $this->getCotisationtse());
                $simulation->setVecteurBDD(45, 6, $simulation->getVecteurBDD(45, 6) + $this->getCotisationintercommunalite());
                $simulation->setVecteurBDD(58, 6, $simulation->getVecteurBDD(58, 6) + $this->getArticleTH()->getMontantdesfraisderole() + $this->getMontantprelevementde15surths() + $this->getMontantprelevementsurfortevl());
            } else if ($this->getTotalcotisationsbrutes() >= 600 && $this->getTotalcotisationsbrutes() <= 699) {
                $simulation->setVecteurBDD(7, 6, $simulation->getVecteurBDD(7, 6) + 1);
                $simulation->setVecteurBDD(20, 6, $simulation->getVecteurBDD(20, 6) + $this->getTotalcotisationsbrutes());
                $simulation->setVecteurBDD(33, 6, $simulation->getVecteurBDD(33, 6) + $this->getCotisationcommunale() + $this->getCotisationsyndicats() + $this->getCotisationtse());
                $simulation->setVecteurBDD(46, 6, $simulation->getVecteurBDD(46, 6) + $this->getCotisationintercommunalite());
                $simulation->setVecteurBDD(59, 6, $simulation->getVecteurBDD(59, 6) + $this->getArticleTH()->getMontantdesfraisderole() + $this->getMontantprelevementde15surths() + $this->getMontantprelevementsurfortevl());
            } else if ($this->getTotalcotisationsbrutes() >= 700 && $this->getTotalcotisationsbrutes() <= 799) {
                $simulation->setVecteurBDD(8, 6, $simulation->getVecteurBDD(8, 6) + 1);
                $simulation->setVecteurBDD(21, 6, $simulation->getVecteurBDD(21, 6) + $this->getTotalcotisationsbrutes());
                $simulation->setVecteurBDD(34, 6, $simulation->getVecteurBDD(34, 6) + $this->getCotisationcommunale() + $this->getCotisationsyndicats() + $this->getCotisationtse());
                $simulation->setVecteurBDD(47, 6, $simulation->getVecteurBDD(47, 6) + $this->getCotisationintercommunalite());
                $simulation->setVecteurBDD(60, 6, $simulation->getVecteurBDD(60, 6) + $this->getArticleTH()->getMontantdesfraisderole() + $this->getMontantprelevementde15surths() + $this->getMontantprelevementsurfortevl());
            } else if ($this->getTotalcotisationsbrutes() >= 800 && $this->getTotalcotisationsbrutes() <= 899) {
                $simulation->setVecteurBDD(9, 6, $simulation->getVecteurBDD(9, 6) + 1);
                $simulation->setVecteurBDD(22, 6, $simulation->getVecteurBDD(22, 6) + $this->getTotalcotisationsbrutes());
                $simulation->setVecteurBDD(35, 6, $simulation->getVecteurBDD(35, 6) + $this->getCotisationcommunale() + $this->getCotisationsyndicats() + $this->getCotisationtse());
                $simulation->setVecteurBDD(48, 6, $simulation->getVecteurBDD(48, 6) + $this->getCotisationintercommunalite());
                $simulation->setVecteurBDD(61, 6, $simulation->getVecteurBDD(61, 6) + $this->getArticleTH()->getMontantdesfraisderole() + $this->getMontantprelevementde15surths() + $this->getMontantprelevementsurfortevl());
            } else if ($this->getTotalcotisationsbrutes() >= 900 && $this->getTotalcotisationsbrutes() <= 999) {
                $simulation->setVecteurBDD(10, 6, $simulation->getVecteurBDD(10, 6) + 1);
                $simulation->setVecteurBDD(23, 6, $simulation->getVecteurBDD(23, 6) + $this->getTotalcotisationsbrutes());
                $simulation->setVecteurBDD(36, 6, $simulation->getVecteurBDD(36, 6) + $this->getCotisationcommunale() + $this->getCotisationsyndicats() + $this->getCotisationtse());
                $simulation->setVecteurBDD(49, 6, $simulation->getVecteurBDD(49, 6) + $this->getCotisationintercommunalite());
                $simulation->setVecteurBDD(62, 6, $simulation->getVecteurBDD(62, 6) + $this->getArticleTH()->getMontantdesfraisderole() + $this->getMontantprelevementde15surths() + $this->getMontantprelevementsurfortevl());
            } else if ($this->getTotalcotisationsbrutes() >= 1000) {
                $simulation->setVecteurBDD(11, 6, $simulation->getVecteurBDD(11, 6) + 1);
                $simulation->setVecteurBDD(24, 6, $simulation->getVecteurBDD(24, 6) + $this->getTotalcotisationsbrutes());
                $simulation->setVecteurBDD(37, 6, $simulation->getVecteurBDD(37, 6) + $this->getCotisationcommunale() + $this->getCotisationsyndicats() + $this->getCotisationtse());
                $simulation->setVecteurBDD(50, 6, $simulation->getVecteurBDD(50, 6) + $this->getCotisationintercommunalite());
                $simulation->setVecteurBDD(63, 6, $simulation->getVecteurBDD(63, 6) + $this->getArticleTH()->getMontantdesfraisderole() + $this->getMontantprelevementde15surths() + $this->getMontantprelevementsurfortevl());
            }
            
            
            $simulation->setNombreArticlesDuRoleTotal($simulation->getNombreArticlesDuRoleTotal() + 1);
            $simulation->setVecteurBDD(12, 6, $simulation->getVecteurBDD(12, 6) + 1);
            $simulation->setRepartitionCotisationsMisesEnRecouvrementTotal($simulation->getRepartitionCotisationsMisesEnRecouvrementTotal() + $simulation->getCotisationTH()->getTotalcotisationsbrutes());
            $simulation->setVecteurBDD(25, 6, $simulation->getVecteurBDD(25, 6) + $this->getTotalcotisationsbrutes());
            $simulation->setRepartitionCotisationsBrutesCommunesSyndicatsEtTSETotal($simulation->getRepartitionCotisationsBrutesCommunesSyndicatsEtTSETotal() + $simulation->getCotisationTH()->getCotisationcommunale() + $simulation->getCotisationTH()->getCotisationtse() + $simulation->getCotisationTH()->getCotisationsyndicats());
            $simulation->setVecteurBDD(38, 6, $simulation->getVecteurBDD(38, 6) + $this->getCotisationcommunale() + $this->getCotisationsyndicats() + $this->getCotisationtse());
            $simulation->setRepartitionCotisationsBrutesICOTotal($simulation->getRepartitionCotisationsBrutesICOTotal() + $this->getCotisationintercommunalite());
            $simulation->setVecteurBDD(51, 6, $simulation->getVecteurBDD(51, 6) + $this->getCotisationintercommunalite());
            $simulation->setRepartitionCotisationsBrutesFraisDePrelevementTotal(
                    $simulation->getRepartitionCotisationsBrutesFraisDePrelevementTotal() + $this->getArticleTH()->getMontantdesfraisderole() + $this->getMontantprelevementde15surths() + $this->getMontantprelevementsurfortevl());
            $simulation->setVecteurBDD(64, 6, $simulation->getVecteurBDD(64, 6) + $this->getArticleTH()->getMontantdesfraisderole() + $this->getMontantprelevementde15surths() + $this->getMontantprelevementsurfortevl());
        }
    }

    /**
     * Set exoTSE
     *
     * @param string $exoTSE
     * @return Cotisation
     */
    public function setExoTSE($exoTSE) {
        $this->exoTSE = $exoTSE;

        return $this;
    }

    /**
     * Get exoTSE
     *
     * @return string 
     */
    public function getExoTSE() {
        return $this->exoTSE;
    }

}
