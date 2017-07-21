<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_7010aa99e6fb61b04098e86fd22089d978bb5f607e4e8c5c6eb58710a9b141fd extends Twig_Template
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
        $__internal_ae07ee8cee2a3171bb78dc66f6d2e852d3e134409b227fbcb1a98aad8d016c34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae07ee8cee2a3171bb78dc66f6d2e852d3e134409b227fbcb1a98aad8d016c34->enter($__internal_ae07ee8cee2a3171bb78dc66f6d2e852d3e134409b227fbcb1a98aad8d016c34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_83acd705f20ad525f17384d0dffa6f1e96a1d6cdaa63f7bdbd40c0efc3ea3584 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83acd705f20ad525f17384d0dffa6f1e96a1d6cdaa63f7bdbd40c0efc3ea3584->enter($__internal_83acd705f20ad525f17384d0dffa6f1e96a1d6cdaa63f7bdbd40c0efc3ea3584_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_ae07ee8cee2a3171bb78dc66f6d2e852d3e134409b227fbcb1a98aad8d016c34->leave($__internal_ae07ee8cee2a3171bb78dc66f6d2e852d3e134409b227fbcb1a98aad8d016c34_prof);

        
        $__internal_83acd705f20ad525f17384d0dffa6f1e96a1d6cdaa63f7bdbd40c0efc3ea3584->leave($__internal_83acd705f20ad525f17384d0dffa6f1e96a1d6cdaa63f7bdbd40c0efc3ea3584_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "@Twig/Exception/traces.xml.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.xml.twig");
    }
}
