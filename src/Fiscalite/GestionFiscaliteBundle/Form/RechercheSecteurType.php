<?php

namespace Fiscalite\GestionFiscaliteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;

class RechercheSecteurType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('nom', 'text', array('required' => false, 'attr' => array('class' => 'col-xs-12')))
                ->add('nombreIndividu', 'text', array('required' => false, 'attr' => array('class' => 'col-xs-12')))
                ->add('left_name', 'entity', array('attr' => array('class' => 'secteurtyperue'),
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
                ->add('right_name', 'entity', array('attr' => array('class' => 'col-xs-12'),
                    'class' => 'FiscaliteGestionFiscaliteBundle:TypeRue',
                    'multiple' => true,
                    'property' => 'libelle',
                    'required' => false,
                    'empty_value' => 'Adresse',
                    'empty_data' => null,
                    'required' => false,
                    'query_builder' => function(EntityRepository $er) {
                return $er->createQueryBuilder('c')->orderBy('c.libelle', 'ASC');
            },
                    'attr' => array('class' => 'col-sm-12')))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Fiscalite\GestionFiscaliteBundle\Entity\RechercheSecteur',
        ));
    }

    public function getName() {
        return 'fiscalite';
    }

}
