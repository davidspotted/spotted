<?php

/* SpottedUserBundle::mobile.layout.html.twig */
class __TwigTemplate_90d962a5ba8a4ff83cadbe7baa1f9415 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::mobile.layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::mobile.layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo " 
";
    }

    public function getTemplateName()
    {
        return "SpottedUserBundle::mobile.layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 6,  28 => 5,  76 => 22,  72 => 21,  65 => 17,  61 => 16,  55 => 13,  51 => 12,  45 => 8,  42 => 7,  36 => 5,  30 => 3,);
    }
}
