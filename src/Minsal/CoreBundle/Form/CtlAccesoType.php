<?php

namespace Minsal\CoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CtlAccesoType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
			->add('nombreAcceso', 'text', array('label'  => 'Nombre del acceso'))
			->add('visibleAcceso', 'choice', array('label'  => 'Aparece en el menú :', 'choices'=> array('0' => 'No', '1' => 'Si'), 'required'  => true, ))
			->add('pathAcceso', 'text', array('label'  => 'Ruta en el navegador :', 'required'  => false, ))
			->add('rol');
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Minsal\CoreBundle\Entity\CtlAcceso'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'minsal_corebundle_ctlacceso';
    }


}
