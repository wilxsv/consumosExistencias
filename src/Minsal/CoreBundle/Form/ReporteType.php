<?php

namespace Minsal\CoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class ReporteType extends AbstractType
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
          ->add('insumo', EntityType::class, array('label'  => 'Producto:', 'class' => 'MinsalCoreBundle:CtlInsumo',
			'query_builder' => function (EntityRepository $er) { return $er->createQueryBuilder('i')->join('i.ctlEstablecimientoid', '3', 'WITH', 'i.id > 0')->orderBy('i.codigoSinab', 'ASC');}, 
			'choice_label' => 'Largo','required' => true, 'multiple' => false, 'attr' => array('class' => 'form-control select2', 'style' => 'width: 90%', "data-placeholder"=>"Seleccionar producto")))
          ->add('inicio', 'date', array('label'  => 'Fecha ', 'widget' => 'single_text', 'format' => 'yyyy-MM-dd', 'attr' => array('class' => 'form-control', 'placeholder' => 'yyyy-mm-dd')))
          ->add('fin', 'date', array('label'  => 'Fecha ', 'widget' => 'single_text', 'format' => 'yyyy-MM-dd', 'attr' => array('class' => 'form-control', 'placeholder' => 'yyyy-mm-dd')))
          ->add('region', 'entity',array('label'  => 'Region :', 'class' => 'MinsalCoreBundle:CtlEstablecimiento',
			'query_builder' => function (EntityRepository $er) { return $er->createQueryBuilder('e')->where('e.id BETWEEN 1 AND 5')->orderBy('e.nombre', 'ASC');},'choice_label' => 'nombre', 'required' => true, 'multiple' => false))
          ->add('sibasi', EntityType::class, array('label'  => 'SIBASI al que pertenece:', 'class' => 'MinsalCoreBundle:CtlEstablecimiento',
			'query_builder' => function (EntityRepository $er) { return $er->createQueryBuilder('e')->where('e.id BETWEEN 6 AND 21')->orderBy('e.nombre', 'ASC');},'choice_label' => 'nombre', 'required' => true, 'multiple' => false))
		  ->add('establecimiento', 'entity',array('label'  => 'Establecimientos: ', 'class' => 'MinsalCoreBundle:CtlEstablecimiento', 'required' => false))
		  ->add('microred', 'entity',array('label'  => 'Micro red a la que pertenece: ', 'class' => 'MinsalCoreBundle:CtlMicrored', 'required' => true))
          ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'minsal_reporte';
    }


}
