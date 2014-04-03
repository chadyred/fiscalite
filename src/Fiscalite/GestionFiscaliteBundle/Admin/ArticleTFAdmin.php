<?php

namespace Fiscalite\GestionFiscaliteBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class ArticleTFAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('numerosequentiel')
            ->add('codeArticle')
            ->add('codeDirection')
            ->add('codeCommune')
            ->add('codeAdresseTaxation')
            ->add('numeroRole')
            ->add('cTresorerie')
            ->add('cCDIF')
            ->add('cSecteur')
            ->add('sommeAPayer')
            ->add('cotisationInferieur12')
            ->add('fraisDeFDL')
            ->add('titreEtDesignation')
            ->add('suiteDesignation')
            ->add('complementAdresse')
            ->add('ligneVoie')
            ->add('ligneLieuDit')
            ->add('ligneCodePostalEtCommune')
            ->add('codeDR')
            ->add('codeDEM')
            ->add('baseECF')
            ->add('dECHABPLE')
            ->add('hCNT')
            ->add('bOND')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id')
            ->add('numerosequentiel')
            ->add('codeArticle')
            ->add('codeDirection')
            ->add('codeCommune')
            ->add('codeAdresseTaxation')
            ->add('numeroRole')
            ->add('cTresorerie')
            ->add('cCDIF')
            ->add('cSecteur')
            ->add('sommeAPayer')
            ->add('cotisationInferieur12')
            ->add('fraisDeFDL')
            ->add('titreEtDesignation')
            ->add('suiteDesignation')
            ->add('complementAdresse')
            ->add('ligneVoie')
            ->add('ligneLieuDit')
            ->add('ligneCodePostalEtCommune')
            ->add('codeDR')
            ->add('codeDEM')
            ->add('baseECF')
            ->add('dECHABPLE')
            ->add('hCNT')
            ->add('bOND')
            ->add('_action', 'actions', array(
                'actions' => array(
                    'show' => array(),
                    'edit' => array(),
                    'delete' => array(),
                )
            ))
        ;
    }

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('id')
            ->add('numerosequentiel')
            ->add('codeArticle')
            ->add('codeDirection')
            ->add('codeCommune')
            ->add('codeAdresseTaxation')
            ->add('numeroRole')
            ->add('cTresorerie')
            ->add('cCDIF')
            ->add('cSecteur')
            ->add('sommeAPayer')
            ->add('cotisationInferieur12')
            ->add('fraisDeFDL')
            ->add('titreEtDesignation')
            ->add('suiteDesignation')
            ->add('complementAdresse')
            ->add('ligneVoie')
            ->add('ligneLieuDit')
            ->add('ligneCodePostalEtCommune')
            ->add('codeDR')
            ->add('codeDEM')
            ->add('baseECF')
            ->add('dECHABPLE')
            ->add('hCNT')
            ->add('bOND')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('numerosequentiel')
            ->add('codeArticle')
            ->add('codeDirection')
            ->add('codeCommune')
            ->add('codeAdresseTaxation')
            ->add('numeroRole')
            ->add('cTresorerie')
            ->add('cCDIF')
            ->add('cSecteur')
            ->add('sommeAPayer')
            ->add('cotisationInferieur12')
            ->add('fraisDeFDL')
            ->add('titreEtDesignation')
            ->add('suiteDesignation')
            ->add('complementAdresse')
            ->add('ligneVoie')
            ->add('ligneLieuDit')
            ->add('ligneCodePostalEtCommune')
            ->add('codeDR')
            ->add('codeDEM')
            ->add('baseECF')
            ->add('dECHABPLE')
            ->add('hCNT')
            ->add('bOND')
        ;
    }
}
