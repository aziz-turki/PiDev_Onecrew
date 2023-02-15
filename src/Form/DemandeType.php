<?php

namespace App\Form;

use App\Entity\Demande;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Entity\User;
use App\Entity\Offre;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
class DemandeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nomDemande')
            ->add('prenomDemande')
            ->add('cvDemande')
            ->add('descriptionDemande')
            ->add('idUser',EntityType::class,['class'=> User::class,
           'choice_label'=>'nomUser',
           'label'=>'idUser'])
            ->add('idOffre',EntityType::class,['class'=> Offre::class,
           'choice_label'=>'nomOffre',
           'label'=>'idOffre']);
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Demande::class,
        ]);
    }
}
