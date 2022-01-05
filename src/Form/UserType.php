<?php

namespace App\Form;

use App\Entity\Role;
use App\Entity\SurgicalSpecialty;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email')

            ->add('password')
            ->add('name')
            ->add('firstname')
            ->add('adress')
            ->add('postaCode')
            ->add('city')
            ->add('phoneNumber')
            ->add('RPPS')
            ->add('surgicalSpeciality', EntityType::class, [ 
                'class'=>SurgicalSpecialty::class,
                'choice_label'=>'name'
                ])
            ->add('fkRole',  EntityType::class, [ 
                'class'=>Role::class,
                'choice_label'=>'name'
                ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
