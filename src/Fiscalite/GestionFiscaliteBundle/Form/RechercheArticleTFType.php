<?php

namespace Fiscalite\GestionFiscaliteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;

class RechercheArticleTFType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('anneetaxation', 'entity', array(
                    'class' => 'FiscaliteGestionFiscaliteBundle:Fichier',
                    'property' => 'anneetaxation',
                    'multiple' => false,
                    'required' => false,
                    'empty_value' => 'Année de taxation',
                    'empty_data' => null, 'query_builder' => function(EntityRepository $er) {
                        return $er->createQueryBuilder('c')->orderBy('c.anneetaxation', 'ASC')->groupby('c.anneetaxation');
                    },
                    'attr' => array('class' => 'col-lg-7')))
                ->add('titreetdesignation', 'text', array('required' => false))
                ->add('sommeapayermin', 'integer', array('required' => false, 'attr' => array('placeholder' => 'min €', 'class' => 'col-lg-7')))
                ->add('sommeapayermax', 'integer', array('required' => false, 'attr' => array('placeholder' => 'max €', 'class' => 'col-lg-7')))

        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Fiscalite\GestionFiscaliteBundle\Entity\RechercheArticleTF'
        ));
    }

    public function getName() {
        return 'fiscalite_gestionfiscalitebundle_recherchearticletftype';
    }

}
