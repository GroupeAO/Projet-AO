<?php

namespace App\Form;

use App\Entity\SurgeryNotification;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
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
                'label'  => 'Date de début',
                'required'=> true,
            ])
            ->add('enDate', DateTimeType::class, [
                'widget' => 'single_text',
                'input'  => 'datetime_immutable',
                'label'  => 'Date de fin',
                'required'=> true
            ])
            ->add('speciality', ChoiceType::class,[
                
                'choices' => [
                    'Choisissez...' => 'Non spécifiée',
                    'Chirurgie en orthopédie et traumatologie' => 'Chirurgie en orthopédie et traumatologie',
                    'Chirurgie générale' => 'Chirurgie générale',
                    'Chirurgie infantile' => 'Chirurgie infantile',
                    'Chirurgie maxillo-facial et stomatologie' => 'Chirurgie maxillo-facial et stomatologie',
                    'Chirurgie plastique, reconstructrice, esthétique' => 'Chirurgie plastique, reconstructrice, esthétique',
                    'Chirurgie thoracique et cardio-vasculaire' => 'Chirurgie thoracique et cardio-vasculaire',
                    'Chirurgie urologique' => 'Chirurgie urologique',
                    'Chirurgie vasculaire' => 'Chirurgie vasculaire',
                    'Chirurgie viscérale' => 'Chirurgie viscérale',
                    'Neurochirurgie' => 'Neurochirurgie',
                    'Autre (Préciser dans commentaires)' => 'Autre (Précisé dans commentaires)'
                ]
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Décrivez la procédure (facultatif)',
                'required'=> false
            ])
            ->add('numberAoNeeded', ChoiceType::class,[
                'label'  => 'Nombre d\'aide opératoire nécéssaire',
                'choices' => [
                    'Choisissez...' => 'Non spécifiée',
                    '1' => 1,
                    '2' => 2,
                    '3' => 3,
                    '3' => 4
                ]
            ])
            ->add('clinicName', TextType::class,[
                'label'  => 'Nom de la clinique'
            ])
            ->add('clinicZipCode', TextType::class,[
                'label'  => 'Code Postal de la clinique'
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
