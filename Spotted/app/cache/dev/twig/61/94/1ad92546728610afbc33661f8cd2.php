<?php

/* ::mobile.layout.html.twig */
class __TwigTemplate_61941ad92546728610afbc33661f8cd2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
 
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
 
\t";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "  </head>
 
  <body>  
  
  <div id=\"mobileContainer\">
  
  ";
        // line 17
        $this->displayBlock('body', $context, $blocks);
        // line 19
        echo "  
  
  </div>
 
  ";
        // line 23
        $this->displayBlock('javascripts', $context, $blocks);
        // line 26
        echo " 
  </body>
</html>";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo " ";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 9
        echo "\t  \t\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/spottedhome/css/mobile.css"), "html", null, true);
        echo "\" type=\"text/css\" /> 
\t";
    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        // line 18
        echo "  
  ";
    }

    // line 23
    public function block_javascripts($context, array $blocks = array())
    {
        // line 24
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "::mobile.layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  77 => 17,  53 => 23,  23 => 1,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 86,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 79,  245 => 77,  230 => 75,  222 => 73,  220 => 72,  215 => 70,  211 => 69,  204 => 66,  198 => 63,  185 => 61,  183 => 60,  177 => 58,  160 => 57,  112 => 42,  82 => 24,  65 => 16,  38 => 6,  144 => 50,  141 => 51,  135 => 47,  126 => 45,  109 => 41,  103 => 34,  67 => 8,  61 => 6,  47 => 19,  105 => 24,  93 => 20,  76 => 22,  72 => 14,  68 => 12,  27 => 4,  91 => 20,  84 => 28,  94 => 39,  88 => 24,  79 => 23,  59 => 22,  21 => 2,  44 => 12,  31 => 5,  28 => 3,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 62,  191 => 78,  189 => 77,  186 => 76,  180 => 72,  172 => 67,  159 => 61,  154 => 59,  147 => 55,  132 => 48,  127 => 49,  121 => 45,  118 => 44,  114 => 42,  104 => 36,  100 => 33,  78 => 24,  75 => 23,  71 => 15,  58 => 12,  34 => 11,  26 => 6,  25 => 3,  24 => 3,  19 => 1,  70 => 9,  63 => 24,  46 => 9,  22 => 2,  163 => 63,  155 => 58,  152 => 49,  149 => 51,  145 => 46,  139 => 50,  131 => 42,  123 => 47,  120 => 46,  115 => 39,  106 => 35,  101 => 36,  96 => 21,  83 => 18,  80 => 18,  74 => 16,  66 => 17,  55 => 26,  52 => 15,  50 => 10,  43 => 7,  41 => 7,  37 => 11,  35 => 8,  32 => 4,  29 => 3,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 57,  157 => 56,  153 => 54,  151 => 52,  143 => 54,  138 => 51,  136 => 50,  133 => 43,  130 => 47,  122 => 44,  119 => 36,  116 => 35,  111 => 38,  108 => 37,  102 => 30,  98 => 22,  95 => 34,  92 => 28,  89 => 19,  85 => 23,  81 => 40,  73 => 19,  64 => 15,  60 => 13,  57 => 14,  54 => 10,  51 => 10,  48 => 13,  45 => 17,  42 => 8,  39 => 7,  36 => 6,  33 => 4,  30 => 6,);
    }
}
