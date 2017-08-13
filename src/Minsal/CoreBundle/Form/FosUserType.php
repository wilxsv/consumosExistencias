<?php

namespace Minsal\CoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FosUserType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
          ->add('email', 'email', array('label' => 'Correo de usuaria', 'required'  => true,   ))
          ->add('username', 'text', array('label' => 'login', 'required'  => true,   ))
          ->add('fullname', 'text', array('label' => 'Nombre completo de la persona', 'required'  => true ))
          ->add('password', 'password', array('label' => 'Clave', 'required'  => true ))
          ->add('roles', 'entity',array('label'  => 'Roles :', 'class' => 'MinsalCoreBundle:CtlRol', 'choice_label' => 'nombreRol',  'required' => false, 'multiple' => false,))
          ->add('establecimiento', 'entity',array('label'  => 'Establecimiento :', 'class' => 'MinsalCoreBundle:CtlEstablecimiento', 'required' => true, 'multiple' => false))
        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Minsal\CoreBundle\Entity\FosUser'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'minsal_corebundle_fosuser';
    }


}
