<?php

namespace Fiscalite\GestionFiscaliteBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class TFArticleTaxationNonBatiAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('numerosequentiel')
            ->add('baseC')
            ->add('baseIC')
            ->add('baseTATFPNB')
            ->add('baseTSE')
            ->add('baseCA')
            ->add('baseCAAA')
            ->add('baseTerrainsConstr')
            ->add('bFF')
            ->add('cotisationC')
            ->add('cotisationS')
            ->add('cotisationIC')
            ->add('cotisationTATFPNB')
            ->add('cotisationTSE')
            ->add('cotisationTSEF')
            ->add('cotisationCA')
            ->add('cotisationCAAADF')
            ->add('cotisationCAAADP')
            ->add('total')
            ->add('baseJACLC')
            ->add('baseJACLS')
            ->add('baseJACLIC')
            ->add('baseJAEC')
            ->add('baseJAES')
            ->add('baseJAEIC')
            ->add('cotisationJACL')
            ->add('cotisationJAEtat')
            ->add('baseImposableTACetSyndicat')
            ->add('baseImposableTAIC')
            ->add('baseImposableTAChambreAgriculture')
            ->add('baseImposableTACAAA')
            ->add('cotisationGlobaleTSE')
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
            ->add('baseC')
            ->add('baseIC')
            ->add('baseTATFPNB')
            ->add('baseTSE')
            ->add('baseCA')
            ->add('baseCAAA')
            ->add('baseTerrainsConstr')
            ->add('bFF')
            ->add('cotisationC')
            ->add('cotisationS')
            ->add('cotisationIC')
            ->add('cotisationTATFPNB')
            ->add('cotisationTSE')
            ->add('cotisationTSEF')
            ->add('cotisationCA')
            ->add('cotisationCAAADF')
            ->add('cotisationCAAADP')
            ->add('total')
            ->add('baseJACLC')
            ->add('baseJACLS')
            ->add('baseJACLIC')
            ->add('baseJAEC')
            ->add('baseJAES')
            ->add('baseJAEIC')
            ->add('cotisationJACL')
            ->add('cotisationJAEtat')
            ->add('baseImposableTACetSyndicat')
            ->add('baseImposableTAIC')
            ->add('baseImposableTAChambreAgriculture')
            ->add('baseImposableTACAAA')
            ->add('cotisationGlobaleTSE')
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
            ->add('baseC')
            ->add('baseIC')
            ->add('baseTATFPNB')
            ->add('baseTSE')
            ->add('baseCA')
            ->add('baseCAAA')
            ->add('baseTerrainsConstr')
            ->add('bFF')
            ->add('cotisationC')
            ->add('cotisationS')
            ->add('cotisationIC')
            ->add('cotisationTATFPNB')
            ->add('cotisationTSE')
            ->add('cotisationTSEF')
            ->add('cotisationCA')
            ->add('cotisationCAAADF')
            ->add('cotisationCAAADP')
            ->add('total')
            ->add('baseJACLC')
            ->add('baseJACLS')
            ->add('baseJACLIC')
            ->add('baseJAEC')
            ->add('baseJAES')
            ->add('baseJAEIC')
            ->add('cotisationJACL')
            ->add('cotisationJAEtat')
            ->add('baseImposableTACetSyndicat')
            ->add('baseImposableTAIC')
            ->add('baseImposableTAChambreAgriculture')
            ->add('baseImposableTACAAA')
            ->add('cotisationGlobaleTSE')
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
            ->add('baseC')
            ->add('baseIC')
            ->add('baseTATFPNB')
            ->add('baseTSE')
            ->add('baseCA')
            ->add('baseCAAA')
            ->add('baseTerrainsConstr')
            ->add('bFF')
            ->add('cotisationC')
            ->add('cotisationS')
            ->add('cotisationIC')
            ->add('cotisationTATFPNB')
            ->add('cotisationTSE')
            ->add('cotisationTSEF')
            ->add('cotisationCA')
            ->add('cotisationCAAADF')
            ->add('cotisationCAAADP')
            ->add('total')
            ->add('baseJACLC')
            ->add('baseJACLS')
            ->add('baseJACLIC')
            ->add('baseJAEC')
            ->add('baseJAES')
            ->add('baseJAEIC')
            ->add('cotisationJACL')
            ->add('cotisationJAEtat')
            ->add('baseImposableTACetSyndicat')
            ->add('baseImposableTAIC')
            ->add('baseImposableTAChambreAgriculture')
            ->add('baseImposableTACAAA')
            ->add('cotisationGlobaleTSE')
        ;
    }
}
