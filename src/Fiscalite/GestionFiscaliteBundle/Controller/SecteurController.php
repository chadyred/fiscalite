<?php

namespace Fiscalite\GestionFiscaliteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Fiscalite\GestionFiscaliteBundle\Entity\Secteur;
use Fiscalite\GestionFiscaliteBundle\Entity\SecteurRepository;
use Fiscalite\GestionFiscaliteBundle\Form\SecteurType;

class SecteurController extends Controller {

    public function listeAction() {
        $secteur = new Secteur;
        $form = $this->createForm(new SecteurType, $secteur);
        $repository = $this->getDoctrine()->getManager()->getRepository('FiscaliteGestionFiscaliteBundle:Secteur');
        if ($this->getRequest()->isMethod('POST')) {
            $form->bind($this->getRequest());
            if ($form->isValid()) {
                $nom = $form->get('nom')->getData();
                $nombreIndividu = $form->get('nombreIndividu')->getData();
                $adresses = $form->get('adresses')->getData();
                $liste_secteur = $repository->findSecteur($nom, $nombreIndividu, $adresses);
            }
        } else {
            $liste_secteur = $repository->findAll();
        }
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate($liste_secteur, $this->get('request')->query->get('page', 1)/* page number */, 20/* limit per page */);
        return $this->render('FiscaliteGestionFiscaliteBundle:Secteur:liste.html.twig', array('form' => $form->createView(), 'pagination' => $pagination));
    }

    public function newAction() {
        $secteur = new Secteur;
        $form = $this->createForm(new SecteurType, $secteur);
        if ($this->getRequest()->isMethod('POST')) {
            $form->bind($this->getRequest());
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $secteur->setNombreIndividuRue();
                $em->persist($secteur);
                $em->flush();
                $this->get('session')->getFlashBag()->add('notice', "Secteur crée avec succès ");
                return $this->redirect($this->generateUrl('secteur'));
            }
            else
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

}

