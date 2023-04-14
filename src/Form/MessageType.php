<?php

namespace App\Form;

use App\Entity\Message;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Length;

class MessageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {

        $builder
        ->add('content', TextareaType::class, [
            'label' => 'Message',
            'attr' => ['class' => 'form-control', 'rows' => 3, 'placeholder' => 'Type your message here...'],
            'constraints' => [
                new NotBlank(['message' => 'Please enter a message.']),
                new Length(['min' => 5, 'max' => 500, 'minMessage' => 'Your message must be at least {{ limit }} characters long.', 'maxMessage' => 'Your message cannot be longer than {{ limit }} characters.']),
            ],
        ])
            ->add('receiverId', EntityType::class, [
                'label' => 'receiver ',
                'class' => 'App\Entity\User',
                'choice_label' => 'nom',
            ])
            ->add('save', SubmitType::class);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Message::class,
        ]);
    }
}
