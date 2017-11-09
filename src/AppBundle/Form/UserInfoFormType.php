<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserInfoFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('firstName', TextType::class, array('attr' => array('class' => 'form-control', 'placeholder' => 'First Name')));
        $builder->add('lastName', TextType::class, array('attr' => array('class' => 'form-control', 'placeholder' => 'Last Name')));
        $builder->add('dob', TextType::class, array('attr' => array('class' => 'form-control', 'placeholder' => 'DOB')));
        $builder->add('country', TextType::class, array('attr' => array('class' => 'form-control', 'placeholder' => 'Country')));
        $builder->add('description', TextareaType::class, array('attr' => array('rows' => 9, 'class' => 'form-control', 'placeholder' => 'Last Name')));
        $builder->add('imageURL', FileType::class, array('attr' => array('class' => 'form-control'), 'label' => 'Profile Picture (JPEG)', 'required' => false, 'data_class' => null));

    }

    public function configureOptions(OptionsResolver $resolver)
    {

    }

    public function getName()
    {
        return 'user_info_form_type';
    }
}
