<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class User1Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email')
            ->add('roles', ChoiceType::class, [
                'choices' => [
                  
                    'ROLE_USER' => 'ROLE_USER',
                    'ROLE_TRANSPORTEUR' => 'ROLE_TRANSPORTEUR',
                    // add more roles here as needed
                ],
                'multiple' => true, // set this to false to allow only one option to be selected
                'expanded' => true, // set this to true to display checkboxes
            ])
            ->add('password')
            ->add('nom')
            ->add('prenom')
            ->add('adress')
            ->add('cin')
            ->add('date_naissance')
            ->add('date_creation_c')
            ->add('status')
            ->add('token')
            ->add('score')
            ->add('numtel')
            ->add('image')
            ->add('compte_ex')
            ->add('token_ex')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
