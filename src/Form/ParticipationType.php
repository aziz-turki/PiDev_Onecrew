<?php

namespace App\Form;

use App\Entity\Participation;
use App\Entity\User;
use App\Entity\Evenement;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class ParticipationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('dateParticipation')
            ->add('descriptionParticipation')
            ->add('idUser',EntityType::class,['class'=> User::class,
           'choice_label'=>'nomUser',
           'label'=>'idUser'])
           ->add('idEvenement',EntityType::class,['class'=> Evenement::class,
          'choice_label'=>'nomEvenement',
          'label'=>'idEvenement']);
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Participation::class,
        ]);
    }
}
