<?php

namespace Fiscalite\GestionFiscaliteBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class TFArticleCommuneSRA3Admin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('totBNC')
            ->add('totCNC')
            ->add('totBNS')
            ->add('totCNS')
            ->add('totBNI')
            ->add('totCNI')
            ->add('totBNTATFPNB')
            ->add('totCNTATFPNB')
            ->add('totBNTSEGP')
            ->add('totCNTSEGP')
            ->add('totBNF')
            ->add('totCNF')
            ->add('totBNCA')
            ->add('totCNCA')
            ->add('totBNCAAA')
            ->add('totCNCAAA')
            ->add('totDFCAAA')
            ->add('totFrais')
            ->add('totMER')
            ->add('totDegECF')
            ->add('totDegJACL')
            ->add('totDegJAEt')
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
            ->add('totBNC')
            ->add('totCNC')
            ->add('totBNS')
            ->add('totCNS')
            ->add('totBNI')
            ->add('totCNI')
            ->add('totBNTATFPNB')
            ->add('totCNTATFPNB')
            ->add('totBNTSEGP')
            ->add('totCNTSEGP')
            ->add('totBNF')
            ->add('totCNF')
            ->add('totBNCA')
            ->add('totCNCA')
            ->add('totBNCAAA')
            ->add('totCNCAAA')
            ->add('totDFCAAA')
            ->add('totFrais')
            ->add('totMER')
            ->add('totDegECF')
            ->add('totDegJACL')
            ->add('totDegJAEt')
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
            ->add('totBNC')
            ->add('totCNC')
            ->add('totBNS')
            ->add('totCNS')
            ->add('totBNI')
            ->add('totCNI')
            ->add('totBNTATFPNB')
            ->add('totCNTATFPNB')
            ->add('totBNTSEGP')
            ->add('totCNTSEGP')
            ->add('totBNF')
            ->add('totCNF')
            ->add('totBNCA')
            ->add('totCNCA')
            ->add('totBNCAAA')
            ->add('totCNCAAA')
            ->add('totDFCAAA')
            ->add('totFrais')
            ->add('totMER')
            ->add('totDegECF')
            ->add('totDegJACL')
            ->add('totDegJAEt')
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
            ->add('totBNC')
            ->add('totCNC')
            ->add('totBNS')
            ->add('totCNS')
            ->add('totBNI')
            ->add('totCNI')
            ->add('totBNTATFPNB')
            ->add('totCNTATFPNB')
            ->add('totBNTSEGP')
            ->add('totCNTSEGP')
            ->add('totBNF')
            ->add('totCNF')
            ->add('totBNCA')
            ->add('totCNCA')
            ->add('totBNCAAA')
            ->add('totCNCAAA')
            ->add('totDFCAAA')
            ->add('totFrais')
            ->add('totMER')
            ->add('totDegECF')
            ->add('totDegJACL')
            ->add('totDegJAEt')
            ->add('totNV')
        ;
    }
}
