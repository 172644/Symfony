<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_9f6fbe6808217af59e60a5ce4e41237f910306093693856c2841de23db76a8d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b6baad623af848aa451d60625b7810d750bd4fbdce7120e4d171bab4d644c2b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6baad623af848aa451d60625b7810d750bd4fbdce7120e4d171bab4d644c2b9->enter($__internal_b6baad623af848aa451d60625b7810d750bd4fbdce7120e4d171bab4d644c2b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_9e6ee2969e6761c5c16110c7728095f03d41376f90f6d3331dcb3e3ca73e7c3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e6ee2969e6761c5c16110c7728095f03d41376f90f6d3331dcb3e3ca73e7c3b->enter($__internal_9e6ee2969e6761c5c16110c7728095f03d41376f90f6d3331dcb3e3ca73e7c3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6baad623af848aa451d60625b7810d750bd4fbdce7120e4d171bab4d644c2b9->leave($__internal_b6baad623af848aa451d60625b7810d750bd4fbdce7120e4d171bab4d644c2b9_prof);

        
        $__internal_9e6ee2969e6761c5c16110c7728095f03d41376f90f6d3331dcb3e3ca73e7c3b->leave($__internal_9e6ee2969e6761c5c16110c7728095f03d41376f90f6d3331dcb3e3ca73e7c3b_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_bd3d15956989cabb60f237e5e3e15805d75e56a292e2b40cfecc78a59510b397 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd3d15956989cabb60f237e5e3e15805d75e56a292e2b40cfecc78a59510b397->enter($__internal_bd3d15956989cabb60f237e5e3e15805d75e56a292e2b40cfecc78a59510b397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_bf0feda1b6bb3ae283cd8911f1993b9279d1fcd00df03a063f9dce919e203461 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf0feda1b6bb3ae283cd8911f1993b9279d1fcd00df03a063f9dce919e203461->enter($__internal_bf0feda1b6bb3ae283cd8911f1993b9279d1fcd00df03a063f9dce919e203461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 12, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 12, $this->getSourceContext()); })()), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 14, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 14, $this->getSourceContext()); })()), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_bf0feda1b6bb3ae283cd8911f1993b9279d1fcd00df03a063f9dce919e203461->leave($__internal_bf0feda1b6bb3ae283cd8911f1993b9279d1fcd00df03a063f9dce919e203461_prof);

        
        $__internal_bd3d15956989cabb60f237e5e3e15805d75e56a292e2b40cfecc78a59510b397->leave($__internal_bd3d15956989cabb60f237e5e3e15805d75e56a292e2b40cfecc78a59510b397_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fb30173b50e9641ab856eafdac2f8dc4c429c28caecd32fdea6a84ebc0934e12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb30173b50e9641ab856eafdac2f8dc4c429c28caecd32fdea6a84ebc0934e12->enter($__internal_fb30173b50e9641ab856eafdac2f8dc4c429c28caecd32fdea6a84ebc0934e12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_078402e6553407cd8d6b0d10c75defe9f7e77f34d3cf49640198660c232590e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_078402e6553407cd8d6b0d10c75defe9f7e77f34d3cf49640198660c232590e8->enter($__internal_078402e6553407cd8d6b0d10c75defe9f7e77f34d3cf49640198660c232590e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_078402e6553407cd8d6b0d10c75defe9f7e77f34d3cf49640198660c232590e8->leave($__internal_078402e6553407cd8d6b0d10c75defe9f7e77f34d3cf49640198660c232590e8_prof);

        
        $__internal_fb30173b50e9641ab856eafdac2f8dc4c429c28caecd32fdea6a84ebc0934e12->leave($__internal_fb30173b50e9641ab856eafdac2f8dc4c429c28caecd32fdea6a84ebc0934e12_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}
