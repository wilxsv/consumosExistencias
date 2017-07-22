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
		//$entity = $em->getRepository('MinsalCoreBundle:CtlInsumo')->createQueryBuilder('i')->select('i.id', 'i.nombreLargoInsumo')->join('i.ctlEstablecimientoid', 'c')->groupBy('i.id','i.nombreLargoInsumo')
        $builder
			->add('fechaMovimiento', 'text', array('label'  => 'Fecha: ', 'attr' => array('data' => 'YYYY-mm-dd' )))
			->add('cantidad')->add('almacenFarmacia')
			->add('loteMovimiento', 'text', array('label'  => 'Lote: ', 'attr' => array('data' => '' )))
			->add('ctlInsumoid')
			->add('ctlInsumoid', EntityType::class, array('label'  => 'Producto:', 'class' => 'MinsalCoreBundle:CtlInsumo',
			'query_builder' => function (EntityRepository $er) { 
				return $er->createQueryBuilder('i');},
				'choice_label' => 'nombreLargoInsumo', 'required' => true, 'multiple' => false))
			->add('ctlEstablecimientoid')->add('establecimientoOrigen');
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
