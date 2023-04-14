<?php

namespace App\Form;

use App\Entity\Annonces;
use Symfony\Component\DomCrawler\Field\TextareaFormField;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Validator\Constraints\Choice;
use Symfony\Component\Validator\Constraints\GreaterThan;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\NotNull;



class AnnoncesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('type', ChoiceType::class, [
            'choices' => [
                'Annonce' => 'annonce',
                'Demande' => 'demande',
            ],
            'constraints' => [
                new NotBlank(['message' => 'Please select a type.']),
                new Choice([
                    'choices' => ['annonce', 'demande'],
                    'message' => 'Please select a valid type (either "annonce" or "demande").',
                ]),
            ],
        ])
        ->add('ville_dep', TextType::class, [
            'constraints' => [
                new NotBlank(['message' => 'Veuillez entrer une ville de départ.']),
                new Choice([
                    'choices' => ['Ariana', 'Ben Arous', 'Tunis', 'Manouba'],
                    'message' => 'Veuillez sélectionner une ville de la Tunisie valide.',
                ]),
            ],
        ])
        ->add('ville_arr', TextType::class, [
            'constraints' => [
                new NotBlank(['message' => 'Veuillez entrer une ville d\'arrivée.']),
                new Choice([
                    'choices' => ['Ariana', 'Ben Arous', 'Tunis', 'Manouba'],
                    'message' => 'Veuillez sélectionner une ville de la Tunisie valide.',
                ]),
            ],
        ])
            ->add('date_dep', TextType::class, [
                'constraints' => [
                    new NotBlank(['message' => 'Veuillez entrer une date d\'epart.']),
                    new DateTime([
                        'format' => 'Y-m-d',
                        'message' => 'La date de départ doit être une date valide au format YYYY-MM-DD.',
                    ]),
                ],
            ])
            ->add('date_arr', TextType::class, [
                'constraints' => [
                    new NotBlank(['message' => 'Veuillez entrer une date d\'arrivée.']),
                    new DateTime([
                        'format' => 'Y-m-d',
                        'message' => 'La date d\'arrivée doit être une date valide au format YYYY-MM-DD.',
                    ]),
                ],
            ])
            ->add('prix', NumberType::class, [
                'constraints' => [
                    new NotNull(['message' => 'Please enter a price.']),
                    new GreaterThan([
                        'value' => 0,
                        'message' => 'The price must be greater than 0.',
                    ]),
                ],
            ])
            ->add('description', TextareaType::class, [
                'constraints' => [
                    new NotBlank(['message' => 'Please enter a description.']),
                    new Length([
                        'min' => 10,
                        'max' => 20,
                        'minMessage' => 'The description should have at least {{ limit }} characters.',
                        'maxMessage' => 'The description should have at most {{ limit }} characters.',
                    ]),
                ],
            ])
            ->add('ida_U')
            ->add('idColis')
            ->add('save', SubmitType::class);
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Annonces::class,
        ]);
    }
}
