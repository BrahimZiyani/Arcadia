<?php

namespace App\Form;

use App\Entity\Service;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Validator\Constraints\All;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

class ServiceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'label' => 'Nom du service',
                'attr' => ['class' => 'form-control'],
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description',
                'attr' => ['class' => 'form-control', 'rows' => 4],
            ])
            ->add('images', FileType::class, [
                'label' => 'Images',
                'mapped' => false, // Le champ n'est pas directement lié à l'entité
                'multiple' => true,
                'required' => false,
                'attr' => ['class' => 'form-control-file'],
                'constraints' => [
                    new All([
                        'constraints' => [
                            new File([
                                'maxSize' => '8M',
                                'mimeTypes' => ['image/jpeg', 'image/png', 'image/gif'],
                                'mimeTypesMessage' => 'Veuillez télécharger des images valides (JPEG, PNG, GIF).',
                            ]),
                        ],
                    ]),
                ],
            ])
            ->add('removeImage', CheckboxType::class, [
                'label' => 'Supprimer l\'image actuelle',
                'mapped' => false,
                'required' => false,
            ]);
            ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Service::class,
        ]);
    }
}
