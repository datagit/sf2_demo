<?php

namespace Local\Bundle\MyCoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Local\Bundle\MyCoreBundle\Entity\User'
        ));
    }

    public function getName()
    {
        return 'local_bundle_mycorebundle_user';
    }
}
