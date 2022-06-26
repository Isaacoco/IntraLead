<?php

namespace App\Form;

use App\Entity\Lead;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LeadType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Nom')
            ->add('Prenom')
            ->add('id_statut')
            ->add('adresse')
            ->add('cp')
            ->add('ville')
            ->add('tel')
            ->add('email')
            ->add('date')
            ->add('situation_pro')
            ->add('revenu_foyer')
            ->add('commentaire')
            ->add('restant_payer')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Lead::class,
        ]);
    }
}
