<?php

namespace Minsal\CoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CuadroType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
          ->add('establecimiento', 'entity',array('label'  => 'Establecimiento :', 'class' => 'MinsalCoreBundle:CtlEstablecimiento', 'required' => true, 'multiple' => false))
		  ->add('suministro', 'entity',array('label'  => 'Suministros :', 'class' => 'MinsalCoreBundle:CtlSuministro', 'choice_label' => 'nombreSuministro', 'required' => false, 'multiple' => false,))
          ->add('grupo', 'entity',array('label'  => 'Grupos :', 'class' => 'MinsalCoreBundle:CtlGrupo', 'choice_label' => 'nombreGrupo', 'required' => false, 'multiple' => false,))
          ->add('productos', 'entity',array('label'  => 'Productos :', 'class' => 'MinsalCoreBundle:CtlInsumo', 'choice_label' => 'nombreLargoInsumo',  'required' => true, 'multiple' => true,))
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
