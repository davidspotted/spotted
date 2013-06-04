<?php

/* SpottedHomeBundle::mobile.layout.html.twig */
class __TwigTemplate_d0c0304fff8a1ec73f2051bbd8174157 extends Twig_Template
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
        return "SpottedHomeBundle::mobile.layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 6,  28 => 5,  55 => 14,  53 => 13,  47 => 10,  43 => 9,  38 => 6,  35 => 5,  29 => 3,);
    }
}
