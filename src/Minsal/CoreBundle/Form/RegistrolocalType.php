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
          ->add('tipo', 'entity',array('label'  => 'Tipo de establecimiento :', 'class' => 'MinsalCoreBundle:CtlTipoEstablecimiento', 'required' => true, 'multiple' => false))
		  //->add('suministro', 'entity',array('label'  => 'Suministros :', 'class' => 'MinsalCoreBundle:CtlSuministro', 'choice_label' => 'nombreSuministro', 'required' => false, 'disabled' => false, 'multiple' => false, 'attr' => array('class' => 'form-control select2', 'data-placeholder' => 'Seleccione los suministros', 'style' => 'width: 90%', 'onchange' => 'cargarSelect2(this.value);'),))
          //->add('grupo', 'entity',array('label'  => 'Grupos :', 'class' => 'MinsalCoreBundle:CtlGrupo', 'choice_label' => 'nombreGrupo', 'required' => false, 'multiple' => false, 'disabled' => true, 'attr' => array('class' => 'form-control select2', 'data-placeholder' => 'Seleccione el grupo', 'style' => 'width: 90%', 'onchange' => 'cargarSelect3(this.value);'),))
          //->add('subgrupo', 'entity',array('label'  => 'Grupos :', 'class' => 'MinsalCoreBundle:CtlGrupo', 'choice_label' => 'nombreGrupo', 'required' => false, 'multiple' => false, 'disabled' => true, 'attr' => array('class' => 'form-control select2', 'data-placeholder' => 'Seleccione el grupo', 'style' => 'width: 90%', 'onchange' => 'cargarSelect4(this.value);'),))
          ->add('productos', 'entity',array('label'  => 'Productos :', 'class' => 'MinsalCoreBundle:CtlInsumo', 'choice_label' => 'nombreLargoInsumo',  'required' => true, 'disabled' => false, 'multiple' => true, 'attr' => array('data-placeholder' => 'Seleccione los insumos', 'style' => 'width: 90%'),))
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
