<?php

namespace Fiscalite\GestionFiscaliteBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class TFArticleCommuneSRA2Admin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('totBBC')
            ->add('totCBC')
            ->add('totBBS')
            ->add('totCBS')
            ->add('totBBI')
            ->add('totCBI')
            ->add('totBBD')
            ->add('totCBD')
            ->add('totBBTSEGP')
            ->add('totCBTSEGP')
            ->add('totBBF')
            ->add('totCBF')
            ->add('totBOP')
            ->add('totCOP')
            ->add('totBORA')
            ->add('totCORA')
            ->add('totBORB')
            ->add('totCORB')
            ->add('totBORC')
            ->add('totCORC')
            ->add('totBORD')
            ->add('totCORD')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id')
            ->add('totBBC')
            ->add('totCBC')
            ->add('totBBS')
            ->add('totCBS')
            ->add('totBBI')
            ->add('totCBI')
            ->add('totBBD')
            ->add('totCBD')
            ->add('totBBTSEGP')
            ->add('totCBTSEGP')
            ->add('totBBF')
            ->add('totCBF')
            ->add('totBOP')
            ->add('totCOP')
            ->add('totBORA')
            ->add('totCORA')
            ->add('totBORB')
            ->add('totCORB')
            ->add('totBORC')
            ->add('totCORC')
            ->add('totBORD')
            ->add('totCORD')
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
            ->add('totBBC')
            ->add('totCBC')
            ->add('totBBS')
            ->add('totCBS')
            ->add('totBBI')
            ->add('totCBI')
            ->add('totBBD')
            ->add('totCBD')
            ->add('totBBTSEGP')
            ->add('totCBTSEGP')
            ->add('totBBF')
            ->add('totCBF')
            ->add('totBOP')
            ->add('totCOP')
            ->add('totBORA')
            ->add('totCORA')
            ->add('totBORB')
            ->add('totCORB')
            ->add('totBORC')
            ->add('totCORC')
            ->add('totBORD')
            ->add('totCORD')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('totBBC')
            ->add('totCBC')
            ->add('totBBS')
            ->add('totCBS')
            ->add('totBBI')
            ->add('totCBI')
            ->add('totBBD')
            ->add('totCBD')
            ->add('totBBTSEGP')
            ->add('totCBTSEGP')
            ->add('totBBF')
            ->add('totCBF')
            ->add('totBOP')
            ->add('totCOP')
            ->add('totBORA')
            ->add('totCORA')
            ->add('totBORB')
            ->add('totCORB')
            ->add('totBORC')
            ->add('totCORC')
            ->add('totBORD')
            ->add('totCORD')
        ;
    }
}
