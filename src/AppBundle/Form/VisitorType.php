<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use AppBundle\Entity\Visitor;

class VisitorType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('fName',TextType::class,  ['required' => true,'attr' => ['class' => 'form-control', 'data-field' => 'f_name']])
            ->add('sName',TextType::class,  ['required' => true,'attr' => ['class' => 'form-control', 'data-field' => 's_name']])
            ->add('tName',TextType::class,  ['required' => false,'attr' => ['class' => 'form-control', 'data-field' => 't_name']])
            ->add('docNum',TextType::class, ['required' => true,'attr' => ['class' => 'form-control']])
            ->add('submit', SubmitType::class);
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Visitor'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_visitor';
    }


}
