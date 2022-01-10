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
use Symfony\Component\Form\Extension\Core\Type\IntegerType;


class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder

            ->add('numeroCarte', CpsType::class,                ['label' => 'Numéro CPS'])
            ->add('name', TextType::class,                      ['label' => 'Nom'])
            ->add('firstname', TextType::class,                 ['label' => 'Prénom'])
            ->add('email', EmailType::class,                    ['label' => 'Email'])
            ->add('password', PasswordType::class,              ['label' => 'Mot de passe'])
            ->add('adress', TextType::class,                    ['label' => 'Adresse'])
            ->add('postaCode', IntegerType::class,              ['label' => 'Code Postal'])
            ->add('city', TextType::class,                      ['label' => 'Ville'])
            ->add('phoneNumber', IntegerType::class,            ['label' => 'Numéro de téléphone'])
            //->add('surgicalSpeciality', EntityType::class, [ 
            //    'class'=>SurgicalSpecialty::class,
            //    'choice_label'=>'name'])
                ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
