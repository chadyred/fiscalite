<?php

namespace Fiscalite\GestionFiscaliteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;

class RechercheArticleTHType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
             ->add('anneetaxation', 'entity', array(
    			'class'    => 'FiscaliteGestionFiscaliteBundle:Fichier',
    			'property' => 'anneetaxation',
    			'multiple' => false,
    			'required' => false,
    			'empty_value' => 'Année de taxation',
    			'empty_data'  => null,'query_builder' => function(EntityRepository $er) {
    				return $er->createQueryBuilder('c')->orderBy('c.anneetaxation', 'ASC')->groupby('c.anneetaxation');
   				},
   				'attr'=> array('class'=>'col-sm-12')))
            ->add('nompersonne','text',array('required' => false))
            ->add('basenettemin','integer',array('required' => false,'attr'=> array('placeholder' => 'min €','class'=>'col-sm-12')))
            ->add('basenettemax','integer',array('required' => false,'attr'=> array('placeholder' => 'max €','class'=>'col-sm-12')))
            ->add('montantnetapayermin','integer',array('required' => false,'attr'=> array('placeholder' => 'min €','class'=>'col-sm-12')))
            ->add('montantnetapayermax','integer',array('required' => false,'attr'=> array('placeholder' => 'max €','class'=>'col-sm-12')))
            ->add('cotisationcommunalemin','integer',array('required' => false,'attr'=> array('placeholder' => 'min €','class'=>'col-sm-12')))
            ->add('cotisationcommunalemax','integer',array('required' => false,'attr'=> array('placeholder' => 'max €','class'=>'col-sm-12')))
            ->add('cotisationintercommunalitemin','integer',array('required' => false,'attr'=> array('placeholder' => 'min €','class'=>'col-sm-12')))
            ->add('cotisationintercommunalitemax','integer',array('required' => false,'attr'=> array('placeholder' => 'max €','class'=>'col-sm-12')))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Fiscalite\GestionFiscaliteBundle\Entity\RechercheArticleTH'
        ));
    }

    public function getName()
    {
        return 'fiscalite_gestionfiscalitebundle_recherchearticlethtype';
    }
}
