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
\t\t<div class=\"div-home-caption\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("home.body.login"), "html", null, true);
        echo "</div>
\t\t<div class=\"div-home-caption\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("home.body.signup"), "html", null, true);
        echo "</div>
\t</div>
\t<div id=\"div-login-form\">
\t\t";
        // line 12
        echo $this->env->getExtension('actions')->renderAction("FOSUserBundle:Security:Login", array(), array());
        // line 13
        echo "\t</div>
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
        return array (  49 => 19,  97 => 24,  56 => 11,  20 => 1,  77 => 17,  53 => 10,  23 => 1,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 86,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 79,  245 => 77,  230 => 75,  222 => 73,  220 => 72,  215 => 70,  211 => 69,  204 => 66,  198 => 63,  185 => 61,  183 => 60,  177 => 58,  160 => 57,  112 => 42,  82 => 20,  65 => 17,  38 => 6,  144 => 50,  141 => 51,  135 => 47,  126 => 45,  109 => 41,  103 => 34,  67 => 8,  61 => 6,  47 => 19,  105 => 24,  93 => 20,  76 => 22,  72 => 14,  68 => 21,  27 => 5,  91 => 26,  84 => 28,  94 => 39,  88 => 24,  79 => 19,  59 => 22,  21 => 2,  44 => 11,  31 => 6,  28 => 5,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 62,  191 => 78,  189 => 77,  186 => 76,  180 => 72,  172 => 67,  159 => 61,  154 => 59,  147 => 55,  132 => 48,  127 => 49,  121 => 45,  118 => 44,  114 => 42,  104 => 36,  100 => 25,  78 => 24,  75 => 23,  71 => 15,  58 => 12,  34 => 7,  26 => 12,  25 => 3,  24 => 7,  19 => 2,  70 => 18,  63 => 8,  46 => 9,  22 => 3,  163 => 63,  155 => 58,  152 => 49,  149 => 51,  145 => 46,  139 => 50,  131 => 42,  123 => 47,  120 => 46,  115 => 39,  106 => 35,  101 => 36,  96 => 21,  83 => 18,  80 => 18,  74 => 16,  66 => 9,  55 => 14,  52 => 12,  50 => 10,  43 => 15,  41 => 9,  37 => 11,  35 => 5,  32 => 5,  29 => 3,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 57,  157 => 56,  153 => 54,  151 => 52,  143 => 54,  138 => 51,  136 => 50,  133 => 43,  130 => 47,  122 => 44,  119 => 36,  116 => 35,  111 => 38,  108 => 37,  102 => 30,  98 => 22,  95 => 34,  92 => 28,  89 => 24,  85 => 22,  81 => 40,  73 => 19,  64 => 15,  60 => 16,  57 => 6,  54 => 13,  51 => 22,  48 => 12,  45 => 17,  42 => 8,  39 => 9,  36 => 7,  33 => 7,  30 => 6,);
    }
}
