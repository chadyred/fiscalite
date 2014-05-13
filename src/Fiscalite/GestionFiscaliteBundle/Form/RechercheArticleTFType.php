<?php

namespace Fiscalite\GestionFiscaliteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;

class RechercheArticleTFType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('fichier', 'entity', array(
                    'class' => 'FiscaliteGestionFiscaliteBundle:Fichier',
                    'property' => 'anneetaxation',
                    'multiple' => true,
                    'required' => false,
                    'empty_value' => 'Année de taxation',
                    'empty_data' => null, 'query_builder' => function(EntityRepository $er) {
                return $er->createQueryBuilder('c')->orderBy('c.anneetaxation', 'ASC')->groupby('c.anneetaxation');
            },
                    'attr' => array('class' => 'col-sm-12')))
                ->add('sommeapayermin', 'integer', array('required' => false, 'attr' => array('placeholder' => 'min €', 'class' => 'col-sm-12')))
                ->add('sommeapayermax', 'integer', array('required' => false, 'attr' => array('placeholder' => 'max €', 'class' => 'col-sm-12')))
                ->add('adresse', 'text', array('required' => false))
                ->add('titreetdesignation', 'text', array('required' => false))

        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Fiscalite\GestionFiscaliteBundle\Entity\RechercheArticleTF'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'fiscalite_gestionfiscalitebundle_recherchearticletftype';
    }

}
