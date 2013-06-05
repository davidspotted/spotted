<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_837086c98aaccd135e6ca850f892f40b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        $this->env->loadTemplate("FOSUserBundle:Registration:register_content.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 23,  88 => 24,  82 => 20,  76 => 19,  57 => 14,  49 => 11,  41 => 9,  26 => 4,  24 => 3,  20 => 1,  72 => 22,  67 => 16,  60 => 16,  51 => 13,  42 => 10,  39 => 9,  33 => 7,  94 => 22,  89 => 25,  86 => 22,  81 => 19,  78 => 18,  71 => 10,  68 => 9,  62 => 15,  56 => 28,  54 => 24,  48 => 20,  46 => 11,  36 => 9,  23 => 1,  31 => 4,  28 => 3,  65 => 19,  63 => 18,  55 => 14,  53 => 13,  47 => 10,  43 => 9,  38 => 12,  35 => 6,  29 => 3,);
    }
}
