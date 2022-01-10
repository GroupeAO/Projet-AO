<?php

namespace App\Form;

use App\Entity\SurgeryNotification;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SurgeryNotificationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('startDate')
            ->add('enDate')
            ->add('speciality')
            ->add('description')
            ->add('numberAoNeeded')
            ->add('numberAoSpotLeft')
            ->add('clinicName')
            ->add('clinicZipCode')
            ->add('users')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => SurgeryNotification::class,
        ]);
    }
}
