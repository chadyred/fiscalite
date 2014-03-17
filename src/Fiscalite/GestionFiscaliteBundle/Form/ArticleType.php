<?php

namespace Fiscalite\GestionFiscaliteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;

class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('numerosequentiel','text',array('required' => false))
            ->add('nomprenom','text',array('required' => false))
            ->add('adresse', 'entity', array(
    			'class'    => 'FiscaliteGestionFiscaliteBundle:Adresse',
    			'property' => 'libellevoieaft',
    			'multiple' => false,
    			'required' => false,
    			'empty_value' => 'Choisir une Adresse',
    			'empty_data'  => null,'query_builder' => function(EntityRepository $er) {
    				return $er->createQueryBuilder('c')->groupby('c.libellevoieaft')
                                        ->orderBy('c.libellevoieaft', 'ASC');
   				}
   				))
            ->add('fichier', 'entity', array(
    			'class'    => 'FiscaliteGestionFiscaliteBundle:Fichier',
    			'property' => 'anneetaxation',
    			'multiple' => false,
    			'required' => false,
    			'empty_value' => 'Choisir une année',
    			'empty_data'  => null,'query_builder' => function(EntityRepository $er) {
    				return $er->createQueryBuilder('c')->groupby('c.anneetaxation')
                                        ->orderBy('c.anneetaxation', 'ASC');
   				}
   				))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Fiscalite\GestionFiscaliteBundle\Entity\Article'
        ));
    }

    public function getName()
    {
        return 'fiscalite_gestionfiscalitebundle_articletype';
    }
}
