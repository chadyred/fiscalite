<?php

namespace Fiscalite\GestionFiscaliteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\FormView;
use Symfony\Component\Form\FormInterface;

class DoctrineDoubleListType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
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
                ->add('right_name', 'choice', array('attr' => array('class' => 'col-xs-12'),
                    'multiple' => true,
                    'required' => false))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'type' => 'choice',
            'left_name' => 'select_left',
            'right_name' => 'select_right',
            'keep_selected' => true, // Si true, garde sélectionné les options lorsque déplacées. Si false, désélectionne les options après déplacement
            'left_options' => array('multiple' => true, 'attr' => array('size' => 10)),
            'right_options' => array('multiple' => true, 'attr' => array('size' => 10)),
            'error_bubbling' => false,
        ));
    }

    public function buildView(FormView $view, FormInterface $form, array $options) {
        // Passe à la vue les différentes options personnalisées (pour générer le champ)
        $view->vars['left_name'] = $options['left_name'];
        $view->vars['right_name'] = $options['right_name'];
        $view->vars['keep_selected'] = $options['keep_selected'];
    }

    public function getParent() {
        return 'form';
    }

    public function getName() {
        return 'double_sens';
    }

}
