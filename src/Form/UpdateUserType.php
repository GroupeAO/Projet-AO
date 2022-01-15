<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UpdateUserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add(  'cpsnumber')
        ->add(  'name', TextType::class,         ['label' => 'Nom'])
        ->add(  'firstname', TextType::class,    ['label' => 'Prénom'])
        ->add(  'email', EmailType::class,       ['label' => 'Email'])
        ->add(  'password', RepeatedType::class, [
                    'type' => PasswordType::class,
                    'invalid_message' => 'Les mots de passe ne sont pas identiques.',
                    'options' =>        ['attr' => ['class' => 'password-field']],
                    'required' => true,
                    'first_options'  => ['label' => 'Nouveau mot de passe'],
                    'second_options' => ['label' => 'Répetez votre mot de passe'],
        ])
        
        ->add(  'adress', TextType::class,      ['label' => 'Adresse'])
        ->add(  'zipCode', TextType::class,     ['label' => 'Code Postal'])
        ->add(  'city', TextType::class,        ['label' => 'Ville'])
        ->add(  'phoneNumber', TelType::class,  ['label' => 'Numéro de téléphone'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
