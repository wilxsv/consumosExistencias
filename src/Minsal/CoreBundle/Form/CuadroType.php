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
          ->add('tipo', 'entity',array('label'  => 'Tipo de establecimiento :', 'class' => 'MinsalCoreBundle:CtlTipoEstablecimiento', 'required' => true, 'multiple' => false, 'attr' => array('class' => 'form-control select2', 'style' => 'width: 90%')))
		  ->add('suministro', 'entity',array('label'  => 'Suministros :', 'class' => 'MinsalCoreBundle:CtlSuministro', 'choice_label' => 'nombreSuministro', 'required' => false, 'disabled' => false, 'multiple' => false, 'attr' => array('class' => 'form-control select2', 'data-placeholder' => 'Seleccione los suministros', 'style' => 'width: 90%', 'onchange' => 'cargarGrupo(this.value);'),))
          ->add('grupo', 'number', array('required' => false))
          ->add('subgrupo', 'number', array('required' => false))
          ->add('insumo', 'entity',array('label'  => 'Productos :', 'class' => 'MinsalCoreBundle:CtlInsumo', 'choice_label' => 'nombreLargoInsumo',  'required' => false, 'disabled' => false, 'multiple' => true, 'attr' => array('data-placeholder' => 'Seleccione los insumos', 'style' => 'width: 90%'),))
          ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'minsal_cuadro_basico';
    }


}
