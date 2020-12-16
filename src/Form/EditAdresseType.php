<?php

namespace App\Form;

use App\Entity\Adresse;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EditAdresseType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('rue', TextType::class, [
                'attr' => [
                    'class' => 'input-group mb-3',
                    'placeholder' => 'Choisissez votre rue'
                ]
            ])
            ->add('code_postal', TextType::class, [
                'attr' => [
                    'class' => 'input-group mb-3',
                    'placeholder' => 'Choisissez votre cp'
                ]
            ])
            ->add('departement', TextType::class, [
                'attr' => [
                    'class' => 'input-group mb-3',
                    'placeholder' => 'Choisissez votre département'
                ]
            ])
            ->add('ville', TextType::class, [
                'attr' => [
                    'class' => 'input-group mb-3',
                    'placeholder' => 'Choisissez votre ville'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Adresse::class,
        ]);
    }
}
