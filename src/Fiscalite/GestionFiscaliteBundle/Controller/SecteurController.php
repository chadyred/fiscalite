<?php

namespace Fiscalite\GestionFiscaliteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Fiscalite\GestionFiscaliteBundle\Entity\Secteur;
use Fiscalite\GestionFiscaliteBundle\Entity\SecteurRepository;
use Fiscalite\GestionFiscaliteBundle\Form\SecteurType;
use Fiscalite\GestionFiscaliteBundle\Entity\RechercheSecteur;
use Fiscalite\GestionFiscaliteBundle\Form\RechercheSecteurType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class SecteurController extends Controller {

    public function listeAction(Request $request) {
        $secteur = new RechercheSecteur;
        $form = $this->createForm(new RechercheSecteurType(), $secteur, array(
            'action' => $this->generateUrl('secteur'),
            'method' => 'POST',
        ));
        $form->handleRequest($request);
        $repository = $this->getDoctrine()->getManager()->getRepository('FiscaliteGestionFiscaliteBundle:Secteur');
        if ($form->isValid()) {
            $nom = $form->get('nom')->getData();
            $nombreIndividu = $form->get('nombreIndividu')->getData();
            $adresses = $form->get('right_name')->getData();
            if ($nom != NULL OR $nombreIndividu != NULL OR $adresses != NULL) {
                $liste_secteur = $repository->findSecteur($nom, $nombreIndividu, $adresses);
            } else {
                $liste_secteur = $repository->findAll();
            }
        } else {
            $liste_secteur = $repository->findAll();
        }
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate($liste_secteur, $this->get('request')->query->get('page', 1)/* page number */, 20/* limit per page */);
        return $this->render('FiscaliteGestionFiscaliteBundle:Secteur:liste.html.twig', array('form' => $form->createView(), 'pagination' => $pagination));
    }

    public function getAjaxResultsTypeRueAction() {
        $request = $this->container->get('request');
        if ($request->isXmlHttpRequest()) {
            $term = $request->query->get('term');
            $array = $this->getDoctrine()
                    ->getManager()
                    ->getRepository('FiscaliteGestionFiscaliteBundle:TypeRue')
                    ->listeTypeRue($term);
            return new JsonResponse($array);
        }
    }

    public function newAction() {
        $secteur = new Secteur;
        $form = $this->createForm(new SecteurType, $secteur);
        if ($this->getRequest()->isMethod('POST')) {
            $form->bind($this->getRequest());
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $secteur->setNombreIndividuRue();
                foreach ($form->get('typerue') as $typerue)
                    $secteur->addTyperue($typerue);
                $em->persist($secteur);
                $em->flush();
                $this->get('session')->getFlashBag()->add('notice', "Secteur crée avec succès ");
                return $this->redirect($this->generateUrl('secteur'));
            } else
                $this->get('session')->getFlashBag()->add('notice', "Erreur de création de secteur");
        }

        return $this->render('FiscaliteGestionFiscaliteBundle:Secteur:new.html.twig', array('form' => $form->createView()));
    }

    public function articleAction($id) {
        $repository = $this->getDoctrine()->getManager()->getRepository('FiscaliteGestionFiscaliteBundle:Secteur');
        $secteur = $repository->findOneBy(array('id' => $id));
        $typeRues = $secteur->getTypeRue();
        if ($typeRues != NULL) {
            foreach ($typeRues as $typeRue) {
                $adresses = $typeRue->getAdresses();
                foreach ($adresses as $adresse) {
                    $article[] = $adresse->getArticleTH();
                }
            }
        }
        return $this->render('FiscaliteGestionFiscaliteBundle:Secteur:article.html.twig', array('secteur' => $secteur, 'article' => $article));
    }

    public function csvSecteurArticleTHAction($id) {
        $repository = $this->getDoctrine()->getManager()->getRepository('FiscaliteGestionFiscaliteBundle:Secteur');
        $secteur = $repository->findOneBy(array('id' => $id));
        $typeRues = $secteur->getTypeRue();
        $handle = fopen('php://memory', 'r+');
        $header = array();
        fputcsv($handle, array('Numéro séquentiel', 'Nom et prénom', 'suite du nom', 'numéro d\'immeuble', 'Libelle de la voie', 'Base communale', 'abattement general base communale', 'abattement personnes charge communale', 'abattement special base communale', 'abattement special handicape communale', 'Cotisation communale'));
        if ($typeRues != NULL) {
            foreach ($typeRues as $typeRue) {
                $adresses = $typeRue->getAdresses();
                foreach ($adresses as $adresse) {
                    $article = $adresse->getArticleTH();
                    fputcsv($handle, array($article->getNumerosequentiel(),
                        $article->getNomprenom(),
                        $article->getSuitenom(),
                        $article->getAdresse()->getNumeroimmeubleaft(),
                        $article->getAdresse()->getLibellevoieaft(),
                        $article->getBase()->getBasenettecommunale(),
                        $article->getAbattement()->getAbattementgeneralbasecommunale(),
                        $article->getAbattement()->getAbattementpersonneschargecommunnal(),
                        $article->getAbattement()->getAbattementspecialbasecommunal(),
                        $article->getAbattement()->getAbattementspecialhandicapecommunal(),
                        $article->getCotisation()->getCotisationcommunale()));
                }
            }
        }


        rewind($handle);
        $content = stream_get_contents($handle);
        fclose($handle);

        return new Response($content, 200, array(
            'Content-Type' => 'application/force-download',
            'Content-Disposition' => 'attachment; filename="articleTHsecteur.csv"'
        ));
    }

}
