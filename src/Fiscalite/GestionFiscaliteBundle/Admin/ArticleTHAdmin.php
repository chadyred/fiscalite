<?php

namespace Fiscalite\GestionFiscaliteBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class ArticleTHAdmin extends Admin
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
            ->add('nomprenom')
            ->add('suitenom')
            ->add('montantnetapayer')
            ->add('montantdesfraisderole')
            ->add('codeTAX')
            ->add('montantnonvaleureventuelle')
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
            ->add('nomprenom')
            ->add('suitenom')
            ->add('montantnetapayer')
            ->add('montantdesfraisderole')
            ->add('codeTAX')
            ->add('montantnonvaleureventuelle')
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
            ->add('nomprenom')
            ->add('suitenom')
            ->add('montantnetapayer')
            ->add('montantdesfraisderole')
            ->add('codeTAX')
            ->add('montantnonvaleureventuelle')
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
            ->add('nomprenom')
            ->add('suitenom')
            ->add('montantnetapayer')
            ->add('montantdesfraisderole')
            ->add('codeTAX')
            ->add('montantnonvaleureventuelle')
        ;
    }
}
