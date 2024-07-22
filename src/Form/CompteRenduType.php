<?php

namespace App\Form;

use App\Entity\CompteRendu;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use App\Entity\User;
use App\Entity\Animal;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class CompteRenduType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('date')
            ->add('etat')
            ->add('animal', EntityType::class, [
                'class' => Animal::class,
                'choice_label' => 'nom', // assuming 'nom' is a property of Animal
            ])
            ->add('utilisateur', EntityType::class, [
                'class' => User::class,
                'choice_label' => 'email', // assuming 'email' is a property of User
            ])
            ->add('details')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => CompteRendu::class,
        ]);
    }
}
