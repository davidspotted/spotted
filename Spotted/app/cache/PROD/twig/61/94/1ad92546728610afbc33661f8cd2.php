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
        // line 13
        echo "  </head>
 
  <body>  
  
  <div id=\"mobileContainer\">
  
  ";
        // line 19
        $this->displayBlock('body', $context, $blocks);
        // line 21
        echo "  
  
  </div>
 
  ";
        // line 25
        $this->displayBlock('javascripts', $context, $blocks);
        // line 28
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
        echo "
\t  \t\t<link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/spottedhome/css/mobile.css"), "html", null, true);
        echo "\" type=\"text/css\" />

\t";
    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        // line 20
        echo "  
  ";
    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        // line 26
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "::mobile.layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  80 => 19,  53 => 25,  37 => 13,  23 => 1,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 86,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 79,  245 => 77,  230 => 75,  222 => 73,  220 => 72,  215 => 70,  211 => 69,  204 => 66,  198 => 63,  185 => 61,  183 => 60,  177 => 58,  160 => 57,  149 => 51,  123 => 47,  120 => 46,  112 => 42,  106 => 35,  82 => 24,  65 => 16,  38 => 6,  155 => 58,  144 => 50,  141 => 51,  139 => 50,  135 => 47,  126 => 45,  109 => 41,  103 => 34,  101 => 36,  70 => 9,  67 => 8,  61 => 6,  47 => 21,  105 => 24,  96 => 21,  93 => 20,  83 => 20,  76 => 22,  72 => 14,  68 => 12,  50 => 10,  27 => 4,  91 => 26,  84 => 28,  74 => 16,  66 => 17,  55 => 28,  94 => 39,  88 => 25,  79 => 23,  59 => 22,  21 => 2,  46 => 9,  29 => 3,  44 => 12,  35 => 8,  31 => 5,  43 => 7,  32 => 4,  28 => 3,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 62,  191 => 78,  189 => 77,  186 => 76,  180 => 72,  172 => 67,  163 => 63,  159 => 61,  154 => 59,  147 => 55,  132 => 48,  127 => 49,  121 => 45,  118 => 44,  114 => 42,  104 => 36,  100 => 33,  78 => 24,  75 => 23,  71 => 15,  63 => 24,  58 => 12,  41 => 7,  34 => 11,  26 => 6,  25 => 3,  24 => 3,  22 => 2,  19 => 1,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 57,  157 => 56,  153 => 54,  151 => 52,  143 => 54,  138 => 51,  136 => 50,  133 => 43,  130 => 47,  122 => 44,  119 => 36,  116 => 35,  111 => 32,  108 => 31,  102 => 30,  98 => 22,  95 => 34,  92 => 28,  89 => 19,  85 => 24,  81 => 40,  73 => 10,  64 => 15,  60 => 13,  57 => 14,  54 => 10,  51 => 10,  48 => 13,  45 => 19,  42 => 8,  39 => 7,  36 => 6,  33 => 4,  30 => 6,);
    }
}
