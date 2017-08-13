<?php

namespace Minsal\CoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class CtlMovimientoType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
			->add('fechaCaducidad', 'date', array('label'  => 'Fecha ', 'widget' => 'single_text', 'format' => 'yyyy-MM-dd',))
			->add('cantidad', 'number', array('label'  => 'Cantidad', 'attr' => array('onkeypress' => 'return (event.charCode >= 48 && event.charCode <= 57) || (event.keyCode === 8) || (event.keyCode === 46) || (event.keyCode === 37) || (event.keyCode === 39)')))
			->add('almacenFarmacia')
			->add('loteMovimiento')
			->add('ctlTipoMovimientoid', 'entity',array('label'  => 'Movimientos :', 'class' => 'MinsalCoreBundle:CtlTipoMovimiento', 'choice_label' => 'nombreMovimiento', 'required' => false,'empty_data' => 'Selecciones un ', 'disabled' => false, 'multiple' => false, 'attr' => array('class' => 'form-control select2', 'data-placeholder' => 'Seleccione el movimiento', 'style' => 'width: 90%', 'onchange' => 'cargar(this.value);'),))
			->add('fechaMovimiento', 'date', array('label'  => 'Fecha ', 'widget' => 'single_text', 'format' => 'yyyy-MM-dd',))
			->add('almacenFarmaciaOrigen')
			->add('ctlInsumoid', EntityType::class, array('label'  => 'Producto:', 'class' => 'MinsalCoreBundle:CtlInsumo',
			'query_builder' => function (EntityRepository $er) { return $er->createQueryBuilder('i')->join('i.ctlEstablecimientoid', '3', 'WITH', 'i.id > 0')->orderBy('i.codigoSinab', 'ASC');}, 
			'choice_label' => 'Largo','required' => true, 'multiple' => false, 'attr' => array('class' => 'form-control select2', 'style' => 'width: 90%', "data-placeholder"=>"Selecciona producto")))
			->add('ctlEstablecimientoid', 'entity',array('label'  => 'Destino :', 'class' => 'MinsalCoreBundle:CtlEstablecimiento', 'required' => true, 'multiple' => false, 'attr' => array('class' => 'form-control select2', 'style' => 'width: 90%')))
			->add('establecimientoOrigen', 'entity',array('label'  => 'Destino :', 'class' => 'MinsalCoreBundle:CtlEstablecimiento', 'required' => true, 'multiple' => false, 'attr' => array('class' => 'form-control select2', 'style' => 'width: 90%')));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Minsal\CoreBundle\Entity\CtlMovimiento'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'minsal_corebundle_ctlmovimiento';
    }


}
