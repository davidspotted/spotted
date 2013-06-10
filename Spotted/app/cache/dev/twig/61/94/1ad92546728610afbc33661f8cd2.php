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
            'bodyAttributes' => array($this, 'block_bodyAttributes'),
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
 \t<meta name=\"viewport\" content=\"width=device-width\" initial-scale=1.0; minimum-scale=1.0; maximum-scale=1.0; user-scalable=no;>
 \t<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
    <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
 
\t";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "  </head>
   <body";
        // line 13
        $this->displayBlock('bodyAttributes', $context, $blocks);
        echo ">  
  
  <div id=\"mobileContainer\">
  
  ";
        // line 17
        $this->displayBlock('body', $context, $blocks);
        // line 19
        echo "   
  </div>  
  
  ";
        // line 22
        $this->displayBlock('javascripts', $context, $blocks);
        // line 26
        echo "   
  </body>
</html>";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo " ";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 10
        echo "\t  \t\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/spotteduser/css/mobile.css"), "html", null, true);
        echo "\" type=\"text/css\" /> 
\t";
    }

    // line 13
    public function block_bodyAttributes($context, array $blocks = array())
    {
    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        // line 18
        echo "  \t 
  ";
    }

    // line 22
    public function block_javascripts($context, array $blocks = array())
    {
        // line 23
        echo "\t <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/spotteduser/js/mobile.js"), "html", null, true);
        echo "\"></script>
\t <script type=\"text/javascript\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jQuery.js"), "html", null, true);
        echo "\"></script>
  ";
    }

    public function getTemplateName()
    {
        return "::mobile.layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  49 => 17,  23 => 1,  56 => 22,  53 => 10,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 86,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 79,  245 => 77,  230 => 75,  222 => 73,  220 => 72,  215 => 70,  211 => 69,  204 => 66,  198 => 63,  185 => 61,  183 => 60,  177 => 58,  160 => 57,  112 => 42,  82 => 20,  65 => 16,  38 => 6,  144 => 50,  141 => 51,  135 => 47,  126 => 45,  109 => 41,  103 => 34,  67 => 19,  61 => 16,  47 => 9,  105 => 24,  93 => 22,  76 => 22,  72 => 14,  68 => 12,  27 => 4,  91 => 20,  84 => 28,  94 => 39,  88 => 18,  79 => 19,  59 => 22,  21 => 2,  44 => 12,  31 => 6,  28 => 5,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 62,  191 => 78,  189 => 77,  186 => 76,  180 => 72,  172 => 67,  159 => 61,  154 => 59,  147 => 55,  132 => 48,  127 => 49,  121 => 45,  118 => 44,  114 => 42,  104 => 36,  100 => 33,  78 => 24,  75 => 23,  71 => 21,  58 => 26,  34 => 11,  26 => 6,  25 => 3,  24 => 1,  19 => 1,  70 => 9,  63 => 17,  46 => 7,  22 => 2,  163 => 63,  155 => 58,  152 => 49,  149 => 51,  145 => 46,  139 => 50,  131 => 42,  123 => 47,  120 => 46,  115 => 39,  106 => 35,  101 => 24,  96 => 23,  83 => 18,  80 => 13,  74 => 16,  66 => 9,  55 => 13,  52 => 15,  50 => 10,  43 => 15,  41 => 7,  37 => 9,  35 => 5,  32 => 7,  29 => 3,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 57,  157 => 56,  153 => 54,  151 => 52,  143 => 54,  138 => 51,  136 => 50,  133 => 43,  130 => 47,  122 => 44,  119 => 36,  116 => 35,  111 => 38,  108 => 37,  102 => 30,  98 => 22,  95 => 34,  92 => 28,  89 => 19,  85 => 17,  81 => 40,  73 => 10,  64 => 7,  60 => 23,  57 => 6,  54 => 10,  51 => 19,  48 => 13,  45 => 8,  42 => 13,  39 => 12,  36 => 5,  33 => 4,  30 => 3,);
    }
}
