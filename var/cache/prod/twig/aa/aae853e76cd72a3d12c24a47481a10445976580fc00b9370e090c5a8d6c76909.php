<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_c57f35fa1fb9f61077f1ebfa72aacfddc24c68f91886bdd1863585a73b8685ea extends Twig_Template
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
        $__internal_26e2993f218a2a13e25e0d3f5729ffe8de9129329c216896a5992dbd1e1d096e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26e2993f218a2a13e25e0d3f5729ffe8de9129329c216896a5992dbd1e1d096e->enter($__internal_26e2993f218a2a13e25e0d3f5729ffe8de9129329c216896a5992dbd1e1d096e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_26e2993f218a2a13e25e0d3f5729ffe8de9129329c216896a5992dbd1e1d096e->leave($__internal_26e2993f218a2a13e25e0d3f5729ffe8de9129329c216896a5992dbd1e1d096e_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_2df1c263376b64cfba6376c1c5335c35d81f294fc23cded98bc537d63bcac88b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2df1c263376b64cfba6376c1c5335c35d81f294fc23cded98bc537d63bcac88b->enter($__internal_2df1c263376b64cfba6376c1c5335c35d81f294fc23cded98bc537d63bcac88b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle");
        
        $__internal_2df1c263376b64cfba6376c1c5335c35d81f294fc23cded98bc537d63bcac88b->leave($__internal_2df1c263376b64cfba6376c1c5335c35d81f294fc23cded98bc537d63bcac88b_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_33c69169dbf1628f1fe6304695b0c6e021841504e3da07236d629333bd6e78cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33c69169dbf1628f1fe6304695b0c6e021841504e3da07236d629333bd6e78cf->enter($__internal_33c69169dbf1628f1fe6304695b0c6e021841504e3da07236d629333bd6e78cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_33c69169dbf1628f1fe6304695b0c6e021841504e3da07236d629333bd6e78cf->leave($__internal_33c69169dbf1628f1fe6304695b0c6e021841504e3da07236d629333bd6e78cf_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_c626652bf861c744e15de4dae92a2ac4a702b9e722c0c7090152b262fadd12f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c626652bf861c744e15de4dae92a2ac4a702b9e722c0c7090152b262fadd12f1->enter($__internal_c626652bf861c744e15de4dae92a2ac4a702b9e722c0c7090152b262fadd12f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_c626652bf861c744e15de4dae92a2ac4a702b9e722c0c7090152b262fadd12f1->leave($__internal_c626652bf861c744e15de4dae92a2ac4a702b9e722c0c7090152b262fadd12f1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
", "FOSUserBundle:Resetting:email.txt.twig", "C:\\wamp64\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
