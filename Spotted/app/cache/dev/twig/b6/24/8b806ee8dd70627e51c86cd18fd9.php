<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_b6248b806ee8dd70627e51c86cd18fd9 extends Twig_Template
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

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute($this->getContext($context, "user"), "email")), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 25,  62 => 19,  40 => 11,  20 => 1,  49 => 19,  23 => 4,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 86,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 79,  245 => 77,  230 => 75,  222 => 73,  220 => 72,  215 => 70,  211 => 69,  204 => 66,  198 => 63,  185 => 61,  183 => 60,  177 => 58,  160 => 57,  112 => 42,  82 => 20,  65 => 16,  38 => 6,  144 => 50,  141 => 51,  135 => 47,  126 => 45,  109 => 41,  103 => 28,  67 => 20,  61 => 16,  47 => 9,  105 => 24,  93 => 29,  76 => 22,  72 => 21,  68 => 12,  27 => 4,  91 => 27,  84 => 28,  94 => 39,  88 => 27,  79 => 19,  59 => 22,  21 => 2,  44 => 12,  31 => 6,  28 => 5,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 62,  191 => 78,  189 => 77,  186 => 76,  180 => 72,  172 => 67,  159 => 61,  154 => 59,  147 => 55,  132 => 48,  127 => 49,  121 => 45,  118 => 44,  114 => 42,  104 => 36,  100 => 27,  78 => 24,  75 => 23,  71 => 15,  58 => 18,  34 => 11,  26 => 6,  24 => 3,  25 => 3,  19 => 2,  70 => 20,  63 => 8,  46 => 14,  22 => 3,  163 => 63,  155 => 58,  152 => 49,  149 => 51,  145 => 46,  139 => 50,  131 => 42,  123 => 47,  120 => 46,  115 => 39,  106 => 35,  101 => 36,  96 => 21,  83 => 18,  80 => 24,  74 => 16,  66 => 17,  55 => 15,  52 => 15,  50 => 10,  43 => 15,  41 => 7,  37 => 11,  35 => 8,  32 => 4,  29 => 5,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 57,  157 => 56,  153 => 54,  151 => 52,  143 => 54,  138 => 51,  136 => 50,  133 => 43,  130 => 47,  122 => 44,  119 => 36,  116 => 35,  111 => 38,  108 => 37,  102 => 30,  98 => 22,  95 => 34,  92 => 28,  89 => 19,  85 => 24,  81 => 24,  73 => 19,  64 => 15,  60 => 13,  57 => 6,  54 => 16,  51 => 10,  48 => 13,  45 => 17,  42 => 8,  39 => 7,  36 => 10,  33 => 6,  30 => 4,);
    }
}
