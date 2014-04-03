<?php

namespace Fiscalite\GestionFiscaliteBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class TFArticleCommuneIFPAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('typeTraitement')
            ->add('libCommunne')
            ->add('n0Role')
            ->add('dMER')
            ->add('dMajo')
            ->add('libSyndicatTEOM')
            ->add('tXNTATFPNB')
            ->add('tXBC')
            ->add('tXBS')
            ->add('tXBIC')
            ->add('tXBTSEGP')
            ->add('tXBTSEF')
            ->add('tXBTOMP')
            ->add('tXBTOMRA')
            ->add('tXBTOMRB')
            ->add('tXBTOMRC')
            ->add('tXBTOMRD')
            ->add('typeBENEFOM')
            ->add('tXNC')
            ->add('tXNS')
            ->add('tXNIC')
            ->add('tXNTSEGP')
            ->add('tXNTSEF')
            ->add('tXNCAAA')
            ->add('libelleICAdhC')
            ->add('optionSupportIC')
            ->add('optionSupportC')
            ->add('optionSupportDept')
            ->add('codeBeneficiaireOM')
            ->add('sIREN')
            ->add('codeKSyndicatBeneficiaireTEOM')
            ->add('codeBeneficiaireTATFPNB')
            ->add('batiEPCI')
            ->add('nonBatiEPCI')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id')
            ->add('typeTraitement')
            ->add('libCommunne')
            ->add('n0Role')
            ->add('dMER')
            ->add('dMajo')
            ->add('libSyndicatTEOM')
            ->add('tXNTATFPNB')
            ->add('tXBC')
            ->add('tXBS')
            ->add('tXBIC')
            ->add('tXBTSEGP')
            ->add('tXBTSEF')
            ->add('tXBTOMP')
            ->add('tXBTOMRA')
            ->add('tXBTOMRB')
            ->add('tXBTOMRC')
            ->add('tXBTOMRD')
            ->add('typeBENEFOM')
            ->add('tXNC')
            ->add('tXNS')
            ->add('tXNIC')
            ->add('tXNTSEGP')
            ->add('tXNTSEF')
            ->add('tXNCAAA')
            ->add('libelleICAdhC')
            ->add('optionSupportIC')
            ->add('optionSupportC')
            ->add('optionSupportDept')
            ->add('codeBeneficiaireOM')
            ->add('sIREN')
            ->add('codeKSyndicatBeneficiaireTEOM')
            ->add('codeBeneficiaireTATFPNB')
            ->add('batiEPCI')
            ->add('nonBatiEPCI')
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
            ->add('typeTraitement')
            ->add('libCommunne')
            ->add('n0Role')
            ->add('dMER')
            ->add('dMajo')
            ->add('libSyndicatTEOM')
            ->add('tXNTATFPNB')
            ->add('tXBC')
            ->add('tXBS')
            ->add('tXBIC')
            ->add('tXBTSEGP')
            ->add('tXBTSEF')
            ->add('tXBTOMP')
            ->add('tXBTOMRA')
            ->add('tXBTOMRB')
            ->add('tXBTOMRC')
            ->add('tXBTOMRD')
            ->add('typeBENEFOM')
            ->add('tXNC')
            ->add('tXNS')
            ->add('tXNIC')
            ->add('tXNTSEGP')
            ->add('tXNTSEF')
            ->add('tXNCAAA')
            ->add('libelleICAdhC')
            ->add('optionSupportIC')
            ->add('optionSupportC')
            ->add('optionSupportDept')
            ->add('codeBeneficiaireOM')
            ->add('sIREN')
            ->add('codeKSyndicatBeneficiaireTEOM')
            ->add('codeBeneficiaireTATFPNB')
            ->add('batiEPCI')
            ->add('nonBatiEPCI')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('typeTraitement')
            ->add('libCommunne')
            ->add('n0Role')
            ->add('dMER')
            ->add('dMajo')
            ->add('libSyndicatTEOM')
            ->add('tXNTATFPNB')
            ->add('tXBC')
            ->add('tXBS')
            ->add('tXBIC')
            ->add('tXBTSEGP')
            ->add('tXBTSEF')
            ->add('tXBTOMP')
            ->add('tXBTOMRA')
            ->add('tXBTOMRB')
            ->add('tXBTOMRC')
            ->add('tXBTOMRD')
            ->add('typeBENEFOM')
            ->add('tXNC')
            ->add('tXNS')
            ->add('tXNIC')
            ->add('tXNTSEGP')
            ->add('tXNTSEF')
            ->add('tXNCAAA')
            ->add('libelleICAdhC')
            ->add('optionSupportIC')
            ->add('optionSupportC')
            ->add('optionSupportDept')
            ->add('codeBeneficiaireOM')
            ->add('sIREN')
            ->add('codeKSyndicatBeneficiaireTEOM')
            ->add('codeBeneficiaireTATFPNB')
            ->add('batiEPCI')
            ->add('nonBatiEPCI')
        ;
    }
}
