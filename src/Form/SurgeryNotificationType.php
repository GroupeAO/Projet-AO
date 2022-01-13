<?php

namespace App\Form;

use App\Entity\SurgeryNotification;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
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
                'label'  => 'Date de début'
            ])
            ->add('enDate', DateTimeType::class, [
                'widget' => 'single_text',
                'input'  => 'datetime_immutable',
                'label'  => 'Date de fin'
            ])
            ->add('speciality', TextType::class,[
                'label'  => 'Spécialité'
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Decrivez-la procédure'
            ])
            ->add('numberAoNeeded', TextType::class,[
                'label'  => 'Nombre d\'aide opératoire nécéssaire'
            ])
            ->add('clinicName', TextType::class,[
                'label'  => 'Nom de la clinique'
            ])
            ->add('clinicZipCode', TextType::class,[
                'label'  => 'Code postal de la clinique'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => SurgeryNotification::class,
        ]);
    }
}
