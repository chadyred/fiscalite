<?php

namespace Fiscalite\GestionFiscaliteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SimulationArticleTFType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('nomSimulation', 'text', array('required' => true, 'attr' => array('placeholder' => 'Nom de la nouvelle simulation')))
                ->add('tauxBatiCommune','integer', array('required' => false, 'attr' => array('placeholder' => '26,16 %')))
                ->add('tauxNonBatiCommune', 'integer', array('required' => false, 'attr' => array('placeholder' => '71,40 %')))
                ->add('nom','text', array('required' => false, 'attr' => array('placeholder' => 'Titre et désignation')))
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Fiscalite\GestionFiscaliteBundle\Entity\SimulationArticleTF'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'fiscalite_gestionfiscalitebundle_simulationarticletf';
    }

}
