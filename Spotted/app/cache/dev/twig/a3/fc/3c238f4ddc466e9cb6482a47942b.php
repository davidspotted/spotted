<?php

/* TwigBundle:Exception:logs.html.twig */
class __TwigTemplate_a3fc3c238f4ddc466e9cb6482a47942b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<ol class=\"traces logs\">
    ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "logs"));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 3
            echo "        <li";
            if (($this->getAttribute($this->getContext($context, "log"), "priority") >= 400)) {
                echo " class=\"error\"";
            } elseif (($this->getAttribute($this->getContext($context, "log"), "priority") >= 300)) {
                echo " class=\"warning\"";
            }
            echo ">
            ";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "log"), "priorityName"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "log"), "message"), "html", null, true);
            echo "
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</ol>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:logs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 20,  44 => 10,  25 => 4,  21 => 2,  92 => 21,  89 => 20,  79 => 18,  75 => 17,  68 => 14,  50 => 8,  27 => 4,  22 => 2,  201 => 92,  199 => 91,  196 => 90,  187 => 84,  183 => 82,  173 => 74,  171 => 73,  168 => 72,  166 => 71,  163 => 70,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 57,  136 => 56,  133 => 55,  123 => 47,  121 => 46,  117 => 44,  115 => 43,  112 => 42,  105 => 40,  91 => 31,  69 => 25,  66 => 15,  54 => 21,  19 => 1,  97 => 23,  94 => 22,  86 => 28,  82 => 20,  62 => 23,  57 => 14,  53 => 13,  41 => 9,  35 => 4,  26 => 3,  20 => 1,  67 => 16,  60 => 16,  46 => 7,  33 => 5,  101 => 24,  96 => 23,  93 => 22,  88 => 24,  85 => 19,  80 => 19,  73 => 10,  70 => 9,  64 => 12,  58 => 26,  56 => 9,  49 => 19,  39 => 6,  37 => 9,  32 => 12,  24 => 3,  31 => 5,  28 => 5,  76 => 19,  72 => 16,  65 => 17,  61 => 16,  55 => 13,  51 => 12,  45 => 8,  42 => 10,  36 => 7,  30 => 3,);
    }
}
