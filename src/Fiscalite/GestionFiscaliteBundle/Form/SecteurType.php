<?php

namespace Fiscalite\GestionFiscaliteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;

class SecteurType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('nom', 'text', array('required' => true, 'attr' => array('class' => 'col-sm-12')))
                ->add('nombreIndividu', 'text', array('required' => false, 'attr' => array('class' => 'col-sm-12')))
                ->add('typerue', 'entity', array('attr' => array('class' => 'secteurtyperue'),
                    'class' => 'FiscaliteGestionFiscaliteBundle:TypeRue',
                    'property' => 'libelle',
                    'multiple' => true,
                    'required' => false,
                    'empty_value' => 'Adresse',
                    'empty_data' => null,
                    'query_builder' => function(EntityRepository $er) {
                        return $er->createQueryBuilder('c')->orderBy('c.libelle', 'ASC');
                    },
                    'attr' => array('class' => 'col-sm-12')))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Fiscalite\GestionFiscaliteBundle\Entity\Secteur'
        ));
    }

    public function getName() {
        return 'fiscalite_gestionfiscalitebundle_secteurtype';
    }

}
