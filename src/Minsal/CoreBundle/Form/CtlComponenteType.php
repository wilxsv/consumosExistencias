<?php

namespace Minsal\CoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class CtlComponenteType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('nombreComponente')
        ->add('roleRegistraComponente')
        ->add('presicionComponente')
        //->add('insumo', 'entity',array('label'  => 'Digite o seleccione los productos del componente: ', 'class' => 'MinsalCoreBundle:CtlInsumo', 'required' => true, 'multiple' => true, 'attr' => array('class' => 'form-control select2', 'data-placeholder' => 'Seleccione los insumos', 'style' => 'width: 100%'),))
        ->add('insumo', EntityType::class, array('label'  => 'Producto:', 'class' => 'MinsalCoreBundle:CtlInsumo','choice_label' => 'Largo','required' => true, 'multiple' => true, 'attr' => array('class' => 'form-control select2', 'style' => 'width: 90%', "data-placeholder"=>"Seleccione los productos")))
		;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Minsal\CoreBundle\Entity\CtlComponente'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'minsal_corebundle_ctlcomponente';
    }


}
