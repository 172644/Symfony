<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_0154c8059f6b84172b6aaea81323f3b85c0f9a2216b324aeb1a4e2b676b227f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
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
        $__internal_d76f336c2df42abdc8520bec5316c19d26a961834d968818b3c5f69fe2ad2718 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d76f336c2df42abdc8520bec5316c19d26a961834d968818b3c5f69fe2ad2718->enter($__internal_d76f336c2df42abdc8520bec5316c19d26a961834d968818b3c5f69fe2ad2718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_70b63956b7335833756f98c5109be49cd0fe28087a9531142d4ba0d5eccad60e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70b63956b7335833756f98c5109be49cd0fe28087a9531142d4ba0d5eccad60e->enter($__internal_70b63956b7335833756f98c5109be49cd0fe28087a9531142d4ba0d5eccad60e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d76f336c2df42abdc8520bec5316c19d26a961834d968818b3c5f69fe2ad2718->leave($__internal_d76f336c2df42abdc8520bec5316c19d26a961834d968818b3c5f69fe2ad2718_prof);

        
        $__internal_70b63956b7335833756f98c5109be49cd0fe28087a9531142d4ba0d5eccad60e->leave($__internal_70b63956b7335833756f98c5109be49cd0fe28087a9531142d4ba0d5eccad60e_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_40913c30ffd9f9e4a17e3afe8bc00a491470d63387fc9fdc45c28e46e9634f8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40913c30ffd9f9e4a17e3afe8bc00a491470d63387fc9fdc45c28e46e9634f8a->enter($__internal_40913c30ffd9f9e4a17e3afe8bc00a491470d63387fc9fdc45c28e46e9634f8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_3fb1ef32b701e00ff5344f7d880421a5d90d105a20bb739ecc39faf2848c131e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fb1ef32b701e00ff5344f7d880421a5d90d105a20bb739ecc39faf2848c131e->enter($__internal_3fb1ef32b701e00ff5344f7d880421a5d90d105a20bb739ecc39faf2848c131e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_3fb1ef32b701e00ff5344f7d880421a5d90d105a20bb739ecc39faf2848c131e->leave($__internal_3fb1ef32b701e00ff5344f7d880421a5d90d105a20bb739ecc39faf2848c131e_prof);

        
        $__internal_40913c30ffd9f9e4a17e3afe8bc00a491470d63387fc9fdc45c28e46e9634f8a->leave($__internal_40913c30ffd9f9e4a17e3afe8bc00a491470d63387fc9fdc45c28e46e9634f8a_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_87a3e15f96d44f7c37b40ba415ee73f2c955e0b99721d4258417f767951884f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87a3e15f96d44f7c37b40ba415ee73f2c955e0b99721d4258417f767951884f5->enter($__internal_87a3e15f96d44f7c37b40ba415ee73f2c955e0b99721d4258417f767951884f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_90402c8fa23bc792501710c5e917c5da22e8456ff0cc8780ba1b5150c7e66008 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90402c8fa23bc792501710c5e917c5da22e8456ff0cc8780ba1b5150c7e66008->enter($__internal_90402c8fa23bc792501710c5e917c5da22e8456ff0cc8780ba1b5150c7e66008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_90402c8fa23bc792501710c5e917c5da22e8456ff0cc8780ba1b5150c7e66008->leave($__internal_90402c8fa23bc792501710c5e917c5da22e8456ff0cc8780ba1b5150c7e66008_prof);

        
        $__internal_87a3e15f96d44f7c37b40ba415ee73f2c955e0b99721d4258417f767951884f5->leave($__internal_87a3e15f96d44f7c37b40ba415ee73f2c955e0b99721d4258417f767951884f5_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
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
", "WebProfilerBundle:Profiler:info.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
