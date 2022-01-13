<?php

namespace App\Form;

use App\Entity\SurgeryNotification;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SurgeryNotificationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('startDate', DateTimeType::class, [
                'widget' => 'single_text',
                'input'  => 'datetime_immutable',
                
            ])
            ->add('enDate', DateTimeType::class, [
                'widget' => 'single_text',
                'input'  => 'datetime_immutable',
                
            ])
            ->add('speciality')
            ->add('description')
            ->add('numberAoNeeded')
            ->add('clinicName')
            ->add('clinicZipCode')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => SurgeryNotification::class,
        ]);
    }
}
