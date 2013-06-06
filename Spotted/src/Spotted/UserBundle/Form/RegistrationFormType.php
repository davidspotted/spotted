<?php 
namespace Spotted\UserBundle\Form;
 
use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;
 
class RegistrationFormType extends BaseType
{
    public function buildForm(FormBuilderInterface $builder,
                                           array $options)
    {
        parent::buildForm($builder, $options);
/*
        $builder->add('captcha', 'textarea', array(
            'label' => 'Code visuel :'
        ));
 */
        $builder->remove('username');
    }
 
    public function getName()
    {
        return 'userbundle_user_registration';
    }
}