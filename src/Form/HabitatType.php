<?php

namespace App\Form;

use App\Entity\Habitat;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class HabitatType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'label' => 'Nom de l\'habitat',
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description de l\'habitat',
            ])
            ->add('images', FileType::class, [
                'label' => 'Images',
                'multiple' => true,  // Permet d'uploader plusieurs images
                'mapped' => false,    // Ce champ ne sera pas directement lié à l'entité
                'required' => false,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Habitat::class,  // L'entité associée à ce formulaire
        ]);
    }
}
