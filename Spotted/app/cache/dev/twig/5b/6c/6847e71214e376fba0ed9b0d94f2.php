<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_5b6c6847e71214e376fba0ed9b0d94f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
<form action=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_registration_register"), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo " method=\"POST\" class=\"fos_user_registration_register\">
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 3,  19 => 2,  97 => 23,  88 => 24,  82 => 20,  76 => 19,  57 => 14,  49 => 11,  41 => 9,  26 => 4,  24 => 3,  20 => 1,  72 => 22,  67 => 16,  60 => 16,  51 => 13,  42 => 10,  39 => 9,  33 => 6,  94 => 22,  89 => 25,  86 => 22,  81 => 19,  78 => 18,  71 => 10,  68 => 9,  62 => 15,  56 => 28,  54 => 24,  48 => 20,  46 => 11,  36 => 9,  23 => 1,  31 => 4,  28 => 4,  65 => 19,  63 => 18,  55 => 14,  53 => 13,  47 => 10,  43 => 9,  38 => 12,  35 => 6,  29 => 3,);
    }
}
