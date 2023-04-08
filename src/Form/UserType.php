<?php

namespace App\Form;

use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use App\Entity\User;
use DateTime;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Validator\Constraints\Date;
use Symfony\Component\Validator\Constraints\LessThanOrEqual;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Validator\Constraints\Email;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'constraints' => [
                    new NotBlank(['message' => 'Veuillez remplir le champ .']),
                    new Length(['min' => 2, 'max' => 50]),
                ],
            ])
            ->add('prenom', TextType::class, [
                'constraints' => [
                    new NotBlank(['message' => 'Veuillez remplir le champ .']),
                    new Length(['min' => 2, 'max' => 50]),
                ],
            ])
            ->add('adress', TextType::class, [
                'constraints' => [
                    new NotBlank(['message' => 'Veuillez remplir le champ .']),
                    new Length([
                        'min' => 10,
                        'max' => 100,
                        'minMessage' => 'Your address should be at least {{ limit }} characters',
                        'maxMessage' => 'Your address should be no longer than {{ limit }} characters',
                    ]),
                ],
            ])
            ->add('cin', TextType::class, [
                'constraints' => [
                    new NotBlank(['message' => 'Veuillez remplir le champ .']),
                    new Length(['min' => 8]),
                ],
            ])
            ->add('datenaissance', DateType::class, [
                'constraints' => [
                    new NotBlank(['message' => 'Veuillez remplir le champ .']),
                 
                ],
            ])
         /*    ->add('datecreationc', DateType::class, [
                'constraints' => [
                    new NotBlank(['message' => 'Veuillez remplir le champ .']),
                    
                ],
            ]) */
            ->add('status')
            ->add('role', ChoiceType::class, [
                'choices' => [
                    'Transporteur' => 'transporteur',
                    'Client' => 'client',
                ],
                'expanded' => true,
                'multiple' => false,
            ])
            ->add('motpass', PasswordType::class, [
                'constraints' => [
                    new NotBlank(['message' => 'Veuillez remplir le champ .']),
                    new Regex([
                        'pattern' => '/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/',
                        'message' => 'Le mot de passe doit contenir au moins 8 caractères dont une lettre et un chiffre',
                    ]),
                ],
            ])
            ->add('email', EmailType::class, [
                'constraints' => [
                    new NotBlank(['message' => 'Veuillez remplir le champ .']),
                    new Email(),
                ],
            ])
           /*  ->add('token', TextType::class, [
                'constraints' => [
                    new NotBlank(['message' => 'Veuillez remplir le champ.']),

                ],
            ]) */
           
    
            ->add('numtel', TelType::class, [
                'constraints' => [
                    new NotBlank(['message' => 'Veuillez remplir le champ .']),
                    new Regex([
                        'pattern' => '/^[0-9]{10}$/',
                        'message' => 'Please enter a valid phone number',
                    ]),
                ],
            ])
            ->add('image', FileType::class, [
                'label' => 'image',

                // unmapped means that this field is not associated to any entity property
                'mapped' => false,

                // make it optional so you don't have to re-upload the PDF file
                // every time you edit the Product details
                'required' => false,

                // unmapped fields can't define their validation using annotations
                // in the associated entity, so you can use the PHP constraint classes
                'constraints' => [
                    new File([
                        'maxSize' => '10240k',
                        'mimeTypes' => [
                            'image/jpeg',
                            'image/png',
                        ],
                        'mimeTypesMessage' => 'Please upload a valid Image document',
                    ])
                ],
            ])

          ->add('compteEx', DateType::class)
            ->add('tokenEx', DateTimeType::class) 
            ->add('save', SubmitType::class);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
