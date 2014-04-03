<?php

namespace Fiscalite\GestionFiscaliteBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class SimulationArticleTHAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('nomSimulation')
            ->add('abattementgeneralbasecommunale')
            ->add('abattementpersonneschargecommunal12')
            ->add('abattementpersonneschargecommunal3')
            ->add('abattementspecialbasecommunal')
            ->add('abattementspecialhandicapebasecommunal')
            ->add('nom')
            ->add('prenom')
            ->add('tauximpositioncommune')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id')
            ->add('nomSimulation')
            ->add('abattementgeneralbasecommunale')
            ->add('abattementpersonneschargecommunal12')
            ->add('abattementpersonneschargecommunal3')
            ->add('abattementspecialbasecommunal')
            ->add('abattementspecialhandicapebasecommunal')
            ->add('nom')
            ->add('prenom')
            ->add('tauximpositioncommune')
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
            ->add('nomSimulation')
            ->add('abattementgeneralbasecommunale')
            ->add('abattementpersonneschargecommunal12')
            ->add('abattementpersonneschargecommunal3')
            ->add('abattementspecialbasecommunal')
            ->add('abattementspecialhandicapebasecommunal')
            ->add('nom')
            ->add('prenom')
            ->add('tauximpositioncommune')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('nomSimulation')
            ->add('abattementgeneralbasecommunale')
            ->add('abattementpersonneschargecommunal12')
            ->add('abattementpersonneschargecommunal3')
            ->add('abattementspecialbasecommunal')
            ->add('abattementspecialhandicapebasecommunal')
            ->add('nom')
            ->add('prenom')
            ->add('tauximpositioncommune')
        ;
    }
}
