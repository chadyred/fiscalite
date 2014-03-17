<?php

namespace Fiscalite\GestionFiscaliteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Fiscalite\GestionFiscaliteBundle\Entity\Fichier;
use Fiscalite\GestionFiscaliteBundle\Entity\ArticleTH;
use Fiscalite\GestionFiscaliteBundle\Entity\Base;
use Fiscalite\GestionFiscaliteBundle\Form\BaseType;
use Fiscalite\GestionFiscaliteBundle\Form\ArticleType;


class PersonneController extends Controller
{
    public function indexAction(){
        $article = new ArticleTH;
        $form = $this->createForm(new ArticleType, $article);
        $repository = $this->getDoctrine()->getManager()->getRepository('FiscaliteGestionFiscaliteBundle:ArticleTH');
        $list_article = $repository->findAllOrderbynomprenom(); 
        if ($this->getRequest()->isMethod('get')) {
            $form->bind($this->getRequest());
                if ($form->isValid()) {
                    $datanumerosequentiel = $form->get('numerosequentiel')->getData();
                    $datanomprenom = $form->get('nomprenom')->getData();
                    $dataadresse = $form->get('adresse')->getData();
                    $dataanneetaxation = $form->get('fichier')->getData();
                    if ($datanumerosequentiel != NULL OR $datanomprenom != NULL OR $dataadresse!=NULL){
                        $repository = $this->getDoctrine()->getManager()->getRepository('FiscaliteGestionFiscaliteBundle:ArticleTH');
                        $list_article = $repository->search($datanumerosequentiel,$datanomprenom,$dataadresse,$dataanneetaxation); 
                        $paginator  = $this->get('knp_paginator');
                        $pagination = $paginator->paginate($list_article,$this->get('request')->query->get('page', 1)/*page number*/,
                        20/*limit per page*/);
                    }else{
                        $repository = $this->getDoctrine()->getManager()->getRepository('FiscaliteGestionFiscaliteBundle:ArticleTH');
                        $list_article = $repository->findAllOrderbynomprenom(); 
                        $paginator  = $this->get('knp_paginator');
                        $pagination = $paginator->paginate($list_article,$this->get('request')->query->get('page', 1)/*page number*/,
                        20/*limit per page*/);
                    }
                    return $this->render('FiscaliteGestionFiscaliteBundle:Personne:index.html.twig',
                            array('form' => $form->createView(),'pagination' => $pagination));
                
                } 
        }   
        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate($list_article,$this->get('request')->query->get('page', 1)/*page number*/,
        20/*limit per page*/);
        return $this->render('FiscaliteGestionFiscaliteBundle:Personne:index.html.twig',
            array('form' => $form->createView(),'pagination' => $pagination));
    }
    
    public function showAction(){
        
    }
          

}
