<?php

namespace App\Form;

use App\Entity\Animal;
use App\Entity\Habitat;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AnimalType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('prenom')
            ->add('race')
            ->add('images')
            ->add('etatDeSante')
            ->add('alimentation')
            ->add('habitat', EntityType::class, [
                'class' => Habitat::class,  // On associe le champ avec l'entité Habitat
                'choice_label' => 'nom',    // On affiche le nom des habitats dans le champ de sélection
                'placeholder' => 'Choisissez un habitat',  // Un texte par défaut
                'required' => true,  // Le champ est obligatoire
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Animal::class,
        ]);
    }
}
