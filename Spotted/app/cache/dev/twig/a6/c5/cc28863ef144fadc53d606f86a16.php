<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_a6c5cc28863ef144fadc53d606f86a16 extends Twig_Template
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
        if (twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "exception"), "trace"))) {
            // line 2
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "exception"), "trace"));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->env->loadTemplate("TwigBundle:Exception:trace.txt.twig")->display(array("trace" => $this->getContext($context, "trace")));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 13,  87 => 20,  44 => 10,  25 => 3,  21 => 2,  92 => 21,  89 => 20,  79 => 18,  75 => 17,  68 => 14,  50 => 8,  27 => 4,  22 => 2,  201 => 92,  199 => 91,  196 => 90,  187 => 84,  183 => 82,  173 => 74,  171 => 73,  168 => 72,  166 => 71,  163 => 70,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 57,  136 => 56,  133 => 55,  123 => 47,  121 => 46,  117 => 44,  115 => 43,  112 => 42,  105 => 40,  91 => 31,  69 => 25,  66 => 15,  54 => 21,  19 => 1,  97 => 23,  94 => 22,  86 => 28,  82 => 20,  62 => 23,  57 => 16,  53 => 13,  41 => 9,  35 => 4,  26 => 5,  20 => 1,  67 => 16,  60 => 16,  46 => 7,  33 => 10,  101 => 24,  96 => 23,  93 => 22,  88 => 24,  85 => 19,  80 => 19,  73 => 10,  70 => 9,  64 => 12,  58 => 26,  56 => 9,  49 => 19,  39 => 6,  37 => 9,  32 => 12,  24 => 4,  31 => 5,  28 => 5,  76 => 19,  72 => 16,  65 => 17,  61 => 16,  55 => 13,  51 => 15,  45 => 8,  42 => 14,  36 => 7,  30 => 3,);
    }
}
