<?php

namespace InterInvest\CongesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Range;

/**
 * Class ConventionType
 * @package InterInvest\CongesBundle\Form
 */
class ConventionType extends AbstractType
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
            ->add('nbJoursConge', TextType::class, array(
                    'required'    => true,
                    'label'       => 'Nombre de jours de congé',
                    'constraints' => array(
                        new Range(array(
                                'min'            => 0, 'minMessage' => 'Le nombre de jours de congés doit être >= {{ limit }}.',
                                'max'            => 100, 'maxMessage' => 'Le nombre de jours de congés doit être <= {{ limit }}.',
                                'invalidMessage' => 'Merci de saisir un chiffre',
                            )
                        ),
                        new NotBlank(array('message' => 'Vous devez renseigner le nombre de jours de congé')),
                    ),
                )
            )
            ->add('nbAnnee', TextType::class, array(
                    'required'    => true,
                    'label'       => 'Nombre année ancienneté pour bénéficier avantage',
                    'constraints' => array(
                        new Range(array(
                                'min'            => 0, 'minMessage' => 'Le nombre doit être >= {{ limit }}.',
                                'max'            => 100, 'maxMessage' => 'Le nombre doit être <= {{ limit }}.',
                                'invalidMessage' => 'Merci de saisir un chiffre',
                            )
                        ),
                        new NotBlank(array('message' => 'Vous devez renseigner le nombre année ancienneté pour bénéficier avantage')),
                    ),
                )
            )
            ->add('nbJoursCongeSupplementaireParAnciennete', TextType::class, array(
                    'required'    => true,
                    'label'       => 'Nombre de jours de congé supplémentaire par ancienneté',
                    'constraints' => array(
                        new Range(array(
                                'min'            => 0, 'minMessage' => 'Le nombre de jours de congés doit être >= {{ limit }}.',
                                'max'            => 100, 'maxMessage' => 'Le nombre de jours de congés doit être <= {{ limit }}.',
                                'invalidMessage' => 'Merci de saisir un chiffre',
                            )
                        ),
                        new NotBlank(array('message' => 'Vous devez renseigner le nombre de jours de congé supplémentaire par ancienneté')),
                    ),
                )
            )
            ->add('nbJoursCongeParental', TextType::class, array(
                    'required'    => true,
                    'label'       => 'Nombre de jours de congé parental',
                    'constraints' => array(
                        new Range(array(
                                'min'            => 0, 'minMessage' => 'Le nombre de jours de congés doit être >= {{ limit }}.',
                                'max'            => 100, 'maxMessage' => 'Le nombre de jours de congés doit être <= {{ limit }}.',
                                'invalidMessage' => 'Merci de saisir un chiffre',
                            )
                        ),
                        new NotBlank(array('message' => 'Vous devez renseigner le nombre de jours de congé parental')),
                    ),
                )
            )
            ->add('nbJoursCongeParental', TextType::class, array(
                    'required'    => true,
                    'label'       => 'Nombre de jours de congé parental',
                    'constraints' => array(
                        new Range(array(
                                'min'            => 0, 'minMessage' => 'Le nombre de jours de congés doit être >= {{ limit }}.',
                                'max'            => 100, 'maxMessage' => 'Le nombre de jours de congés doit être <= {{ limit }}.',
                                'invalidMessage' => 'Merci de saisir un chiffre',
                            )
                        ),
                        new NotBlank(array('message' => 'Vous devez renseigner le nombre de jours de congé parental')),
                    ),
                )
            )
            ->add('nbJoursDeces', TextType::class, array(
                    'required'    => true,
                    'label'       => 'Nombre de jours pour décès',
                    'constraints' => array(
                        new Range(array(
                                'min'            => 0, 'minMessage' => 'Le nombre de jours de congés doit être >= {{ limit }}.',
                                'max'            => 100, 'maxMessage' => 'Le nombre de jours de congés doit être <= {{ limit }}.',
                                'invalidMessage' => 'Merci de saisir un chiffre',
                            )
                        ),
                        new NotBlank(array('message' => 'Vous devez renseigner le nombre de jours pour décès')),
                    ),
                )
            )
            ->add('nbJoursTravailles', TextType::class, array(
                    'required'    => true,
                    'label'       => 'Nombre de jours travaillés',
                    'constraints' => array(
                        new Range(array(
                                'min'            => 0, 'minMessage' => 'Le nombre de jours de congés doit être >= {{ limit }}.',
                                'max'            => 365, 'maxMessage' => 'Le nombre de jours de congés doit être <= {{ limit }}.',
                                'invalidMessage' => 'Merci de saisir un chiffre',
                            )
                        ),
                        new NotBlank(array('message' => 'Vous devez renseigner le nombre de jours travaillés')),
                    ),
                )
            )
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
                'data_class' => 'InterInvest\CongesBundle\Entity\Convention',
            )
        );
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ii_bundle_congebundle_convention';
    }
}
