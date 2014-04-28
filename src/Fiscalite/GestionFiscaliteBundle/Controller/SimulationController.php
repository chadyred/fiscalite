<?php

namespace Fiscalite\GestionFiscaliteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Fiscalite\GestionFiscaliteBundle\Entity\Fichier;
use Fiscalite\GestionFiscaliteBundle\Entity\Article;
use Fiscalite\GestionFiscaliteBundle\Entity\Base;
use Fiscalite\GestionFiscaliteBundle\Form\BaseType;
use Fiscalite\GestionFiscaliteBundle\Entity\SimulationArticleTH;
use Fiscalite\GestionFiscaliteBundle\Form\SimulationArticleTHType;
use Fiscalite\GestionFiscaliteBundle\Entity\ArticleTH;
use Fiscalite\GestionFiscaliteBundle\Entity\ArticleTHRepository;
use Fiscalite\GestionFiscaliteBundle\Entity\ArticleTF;
use Fiscalite\GestionFiscaliteBundle\Entity\ArticleTFRepository;
use Fiscalite\GestionFiscaliteBundle\Entity\ArticleCommune;
use Fiscalite\GestionFiscaliteBundle\Entity\Simulation;
use Fiscalite\GestionFiscaliteBundle\Entity\Abattement;
use Fiscalite\GestionFiscaliteBundle\Entity\SimulationArticleTF;
use Fiscalite\GestionFiscaliteBundle\Form\SimulationArticleTFType;
use Fiscalite\GestionFiscaliteBundle\Entity\SimulationTF;
use Symfony\Component\HttpFoundation\Response;
use Ps\PdfBundle\Annotation\Pdf;
use PHPPdf\Autoloader;
use PHPPdf\Core\FacadeBuilder;
use PHPPdf\DataSource\DataSource;

class SimulationController extends Controller {

    public function simulationTHAction() {
        $nom = NULL;
        $prenom = NULL;
        $list_articleTH = NULL;
        $simulationTH = new SimulationArticleTH;
        $form = $this->createForm(new SimulationArticleTHType, $simulationTH);
        if ($this->getRequest()->isMethod('POST')) {
            $form->bind($this->getRequest());
            if ($form->isValid()) {
                $nomSimulation = $form->get('nomSimulation')->getData();
                $abattementgeneralbasecommunale = $form->get('abattementgeneralbasecommunale')->getData();
                $abattementpersonneschargecommunal12 = $form->get('abattementpersonneschargecommunal12')->getData();
                $abattementpersonneschargecommunal3 = $form->get('abattementpersonneschargecommunal3')->getData();
                $abattementspecialbasecommunal = $form->get('abattementspecialbasecommunal')->getData();
                $abattementspecialhandicapebasecommunal = $form->get('abattementspecialhandicapebasecommunal')->getData();
                $tauximpositioncommune = $form->get('tauximpositioncommune')->getData();
                $nom = $form->get('nom')->getData();
                $prenom = $form->get('prenom')->getData();
                $simulationTH->newSimulationArticleTH($nomSimulation, $abattementgeneralbasecommunale, $abattementpersonneschargecommunal12, $abattementpersonneschargecommunal3, $abattementspecialbasecommunal, $abattementspecialhandicapebasecommunal, $tauximpositioncommune, $nom, $prenom);
                $em = $this->getDoctrine()->getManager();
                $em->persist($simulationTH);
                $em->flush();
                return $this->redirect($this->generateUrl('resultatTH', array('id' => $simulationTH->getId())));
            }
        }

        return $this->render('FiscaliteGestionFiscaliteBundle:Simulation:simulationTH.html.twig', array('form' => $form->createView()));
    }

    public function resultatTHAction($id) {
        $repository = $this->getDoctrine()->getManager()->getRepository('FiscaliteGestionFiscaliteBundle:SimulationArticleTH');
        $SimulationArticleTH = $repository->findOneBy(array('id' => $id));
        $repository = $this->getDoctrine()->getManager()->getRepository('FiscaliteGestionFiscaliteBundle:Fichier');
        $annee=$repository->getLastYearTH();
        $repository = $this->getDoctrine()->getManager()->getRepository('FiscaliteGestionFiscaliteBundle:ArticleTH');
        $list_articleTH = $repository->searchListTHSimulation($SimulationArticleTH->getNom(), $SimulationArticleTH->getPrenom(),"".$annee[0]->getAnneetaxation());
        if ($list_articleTH != NULL) {
            $repository = $this->getDoctrine()->getManager()->getRepository('FiscaliteGestionFiscaliteBundle:ArticleCommune');
            $articleCommuneTH = $repository->findOneBy(array('fichier' => $list_articleTH[0]->getFichier()->getId()));
            $repository = $this->getDoctrine()->getManager()->getRepository('FiscaliteGestionFiscaliteBundle:THArticleCommuneIFPA3');
            $THarticleCommuneIFPA3 = $repository->findOneBy(array('fichier' => $list_articleTH[0]->getFichier()->getId()));
        }
        $simulation = new Simulation();
        // TABLEAU 2
        $simulation->setVlmCne($articleCommuneTH->getVlmCne());
        $simulation->setVlmICO($articleCommuneTH->getVlmICO());
        $simulation->setVlmTSE($articleCommuneTH->getVlmCne());
        $simulation->setVlmCneRetenueAbat($simulation->getVlmCne());
        $simulation->setVlmICORetenueAbat($simulation->getVlmICO());
        $simulation->setTauxImpositionICO($articleCommuneTH->getTauxImpositionIntercommunalite());
        $simulation->setTauxImpositionTSE($articleCommuneTH->getTauxImpositionTSE());
        $simulation->setSimulationArticleTH($SimulationArticleTH);
        $simulation->setArticleCommuneTH($articleCommuneTH);
        ///TABLEAU 3 ////
        $simulation->setQuotiteAbattementGeneralBaseCommuneSansAjustement(round($simulation->getSimulationArticleTH()->getAbattementgeneralbasecommunale() * $simulation->getVlmCne() / 100, 0));
        $simulation->setQuotiteAbattementGeneralBaseCommuneAvecAjustement(0);
        $simulation->setQuotiteAbattementPAC1CommuneSansAjustement(round($simulation->getQuotiteAbattementGeneralBaseCommuneSansAjustement() + $simulation->getSimulationArticleTH()->getAbattementpersonneschargecommunal12() * $simulation->getVlmCne() / 100, 0));
        $simulation->setQuotiteAbattementPAC1CommuneAvecAjustement(0);
        $simulation->setQuotiteAbattementPAC2CommuneSansAjustement(round($simulation->getQuotiteAbattementPAC1CommuneSansAjustement() + $simulation->getSimulationArticleTH()->getAbattementpersonneschargecommunal12() * $simulation->getVlmCne() / 100, 0));
        $simulation->setQuotiteAbattementPAC2CommuneAvecAjustement(0);
        $simulation->setQuotiteAbattementPAC3CommuneSansAjustement(round($simulation->getQuotiteAbattementPAC2CommuneSansAjustement() + $simulation->getSimulationArticleTH()->getAbattementpersonneschargecommunal3() * $simulation->getVlmCne() / 100, 0));
        $simulation->setQuotiteAbattementPAC3CommuneAvecAjustement(0);
        $simulation->setQuotiteAbattementPAC4SuppCommuneSansAjustement(round($simulation->getSimulationArticleTH()->getAbattementpersonneschargecommunal3() * $simulation->getVlmCne() / 100, 0));
        $simulation->setQuotiteAbattementPAC4SuppCommuneAvecAjustement(0);
        $simulation->setQuotiteAbattementSpecialBaseCommuneSansAjustement(round($simulation->getSimulationArticleTH()->getAbattementspecialbasecommunal() * $simulation->getVlmCne() / 100, 0));
        $simulation->setQuotiteAbattementSpecialBaseCommuneAvecAjustement(0);
        $simulation->setQuotiteAbattementSpecialHandicapeCommuneSansAjustement(round($simulation->getSimulationArticleTH()->getAbattementspecialhandicapebasecommunal() * $simulation->getVlmCne() / 100, 0));
        $simulation->setQuotiteAbattementSpecialHandicapeCommuneAvecAjustement(0);

//        print('<br/><br/><br/><div class="row">
//                        <div class="content-tab col-sm-12 col-md-10  col-lg-10 col-md-offset-1">');
//        print ('<table class="table table-striped table-hover"> <tr>
//                    <th>Num Sequentiel</th>
//                    <th>Nom et Prenom</th>
//                    <th>Valeur Locative Brute</th>
//                    <th>Abattements general a la base en simulation</th>
//                    <th>Abattements pers a charge à la base simulé</th>
//                    <th>Abattements general a la base en bdd</th>
//                    <th>Nom et Prenom</th>
//                    <th>Valeur Locative Brute</th>
//                    <th>simulation abattement general communal</th>
//                    <th>simulation abattement pers à charge</th>
//                    <th>Code TAX</th>
//                    <th>Code Role</th>
//                    <th>Nb pers à charge</th>
//                    <th>abgc</th>
//                    <th>Code Role</th>
//                    <th>abgc</th>
//                    </tr>');
        foreach ($list_articleTH as $articleTH) {

            $articleTH->setTotalCalculSimulationAbattementCommunal($simulation);
            $articleTH->getRepartitionRole($simulation);
            $articleTH->getCotisation()->getRepartitionNombreArticlesDuRole($simulation);
            $articleTH->setTableauTH1($simulation);
            $articleTH->setTableauTH2($simulation);
            $articleTH->setTableauTH7($simulation);
            $articleTH->setTableauTH8($simulation);
            $articleTH->setTableauTH9($simulation);
        }
//        print ('</table></div></div>');
        return $this->render('FiscaliteGestionFiscaliteBundle:Simulation:resultatTH.html.twig', array('simulation' => $simulation, 'THarticleCommuneIFPA3' => $THarticleCommuneIFPA3, 'articleCommuneTH' => $articleCommuneTH));
    }

    public function setSimulation($simulation, $articleTH, $articleCommuneTH) {

        return $simulation;
    }

    public function simulationTFAction() {
        $nom = NULL;
        $prenom = NULL;
        $list_articleTF = NULL;
        $simulationTF = new SimulationArticleTF;
        $form = $this->createForm(new SimulationArticleTFType, $simulationTF);
        if ($this->getRequest()->isMethod('POST')) {
            $form->bind($this->getRequest());
            if ($form->isValid()) {
                $nomSimulation = $form->get('nomSimulation')->getData();
                $tauxBatiCommune = $form->get('tauxBatiCommune')->getData();
                $tauxNonBatiCommune = $form->get('tauxNonBatiCommune')->getData();
                $nom = $form->get('nom')->getData();
                $simulationTF->newSimulationArticleTF($nomSimulation, $tauxBatiCommune, $tauxNonBatiCommune, $nom);
                $em = $this->getDoctrine()->getManager();
                $em->persist($simulationTF);
                $em->flush();
                return $this->redirect($this->generateUrl('resultatTF', array('id' => $simulationTF->getId())));
            }
        }

        return $this->render('FiscaliteGestionFiscaliteBundle:Simulation:simulationTF.html.twig', array('form' => $form->createView()));
    }

    public function resultatTFAction($id) {
        $repository = $this->getDoctrine()->getManager()->getRepository('FiscaliteGestionFiscaliteBundle:SimulationArticleTF');
        $SimulationArticleTF = $repository->findOneBy(array('id' => $id));
        $repository = $this->getDoctrine()->getManager()->getRepository('FiscaliteGestionFiscaliteBundle:Fichier');
        $annee=$repository->getLastYear();
        $repository = $this->getDoctrine()->getManager()->getRepository('FiscaliteGestionFiscaliteBundle:ArticleTF');
        $list_articleTF = $repository->searchListTFSimulation($SimulationArticleTF->getNom(),"".$annee[0]->getAnneeTaxation());
        if ($list_articleTF != NULL) {
            $repository = $this->getDoctrine()->getManager()->getRepository('FiscaliteGestionFiscaliteBundle:TFArticleCommuneEnTete');
            $TFArticleCommuneEnTete = $repository->findOneBy(array('fichier' => $list_articleTF[0]->getFichier()->getId()));
            $repository = $this->getDoctrine()->getManager()->getRepository('FiscaliteGestionFiscaliteBundle:TFArticleCommuneIFP');
            $TFArticleCommuneIFP = $repository->findOneBy(array('fichier' => $list_articleTF[0]->getFichier()->getId()));
            $repository = $this->getDoctrine()->getManager()->getRepository('FiscaliteGestionFiscaliteBundle:TFArticleCommuneSRA2');
            $TFArticleCommuneSRA2 = $repository->findOneBy(array('fichier' => $list_articleTF[0]->getFichier()->getId()));
            $repository = $this->getDoctrine()->getManager()->getRepository('FiscaliteGestionFiscaliteBundle:TFArticleCommuneSRA3');
            $TFArticleCommuneSRA3 = $repository->findOneBy(array('fichier' => $list_articleTF[0]->getFichier()->getId()));
        }
        $simulation = new SimulationTF();
        $simulation->setSimulationArticleTF($SimulationArticleTF);
        $simulation->setArticleCommuneIFP($TFArticleCommuneIFP);
        $simulation->setArticleCommuneEnTete($TFArticleCommuneEnTete);
        $simulation->setArticleCommuneSRA2($TFArticleCommuneSRA2);
        $simulation->setArticleCommuneSRA3($TFArticleCommuneSRA3);
        $em = $this->getDoctrine()->getManager();
        foreach ($list_articleTF as $articleTF) {
            $articleTF->setTableauTF2($simulation);
            $articleTF->setTableauTF7($simulation);
            $articleTF->setTableauTF8($simulation);
            $articleTF->setTableauTF6($simulation);
            $em->detach($articleTF);
        }
        $articleTF->setTableauTF2Taux($simulation);
        $articleTF->setTableauTF5($simulation);
        $articleTF->setTableauTF5bis($simulation);



        return $this->render('FiscaliteGestionFiscaliteBundle:Simulation:resultatTF.html.twig', array('simulation' => $simulation, 'id' => $id));
    }

    public function simulationarticletfcsvAction($id) {
        $repository = $this->getDoctrine()->getManager()->getRepository('FiscaliteGestionFiscaliteBundle:SimulationArticleTF');
        $SimulationArticleTF = $repository->findOneBy(array('id' => $id));
        $repository = $this->getDoctrine()->getManager()->getRepository('FiscaliteGestionFiscaliteBundle:Fichier');
        $annee=$repository->getLastYear();
        $repository = $this->getDoctrine()->getManager()->getRepository('FiscaliteGestionFiscaliteBundle:ArticleTF');
        $list_articleTF = $repository->searchListTFSimulation($SimulationArticleTF->getNom(),"".$annee[0]->getAnneeTaxation());
        if ($list_articleTF != NULL) {
            $repository = $this->getDoctrine()->getManager()->getRepository('FiscaliteGestionFiscaliteBundle:TFArticleCommuneEnTete');
            $TFArticleCommuneEnTete = $repository->findOneBy(array('fichier' => $list_articleTF[0]->getFichier()->getId()));
            $repository = $this->getDoctrine()->getManager()->getRepository('FiscaliteGestionFiscaliteBundle:TFArticleCommuneIFP');
            $TFArticleCommuneIFP = $repository->findOneBy(array('fichier' => $list_articleTF[0]->getFichier()->getId()));
            $repository = $this->getDoctrine()->getManager()->getRepository('FiscaliteGestionFiscaliteBundle:TFArticleCommuneSRA2');
            $TFArticleCommuneSRA2 = $repository->findOneBy(array('fichier' => $list_articleTF[0]->getFichier()->getId()));
            $repository = $this->getDoctrine()->getManager()->getRepository('FiscaliteGestionFiscaliteBundle:TFArticleCommuneSRA3');
            $TFArticleCommuneSRA3 = $repository->findOneBy(array('fichier' => $list_articleTF[0]->getFichier()->getId()));
        }
        $simulation = new SimulationTF();
        $simulation->setSimulationArticleTF($SimulationArticleTF);
        $simulation->setArticleCommuneIFP($TFArticleCommuneIFP);
        $simulation->setArticleCommuneEnTete($TFArticleCommuneEnTete);
        $simulation->setArticleCommuneSRA2($TFArticleCommuneSRA2);
        $simulation->setArticleCommuneSRA3($TFArticleCommuneSRA3);
        $em = $this->getDoctrine()->getManager();
        $handle = fopen('php://memory', 'r+');
        $header = array();
        fputcsv($handle, array('Bâti', 'Numéro séquentiel', 'Titre et désignation', 'Base nette en base de données', 'Cotisation commune en base de données', 'Cotisation commune simulé'));
        $totalbasebdd = 0;
        $totalcotisationCbdd = 0;
        $totalcotisationCsimulation = 0;
        foreach ($list_articleTF as $articleTF) {
            foreach ($articleTF->getTfarticletaxationbatis() as $articletaxationbatis) {
                $basebdd = 0;
                $cotisationCbdd = 0;
                $cotisationCsimulation = 0;
                $basebdd +=$articletaxationbatis->getBaseC();
                $cotisationCbdd +=$articletaxationbatis->getCotisationC();
                $cotisationCsimulation +=round($articletaxationbatis->getBaseC() * $simulation->getSimulationArticleTF()->getTauxBatiCommune() / 100);
                $totalbasebdd +=$basebdd;
                $totalcotisationCbdd +=$cotisationCbdd;
                $totalcotisationCsimulation+=$cotisationCsimulation;
                $em->detach($articletaxationbatis);
            }
            fputcsv($handle, array('', $articleTF->getNumerosequentiel(),
                $articleTF->getTitreEtDesignation(), $basebdd,
                $cotisationCbdd, $cotisationCsimulation));
            $em->detach($articleTF);
        }
        fputcsv($handle, array('Total', '', '', $totalbasebdd, $totalcotisationCbdd, $totalcotisationCsimulation));
        fputcsv($handle, array('Non Bâti', 'Numéro séquentiel', 'Titre et désignation', 'Base nette en base de données', 'Cotisation commune en base de données', 'Cotisation commune simulé'));
        $totalbasebdd = 0;
        $totalcotisationCbdd = 0;
        $totalcotisationCsimulation = 0;
        foreach ($list_articleTF as $articleTF) {
            foreach ($articleTF->getTfarticletaxationnonbatis() as $articletaxationnonbatis) {
                $basebdd = 0;
                $cotisationCbdd = 0;
                $cotisationCsimulation = 0;
                $basebdd +=$articletaxationnonbatis->getBaseC() + $articletaxationnonbatis->getBaseImposableTACetSyndicat();
                $cotisationCbdd +=$articletaxationnonbatis->getCotisationC();
                $cotisationCsimulation +=round(($articletaxationnonbatis->getBaseC() + $articletaxationnonbatis->getBaseImposableTACetSyndicat()) * $simulation->getSimulationArticleTF()->getTauxNonBatiCommune() / 100);
                $totalbasebdd +=$basebdd;
                $totalcotisationCbdd +=$cotisationCbdd;
                $totalcotisationCsimulation+=$cotisationCsimulation;
                $em->detach($articletaxationnonbatis);
            }
            fputcsv($handle, array('', $articleTF->getNumerosequentiel(),
                $articleTF->getTitreEtDesignation(), $basebdd,
                $cotisationCbdd, $cotisationCsimulation));
            $em->detach($articleTF);
        }
        fputcsv($handle, array('Total', '', '', $totalbasebdd, $totalcotisationCbdd, $totalcotisationCsimulation));
        rewind($handle);
        $content = stream_get_contents($handle);
        fclose($handle);

        return new Response($content, 200, array(
            'Content-Type' => 'application/force-download',
            'Content-Disposition' => 'attachment; filename="simulationtaxefonciere.csv"'
        ));
    }

    public function simulationarticletfpdfAction($id) {
        $repository = $this->getDoctrine()->getManager()->getRepository('FiscaliteGestionFiscaliteBundle:SimulationArticleTF');
        $SimulationArticleTF = $repository->findOneBy(array('id' => $id));
        $repository = $this->getDoctrine()->getManager()->getRepository('FiscaliteGestionFiscaliteBundle:Fichier');
        $annee=$repository->getLastYear();
        $repository = $this->getDoctrine()->getManager()->getRepository('FiscaliteGestionFiscaliteBundle:ArticleTF');
        $list_articleTF = $repository->searchListTFSimulation($SimulationArticleTF->getNom(),"".$annee[0]->getAnneeTaxation());
        if ($list_articleTF != NULL) {
            $repository = $this->getDoctrine()->getManager()->getRepository('FiscaliteGestionFiscaliteBundle:TFArticleCommuneEnTete');
            $TFArticleCommuneEnTete = $repository->findOneBy(array('fichier' => $list_articleTF[0]->getFichier()->getId()));
            $repository = $this->getDoctrine()->getManager()->getRepository('FiscaliteGestionFiscaliteBundle:TFArticleCommuneIFP');
            $TFArticleCommuneIFP = $repository->findOneBy(array('fichier' => $list_articleTF[0]->getFichier()->getId()));
            $repository = $this->getDoctrine()->getManager()->getRepository('FiscaliteGestionFiscaliteBundle:TFArticleCommuneSRA2');
            $TFArticleCommuneSRA2 = $repository->findOneBy(array('fichier' => $list_articleTF[0]->getFichier()->getId()));
            $repository = $this->getDoctrine()->getManager()->getRepository('FiscaliteGestionFiscaliteBundle:TFArticleCommuneSRA3');
            $TFArticleCommuneSRA3 = $repository->findOneBy(array('fichier' => $list_articleTF[0]->getFichier()->getId()));
        }
        $simulation = new SimulationTF();
        $simulation->setSimulationArticleTF($SimulationArticleTF);
        $simulation->setArticleCommuneIFP($TFArticleCommuneIFP);
        $simulation->setArticleCommuneEnTete($TFArticleCommuneEnTete);
        $simulation->setArticleCommuneSRA2($TFArticleCommuneSRA2);
        $simulation->setArticleCommuneSRA3($TFArticleCommuneSRA3);
        $em = $this->getDoctrine()->getManager();
        foreach ($list_articleTF as $articleTF) {
            $articleTF->setTableauTF2($simulation);
            $articleTF->setTableauTF7($simulation);
            $articleTF->setTableauTF8($simulation);
            $articleTF->setTableauTF6($simulation);
            $em->detach($articleTF);
        }
        $articleTF->setTableauTF2Taux($simulation);
        $articleTF->setTableauTF5($simulation);
        $articleTF->setTableauTF5bis($simulation);
        $facade = $this->get('ps_pdf.facade');
        $response = new Response();
        $this->render('FiscaliteGestionFiscaliteBundle:Simulation:simulationtaxefonciere.html.twig', array('simulation' => $simulation, 'id' => $id), $response);
        $xml = $response->getContent();
        $content = $facade->render($xml);
        return new Response($content, 200, array('content-type' => 'application/pdf'));
    }

}
