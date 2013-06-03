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
        // line 14
        echo "  </head>
 
  <body>  
  
  <div id=\"mobileContainer\">
  
  ";
        // line 20
        $this->displayBlock('body', $context, $blocks);
        // line 22
        echo "  
  
  </div>
 
  ";
        // line 26
        $this->displayBlock('javascripts', $context, $blocks);
        // line 29
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
        echo "\t\t";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "22b4525_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_22b4525_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/22b4525_mobile_1.css");
            // line 11
            echo "\t  \t\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" type=\"text/css\" />
\t\t";
        } else {
            // asset "22b4525"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_22b4525") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/22b4525.css");
            echo "\t  \t\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" type=\"text/css\" />
\t\t";
        }
        unset($context["asset_url"]);
        // line 13
        echo "\t";
    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        // line 21
        echo "  
  ";
    }

    // line 26
    public function block_javascripts($context, array $blocks = array())
    {
        // line 27
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "::mobile.layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  104 => 27,  101 => 26,  96 => 21,  93 => 20,  89 => 13,  75 => 11,  70 => 9,  67 => 8,  61 => 6,  55 => 29,  53 => 26,  47 => 22,  45 => 20,  37 => 14,  30 => 6,  23 => 1,  31 => 6,  28 => 5,  44 => 9,  42 => 8,  38 => 6,  35 => 8,  29 => 3,);
    }
}
