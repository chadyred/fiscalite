<?php

namespace Fiscalite\GestionFiscaliteBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Fiscalite\GestionFiscaliteBundle\Entity\RechercheArticleTF;
use Fiscalite\GestionFiscaliteBundle\Form\RechercheArticleTFType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class TaxeFonciereController extends Controller {

    public function indexAction() {
        $repository = $this->getDoctrine()->getManager()->getRepository('FiscaliteGestionFiscaliteBundle:TFArticleCommuneIFP');
        $list_articleCommuneIFP = $repository->findAll();
        $repository = $this->getDoctrine()->getManager()->getRepository('FiscaliteGestionFiscaliteBundle:TFArticleTaxationCompte');
        $list_articleTaxationCompte = $repository->findAll();
        $repository = $this->getDoctrine()->getManager()->getRepository('FiscaliteGestionFiscaliteBundle:TFArticleTaxationNonBati');
        $list_articleTaxationNonBati = $repository->findAll();
        $repository = $this->getDoctrine()->getManager()->getRepository('FiscaliteGestionFiscaliteBundle:TFArticleTaxationBati');
        $list_articleTaxationBati = $repository->findAll();
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate($list_articleCommuneIFP, $this->get('request')->query->get('page', 1)/* page number */, 5/* limit per page */);
        $paginator2 = $this->get('knp_paginator');
        $pagination2 = $paginator2->paginate($list_articleTaxationCompte, $this->get('request')->query->get('page', 1)/* page number */, 5/* limit per page */);
        $paginator3 = $this->get('knp_paginator');
        $pagination3 = $paginator3->paginate($list_articleTaxationNonBati, $this->get('request')->query->get('page', 1)/* page number */, 5/* limit per page */);
        $paginator4 = $this->get('knp_paginator');
        $pagination4 = $paginator4->paginate($list_articleTaxationBati, $this->get('request')->query->get('page', 1)/* page number */, 5/* limit per page */);

        return $this->render('FiscaliteGestionFiscaliteBundle:TaxeFonciere:index.html.twig', array('pagination' => $pagination, 'pagination2' => $pagination2, 'pagination3' => $pagination3, 'pagination4' => $pagination4));
    }

    public function listeAction(Request $request) {
        $recherchearticleTF = new RechercheArticleTF;
        $repository = $this->getDoctrine()->getManager()->getRepository('FiscaliteGestionFiscaliteBundle:ArticleTF');
        $list_articleTF = $repository->findAllOrderbytitreEtDesignation();
        $repository = $this->getDoctrine()->getManager()->getRepository('FiscaliteGestionFiscaliteBundle:TFArticleCommuneIFP');
        $list_articleCommuneIFP = $repository->findAll();
        $repository = $this->getDoctrine()->getManager()->getRepository('FiscaliteGestionFiscaliteBundle:TFArticleCommuneSRA2');
        $list_articleCommuneSRA2 = $repository->findAll();
        $repository = $this->getDoctrine()->getManager()->getRepository('FiscaliteGestionFiscaliteBundle:TFArticleCommuneSRA3');
        $list_articleCommuneSRA3 = $repository->findAll();
        $paginatorIFP = $this->get('knp_paginator');
        $paginationIFP = $paginatorIFP->paginate($list_articleCommuneIFP, $this->get('request')->query->get('page', 1)/* page number */, 1/* limit per page */);
        $paginatorSRA2 = $this->get('knp_paginator');
        $paginationSRA2 = $paginatorSRA2->paginate($list_articleCommuneSRA2, $this->get('request')->query->get('page', 1)/* page number */, 1/* limit per page */);
        $paginatorSRA3 = $this->get('knp_paginator');
        $paginationSRA3 = $paginatorSRA3->paginate($list_articleCommuneSRA3, $this->get('request')->query->get('page', 1)/* page number */, 1/* limit per page */);
        $paginatorC1 = $this->get('knp_paginator');
        $paginationC1 = $paginatorC1->paginate($list_articleTF, $this->get('request')->query->get('page', 1)/* page number */, 20/* limit per page */);
        $form = $this->createForm(new RechercheArticleTFType, $recherchearticleTF, array(
            'action' => $this->generateUrl('taxefonciereliste'),
            'method' => 'POST',
        ));
        $form->add('submit', 'submit', array('label' => 'Rechercher', 'attr' => array('class' => 'btn btn-primary btn-large')));
        $form->handleRequest($request);
        if ($form->isValid()) {
                $dataAnneetaxation = $form->get('anneetaxation')->getData();
                $dataTitreEtDesignation = $form->get('titreetdesignation')->getData();
                $dataSommeAPayermin = $form->get('sommeapayermin')->getData();
                $dataSommeAPayermax = $form->get('sommeapayermax')->getData();
                if ($dataAnneetaxation != NULL OR $dataTitreEtDesignation != NULL OR $dataSommeAPayermin != NULL OR $dataSommeAPayermax != NULL) {
                    $repository = $this->getDoctrine()->getManager()->getRepository('FiscaliteGestionFiscaliteBundle:ArticleTF');
                    $list_articleTF = $repository->search($dataAnneetaxation, $dataTitreEtDesignation, $dataSommeAPayermin, $dataSommeAPayermax);
                    $paginatorC1 = $this->get('knp_paginator');
                    $paginationC1 = $paginatorC1->paginate($list_articleTF, $this->get('request')->query->get('page', 1)/* page number */, 20/* limit per page */);
                } else {
                    $repository = $this->getDoctrine()->getManager()->getRepository('FiscaliteGestionFiscaliteBundle:ArticleTF');
                    $list_articleTF = $repository->findAllOrderbytitreEtDesignation();
                    $paginatorC1 = $this->get('knp_paginator');
                    $paginationC1 = $paginatorC1->paginate($list_articleTF, $this->get('request')->query->get('page', 1)/* page number */, 20/* limit per page */);
                }            
        }
        return $this->render('FiscaliteGestionFiscaliteBundle:TaxeFonciere:liste.html.twig', array('form' => $form->createView(), 'paginationIFP' => $paginationIFP, 'paginationSRA2' => $paginationSRA2, 'paginationSRA3' => $paginationSRA3, 'paginationC1' => $paginationC1));
    }
    
    public function getAjaxResultsTitreEtDesignationAction() {
        $request = $this->container->get('request');
        if ($request->isXmlHttpRequest()) {
            $term = $request->query->get('term');
            $array = $this->getDoctrine()
                    ->getManager()
                    ->getRepository('FiscaliteGestionFiscaliteBundle:ArticleTF')
                    ->listeTitreEtDesignation($term);
            return new JsonResponse($array);
        }
    }

    public function articleAction($id) {
        $repository = $this->getDoctrine()->getManager()->getRepository('FiscaliteGestionFiscaliteBundle:ArticleTF');
        $articleTFC1 = $repository->findOneBy(array('numerosequentiel' => $id));
        $repository = $this->getDoctrine()->getManager()->getRepository('FiscaliteGestionFiscaliteBundle:ArticleTFC2');
        $articleTFC2 = $repository->findOneBy(array('numerosequentiel' => $id));
        $repository = $this->getDoctrine()->getManager()->getRepository('FiscaliteGestionFiscaliteBundle:TFArticleCommuneIFP');
        $commune = $repository->findAll();
        $repository = $this->getDoctrine()->getManager()->getRepository('FiscaliteGestionFiscaliteBundle:TFArticleCommuneIFP');
        $TFarticleCommuneIFPanneeprecedente = $repository->RechercherTFArticleCommuneIFPAnneePrecedente($articleTFC1->getFichier());
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
        $listeArticleTH = NULL;
        foreach ($articleTFC1->getTfarticletaxationbatis() as $articletaxationbatis) {
            $cotisationC = $cotisationC + $articletaxationbatis->getCotisationC();
            $cotisationS = $cotisationS + $articletaxationbatis->getCotisationS();
            $cotisationIC = $cotisationIC + $articletaxationbatis->getCotisationIC();
            $cotisationD = $cotisationD + $articletaxationbatis->getCotisationD();
            $cotisationTSE = $cotisationTSE + $articletaxationbatis->getCotisationTSEetTSEGP();
            $cotisationOM = $cotisationOM + $articletaxationbatis->getCotisationOM();
            $repository = $this->getDoctrine()->getManager()->getRepository('FiscaliteGestionFiscaliteBundle:ArticleTH');
            $articleTH = $repository->searchArticleTH($articletaxationbatis, $articleTFC1);
            $listeArticleTH[] = $articleTH;
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
        foreach ($articleTFC1->getTfarticletaxationnonbatis() as $articletaxationnonbatis) {
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
        $articleTFAnneePrecedente = $repository->rechercherArticleAnneePrecedente($articleTFC1);
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
        if ($listeArticleTH[0] != NULL) {
            $repository = $this->getDoctrine()->getManager()->getRepository('FiscaliteGestionFiscaliteBundle:ArticleTH');
            $i = 0;
            foreach ($listeArticleTH as $articleTaxationTH) {
                $autreArticleTH[$i] = $repository->searchAutreArticle($articleTaxationTH->getNomprenom(), $articleTaxationTH->getSuitenom(), $articleTaxationTH->getAdresse()->getLibellevoieaft());
                $i++;
            }
            $repository = $this->getDoctrine()->getManager()->getRepository('FiscaliteGestionFiscaliteBundle:ArticleCommune');
            $articleCommuneTH = $repository->searchbyfichier($articleTaxationTH->getFichier());
            $repository = $this->getDoctrine()->getManager()->getRepository('FiscaliteGestionFiscaliteBundle:ArticleCommune');
            $articleCommuneanneeprecedente = $repository->searchbyfichierAnneePrecedente($articleTaxationTH->getFichier());
        } else {
            $articleCommuneTH = NULL;
            $articleCommuneanneeprecedente = NULL;
            $autreArticleTH = NULL;
            $articleTaxationTH = NULL;
            $listeArticleTH = NULL;
        }
        return $this->render('FiscaliteGestionFiscaliteBundle:TaxeFonciere:article.html.twig', array('id' => $id, 'articleTF' => $articleTFC1, 'articleTFC2' => $articleTFC2, 'articleTH' => $listeArticleTH, 'commune' => $commune[0], 'TFarticleCommuneIFPanneeprecedente' => $TFarticleCommuneIFPanneeprecedente, 'cotisationproprietesbaties' => $cotisationproprietesbaties,
                    'articleTFAnneePrecedente' => $articleTFAnneePrecedente, 'cotisationproprietesbatiesAnneePrecedente' => $cotisationproprietesbatiesAnneePrecedente,
                    'cotisationproprietesnonbaties' => $cotisationproprietesnonbaties, 'cotisationproprietesnonbatiesAnneePrecedente' => $cotisationproprietesnonbatiesAnneePrecedente,
                    'articleCommune' => $articleCommuneTH, 'autreArticle' => $autreArticleTH, 'articleCommuneanneeprecedente' => $articleCommuneanneeprecedente));
    }

}

