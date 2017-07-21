<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_a6919b4b5d8ecc4769863eae2fe0a154dadd2fd76f0fefe1a753e10893602c40 extends Twig_Template
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
        $__internal_abc8c3f63e68bde19fca66e3416b35358d676fab07783e96cf69e6013c2251c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abc8c3f63e68bde19fca66e3416b35358d676fab07783e96cf69e6013c2251c5->enter($__internal_abc8c3f63e68bde19fca66e3416b35358d676fab07783e96cf69e6013c2251c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_abc8c3f63e68bde19fca66e3416b35358d676fab07783e96cf69e6013c2251c5->leave($__internal_abc8c3f63e68bde19fca66e3416b35358d676fab07783e96cf69e6013c2251c5_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_71aa62f254c528669407287805a0317d469ca85f11e08d76b9152921543b3423 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71aa62f254c528669407287805a0317d469ca85f11e08d76b9152921543b3423->enter($__internal_71aa62f254c528669407287805a0317d469ca85f11e08d76b9152921543b3423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 4, $this->getSourceContext()); })())), "FOSUserBundle");
        
        $__internal_71aa62f254c528669407287805a0317d469ca85f11e08d76b9152921543b3423->leave($__internal_71aa62f254c528669407287805a0317d469ca85f11e08d76b9152921543b3423_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_9cc1f63b491215442305368198f358837705b6cd5b129b810d6961b21683c793 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cc1f63b491215442305368198f358837705b6cd5b129b810d6961b21683c793->enter($__internal_9cc1f63b491215442305368198f358837705b6cd5b129b810d6961b21683c793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_9cc1f63b491215442305368198f358837705b6cd5b129b810d6961b21683c793->leave($__internal_9cc1f63b491215442305368198f358837705b6cd5b129b810d6961b21683c793_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_f5d589db23abde45056386824c7be9368fa293ca64359237394fec83cf6b2f01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5d589db23abde45056386824c7be9368fa293ca64359237394fec83cf6b2f01->enter($__internal_f5d589db23abde45056386824c7be9368fa293ca64359237394fec83cf6b2f01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_f5d589db23abde45056386824c7be9368fa293ca64359237394fec83cf6b2f01->leave($__internal_f5d589db23abde45056386824c7be9368fa293ca64359237394fec83cf6b2f01_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "C:\\wamp64\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
