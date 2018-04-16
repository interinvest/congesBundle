<?php

namespace InterInvest\CongesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;

/**
 * Class CongeUtilisateurType
 * @package InterInvest\CongesBundle\Form
 */
class CongeUtilisateurType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class, array(
                    'required'    => true,
                    'label'       => 'Nom',
                    'constraints' => array(
                        new NotBlank(array('message' => 'Vous devez renseigner le nom')),
                    ),
                )
            )
            ->add('hasRtt', ChoiceType::class, array(
                'required'    => false,
                'label'       => "RTT",
                'choices'  => array(
                    '' => 'Sélectionner',
                    1 => 'Oui',
                    0 => 'Non',
                ),
                'choice_attr' => function($val, $key, $index) {
                    return ['class' => 'selectpicker'];
                },
            ))
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
                'data_class' => 'InterInvest\CongesBundle\Entity\CongeUtilisateur',
            )
        );
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ii_bundle_congebundle_congeUtilisateur';
    }
}
