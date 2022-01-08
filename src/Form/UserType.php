<?php

namespace App\Form;


use App\Entity\SurgicalSpecialty;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;


class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', EmailType::class,                    ['label' => 'Email'])
            ->add('password', PasswordType::class,              ['label' => 'Mot de passe'])
            ->add('name', TextType::class,                      ['label' => 'Nom'])
            ->add('firstname', TextType::class,                 ['label' => 'Prénom'])
            ->add('adress')
            ->add('postaCode', NumberType::class, [
                'label' => 'Code Postal',
            ],
            ['html5' => true,]
            )
            ->add('city')
            ->add('phoneNumber', NumberType::class)
            ->add('surgicalSpeciality', EntityType::class, [ 
                'class'=>SurgicalSpecialty::class,
                'choice_label'=>'name'
                ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
