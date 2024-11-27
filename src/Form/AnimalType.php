<?php

namespace App\Form;

use App\Entity\Animal;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\Habitat;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Validator\Constraints\File;


class AnimalType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
{
    $builder
        ->add('nom', null, [
            'label' => 'Nom de l\'animal',
            'attr' => ['class' => 'form-control'],
        ])
        ->add('race', null, [
            'label' => 'Race',
            'attr' => ['class' => 'form-control'],
        ])
        ->add('etatDeSante', null, [
            'label' => 'État de santé',
            'attr' => ['class' => 'form-control'],
        ])
        ->add('alimentation', null, [
            'label' => 'Alimentation',
            'attr' => ['class' => 'form-control'],
        ])
        ->add('habitat', EntityType::class, [
            'class' => Habitat::class,
            'choice_label' => 'nom',
            'label' => 'Habitat',
            'placeholder' => 'Choisissez un habitat',
            'attr' => ['class' => 'form-control'],
        ])
        ->add('uploadImages', FileType::class, [
            'label' => 'Ajouter des images',
            'multiple' => true, // Permet de sélectionner plusieurs fichiers
            'mapped' => false,  // Non lié à l'entité directement
            'required' => false, // Pas obligatoire
            'constraints' => [
                new \Symfony\Component\Validator\Constraints\All([
                    'constraints' => [
                        new File([
                            'maxSize' => '5M', // Taille max : 5 Mo
                            'mimeTypes' => [
                                'image/jpeg',
                                'image/png',
                                'image/gif',
                            ],
                            'mimeTypesMessage' => 'Veuillez uploader une image valide (JPEG, PNG ou GIF).',
                        ])
                    ]
                ])
            ],
            'attr' => ['class' => 'form-control-file'],
        ]);
}

}
