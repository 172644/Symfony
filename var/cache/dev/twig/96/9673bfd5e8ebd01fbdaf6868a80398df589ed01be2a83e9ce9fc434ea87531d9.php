<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_ecb614cb6bb3a1b6919d17745343d6e240dfff0b3be69ec0c5b8878334f27046 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_541be1844b776c3fac88ca56d0571a4eb085a1d60391c62572becafbfb435c42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_541be1844b776c3fac88ca56d0571a4eb085a1d60391c62572becafbfb435c42->enter($__internal_541be1844b776c3fac88ca56d0571a4eb085a1d60391c62572becafbfb435c42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_7a2c9442287fd21efd5f3c35c23574f0e06e029160a43da536bbce590608a7b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a2c9442287fd21efd5f3c35c23574f0e06e029160a43da536bbce590608a7b5->enter($__internal_7a2c9442287fd21efd5f3c35c23574f0e06e029160a43da536bbce590608a7b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_541be1844b776c3fac88ca56d0571a4eb085a1d60391c62572becafbfb435c42->leave($__internal_541be1844b776c3fac88ca56d0571a4eb085a1d60391c62572becafbfb435c42_prof);

        
        $__internal_7a2c9442287fd21efd5f3c35c23574f0e06e029160a43da536bbce590608a7b5->leave($__internal_7a2c9442287fd21efd5f3c35c23574f0e06e029160a43da536bbce590608a7b5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4ddea947763b1e6aed4b45cefca1e9b89468de385b016c3848a8ad317d9aac99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ddea947763b1e6aed4b45cefca1e9b89468de385b016c3848a8ad317d9aac99->enter($__internal_4ddea947763b1e6aed4b45cefca1e9b89468de385b016c3848a8ad317d9aac99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2fd808f61493c9adddac0b012113936b66d18211df79c8a695a8c9830f6465b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fd808f61493c9adddac0b012113936b66d18211df79c8a695a8c9830f6465b2->enter($__internal_2fd808f61493c9adddac0b012113936b66d18211df79c8a695a8c9830f6465b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_2fd808f61493c9adddac0b012113936b66d18211df79c8a695a8c9830f6465b2->leave($__internal_2fd808f61493c9adddac0b012113936b66d18211df79c8a695a8c9830f6465b2_prof);

        
        $__internal_4ddea947763b1e6aed4b45cefca1e9b89468de385b016c3848a8ad317d9aac99->leave($__internal_4ddea947763b1e6aed4b45cefca1e9b89468de385b016c3848a8ad317d9aac99_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6fcbd5454622a6455102207b3171df4d93577122f71e9400a8c25f7e51d5b9aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fcbd5454622a6455102207b3171df4d93577122f71e9400a8c25f7e51d5b9aa->enter($__internal_6fcbd5454622a6455102207b3171df4d93577122f71e9400a8c25f7e51d5b9aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b8ac00fa422644e7a7a52eb093cfc4f6ee70a3c8b605c1e3b794802db110e8d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8ac00fa422644e7a7a52eb093cfc4f6ee70a3c8b605c1e3b794802db110e8d5->enter($__internal_b8ac00fa422644e7a7a52eb093cfc4f6ee70a3c8b605c1e3b794802db110e8d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_b8ac00fa422644e7a7a52eb093cfc4f6ee70a3c8b605c1e3b794802db110e8d5->leave($__internal_b8ac00fa422644e7a7a52eb093cfc4f6ee70a3c8b605c1e3b794802db110e8d5_prof);

        
        $__internal_6fcbd5454622a6455102207b3171df4d93577122f71e9400a8c25f7e51d5b9aa->leave($__internal_6fcbd5454622a6455102207b3171df4d93577122f71e9400a8c25f7e51d5b9aa_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a8bfaf6d5c88767282eededd9f1f330cf2b0b0114a28439d0d2af183402500d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8bfaf6d5c88767282eededd9f1f330cf2b0b0114a28439d0d2af183402500d0->enter($__internal_a8bfaf6d5c88767282eededd9f1f330cf2b0b0114a28439d0d2af183402500d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f0cf9b80302d63ccd180634617e1ad693480df3c101917409c94368a3b1ade62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0cf9b80302d63ccd180634617e1ad693480df3c101917409c94368a3b1ade62->enter($__internal_f0cf9b80302d63ccd180634617e1ad693480df3c101917409c94368a3b1ade62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_f0cf9b80302d63ccd180634617e1ad693480df3c101917409c94368a3b1ade62->leave($__internal_f0cf9b80302d63ccd180634617e1ad693480df3c101917409c94368a3b1ade62_prof);

        
        $__internal_a8bfaf6d5c88767282eededd9f1f330cf2b0b0114a28439d0d2af183402500d0->leave($__internal_a8bfaf6d5c88767282eededd9f1f330cf2b0b0114a28439d0d2af183402500d0_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
