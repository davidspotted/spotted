<?php

/* ::desktop.layout.html.twig */
class __TwigTemplate_f4e0480d5f76a1d1d4bdf39412fd45b2 extends Twig_Template
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
 
    ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "  </head>
 
  <body>  
  
  ";
        // line 15
        $this->displayBlock('body', $context, $blocks);
        // line 17
        echo "  
 
  ";
        // line 19
        $this->displayBlock('javascripts', $context, $blocks);
        // line 22
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
        echo "      \t
    ";
    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        // line 16
        echo "  
  ";
    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        // line 20
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "::desktop.layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  56 => 11,  86 => 22,  62 => 15,  49 => 19,  20 => 1,  80 => 19,  53 => 10,  37 => 11,  23 => 1,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 86,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 79,  245 => 77,  230 => 75,  222 => 73,  220 => 72,  215 => 70,  211 => 69,  204 => 66,  198 => 63,  185 => 61,  183 => 60,  177 => 58,  160 => 57,  149 => 51,  123 => 47,  120 => 46,  112 => 42,  106 => 35,  82 => 20,  65 => 16,  38 => 8,  155 => 58,  144 => 50,  141 => 51,  139 => 50,  135 => 47,  126 => 45,  109 => 41,  103 => 34,  101 => 36,  70 => 9,  67 => 20,  61 => 6,  47 => 21,  105 => 24,  96 => 21,  93 => 20,  83 => 20,  76 => 19,  72 => 22,  68 => 12,  50 => 10,  27 => 5,  91 => 26,  84 => 28,  74 => 16,  66 => 9,  55 => 14,  94 => 39,  88 => 24,  79 => 19,  59 => 22,  21 => 2,  46 => 11,  29 => 4,  44 => 12,  35 => 8,  31 => 6,  43 => 15,  32 => 5,  28 => 5,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 62,  191 => 78,  189 => 77,  186 => 76,  180 => 72,  172 => 67,  163 => 63,  159 => 61,  154 => 59,  147 => 55,  132 => 48,  127 => 49,  121 => 45,  118 => 44,  114 => 42,  104 => 36,  100 => 33,  78 => 24,  75 => 23,  71 => 15,  63 => 8,  58 => 12,  41 => 9,  34 => 7,  26 => 12,  25 => 3,  24 => 7,  22 => 3,  19 => 2,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 57,  157 => 56,  153 => 54,  151 => 52,  143 => 54,  138 => 51,  136 => 50,  133 => 43,  130 => 47,  122 => 44,  119 => 36,  116 => 35,  111 => 32,  108 => 31,  102 => 30,  98 => 23,  95 => 22,  92 => 28,  89 => 19,  85 => 24,  81 => 40,  73 => 10,  64 => 15,  60 => 16,  57 => 6,  54 => 10,  51 => 22,  48 => 12,  45 => 17,  42 => 10,  39 => 9,  36 => 7,  33 => 7,  30 => 6,);
    }
}
