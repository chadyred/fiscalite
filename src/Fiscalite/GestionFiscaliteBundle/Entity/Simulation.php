<?php

namespace Fiscalite\GestionFiscaliteBundle\Entity;

class Simulation {

// TABLEAU 1 ////
    private $nombrelocauxtaxesensembledeslocauxetdependancesimposablesTHP;
    private $nombrelocauxtaxesensembledeslocauxetdependancesimposablesTHE;
    private $nombrelocauxtaxesensembledeslocauxetdependancesimposablesTHS;
    private $nombrelocauxtaxeslocauxexceptionnelsTHP;
    private $nombrelocauxtaxeslocauxexceptionnelsTHE;
    private $nombrelocauxtaxeslocauxexceptionnelsTHS;
    private $nombrelocauxtaxesdependancesbatiesrattacheesTHP;
    private $nombrelocauxtaxesdependancesbatiesrattacheesTHE;
    private $nombrelocauxtaxesdependancesbatiesrattacheesTHS;
    private $nombrelocauxtaxesdependancesbatiesnonrattacheesTHP;
    private $nombrelocauxtaxesdependancesbatiesnonrattacheesTHE;
    private $nombrelocauxtaxesdependancesbatiesnonrattacheesTHS;
    private $nombrelocauxtaxeslocauxhabitationproprementditsTHP;
    private $nombrelocauxtaxeslocauxhabitationproprementditsTHE;
    private $nombrelocauxtaxeslocauxhabitationproprementditsTHS;
    private $nombrelocauxtaxeshabitationimposesensusdupremiersousunmemearticleTHP;
    private $nombrelocauxtaxeshabitationimposesensusdupremiersousunmemearticleTHE;
    private $nombrelocauxtaxeshabitationimposesensusdupremiersousunmemearticleTHS;
    private $nombrelocauxtaxeslogementsvacantsimposesalaTHLVsurdeliberationdelacommuneTHP;
    private $nombrelocauxtaxeslogementsvacantsimposesalaTHLVsurdeliberationdelacommuneTHE;
    private $nombrelocauxtaxeslogementsvacantsimposesalaTHLVsurdeliberationdelacommuneTHS;
    private $nombrelocauxtaxeslogementsvacantsimposesalaTHLVsurdeliberationdelECPITHP;
    private $nombrelocauxtaxeslogementsvacantsimposesalaTHLVsurdeliberationdelECPITHE;
    private $nombrelocauxtaxeslogementsvacantsimposesalaTHLVsurdeliberationdelECPITHS;
    private $nombresarticlesdurolecorrespondantsensembledeslocauxetdependancesimposables;
    private $nombresarticlesdurolecorrespondantslocauxexceptionnels;
    private $nombresarticlesdurolecorrespondantsautreslocauxetdependancesbaties;
    private $nombresarticlesdurolecorrespondantsdependancesbatiesrattachees;
    private $nombresarticlesdurolecorrespondantsdependancesbatiesnonrattachees;
    private $nombresarticlesdurolecorrespondantslocauxhabitationproprementdits;
    private $nombresarticlesdurolecorrespondantsimposesensusdupremiersousunmemearticle;
    private $nombresarticlesdurolecorrespondantslogementsvacantsimposesalaTHLVsurdeliberationdelacommune;
    private $nombresarticlesdurolecorrespondantslogementsvacantsimposesalaTHLVsurdeliberationdelECPI;
    private $valeurlocativebruterevaloriseetotaleensembledeslocauxetdependancesimposables;
    private $valeurlocativebruterevaloriseetotalelocauxexceptionnels;
    private $valeurlocativebruterevaloriseetotaleautreslocauxetdependancesbaties;
    private $valeurlocativebruterevaloriseetotaledependancesbatiesrattachees;
    private $valeurlocativebruterevaloriseetotaledependancesbatiesnonrattachees;
    private $valeurlocativebruterevaloriseetotalelocauxhabitationproprementdits;
    private $valeurlocativebruterevaloriseetotaleimposesensusdupremiersousunmemearticle;
    private $valeurlocativebruterevaloriseetotalelogementsvacantsimposesalaTHLVsurdeliberationdelacommune;
    private $valeurlocativebruterevaloriseetotalelogementsvacantsimposesalaTHLVsurdeliberationdelECPI;
    private $valeurlocativebruterevaloriseedontbasesexonereesensembledeslocauxetdependancesimposables;
    private $valeurlocativebruterevaloriseedontbasesexonereeslocauxexceptionnels;
    private $valeurlocativebruterevaloriseedontbasesexonereesautreslocauxetdependancesbaties;
    private $valeurlocativebruterevaloriseedontbasesexonereesdependancesbatiesrattachees;
    private $valeurlocativebruterevaloriseedontbasesexonereesdependancesbatiesnonrattachees;
    private $valeurlocativebruterevaloriseedontbasesexonereeslocauxhabitationproprementdits;
    private $valeurlocativebruterevaloriseedontbasesexonereesimposesensusdupremiersousunmemearticle;
    private $valeurlocativebruterevaloriseedontbasesexonereeslogementsvacantsimposesalaTHLVsurdeliberationdelacommune;
    private $valeurlocativebruterevaloriseedontbasesexonereeslogementsvacantsimposesalaTHLVsurdeliberationdelECPI;
// TABLEAU 2 ////   
    private $VlmCneRetenueAbat;
    private $VlmICORetenueAbat;
    private $simulation;
    private $articleCommuneTH;
    private $baseNetteCommune;
    private $baseNetteICO;
    private $baseNetteTSE;
    private $baseNetteSansAjustementCommune;
    private $baseNetteSansAjustementICO;
    private $baseNetteExoTSECommune;
    private $totPrelevt15THS;
    private $tauxImpositionICO;
    private $tauxImpositionTSE;
// TABLEAU 3 ////
    private $quotiteAbattementGeneralBaseCommuneSansAjustement;
    private $quotiteAbattementGeneralBaseCommuneAvecAjustement;
    private $quotiteAbattementPAC1CommuneSansAjustement;
    private $quotiteAbattementPAC1CommuneAvecAjustement;
    private $quotiteAbattementPAC2CommuneSansAjustement;
    private $quotiteAbattementPAC2CommuneAvecAjustement;
    private $quotiteAbattementPAC3CommuneSansAjustement;
    private $quotiteAbattementPAC3CommuneAvecAjustement;
    private $quotiteAbattementPAC4SuppCommuneSansAjustement;
    private $quotiteAbattementPAC4SuppCommuneAvecAjustement;
    private $quotiteAbattementSpecialBaseCommuneSansAjustement;
    private $quotiteAbattementSpecialBaseCommuneAvecAjustement;
    private $quotiteAbattementSpecialHandicapeCommuneSansAjustement;
    private $quotiteAbattementSpecialHandicapeCommuneAvecAjustement;
    private $quotiteAbattementGeneralBaseInterCoApresAjustement;
    private $quotiteAbattementPAC12InterCoApresAjustement;
    private $quotiteAbattementPAC3InterCoApresAjustement;
    private $quotiteAbattementSpecialBaseInterCoApresAjustement;
    private $quotiteAbattementSpecialHandicapeInterCoApresAjustement;
// TABLEAU 4 ////
    private $afferentsresidencessecondaires;
    private $afferentsdependancesprincipales;
    private $nbarticlesdurole;
    private $nbpers0persacharge;
    private $nbpers1persacharge;
    private $nbpers2persacharge;
    private $nbpers3persacharge;
    private $nbpers4persacharge;
    private $nbpers5persacharge;
    private $nbperstotcumule;
    private $afferentsdependancesprincipalesexoneres;
    private $nbpers0persachargeexoneres;
    private $nbpers1persachargeexoneres;
    private $nbpers2persachargeexoneres;
    private $nbpers3persachargeexoneres;
    private $nbpers4persachargeexoneres;
    private $nbpers5persachargeexoneres;
    private $nbperstotcumuleexoneres;
// TABLEAU 5 ////

    private $abattementgeneralbasecommunale;
    private $abattementpersonneschargecommunal12;
    private $abattementpersonneschargecommunal3;
    private $abattementpersonneschargecommunal;
    private $abattementspecialbasecommunal;
    private $abattementspecialhandicapebasecommunal;
    private $nbabattementgeneralbasecommunale;
    private $nbabattementpersonneschargecommunal12;
    private $nbabattementpersonneschargecommunal3;
    private $nbabattementpersonneschargecommunal;
    private $nbabattementspecialbasecommunal;
    private $nbabattementspecialhandicapebasecommunal;
    private $abattementgeneralbaseintercommunalite;
    private $abattementpersonneschargeintercommunalite12;
    private $abattementpersonneschargeintercommunalite3;
    private $abattementpersonneschargeintercommunalite;
    private $abattementspecialbaseintercommunalite;
    private $abattementspecialhandicapebaseintercommunalite;
    private $nbabattementgeneralbaseintercommunalite;
    private $nbabattementpersonneschargeintercommunalite12;
    private $nbabattementpersonneschargeintercommunalite3;
    private $nbabattementpersonneschargeintercommunalite;
    private $nbabattementspecialbaseintercommunalite;
    private $nbabattementspecialhandicapebaseintercommunalite;
    private $abattementgeneralbasetse;
    private $abattementpersonneschargetse12;
    private $abattementpersonneschargetse3;
    private $abattementpersonneschargetse;
    private $abattementspecialbasetse;
    private $abattementspecialhandicapebasetse;
    private $nbabattementgeneralbasetse;
    private $nbabattementpersonneschargetse12;
    private $nbabattementpersonneschargetse3;
    private $nbabattementpersonneschargetse;
    private $nbabattementspecialbasetse;
    private $nbabattementspecialhandicapebasetse;
    private $abattementegalenull;
// TALBEAU 6 ////
    private $nombreArticlesDuRole011;
    private $nombreArticlesDuRole1299;
    private $nombreArticlesDuRole100199;
    private $nombreArticlesDuRole200299;
    private $nombreArticlesDuRole300399;
    private $nombreArticlesDuRole400499;
    private $nombreArticlesDuRole500599;
    private $nombreArticlesDuRole600699;
    private $nombreArticlesDuRole700799;
    private $nombreArticlesDuRole800899;
    private $nombreArticlesDuRole900999;
    private $nombreArticlesDuRole1000plus;
    private $nombreArticlesDuRoleTotal;
    private $repartitionCotisationsMisesEnRecouvrement011;
    private $repartitionCotisationsMisesEnRecouvrement1299;
    private $repartitionCotisationsMisesEnRecouvrement100199;
    private $repartitionCotisationsMisesEnRecouvrement200299;
    private $repartitionCotisationsMisesEnRecouvrement300399;
    private $repartitionCotisationsMisesEnRecouvrement400499;
    private $repartitionCotisationsMisesEnRecouvrement500599;
    private $repartitionCotisationsMisesEnRecouvrement600699;
    private $repartitionCotisationsMisesEnRecouvrement700799;
    private $repartitionCotisationsMisesEnRecouvrement800899;
    private $repartitionCotisationsMisesEnRecouvrement900999;
    private $repartitionCotisationsMisesEnRecouvrement1000plus;
    private $repartitionCotisationsMisesEnRecouvrementTotal;
    private $repartitionCotisationsBrutesCommunesSyndicatsEtTSE011;
    private $repartitionCotisationsBrutesCommunesSyndicatsEtTSE1299;
    private $repartitionCotisationsBrutesCommunesSyndicatsEtTSE100199;
    private $repartitionCotisationsBrutesCommunesSyndicatsEtTSE200299;
    private $repartitionCotisationsBrutesCommunesSyndicatsEtTSE300399;
    private $repartitionCotisationsBrutesCommunesSyndicatsEtTSE400499;
    private $repartitionCotisationsBrutesCommunesSyndicatsEtTSE500599;
    private $repartitionCotisationsBrutesCommunesSyndicatsEtTSE600699;
    private $repartitionCotisationsBrutesCommunesSyndicatsEtTSE700799;
    private $repartitionCotisationsBrutesCommunesSyndicatsEtTSE800899;
    private $repartitionCotisationsBrutesCommunesSyndicatsEtTSE900999;
    private $repartitionCotisationsBrutesCommunesSyndicatsEtTSE1000plus;
    private $repartitionCotisationsBrutesCommunesSyndicatsEtTSETotal;
    private $repartitionCotisationsBrutesICO011;
    private $repartitionCotisationsBrutesICO1299;
    private $repartitionCotisationsBrutesICO100199;
    private $repartitionCotisationsBrutesICO200299;
    private $repartitionCotisationsBrutesICO300399;
    private $repartitionCotisationsBrutesICO400499;
    private $repartitionCotisationsBrutesICO500599;
    private $repartitionCotisationsBrutesICO600699;
    private $repartitionCotisationsBrutesICO700799;
    private $repartitionCotisationsBrutesICO800899;
    private $repartitionCotisationsBrutesICO900999;
    private $repartitionCotisationsBrutesICO1000plus;
    private $repartitionCotisationsBrutesICOTotal;
    private $repartitionCotisationsBrutesFraisDePrelevement011;
    private $repartitionCotisationsBrutesFraisDePrelevement1299;
    private $repartitionCotisationsBrutesFraisDePrelevement100199;
    private $repartitionCotisationsBrutesFraisDePrelevement200299;
    private $repartitionCotisationsBrutesFraisDePrelevement300399;
    private $repartitionCotisationsBrutesFraisDePrelevement400499;
    private $repartitionCotisationsBrutesFraisDePrelevement500599;
    private $repartitionCotisationsBrutesFraisDePrelevement600699;
    private $repartitionCotisationsBrutesFraisDePrelevement700799;
    private $repartitionCotisationsBrutesFraisDePrelevement800899;
    private $repartitionCotisationsBrutesFraisDePrelevement900999;
    private $repartitionCotisationsBrutesFraisDePrelevement1000plus;
    private $repartitionCotisationsBrutesFraisDePrelevementTotal;
    private $tauximpositioncommune;
    private $cotisationcommunal;
    private $cotisationcommunalannee;
    private $basenetteimposition;
    private $basenetteimpositioncommunaleannee;
    private $articleTHabattementgeneralbasecommunale;
    private $articleTHabattementspecialbasecommunal;
    private $articleTHabattementspecialhandicapebasecommunal;
    private $articleTHabattementpersonneschargecommunal;
    private $nbTHLV;
    private $nbcontribuablesabattementspecialbase;
    private $nbcontribuablesabattementspecialhandicapebasecommunal;
    private $SimulationArticleTH;
    private $VlmCne;
    private $VlmICO;
    private $VlmTSE;
    private $abattementsTH;
    private $baseTH;
    private $cotisationTH;
    // TABLEAU 7 ////
    private $nombreArticlesTHPExonerationDOM;
    private $nombreArticlesTHPCommune;
    private $nombreArticlesTHPTSElocalHLMSEM;
    private $nombreArticlesTHPCotisationsbrutesnulles;
    private $nombreArticlesTHPDegrevementstotaux;
    private $nombreArticlesTHPPlafonnements;
    private $nombreArticlesTHPNonValeurs;
    private $nombreArticlesTHPTotaux;
    private $nombreArticlesTHETHSExonerationDOM;
    private $nombreArticlesTHETHSCommune;
    private $nombreArticlesTHETHSTSElocalHLMSEM;
    private $nombreArticlesTHETHSCotisationsbrutesnulles;
    private $nombreArticlesTHETHSDegrevementstotaux;
    private $nombreArticlesTHETHSPlafonnements;
    private $nombreArticlesTHETHSNonValeurs;
    private $nombreArticlesTHETHSTotaux;
    private $degrevementsPlafonnementsExonerationDOM;
    private $degrevementsPlafonnementsCommune;
    private $degrevementsPlafonnementsTSElocalHLMSEM;
    private $degrevementsPlafonnementsCotisationsbrutesnulles;
    private $degrevementsPlafonnementsDegrevementstotaux;
    private $degrevementsPlafonnementsPlafonnements;
    private $degrevementsPlafonnementsNonValeurs;
    private $degrevementsPlafonnementsTotaux;
    private $nonValeursExonerationDOM;
    private $nonValeursCommune;
    private $nonValeursTSElocalHLMSEM;
    private $nonValeursCotisationsbrutesnulles;
    private $nonValeursDegrevementstotaux;
    private $nonValeursPlafonnements;
    private $nonValeursNonValeurs;
    private $nonValeursTotaux;
    private $basesNettesReductionsExonerationDOM;
    private $basesNettesReductionsCommune;
    private $basesNettesReductionsICO;
    private $basesNettesReductionsTSElocalHLMSEM;
    private $basesNettesReductionsCotisationsbrutesnulles;
    private $basesNettesReductionsDegrevementstotaux;
    private $basesNettesReductionsPlafonnements;
    private $basesNettesReductionsNonValeurs;
    private $basesNettesReductionsTotaux;
    // TABLEAU 8 ////
    private $articlesImposes;
    private $articlesExoneres;
    private $vlnCommune;
    private $vlnICo;
    private $delivranceAvisimposition;
    private $lcxSusceptibleExonereTSE;
    // TABLEAU 9 ////

    private $tauxImpositionSyndicatsDeCommunes;
    private $tauxImpositionTSEGP;
    private $tauxImpositionPrelt1;
    private $tauxImpositionPrelt2;
    private $tauxImpositionPrelt3;
    private $tauxImpositionPreltSupplementaireTHS;
    private $tauxImpositionAnneePrecedenteCommune;
    private $tauxImpositionAnneePrecedenteICO;
    private $tauxImpositionAnneePrecedenteSyndicatsDeCommunes;
    private $nombreArticlesTHFraisTHPTHE;
    private $nombreArticlesTHFraisTHS;
    private $nombreArticlesTHPrelt1;
    private $nombreArticlesTHPreltSupplementaireTHS;
    private $nombreArticlesTHTotal;
    private $montantReelTHCommune;
    private $montantReelTHICO;
    private $montantReelTHTSE;
    private $montantReelTHTSEGP;
    private $montantReelTHFraisTHPTHE;
    private $montantReelTHFraisTHS;
    private $montantReelTHPrelt1;
    private $montantReelTHPrelt2;
    private $montantReelTHPrelt3;
    private $montantReelTHPreltSupplementaireTHS;
    private $montantReelTHTotal;
    private $nombreArticlesTHLVFrais8pourcent;
    private $nombreArticlesTHLVTotal;
    private $montantReelTHLVCommune;
    private $montantReelTHLVFrais8pourcent;
    private $montantReelTHLVTotal;
    private $montantNetTHTHLVCommune;
    private $montantNetTHTHLVICO;
    private $montantNetTHTHLVTSE;

    public function getMontantReelTHFraisTHPTHE() {
        return $this->montantReelTHFraisTHPTHE;
    }

    public function setMontantReelTHFraisTHPTHE($montantReelTHFraisTHPTHE) {
        $this->montantReelTHFraisTHPTHE = $montantReelTHFraisTHPTHE;
    }

        public function getNombreArticlesTHETHSExonerationDOM() {
        return $this->nombreArticlesTHETHSExonerationDOM;
    }

    public function setNombreArticlesTHETHSExonerationDOM($nombreArticlesTHETHSExonerationDOM) {
        $this->nombreArticlesTHETHSExonerationDOM = $nombreArticlesTHETHSExonerationDOM;
    }

    public function getNombreArticlesTHETHSCommune() {
        return $this->nombreArticlesTHETHSCommune;
    }

    public function setNombreArticlesTHETHSCommune($nombreArticlesTHETHSCommune) {
        $this->nombreArticlesTHETHSCommune = $nombreArticlesTHETHSCommune;
    }

    public function getNombreArticlesTHETHSTSElocalHLMSEM() {
        return $this->nombreArticlesTHETHSTSElocalHLMSEM;
    }

    public function setNombreArticlesTHETHSTSElocalHLMSEM($nombreArticlesTHETHSTSElocalHLMSEM) {
        $this->nombreArticlesTHETHSTSElocalHLMSEM = $nombreArticlesTHETHSTSElocalHLMSEM;
    }

    public function getNombreArticlesTHETHSCotisationsbrutesnulles() {
        return $this->nombreArticlesTHETHSCotisationsbrutesnulles;
    }

    public function setNombreArticlesTHETHSCotisationsbrutesnulles($nombreArticlesTHETHSCotisationsbrutesnulles) {
        $this->nombreArticlesTHETHSCotisationsbrutesnulles = $nombreArticlesTHETHSCotisationsbrutesnulles;
    }

    public function getNombreArticlesTHETHSDegrevementstotaux() {
        return $this->nombreArticlesTHETHSDegrevementstotaux;
    }

    public function setNombreArticlesTHETHSDegrevementstotaux($nombreArticlesTHETHSDegrevementstotaux) {
        $this->nombreArticlesTHETHSDegrevementstotaux = $nombreArticlesTHETHSDegrevementstotaux;
    }

    public function getNombreArticlesTHETHSPlafonnements() {
        return $this->nombreArticlesTHETHSPlafonnements;
    }

    public function setNombreArticlesTHETHSPlafonnements($nombreArticlesTHETHSPlafonnements) {
        $this->nombreArticlesTHETHSPlafonnements = $nombreArticlesTHETHSPlafonnements;
    }

    public function getNombreArticlesTHETHSNonValeurs() {
        return $this->nombreArticlesTHETHSNonValeurs;
    }

    public function setNombreArticlesTHETHSNonValeurs($nombreArticlesTHETHSNonValeurs) {
        $this->nombreArticlesTHETHSNonValeurs = $nombreArticlesTHETHSNonValeurs;
    }

    public function getNombreArticlesTHETHSTotaux() {
        return $this->nombreArticlesTHETHSTotaux;
    }

    public function setNombreArticlesTHETHSTotaux($nombreArticlesTHETHSTotaux) {
        $this->nombreArticlesTHETHSTotaux = $nombreArticlesTHETHSTotaux;
    }

    public function getNombrelocauxtaxesensembledeslocauxetdependancesimposablesTHP() {
        return $this->nombrelocauxtaxesensembledeslocauxetdependancesimposablesTHP;
    }

    public function setNombrelocauxtaxesensembledeslocauxetdependancesimposablesTHP($nombrelocauxtaxesensembledeslocauxetdependancesimposablesTHP) {
        $this->nombrelocauxtaxesensembledeslocauxetdependancesimposablesTHP = $nombrelocauxtaxesensembledeslocauxetdependancesimposablesTHP;
    }

    public function getNombrelocauxtaxesensembledeslocauxetdependancesimposablesTHE() {
        return $this->nombrelocauxtaxesensembledeslocauxetdependancesimposablesTHE;
    }

    public function setNombrelocauxtaxesensembledeslocauxetdependancesimposablesTHE($nombrelocauxtaxesensembledeslocauxetdependancesimposablesTHE) {
        $this->nombrelocauxtaxesensembledeslocauxetdependancesimposablesTHE = $nombrelocauxtaxesensembledeslocauxetdependancesimposablesTHE;
    }

    public function getNombrelocauxtaxesensembledeslocauxetdependancesimposablesTHS() {
        return $this->nombrelocauxtaxesensembledeslocauxetdependancesimposablesTHS;
    }

    public function setNombrelocauxtaxesensembledeslocauxetdependancesimposablesTHS($nombrelocauxtaxesensembledeslocauxetdependancesimposablesTHS) {
        $this->nombrelocauxtaxesensembledeslocauxetdependancesimposablesTHS = $nombrelocauxtaxesensembledeslocauxetdependancesimposablesTHS;
    }

    public function getNombrelocauxtaxeslocauxexceptionnelsTHP() {
        return $this->nombrelocauxtaxeslocauxexceptionnelsTHP;
    }

    public function setNombrelocauxtaxeslocauxexceptionnelsTHP($nombrelocauxtaxeslocauxexceptionnelsTHP) {
        $this->nombrelocauxtaxeslocauxexceptionnelsTHP = $nombrelocauxtaxeslocauxexceptionnelsTHP;
    }

    public function getNombrelocauxtaxeslocauxexceptionnelsTHE() {
        return $this->nombrelocauxtaxeslocauxexceptionnelsTHE;
    }

    public function setNombrelocauxtaxeslocauxexceptionnelsTHE($nombrelocauxtaxeslocauxexceptionnelsTHE) {
        $this->nombrelocauxtaxeslocauxexceptionnelsTHE = $nombrelocauxtaxeslocauxexceptionnelsTHE;
    }

    public function getNombrelocauxtaxeslocauxexceptionnelsTHS() {
        return $this->nombrelocauxtaxeslocauxexceptionnelsTHS;
    }

    public function setNombrelocauxtaxeslocauxexceptionnelsTHS($nombrelocauxtaxeslocauxexceptionnelsTHS) {
        $this->nombrelocauxtaxeslocauxexceptionnelsTHS = $nombrelocauxtaxeslocauxexceptionnelsTHS;
    }

    public function getNombrelocauxtaxesdependancesbatiesrattacheesTHP() {
        return $this->nombrelocauxtaxesdependancesbatiesrattacheesTHP;
    }

    public function setNombrelocauxtaxesdependancesbatiesrattacheesTHP($nombrelocauxtaxesdependancesbatiesrattacheesTHP) {
        $this->nombrelocauxtaxesdependancesbatiesrattacheesTHP = $nombrelocauxtaxesdependancesbatiesrattacheesTHP;
    }

    public function getNombrelocauxtaxesdependancesbatiesrattacheesTHE() {
        return $this->nombrelocauxtaxesdependancesbatiesrattacheesTHE;
    }

    public function setNombrelocauxtaxesdependancesbatiesrattacheesTHE($nombrelocauxtaxesdependancesbatiesrattacheesTHE) {
        $this->nombrelocauxtaxesdependancesbatiesrattacheesTHE = $nombrelocauxtaxesdependancesbatiesrattacheesTHE;
    }

    public function getNombrelocauxtaxesdependancesbatiesrattacheesTHS() {
        return $this->nombrelocauxtaxesdependancesbatiesrattacheesTHS;
    }

    public function setNombrelocauxtaxesdependancesbatiesrattacheesTHS($nombrelocauxtaxesdependancesbatiesrattacheesTHS) {
        $this->nombrelocauxtaxesdependancesbatiesrattacheesTHS = $nombrelocauxtaxesdependancesbatiesrattacheesTHS;
    }

    public function getNombrelocauxtaxesdependancesbatiesnonrattacheesTHP() {
        return $this->nombrelocauxtaxesdependancesbatiesnonrattacheesTHP;
    }

    public function setNombrelocauxtaxesdependancesbatiesnonrattacheesTHP($nombrelocauxtaxesdependancesbatiesnonrattacheesTHP) {
        $this->nombrelocauxtaxesdependancesbatiesnonrattacheesTHP = $nombrelocauxtaxesdependancesbatiesnonrattacheesTHP;
    }

    public function getNombrelocauxtaxesdependancesbatiesnonrattacheesTHE() {
        return $this->nombrelocauxtaxesdependancesbatiesnonrattacheesTHE;
    }

    public function setNombrelocauxtaxesdependancesbatiesnonrattacheesTHE($nombrelocauxtaxesdependancesbatiesnonrattacheesTHE) {
        $this->nombrelocauxtaxesdependancesbatiesnonrattacheesTHE = $nombrelocauxtaxesdependancesbatiesnonrattacheesTHE;
    }

    public function getNombrelocauxtaxesdependancesbatiesnonrattacheesTHS() {
        return $this->nombrelocauxtaxesdependancesbatiesnonrattacheesTHS;
    }

    public function setNombrelocauxtaxesdependancesbatiesnonrattacheesTHS($nombrelocauxtaxesdependancesbatiesnonrattacheesTHS) {
        $this->nombrelocauxtaxesdependancesbatiesnonrattacheesTHS = $nombrelocauxtaxesdependancesbatiesnonrattacheesTHS;
    }

    public function getNombrelocauxtaxeslocauxhabitationproprementditsTHP() {
        return $this->nombrelocauxtaxeslocauxhabitationproprementditsTHP;
    }

    public function setNombrelocauxtaxeslocauxhabitationproprementditsTHP($nombrelocauxtaxeslocauxhabitationproprementditsTHP) {
        $this->nombrelocauxtaxeslocauxhabitationproprementditsTHP = $nombrelocauxtaxeslocauxhabitationproprementditsTHP;
    }

    public function getNombrelocauxtaxeslocauxhabitationproprementditsTHE() {
        return $this->nombrelocauxtaxeslocauxhabitationproprementditsTHE;
    }

    public function setNombrelocauxtaxeslocauxhabitationproprementditsTHE($nombrelocauxtaxeslocauxhabitationproprementditsTHE) {
        $this->nombrelocauxtaxeslocauxhabitationproprementditsTHE = $nombrelocauxtaxeslocauxhabitationproprementditsTHE;
    }

    public function getNombrelocauxtaxeslocauxhabitationproprementditsTHS() {
        return $this->nombrelocauxtaxeslocauxhabitationproprementditsTHS;
    }

    public function setNombrelocauxtaxeslocauxhabitationproprementditsTHS($nombrelocauxtaxeslocauxhabitationproprementditsTHS) {
        $this->nombrelocauxtaxeslocauxhabitationproprementditsTHS = $nombrelocauxtaxeslocauxhabitationproprementditsTHS;
    }

    public function getNombrelocauxtaxeshabitationimposesensusdupremiersousunmemearticleTHP() {
        return $this->nombrelocauxtaxeshabitationimposesensusdupremiersousunmemearticleTHP;
    }

    public function setNombrelocauxtaxeshabitationimposesensusdupremiersousunmemearticleTHP($nombrelocauxtaxeshabitationimposesensusdupremiersousunmemearticleTHP) {
        $this->nombrelocauxtaxeshabitationimposesensusdupremiersousunmemearticleTHP = $nombrelocauxtaxeshabitationimposesensusdupremiersousunmemearticleTHP;
    }

    public function getNombrelocauxtaxeshabitationimposesensusdupremiersousunmemearticleTHE() {
        return $this->nombrelocauxtaxeshabitationimposesensusdupremiersousunmemearticleTHE;
    }

    public function setNombrelocauxtaxeshabitationimposesensusdupremiersousunmemearticleTHE($nombrelocauxtaxeshabitationimposesensusdupremiersousunmemearticleTHE) {
        $this->nombrelocauxtaxeshabitationimposesensusdupremiersousunmemearticleTHE = $nombrelocauxtaxeshabitationimposesensusdupremiersousunmemearticleTHE;
    }

    public function getNombrelocauxtaxeshabitationimposesensusdupremiersousunmemearticleTHS() {
        return $this->nombrelocauxtaxeshabitationimposesensusdupremiersousunmemearticleTHS;
    }

    public function setNombrelocauxtaxeshabitationimposesensusdupremiersousunmemearticleTHS($nombrelocauxtaxeshabitationimposesensusdupremiersousunmemearticleTHS) {
        $this->nombrelocauxtaxeshabitationimposesensusdupremiersousunmemearticleTHS = $nombrelocauxtaxeshabitationimposesensusdupremiersousunmemearticleTHS;
    }

    public function getNombrelocauxtaxeslogementsvacantsimposesalaTHLVsurdeliberationdelacommuneTHP() {
        return $this->nombrelocauxtaxeslogementsvacantsimposesalaTHLVsurdeliberationdelacommuneTHP;
    }

    public function setNombrelocauxtaxeslogementsvacantsimposesalaTHLVsurdeliberationdelacommuneTHP($nombrelocauxtaxeslogementsvacantsimposesalaTHLVsurdeliberationdelacommuneTHP) {
        $this->nombrelocauxtaxeslogementsvacantsimposesalaTHLVsurdeliberationdelacommuneTHP = $nombrelocauxtaxeslogementsvacantsimposesalaTHLVsurdeliberationdelacommuneTHP;
    }

    public function getNombrelocauxtaxeslogementsvacantsimposesalaTHLVsurdeliberationdelacommuneTHE() {
        return $this->nombrelocauxtaxeslogementsvacantsimposesalaTHLVsurdeliberationdelacommuneTHE;
    }

    public function setNombrelocauxtaxeslogementsvacantsimposesalaTHLVsurdeliberationdelacommuneTHE($nombrelocauxtaxeslogementsvacantsimposesalaTHLVsurdeliberationdelacommuneTHE) {
        $this->nombrelocauxtaxeslogementsvacantsimposesalaTHLVsurdeliberationdelacommuneTHE = $nombrelocauxtaxeslogementsvacantsimposesalaTHLVsurdeliberationdelacommuneTHE;
    }

    public function getNombrelocauxtaxeslogementsvacantsimposesalaTHLVsurdeliberationdelacommuneTHS() {
        return $this->nombrelocauxtaxeslogementsvacantsimposesalaTHLVsurdeliberationdelacommuneTHS;
    }

    public function setNombrelocauxtaxeslogementsvacantsimposesalaTHLVsurdeliberationdelacommuneTHS($nombrelocauxtaxeslogementsvacantsimposesalaTHLVsurdeliberationdelacommuneTHS) {
        $this->nombrelocauxtaxeslogementsvacantsimposesalaTHLVsurdeliberationdelacommuneTHS = $nombrelocauxtaxeslogementsvacantsimposesalaTHLVsurdeliberationdelacommuneTHS;
    }

    public function getNombrelocauxtaxeslogementsvacantsimposesalaTHLVsurdeliberationdelECPITHP() {
        return $this->nombrelocauxtaxeslogementsvacantsimposesalaTHLVsurdeliberationdelECPITHP;
    }

    public function setNombrelocauxtaxeslogementsvacantsimposesalaTHLVsurdeliberationdelECPITHP($nombrelocauxtaxeslogementsvacantsimposesalaTHLVsurdeliberationdelECPITHP) {
        $this->nombrelocauxtaxeslogementsvacantsimposesalaTHLVsurdeliberationdelECPITHP = $nombrelocauxtaxeslogementsvacantsimposesalaTHLVsurdeliberationdelECPITHP;
    }

    public function getNombrelocauxtaxeslogementsvacantsimposesalaTHLVsurdeliberationdelECPITHE() {
        return $this->nombrelocauxtaxeslogementsvacantsimposesalaTHLVsurdeliberationdelECPITHE;
    }

    public function setNombrelocauxtaxeslogementsvacantsimposesalaTHLVsurdeliberationdelECPITHE($nombrelocauxtaxeslogementsvacantsimposesalaTHLVsurdeliberationdelECPITHE) {
        $this->nombrelocauxtaxeslogementsvacantsimposesalaTHLVsurdeliberationdelECPITHE = $nombrelocauxtaxeslogementsvacantsimposesalaTHLVsurdeliberationdelECPITHE;
    }

    public function getNombrelocauxtaxeslogementsvacantsimposesalaTHLVsurdeliberationdelECPITHS() {
        return $this->nombrelocauxtaxeslogementsvacantsimposesalaTHLVsurdeliberationdelECPITHS;
    }

    public function setNombrelocauxtaxeslogementsvacantsimposesalaTHLVsurdeliberationdelECPITHS($nombrelocauxtaxeslogementsvacantsimposesalaTHLVsurdeliberationdelECPITHS) {
        $this->nombrelocauxtaxeslogementsvacantsimposesalaTHLVsurdeliberationdelECPITHS = $nombrelocauxtaxeslogementsvacantsimposesalaTHLVsurdeliberationdelECPITHS;
    }

    public function getNombresarticlesdurolecorrespondantsensembledeslocauxetdependancesimposables() {
        return $this->nombresarticlesdurolecorrespondantsensembledeslocauxetdependancesimposables;
    }

    public function setNombresarticlesdurolecorrespondantsensembledeslocauxetdependancesimposables($nombresarticlesdurolecorrespondantsensembledeslocauxetdependancesimposables) {
        $this->nombresarticlesdurolecorrespondantsensembledeslocauxetdependancesimposables = $nombresarticlesdurolecorrespondantsensembledeslocauxetdependancesimposables;
    }

    public function getNombresarticlesdurolecorrespondantslocauxexceptionnels() {
        return $this->nombresarticlesdurolecorrespondantslocauxexceptionnels;
    }

    public function setNombresarticlesdurolecorrespondantslocauxexceptionnels($nombresarticlesdurolecorrespondantslocauxexceptionnels) {
        $this->nombresarticlesdurolecorrespondantslocauxexceptionnels = $nombresarticlesdurolecorrespondantslocauxexceptionnels;
    }

    public function getNombresarticlesdurolecorrespondantsautreslocauxetdependancesbaties() {
        return $this->nombresarticlesdurolecorrespondantsautreslocauxetdependancesbaties;
    }

    public function setNombresarticlesdurolecorrespondantsautreslocauxetdependancesbaties($nombresarticlesdurolecorrespondantsautreslocauxetdependancesbaties) {
        $this->nombresarticlesdurolecorrespondantsautreslocauxetdependancesbaties = $nombresarticlesdurolecorrespondantsautreslocauxetdependancesbaties;
    }

    public function getNombresarticlesdurolecorrespondantsdependancesbatiesrattachees() {
        return $this->nombresarticlesdurolecorrespondantsdependancesbatiesrattachees;
    }

    public function setNombresarticlesdurolecorrespondantsdependancesbatiesrattachees($nombresarticlesdurolecorrespondantsdependancesbatiesrattachees) {
        $this->nombresarticlesdurolecorrespondantsdependancesbatiesrattachees = $nombresarticlesdurolecorrespondantsdependancesbatiesrattachees;
    }

    public function getNombresarticlesdurolecorrespondantsdependancesbatiesnonrattachees() {
        return $this->nombresarticlesdurolecorrespondantsdependancesbatiesnonrattachees;
    }

    public function setNombresarticlesdurolecorrespondantsdependancesbatiesnonrattachees($nombresarticlesdurolecorrespondantsdependancesbatiesnonrattachees) {
        $this->nombresarticlesdurolecorrespondantsdependancesbatiesnonrattachees = $nombresarticlesdurolecorrespondantsdependancesbatiesnonrattachees;
    }

    public function getNombresarticlesdurolecorrespondantslocauxhabitationproprementdits() {
        return $this->nombresarticlesdurolecorrespondantslocauxhabitationproprementdits;
    }

    public function setNombresarticlesdurolecorrespondantslocauxhabitationproprementdits($nombresarticlesdurolecorrespondantslocauxhabitationproprementdits) {
        $this->nombresarticlesdurolecorrespondantslocauxhabitationproprementdits = $nombresarticlesdurolecorrespondantslocauxhabitationproprementdits;
    }

    public function getNombresarticlesdurolecorrespondantsimposesensusdupremiersousunmemearticle() {
        return $this->nombresarticlesdurolecorrespondantsimposesensusdupremiersousunmemearticle;
    }

    public function setNombresarticlesdurolecorrespondantsimposesensusdupremiersousunmemearticle($nombresarticlesdurolecorrespondantsimposesensusdupremiersousunmemearticle) {
        $this->nombresarticlesdurolecorrespondantsimposesensusdupremiersousunmemearticle = $nombresarticlesdurolecorrespondantsimposesensusdupremiersousunmemearticle;
    }

    public function getNombresarticlesdurolecorrespondantslogementsvacantsimposesalaTHLVsurdeliberationdelacommune() {
        return $this->nombresarticlesdurolecorrespondantslogementsvacantsimposesalaTHLVsurdeliberationdelacommune;
    }

    public function setNombresarticlesdurolecorrespondantslogementsvacantsimposesalaTHLVsurdeliberationdelacommune($nombresarticlesdurolecorrespondantslogementsvacantsimposesalaTHLVsurdeliberationdelacommune) {
        $this->nombresarticlesdurolecorrespondantslogementsvacantsimposesalaTHLVsurdeliberationdelacommune = $nombresarticlesdurolecorrespondantslogementsvacantsimposesalaTHLVsurdeliberationdelacommune;
    }

    public function getNombresarticlesdurolecorrespondantslogementsvacantsimposesalaTHLVsurdeliberationdelECPI() {
        return $this->nombresarticlesdurolecorrespondantslogementsvacantsimposesalaTHLVsurdeliberationdelECPI;
    }

    public function setNombresarticlesdurolecorrespondantslogementsvacantsimposesalaTHLVsurdeliberationdelECPI($nombresarticlesdurolecorrespondantslogementsvacantsimposesalaTHLVsurdeliberationdelECPI) {
        $this->nombresarticlesdurolecorrespondantslogementsvacantsimposesalaTHLVsurdeliberationdelECPI = $nombresarticlesdurolecorrespondantslogementsvacantsimposesalaTHLVsurdeliberationdelECPI;
    }

    public function getValeurlocativebruterevaloriseetotaleensembledeslocauxetdependancesimposables() {
        return $this->valeurlocativebruterevaloriseetotaleensembledeslocauxetdependancesimposables;
    }

    public function setValeurlocativebruterevaloriseetotaleensembledeslocauxetdependancesimposables($valeurlocativebruterevaloriseetotaleensembledeslocauxetdependancesimposables) {
        $this->valeurlocativebruterevaloriseetotaleensembledeslocauxetdependancesimposables = $valeurlocativebruterevaloriseetotaleensembledeslocauxetdependancesimposables;
    }

    public function getValeurlocativebruterevaloriseetotalelocauxexceptionnels() {
        return $this->valeurlocativebruterevaloriseetotalelocauxexceptionnels;
    }

    public function setValeurlocativebruterevaloriseetotalelocauxexceptionnels($valeurlocativebruterevaloriseetotalelocauxexceptionnels) {
        $this->valeurlocativebruterevaloriseetotalelocauxexceptionnels = $valeurlocativebruterevaloriseetotalelocauxexceptionnels;
    }

    public function getValeurlocativebruterevaloriseetotaleautreslocauxetdependancesbaties() {
        return $this->valeurlocativebruterevaloriseetotaleautreslocauxetdependancesbaties;
    }

    public function setValeurlocativebruterevaloriseetotaleautreslocauxetdependancesbaties($valeurlocativebruterevaloriseetotaleautreslocauxetdependancesbaties) {
        $this->valeurlocativebruterevaloriseetotaleautreslocauxetdependancesbaties = $valeurlocativebruterevaloriseetotaleautreslocauxetdependancesbaties;
    }

    public function getValeurlocativebruterevaloriseetotaledependancesbatiesrattachees() {
        return $this->valeurlocativebruterevaloriseetotaledependancesbatiesrattachees;
    }

    public function setValeurlocativebruterevaloriseetotaledependancesbatiesrattachees($valeurlocativebruterevaloriseetotaledependancesbatiesrattachees) {
        $this->valeurlocativebruterevaloriseetotaledependancesbatiesrattachees = $valeurlocativebruterevaloriseetotaledependancesbatiesrattachees;
    }

    public function getValeurlocativebruterevaloriseetotaledependancesbatiesnonrattachees() {
        return $this->valeurlocativebruterevaloriseetotaledependancesbatiesnonrattachees;
    }

    public function setValeurlocativebruterevaloriseetotaledependancesbatiesnonrattachees($valeurlocativebruterevaloriseetotaledependancesbatiesnonrattachees) {
        $this->valeurlocativebruterevaloriseetotaledependancesbatiesnonrattachees = $valeurlocativebruterevaloriseetotaledependancesbatiesnonrattachees;
    }

    public function getValeurlocativebruterevaloriseetotalelocauxhabitationproprementdits() {
        return $this->valeurlocativebruterevaloriseetotalelocauxhabitationproprementdits;
    }

    public function setValeurlocativebruterevaloriseetotalelocauxhabitationproprementdits($valeurlocativebruterevaloriseetotalelocauxhabitationproprementdits) {
        $this->valeurlocativebruterevaloriseetotalelocauxhabitationproprementdits = $valeurlocativebruterevaloriseetotalelocauxhabitationproprementdits;
    }

    public function getValeurlocativebruterevaloriseetotaleimposesensusdupremiersousunmemearticle() {
        return $this->valeurlocativebruterevaloriseetotaleimposesensusdupremiersousunmemearticle;
    }

    public function setValeurlocativebruterevaloriseetotaleimposesensusdupremiersousunmemearticle($valeurlocativebruterevaloriseetotaleimposesensusdupremiersousunmemearticle) {
        $this->valeurlocativebruterevaloriseetotaleimposesensusdupremiersousunmemearticle = $valeurlocativebruterevaloriseetotaleimposesensusdupremiersousunmemearticle;
    }

    public function getValeurlocativebruterevaloriseetotalelogementsvacantsimposesalaTHLVsurdeliberationdelacommune() {
        return $this->valeurlocativebruterevaloriseetotalelogementsvacantsimposesalaTHLVsurdeliberationdelacommune;
    }

    public function setValeurlocativebruterevaloriseetotalelogementsvacantsimposesalaTHLVsurdeliberationdelacommune($valeurlocativebruterevaloriseetotalelogementsvacantsimposesalaTHLVsurdeliberationdelacommune) {
        $this->valeurlocativebruterevaloriseetotalelogementsvacantsimposesalaTHLVsurdeliberationdelacommune = $valeurlocativebruterevaloriseetotalelogementsvacantsimposesalaTHLVsurdeliberationdelacommune;
    }

    public function getValeurlocativebruterevaloriseetotalelogementsvacantsimposesalaTHLVsurdeliberationdelECPI() {
        return $this->valeurlocativebruterevaloriseetotalelogementsvacantsimposesalaTHLVsurdeliberationdelECPI;
    }

    public function setValeurlocativebruterevaloriseetotalelogementsvacantsimposesalaTHLVsurdeliberationdelECPI($valeurlocativebruterevaloriseetotalelogementsvacantsimposesalaTHLVsurdeliberationdelECPI) {
        $this->valeurlocativebruterevaloriseetotalelogementsvacantsimposesalaTHLVsurdeliberationdelECPI = $valeurlocativebruterevaloriseetotalelogementsvacantsimposesalaTHLVsurdeliberationdelECPI;
    }

    public function getValeurlocativebruterevaloriseedontbasesexonereesensembledeslocauxetdependancesimposables() {
        return $this->valeurlocativebruterevaloriseedontbasesexonereesensembledeslocauxetdependancesimposables;
    }

    public function setValeurlocativebruterevaloriseedontbasesexonereesensembledeslocauxetdependancesimposables($valeurlocativebruterevaloriseedontbasesexonereesensembledeslocauxetdependancesimposables) {
        $this->valeurlocativebruterevaloriseedontbasesexonereesensembledeslocauxetdependancesimposables = $valeurlocativebruterevaloriseedontbasesexonereesensembledeslocauxetdependancesimposables;
    }

    public function getValeurlocativebruterevaloriseedontbasesexonereeslocauxexceptionnels() {
        return $this->valeurlocativebruterevaloriseedontbasesexonereeslocauxexceptionnels;
    }

    public function setValeurlocativebruterevaloriseedontbasesexonereeslocauxexceptionnels($valeurlocativebruterevaloriseedontbasesexonereeslocauxexceptionnels) {
        $this->valeurlocativebruterevaloriseedontbasesexonereeslocauxexceptionnels = $valeurlocativebruterevaloriseedontbasesexonereeslocauxexceptionnels;
    }

    public function getValeurlocativebruterevaloriseedontbasesexonereesautreslocauxetdependancesbaties() {
        return $this->valeurlocativebruterevaloriseedontbasesexonereesautreslocauxetdependancesbaties;
    }

    public function setValeurlocativebruterevaloriseedontbasesexonereesautreslocauxetdependancesbaties($valeurlocativebruterevaloriseedontbasesexonereesautreslocauxetdependancesbaties) {
        $this->valeurlocativebruterevaloriseedontbasesexonereesautreslocauxetdependancesbaties = $valeurlocativebruterevaloriseedontbasesexonereesautreslocauxetdependancesbaties;
    }

    public function getValeurlocativebruterevaloriseedontbasesexonereesdependancesbatiesrattachees() {
        return $this->valeurlocativebruterevaloriseedontbasesexonereesdependancesbatiesrattachees;
    }

    public function setValeurlocativebruterevaloriseedontbasesexonereesdependancesbatiesrattachees($valeurlocativebruterevaloriseedontbasesexonereesdependancesbatiesrattachees) {
        $this->valeurlocativebruterevaloriseedontbasesexonereesdependancesbatiesrattachees = $valeurlocativebruterevaloriseedontbasesexonereesdependancesbatiesrattachees;
    }

    public function getValeurlocativebruterevaloriseedontbasesexonereesdependancesbatiesnonrattachees() {
        return $this->valeurlocativebruterevaloriseedontbasesexonereesdependancesbatiesnonrattachees;
    }

    public function setValeurlocativebruterevaloriseedontbasesexonereesdependancesbatiesnonrattachees($valeurlocativebruterevaloriseedontbasesexonereesdependancesbatiesnonrattachees) {
        $this->valeurlocativebruterevaloriseedontbasesexonereesdependancesbatiesnonrattachees = $valeurlocativebruterevaloriseedontbasesexonereesdependancesbatiesnonrattachees;
    }

    public function getValeurlocativebruterevaloriseedontbasesexonereeslocauxhabitationproprementdits() {
        return $this->valeurlocativebruterevaloriseedontbasesexonereeslocauxhabitationproprementdits;
    }

    public function setValeurlocativebruterevaloriseedontbasesexonereeslocauxhabitationproprementdits($valeurlocativebruterevaloriseedontbasesexonereeslocauxhabitationproprementdits) {
        $this->valeurlocativebruterevaloriseedontbasesexonereeslocauxhabitationproprementdits = $valeurlocativebruterevaloriseedontbasesexonereeslocauxhabitationproprementdits;
    }

    public function getValeurlocativebruterevaloriseedontbasesexonereesimposesensusdupremiersousunmemearticle() {
        return $this->valeurlocativebruterevaloriseedontbasesexonereesimposesensusdupremiersousunmemearticle;
    }

    public function setValeurlocativebruterevaloriseedontbasesexonereesimposesensusdupremiersousunmemearticle($valeurlocativebruterevaloriseedontbasesexonereesimposesensusdupremiersousunmemearticle) {
        $this->valeurlocativebruterevaloriseedontbasesexonereesimposesensusdupremiersousunmemearticle = $valeurlocativebruterevaloriseedontbasesexonereesimposesensusdupremiersousunmemearticle;
    }

    public function getValeurlocativebruterevaloriseedontbasesexonereeslogementsvacantsimposesalaTHLVsurdeliberationdelacommune() {
        return $this->valeurlocativebruterevaloriseedontbasesexonereeslogementsvacantsimposesalaTHLVsurdeliberationdelacommune;
    }

    public function setValeurlocativebruterevaloriseedontbasesexonereeslogementsvacantsimposesalaTHLVsurdeliberationdelacommune($valeurlocativebruterevaloriseedontbasesexonereeslogementsvacantsimposesalaTHLVsurdeliberationdelacommune) {
        $this->valeurlocativebruterevaloriseedontbasesexonereeslogementsvacantsimposesalaTHLVsurdeliberationdelacommune = $valeurlocativebruterevaloriseedontbasesexonereeslogementsvacantsimposesalaTHLVsurdeliberationdelacommune;
    }

    public function getValeurlocativebruterevaloriseedontbasesexonereeslogementsvacantsimposesalaTHLVsurdeliberationdelECPI() {
        return $this->valeurlocativebruterevaloriseedontbasesexonereeslogementsvacantsimposesalaTHLVsurdeliberationdelECPI;
    }

    public function setValeurlocativebruterevaloriseedontbasesexonereeslogementsvacantsimposesalaTHLVsurdeliberationdelECPI($valeurlocativebruterevaloriseedontbasesexonereeslogementsvacantsimposesalaTHLVsurdeliberationdelECPI) {
        $this->valeurlocativebruterevaloriseedontbasesexonereeslogementsvacantsimposesalaTHLVsurdeliberationdelECPI = $valeurlocativebruterevaloriseedontbasesexonereeslogementsvacantsimposesalaTHLVsurdeliberationdelECPI;
    }

    public function getVlmCneRetenueAbat() {
        return $this->VlmCneRetenueAbat;
    }

    public function setVlmCneRetenueAbat($VlmCneRetenueAbat) {
        $this->VlmCneRetenueAbat = $VlmCneRetenueAbat;
    }

    public function getVlmICORetenueAbat() {
        return $this->VlmICORetenueAbat;
    }

    public function setVlmICORetenueAbat($VlmICORetenueAbat) {
        $this->VlmICORetenueAbat = $VlmICORetenueAbat;
    }

    public function getSimulation() {
        return $this->simulation;
    }

    public function setSimulation($simulation) {
        $this->simulation = $simulation;
    }

    public function getArticleCommuneTH() {
        return $this->articleCommuneTH;
    }

    public function setArticleCommuneTH($articleCommuneTH) {
        $this->articleCommuneTH = $articleCommuneTH;
    }

    public function getBaseNetteCommune() {
        return $this->baseNetteCommune;
    }

    public function setBaseNetteCommune($baseNetteCommune) {
        $this->baseNetteCommune = $baseNetteCommune;
    }

    public function getBaseNetteICO() {
        return $this->baseNetteICO;
    }

    public function setBaseNetteICO($baseNetteICO) {
        $this->baseNetteICO = $baseNetteICO;
    }

    public function getBaseNetteTSE() {
        return $this->baseNetteTSE;
    }

    public function setBaseNetteTSE($baseNetteTSE) {
        $this->baseNetteTSE = $baseNetteTSE;
    }

    public function getBaseNetteSansAjustementCommune() {
        return $this->baseNetteSansAjustementCommune;
    }

    public function setBaseNetteSansAjustementCommune($baseNetteSansAjustementCommune) {
        $this->baseNetteSansAjustementCommune = $baseNetteSansAjustementCommune;
    }

    public function getBaseNetteSansAjustementICO() {
        return $this->baseNetteSansAjustementICO;
    }

    public function setBaseNetteSansAjustementICO($baseNetteSansAjustementICO) {
        $this->baseNetteSansAjustementICO = $baseNetteSansAjustementICO;
    }

    public function getBaseNetteExoTSECommune() {
        return $this->baseNetteExoTSECommune;
    }

    public function setBaseNetteExoTSECommune($baseNetteExoTSECommune) {
        $this->baseNetteExoTSECommune = $baseNetteExoTSECommune;
    }

    public function getTotPrelevt15THS() {
        return $this->totPrelevt15THS;
    }

    public function setTotPrelevt15THS($totPrelevt15THS) {
        $this->totPrelevt15THS = $totPrelevt15THS;
    }

    public function getTauxImpositionICO() {
        return $this->tauxImpositionICO;
    }

    public function setTauxImpositionICO($tauxImpositionICO) {
        $this->tauxImpositionICO = $tauxImpositionICO;
    }

    public function getTauxImpositionTSE() {
        return $this->tauxImpositionTSE;
    }

    public function setTauxImpositionTSE($tauxImpositionTSE) {
        $this->tauxImpositionTSE = $tauxImpositionTSE;
    }

    public function getQuotiteAbattementGeneralBaseCommuneSansAjustement() {
        return $this->quotiteAbattementGeneralBaseCommuneSansAjustement;
    }

    public function setQuotiteAbattementGeneralBaseCommuneSansAjustement($quotiteAbattementGeneralBaseCommuneSansAjustement) {
        $this->quotiteAbattementGeneralBaseCommuneSansAjustement = $quotiteAbattementGeneralBaseCommuneSansAjustement;
    }

    public function getQuotiteAbattementGeneralBaseCommuneAvecAjustement() {
        return $this->quotiteAbattementGeneralBaseCommuneAvecAjustement;
    }

    public function setQuotiteAbattementGeneralBaseCommuneAvecAjustement($quotiteAbattementGeneralBaseCommuneAvecAjustement) {
        $this->quotiteAbattementGeneralBaseCommuneAvecAjustement = $quotiteAbattementGeneralBaseCommuneAvecAjustement;
    }

    public function getQuotiteAbattementPAC1CommuneSansAjustement() {
        return $this->quotiteAbattementPAC1CommuneSansAjustement;
    }

    public function setQuotiteAbattementPAC1CommuneSansAjustement($quotiteAbattementPAC1CommuneSansAjustement) {
        $this->quotiteAbattementPAC1CommuneSansAjustement = $quotiteAbattementPAC1CommuneSansAjustement;
    }

    public function getQuotiteAbattementPAC1CommuneAvecAjustement() {
        return $this->quotiteAbattementPAC1CommuneAvecAjustement;
    }

    public function setQuotiteAbattementPAC1CommuneAvecAjustement($quotiteAbattementPAC1CommuneAvecAjustement) {
        $this->quotiteAbattementPAC1CommuneAvecAjustement = $quotiteAbattementPAC1CommuneAvecAjustement;
    }

    public function getQuotiteAbattementPAC2CommuneSansAjustement() {
        return $this->quotiteAbattementPAC2CommuneSansAjustement;
    }

    public function setQuotiteAbattementPAC2CommuneSansAjustement($quotiteAbattementPAC2CommuneSansAjustement) {
        $this->quotiteAbattementPAC2CommuneSansAjustement = $quotiteAbattementPAC2CommuneSansAjustement;
    }

    public function getQuotiteAbattementPAC2CommuneAvecAjustement() {
        return $this->quotiteAbattementPAC2CommuneAvecAjustement;
    }

    public function setQuotiteAbattementPAC2CommuneAvecAjustement($quotiteAbattementPAC2CommuneAvecAjustement) {
        $this->quotiteAbattementPAC2CommuneAvecAjustement = $quotiteAbattementPAC2CommuneAvecAjustement;
    }

    public function getQuotiteAbattementPAC3CommuneSansAjustement() {
        return $this->quotiteAbattementPAC3CommuneSansAjustement;
    }

    public function setQuotiteAbattementPAC3CommuneSansAjustement($quotiteAbattementPAC3CommuneSansAjustement) {
        $this->quotiteAbattementPAC3CommuneSansAjustement = $quotiteAbattementPAC3CommuneSansAjustement;
    }

    public function getQuotiteAbattementPAC3CommuneAvecAjustement() {
        return $this->quotiteAbattementPAC3CommuneAvecAjustement;
    }

    public function setQuotiteAbattementPAC3CommuneAvecAjustement($quotiteAbattementPAC3CommuneAvecAjustement) {
        $this->quotiteAbattementPAC3CommuneAvecAjustement = $quotiteAbattementPAC3CommuneAvecAjustement;
    }

    public function getQuotiteAbattementPAC4SuppCommuneSansAjustement() {
        return $this->quotiteAbattementPAC4SuppCommuneSansAjustement;
    }

    public function setQuotiteAbattementPAC4SuppCommuneSansAjustement($quotiteAbattementPAC4SuppCommuneSansAjustement) {
        $this->quotiteAbattementPAC4SuppCommuneSansAjustement = $quotiteAbattementPAC4SuppCommuneSansAjustement;
    }

    public function getQuotiteAbattementPAC4SuppCommuneAvecAjustement() {
        return $this->quotiteAbattementPAC4SuppCommuneAvecAjustement;
    }

    public function setQuotiteAbattementPAC4SuppCommuneAvecAjustement($quotiteAbattementPAC4SuppCommuneAvecAjustement) {
        $this->quotiteAbattementPAC4SuppCommuneAvecAjustement = $quotiteAbattementPAC4SuppCommuneAvecAjustement;
    }

    public function getQuotiteAbattementSpecialBaseCommuneSansAjustement() {
        return $this->quotiteAbattementSpecialBaseCommuneSansAjustement;
    }

    public function setQuotiteAbattementSpecialBaseCommuneSansAjustement($quotiteAbattementSpecialBaseCommuneSansAjustement) {
        $this->quotiteAbattementSpecialBaseCommuneSansAjustement = $quotiteAbattementSpecialBaseCommuneSansAjustement;
    }

    public function getQuotiteAbattementSpecialBaseCommuneAvecAjustement() {
        return $this->quotiteAbattementSpecialBaseCommuneAvecAjustement;
    }

    public function setQuotiteAbattementSpecialBaseCommuneAvecAjustement($quotiteAbattementSpecialBaseCommuneAvecAjustement) {
        $this->quotiteAbattementSpecialBaseCommuneAvecAjustement = $quotiteAbattementSpecialBaseCommuneAvecAjustement;
    }

    public function getQuotiteAbattementSpecialHandicapeCommuneSansAjustement() {
        return $this->quotiteAbattementSpecialHandicapeCommuneSansAjustement;
    }

    public function setQuotiteAbattementSpecialHandicapeCommuneSansAjustement($quotiteAbattementSpecialHandicapeCommuneSansAjustement) {
        $this->quotiteAbattementSpecialHandicapeCommuneSansAjustement = $quotiteAbattementSpecialHandicapeCommuneSansAjustement;
    }

    public function getQuotiteAbattementSpecialHandicapeCommuneAvecAjustement() {
        return $this->quotiteAbattementSpecialHandicapeCommuneAvecAjustement;
    }

    public function setQuotiteAbattementSpecialHandicapeCommuneAvecAjustement($quotiteAbattementSpecialHandicapeCommuneAvecAjustement) {
        $this->quotiteAbattementSpecialHandicapeCommuneAvecAjustement = $quotiteAbattementSpecialHandicapeCommuneAvecAjustement;
    }

    public function getQuotiteAbattementGeneralBaseInterCoApresAjustement() {
        return $this->quotiteAbattementGeneralBaseInterCoApresAjustement;
    }

    public function setQuotiteAbattementGeneralBaseInterCoApresAjustement($quotiteAbattementGeneralBaseInterCoApresAjustement) {
        $this->quotiteAbattementGeneralBaseInterCoApresAjustement = $quotiteAbattementGeneralBaseInterCoApresAjustement;
    }

    public function getQuotiteAbattementPAC12InterCoApresAjustement() {
        return $this->quotiteAbattementPAC12InterCoApresAjustement;
    }

    public function setQuotiteAbattementPAC12InterCoApresAjustement($quotiteAbattementPAC12InterCoApresAjustement) {
        $this->quotiteAbattementPAC12InterCoApresAjustement = $quotiteAbattementPAC12InterCoApresAjustement;
    }

    public function getQuotiteAbattementPAC3InterCoApresAjustement() {
        return $this->quotiteAbattementPAC3InterCoApresAjustement;
    }

    public function setQuotiteAbattementPAC3InterCoApresAjustement($quotiteAbattementPAC3InterCoApresAjustement) {
        $this->quotiteAbattementPAC3InterCoApresAjustement = $quotiteAbattementPAC3InterCoApresAjustement;
    }

    public function getQuotiteAbattementSpecialBaseInterCoApresAjustement() {
        return $this->quotiteAbattementSpecialBaseInterCoApresAjustement;
    }

    public function setQuotiteAbattementSpecialBaseInterCoApresAjustement($quotiteAbattementSpecialBaseInterCoApresAjustement) {
        $this->quotiteAbattementSpecialBaseInterCoApresAjustement = $quotiteAbattementSpecialBaseInterCoApresAjustement;
    }

    public function getQuotiteAbattementSpecialHandicapeInterCoApresAjustement() {
        return $this->quotiteAbattementSpecialHandicapeInterCoApresAjustement;
    }

    public function setQuotiteAbattementSpecialHandicapeInterCoApresAjustement($quotiteAbattementSpecialHandicapeInterCoApresAjustement) {
        $this->quotiteAbattementSpecialHandicapeInterCoApresAjustement = $quotiteAbattementSpecialHandicapeInterCoApresAjustement;
    }

    public function getAfferentsresidencessecondaires() {
        return $this->afferentsresidencessecondaires;
    }

    public function setAfferentsresidencessecondaires($afferentsresidencessecondaires) {
        $this->afferentsresidencessecondaires = $afferentsresidencessecondaires;
    }

    public function getAfferentsdependancesprincipales() {
        return $this->afferentsdependancesprincipales;
    }

    public function setAfferentsdependancesprincipales($afferentsdependancesprincipales) {
        $this->afferentsdependancesprincipales = $afferentsdependancesprincipales;
    }

    public function getNbarticlesdurole() {
        return $this->nbarticlesdurole;
    }

    public function setNbarticlesdurole($nbarticlesdurole) {
        $this->nbarticlesdurole = $nbarticlesdurole;
    }

    public function getNbpers0persacharge() {
        return $this->nbpers0persacharge;
    }

    public function setNbpers0persacharge($nbpers0persacharge) {
        $this->nbpers0persacharge = $nbpers0persacharge;
    }

    public function getNbpers1persacharge() {
        return $this->nbpers1persacharge;
    }

    public function setNbpers1persacharge($nbpers1persacharge) {
        $this->nbpers1persacharge = $nbpers1persacharge;
    }

    public function getNbpers2persacharge() {
        return $this->nbpers2persacharge;
    }

    public function setNbpers2persacharge($nbpers2persacharge) {
        $this->nbpers2persacharge = $nbpers2persacharge;
    }

    public function getNbpers3persacharge() {
        return $this->nbpers3persacharge;
    }

    public function setNbpers3persacharge($nbpers3persacharge) {
        $this->nbpers3persacharge = $nbpers3persacharge;
    }

    public function getNbpers4persacharge() {
        return $this->nbpers4persacharge;
    }

    public function setNbpers4persacharge($nbpers4persacharge) {
        $this->nbpers4persacharge = $nbpers4persacharge;
    }

    public function getNbpers5persacharge() {
        return $this->nbpers5persacharge;
    }

    public function setNbpers5persacharge($nbpers5persacharge) {
        $this->nbpers5persacharge = $nbpers5persacharge;
    }

    public function getNbperstotcumule() {
        return $this->nbperstotcumule;
    }

    public function setNbperstotcumule($nbperstotcumule) {
        $this->nbperstotcumule = $nbperstotcumule;
    }

    public function getAfferentsdependancesprincipalesexoneres() {
        return $this->afferentsdependancesprincipalesexoneres;
    }

    public function setAfferentsdependancesprincipalesexoneres($afferentsdependancesprincipalesexoneres) {
        $this->afferentsdependancesprincipalesexoneres = $afferentsdependancesprincipalesexoneres;
    }

    public function getNbpers0persachargeexoneres() {
        return $this->nbpers0persachargeexoneres;
    }

    public function setNbpers0persachargeexoneres($nbpers0persachargeexoneres) {
        $this->nbpers0persachargeexoneres = $nbpers0persachargeexoneres;
    }

    public function getNbpers1persachargeexoneres() {
        return $this->nbpers1persachargeexoneres;
    }

    public function setNbpers1persachargeexoneres($nbpers1persachargeexoneres) {
        $this->nbpers1persachargeexoneres = $nbpers1persachargeexoneres;
    }

    public function getNbpers2persachargeexoneres() {
        return $this->nbpers2persachargeexoneres;
    }

    public function setNbpers2persachargeexoneres($nbpers2persachargeexoneres) {
        $this->nbpers2persachargeexoneres = $nbpers2persachargeexoneres;
    }

    public function getNbpers3persachargeexoneres() {
        return $this->nbpers3persachargeexoneres;
    }

    public function setNbpers3persachargeexoneres($nbpers3persachargeexoneres) {
        $this->nbpers3persachargeexoneres = $nbpers3persachargeexoneres;
    }

    public function getNbpers4persachargeexoneres() {
        return $this->nbpers4persachargeexoneres;
    }

    public function setNbpers4persachargeexoneres($nbpers4persachargeexoneres) {
        $this->nbpers4persachargeexoneres = $nbpers4persachargeexoneres;
    }

    public function getNbpers5persachargeexoneres() {
        return $this->nbpers5persachargeexoneres;
    }

    public function setNbpers5persachargeexoneres($nbpers5persachargeexoneres) {
        $this->nbpers5persachargeexoneres = $nbpers5persachargeexoneres;
    }

    public function getNbperstotcumuleexoneres() {
        return $this->nbperstotcumuleexoneres;
    }

    public function setNbperstotcumuleexoneres($nbperstotcumuleexoneres) {
        $this->nbperstotcumuleexoneres = $nbperstotcumuleexoneres;
    }

    public function getAbattementgeneralbasecommunale() {
        return $this->abattementgeneralbasecommunale;
    }

    public function setAbattementgeneralbasecommunale($abattementgeneralbasecommunale) {
        $this->abattementgeneralbasecommunale = $abattementgeneralbasecommunale;
    }

    public function getAbattementpersonneschargecommunal12() {
        return $this->abattementpersonneschargecommunal12;
    }

    public function setAbattementpersonneschargecommunal12($abattementpersonneschargecommunal12) {
        $this->abattementpersonneschargecommunal12 = $abattementpersonneschargecommunal12;
    }

    public function getAbattementpersonneschargecommunal3() {
        return $this->abattementpersonneschargecommunal3;
    }

    public function setAbattementpersonneschargecommunal3($abattementpersonneschargecommunal3) {
        $this->abattementpersonneschargecommunal3 = $abattementpersonneschargecommunal3;
    }

    public function getAbattementpersonneschargecommunal() {
        return $this->abattementpersonneschargecommunal;
    }

    public function setAbattementpersonneschargecommunal($abattementpersonneschargecommunal) {
        $this->abattementpersonneschargecommunal = $abattementpersonneschargecommunal;
    }

    public function getAbattementspecialbasecommunal() {
        return $this->abattementspecialbasecommunal;
    }

    public function setAbattementspecialbasecommunal($abattementspecialbasecommunal) {
        $this->abattementspecialbasecommunal = $abattementspecialbasecommunal;
    }

    public function getAbattementspecialhandicapebasecommunal() {
        return $this->abattementspecialhandicapebasecommunal;
    }

    public function setAbattementspecialhandicapebasecommunal($abattementspecialhandicapebasecommunal) {
        $this->abattementspecialhandicapebasecommunal = $abattementspecialhandicapebasecommunal;
    }

    public function getNbabattementgeneralbasecommunale() {
        return $this->nbabattementgeneralbasecommunale;
    }

    public function setNbabattementgeneralbasecommunale($nbabattementgeneralbasecommunale) {
        $this->nbabattementgeneralbasecommunale = $nbabattementgeneralbasecommunale;
    }

    public function getNbabattementpersonneschargecommunal12() {
        return $this->nbabattementpersonneschargecommunal12;
    }

    public function setNbabattementpersonneschargecommunal12($nbabattementpersonneschargecommunal12) {
        $this->nbabattementpersonneschargecommunal12 = $nbabattementpersonneschargecommunal12;
    }

    public function getNbabattementpersonneschargecommunal3() {
        return $this->nbabattementpersonneschargecommunal3;
    }

    public function setNbabattementpersonneschargecommunal3($nbabattementpersonneschargecommunal3) {
        $this->nbabattementpersonneschargecommunal3 = $nbabattementpersonneschargecommunal3;
    }

    public function getNbabattementpersonneschargecommunal() {
        return $this->nbabattementpersonneschargecommunal;
    }

    public function setNbabattementpersonneschargecommunal($nbabattementpersonneschargecommunal) {
        $this->nbabattementpersonneschargecommunal = $nbabattementpersonneschargecommunal;
    }

    public function getNbabattementspecialbasecommunal() {
        return $this->nbabattementspecialbasecommunal;
    }

    public function setNbabattementspecialbasecommunal($nbabattementspecialbasecommunal) {
        $this->nbabattementspecialbasecommunal = $nbabattementspecialbasecommunal;
    }

    public function getNbabattementspecialhandicapebasecommunal() {
        return $this->nbabattementspecialhandicapebasecommunal;
    }

    public function setNbabattementspecialhandicapebasecommunal($nbabattementspecialhandicapebasecommunal) {
        $this->nbabattementspecialhandicapebasecommunal = $nbabattementspecialhandicapebasecommunal;
    }

    public function getAbattementgeneralbaseintercommunalite() {
        return $this->abattementgeneralbaseintercommunalite;
    }

    public function setAbattementgeneralbaseintercommunalite($abattementgeneralbaseintercommunalite) {
        $this->abattementgeneralbaseintercommunalite = $abattementgeneralbaseintercommunalite;
    }

    public function getAbattementpersonneschargeintercommunalite12() {
        return $this->abattementpersonneschargeintercommunalite12;
    }

    public function setAbattementpersonneschargeintercommunalite12($abattementpersonneschargeintercommunalite12) {
        $this->abattementpersonneschargeintercommunalite12 = $abattementpersonneschargeintercommunalite12;
    }

    public function getAbattementpersonneschargeintercommunalite3() {
        return $this->abattementpersonneschargeintercommunalite3;
    }

    public function setAbattementpersonneschargeintercommunalite3($abattementpersonneschargeintercommunalite3) {
        $this->abattementpersonneschargeintercommunalite3 = $abattementpersonneschargeintercommunalite3;
    }

    public function getAbattementpersonneschargeintercommunalite() {
        return $this->abattementpersonneschargeintercommunalite;
    }

    public function setAbattementpersonneschargeintercommunalite($abattementpersonneschargeintercommunalite) {
        $this->abattementpersonneschargeintercommunalite = $abattementpersonneschargeintercommunalite;
    }

    public function getAbattementspecialbaseintercommunalite() {
        return $this->abattementspecialbaseintercommunalite;
    }

    public function setAbattementspecialbaseintercommunalite($abattementspecialbaseintercommunalite) {
        $this->abattementspecialbaseintercommunalite = $abattementspecialbaseintercommunalite;
    }

    public function getAbattementspecialhandicapebaseintercommunalite() {
        return $this->abattementspecialhandicapebaseintercommunalite;
    }

    public function setAbattementspecialhandicapebaseintercommunalite($abattementspecialhandicapebaseintercommunalite) {
        $this->abattementspecialhandicapebaseintercommunalite = $abattementspecialhandicapebaseintercommunalite;
    }

    public function getNbabattementgeneralbaseintercommunalite() {
        return $this->nbabattementgeneralbaseintercommunalite;
    }

    public function setNbabattementgeneralbaseintercommunalite($nbabattementgeneralbaseintercommunalite) {
        $this->nbabattementgeneralbaseintercommunalite = $nbabattementgeneralbaseintercommunalite;
    }

    public function getNbabattementpersonneschargeintercommunalite12() {
        return $this->nbabattementpersonneschargeintercommunalite12;
    }

    public function setNbabattementpersonneschargeintercommunalite12($nbabattementpersonneschargeintercommunalite12) {
        $this->nbabattementpersonneschargeintercommunalite12 = $nbabattementpersonneschargeintercommunalite12;
    }

    public function getNbabattementpersonneschargeintercommunalite3() {
        return $this->nbabattementpersonneschargeintercommunalite3;
    }

    public function setNbabattementpersonneschargeintercommunalite3($nbabattementpersonneschargeintercommunalite3) {
        $this->nbabattementpersonneschargeintercommunalite3 = $nbabattementpersonneschargeintercommunalite3;
    }

    public function getNbabattementpersonneschargeintercommunalite() {
        return $this->nbabattementpersonneschargeintercommunalite;
    }

    public function setNbabattementpersonneschargeintercommunalite($nbabattementpersonneschargeintercommunalite) {
        $this->nbabattementpersonneschargeintercommunalite = $nbabattementpersonneschargeintercommunalite;
    }

    public function getNbabattementspecialbaseintercommunalite() {
        return $this->nbabattementspecialbaseintercommunalite;
    }

    public function setNbabattementspecialbaseintercommunalite($nbabattementspecialbaseintercommunalite) {
        $this->nbabattementspecialbaseintercommunalite = $nbabattementspecialbaseintercommunalite;
    }

    public function getNbabattementspecialhandicapebaseintercommunalite() {
        return $this->nbabattementspecialhandicapebaseintercommunalite;
    }

    public function setNbabattementspecialhandicapebaseintercommunalite($nbabattementspecialhandicapebaseintercommunalite) {
        $this->nbabattementspecialhandicapebaseintercommunalite = $nbabattementspecialhandicapebaseintercommunalite;
    }

    public function getAbattementgeneralbasetse() {
        return $this->abattementgeneralbasetse;
    }

    public function setAbattementgeneralbasetse($abattementgeneralbasetse) {
        $this->abattementgeneralbasetse = $abattementgeneralbasetse;
    }

    public function getAbattementpersonneschargetse12() {
        return $this->abattementpersonneschargetse12;
    }

    public function setAbattementpersonneschargetse12($abattementpersonneschargetse12) {
        $this->abattementpersonneschargetse12 = $abattementpersonneschargetse12;
    }

    public function getAbattementpersonneschargetse3() {
        return $this->abattementpersonneschargetse3;
    }

    public function setAbattementpersonneschargetse3($abattementpersonneschargetse3) {
        $this->abattementpersonneschargetse3 = $abattementpersonneschargetse3;
    }

    public function getAbattementpersonneschargetse() {
        return $this->abattementpersonneschargetse;
    }

    public function setAbattementpersonneschargetse($abattementpersonneschargetse) {
        $this->abattementpersonneschargetse = $abattementpersonneschargetse;
    }

    public function getAbattementspecialbasetse() {
        return $this->abattementspecialbasetse;
    }

    public function setAbattementspecialbasetse($abattementspecialbasetse) {
        $this->abattementspecialbasetse = $abattementspecialbasetse;
    }

    public function getAbattementspecialhandicapebasetse() {
        return $this->abattementspecialhandicapebasetse;
    }

    public function setAbattementspecialhandicapebasetse($abattementspecialhandicapebasetse) {
        $this->abattementspecialhandicapebasetse = $abattementspecialhandicapebasetse;
    }

    public function getNbabattementgeneralbasetse() {
        return $this->nbabattementgeneralbasetse;
    }

    public function setNbabattementgeneralbasetse($nbabattementgeneralbasetse) {
        $this->nbabattementgeneralbasetse = $nbabattementgeneralbasetse;
    }

    public function getNbabattementpersonneschargetse12() {
        return $this->nbabattementpersonneschargetse12;
    }

    public function setNbabattementpersonneschargetse12($nbabattementpersonneschargetse12) {
        $this->nbabattementpersonneschargetse12 = $nbabattementpersonneschargetse12;
    }

    public function getNbabattementpersonneschargetse3() {
        return $this->nbabattementpersonneschargetse3;
    }

    public function setNbabattementpersonneschargetse3($nbabattementpersonneschargetse3) {
        $this->nbabattementpersonneschargetse3 = $nbabattementpersonneschargetse3;
    }

    public function getNbabattementpersonneschargetse() {
        return $this->nbabattementpersonneschargetse;
    }

    public function setNbabattementpersonneschargetse($nbabattementpersonneschargetse) {
        $this->nbabattementpersonneschargetse = $nbabattementpersonneschargetse;
    }

    public function getNbabattementspecialbasetse() {
        return $this->nbabattementspecialbasetse;
    }

    public function setNbabattementspecialbasetse($nbabattementspecialbasetse) {
        $this->nbabattementspecialbasetse = $nbabattementspecialbasetse;
    }

    public function getNbabattementspecialhandicapebasetse() {
        return $this->nbabattementspecialhandicapebasetse;
    }

    public function setNbabattementspecialhandicapebasetse($nbabattementspecialhandicapebasetse) {
        $this->nbabattementspecialhandicapebasetse = $nbabattementspecialhandicapebasetse;
    }

    public function getAbattementegalenull() {
        return $this->abattementegalenull;
    }

    public function setAbattementegalenull($abattementegalenull) {
        $this->abattementegalenull = $abattementegalenull;
    }

    public function getNombreArticlesDuRole011() {
        return $this->nombreArticlesDuRole011;
    }

    public function setNombreArticlesDuRole011($nombreArticlesDuRole011) {
        $this->nombreArticlesDuRole011 = $nombreArticlesDuRole011;
    }

    public function getNombreArticlesDuRole1299() {
        return $this->nombreArticlesDuRole1299;
    }

    public function setNombreArticlesDuRole1299($nombreArticlesDuRole1299) {
        $this->nombreArticlesDuRole1299 = $nombreArticlesDuRole1299;
    }

    public function getNombreArticlesDuRole100199() {
        return $this->nombreArticlesDuRole100199;
    }

    public function setNombreArticlesDuRole100199($nombreArticlesDuRole100199) {
        $this->nombreArticlesDuRole100199 = $nombreArticlesDuRole100199;
    }

    public function getNombreArticlesDuRole200299() {
        return $this->nombreArticlesDuRole200299;
    }

    public function setNombreArticlesDuRole200299($nombreArticlesDuRole200299) {
        $this->nombreArticlesDuRole200299 = $nombreArticlesDuRole200299;
    }

    public function getNombreArticlesDuRole300399() {
        return $this->nombreArticlesDuRole300399;
    }

    public function setNombreArticlesDuRole300399($nombreArticlesDuRole300399) {
        $this->nombreArticlesDuRole300399 = $nombreArticlesDuRole300399;
    }

    public function getNombreArticlesDuRole400499() {
        return $this->nombreArticlesDuRole400499;
    }

    public function setNombreArticlesDuRole400499($nombreArticlesDuRole400499) {
        $this->nombreArticlesDuRole400499 = $nombreArticlesDuRole400499;
    }

    public function getNombreArticlesDuRole500599() {
        return $this->nombreArticlesDuRole500599;
    }

    public function setNombreArticlesDuRole500599($nombreArticlesDuRole500599) {
        $this->nombreArticlesDuRole500599 = $nombreArticlesDuRole500599;
    }

    public function getNombreArticlesDuRole600699() {
        return $this->nombreArticlesDuRole600699;
    }

    public function setNombreArticlesDuRole600699($nombreArticlesDuRole600699) {
        $this->nombreArticlesDuRole600699 = $nombreArticlesDuRole600699;
    }

    public function getNombreArticlesDuRole700799() {
        return $this->nombreArticlesDuRole700799;
    }

    public function setNombreArticlesDuRole700799($nombreArticlesDuRole700799) {
        $this->nombreArticlesDuRole700799 = $nombreArticlesDuRole700799;
    }

    public function getNombreArticlesDuRole800899() {
        return $this->nombreArticlesDuRole800899;
    }

    public function setNombreArticlesDuRole800899($nombreArticlesDuRole800899) {
        $this->nombreArticlesDuRole800899 = $nombreArticlesDuRole800899;
    }

    public function getNombreArticlesDuRole900999() {
        return $this->nombreArticlesDuRole900999;
    }

    public function setNombreArticlesDuRole900999($nombreArticlesDuRole900999) {
        $this->nombreArticlesDuRole900999 = $nombreArticlesDuRole900999;
    }

    public function getNombreArticlesDuRole1000plus() {
        return $this->nombreArticlesDuRole1000plus;
    }

    public function setNombreArticlesDuRole1000plus($nombreArticlesDuRole1000plus) {
        $this->nombreArticlesDuRole1000plus = $nombreArticlesDuRole1000plus;
    }

    public function getNombreArticlesDuRoleTotal() {
        return $this->nombreArticlesDuRoleTotal;
    }

    public function setNombreArticlesDuRoleTotal($nombreArticlesDuRoleTotal) {
        $this->nombreArticlesDuRoleTotal = $nombreArticlesDuRoleTotal;
    }

    public function getRepartitionCotisationsMisesEnRecouvrement011() {
        return $this->repartitionCotisationsMisesEnRecouvrement011;
    }

    public function setRepartitionCotisationsMisesEnRecouvrement011($repartitionCotisationsMisesEnRecouvrement011) {
        $this->repartitionCotisationsMisesEnRecouvrement011 = $repartitionCotisationsMisesEnRecouvrement011;
    }

    public function getRepartitionCotisationsMisesEnRecouvrement1299() {
        return $this->repartitionCotisationsMisesEnRecouvrement1299;
    }

    public function setRepartitionCotisationsMisesEnRecouvrement1299($repartitionCotisationsMisesEnRecouvrement1299) {
        $this->repartitionCotisationsMisesEnRecouvrement1299 = $repartitionCotisationsMisesEnRecouvrement1299;
    }

    public function getRepartitionCotisationsMisesEnRecouvrement100199() {
        return $this->repartitionCotisationsMisesEnRecouvrement100199;
    }

    public function setRepartitionCotisationsMisesEnRecouvrement100199($repartitionCotisationsMisesEnRecouvrement100199) {
        $this->repartitionCotisationsMisesEnRecouvrement100199 = $repartitionCotisationsMisesEnRecouvrement100199;
    }

    public function getRepartitionCotisationsMisesEnRecouvrement200299() {
        return $this->repartitionCotisationsMisesEnRecouvrement200299;
    }

    public function setRepartitionCotisationsMisesEnRecouvrement200299($repartitionCotisationsMisesEnRecouvrement200299) {
        $this->repartitionCotisationsMisesEnRecouvrement200299 = $repartitionCotisationsMisesEnRecouvrement200299;
    }

    public function getRepartitionCotisationsMisesEnRecouvrement300399() {
        return $this->repartitionCotisationsMisesEnRecouvrement300399;
    }

    public function setRepartitionCotisationsMisesEnRecouvrement300399($repartitionCotisationsMisesEnRecouvrement300399) {
        $this->repartitionCotisationsMisesEnRecouvrement300399 = $repartitionCotisationsMisesEnRecouvrement300399;
    }

    public function getRepartitionCotisationsMisesEnRecouvrement400499() {
        return $this->repartitionCotisationsMisesEnRecouvrement400499;
    }

    public function setRepartitionCotisationsMisesEnRecouvrement400499($repartitionCotisationsMisesEnRecouvrement400499) {
        $this->repartitionCotisationsMisesEnRecouvrement400499 = $repartitionCotisationsMisesEnRecouvrement400499;
    }

    public function getRepartitionCotisationsMisesEnRecouvrement500599() {
        return $this->repartitionCotisationsMisesEnRecouvrement500599;
    }

    public function setRepartitionCotisationsMisesEnRecouvrement500599($repartitionCotisationsMisesEnRecouvrement500599) {
        $this->repartitionCotisationsMisesEnRecouvrement500599 = $repartitionCotisationsMisesEnRecouvrement500599;
    }

    public function getRepartitionCotisationsMisesEnRecouvrement600699() {
        return $this->repartitionCotisationsMisesEnRecouvrement600699;
    }

    public function setRepartitionCotisationsMisesEnRecouvrement600699($repartitionCotisationsMisesEnRecouvrement600699) {
        $this->repartitionCotisationsMisesEnRecouvrement600699 = $repartitionCotisationsMisesEnRecouvrement600699;
    }

    public function getRepartitionCotisationsMisesEnRecouvrement700799() {
        return $this->repartitionCotisationsMisesEnRecouvrement700799;
    }

    public function setRepartitionCotisationsMisesEnRecouvrement700799($repartitionCotisationsMisesEnRecouvrement700799) {
        $this->repartitionCotisationsMisesEnRecouvrement700799 = $repartitionCotisationsMisesEnRecouvrement700799;
    }

    public function getRepartitionCotisationsMisesEnRecouvrement800899() {
        return $this->repartitionCotisationsMisesEnRecouvrement800899;
    }

    public function setRepartitionCotisationsMisesEnRecouvrement800899($repartitionCotisationsMisesEnRecouvrement800899) {
        $this->repartitionCotisationsMisesEnRecouvrement800899 = $repartitionCotisationsMisesEnRecouvrement800899;
    }

    public function getRepartitionCotisationsMisesEnRecouvrement900999() {
        return $this->repartitionCotisationsMisesEnRecouvrement900999;
    }

    public function setRepartitionCotisationsMisesEnRecouvrement900999($repartitionCotisationsMisesEnRecouvrement900999) {
        $this->repartitionCotisationsMisesEnRecouvrement900999 = $repartitionCotisationsMisesEnRecouvrement900999;
    }

    public function getRepartitionCotisationsMisesEnRecouvrement1000plus() {
        return $this->repartitionCotisationsMisesEnRecouvrement1000plus;
    }

    public function setRepartitionCotisationsMisesEnRecouvrement1000plus($repartitionCotisationsMisesEnRecouvrement1000plus) {
        $this->repartitionCotisationsMisesEnRecouvrement1000plus = $repartitionCotisationsMisesEnRecouvrement1000plus;
    }

    public function getRepartitionCotisationsMisesEnRecouvrementTotal() {
        return $this->repartitionCotisationsMisesEnRecouvrementTotal;
    }

    public function setRepartitionCotisationsMisesEnRecouvrementTotal($repartitionCotisationsMisesEnRecouvrementTotal) {
        $this->repartitionCotisationsMisesEnRecouvrementTotal = $repartitionCotisationsMisesEnRecouvrementTotal;
    }

    public function getRepartitionCotisationsBrutesCommunesSyndicatsEtTSE011() {
        return $this->repartitionCotisationsBrutesCommunesSyndicatsEtTSE011;
    }

    public function setRepartitionCotisationsBrutesCommunesSyndicatsEtTSE011($repartitionCotisationsBrutesCommunesSyndicatsEtTSE011) {
        $this->repartitionCotisationsBrutesCommunesSyndicatsEtTSE011 = $repartitionCotisationsBrutesCommunesSyndicatsEtTSE011;
    }

    public function getRepartitionCotisationsBrutesCommunesSyndicatsEtTSE1299() {
        return $this->repartitionCotisationsBrutesCommunesSyndicatsEtTSE1299;
    }

    public function setRepartitionCotisationsBrutesCommunesSyndicatsEtTSE1299($repartitionCotisationsBrutesCommunesSyndicatsEtTSE1299) {
        $this->repartitionCotisationsBrutesCommunesSyndicatsEtTSE1299 = $repartitionCotisationsBrutesCommunesSyndicatsEtTSE1299;
    }

    public function getRepartitionCotisationsBrutesCommunesSyndicatsEtTSE100199() {
        return $this->repartitionCotisationsBrutesCommunesSyndicatsEtTSE100199;
    }

    public function setRepartitionCotisationsBrutesCommunesSyndicatsEtTSE100199($repartitionCotisationsBrutesCommunesSyndicatsEtTSE100199) {
        $this->repartitionCotisationsBrutesCommunesSyndicatsEtTSE100199 = $repartitionCotisationsBrutesCommunesSyndicatsEtTSE100199;
    }

    public function getRepartitionCotisationsBrutesCommunesSyndicatsEtTSE200299() {
        return $this->repartitionCotisationsBrutesCommunesSyndicatsEtTSE200299;
    }

    public function setRepartitionCotisationsBrutesCommunesSyndicatsEtTSE200299($repartitionCotisationsBrutesCommunesSyndicatsEtTSE200299) {
        $this->repartitionCotisationsBrutesCommunesSyndicatsEtTSE200299 = $repartitionCotisationsBrutesCommunesSyndicatsEtTSE200299;
    }

    public function getRepartitionCotisationsBrutesCommunesSyndicatsEtTSE300399() {
        return $this->repartitionCotisationsBrutesCommunesSyndicatsEtTSE300399;
    }

    public function setRepartitionCotisationsBrutesCommunesSyndicatsEtTSE300399($repartitionCotisationsBrutesCommunesSyndicatsEtTSE300399) {
        $this->repartitionCotisationsBrutesCommunesSyndicatsEtTSE300399 = $repartitionCotisationsBrutesCommunesSyndicatsEtTSE300399;
    }

    public function getRepartitionCotisationsBrutesCommunesSyndicatsEtTSE400499() {
        return $this->repartitionCotisationsBrutesCommunesSyndicatsEtTSE400499;
    }

    public function setRepartitionCotisationsBrutesCommunesSyndicatsEtTSE400499($repartitionCotisationsBrutesCommunesSyndicatsEtTSE400499) {
        $this->repartitionCotisationsBrutesCommunesSyndicatsEtTSE400499 = $repartitionCotisationsBrutesCommunesSyndicatsEtTSE400499;
    }

    public function getRepartitionCotisationsBrutesCommunesSyndicatsEtTSE500599() {
        return $this->repartitionCotisationsBrutesCommunesSyndicatsEtTSE500599;
    }

    public function setRepartitionCotisationsBrutesCommunesSyndicatsEtTSE500599($repartitionCotisationsBrutesCommunesSyndicatsEtTSE500599) {
        $this->repartitionCotisationsBrutesCommunesSyndicatsEtTSE500599 = $repartitionCotisationsBrutesCommunesSyndicatsEtTSE500599;
    }

    public function getRepartitionCotisationsBrutesCommunesSyndicatsEtTSE600699() {
        return $this->repartitionCotisationsBrutesCommunesSyndicatsEtTSE600699;
    }

    public function setRepartitionCotisationsBrutesCommunesSyndicatsEtTSE600699($repartitionCotisationsBrutesCommunesSyndicatsEtTSE600699) {
        $this->repartitionCotisationsBrutesCommunesSyndicatsEtTSE600699 = $repartitionCotisationsBrutesCommunesSyndicatsEtTSE600699;
    }

    public function getRepartitionCotisationsBrutesCommunesSyndicatsEtTSE700799() {
        return $this->repartitionCotisationsBrutesCommunesSyndicatsEtTSE700799;
    }

    public function setRepartitionCotisationsBrutesCommunesSyndicatsEtTSE700799($repartitionCotisationsBrutesCommunesSyndicatsEtTSE700799) {
        $this->repartitionCotisationsBrutesCommunesSyndicatsEtTSE700799 = $repartitionCotisationsBrutesCommunesSyndicatsEtTSE700799;
    }

    public function getRepartitionCotisationsBrutesCommunesSyndicatsEtTSE800899() {
        return $this->repartitionCotisationsBrutesCommunesSyndicatsEtTSE800899;
    }

    public function setRepartitionCotisationsBrutesCommunesSyndicatsEtTSE800899($repartitionCotisationsBrutesCommunesSyndicatsEtTSE800899) {
        $this->repartitionCotisationsBrutesCommunesSyndicatsEtTSE800899 = $repartitionCotisationsBrutesCommunesSyndicatsEtTSE800899;
    }

    public function getRepartitionCotisationsBrutesCommunesSyndicatsEtTSE900999() {
        return $this->repartitionCotisationsBrutesCommunesSyndicatsEtTSE900999;
    }

    public function setRepartitionCotisationsBrutesCommunesSyndicatsEtTSE900999($repartitionCotisationsBrutesCommunesSyndicatsEtTSE900999) {
        $this->repartitionCotisationsBrutesCommunesSyndicatsEtTSE900999 = $repartitionCotisationsBrutesCommunesSyndicatsEtTSE900999;
    }

    public function getRepartitionCotisationsBrutesCommunesSyndicatsEtTSE1000plus() {
        return $this->repartitionCotisationsBrutesCommunesSyndicatsEtTSE1000plus;
    }

    public function setRepartitionCotisationsBrutesCommunesSyndicatsEtTSE1000plus($repartitionCotisationsBrutesCommunesSyndicatsEtTSE1000plus) {
        $this->repartitionCotisationsBrutesCommunesSyndicatsEtTSE1000plus = $repartitionCotisationsBrutesCommunesSyndicatsEtTSE1000plus;
    }

    public function getRepartitionCotisationsBrutesCommunesSyndicatsEtTSETotal() {
        return $this->repartitionCotisationsBrutesCommunesSyndicatsEtTSETotal;
    }

    public function setRepartitionCotisationsBrutesCommunesSyndicatsEtTSETotal($repartitionCotisationsBrutesCommunesSyndicatsEtTSETotal) {
        $this->repartitionCotisationsBrutesCommunesSyndicatsEtTSETotal = $repartitionCotisationsBrutesCommunesSyndicatsEtTSETotal;
    }

    public function getRepartitionCotisationsBrutesICO011() {
        return $this->repartitionCotisationsBrutesICO011;
    }

    public function setRepartitionCotisationsBrutesICO011($repartitionCotisationsBrutesICO011) {
        $this->repartitionCotisationsBrutesICO011 = $repartitionCotisationsBrutesICO011;
    }

    public function getRepartitionCotisationsBrutesICO1299() {
        return $this->repartitionCotisationsBrutesICO1299;
    }

    public function setRepartitionCotisationsBrutesICO1299($repartitionCotisationsBrutesICO1299) {
        $this->repartitionCotisationsBrutesICO1299 = $repartitionCotisationsBrutesICO1299;
    }

    public function getRepartitionCotisationsBrutesICO100199() {
        return $this->repartitionCotisationsBrutesICO100199;
    }

    public function setRepartitionCotisationsBrutesICO100199($repartitionCotisationsBrutesICO100199) {
        $this->repartitionCotisationsBrutesICO100199 = $repartitionCotisationsBrutesICO100199;
    }

    public function getRepartitionCotisationsBrutesICO200299() {
        return $this->repartitionCotisationsBrutesICO200299;
    }

    public function setRepartitionCotisationsBrutesICO200299($repartitionCotisationsBrutesICO200299) {
        $this->repartitionCotisationsBrutesICO200299 = $repartitionCotisationsBrutesICO200299;
    }

    public function getRepartitionCotisationsBrutesICO300399() {
        return $this->repartitionCotisationsBrutesICO300399;
    }

    public function setRepartitionCotisationsBrutesICO300399($repartitionCotisationsBrutesICO300399) {
        $this->repartitionCotisationsBrutesICO300399 = $repartitionCotisationsBrutesICO300399;
    }

    public function getRepartitionCotisationsBrutesICO400499() {
        return $this->repartitionCotisationsBrutesICO400499;
    }

    public function setRepartitionCotisationsBrutesICO400499($repartitionCotisationsBrutesICO400499) {
        $this->repartitionCotisationsBrutesICO400499 = $repartitionCotisationsBrutesICO400499;
    }

    public function getRepartitionCotisationsBrutesICO500599() {
        return $this->repartitionCotisationsBrutesICO500599;
    }

    public function setRepartitionCotisationsBrutesICO500599($repartitionCotisationsBrutesICO500599) {
        $this->repartitionCotisationsBrutesICO500599 = $repartitionCotisationsBrutesICO500599;
    }

    public function getRepartitionCotisationsBrutesICO600699() {
        return $this->repartitionCotisationsBrutesICO600699;
    }

    public function setRepartitionCotisationsBrutesICO600699($repartitionCotisationsBrutesICO600699) {
        $this->repartitionCotisationsBrutesICO600699 = $repartitionCotisationsBrutesICO600699;
    }

    public function getRepartitionCotisationsBrutesICO700799() {
        return $this->repartitionCotisationsBrutesICO700799;
    }

    public function setRepartitionCotisationsBrutesICO700799($repartitionCotisationsBrutesICO700799) {
        $this->repartitionCotisationsBrutesICO700799 = $repartitionCotisationsBrutesICO700799;
    }

    public function getRepartitionCotisationsBrutesICO800899() {
        return $this->repartitionCotisationsBrutesICO800899;
    }

    public function setRepartitionCotisationsBrutesICO800899($repartitionCotisationsBrutesICO800899) {
        $this->repartitionCotisationsBrutesICO800899 = $repartitionCotisationsBrutesICO800899;
    }

    public function getRepartitionCotisationsBrutesICO900999() {
        return $this->repartitionCotisationsBrutesICO900999;
    }

    public function setRepartitionCotisationsBrutesICO900999($repartitionCotisationsBrutesICO900999) {
        $this->repartitionCotisationsBrutesICO900999 = $repartitionCotisationsBrutesICO900999;
    }

    public function getRepartitionCotisationsBrutesICO1000plus() {
        return $this->repartitionCotisationsBrutesICO1000plus;
    }

    public function setRepartitionCotisationsBrutesICO1000plus($repartitionCotisationsBrutesICO1000plus) {
        $this->repartitionCotisationsBrutesICO1000plus = $repartitionCotisationsBrutesICO1000plus;
    }

    public function getRepartitionCotisationsBrutesICOTotal() {
        return $this->repartitionCotisationsBrutesICOTotal;
    }

    public function setRepartitionCotisationsBrutesICOTotal($repartitionCotisationsBrutesICOTotal) {
        $this->repartitionCotisationsBrutesICOTotal = $repartitionCotisationsBrutesICOTotal;
    }

    public function getRepartitionCotisationsBrutesFraisDePrelevement011() {
        return $this->repartitionCotisationsBrutesFraisDePrelevement011;
    }

    public function setRepartitionCotisationsBrutesFraisDePrelevement011($repartitionCotisationsBrutesFraisDePrelevement011) {
        $this->repartitionCotisationsBrutesFraisDePrelevement011 = $repartitionCotisationsBrutesFraisDePrelevement011;
    }

    public function getRepartitionCotisationsBrutesFraisDePrelevement1299() {
        return $this->repartitionCotisationsBrutesFraisDePrelevement1299;
    }

    public function setRepartitionCotisationsBrutesFraisDePrelevement1299($repartitionCotisationsBrutesFraisDePrelevement1299) {
        $this->repartitionCotisationsBrutesFraisDePrelevement1299 = $repartitionCotisationsBrutesFraisDePrelevement1299;
    }

    public function getRepartitionCotisationsBrutesFraisDePrelevement100199() {
        return $this->repartitionCotisationsBrutesFraisDePrelevement100199;
    }

    public function setRepartitionCotisationsBrutesFraisDePrelevement100199($repartitionCotisationsBrutesFraisDePrelevement100199) {
        $this->repartitionCotisationsBrutesFraisDePrelevement100199 = $repartitionCotisationsBrutesFraisDePrelevement100199;
    }

    public function getRepartitionCotisationsBrutesFraisDePrelevement200299() {
        return $this->repartitionCotisationsBrutesFraisDePrelevement200299;
    }

    public function setRepartitionCotisationsBrutesFraisDePrelevement200299($repartitionCotisationsBrutesFraisDePrelevement200299) {
        $this->repartitionCotisationsBrutesFraisDePrelevement200299 = $repartitionCotisationsBrutesFraisDePrelevement200299;
    }

    public function getRepartitionCotisationsBrutesFraisDePrelevement300399() {
        return $this->repartitionCotisationsBrutesFraisDePrelevement300399;
    }

    public function setRepartitionCotisationsBrutesFraisDePrelevement300399($repartitionCotisationsBrutesFraisDePrelevement300399) {
        $this->repartitionCotisationsBrutesFraisDePrelevement300399 = $repartitionCotisationsBrutesFraisDePrelevement300399;
    }

    public function getRepartitionCotisationsBrutesFraisDePrelevement400499() {
        return $this->repartitionCotisationsBrutesFraisDePrelevement400499;
    }

    public function setRepartitionCotisationsBrutesFraisDePrelevement400499($repartitionCotisationsBrutesFraisDePrelevement400499) {
        $this->repartitionCotisationsBrutesFraisDePrelevement400499 = $repartitionCotisationsBrutesFraisDePrelevement400499;
    }

    public function getRepartitionCotisationsBrutesFraisDePrelevement500599() {
        return $this->repartitionCotisationsBrutesFraisDePrelevement500599;
    }

    public function setRepartitionCotisationsBrutesFraisDePrelevement500599($repartitionCotisationsBrutesFraisDePrelevement500599) {
        $this->repartitionCotisationsBrutesFraisDePrelevement500599 = $repartitionCotisationsBrutesFraisDePrelevement500599;
    }

    public function getRepartitionCotisationsBrutesFraisDePrelevement600699() {
        return $this->repartitionCotisationsBrutesFraisDePrelevement600699;
    }

    public function setRepartitionCotisationsBrutesFraisDePrelevement600699($repartitionCotisationsBrutesFraisDePrelevement600699) {
        $this->repartitionCotisationsBrutesFraisDePrelevement600699 = $repartitionCotisationsBrutesFraisDePrelevement600699;
    }

    public function getRepartitionCotisationsBrutesFraisDePrelevement700799() {
        return $this->repartitionCotisationsBrutesFraisDePrelevement700799;
    }

    public function setRepartitionCotisationsBrutesFraisDePrelevement700799($repartitionCotisationsBrutesFraisDePrelevement700799) {
        $this->repartitionCotisationsBrutesFraisDePrelevement700799 = $repartitionCotisationsBrutesFraisDePrelevement700799;
    }

    public function getRepartitionCotisationsBrutesFraisDePrelevement800899() {
        return $this->repartitionCotisationsBrutesFraisDePrelevement800899;
    }

    public function setRepartitionCotisationsBrutesFraisDePrelevement800899($repartitionCotisationsBrutesFraisDePrelevement800899) {
        $this->repartitionCotisationsBrutesFraisDePrelevement800899 = $repartitionCotisationsBrutesFraisDePrelevement800899;
    }

    public function getRepartitionCotisationsBrutesFraisDePrelevement900999() {
        return $this->repartitionCotisationsBrutesFraisDePrelevement900999;
    }

    public function setRepartitionCotisationsBrutesFraisDePrelevement900999($repartitionCotisationsBrutesFraisDePrelevement900999) {
        $this->repartitionCotisationsBrutesFraisDePrelevement900999 = $repartitionCotisationsBrutesFraisDePrelevement900999;
    }

    public function getRepartitionCotisationsBrutesFraisDePrelevement1000plus() {
        return $this->repartitionCotisationsBrutesFraisDePrelevement1000plus;
    }

    public function setRepartitionCotisationsBrutesFraisDePrelevement1000plus($repartitionCotisationsBrutesFraisDePrelevement1000plus) {
        $this->repartitionCotisationsBrutesFraisDePrelevement1000plus = $repartitionCotisationsBrutesFraisDePrelevement1000plus;
    }

    public function getRepartitionCotisationsBrutesFraisDePrelevementTotal() {
        return $this->repartitionCotisationsBrutesFraisDePrelevementTotal;
    }

    public function setRepartitionCotisationsBrutesFraisDePrelevementTotal($repartitionCotisationsBrutesFraisDePrelevementTotal) {
        $this->repartitionCotisationsBrutesFraisDePrelevementTotal = $repartitionCotisationsBrutesFraisDePrelevementTotal;
    }

    public function getTauximpositioncommune() {
        return $this->tauximpositioncommune;
    }

    public function setTauximpositioncommune($tauximpositioncommune) {
        $this->tauximpositioncommune = $tauximpositioncommune;
    }

    public function getCotisationcommunal() {
        return $this->cotisationcommunal;
    }

    public function setCotisationcommunal($cotisationcommunal) {
        $this->cotisationcommunal = $cotisationcommunal;
    }

    public function getCotisationcommunalannee() {
        return $this->cotisationcommunalannee;
    }

    public function setCotisationcommunalannee($cotisationcommunalannee) {
        $this->cotisationcommunalannee = $cotisationcommunalannee;
    }

    public function getBasenetteimposition() {
        return $this->basenetteimposition;
    }

    public function setBasenetteimposition($basenetteimposition) {
        $this->basenetteimposition = $basenetteimposition;
    }

    public function getBasenetteimpositioncommunaleannee() {
        return $this->basenetteimpositioncommunaleannee;
    }

    public function setBasenetteimpositioncommunaleannee($basenetteimpositioncommunaleannee) {
        $this->basenetteimpositioncommunaleannee = $basenetteimpositioncommunaleannee;
    }

    public function getArticleTHabattementgeneralbasecommunale() {
        return $this->articleTHabattementgeneralbasecommunale;
    }

    public function setArticleTHabattementgeneralbasecommunale($articleTHabattementgeneralbasecommunale) {
        $this->articleTHabattementgeneralbasecommunale = $articleTHabattementgeneralbasecommunale;
    }

    public function getArticleTHabattementspecialbasecommunal() {
        return $this->articleTHabattementspecialbasecommunal;
    }

    public function setArticleTHabattementspecialbasecommunal($articleTHabattementspecialbasecommunal) {
        $this->articleTHabattementspecialbasecommunal = $articleTHabattementspecialbasecommunal;
    }

    public function getArticleTHabattementspecialhandicapebasecommunal() {
        return $this->articleTHabattementspecialhandicapebasecommunal;
    }

    public function setArticleTHabattementspecialhandicapebasecommunal($articleTHabattementspecialhandicapebasecommunal) {
        $this->articleTHabattementspecialhandicapebasecommunal = $articleTHabattementspecialhandicapebasecommunal;
    }

    public function getArticleTHabattementpersonneschargecommunal() {
        return $this->articleTHabattementpersonneschargecommunal;
    }

    public function setArticleTHabattementpersonneschargecommunal($articleTHabattementpersonneschargecommunal) {
        $this->articleTHabattementpersonneschargecommunal = $articleTHabattementpersonneschargecommunal;
    }

    public function getNbTHLV() {
        return $this->nbTHLV;
    }

    public function setNbTHLV($nbTHLV) {
        $this->nbTHLV = $nbTHLV;
    }

    public function getNbcontribuablesabattementspecialbase() {
        return $this->nbcontribuablesabattementspecialbase;
    }

    public function setNbcontribuablesabattementspecialbase($nbcontribuablesabattementspecialbase) {
        $this->nbcontribuablesabattementspecialbase = $nbcontribuablesabattementspecialbase;
    }

    public function getNbcontribuablesabattementspecialhandicapebasecommunal() {
        return $this->nbcontribuablesabattementspecialhandicapebasecommunal;
    }

    public function setNbcontribuablesabattementspecialhandicapebasecommunal($nbcontribuablesabattementspecialhandicapebasecommunal) {
        $this->nbcontribuablesabattementspecialhandicapebasecommunal = $nbcontribuablesabattementspecialhandicapebasecommunal;
    }

    public function getSimulationArticleTH() {
        return $this->SimulationArticleTH;
    }

    public function setSimulationArticleTH($SimulationArticleTH) {
        $this->SimulationArticleTH = $SimulationArticleTH;
    }

    public function getVlmCne() {
        return $this->VlmCne;
    }

    public function setVlmCne($VlmCne) {
        $this->VlmCne = $VlmCne;
    }

    public function getVlmICO() {
        return $this->VlmICO;
    }

    public function setVlmICO($VlmICO) {
        $this->VlmICO = $VlmICO;
    }

    public function getVlmTSE() {
        return $this->VlmTSE;
    }

    public function setVlmTSE($VlmTSE) {
        $this->VlmTSE = $VlmTSE;
    }

    public function getAbattementsTH() {
        return $this->abattementsTH;
    }

    public function setAbattementsTH($abattementsTH) {
        $this->abattementsTH = $abattementsTH;
    }

    public function getBaseTH() {
        return $this->baseTH;
    }

    public function setBaseTH($baseTH) {
        $this->baseTH = $baseTH;
    }

    public function getCotisationTH() {
        return $this->cotisationTH;
    }

    public function setCotisationTH($cotisationTH) {
        $this->cotisationTH = $cotisationTH;
    }

    public function getNombreArticlesTHPExonerationDOM() {
        return $this->nombreArticlesTHPExonerationDOM;
    }

    public function setNombreArticlesTHPExonerationDOM($nombreArticlesTHPExonerationDOM) {
        $this->nombreArticlesTHPExonerationDOM = $nombreArticlesTHPExonerationDOM;
    }

    public function getNombreArticlesTHPCommune() {
        return $this->nombreArticlesTHPCommune;
    }

    public function setNombreArticlesTHPCommune($nombreArticlesTHPCommune) {
        $this->nombreArticlesTHPCommune = $nombreArticlesTHPCommune;
    }

    public function getNombreArticlesTHPTSElocalHLMSEM() {
        return $this->nombreArticlesTHPTSElocalHLMSEM;
    }

    public function setNombreArticlesTHPTSElocalHLMSEM($nombreArticlesTHPTSElocalHLMSEM) {
        $this->nombreArticlesTHPTSElocalHLMSEM = $nombreArticlesTHPTSElocalHLMSEM;
    }

    public function getNombreArticlesTHPCotisationsbrutesnulles() {
        return $this->nombreArticlesTHPCotisationsbrutesnulles;
    }

    public function setNombreArticlesTHPCotisationsbrutesnulles($nombreArticlesTHPCotisationsbrutesnulles) {
        $this->nombreArticlesTHPCotisationsbrutesnulles = $nombreArticlesTHPCotisationsbrutesnulles;
    }

    public function getNombreArticlesTHPDegrevementstotaux() {
        return $this->nombreArticlesTHPDegrevementstotaux;
    }

    public function setNombreArticlesTHPDegrevementstotaux($nombreArticlesTHPDegrevementstotaux) {
        $this->nombreArticlesTHPDegrevementstotaux = $nombreArticlesTHPDegrevementstotaux;
    }

    public function getNombreArticlesTHPPlafonnements() {
        return $this->nombreArticlesTHPPlafonnements;
    }

    public function setNombreArticlesTHPPlafonnements($nombreArticlesTHPPlafonnements) {
        $this->nombreArticlesTHPPlafonnements = $nombreArticlesTHPPlafonnements;
    }

    public function getNombreArticlesTHPNonValeurs() {
        return $this->nombreArticlesTHPNonValeurs;
    }

    public function setNombreArticlesTHPNonValeurs($nombreArticlesTHPNonValeurs) {
        $this->nombreArticlesTHPNonValeurs = $nombreArticlesTHPNonValeurs;
    }

    public function getNombreArticlesTHPTotaux() {
        return $this->nombreArticlesTHPTotaux;
    }

    public function setNombreArticlesTHPTotaux($nombreArticlesTHPTotaux) {
        $this->nombreArticlesTHPTotaux = $nombreArticlesTHPTotaux;
    }

    public function getDegrevementsPlafonnementsExonerationDOM() {
        return $this->degrevementsPlafonnementsExonerationDOM;
    }

    public function setDegrevementsPlafonnementsExonerationDOM($degrevementsPlafonnementsExonerationDOM) {
        $this->degrevementsPlafonnementsExonerationDOM = $degrevementsPlafonnementsExonerationDOM;
    }

    public function getDegrevementsPlafonnementsCommune() {
        return $this->degrevementsPlafonnementsCommune;
    }

    public function setDegrevementsPlafonnementsCommune($degrevementsPlafonnementsCommune) {
        $this->degrevementsPlafonnementsCommune = $degrevementsPlafonnementsCommune;
    }

    public function getDegrevementsPlafonnementsTSElocalHLMSEM() {
        return $this->degrevementsPlafonnementsTSElocalHLMSEM;
    }

    public function setDegrevementsPlafonnementsTSElocalHLMSEM($degrevementsPlafonnementsTSElocalHLMSEM) {
        $this->degrevementsPlafonnementsTSElocalHLMSEM = $degrevementsPlafonnementsTSElocalHLMSEM;
    }

    public function getDegrevementsPlafonnementsCotisationsbrutesnulles() {
        return $this->degrevementsPlafonnementsCotisationsbrutesnulles;
    }

    public function setDegrevementsPlafonnementsCotisationsbrutesnulles($degrevementsPlafonnementsCotisationsbrutesnulles) {
        $this->degrevementsPlafonnementsCotisationsbrutesnulles = $degrevementsPlafonnementsCotisationsbrutesnulles;
    }

    public function getDegrevementsPlafonnementsDegrevementstotaux() {
        return $this->degrevementsPlafonnementsDegrevementstotaux;
    }

    public function setDegrevementsPlafonnementsDegrevementstotaux($degrevementsPlafonnementsDegrevementstotaux) {
        $this->degrevementsPlafonnementsDegrevementstotaux = $degrevementsPlafonnementsDegrevementstotaux;
    }

    public function getDegrevementsPlafonnementsPlafonnements() {
        return $this->degrevementsPlafonnementsPlafonnements;
    }

    public function setDegrevementsPlafonnementsPlafonnements($degrevementsPlafonnementsPlafonnements) {
        $this->degrevementsPlafonnementsPlafonnements = $degrevementsPlafonnementsPlafonnements;
    }

    public function getDegrevementsPlafonnementsNonValeurs() {
        return $this->degrevementsPlafonnementsNonValeurs;
    }

    public function setDegrevementsPlafonnementsNonValeurs($degrevementsPlafonnementsNonValeurs) {
        $this->degrevementsPlafonnementsNonValeurs = $degrevementsPlafonnementsNonValeurs;
    }

    public function getDegrevementsPlafonnementsTotaux() {
        return $this->degrevementsPlafonnementsTotaux;
    }

    public function setDegrevementsPlafonnementsTotaux($degrevementsPlafonnementsTotaux) {
        $this->degrevementsPlafonnementsTotaux = $degrevementsPlafonnementsTotaux;
    }

    public function getNonValeursExonerationDOM() {
        return $this->nonValeursExonerationDOM;
    }

    public function setNonValeursExonerationDOM($nonValeursExonerationDOM) {
        $this->nonValeursExonerationDOM = $nonValeursExonerationDOM;
    }

    public function getNonValeursCommune() {
        return $this->nonValeursCommune;
    }

    public function setNonValeursCommune($nonValeursCommune) {
        $this->nonValeursCommune = $nonValeursCommune;
    }

    public function getNonValeursTSElocalHLMSEM() {
        return $this->nonValeursTSElocalHLMSEM;
    }

    public function setNonValeursTSElocalHLMSEM($nonValeursTSElocalHLMSEM) {
        $this->nonValeursTSElocalHLMSEM = $nonValeursTSElocalHLMSEM;
    }

    public function getNonValeursCotisationsbrutesnulles() {
        return $this->nonValeursCotisationsbrutesnulles;
    }

    public function setNonValeursCotisationsbrutesnulles($nonValeursCotisationsbrutesnulles) {
        $this->nonValeursCotisationsbrutesnulles = $nonValeursCotisationsbrutesnulles;
    }

    public function getNonValeursDegrevementstotaux() {
        return $this->nonValeursDegrevementstotaux;
    }

    public function setNonValeursDegrevementstotaux($nonValeursDegrevementstotaux) {
        $this->nonValeursDegrevementstotaux = $nonValeursDegrevementstotaux;
    }

    public function getNonValeursPlafonnements() {
        return $this->nonValeursPlafonnements;
    }

    public function setNonValeursPlafonnements($nonValeursPlafonnements) {
        $this->nonValeursPlafonnements = $nonValeursPlafonnements;
    }

    public function getNonValeursNonValeurs() {
        return $this->nonValeursNonValeurs;
    }

    public function setNonValeursNonValeurs($nonValeursNonValeurs) {
        $this->nonValeursNonValeurs = $nonValeursNonValeurs;
    }

    public function getNonValeursTotaux() {
        return $this->nonValeursTotaux;
    }

    public function setNonValeursTotaux($nonValeursTotaux) {
        $this->nonValeursTotaux = $nonValeursTotaux;
    }

    public function getBasesNettesReductionsExonerationDOM() {
        return $this->basesNettesReductionsExonerationDOM;
    }

    public function setBasesNettesReductionsExonerationDOM($basesNettesReductionsExonerationDOM) {
        $this->basesNettesReductionsExonerationDOM = $basesNettesReductionsExonerationDOM;
    }

    public function getBasesNettesReductionsCommune() {
        return $this->basesNettesReductionsCommune;
    }

    public function setBasesNettesReductionsCommune($basesNettesReductionsCommune) {
        $this->basesNettesReductionsCommune = $basesNettesReductionsCommune;
    }

    public function getBasesNettesReductionsICO() {
        return $this->basesNettesReductionsICO;
    }

    public function setBasesNettesReductionsICO($basesNettesReductionsICO) {
        $this->basesNettesReductionsICO = $basesNettesReductionsICO;
    }

    public function getBasesNettesReductionsTSElocalHLMSEM() {
        return $this->basesNettesReductionsTSElocalHLMSEM;
    }

    public function setBasesNettesReductionsTSElocalHLMSEM($basesNettesReductionsTSElocalHLMSEM) {
        $this->basesNettesReductionsTSElocalHLMSEM = $basesNettesReductionsTSElocalHLMSEM;
    }

    public function getBasesNettesReductionsCotisationsbrutesnulles() {
        return $this->basesNettesReductionsCotisationsbrutesnulles;
    }

    public function setBasesNettesReductionsCotisationsbrutesnulles($basesNettesReductionsCotisationsbrutesnulles) {
        $this->basesNettesReductionsCotisationsbrutesnulles = $basesNettesReductionsCotisationsbrutesnulles;
    }

    public function getBasesNettesReductionsDegrevementstotaux() {
        return $this->basesNettesReductionsDegrevementstotaux;
    }

    public function setBasesNettesReductionsDegrevementstotaux($basesNettesReductionsDegrevementstotaux) {
        $this->basesNettesReductionsDegrevementstotaux = $basesNettesReductionsDegrevementstotaux;
    }

    public function getBasesNettesReductionsPlafonnements() {
        return $this->basesNettesReductionsPlafonnements;
    }

    public function setBasesNettesReductionsPlafonnements($basesNettesReductionsPlafonnements) {
        $this->basesNettesReductionsPlafonnements = $basesNettesReductionsPlafonnements;
    }

    public function getBasesNettesReductionsNonValeurs() {
        return $this->basesNettesReductionsNonValeurs;
    }

    public function setBasesNettesReductionsNonValeurs($basesNettesReductionsNonValeurs) {
        $this->basesNettesReductionsNonValeurs = $basesNettesReductionsNonValeurs;
    }

    public function getBasesNettesReductionsTotaux() {
        return $this->basesNettesReductionsTotaux;
    }

    public function setBasesNettesReductionsTotaux($basesNettesReductionsTotaux) {
        $this->basesNettesReductionsTotaux = $basesNettesReductionsTotaux;
    }

    public function getArticlesImposes() {
        return $this->articlesImposes;
    }

    public function setArticlesImposes($articlesImposes) {
        $this->articlesImposes = $articlesImposes;
    }

    public function getArticlesExoneres() {
        return $this->articlesExoneres;
    }

    public function setArticlesExoneres($articlesExoneres) {
        $this->articlesExoneres = $articlesExoneres;
    }

    public function getVlnCommune() {
        return $this->vlnCommune;
    }

    public function setVlnCommune($vlnCommune) {
        $this->vlnCommune = $vlnCommune;
    }

    public function getVlnICo() {
        return $this->vlnICo;
    }

    public function setVlnICo($vlnICo) {
        $this->vlnICo = $vlnICo;
    }

    public function getDelivranceAvisimposition() {
        return $this->delivranceAvisimposition;
    }

    public function setDelivranceAvisimposition($delivranceAvisimposition) {
        $this->delivranceAvisimposition = $delivranceAvisimposition;
    }

    public function getLcxSusceptibleExonereTSE() {
        return $this->lcxSusceptibleExonereTSE;
    }

    public function setLcxSusceptibleExonereTSE($lcxSusceptibleExonereTSE) {
        $this->lcxSusceptibleExonereTSE = $lcxSusceptibleExonereTSE;
    }

    public function getTauxImpositionSyndicatsDeCommunes() {
        return $this->tauxImpositionSyndicatsDeCommunes;
    }

    public function setTauxImpositionSyndicatsDeCommunes($tauxImpositionSyndicatsDeCommunes) {
        $this->tauxImpositionSyndicatsDeCommunes = $tauxImpositionSyndicatsDeCommunes;
    }

    public function getTauxImpositionTSEGP() {
        return $this->tauxImpositionTSEGP;
    }

    public function setTauxImpositionTSEGP($tauxImpositionTSEGP) {
        $this->tauxImpositionTSEGP = $tauxImpositionTSEGP;
    }

    public function getTauxImpositionPrelt1() {
        return $this->tauxImpositionPrelt1;
    }

    public function setTauxImpositionPrelt1($tauxImpositionPrelt1) {
        $this->tauxImpositionPrelt1 = $tauxImpositionPrelt1;
    }

    public function getTauxImpositionPrelt2() {
        return $this->tauxImpositionPrelt2;
    }

    public function setTauxImpositionPrelt2($tauxImpositionPrelt2) {
        $this->tauxImpositionPrelt2 = $tauxImpositionPrelt2;
    }

    public function getTauxImpositionPrelt3() {
        return $this->tauxImpositionPrelt3;
    }

    public function setTauxImpositionPrelt3($tauxImpositionPrelt3) {
        $this->tauxImpositionPrelt3 = $tauxImpositionPrelt3;
    }

    public function getTauxImpositionPreltSupplementaireTHS() {
        return $this->tauxImpositionPreltSupplementaireTHS;
    }

    public function setTauxImpositionPreltSupplementaireTHS($tauxImpositionPreltSupplementaireTHS) {
        $this->tauxImpositionPreltSupplementaireTHS = $tauxImpositionPreltSupplementaireTHS;
    }

    public function getTauxImpositionAnneePrecedenteCommune() {
        return $this->tauxImpositionAnneePrecedenteCommune;
    }

    public function setTauxImpositionAnneePrecedenteCommune($tauxImpositionAnneePrecedenteCommune) {
        $this->tauxImpositionAnneePrecedenteCommune = $tauxImpositionAnneePrecedenteCommune;
    }

    public function getTauxImpositionAnneePrecedenteICO() {
        return $this->tauxImpositionAnneePrecedenteICO;
    }

    public function setTauxImpositionAnneePrecedenteICO($tauxImpositionAnneePrecedenteICO) {
        $this->tauxImpositionAnneePrecedenteICO = $tauxImpositionAnneePrecedenteICO;
    }

    public function getTauxImpositionAnneePrecedenteSyndicatsDeCommunes() {
        return $this->tauxImpositionAnneePrecedenteSyndicatsDeCommunes;
    }

    public function setTauxImpositionAnneePrecedenteSyndicatsDeCommunes($tauxImpositionAnneePrecedenteSyndicatsDeCommunes) {
        $this->tauxImpositionAnneePrecedenteSyndicatsDeCommunes = $tauxImpositionAnneePrecedenteSyndicatsDeCommunes;
    }

    public function getNombreArticlesTHFraisTHPTHE() {
        return $this->nombreArticlesTHFraisTHPTHE;
    }

    public function setNombreArticlesTHFraisTHPTHE($nombreArticlesTHFraisTHPTHE) {
        $this->nombreArticlesTHFraisTHPTHE = $nombreArticlesTHFraisTHPTHE;
    }

    public function getNombreArticlesTHFraisTHS() {
        return $this->nombreArticlesTHFraisTHS;
    }

    public function setNombreArticlesTHFraisTHS($nombreArticlesTHFraisTHS) {
        $this->nombreArticlesTHFraisTHS = $nombreArticlesTHFraisTHS;
    }

    public function getNombreArticlesTHPrelt1() {
        return $this->nombreArticlesTHPrelt1;
    }

    public function setNombreArticlesTHPrelt1($nombreArticlesTHPrelt1) {
        $this->nombreArticlesTHPrelt1 = $nombreArticlesTHPrelt1;
    }

    public function getNombreArticlesTHPrelt2() {
        return $this->nombreArticlesTHPrelt2;
    }

    public function setNombreArticlesTHPrelt2($nombreArticlesTHPrelt2) {
        $this->nombreArticlesTHPrelt2 = $nombreArticlesTHPrelt2;
    }

    public function getNombreArticlesTHPrelt3() {
        return $this->nombreArticlesTHPrelt3;
    }

    public function setNombreArticlesTHPrelt3($nombreArticlesTHPrelt3) {
        $this->nombreArticlesTHPrelt3 = $nombreArticlesTHPrelt3;
    }

    public function getNombreArticlesTHPreltSupplementaireTHS() {
        return $this->nombreArticlesTHPreltSupplementaireTHS;
    }

    public function setNombreArticlesTHPreltSupplementaireTHS($nombreArticlesTHPreltSupplementaireTHS) {
        $this->nombreArticlesTHPreltSupplementaireTHS = $nombreArticlesTHPreltSupplementaireTHS;
    }

    public function getNombreArticlesTHTotal() {
        return $this->nombreArticlesTHTotal;
    }

    public function setNombreArticlesTHTotal($nombreArticlesTHTotal) {
        $this->nombreArticlesTHTotal = $nombreArticlesTHTotal;
    }

    public function getMontantReelTHCommune() {
        return $this->montantReelTHCommune;
    }

    public function setMontantReelTHCommune($montantReelTHCommune) {
        $this->montantReelTHCommune = $montantReelTHCommune;
    }

    public function getMontantReelTHICO() {
        return $this->montantReelTHICO;
    }

    public function setMontantReelTHICO($montantReelTHICO) {
        $this->montantReelTHICO = $montantReelTHICO;
    }

    public function getMontantReelTHTSE() {
        return $this->montantReelTHTSE;
    }

    public function setMontantReelTHTSE($montantReelTHTSE) {
        $this->montantReelTHTSE = $montantReelTHTSE;
    }

    public function getMontantReelTHTSEGP() {
        return $this->montantReelTHTSEGP;
    }

    public function setMontantReelTHTSEGP($montantReelTHTSEGP) {
        $this->montantReelTHTSEGP = $montantReelTHTSEGP;
    }

    public function getMontantReelTHFraisTHS() {
        return $this->montantReelTHFraisTHS;
    }

    public function setMontantReelTHFraisTHS($montantReelTHFraisTHS) {
        $this->montantReelTHFraisTHS = $montantReelTHFraisTHS;
    }

    public function getMontantReelTHPrelt1() {
        return $this->montantReelTHPrelt1;
    }

    public function setMontantReelTHPrelt1($montantReelTHPrelt1) {
        $this->montantReelTHPrelt1 = $montantReelTHPrelt1;
    }

    public function getMontantReelTHPrelt2() {
        return $this->montantReelTHPrelt2;
    }

    public function setMontantReelTHPrelt2($montantReelTHPrelt2) {
        $this->montantReelTHPrelt2 = $montantReelTHPrelt2;
    }

    public function getMontantReelTHPrelt3() {
        return $this->montantReelTHPrelt3;
    }

    public function setMontantReelTHPrelt3($montantReelTHPrelt3) {
        $this->montantReelTHPrelt3 = $montantReelTHPrelt3;
    }

    public function getMontantReelTHPreltSupplementaireTHS() {
        return $this->montantReelTHPreltSupplementaireTHS;
    }

    public function setMontantReelTHPreltSupplementaireTHS($montantReelTHPreltSupplementaireTHS) {
        $this->montantReelTHPreltSupplementaireTHS = $montantReelTHPreltSupplementaireTHS;
    }

    public function getMontantReelTHTotal() {
        return $this->montantReelTHTotal;
    }

    public function setMontantReelTHTotal($montantReelTHTotal) {
        $this->montantReelTHTotal = $montantReelTHTotal;
    }

    public function getNombreArticlesTHLVFrais8pourcent() {
        return $this->nombreArticlesTHLVFrais8pourcent;
    }

    public function setNombreArticlesTHLVFrais8pourcent($nombreArticlesTHLVFrais8pourcent) {
        $this->nombreArticlesTHLVFrais8pourcent = $nombreArticlesTHLVFrais8pourcent;
    }

    public function getNombreArticlesTHLVTotal() {
        return $this->nombreArticlesTHLVTotal;
    }

    public function setNombreArticlesTHLVTotal($nombreArticlesTHLVTotal) {
        $this->nombreArticlesTHLVTotal = $nombreArticlesTHLVTotal;
    }

    public function getMontantReelTHLVCommune() {
        return $this->montantReelTHLVCommune;
    }

    public function setMontantReelTHLVCommune($montantReelTHLVCommune) {
        $this->montantReelTHLVCommune = $montantReelTHLVCommune;
    }

    public function getMontantReelTHLVFrais8pourcent() {
        return $this->montantReelTHLVFrais8pourcent;
    }

    public function setMontantReelTHLVFrais8pourcent($montantReelTHLVFrais8pourcent) {
        $this->montantReelTHLVFrais8pourcent = $montantReelTHLVFrais8pourcent;
    }

    public function getMontantReelTHLVTotal() {
        return $this->montantReelTHLVTotal;
    }

    public function setMontantReelTHLVTotal($montantReelTHLVTotal) {
        $this->montantReelTHLVTotal = $montantReelTHLVTotal;
    }

    public function getMontantNetTHTHLVCommune() {
        return $this->montantNetTHTHLVCommune;
    }

    public function setMontantNetTHTHLVCommune($montantNetTHTHLVCommune) {
        $this->montantNetTHTHLVCommune = $montantNetTHTHLVCommune;
    }

    public function getMontantNetTHTHLVICO() {
        return $this->montantNetTHTHLVICO;
    }

    public function setMontantNetTHTHLVICO($montantNetTHTHLVICO) {
        $this->montantNetTHTHLVICO = $montantNetTHTHLVICO;
    }

    public function getMontantNetTHTHLVTSE() {
        return $this->montantNetTHTHLVTSE;
    }

    public function setMontantNetTHTHLVTSE($montantNetTHTHLVTSE) {
        $this->montantNetTHTHLVTSE = $montantNetTHTHLVTSE;
    }

}

