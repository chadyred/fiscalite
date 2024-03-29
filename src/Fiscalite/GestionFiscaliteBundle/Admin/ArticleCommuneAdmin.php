<?php
// src/Acme/DemoBundle/Admin/PostAdmin.php

namespace Fiscalite\GestionFiscaliteBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class ArticleCommuneAdmin extends Admin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
        ->add('id')
        ->add('vlmCne')
        ->add('vlmICO')
        ->add('vlmDept')
        ->add('tauxImpositionCommune') 
        ->add('tauxImpositionSyndicats')
        ->add('tauxImpositionIntercommunalite')
        ->add('tauxImpositionTSE'); 
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
        ->add('id')
        ->add('vlmCne')
        ->add('vlmICO')
        ->add('vlmDept')
        ->add('tauxImpositionCommune') 
        ->add('tauxImpositionSyndicats')
        ->add('tauxImpositionIntercommunalite')
        ->add('tauxImpositionTSE'); 
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
        ->add('id')
        ->add('vlmCne')
        ->add('vlmICO')
        ->add('vlmDept')
        ->add('tauxImpositionCommune') 
        ->add('tauxImpositionSyndicats')
        ->add('tauxImpositionIntercommunalite')
        ->add('tauxImpositionTSE'); 
    }
}