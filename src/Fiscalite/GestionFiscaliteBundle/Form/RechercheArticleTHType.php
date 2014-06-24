<?php

namespace Fiscalite\GestionFiscaliteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;

class RechercheArticleTHType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('fichier', 'entity', array(
                    'class' => 'FiscaliteGestionFiscaliteBundle:Fichier',
                    'property' => 'anneetaxation',
                    'multiple' => false,
                    'required' => false,
                    'empty_value' => 'Année de taxation',
                    'empty_data' => null, 'query_builder' => function(EntityRepository $er) {
                return $er->createQueryBuilder('c')->orderBy('c.anneetaxation', 'ASC')->groupby('c.anneetaxation');
            }, 'attr' => array('class' => 'col-sm-12')))
                ->add('secteur', 'entity', array(
                    'class' => 'FiscaliteGestionFiscaliteBundle:Secteur',
                    'property' => 'nom',
                    'multiple' => false,
                    'required' => false,
                    'empty_value' => 'Secteurs',
                    'empty_data' => null, 'query_builder' => function(EntityRepository $er) {
                return $er->createQueryBuilder('c')->orderBy('c.nom', 'ASC');
            }, 'attr' => array('class' => 'col-sm-12')))
                ->add('nompersonne', 'text', array('required' => false,'label' => 'Nom de la personne'))
                ->add('numeroimmeubleaft', 'text', array('required' => false,'label' => 'N° de la rue'))
                ->add('libellevoieaft', 'text', array('required' => false,'label' => 'Nom de la rue'))                
                ->add('nbpersonnesacharge', 'integer', array('required' => false, 'attr' => array('class' => 'col-sm-12')))
                ->add('basenettemin', 'text', array('required' => false, 'attr' => array('placeholder' => 'min €', 'class' => 'col-sm-12')))
                ->add('basenettemax', 'text', array('required' => false, 'attr' => array('placeholder' => 'max €', 'class' => 'col-sm-12')))
                ->add('abattementgeneralbasecommunalemin', 'text', array('required' => false, 'attr' => array('placeholder' => 'min €', 'class' => 'col-sm-12')))
                ->add('abattementgeneralbasecommunalemax', 'text', array('required' => false, 'attr' => array('placeholder' => 'max €', 'class' => 'col-sm-12')))
                ->add('abattementpersonneschargecommunnalmin', 'text', array('required' => false, 'attr' => array('placeholder' => 'min €', 'class' => 'col-sm-12')))
                ->add('abattementpersonneschargecommunnalmax', 'text', array('required' => false, 'attr' => array('placeholder' => 'max €', 'class' => 'col-sm-12')))
                ->add('abattementspecialbasecommunalmin', 'text', array('required' => false, 'attr' => array('placeholder' => 'min €', 'class' => 'col-sm-12')))
                ->add('abattementspecialbasecommunalmax', 'text', array('required' => false, 'attr' => array('placeholder' => 'max €', 'class' => 'col-sm-12')))
                ->add('abattementspecialhandicapecommunalmin', 'text', array('required' => false, 'attr' => array('placeholder' => 'min €', 'class' => 'col-sm-12')))
                ->add('abattementspecialhandicapecommunalmax', 'text', array('required' => false, 'attr' => array('placeholder' => 'max €', 'class' => 'col-sm-12')))
                ->add('cotisationcommunalemin', 'text', array('required' => false, 'attr' => array('placeholder' => 'min €', 'class' => 'col-sm-12')))
                ->add('cotisationcommunalemax', 'text', array('required' => false, 'attr' => array('placeholder' => 'max €', 'class' => 'col-sm-12')))
                ->add('montantnetapayermin', 'text', array('required' => false, 'attr' => array('placeholder' => 'min €', 'class' => 'col-sm-12')))
                ->add('montantnetapayermax', 'text', array('required' => false, 'attr' => array('placeholder' => 'max €', 'class' => 'col-sm-12')))
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Fiscalite\GestionFiscaliteBundle\Entity\RechercheArticleTH'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'fiscalite_gestionfiscalitebundle_recherchearticleth';
    }

}
