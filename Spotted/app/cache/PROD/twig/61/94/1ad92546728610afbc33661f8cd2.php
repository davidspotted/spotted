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
        echo "\t\t";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "77ec92d_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_77ec92d_0") : $this->env->getExtension('assets')->getAssetUrl("css/77ec92d_mobile_1.css");
            // line 10
            echo "\t  \t\t<link rel=\"stylesheet\" href=\"";
            if (isset($context["asset_url"])) { $_asset_url_ = $context["asset_url"]; } else { $_asset_url_ = null; }
            echo twig_escape_filter($this->env, $_asset_url_, "html", null, true);
            echo "\" type=\"text/css\" />
\t\t";
        } else {
            // asset "77ec92d"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_77ec92d") : $this->env->getExtension('assets')->getAssetUrl("css/77ec92d.css");
            echo "\t  \t\t<link rel=\"stylesheet\" href=\"";
            if (isset($context["asset_url"])) { $_asset_url_ = $context["asset_url"]; } else { $_asset_url_ = null; }
            echo twig_escape_filter($this->env, $_asset_url_, "html", null, true);
            echo "\" type=\"text/css\" />
\t\t";
        }
        unset($context["asset_url"]);
        // line 12
        echo "\t";
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
        return array (  106 => 26,  103 => 25,  98 => 20,  95 => 19,  91 => 12,  75 => 10,  70 => 9,  67 => 8,  61 => 6,  55 => 28,  53 => 25,  47 => 21,  45 => 19,  37 => 13,  30 => 6,  23 => 1,  31 => 6,  28 => 5,  44 => 9,  42 => 8,  38 => 6,  35 => 8,  29 => 3,);
    }
}
