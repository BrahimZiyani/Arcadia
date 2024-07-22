<?php

namespace App\Form;

use App\Entity\Animal;
use App\Entity\Habitat;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

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
                'class' => Habitat::class,
                'choices' => $options['habitat_choices'],
                'choice_label' => 'nom',
                'attr' => ['class' => 'form-control']
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Animal::class,
            'habitat_choices' => [],
        ]);
    }
}
