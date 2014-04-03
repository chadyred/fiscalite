<?php

namespace Fiscalite\GestionFiscaliteBundle\Entity;

class SimulationTF {

    private $vecteur;
    private $nombredecomptesdeproprietaireLocauxdhabitationordinaire;
    private $nombredepevLocauxdhabitationordinaire;
    private $baseimposeeLocauxdhabitationordinaire;
    private $montantnetrevenantalacollectiviteLocauxdhabitationordinaire;
    private $nombredecomptesdeproprietaireLocauxdhabitationacaracteresocial;
    private $nombredepevLocauxdhabitationacaracteresocial;
    private $baseimposeeLocauxdhabitationacaracteresocial;
    private $montantnetrevenantalacollectiviteLocauxdhabitationacaracteresocial;
    private $nombredecomptesdeproprietaireLocauxdhabitationsoumisalaloide48;
    private $nombredepevLocauxdhabitationsoumisalaloide48;
    private $baseimposeeLocauxdhabitationsoumisalaloide48;
    private $montantnetrevenantalacollectiviteLocauxdhabitationsoumisalaloide48;
    private $nombredecomptesdeproprietaireAutreslocauxpassiblesdelaTHSouA;
    private $nombredepevAutreslocauxpassiblesdelaTHSouA;
    private $baseimposeeAutreslocauxpassiblesdelaTHSouA;
    private $montantnetrevenantalacollectiviteAutreslocauxpassiblesdelaTHSouA;
    private $nombredecomptesdeproprietaireLocauxausageprofessioneloucommercial;
    private $nombredepevLocauxausageprofessioneloucommercial;
    private $baseimposeeLocauxausageprofessioneloucommercial;
    private $montantnetrevenantalacollectiviteLocauxausageprofessioneloucommercial;
    private $nombredecomptesdeproprietaireEtablissementsindustrielsetassimiles;
    private $nombredepevEtablissementsindustrielsetassimiles;
    private $baseimposeeEtablissementsindustrielsetassimiles;
    private $montantnetrevenantalacollectiviteEtablissementsindustrielsetassimiles;
    private $nombredecomptesdeproprietaireTotal;
    private $nombredepevTotal;
    private $baseimposeeTotal;
    private $montantnetrevenantalacollectiviteTotal;
    private $SimulationArticleTF;
    private $articleCommuneIFP;
    private $articleCommuneEnTete;
    private $articleCommuneSRA2;
    private $articleCommuneSRA3;

    function __construct() {
        $this->vecteur = array();
        for ($i = 0; $i <= 35; $i++) {
            $this->vecteur[$i] = array();
            for ($j = 0; $j <= 12; $j++) {
                $this->vecteur[$i][$j] = 0;
            }
        }
    }
    
    public function getVecteur($x, $y) {
        return $this->vecteur[$x][$y];
    }

    public function setVecteur($x, $y, $var) {
        $this->vecteur[$x][$y] = $var;
    }

    public function getNombredecomptesdeproprietaireLocauxdhabitationordinaire() {
        return $this->nombredecomptesdeproprietaireLocauxdhabitationordinaire;
    }

    public function getNombredepevLocauxdhabitationordinaire() {
        return $this->nombredepevLocauxdhabitationordinaire;
    }

    public function getBaseimposeeLocauxdhabitationordinaire() {
        return $this->baseimposeeLocauxdhabitationordinaire;
    }

    public function getMontantnetrevenantalacollectiviteLocauxdhabitationordinaire() {
        return $this->montantnetrevenantalacollectiviteLocauxdhabitationordinaire;
    }

    public function getNombredecomptesdeproprietaireLocauxdhabitationacaracteresocial() {
        return $this->nombredecomptesdeproprietaireLocauxdhabitationacaracteresocial;
    }

    public function getNombredepevLocauxdhabitationacaracteresocial() {
        return $this->nombredepevLocauxdhabitationacaracteresocial;
    }

    public function getBaseimposeeLocauxdhabitationacaracteresocial() {
        return $this->baseimposeeLocauxdhabitationacaracteresocial;
    }

    public function getMontantnetrevenantalacollectiviteLocauxdhabitationacaracteresocial() {
        return $this->montantnetrevenantalacollectiviteLocauxdhabitationacaracteresocial;
    }

    public function getNombredecomptesdeproprietaireLocauxdhabitationsoumisalaloide48() {
        return $this->nombredecomptesdeproprietaireLocauxdhabitationsoumisalaloide48;
    }

    public function getNombredepevLocauxdhabitationsoumisalaloide48() {
        return $this->nombredepevLocauxdhabitationsoumisalaloide48;
    }

    public function getBaseimposeeLocauxdhabitationsoumisalaloide48() {
        return $this->baseimposeeLocauxdhabitationsoumisalaloide48;
    }

    public function getMontantnetrevenantalacollectiviteLocauxdhabitationsoumisalaloide48() {
        return $this->montantnetrevenantalacollectiviteLocauxdhabitationsoumisalaloide48;
    }

    public function getNombredecomptesdeproprietaireAutreslocauxpassiblesdelaTHSouA() {
        return $this->nombredecomptesdeproprietaireAutreslocauxpassiblesdelaTHSouA;
    }

    public function getNombredepevAutreslocauxpassiblesdelaTHSouA() {
        return $this->nombredepevAutreslocauxpassiblesdelaTHSouA;
    }

    public function getBaseimposeeAutreslocauxpassiblesdelaTHSouA() {
        return $this->baseimposeeAutreslocauxpassiblesdelaTHSouA;
    }

    public function getMontantnetrevenantalacollectiviteAutreslocauxpassiblesdelaTHSouA() {
        return $this->montantnetrevenantalacollectiviteAutreslocauxpassiblesdelaTHSouA;
    }

    public function getNombredecomptesdeproprietaireLocauxausageprofessioneloucommercial() {
        return $this->nombredecomptesdeproprietaireLocauxausageprofessioneloucommercial;
    }

    public function getNombredepevLocauxausageprofessioneloucommercial() {
        return $this->nombredepevLocauxausageprofessioneloucommercial;
    }

    public function getBaseimposeeLocauxausageprofessioneloucommercial() {
        return $this->baseimposeeLocauxausageprofessioneloucommercial;
    }

    public function getMontantnetrevenantalacollectiviteLocauxausageprofessioneloucommercial() {
        return $this->montantnetrevenantalacollectiviteLocauxausageprofessioneloucommercial;
    }

    public function getNombredecomptesdeproprietaireEtablissementsindustrielsetassimiles() {
        return $this->nombredecomptesdeproprietaireEtablissementsindustrielsetassimiles;
    }

    public function getNombredepevEtablissementsindustrielsetassimiles() {
        return $this->nombredepevEtablissementsindustrielsetassimiles;
    }

    public function getBaseimposeeEtablissementsindustrielsetassimiles() {
        return $this->baseimposeeEtablissementsindustrielsetassimiles;
    }

    public function getMontantnetrevenantalacollectiviteEtablissementsindustrielsetassimiles() {
        return $this->montantnetrevenantalacollectiviteEtablissementsindustrielsetassimiles;
    }

    public function getNombredecomptesdeproprietaireTotal() {
        return $this->nombredecomptesdeproprietaireTotal;
    }

    public function getNombredepevTotal() {
        return $this->nombredepevTotal;
    }

    public function getBaseimposeeTotal() {
        return $this->baseimposeeTotal;
    }

    public function getMontantnetrevenantalacollectiviteTotal() {
        return $this->montantnetrevenantalacollectiviteTotal;
    }

    public function getSimulationArticleTF() {
        return $this->SimulationArticleTF;
    }

    public function getArticleCommuneIFP() {
        return $this->articleCommuneIFP;
    }

    public function getArticleCommuneEnTete() {
        return $this->articleCommuneEnTete;
    }

    public function getArticleCommuneSRA2() {
        return $this->articleCommuneSRA2;
    }

    public function getArticleCommuneSRA3() {
        return $this->articleCommuneSRA3;
    }

    public function setNombredecomptesdeproprietaireLocauxdhabitationordinaire($nombredecomptesdeproprietaireLocauxdhabitationordinaire) {
        $this->nombredecomptesdeproprietaireLocauxdhabitationordinaire = $nombredecomptesdeproprietaireLocauxdhabitationordinaire;
    }

    public function setNombredepevLocauxdhabitationordinaire($nombredepevLocauxdhabitationordinaire) {
        $this->nombredepevLocauxdhabitationordinaire = $nombredepevLocauxdhabitationordinaire;
    }

    public function setBaseimposeeLocauxdhabitationordinaire($baseimposeeLocauxdhabitationordinaire) {
        $this->baseimposeeLocauxdhabitationordinaire = $baseimposeeLocauxdhabitationordinaire;
    }

    public function setMontantnetrevenantalacollectiviteLocauxdhabitationordinaire($montantnetrevenantalacollectiviteLocauxdhabitationordinaire) {
        $this->montantnetrevenantalacollectiviteLocauxdhabitationordinaire = $montantnetrevenantalacollectiviteLocauxdhabitationordinaire;
    }

    public function setNombredecomptesdeproprietaireLocauxdhabitationacaracteresocial($nombredecomptesdeproprietaireLocauxdhabitationacaracteresocial) {
        $this->nombredecomptesdeproprietaireLocauxdhabitationacaracteresocial = $nombredecomptesdeproprietaireLocauxdhabitationacaracteresocial;
    }

    public function setNombredepevLocauxdhabitationacaracteresocial($nombredepevLocauxdhabitationacaracteresocial) {
        $this->nombredepevLocauxdhabitationacaracteresocial = $nombredepevLocauxdhabitationacaracteresocial;
    }

    public function setBaseimposeeLocauxdhabitationacaracteresocial($baseimposeeLocauxdhabitationacaracteresocial) {
        $this->baseimposeeLocauxdhabitationacaracteresocial = $baseimposeeLocauxdhabitationacaracteresocial;
    }

    public function setMontantnetrevenantalacollectiviteLocauxdhabitationacaracteresocial($montantnetrevenantalacollectiviteLocauxdhabitationacaracteresocial) {
        $this->montantnetrevenantalacollectiviteLocauxdhabitationacaracteresocial = $montantnetrevenantalacollectiviteLocauxdhabitationacaracteresocial;
    }

    public function setNombredecomptesdeproprietaireLocauxdhabitationsoumisalaloide48($nombredecomptesdeproprietaireLocauxdhabitationsoumisalaloide48) {
        $this->nombredecomptesdeproprietaireLocauxdhabitationsoumisalaloide48 = $nombredecomptesdeproprietaireLocauxdhabitationsoumisalaloide48;
    }

    public function setNombredepevLocauxdhabitationsoumisalaloide48($nombredepevLocauxdhabitationsoumisalaloide48) {
        $this->nombredepevLocauxdhabitationsoumisalaloide48 = $nombredepevLocauxdhabitationsoumisalaloide48;
    }

    public function setBaseimposeeLocauxdhabitationsoumisalaloide48($baseimposeeLocauxdhabitationsoumisalaloide48) {
        $this->baseimposeeLocauxdhabitationsoumisalaloide48 = $baseimposeeLocauxdhabitationsoumisalaloide48;
    }

    public function setMontantnetrevenantalacollectiviteLocauxdhabitationsoumisalaloide48($montantnetrevenantalacollectiviteLocauxdhabitationsoumisalaloide48) {
        $this->montantnetrevenantalacollectiviteLocauxdhabitationsoumisalaloide48 = $montantnetrevenantalacollectiviteLocauxdhabitationsoumisalaloide48;
    }

    public function setNombredecomptesdeproprietaireAutreslocauxpassiblesdelaTHSouA($nombredecomptesdeproprietaireAutreslocauxpassiblesdelaTHSouA) {
        $this->nombredecomptesdeproprietaireAutreslocauxpassiblesdelaTHSouA = $nombredecomptesdeproprietaireAutreslocauxpassiblesdelaTHSouA;
    }

    public function setNombredepevAutreslocauxpassiblesdelaTHSouA($nombredepevAutreslocauxpassiblesdelaTHSouA) {
        $this->nombredepevAutreslocauxpassiblesdelaTHSouA = $nombredepevAutreslocauxpassiblesdelaTHSouA;
    }

    public function setBaseimposeeAutreslocauxpassiblesdelaTHSouA($baseimposeeAutreslocauxpassiblesdelaTHSouA) {
        $this->baseimposeeAutreslocauxpassiblesdelaTHSouA = $baseimposeeAutreslocauxpassiblesdelaTHSouA;
    }

    public function setMontantnetrevenantalacollectiviteAutreslocauxpassiblesdelaTHSouA($montantnetrevenantalacollectiviteAutreslocauxpassiblesdelaTHSouA) {
        $this->montantnetrevenantalacollectiviteAutreslocauxpassiblesdelaTHSouA = $montantnetrevenantalacollectiviteAutreslocauxpassiblesdelaTHSouA;
    }

    public function setNombredecomptesdeproprietaireLocauxausageprofessioneloucommercial($nombredecomptesdeproprietaireLocauxausageprofessioneloucommercial) {
        $this->nombredecomptesdeproprietaireLocauxausageprofessioneloucommercial = $nombredecomptesdeproprietaireLocauxausageprofessioneloucommercial;
    }

    public function setNombredepevLocauxausageprofessioneloucommercial($nombredepevLocauxausageprofessioneloucommercial) {
        $this->nombredepevLocauxausageprofessioneloucommercial = $nombredepevLocauxausageprofessioneloucommercial;
    }

    public function setBaseimposeeLocauxausageprofessioneloucommercial($baseimposeeLocauxausageprofessioneloucommercial) {
        $this->baseimposeeLocauxausageprofessioneloucommercial = $baseimposeeLocauxausageprofessioneloucommercial;
    }

    public function setMontantnetrevenantalacollectiviteLocauxausageprofessioneloucommercial($montantnetrevenantalacollectiviteLocauxausageprofessioneloucommercial) {
        $this->montantnetrevenantalacollectiviteLocauxausageprofessioneloucommercial = $montantnetrevenantalacollectiviteLocauxausageprofessioneloucommercial;
    }

    public function setNombredecomptesdeproprietaireEtablissementsindustrielsetassimiles($nombredecomptesdeproprietaireEtablissementsindustrielsetassimiles) {
        $this->nombredecomptesdeproprietaireEtablissementsindustrielsetassimiles = $nombredecomptesdeproprietaireEtablissementsindustrielsetassimiles;
    }

    public function setNombredepevEtablissementsindustrielsetassimiles($nombredepevEtablissementsindustrielsetassimiles) {
        $this->nombredepevEtablissementsindustrielsetassimiles = $nombredepevEtablissementsindustrielsetassimiles;
    }

    public function setBaseimposeeEtablissementsindustrielsetassimiles($baseimposeeEtablissementsindustrielsetassimiles) {
        $this->baseimposeeEtablissementsindustrielsetassimiles = $baseimposeeEtablissementsindustrielsetassimiles;
    }

    public function setMontantnetrevenantalacollectiviteEtablissementsindustrielsetassimiles($montantnetrevenantalacollectiviteEtablissementsindustrielsetassimiles) {
        $this->montantnetrevenantalacollectiviteEtablissementsindustrielsetassimiles = $montantnetrevenantalacollectiviteEtablissementsindustrielsetassimiles;
    }

    public function setNombredecomptesdeproprietaireTotal($nombredecomptesdeproprietaireTotal) {
        $this->nombredecomptesdeproprietaireTotal = $nombredecomptesdeproprietaireTotal;
    }

    public function setNombredepevTotal($nombredepevTotal) {
        $this->nombredepevTotal = $nombredepevTotal;
    }

    public function setBaseimposeeTotal($baseimposeeTotal) {
        $this->baseimposeeTotal = $baseimposeeTotal;
    }

    public function setMontantnetrevenantalacollectiviteTotal($montantnetrevenantalacollectiviteTotal) {
        $this->montantnetrevenantalacollectiviteTotal = $montantnetrevenantalacollectiviteTotal;
    }

    public function setSimulationArticleTF($SimulationArticleTF) {
        $this->SimulationArticleTF = $SimulationArticleTF;
    }

    public function setArticleCommuneIFP($articleCommuneIFP) {
        $this->articleCommuneIFP = $articleCommuneIFP;
    }

    public function setArticleCommuneEnTete($articleCommuneEnTete) {
        $this->articleCommuneEnTete = $articleCommuneEnTete;
    }

    public function setArticleCommuneSRA2($articleCommuneSRA2) {
        $this->articleCommuneSRA2 = $articleCommuneSRA2;
    }

    public function setArticleCommuneSRA3($articleCommuneSRA3) {
        $this->articleCommuneSRA3 = $articleCommuneSRA3;
    }



}
