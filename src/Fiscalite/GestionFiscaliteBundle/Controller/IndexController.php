<?php

namespace Fiscalite\GestionFiscaliteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Fiscalite\GestionFiscaliteBundle\Entity\Fichier;
use Fiscalite\GestionFiscaliteBundle\Entity\ArticleTH;
use Fiscalite\GestionFiscaliteBundle\Entity\ArticleTF;
use Fiscalite\GestionFiscaliteBundle\Entity\ArticleTFC2;
use Fiscalite\GestionFiscaliteBundle\Entity\Base;
use Fiscalite\GestionFiscaliteBundle\Entity\Adresse;
use Fiscalite\GestionFiscaliteBundle\Entity\Commune;
use Fiscalite\GestionFiscaliteBundle\Entity\Cotisation;
use Fiscalite\GestionFiscaliteBundle\Entity\Abattement;
use Fiscalite\GestionFiscaliteBundle\Entity\ArticleCommune;
use Fiscalite\GestionFiscaliteBundle\Entity\THArticleCommuneIFPA3;
use Fiscalite\GestionFiscaliteBundle\Entity\TFArticleCommuneIFP;
use Fiscalite\GestionFiscaliteBundle\Entity\TFArticleCommuneEnTete;
use Fiscalite\GestionFiscaliteBundle\Entity\TFArticleTaxationNonBati;
use Fiscalite\GestionFiscaliteBundle\Entity\TFArticleTaxationBati;
use Fiscalite\GestionFiscaliteBundle\Entity\TFArticleCommuneSRA2;
use Fiscalite\GestionFiscaliteBundle\Entity\TFArticleCommuneSRA3;
use Fiscalite\GestionFiscaliteBundle\Entity\TypeRue;
use Symfony\Component\HttpFoundation\Response;

class IndexController extends Controller {

    public function indexAction() {
        $bool = false;
        $article = null;
        $TFArticleTaxationCompteC1 = null;
        $TFArticleTaxationCompteC2 = null;
        $fichier = new Fichier;
        $form = $this->createFormBuilder($fichier)->add('file', 'file', array('label' => 'Importer un fichier : ', 'attr' => array('class' => 'col-xs-12 input-medium')))->getForm();
        if ($this->getRequest()->isMethod('POST')) {
            $form->bind($this->getRequest());
            if ($form->isValid()) {
                $fp = fopen($fichier->getFile(), 'r'); //lit le fichier 
                $i = 1;
                $em = $this->getDoctrine()->getManager();
                $line = fgets($fp, 1024); //prend la premiere ligne
                $data = str_getcsv($line, "\t"); //prend la premiere ligne jusqu'a tabulations
                $chaine = $data[0]; //prend la permiere chaine
                $chaine = substr($chaine, 0, 352); //selectionne la chaine de 0 à 352 car
                if (substr($chaine, 17, 2) == "  ") {
                    $nom = $fichier->getFile()->getClientOriginalName();
                    $fichier->setNom($nom);
                    $fichier->setAnneetaxation(substr($chaine, 30, 4));
                    $fichier->setTypeimpot(substr($chaine, 28, 2));
                    $emf = $this->getDoctrine()->getManager()->getRepository('FiscaliteGestionFiscaliteBundle:Fichier');
                    $relatedfichier = $emf->findOneBy(array('nom' => $nom));
                    $code = substr($chaine, 3, 3);
                    $commune = new Commune;
                    $commune->newCommune($chaine);
                    $emp = $this->getDoctrine()->getManager()->getRepository('FiscaliteGestionFiscaliteBundle:Commune');
                    $relatedcommune = $emp->findOneBy(array('code' => $code));
                    if ($relatedcommune != null) {
                        if ($relatedcommune->getCode() == $commune->getCode()) {
                            $commune = $relatedcommune;
                        }
                    } else {
                        $commune = new Commune;
                        $commune->newCommune($chaine);
                        $em->persist($commune);
                        $em->flush();
                    }
                    if ($relatedfichier != null) {
                        if ($relatedfichier->getNom() == $fichier->getNom()) {
                            $fichier = $relatedfichier;
                            $bool = true;
                        }
                    } else {
                        $fichier->setCommune($commune);
                        $em->persist($fichier);
                        $em->flush();
                    }
                    if ($fichier->getTypeimpot() == "TF") {
                        $TFArticleCommuneEnTete = new TFArticleCommuneEnTete;
                        $TFArticleCommuneEnTete->newTFArticleCommuneEnTete($chaine);
                        $TFArticleCommuneEnTete->setFichier($fichier);
                        $em->persist($TFArticleCommuneEnTete);
                        $em->flush();
                        $em->detach($TFArticleCommuneEnTete);
                    }
                }
                if ($fichier->getTypeimpot() == "TH") {
                    $repository = $this->getDoctrine()->getManager()->getRepository('FiscaliteGestionFiscaliteBundle:ArticleTH');
                    $articlebis = $repository->getArticleStop($nom);
                } else {
                    $repository = $this->getDoctrine()->getManager()->getRepository('FiscaliteGestionFiscaliteBundle:ArticleTF');
                    $articlebis = $repository->getArticleStop($nom);
                }
                while (!feof($fp)) {
                    $line = fgets($fp, 1024); //prend la premiere ligne
                    $data = str_getcsv($line, "\t"); //prend la premiere ligne jusqu'a tabulations
                    $chaine = $data[0]; //prend la permiere chaine
                    $chaine = substr($chaine, 0, 352); //selectionne la chaine de 0 à 352 car
                    if ($bool) {
                        if (substr($chaine, 17, 2) == "C1" && substr($chaine, 7, 6) >= $articlebis[0]->getNumeroSequentiel() - 1) {
                            $bool = false;
                            if ($fichier->getTypeimpot() == "TH") {
                                $repository = $this->getDoctrine()->getManager()->getRepository('FiscaliteGestionFiscaliteBundle:ArticleTH');
                                $articledelete = $repository->findOneBy(array('numerosequentiel' => $articlebis[0]->getNumeroSequentiel() - 1));
                                $articledelete2 = $repository->findOneBy(array('numerosequentiel' => $articlebis[0]->getNumeroSequentiel()));
                                $em->remove($articledelete);
                                $em->flush();
                                $em->remove($articledelete2);
                                $em->flush();
                            } else if ($fichier->getTypeimpot() == "TF") {
                                $repository = $this->getDoctrine()->getManager()->getRepository('FiscaliteGestionFiscaliteBundle:ArticleTF');
                                $articledelete = $repository->findOneBy(array('numerosequentiel' => $articlebis[0]->getNumeroSequentiel() - 1));
                                $articledelete2 = $repository->findOneBy(array('numerosequentiel' => $articlebis[0]->getNumeroSequentiel()));
                                $em->remove($articledelete);
                                $em->flush();
                                $em->remove($articledelete2);
                                $em->flush();
                            }
                        }
                    } else {
                        if ($fichier->getTypeimpot() == "TH") {
                            if (substr($chaine, 17, 2) == "A1") {
                                $articlecommune = new ArticleCommune;
                                $articlecommune->newArticleCommune($fichier->getAnneetaxation(), $chaine);
                                $articlecommune->setFichier($fichier);
                                $em->persist($articlecommune);
                                $em->flush();
                                $em->detach($articlecommune);
                            } else if (substr($chaine, 17, 2) == "A3") {
                                $THArticlecommuneIFPA3 = new THArticleCommuneIFPA3;
                                $THArticlecommuneIFPA3->newTHArticlecommuneIFPA3($fichier->getAnneetaxation(), $chaine);
                                $THArticlecommuneIFPA3->setFichier($fichier);
                                $em->persist($THArticlecommuneIFPA3);
                                $em->flush();
                                $em->detach($THArticlecommuneIFPA3);
                            } else if (substr($chaine, 17, 2) == "C1") {
                                if ($article != null) {
                                    $em->detach($article);
                                }
                                $article = new ArticleTH;
                                $article->newArticle($chaine, $fichier);
                                $em->persist($article);
                                $em->flush();
                            } else if (substr($chaine, 17, 2) == "P1") {
                                $cotisation = new Cotisation;
                                $cotisation->newCotisation($chaine);
                                $cotisation->setArticleTH($article);
                                $base = new Base;
                                $base->newBase($chaine);
                                $base->setArticleTH($article);
                                $adresse = new Adresse;
                                $adresse->newAdresse($chaine);
                                $adresse->setArticleTH($article);
                                $repository = $this->getDoctrine()->getManager()->getRepository('FiscaliteGestionFiscaliteBundle:TypeRue');
                                $repotypeRue = NULL;
                                $repotypeRue = $repository->findOneBy(array('libelle' => $adresse->getLibellevoieaft()));
                                if ($repotypeRue == NULL) {
                                    $typeRue = new TypeRue;
                                    $typeRue->setLibelle($adresse->getLibellevoieaft());
                                    $em->persist($typeRue);
                                    $em->flush();
                                    $adresse->setTyperue($typeRue);
                                    $em->detach($typeRue);
                                } else {
                                    $adresse->setTyperue($repotypeRue);
                                }
                                $em->persist($base);
                                $em->flush();
                                $em->persist($adresse);
                                $em->flush();
                                $em->persist($cotisation);
                                $em->flush();
                                $em->detach($base);
                                $em->detach($adresse);
                                $em->detach($cotisation);
                            } else if (substr($chaine, 17, 2) == "P2") {
                                $abattement = new Abattement;
                                $abattement->newAbattement($fichier->getAnneetaxation(), $chaine);
                                $abattement->setArticleTH($article);
                                $em->persist($abattement);
                                $em->flush();
                                $em->detach($abattement);
                            }
                        } else if ($fichier->getTypeimpot() == "TF") {
                            if (substr($chaine, 17, 2) == "A1") {
                                $TFArticleCommuneIFP = new TFArticleCommuneIFP;
                                $TFArticleCommuneIFP->newTFArticleCommuneIFP($fichier->getAnneetaxation(), $chaine);
                                $TFArticleCommuneIFP->setFichier($fichier);
                                $em->persist($TFArticleCommuneIFP);
                                $em->flush();
                                $em->detach($TFArticleCommuneIFP);
                            } else if (substr($chaine, 17, 2) == "A2") {
                                $TFArticleCommuneSRA2 = new TFArticleCommuneSRA2;
                                $TFArticleCommuneSRA2->newTFArticleCommuneSRA2($fichier->getAnneetaxation(), $chaine);
                                $TFArticleCommuneSRA2->setFichier($fichier);
                                $em->persist($TFArticleCommuneSRA2);
                                $em->flush();
                                $em->detach($TFArticleCommuneSRA2);
                            } else if (substr($chaine, 17, 2) == "A3") {
                                $TFArticleCommuneSRA3 = new TFArticleCommuneSRA3;
                                $TFArticleCommuneSRA3->newTFArticleCommuneSRA3($fichier->getAnneetaxation(), $chaine);
                                $TFArticleCommuneSRA3->setFichier($fichier);
                                $em->persist($TFArticleCommuneSRA3);
                                $em->flush();
                                $em->detach($TFArticleCommuneSRA3);
                            } else if (substr($chaine, 17, 2) == "C1") {
                                if ($TFArticleTaxationCompteC1 != null) {
                                    $em->detach($TFArticleTaxationCompteC1);
                                }
                                $TFArticleTaxationCompteC1 = new ArticleTF;
                                $TFArticleTaxationCompteC1->newTFArticleTaxationCompte($fichier->getAnneetaxation(), $chaine);
                                $TFArticleTaxationCompteC1->setFichier($fichier);
                                $em->persist($TFArticleTaxationCompteC1);
                                $em->flush();
                            } else if (substr($chaine, 17, 2) == "C2") {
                                $TFArticleTaxationCompteC2 = new ArticleTFC2;
                                $TFArticleTaxationCompteC2->newTFArticleTaxationCompteC2($fichier->getAnneetaxation(), $chaine);
                                $TFArticleTaxationCompteC2->setArticleTF($TFArticleTaxationCompteC1);
                                $em->persist($TFArticleTaxationCompteC2);
                                $em->flush();
                                $em->detach($TFArticleTaxationCompteC2);
                            } else if (substr($chaine, 17, 2) == "N1") {
                                $TFArticleTaxationNonBati = new TFArticleTaxationNonBati;
                                $TFArticleTaxationNonBati->newTFArticleTaxationNonBati($fichier->getAnneetaxation(), $chaine);
                                $TFArticleTaxationNonBati->setArticleTF($TFArticleTaxationCompteC1);
                                $em->persist($TFArticleTaxationNonBati);
                                $em->flush();
                                $em->detach($TFArticleTaxationNonBati);
                            } else if (substr($chaine, 17, 2) == "P1") {
                                $TFArticleTaxationBati = new TFArticleTaxationBati;
                                $TFArticleTaxationBati->newTFArticleTaxationBati($fichier->getAnneetaxation(), $chaine);
                                $TFArticleTaxationBati->setArticleTF($TFArticleTaxationCompteC1);
                                $em->persist($TFArticleTaxationBati);
                                $em->flush();
                                $em->detach($TFArticleTaxationBati);
                            }
                        }
                    }
                    $i++;
                }
                fclose($fp);
                if ($bool) {
                    $this->get('session')->getFlashBag()->add('notice', "Ce fichier a déjà été enregistré.");
                    return $this->render('FiscaliteGestionFiscaliteBundle:Index:index.html.twig', array('form1' => $form->createView()));
                }
                return $this->redirect($this->generateUrl('fiscalite_new', array('id' => $fichier->getId())));
            }
        }

        return $this->render('FiscaliteGestionFiscaliteBundle:Index:index.html.twig', array('form1' => $form->createView()));
    }

    public function newAction($id) {
        $em = $this->getDoctrine()->getManager()->getRepository('FiscaliteGestionFiscaliteBundle:Fichier');
        $fichier = $em->findOneBy(array('id' => $id));
        $this->get('session')->getFlashBag()->add('notice', "Fichier chargé avec succès");
        return $this->render('FiscaliteGestionFiscaliteBundle:Index:new.html.twig', array('fichier' => $fichier));
    }

    public function rapportfichierAction() {
        $repository = $this->getDoctrine()->getManager()->getRepository('FiscaliteGestionFiscaliteBundle:Fichier');
        $fichier1 = $repository->rechercherDernierFichierTF();
        $fichier2 = $repository->rechercherDernierFichierTH();
        if ($fichier1 != NULL && $fichier2 != NULL) {
            $repository = $this->getDoctrine()->getManager()->getRepository('FiscaliteGestionFiscaliteBundle:TFArticleCommuneEnTete');
            $TFArticleCommuneEnTete = $repository->findBy(array('fichier' => $fichier1[0]));
            $repository = $this->getDoctrine()->getManager()->getRepository('FiscaliteGestionFiscaliteBundle:TFArticleCommuneIFP');
            $TFArticleCommuneIFP = $repository->findBy(array('fichier' => $fichier1[0]));
            $repository = $this->getDoctrine()->getManager()->getRepository('FiscaliteGestionFiscaliteBundle:TFArticleCommuneSRA2');
            $TFArticleCommuneSRA2 = $repository->findBy(array('fichier' => $fichier1[0]));
            $repository = $this->getDoctrine()->getManager()->getRepository('FiscaliteGestionFiscaliteBundle:TFArticleCommuneSRA3');
            $TFArticleCommuneSRA3 = $repository->findBy(array('fichier' => $fichier1[0]));
            $repository = $this->getDoctrine()->getManager()->getRepository('FiscaliteGestionFiscaliteBundle:ArticleCommune');
            $THArticleCommune = $repository->findBy(array('fichier' => $fichier2[0]));
            $repository = $this->getDoctrine()->getManager()->getRepository('FiscaliteGestionFiscaliteBundle:THArticleCommuneIFPA3');
            $THArticleCommuneIFPA3 = $repository->findBy(array('fichier' => $fichier2[0]));
            $em = $this->getDoctrine()->getManager();
            $facade = $this->get('ps_pdf.facade');
            $response = new Response();
            $this->render('FiscaliteGestionFiscaliteBundle:Index:rapportfichier.html.twig', array('ListeTFArticleCommuneEnTete' => $TFArticleCommuneEnTete, 'ListeTFArticleCommuneIFP' => $TFArticleCommuneIFP,
                'ListeTFArticleCommuneSRA2' => $TFArticleCommuneSRA2, 'ListeTFArticleCommuneSRA3' => $TFArticleCommuneSRA3, 'ListeTHArticleCommune' => $THArticleCommune,
                'ListeTHArticleCommuneIFPA3' => $THArticleCommuneIFPA3), $response);
            $xml = $response->getContent();
            $content = $facade->render($xml);
            return new Response($content, 200, array('content-type' => 'application/pdf'));
        } else {
            $this->get('session')->getFlashBag()->add('notice', "Aucun fichier enregistré");
            return $this->redirect('fiscalite');
        }
    }

}
