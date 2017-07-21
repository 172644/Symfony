<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_ea9e0f33f2fa5da69107d0ce5c6f7d7c4ce9d0964f42eca168876b61c0fcf532 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_394a8146377f86f398434adccc500467f63fc8bc587c1afad27f7c5a6943bb38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_394a8146377f86f398434adccc500467f63fc8bc587c1afad27f7c5a6943bb38->enter($__internal_394a8146377f86f398434adccc500467f63fc8bc587c1afad27f7c5a6943bb38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_394a8146377f86f398434adccc500467f63fc8bc587c1afad27f7c5a6943bb38->leave($__internal_394a8146377f86f398434adccc500467f63fc8bc587c1afad27f7c5a6943bb38_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_6e21b7790fe9cc8fd984be2c0c48c1b4f37507cec18a4c106ad3db945999b8c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e21b7790fe9cc8fd984be2c0c48c1b4f37507cec18a4c106ad3db945999b8c8->enter($__internal_6e21b7790fe9cc8fd984be2c0c48c1b4f37507cec18a4c106ad3db945999b8c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle");
        
        $__internal_6e21b7790fe9cc8fd984be2c0c48c1b4f37507cec18a4c106ad3db945999b8c8->leave($__internal_6e21b7790fe9cc8fd984be2c0c48c1b4f37507cec18a4c106ad3db945999b8c8_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_d79532fede559c382c3ed2ecea1b0fbda85058138c09e6ab71c924edb4be2060 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d79532fede559c382c3ed2ecea1b0fbda85058138c09e6ab71c924edb4be2060->enter($__internal_d79532fede559c382c3ed2ecea1b0fbda85058138c09e6ab71c924edb4be2060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_d79532fede559c382c3ed2ecea1b0fbda85058138c09e6ab71c924edb4be2060->leave($__internal_d79532fede559c382c3ed2ecea1b0fbda85058138c09e6ab71c924edb4be2060_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_2e4140e7c3e083ca12931de8d3bb8c322c16dcbdb04c25f1a73480b180cfc3c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e4140e7c3e083ca12931de8d3bb8c322c16dcbdb04c25f1a73480b180cfc3c0->enter($__internal_2e4140e7c3e083ca12931de8d3bb8c322c16dcbdb04c25f1a73480b180cfc3c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_2e4140e7c3e083ca12931de8d3bb8c322c16dcbdb04c25f1a73480b180cfc3c0->leave($__internal_2e4140e7c3e083ca12931de8d3bb8c322c16dcbdb04c25f1a73480b180cfc3c0_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  67 => 13,  58 => 10,  52 => 8,  45 => 4,  39 => 2,  32 => 13,  30 => 8,  27 => 7,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "@FOSUser/Resetting/email.txt.twig", "C:\\wamp64\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\email.txt.twig");
    }
}
