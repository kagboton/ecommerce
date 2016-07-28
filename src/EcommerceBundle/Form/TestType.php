<?php

    namespace EcommerceBundle\Form;

    use Symfony\Bridge\Doctrine\Form\Type\EntityType;
    use Symfony\Component\Form\AbstractType;
    use Symfony\Component\Form\Extension\Core\Type\ButtonType;
    use Symfony\Component\Form\Extension\Core\Type\CountryType;
    use Symfony\Component\Form\Extension\Core\Type\DateType;
    use Symfony\Component\Form\Extension\Core\Type\EmailType;
    use Symfony\Component\Form\Extension\Core\Type\SubmitType;
    use Symfony\Component\Form\Extension\Core\Type\TextareaType;
    use Symfony\Component\Form\Extension\Core\Type\TimezoneType;
    use Symfony\Component\Form\FormBuilderInterface;
    use Symfony\Component\Form\Extension\Core\Type\ChoiceType;



    class TestType extends AbstractType{

        public function buildForm(FormBuilderInterface $builder, array $options)
        {
            $builder
                ->add('email', EmailType::class, array('required'=>true))
                ->add('nom', ChoiceType::class, array('choices'=>array(
                    'homme'=>'0',
                    'femme'=>'1',
                    'autre'=>'2'),
                    'preferred_choices'=>array('0', '1'),
                    'expanded'=>false))
                ->add('prenom')
                ->add('date', DateType::class)
                ->add('sexe')
                ->add('contenu', TextareaType::class)
                ->add('utilisateurs', EntityType::class, array(
                    'class' => 'UtilisateursBundle:Utilisateurs',
                    'choice_label' => 'username'))
                ->add('pays', CountryType::class, array('preferred_choices' =>array('France', 'Bénin')))
                ->add('time_zone', TimezoneType::class)
                ->add('envoyer', SubmitType::class  );
        }

        public function getName(){

            return 'ecommercebundle_test';
        }

    }


