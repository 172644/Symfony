<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_1998a4d0c2b0adcbafa238cb98cea300df708c21f476b4c71b5ccd7b44da2de6 extends Twig_Template
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
        $__internal_f3a9527cb6cc88dd057a162e118de9eb6aa7d7c71b71d6d083062d1fb73e5309 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3a9527cb6cc88dd057a162e118de9eb6aa7d7c71b71d6d083062d1fb73e5309->enter($__internal_f3a9527cb6cc88dd057a162e118de9eb6aa7d7c71b71d6d083062d1fb73e5309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        $__internal_96de1a6740de8e0077dc791131d3ddd87fad44843be42e31b0e9a17c81c7caab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96de1a6740de8e0077dc791131d3ddd87fad44843be42e31b0e9a17c81c7caab->enter($__internal_96de1a6740de8e0077dc791131d3ddd87fad44843be42e31b0e9a17c81c7caab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_f3a9527cb6cc88dd057a162e118de9eb6aa7d7c71b71d6d083062d1fb73e5309->leave($__internal_f3a9527cb6cc88dd057a162e118de9eb6aa7d7c71b71d6d083062d1fb73e5309_prof);

        
        $__internal_96de1a6740de8e0077dc791131d3ddd87fad44843be42e31b0e9a17c81c7caab->leave($__internal_96de1a6740de8e0077dc791131d3ddd87fad44843be42e31b0e9a17c81c7caab_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_56a53f233d8932b53867b34b395d676d3738f3b5cad8e909224e30e942654727 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56a53f233d8932b53867b34b395d676d3738f3b5cad8e909224e30e942654727->enter($__internal_56a53f233d8932b53867b34b395d676d3738f3b5cad8e909224e30e942654727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_2379a0287af336be455df35a58f9058bcf0eb099cfaaea1b99300a6d316cb274 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2379a0287af336be455df35a58f9058bcf0eb099cfaaea1b99300a6d316cb274->enter($__internal_2379a0287af336be455df35a58f9058bcf0eb099cfaaea1b99300a6d316cb274_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle");
        
        $__internal_2379a0287af336be455df35a58f9058bcf0eb099cfaaea1b99300a6d316cb274->leave($__internal_2379a0287af336be455df35a58f9058bcf0eb099cfaaea1b99300a6d316cb274_prof);

        
        $__internal_56a53f233d8932b53867b34b395d676d3738f3b5cad8e909224e30e942654727->leave($__internal_56a53f233d8932b53867b34b395d676d3738f3b5cad8e909224e30e942654727_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_bd4fe64ae64595ba443f79bf99013fe18f95b4dca86ecbee21d06ed8e5d95aff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd4fe64ae64595ba443f79bf99013fe18f95b4dca86ecbee21d06ed8e5d95aff->enter($__internal_bd4fe64ae64595ba443f79bf99013fe18f95b4dca86ecbee21d06ed8e5d95aff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_db8de3eb6a5cd6de98da5d244e1d92be66f4294751b6a86a3c22ba8cedc66cf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db8de3eb6a5cd6de98da5d244e1d92be66f4294751b6a86a3c22ba8cedc66cf6->enter($__internal_db8de3eb6a5cd6de98da5d244e1d92be66f4294751b6a86a3c22ba8cedc66cf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_db8de3eb6a5cd6de98da5d244e1d92be66f4294751b6a86a3c22ba8cedc66cf6->leave($__internal_db8de3eb6a5cd6de98da5d244e1d92be66f4294751b6a86a3c22ba8cedc66cf6_prof);

        
        $__internal_bd4fe64ae64595ba443f79bf99013fe18f95b4dca86ecbee21d06ed8e5d95aff->leave($__internal_bd4fe64ae64595ba443f79bf99013fe18f95b4dca86ecbee21d06ed8e5d95aff_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_776c3d00650dd47cab8b424404c94e505ee35b93d244093b2d34da32f1280a75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_776c3d00650dd47cab8b424404c94e505ee35b93d244093b2d34da32f1280a75->enter($__internal_776c3d00650dd47cab8b424404c94e505ee35b93d244093b2d34da32f1280a75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_0e22d815793b63d5e278a691a63895ba3972103b33a33570ba3f06f907da7d33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e22d815793b63d5e278a691a63895ba3972103b33a33570ba3f06f907da7d33->enter($__internal_0e22d815793b63d5e278a691a63895ba3972103b33a33570ba3f06f907da7d33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_0e22d815793b63d5e278a691a63895ba3972103b33a33570ba3f06f907da7d33->leave($__internal_0e22d815793b63d5e278a691a63895ba3972103b33a33570ba3f06f907da7d33_prof);

        
        $__internal_776c3d00650dd47cab8b424404c94e505ee35b93d244093b2d34da32f1280a75->leave($__internal_776c3d00650dd47cab8b424404c94e505ee35b93d244093b2d34da32f1280a75_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
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
