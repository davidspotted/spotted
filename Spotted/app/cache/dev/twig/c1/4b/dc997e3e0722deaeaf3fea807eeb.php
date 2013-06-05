<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_c14bdc997e3e0722deaeaf3fea807eeb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
        <div>
            ";
        // line 3
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 4
            echo "               
            \t";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "username")), "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_logout"), "html", null, true);
            echo "\">
                    ";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
                
            ";
        } else {
            // line 11
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_login"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 13
        echo "        </div>

        ";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flashbag"), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 16
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "messages"));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 17
                echo "                <div class=\"flash-";
                echo twig_escape_filter($this->env, $this->getContext($context, "type"), "html", null, true);
                echo "\">
                    ";
                // line 18
                echo twig_escape_filter($this->env, $this->getContext($context, "message"), "html", null, true);
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
        <div>
            ";
        // line 24
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 26
        echo "        </div>

";
    }

    // line 24
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 25
        echo "            ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 25,  97 => 24,  91 => 26,  85 => 22,  79 => 21,  70 => 18,  65 => 17,  52 => 13,  44 => 11,  37 => 7,  26 => 4,  24 => 3,  20 => 1,  74 => 24,  60 => 16,  51 => 13,  42 => 10,  39 => 9,  33 => 6,  94 => 26,  89 => 24,  86 => 24,  81 => 19,  78 => 18,  71 => 10,  68 => 21,  62 => 7,  56 => 15,  54 => 24,  48 => 20,  46 => 11,  36 => 9,  23 => 1,  31 => 6,  28 => 5,  55 => 14,  53 => 13,  47 => 10,  43 => 9,  38 => 12,  35 => 5,  29 => 5,);
    }
}
