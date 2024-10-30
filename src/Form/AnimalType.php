<?php

namespace App\Form;

use App\Entity\Animal;
use App\Entity\Habitat;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\TextType;



class AnimalType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom')
            ->add('race')
            ->add('images', CollectionType::class, [
                'entry_type' => TextType::class, // ou un autre type si nécessaire
                'allow_add' => true,
                'allow_delete' => true,
                'by_reference' => false,
                'required' => false,
            ])
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
