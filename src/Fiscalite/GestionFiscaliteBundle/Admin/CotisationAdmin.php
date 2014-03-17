<?php
// src/Acme/DemoBundle/Admin/PostAdmin.php

namespace Fiscalite\GestionFiscaliteBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class CotisationAdmin extends Admin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('id')
            ->add('numerosequentiel')
            ->add('cotisationcommunale')
            ->add('cotisationintercommunalite')
            ->add('cotisationsyndicats')
            ->add('cotisationtse')
            ->add('nbpersonnesacharge')
            ->add('totalcotisationsbrutes')
            ->add('montantprelevementsurfortevl')
            ->add('montantprelevementde15surths')
            ->add('totaldesCotisationsFraisPrelevements')
            ->add('montantdudegrevementouplafonnementeffectif')
            ->add('vlbruteimposeedeslocauxprincipaux');

    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
                     ->add('id')
            ->add('numerosequentiel')
            ->add('cotisationcommunale')
            ->add('cotisationintercommunalite')
            ->add('cotisationsyndicats')
            ->add('cotisationtse')
            ->add('nbpersonnesacharge')
            ->add('totalcotisationsbrutes')
            ->add('montantprelevementsurfortevl')
            ->add('montantprelevementde15surths')
            ->add('totaldesCotisationsFraisPrelevements')
            ->add('montantdudegrevementouplafonnementeffectif')
            ->add('vlbruteimposeedeslocauxprincipaux');
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
                        ->add('id')
            ->add('numerosequentiel')
            ->add('cotisationcommunale')
            ->add('cotisationintercommunalite')
            ->add('cotisationsyndicats')
            ->add('cotisationtse')
            ->add('nbpersonnesacharge')
            ->add('totalcotisationsbrutes')
            ->add('montantprelevementsurfortevl')
            ->add('montantprelevementde15surths')
            ->add('totaldesCotisationsFraisPrelevements')
            ->add('montantdudegrevementouplafonnementeffectif')
            ->add('vlbruteimposeedeslocauxprincipaux');
    }
}