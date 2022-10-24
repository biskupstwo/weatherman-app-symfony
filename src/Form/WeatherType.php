<?php

namespace App\Form;

use App\Entity\Weather;
use App\Repository\WeatherRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class WeatherType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('location')
            ->add('date')
            ->add('temp_c')
            ->add('perc_temp_c')
            ->add('visibility')
            ->add('wind_speed')
            ->add('description')
            ->add('rain_probability')
            ->add('pressure')
            ->add('uv_index')
            ->add('location')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Weather::class,
        ]);
    }
}
