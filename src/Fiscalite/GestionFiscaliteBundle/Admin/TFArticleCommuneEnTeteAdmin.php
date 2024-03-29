<?php

namespace Fiscalite\GestionFiscaliteBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class TFArticleCommuneEnTeteAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('typeTaxe')
            ->add('annee')
            ->add('dateTraitement')
            ->add('libDIR')
            ->add('libelleCollectivite')
            ->add('tXBD')
            ->add('tXNCA')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id')
            ->add('typeTaxe')
            ->add('annee')
            ->add('dateTraitement')
            ->add('libDIR')
            ->add('libelleCollectivite')
            ->add('tXBD')
            ->add('tXNCA')
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
            ->add('typeTaxe')
            ->add('annee')
            ->add('dateTraitement')
            ->add('libDIR')
            ->add('libelleCollectivite')
            ->add('tXBD')
            ->add('tXNCA')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('typeTaxe')
            ->add('annee')
            ->add('dateTraitement')
            ->add('libDIR')
            ->add('libelleCollectivite')
            ->add('tXBD')
            ->add('tXNCA')
        ;
    }
}
