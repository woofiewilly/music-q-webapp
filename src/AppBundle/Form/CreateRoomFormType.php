<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CreateRoomFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name', TextType::class, array('attr' => array('class' => 'form-control round-form', 'placeholder' => 'Room Name')));
        $builder->add('description', TextAreaType::class, array('attr' => array('class' => 'form-control', 'placeholder' => 'Room Description', 'rows' => 3)));


    }

    public function configureOptions(OptionsResolver $resolver)
    {

    }

    public function getBlockPrefix()
    {
        return 'mm_create_room_form_type';
    }
}
