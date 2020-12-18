<?php

namespace App\Form;

use App\Entity\Annonces;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AnnoncesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title',TextType::class,[
                'attr'=>[
                    'class'=>'form-control form-group',
                    'placeholder'=>'name'
                ]])
            ->add('content',TextType::class,[
                'attr'=>[
                    'class'=>'form-control',
                    'placeholder'=>'La taille,la déscription...',
                ]
            ])
            //on ajoute le champ image dans le formulaire
            // Il n'est pas lié a la base de doonés (mapped  false
            ->add('images', FileType::class, [
                'label' => false,
                'multiple' => true,
                'mapped' => false,
                'required' => false,
            ])
            ->add('prices', MoneyType::class, [
                'attr'=>[
                    'class'=>'form-control'
                ]
            ])

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Annonces::class,
        ]);
    }
}
