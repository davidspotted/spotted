<?php 
namespace Spotted\UserBundle\Form;
 
use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;
 
class RegistrationFormType extends BaseType
{
    public function buildForm(FormBuilderInterface $builder,
                                           array $options)
    {
       
/*
        $builder->add('captcha', 'textarea', array(
            'label' => 'Code visuel :'
        ));
 */
        
        $builder->add('firstname', 'text', array(
        		'label' => 'form.firstname', 'translation_domain' => 'FOSUserBundle'
        ));
        $builder->add('lastname', 'text', array(
        		'label' => 'form.lastname', 'translation_domain' => 'FOSUserBundle' 
        ));
        
        parent::buildForm($builder, $options);
        
        $builder->add('gender', 'choice', array(
        		'choices' => array('m' => 'form.gender.male', 'f' => 'form.gender.female'),
        		'required' => true,
        		'expanded' => true,
        		'multiple' => false,
        		'label'     => 'form.gender.sex',
        		'translation_domain' => 'FOSUserBundle'
        ));
        
        $builder->remove('username');
    }
 
    public function getName()
    {
        return 'userbundle_user_registration';
    }
}