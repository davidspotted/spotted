<?php

/* SpottedUserBundle::desktop.layout.html.twig */
class __TwigTemplate_7adf0ce8fe8499ec5943ae98fec95034 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::desktop.layout.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::desktop.layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 5
        echo "      \t";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "b931461_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b931461_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/b931461_desktop_1.css");
            // line 6
            echo "  \t\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" type=\"text/css\" />
\t\t";
        } else {
            // asset "b931461"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b931461") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/b931461.css");
            echo "  \t\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" type=\"text/css\" />
\t\t";
        }
        unset($context["asset_url"]);
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo " 
";
    }

    public function getTemplateName()
    {
        return "SpottedUserBundle::desktop.layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 11,  53 => 10,  37 => 6,  32 => 5,  38 => 6,  35 => 5,  29 => 4,);
    }
}
