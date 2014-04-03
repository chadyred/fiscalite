<?php

namespace Fiscalite\GestionFiscaliteBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class TFArticleTaxationBatiAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('numerosequentiel')
            ->add('codeVoie')
            ->add('numeroImmeuble')
            ->add('btq')
            ->add('libVoie')
            ->add('baseC')
            ->add('baseS')
            ->add('baseIC')
            ->add('baseD')
            ->add('baseTSE')
            ->add('baseOM')
            ->add('cotisationC')
            ->add('cotisationS')
            ->add('cotisationIC')
            ->add('cotisationD')
            ->add('cotisationTSE')
            ->add('cotisationTSEetTSEGP')
            ->add('cotisationOM')
            ->add('totalCotisationBatiesHorsFrais')
            ->add('codeOM')
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
            ->add('codeVoie')
            ->add('numeroImmeuble')
            ->add('btq')
            ->add('libVoie')
            ->add('baseC')
            ->add('baseS')
            ->add('baseIC')
            ->add('baseD')
            ->add('baseTSE')
            ->add('baseOM')
            ->add('cotisationC')
            ->add('cotisationS')
            ->add('cotisationIC')
            ->add('cotisationD')
            ->add('cotisationTSE')
            ->add('cotisationTSEetTSEGP')
            ->add('cotisationOM')
            ->add('totalCotisationBatiesHorsFrais')
            ->add('codeOM')
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
            ->add('codeVoie')
            ->add('numeroImmeuble')
            ->add('btq')
            ->add('libVoie')
            ->add('baseC')
            ->add('baseS')
            ->add('baseIC')
            ->add('baseD')
            ->add('baseTSE')
            ->add('baseOM')
            ->add('cotisationC')
            ->add('cotisationS')
            ->add('cotisationIC')
            ->add('cotisationD')
            ->add('cotisationTSE')
            ->add('cotisationTSEetTSEGP')
            ->add('cotisationOM')
            ->add('totalCotisationBatiesHorsFrais')
            ->add('codeOM')
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
            ->add('codeVoie')
            ->add('numeroImmeuble')
            ->add('btq')
            ->add('libVoie')
            ->add('baseC')
            ->add('baseS')
            ->add('baseIC')
            ->add('baseD')
            ->add('baseTSE')
            ->add('baseOM')
            ->add('cotisationC')
            ->add('cotisationS')
            ->add('cotisationIC')
            ->add('cotisationD')
            ->add('cotisationTSE')
            ->add('cotisationTSEetTSEGP')
            ->add('cotisationOM')
            ->add('totalCotisationBatiesHorsFrais')
            ->add('codeOM')
        ;
    }
}
