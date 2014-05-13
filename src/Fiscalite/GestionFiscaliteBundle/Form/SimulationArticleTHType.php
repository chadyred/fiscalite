<?php

namespace Fiscalite\GestionFiscaliteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;

class SimulationArticleTHType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('nomSimulation', 'text', array('required' => true, 'attr' => array('placeholder' => 'Nom de la nouvelle simulation', 'class' => 'span7')))
                ->add('abattementgeneralbasecommunale', 'choice', array(
                    'choices' => array('15' => '15 %', '5' => '5 %', '10' => '10 %'),
                    'required' => false,
                    'empty_value' => false, 'attr' => array('class' => 'span7')
                ))
                ->add('abattementpersonneschargecommunal12', 'integer', array('required' => false, 'attr' => array('placeholder' => '10%', 'class' => 'span7')))
                ->add('abattementpersonneschargecommunal3', 'integer', array('required' => false, 'attr' => array('placeholder' => '15%', 'class' => 'span7')))
                ->add('abattementspecialbasecommunal', 'integer', array('required' => false, 'attr' => array('placeholder' => '0%', 'class' => 'span7')))
                ->add('abattementspecialhandicapebasecommunal', 'integer', array('required' => false, 'attr' => array('placeholder' => '15%', 'class' => 'span7')))
                ->add('nom', 'text', array('required' => false, 'attr' => array('placeholder' => 'nom', 'class' => 'span7')))
                ->add('prenom', 'text', array('required' => false, 'attr' => array('placeholder' => 'prénom', 'class' => 'span7')))
                ->add('tauximpositioncommune', 'text', array('required' => false, 'attr' => array('placeholder' => '16,15%', 'class' => 'span7')))
                ->add('secteur', 'entity', array('attr' => array('class' => 'col-xs-12'),
                    'class' => 'FiscaliteGestionFiscaliteBundle:Secteur',
                    'property'=>'nom',
                    'multiple' => true,
                    'required' => false,
                    'empty_value' => 'Aucune Simulation',
                    'empty_data' => null,
                    'query_builder' => function(EntityRepository $er) {
                return $er->createQueryBuilder('c')->orderBy('c.nom', 'ASC');
            }))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Fiscalite\GestionFiscaliteBundle\Entity\SimulationArticleTH'
        ));
    }

    public function getName() {
        return 'fiscalite_gestionfiscalitebundle_simulationarticlethtype';
    }

}
