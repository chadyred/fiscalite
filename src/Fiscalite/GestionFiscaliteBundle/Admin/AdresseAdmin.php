<?php
// src/Acme/DemoBundle/Admin/PostAdmin.php

namespace Fiscalite\GestionFiscaliteBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class AdresseAdmin extends Admin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
        ->add('id')
        ->add('codevoie')
        ->add('numeroimmeubleaft')
        ->add('indicederepetition')
        ->add('libellevoieaft');                
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
        ->add('id')
        ->add('codevoie')
        ->add('numeroimmeubleaft')
        ->add('indicederepetition')
        ->add('libellevoieaft');
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
        ->add('id')
        ->add('codevoie')
        ->add('numeroimmeubleaft')
        ->add('indicederepetition')
        ->add('libellevoieaft');
    }
}