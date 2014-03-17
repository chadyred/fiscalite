<?php

namespace Fiscalite\GestionFiscaliteBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Fiscalite\GestionFiscaliteBundle\Entity\Fichier;
use Fiscalite\GestionFiscaliteBundle\Entity\Article;
use Fiscalite\GestionFiscaliteBundle\Entity\Base;
use Fiscalite\GestionFiscaliteBundle\Form\BaseType;
use Fiscalite\GestionFiscaliteBundle\Entity\RechercheArticleTH;
use Fiscalite\GestionFiscaliteBundle\Form\RechercheArticleTHType;
use Fiscalite\GestionFiscaliteBundle\Entity\ArticleTH;
use Fiscalite\GestionFiscaliteBundle\Entity\ArticleTHRepository;
use Fiscalite\GestionFiscaliteBundle\Entity\ArticleTF;
use Fiscalite\GestionFiscaliteBundle\Entity\ArticleTFRepository;
use Fiscalite\GestionFiscaliteBundle\Entity\ArticleCommune;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Ps\PdfBundle\Annotation\Pdf;
use PHPPdf\Autoloader;
use PHPPdf\Core\FacadeBuilder;
use PHPPdf\DataSource\DataSource;

class TaxeHabitationController extends Controller {

    public function articleAction($id) {
        $repository = $this->getDoctrine()->getManager()->getRepository('FiscaliteGestionFiscaliteBundle:ArticleTH');
        $articleTH = $repository->findOneBy(array('numerosequentiel' => $id));
        $repository = $this->getDoctrine()->getManager()->getRepository('FiscaliteGestionFiscaliteBundle:ArticleCommune');
        $articleCommuneTH = $repository->searchbyfichier($articleTH->getFichier());
        $repository = $this->getDoctrine()->getManager()->getRepository('FiscaliteGestionFiscaliteBundle:ArticleCommune');
        $articleCommuneanneeprecedente = $repository->searchbyfichierAnneePrecedente($articleTH->getFichier());
        $repository = $this->getDoctrine()->getManager()->getRepository('FiscaliteGestionFiscaliteBundle:ArticleTH');
        $autreArticleTH = $repository->searchAutreArticle($articleTH->getNomprenom(), $articleTH->getSuitenom(), $articleTH->getAdresse()->getLibellevoieaft());
        $repository = $this->getDoctrine()->getManager()->getRepository('FiscaliteGestionFiscaliteBundle:ArticleTF');
        $articleTF = $repository->searchArticleTF($articleTH);
        $TFarticleCommuneIFP = NULL;
        if ($articleTF != NULL) {
            $articleTF = $articleTF[0];
            $repository = $this->getDoctrine()->getManager()->getRepository('FiscaliteGestionFiscaliteBundle:TFArticleCommuneIFP');
            $TFarticleCommuneIFP = $repository->findAll();
            $repository = $this->getDoctrine()->getManager()->getRepository('FiscaliteGestionFiscaliteBundle:TFArticleCommuneIFP');
            $TFarticleCommuneIFPanneeprecedente = $repository->RechercherTFArticleCommuneIFPAnneePrecedente($articleTF->getFichier());
            if ($TFarticleCommuneIFPanneeprecedente != null)
                $TFarticleCommuneIFPanneeprecedente = $TFarticleCommuneIFPanneeprecedente[0];
            else
                $TFarticleCommuneIFPanneeprecedente = null;
            ////ANNEE COURANTE
            //BATI
            $cotisationC = 0;
            $cotisationS = 0;
            $cotisationIC = 0;
            $cotisationD = 0;
            $cotisationTSE = 0;
            $cotisationOM = 0;
            $cotisationTATFPNB = 0;
            $cotisationCA = 0;
            foreach ($articleTF->getTfarticletaxationbatis() as $articletaxationbatis) {
                $cotisationC = $cotisationC + $articletaxationbatis->getCotisationC();
                $cotisationS = $cotisationS + $articletaxationbatis->getCotisationS();
                $cotisationIC = $cotisationIC + $articletaxationbatis->getCotisationIC();
                $cotisationD = $cotisationD + $articletaxationbatis->getCotisationD();
                $cotisationTSE = $cotisationTSE + $articletaxationbatis->getCotisationTSEetTSEGP();
                $cotisationOM = $cotisationOM + $articletaxationbatis->getCotisationOM();
            }
            $cotisationproprietesbaties['cotisationC'] = $cotisationC;
            $cotisationproprietesbaties['cotisationS'] = $cotisationS;
            $cotisationproprietesbaties['cotisationIC'] = $cotisationIC;
            $cotisationproprietesbaties['cotisationD'] = $cotisationD;
            $cotisationproprietesbaties['cotisationTSE'] = $cotisationTSE;
            $cotisationproprietesbaties['cotisationOM'] = $cotisationOM;
            //NON BATI
            $cotisationC = 0;
            $cotisationS = 0;
            $cotisationIC = 0;
            $cotisationD = 0;
            $cotisationTSE = 0;
            $cotisationOM = 0;
            $cotisationTATFPNB = 0;
            $cotisationCA = 0;
            $total = 0;
            $cotisationproprietesnonbaties['cotisationC'] = $cotisationC;
            $cotisationproprietesnonbaties['cotisationS'] = $cotisationS;
            $cotisationproprietesnonbaties['cotisationIC'] = $cotisationIC;
            $cotisationproprietesnonbaties['cotisationTATFPNB'] = $cotisationTATFPNB;
            $cotisationproprietesnonbaties['cotisationTSE'] = $cotisationTSE;
            $cotisationproprietesnonbaties['cotisationCA'] = $cotisationCA;
            $cotisationproprietesnonbaties['total'] = $total;
            foreach ($articleTF->getTfarticletaxationnonbatis() as $articletaxationnonbatis) {
                $cotisationC = $cotisationC + $articletaxationnonbatis->getCotisationC();
                $cotisationS = $cotisationS + $articletaxationnonbatis->getCotisationS();
                $cotisationIC = $cotisationIC + $articletaxationnonbatis->getCotisationIC();
                $cotisationTATFPNB = $cotisationTATFPNB + $articletaxationnonbatis->getCotisationTATFPNB();
                $cotisationTSE = $cotisationTSE + $articletaxationnonbatis->getCotisationTSE();
                $cotisationCA = $cotisationCA + $articletaxationnonbatis->getCotisationCA();
                $total = $total + $articletaxationnonbatis->getTotal();
            }
            $cotisationproprietesnonbaties['cotisationC'] = $cotisationC;
            $cotisationproprietesnonbaties['cotisationS'] = $cotisationS;
            $cotisationproprietesnonbaties['cotisationIC'] = $cotisationIC;
            $cotisationproprietesnonbaties['cotisationTATFPNB'] = $cotisationTATFPNB;
            $cotisationproprietesnonbaties['cotisationTSE'] = $cotisationTSE;
            $cotisationproprietesnonbaties['cotisationCA'] = $cotisationCA;
            $cotisationproprietesnonbaties['total'] = $total;
            //ANNEE PRECEDENTE
            $repository = $this->getDoctrine()->getManager()->getRepository('FiscaliteGestionFiscaliteBundle:ArticleTF');
            $articleTFAnneePrecedente = $repository->rechercherArticleAnneePrecedente($articleTF);
            //BATI
            $cotisationC = 0;
            $cotisationS = 0;
            $cotisationIC = 0;
            $cotisationD = 0;
            $cotisationTSE = 0;
            $cotisationOM = 0;
            $cotisationTATFPNB = 0;
            $cotisationCA = 0;
            $cotisationproprietesbatiesAnneePrecedente['cotisationC'] = $cotisationC;
            $cotisationproprietesbatiesAnneePrecedente['cotisationS'] = $cotisationS;
            $cotisationproprietesbatiesAnneePrecedente['cotisationIC'] = $cotisationIC;
            $cotisationproprietesbatiesAnneePrecedente['cotisationD'] = $cotisationD;
            $cotisationproprietesbatiesAnneePrecedente['cotisationTSE'] = $cotisationTSE;
            $cotisationproprietesbatiesAnneePrecedente['cotisationOM'] = $cotisationOM;
            $cotisationproprietesnonbatiesAnneePrecedente['cotisationC'] = $cotisationC;
            $cotisationproprietesnonbatiesAnneePrecedente['cotisationS'] = $cotisationS;
            $cotisationproprietesnonbatiesAnneePrecedente['cotisationIC'] = $cotisationIC;
            $cotisationproprietesnonbatiesAnneePrecedente['cotisationTATFPNB'] = $cotisationTATFPNB;
            $cotisationproprietesnonbatiesAnneePrecedente['cotisationTSE'] = $cotisationTSE;
            $cotisationproprietesnonbatiesAnneePrecedente['cotisationCA'] = $cotisationCA;
            if ($articleTFAnneePrecedente != NULL) {
                foreach ($articleTFAnneePrecedente[0]->getTfarticletaxationbatis() as $articletaxationbatisAnneePrecedente) {
                    $cotisationC = $cotisationC + $articletaxationbatisAnneePrecedente->getCotisationC();
                    $cotisationS = $cotisationS + $articletaxationbatisAnneePrecedente->getCotisationS();
                    $cotisationIC = $cotisationIC + $articletaxationbatisAnneePrecedente->getCotisationIC();
                    $cotisationD = $cotisationD + $articletaxationbatisAnneePrecedente->getCotisationD();
                    $cotisationTSE = $cotisationTSE + $articletaxationbatisAnneePrecedente->getCotisationTSEetTSEGP();
                    $cotisationOM = $cotisationOM + $articletaxationbatisAnneePrecedente->getCotisationOM();
                }
                $cotisationproprietesbatiesAnneePrecedente['cotisationC'] = $cotisationC;
                $cotisationproprietesbatiesAnneePrecedente['cotisationS'] = $cotisationS;
                $cotisationproprietesbatiesAnneePrecedente['cotisationIC'] = $cotisationIC;
                $cotisationproprietesbatiesAnneePrecedente['cotisationD'] = $cotisationD;
                $cotisationproprietesbatiesAnneePrecedente['cotisationTSE'] = $cotisationTSE;
                $cotisationproprietesbatiesAnneePrecedente['cotisationOM'] = $cotisationOM;
                //NON BATI
                $cotisationC = 0;
                $cotisationS = 0;
                $cotisationIC = 0;
                $cotisationD = 0;
                $cotisationTSE = 0;
                $cotisationOM = 0;
                $cotisationTATFPNB = 0;
                $cotisationCA = 0;
                foreach ($articleTFAnneePrecedente[0]->getTfarticletaxationnonbatis() as $articletaxationnonbatisAnneePrecedente) {
                    $cotisationC = $cotisationC + $articletaxationnonbatisAnneePrecedente->getCotisationC();
                    $cotisationS = $cotisationS + $articletaxationnonbatisAnneePrecedente->getCotisationS();
                    $cotisationIC = $cotisationIC + $articletaxationnonbatisAnneePrecedente->getCotisationIC();
                    $cotisationTATFPNB = $cotisationTATFPNB + $articletaxationnonbatisAnneePrecedente->getCotisationTATFPNB();
                    $cotisationTSE = $cotisationTSE + $articletaxationnonbatisAnneePrecedente->getCotisationTSE();
                    $cotisationCA = $cotisationCA + $articletaxationnonbatisAnneePrecedente->getCotisationCA();
                }
                $cotisationproprietesnonbatiesAnneePrecedente['cotisationC'] = $cotisationC;
                $cotisationproprietesnonbatiesAnneePrecedente['cotisationS'] = $cotisationS;
                $cotisationproprietesnonbatiesAnneePrecedente['cotisationIC'] = $cotisationIC;
                $cotisationproprietesnonbatiesAnneePrecedente['cotisationTATFPNB'] = $cotisationTATFPNB;
                $cotisationproprietesnonbatiesAnneePrecedente['cotisationTSE'] = $cotisationTSE;
                $cotisationproprietesnonbatiesAnneePrecedente['cotisationCA'] = $cotisationCA;
                $articleTFAnneePrecedente = $articleTFAnneePrecedente[0];
            }
        } else {
            $articleTFAnneePrecedente = NULL;
            $TFarticleCommuneIFPanneeprecedente = NULL;
            $cotisationproprietesbaties = NULL;
            $cotisationproprietesbatiesAnneePrecedente = NULL;
            $cotisationproprietesnonbaties = NULL;
            $cotisationproprietesnonbatiesAnneePrecedente = NULL;
        }

        return $this->render('FiscaliteGestionFiscaliteBundle:TaxeHabitation:article.html.twig', array('id' => $id, 'articleTH' => $articleTH, 'articleTF' => $articleTF,
                    'articleCommune' => $articleCommuneTH, 'autreArticle' => $autreArticleTH,
                    'articleCommuneanneeprecedente' => $articleCommuneanneeprecedente,
                    'TFarticleCommuneIFP' => $TFarticleCommuneIFP[0], 'TFarticleCommuneIFPanneeprecedente' => $TFarticleCommuneIFPanneeprecedente,
                    'cotisationproprietesbaties' => $cotisationproprietesbaties, 'articleTFAnneePrecedente' => $articleTFAnneePrecedente,
                    'cotisationproprietesbatiesAnneePrecedente' => $cotisationproprietesbatiesAnneePrecedente,
                    'cotisationproprietesnonbaties' => $cotisationproprietesnonbaties,
                    'cotisationproprietesnonbatiesAnneePrecedente' => $cotisationproprietesnonbatiesAnneePrecedente,));
    }

    public function pdfAction($id) {
        $repository = $this->getDoctrine()->getManager()->getRepository('FiscaliteGestionFiscaliteBundle:Base');
        $base = $repository->findOneBy(array('numerosequentiel' => $id));
        $repository = $this->getDoctrine()->getManager()->getRepository('FiscaliteGestionFiscaliteBundle:ArticleCommune');
        $articleCommune = $repository->searchbyfichier($base->getArticleTH()->getFichier());
        $articleCommuneanneeprecedente = $repository->searchbyfichierAnneePrecedente($base->getArticleTH()->getFichier());
        $repository = $this->getDoctrine()->getManager()->getRepository('FiscaliteGestionFiscaliteBundle:ArticleTH');
        $autreArticle = $repository->searchAutreArticle($base->getArticleTH()->getNomprenom(), $base->getArticleTH()->getSuitenom(), $base->getArticleTH()->getAdresse()->getLibellevoieaft());

        $facade = $this->get('ps_pdf.facade');
        $response = new Response();
        $this->render(('FiscaliteGestionFiscaliteBundle:TaxeHabitation:taxehabitation.pdf.twig'), array('id' => $id, 'base' => $base, 'articleCommune' => $articleCommune,
            'autreArticle' => $autreArticle, 'articleCommuneanneeprecedente' => $articleCommuneanneeprecedente), $response);
        $xml = $response->getContent();
        $content = $facade->render($xml);
        return new Response($content, 200, array('content-type' => 'application/pdf'));
    }

    public function csvAction($id) {
        $repository = $this->getDoctrine()->getManager()->getRepository('FiscaliteGestionFiscaliteBundle:Base');
        $base = $repository->findOneBy(array('numerosequentiel' => $id));
        $repository = $this->getDoctrine()->getManager()->getRepository('FiscaliteGestionFiscaliteBundle:ArticleCommune');
        $articleCommune = $repository->searchbyfichier($base->getArticleTH()->getFichier());
        $articleCommuneanneeprecedente = $repository->searchbyfichierAnneePrecedente($base->getArticleTH()->getFichier());
        $repository = $this->getDoctrine()->getManager()->getRepository('FiscaliteGestionFiscaliteBundle:ArticleTH');
        $autreArticle = $repository->searchAutreArticle($base->getArticleTH()->getNomprenom(), $base->getArticleTH()->getSuitenom(), $base->getArticleTH()->getAdresse()->getLibellevoieaft());
        $iterableResult = array(
            $base->getNumerosequentiel(),
            $base->getArticleTH()->getNomprenom(),
            $base->getArticleTH()->getSuitenom(),
            $base->getArticleTH()->getAdresse()->getCodevoie(),
            $base->getArticleTH()->getAdresse()->getNumeroimmeubleaft(),
            $base->getArticleTH()->getAdresse()->getIndicederepetition(),
            $base->getArticleTH()->getAdresse()->getLibellevoieaft(),
            $base->getArticleTH()->getFichier()->getCommune()->getDepartement(),
            $base->getArticleTH()->getFichier()->getCommune()->getLibelle());
        $handle = fopen('php://memory', 'r+');
        $header = array();
        fputcsv($handle, $iterableResult);
        rewind($handle);
        $content = stream_get_contents($handle);
        fclose($handle);

        return new Response($content, 200, array(
            'Content-Type' => 'application/force-download',
            'Content-Disposition' => 'attachment; filename="taxehabitation.csv"'
        ));
    }

    public function listeAction(Request $request) {
        $article = new RechercheArticleTH;
        $form = $this->createForm(new RechercheArticleTHType, $article, array(
            'action' => $this->generateUrl('taxehabitationliste'),
            'method' => 'POST',
        ));
        $form->add('submit', 'submit', array('label' => 'Rechercher', 'attr' => array('class' => 'btn btn-primary btn-large')));
        $form->handleRequest($request);
            if ($form->isValid()) {
                $dataAnneetaxation = $form->get('anneetaxation')->getData();
                $dataNompersonne = $form->get('nompersonne')->getData();
                $dataBasenettemin = $form->get('basenettemin')->getData();
                $dataBasenettemax = $form->get('basenettemax')->getData();
                $dataMontantnetapayermin = $form->get('montantnetapayermin')->getData();
                $dataMontantnetapayermax = $form->get('montantnetapayermax')->getData();
                $dataCotisationcommunalemin = $form->get('cotisationcommunalemin')->getData();
                $dataCotisationcommunalemax = $form->get('cotisationcommunalemax')->getData();
                $dataCotisationintercommunalitemin = $form->get('cotisationintercommunalitemin')->getData();
                $dataCotisationintercommunalitemax = $form->get('cotisationintercommunalitemax')->getData();

                if ($dataAnneetaxation != NULL OR $dataNompersonne != NULL OR $dataBasenettemin != NULL OR $dataBasenettemax != NULL OR $dataMontantnetapayermin != NULL OR $dataMontantnetapayermax != NULL OR $dataCotisationcommunalemin != NULL OR $dataCotisationcommunalemax != NULL OR $dataCotisationintercommunalitemin != NULL OR
                        $dataCotisationintercommunalitemax != NULL) {
                    $repository = $this->getDoctrine()->getManager()->getRepository('FiscaliteGestionFiscaliteBundle:ArticleTH');
                    $list_articleTH = $repository->searchListTH($dataAnneetaxation, $dataNompersonne, $dataBasenettemin, $dataBasenettemax, $dataMontantnetapayermin, $dataMontantnetapayermax, $dataCotisationcommunalemin, $dataCotisationcommunalemax, $dataCotisationintercommunalitemin, $dataCotisationintercommunalitemax);
                    $paginator = $this->get('knp_paginator');
                    $pagination = $paginator->paginate($list_articleTH, $this->get('request')->query->get('page', 1)/* page number */, 20/* limit per page */);
                } else {
                    $repository = $this->getDoctrine()->getManager()->getRepository('FiscaliteGestionFiscaliteBundle:ArticleTH');
                    $list_articleTH = $repository->findAllOrderbynomprenom();
                    $paginator = $this->get('knp_paginator');
                    $pagination = $paginator->paginate($list_articleTH, $this->get('request')->query->get('page', 1)/* page number */, 20/* limit per page */);
                }
                $sommemontantnondeduit = 0;
//                foreach ($list_articleTH as $article)
//                $sommemontantnondeduit += $article->getMontantnonvaleureventuelle();         
        } else {
            $repository = $this->getDoctrine()->getManager()->getRepository('FiscaliteGestionFiscaliteBundle:ArticleTH');
            $list_articleTH = $repository->findAllOrderbynomprenom();
        }
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate($list_articleTH, $this->get('request')->query->get('page', 1)/* page number */, 20/* limit per page */);
        $sommemontantnondeduit = 0;
//        foreach ($list_articleTH as $article)
//            $sommemontantnondeduit += $article->getMontantnonvaleureventuelle();
        return $this->render('FiscaliteGestionFiscaliteBundle:TaxeHabitation:liste.html.twig', array('sommemontantnondeduit' => $sommemontantnondeduit, 'form' => $form->createView(), 'pagination' => $pagination));
    }
    
    public function getAjaxResultsNompersonneAction() {
        $request = $this->container->get('request');
        if ($request->isXmlHttpRequest()) {
            $term = $request->query->get('term');
            $array = $this->getDoctrine()
                    ->getManager()
                    ->getRepository('FiscaliteGestionFiscaliteBundle:ArticleTH')
                    ->listeNompersonne($term);
            return new JsonResponse($array);
        }
    }
    
            

}
