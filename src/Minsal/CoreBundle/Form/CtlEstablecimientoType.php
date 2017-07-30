<?php

namespace Minsal\CoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CtlEstablecimientoType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('idTipoEstablecimiento')->add('nombre')->add('ctlInsumoid');
    }
    //'attr' => array('data-placeholder' => 'Seleccione los productos', 'style' => 'width: 90%')
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Minsal\CoreBundle\Entity\CtlEstablecimiento'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'minsal_corebundle_ctlestablecimiento';
    }


}
