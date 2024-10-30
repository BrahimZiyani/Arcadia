<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', EmailType::class, [
                'label' => 'Email'
            ])
            ->add('nom', TextType::class, [
                'label' => 'Nom'
            ])
            ->add('prenom', TextType::class, [
                'label' => 'Prénom'
            ])
            ->add('password', PasswordType::class, [
                'label' => 'Mot de passe'
            ]);

        // Si nécessaire, tu peux ajouter une logique métier dans le contrôleur
        // pour afficher les rôles uniquement si c'est un administrateur.
        $builder->add('roles', ChoiceType::class, [
            'choices' => [
                'Administrateur' => 'ROLE_ADMIN',
                'Vétérinaire' => 'ROLE_VETERINAIRE',
                'Employé' => 'ROLE_EMPLOYE',
            ],
            'multiple' => true,  // Permet plusieurs rôles
            'expanded' => true,  // Affiche des cases à cocher
            'label' => 'Rôles'
        ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}