<?php

namespace Minsal\CoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CtlComponenteType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nombreComponente')
        //->add('insumo')
        ->add('insumo', 'entity',array('label'  => 'Digite o seleccione los productos del componente: ', 'class' => 'MinsalCoreBundle:CtlInsumo', 'required' => true, 'multiple' => true, 'attr' => array('class' => 'form-control select2', 'data-placeholder' => 'Seleccione los insumos', 'style' => 'width: 100%'),))
        ;//'multiple' => true
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
