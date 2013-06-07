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
        return array (  101 => 24,  96 => 23,  93 => 22,  88 => 18,  85 => 17,  80 => 13,  70 => 9,  64 => 7,  58 => 26,  56 => 22,  49 => 17,  39 => 12,  37 => 9,  32 => 7,  24 => 1,  31 => 6,  28 => 5,  73 => 10,  71 => 21,  63 => 17,  61 => 16,  55 => 13,  51 => 19,  45 => 8,  42 => 13,  36 => 5,  30 => 3,);
    }
}
