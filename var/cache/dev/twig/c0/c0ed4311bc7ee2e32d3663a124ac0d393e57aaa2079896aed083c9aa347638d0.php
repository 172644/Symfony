<?php

/* @Twig/Exception/exception.txt.twig */
class __TwigTemplate_aa16cfbbacb733175f3f65d9ee1cbf82bbbb8b2ff4b9a41ab3cef0a44e31e2ec extends Twig_Template
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
        $__internal_4260527e7e00085c59ac1fb88d129e80e8be9b57e388468edd135d6f2e3e9672 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4260527e7e00085c59ac1fb88d129e80e8be9b57e388468edd135d6f2e3e9672->enter($__internal_4260527e7e00085c59ac1fb88d129e80e8be9b57e388468edd135d6f2e3e9672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.txt.twig"));

        $__internal_452318bb13014c306df0ca5ae0809b49ed250a8ad22bf0a1567598ab3bd5a878 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_452318bb13014c306df0ca5ae0809b49ed250a8ad22bf0a1567598ab3bd5a878->enter($__internal_452318bb13014c306df0ca5ae0809b49ed250a8ad22bf0a1567598ab3bd5a878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.txt.twig"));

        // line 1
        echo "[exception] ";
        echo (((((isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()) . " | ") . (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })())) . " | ") . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "class", array()));
        echo "
[message] ";
        // line 2
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()), "message", array());
        echo "
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 3, $this->getSourceContext()); })()), "toarray", array()));
        foreach ($context['_seq'] as $context["i"] => $context["e"]) {
            // line 4
            echo "[";
            echo ($context["i"] + 1);
            echo "] ";
            echo twig_get_attribute($this->env, $this->getSourceContext(), $context["e"], "class", array());
            echo ": ";
            echo twig_get_attribute($this->env, $this->getSourceContext(), $context["e"], "message", array());
            echo "
";
            // line 5
            echo twig_include($this->env, $context, "@Twig/Exception/traces.txt.twig", array("exception" => $context["e"]), false);
            echo "

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_4260527e7e00085c59ac1fb88d129e80e8be9b57e388468edd135d6f2e3e9672->leave($__internal_4260527e7e00085c59ac1fb88d129e80e8be9b57e388468edd135d6f2e3e9672_prof);

        
        $__internal_452318bb13014c306df0ca5ae0809b49ed250a8ad22bf0a1567598ab3bd5a878->leave($__internal_452318bb13014c306df0ca5ae0809b49ed250a8ad22bf0a1567598ab3bd5a878_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 5,  38 => 4,  34 => 3,  30 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("[exception] {{ status_code ~ ' | ' ~ status_text ~ ' | ' ~ exception.class }}
[message] {{ exception.message }}
{% for i, e in exception.toarray %}
[{{ i + 1 }}] {{ e.class }}: {{ e.message }}
{{ include('@Twig/Exception/traces.txt.twig', { exception: e }, with_context = false) }}

{% endfor %}
", "@Twig/Exception/exception.txt.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.txt.twig");
    }
}
