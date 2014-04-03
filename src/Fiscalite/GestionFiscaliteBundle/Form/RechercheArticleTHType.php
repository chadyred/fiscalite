<?php

namespace Fiscalite\GestionFiscaliteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;

class RechercheArticleTHType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('anneetaxation', 'entity', array(
                    'class' => 'FiscaliteGestionFiscaliteBundle:Fichier',
                    'property' => 'anneetaxation',
                    'multiple' => true,
                    'required' => false,
                    'empty_value' => 'Année de taxation',
                    'empty_data' => null, 'query_builder' => function(EntityRepository $er) {
                return $er->createQueryBuilder('c')->orderBy('c.anneetaxation', 'ASC')->groupby('c.anneetaxation');
            },'attr' => array('class' => 'col-sm-12')))
            ->add('nompersonne', 'text', array('required' => false))
            ->add('nbpersonnesacharge', 'integer', array('required' => false, 'attr' => array('class' => 'col-sm-12')))
            ->add('basenettemin', 'text', array('required' => false, 'attr' => array('placeholder' => 'min €', 'class' => 'col-sm-12')))
            ->add('basenettemax', 'text', array('required' => false, 'attr' => array('placeholder' => 'max €', 'class' => 'col-sm-12')))
            ->add('abattementgeneralbasecommunale', 'integer', array('required' => false))
            ->add('abattementpersonneschargecommunnal', 'integer', array('required' => false))
            ->add('abattementspecialbasecommunal', 'integer', array('required' => false))
            ->add('abattementspecialhandicapecommunal', 'integer', array('required' => false))
            ->add('cotisationcommunalemin', 'text', array('required' => false, 'attr' => array('placeholder' => 'min €', 'class' => 'col-sm-12')))
            ->add('cotisationcommunalemax', 'text', array('required' => false, 'attr' => array('placeholder' => 'max €', 'class' => 'col-sm-12')))
            ->add('montantnetapayermin', 'text', array('required' => false, 'attr' => array('placeholder' => 'min €', 'class' => 'col-sm-12')))
            ->add('montantnetapayermax', 'text', array('required' => false, 'attr' => array('placeholder' => 'max €', 'class' => 'col-sm-12')))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Fiscalite\GestionFiscaliteBundle\Entity\RechercheArticleTH'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'fiscalite_gestionfiscalitebundle_recherchearticleth';
    }
}
