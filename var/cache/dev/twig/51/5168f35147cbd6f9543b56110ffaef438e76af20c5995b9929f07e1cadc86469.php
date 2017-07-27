<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_9948a212c9fdd672db0ba194e7b4908650b870a4b872f9f40a490f9347792eee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
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
        $__internal_2a205018e48a6f4a1c982ed8417042e9866cc402762c51f8a08fd764167582de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a205018e48a6f4a1c982ed8417042e9866cc402762c51f8a08fd764167582de->enter($__internal_2a205018e48a6f4a1c982ed8417042e9866cc402762c51f8a08fd764167582de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_47499c9f1641c531a14c05221545137046d346a450d6e974086d3993935c9ca4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47499c9f1641c531a14c05221545137046d346a450d6e974086d3993935c9ca4->enter($__internal_47499c9f1641c531a14c05221545137046d346a450d6e974086d3993935c9ca4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a205018e48a6f4a1c982ed8417042e9866cc402762c51f8a08fd764167582de->leave($__internal_2a205018e48a6f4a1c982ed8417042e9866cc402762c51f8a08fd764167582de_prof);

        
        $__internal_47499c9f1641c531a14c05221545137046d346a450d6e974086d3993935c9ca4->leave($__internal_47499c9f1641c531a14c05221545137046d346a450d6e974086d3993935c9ca4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bcd8f87ba625fee40a40255fe9595f7df6307a41fadcf9da4fc7c67fb619726b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcd8f87ba625fee40a40255fe9595f7df6307a41fadcf9da4fc7c67fb619726b->enter($__internal_bcd8f87ba625fee40a40255fe9595f7df6307a41fadcf9da4fc7c67fb619726b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_943bbdfae518d5e7e2453f4c4441d650535080aef2a6d1780835bb7abebf629e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_943bbdfae518d5e7e2453f4c4441d650535080aef2a6d1780835bb7abebf629e->enter($__internal_943bbdfae518d5e7e2453f4c4441d650535080aef2a6d1780835bb7abebf629e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_943bbdfae518d5e7e2453f4c4441d650535080aef2a6d1780835bb7abebf629e->leave($__internal_943bbdfae518d5e7e2453f4c4441d650535080aef2a6d1780835bb7abebf629e_prof);

        
        $__internal_bcd8f87ba625fee40a40255fe9595f7df6307a41fadcf9da4fc7c67fb619726b->leave($__internal_bcd8f87ba625fee40a40255fe9595f7df6307a41fadcf9da4fc7c67fb619726b_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2807ae5e5bfdfd5bf2fa30eadeaf0aee0cb5ffecbed4030040c08b4bda066c0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2807ae5e5bfdfd5bf2fa30eadeaf0aee0cb5ffecbed4030040c08b4bda066c0c->enter($__internal_2807ae5e5bfdfd5bf2fa30eadeaf0aee0cb5ffecbed4030040c08b4bda066c0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_992602c9efdfda104999c5ed2aa3072006bc3058a4a06b2c879419ba6520340d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_992602c9efdfda104999c5ed2aa3072006bc3058a4a06b2c879419ba6520340d->enter($__internal_992602c9efdfda104999c5ed2aa3072006bc3058a4a06b2c879419ba6520340d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_992602c9efdfda104999c5ed2aa3072006bc3058a4a06b2c879419ba6520340d->leave($__internal_992602c9efdfda104999c5ed2aa3072006bc3058a4a06b2c879419ba6520340d_prof);

        
        $__internal_2807ae5e5bfdfd5bf2fa30eadeaf0aee0cb5ffecbed4030040c08b4bda066c0c->leave($__internal_2807ae5e5bfdfd5bf2fa30eadeaf0aee0cb5ffecbed4030040c08b4bda066c0c_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_addb61cfdc1cccd661bd8f1bcb176e4c3a8c05deed8e6a5ab075d689f7395607 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_addb61cfdc1cccd661bd8f1bcb176e4c3a8c05deed8e6a5ab075d689f7395607->enter($__internal_addb61cfdc1cccd661bd8f1bcb176e4c3a8c05deed8e6a5ab075d689f7395607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c0c4adad89b10a6d2399d276db8d7ff1f361e5d55f4afc22def4a83b2b0cb88d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0c4adad89b10a6d2399d276db8d7ff1f361e5d55f4afc22def4a83b2b0cb88d->enter($__internal_c0c4adad89b10a6d2399d276db8d7ff1f361e5d55f4afc22def4a83b2b0cb88d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_c0c4adad89b10a6d2399d276db8d7ff1f361e5d55f4afc22def4a83b2b0cb88d->leave($__internal_c0c4adad89b10a6d2399d276db8d7ff1f361e5d55f4afc22def4a83b2b0cb88d_prof);

        
        $__internal_addb61cfdc1cccd661bd8f1bcb176e4c3a8c05deed8e6a5ab075d689f7395607->leave($__internal_addb61cfdc1cccd661bd8f1bcb176e4c3a8c05deed8e6a5ab075d689f7395607_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
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
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
