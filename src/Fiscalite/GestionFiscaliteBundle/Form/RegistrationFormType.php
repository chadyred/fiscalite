<?php

namespace Fiscalite\GestionFiscaliteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RegistrationFormType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('email', 'email', array('label' => 'form.email', 'translation_domain' => 'FOSUserBundle', 'attr' => array('class' => 'form-control')))
                ->add('username', null, array('label' => 'form.username', 'translation_domain' => 'FOSUserBundle', 'attr' => array('class' => 'form-control')))
                ->add('plainPassword', 'repeated', array(
                    'type' => 'password',
                    'options' => array('translation_domain' => 'FOSUserBundle'),
                    'first_options' => array('label' => 'form.password', 'attr' => array('class' => 'form-control')),
                    'second_options' => array('label' => 'form.password_confirmation', 'attr' => array('class' => 'form-control')),
                    'invalid_message' => 'fos_user.password.mismatch',
                ))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Fiscalite\GestionFiscaliteBundle\Entity\User',
        ));
    }

    public function getName() {
        return 'fiscalite_user_registration';
    }

}
