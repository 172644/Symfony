<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_47c48abad52fb0f96ad15b5b7e8c53d4ee257b590ab86bccd12584f4da0a7f81 extends Twig_Template
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
        $__internal_e3305210145579b8d0ec17c5db56656a52365dc4d744b09167f8a393be78a924 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3305210145579b8d0ec17c5db56656a52365dc4d744b09167f8a393be78a924->enter($__internal_e3305210145579b8d0ec17c5db56656a52365dc4d744b09167f8a393be78a924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_88a499f074325cd515c21cf0b05ded68304962da9e5ec436e0ce21820d157172 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88a499f074325cd515c21cf0b05ded68304962da9e5ec436e0ce21820d157172->enter($__internal_88a499f074325cd515c21cf0b05ded68304962da9e5ec436e0ce21820d157172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

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
        
        $__internal_e3305210145579b8d0ec17c5db56656a52365dc4d744b09167f8a393be78a924->leave($__internal_e3305210145579b8d0ec17c5db56656a52365dc4d744b09167f8a393be78a924_prof);

        
        $__internal_88a499f074325cd515c21cf0b05ded68304962da9e5ec436e0ce21820d157172->leave($__internal_88a499f074325cd515c21cf0b05ded68304962da9e5ec436e0ce21820d157172_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
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
", "TwigBundle:Exception:traces.xml.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
