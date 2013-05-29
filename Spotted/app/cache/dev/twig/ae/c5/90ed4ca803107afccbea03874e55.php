<?php

/* ::layout.html.twig */
class __TwigTemplate_aec590ed4ca803107afccbea03874e55 extends Twig_Template
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
        return "::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  82 => 20,  79 => 19,  74 => 16,  71 => 15,  66 => 9,  63 => 8,  57 => 6,  51 => 22,  49 => 19,  45 => 17,  43 => 15,  37 => 11,  30 => 6,  23 => 1,  31 => 5,  28 => 4,  44 => 9,  42 => 8,  38 => 6,  35 => 8,  29 => 3,);
    }
}
