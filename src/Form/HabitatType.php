<?php

namespace App\Form;

use App\Entity\Habitat;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Validator\Constraints\File;

class HabitatType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'label' => 'Nom de l\'habitat',
                'attr' => ['class' => 'form-control'],
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description de l\'habitat',
                'attr' => ['class' => 'form-control'],
            ])
            ->add('images', FileType::class, [
                'label' => 'Images de l\'habitat',
                'multiple' => true,  // Permet d'uploader plusieurs images
                'mapped' => false,    // Ce champ ne sera pas directement lié à l'entité
                'required' => false,  // Ce champ n'est pas obligatoire
                'attr' => ['class' => 'form-control-file'],
                'constraints' => [
                    new File([
                        'maxSize' => '8M', // Taille max pour chaque fichier
                        'mimeTypes' => ['image/jpeg', 'image/png', 'image/gif'], // Types de fichiers acceptés
                        'mimeTypesMessage' => 'Veuillez télécharger une image valide (JPEG, PNG, GIF)',
                    ])
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Habitat::class,  // L'entité associée à ce formulaire
        ]);
    }
}
