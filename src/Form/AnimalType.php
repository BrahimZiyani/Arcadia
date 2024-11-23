<?php

namespace App\Form;

use App\Entity\Animal;
use App\Entity\Habitat;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AnimalType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
    ->add('nom')
    ->add('race')
    ->add('uploadImages', CollectionType::class, [
        'entry_type' => FileType::class,
        'mapped' => false, // Non lié directement à l'entité
        'allow_add' => true,
        'allow_delete' => false,
        'required' => false,
        'entry_options' => [
            'label' => false,
        ],
    ])
    ->add('etatDeSante')
    ->add('alimentation')
    ->add('habitat', EntityType::class, [
        'class' => Habitat::class,
        'choice_label' => 'nom',
        'placeholder' => 'Choisissez un habitat',
        'required' => true,
    ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Animal::class,
        ]);
    }
}
