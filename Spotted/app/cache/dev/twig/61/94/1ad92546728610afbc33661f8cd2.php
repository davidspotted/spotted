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
 
  <body>  
  
  <div id=\"mobileContainer\">
  
  ";
        // line 18
        $this->displayBlock('body', $context, $blocks);
        // line 20
        echo "  
  
  </div>
 
  ";
        // line 24
        $this->displayBlock('javascripts', $context, $blocks);
        // line 28
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

    // line 18
    public function block_body($context, array $blocks = array())
    {
        // line 19
        echo "  
  ";
    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        // line 25
        echo "\t\t\t <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/spotteduser/js/mobile.js"), "html", null, true);
        echo "\"></script>
\t\t\t <script type=\"text/javascript\" src=\"";
        // line 26
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
        return array (  94 => 26,  89 => 25,  86 => 24,  81 => 19,  78 => 18,  71 => 10,  68 => 9,  62 => 7,  56 => 28,  54 => 24,  48 => 20,  46 => 18,  38 => 12,  36 => 9,  31 => 7,  23 => 1,);
    }
}
