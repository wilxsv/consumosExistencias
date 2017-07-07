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
          ->add('establecimiento', 'entity',array('label'  => 'Establecimiento :', 'class' => 'MinsalCoreBundle:CtlEstablecimiento', 'required' => true, 'multiple' => false, 'attr' => array('class' => 'form-control select2', 'data-placeholder' => 'Seleccione el establecimiento', 'style' => 'width: 90%'),))
          ->add('existenciaa', 'number', array('label'  => 'Existencia almacen', 'attr' => array('min' => '0', 'maxlength' => '8', 'onkeypress' => 'return (event.charCode >= 48 && event.charCode <= 57) || (event.keyCode === 8) || (event.keyCode === 46) || (event.keyCode === 37) || (event.keyCode === 39)', 'placeholder' => 'Ingrese la cantidad' )))
          ->add('consumoa', 'number', array('label'  => 'Existencia almacen', 'attr' => array('min' => '0', 'maxlength' => '8', 'onkeypress' => 'return (event.charCode >= 48 && event.charCode <= 57) || (event.keyCode === 8) || (event.keyCode === 46) || (event.keyCode === 37) || (event.keyCode === 39)', 'placeholder' => 'Ingrese la cantidad' )))
          ->add('dias', 'number', array('label'  => 'Existencia almacen', 'attr' => array('min' => '0', 'maxlength' => '8', 'onkeypress' => 'return (event.charCode >= 48 && event.charCode <= 57) || (event.keyCode === 8) || (event.keyCode === 46) || (event.keyCode === 37) || (event.keyCode === 39)', 'placeholder' => 'Ingrese la cantidad' )))
          ->add('fecha', 'number', array('label'  => 'Existencia almacen', 'attr' => array('min' => '0', 'maxlength' => '8', 'onkeypress' => 'return (event.charCode >= 48 && event.charCode <= 57) || (event.keyCode === 8) || (event.keyCode === 46) || (event.keyCode === 37) || (event.keyCode === 39)', 'placeholder' => 'Ingrese la cantidad' )))
          ->add('ingre', 'number', array('label'  => 'Existencia almacen', 'attr' => array('min' => '0', 'maxlength' => '8', 'onkeypress' => 'return (event.charCode >= 48 && event.charCode <= 57) || (event.keyCode === 8) || (event.keyCode === 46) || (event.keyCode === 37) || (event.keyCode === 39)', 'placeholder' => 'Ingrese la cantidad' )))
          ->add('fecha', 'number', array('label'  => 'Existencia almacen', 'attr' => array('min' => '0', 'maxlength' => '8', 'onkeypress' => 'return (event.charCode >= 48 && event.charCode <= 57) || (event.keyCode === 8) || (event.keyCode === 46) || (event.keyCode === 37) || (event.keyCode === 39)', 'placeholder' => 'Ingrese la cantidad' )))
          ->add('fecha', 'number', array('label'  => 'Existencia almacen', 'attr' => array('min' => '0', 'maxlength' => '8', 'onkeypress' => 'return (event.charCode >= 48 && event.charCode <= 57) || (event.keyCode === 8) || (event.keyCode === 46) || (event.keyCode === 37) || (event.keyCode === 39)', 'placeholder' => 'Ingrese la cantidad' )))

		  ->add('suministro', 'entity',array('label'  => 'Suministros :', 'class' => 'MinsalCoreBundle:CtlSuministro', 'choice_label' => 'nombreSuministro', 'required' => false, 'disabled' => false, 'multiple' => false, 'attr' => array('class' => 'form-control select2', 'data-placeholder' => 'Seleccione los suministros', 'style' => 'width: 90%', 'onchange' => 'cargarSelect2(this.value);'),))
          ->add('grupo', 'entity',array('label'  => 'Grupos :', 'class' => 'MinsalCoreBundle:CtlGrupo', 'choice_label' => 'nombreGrupo', 'required' => false, 'multiple' => false, 'disabled' => true, 'attr' => array('class' => 'form-control select2', 'data-placeholder' => 'Seleccione el grupo', 'style' => 'width: 90%', 'onchange' => 'cargarSelect3(this.value);'),))
          //->add('subgrupo', 'entity',array('label'  => 'Grupos :', 'class' => 'MinsalCoreBundle:CtlGrupo', 'choice_label' => 'nombreGrupo', 'required' => false, 'multiple' => false, 'disabled' => true, 'attr' => array('class' => 'form-control select2', 'data-placeholder' => 'Seleccione el grupo', 'style' => 'width: 90%', 'onchange' => 'cargarSelect4(this.value);'),))
          ->add('producto', 'entity',array('label'  => 'Producto :', 'class' => 'MinsalCoreBundle:CtlInsumo', 'choice_label' => 'nombreLargoInsumo',  'required' => true, 'disabled' => false, 'multiple' => false, 'attr' => array('data-placeholder' => 'Seleccione los insumos', 'style' => 'width: 90%'),))
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
