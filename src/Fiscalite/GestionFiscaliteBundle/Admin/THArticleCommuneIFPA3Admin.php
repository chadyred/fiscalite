<?php

namespace Fiscalite\GestionFiscaliteBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class THArticleCommuneIFPA3Admin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('totBaseNetteCommune')
            ->add('totCotisationCommune')
            ->add('totBaseNetteSyndicale')
            ->add('totCotisationSyndicale')
            ->add('totBaseNetteInterCommunale')
            ->add('totCotisationInterCommunale')
            ->add('totBaseNetteTSE')
            ->add('totCotisationTSEhorsGP')
            ->add('totCotisationGP')
            ->add('totFrais')
            ->add('totPrelevtsurforteVL')
            ->add('totPrelevt15surTHS')
            ->add('totMER')
            ->add('totDegG')
            ->add('totPlaft')
            ->add('totNV')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id')
            ->add('totBaseNetteCommune')
            ->add('totCotisationCommune')
            ->add('totBaseNetteSyndicale')
            ->add('totCotisationSyndicale')
            ->add('totBaseNetteInterCommunale')
            ->add('totCotisationInterCommunale')
            ->add('totBaseNetteTSE')
            ->add('totCotisationTSEhorsGP')
            ->add('totCotisationGP')
            ->add('totFrais')
            ->add('totPrelevtsurforteVL')
            ->add('totPrelevt15surTHS')
            ->add('totMER')
            ->add('totDegG')
            ->add('totPlaft')
            ->add('totNV')
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
            ->add('totBaseNetteCommune')
            ->add('totCotisationCommune')
            ->add('totBaseNetteSyndicale')
            ->add('totCotisationSyndicale')
            ->add('totBaseNetteInterCommunale')
            ->add('totCotisationInterCommunale')
            ->add('totBaseNetteTSE')
            ->add('totCotisationTSEhorsGP')
            ->add('totCotisationGP')
            ->add('totFrais')
            ->add('totPrelevtsurforteVL')
            ->add('totPrelevt15surTHS')
            ->add('totMER')
            ->add('totDegG')
            ->add('totPlaft')
            ->add('totNV')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('totBaseNetteCommune')
            ->add('totCotisationCommune')
            ->add('totBaseNetteSyndicale')
            ->add('totCotisationSyndicale')
            ->add('totBaseNetteInterCommunale')
            ->add('totCotisationInterCommunale')
            ->add('totBaseNetteTSE')
            ->add('totCotisationTSEhorsGP')
            ->add('totCotisationGP')
            ->add('totFrais')
            ->add('totPrelevtsurforteVL')
            ->add('totPrelevt15surTHS')
            ->add('totMER')
            ->add('totDegG')
            ->add('totPlaft')
            ->add('totNV')
        ;
    }
}
