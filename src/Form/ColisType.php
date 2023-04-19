<?php

namespace App\Form;

use App\Entity\Colis;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ColisType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nomExpediteur')
            ->add('adresseExpediteur')
            ->add('nomDestinataire')
            ->add('adresseDestinataire')
            ->add('poids')
<<<<<<< HEAD
            ->add('Enregistrer',SubmitType::class)
=======
            ->add('statut')
            ->add('dateExpedition')
          
>>>>>>> 1b9c83bb09edfda666f414a2ec8b0b82973f62fa
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Colis::class,
        ]);
    }
}
