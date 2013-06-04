<?php

/* SpottedHomeBundle:Home:index.mobile.twig */
class __TwigTemplate_8eb85cb8c3432d2369d6fc7d0b8cac09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SpottedHomeBundle::mobile.layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SpottedHomeBundle::mobile.layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("home.header.title"), "html", null, true);
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<h1>Spotted</h1>

\t<div id=\"div-home-selector\">
\t\t<div class=\"div-home-caption\"><span>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("home.body.login"), "html", null, true);
        echo "</span></div>
\t\t<div class=\"div-home-caption\"><span>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("home.body.signup"), "html", null, true);
        echo "</span></div>
\t</div>
\t<div id=\"div-login-form\">
\t\t";
        // line 13
        echo $this->env->getExtension('actions')->renderAction("FOSUserBundle:Security:Login", array(), array());
        // line 14
        echo "\t\t<div id=\"btnConnect\" onclick=\"connect();\"><span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("home.body.connect"), "html", null, true);
        echo "</span></div>
\t</div>
\t
\t<div id=\"div-signup-form\">
\t\t
\t</div>
\t
\t

";
    }

    public function getTemplateName()
    {
        return "SpottedHomeBundle:Home:index.mobile.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 14,  53 => 13,  47 => 10,  43 => 9,  38 => 6,  35 => 5,  29 => 3,);
    }
}
