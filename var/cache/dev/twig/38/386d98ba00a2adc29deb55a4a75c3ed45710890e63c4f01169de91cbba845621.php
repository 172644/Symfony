<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_85b66b8af6a558649feb10bc4be433a6cbe341e5b3410dbcd518ad9d2281cfdb extends Twig_Template
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
        $__internal_cffa5cac81513d81bb3c3d11dc010bc314e3598695817c24ca3fa556b454ba10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cffa5cac81513d81bb3c3d11dc010bc314e3598695817c24ca3fa556b454ba10->enter($__internal_cffa5cac81513d81bb3c3d11dc010bc314e3598695817c24ca3fa556b454ba10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        $__internal_7ece4e68d16fe8b69f75c742ebd50bfb2706d00794dd1c7c7bbf1438142b1d43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ece4e68d16fe8b69f75c742ebd50bfb2706d00794dd1c7c7bbf1438142b1d43->enter($__internal_7ece4e68d16fe8b69f75c742ebd50bfb2706d00794dd1c7c7bbf1438142b1d43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_cffa5cac81513d81bb3c3d11dc010bc314e3598695817c24ca3fa556b454ba10->leave($__internal_cffa5cac81513d81bb3c3d11dc010bc314e3598695817c24ca3fa556b454ba10_prof);

        
        $__internal_7ece4e68d16fe8b69f75c742ebd50bfb2706d00794dd1c7c7bbf1438142b1d43->leave($__internal_7ece4e68d16fe8b69f75c742ebd50bfb2706d00794dd1c7c7bbf1438142b1d43_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_b95775e2ffe9c263a62ebaf0b00dbed51b638eeeea2e034b894f2fc9ed30589c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b95775e2ffe9c263a62ebaf0b00dbed51b638eeeea2e034b894f2fc9ed30589c->enter($__internal_b95775e2ffe9c263a62ebaf0b00dbed51b638eeeea2e034b894f2fc9ed30589c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_a62a5b73626d13c03bb5eb8bf7f3938d163da149f33ba5b5359fd16684422884 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a62a5b73626d13c03bb5eb8bf7f3938d163da149f33ba5b5359fd16684422884->enter($__internal_a62a5b73626d13c03bb5eb8bf7f3938d163da149f33ba5b5359fd16684422884_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 4, $this->getSourceContext()); })())), "FOSUserBundle");
        
        $__internal_a62a5b73626d13c03bb5eb8bf7f3938d163da149f33ba5b5359fd16684422884->leave($__internal_a62a5b73626d13c03bb5eb8bf7f3938d163da149f33ba5b5359fd16684422884_prof);

        
        $__internal_b95775e2ffe9c263a62ebaf0b00dbed51b638eeeea2e034b894f2fc9ed30589c->leave($__internal_b95775e2ffe9c263a62ebaf0b00dbed51b638eeeea2e034b894f2fc9ed30589c_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_1d7c19916cc34ecca518b573868eaa0a14ee1402925eeb0013ca77021fbf014c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d7c19916cc34ecca518b573868eaa0a14ee1402925eeb0013ca77021fbf014c->enter($__internal_1d7c19916cc34ecca518b573868eaa0a14ee1402925eeb0013ca77021fbf014c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_2af91d40cf156e4260e0425f4797670082373f48f30b82763a7739f266f3a072 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2af91d40cf156e4260e0425f4797670082373f48f30b82763a7739f266f3a072->enter($__internal_2af91d40cf156e4260e0425f4797670082373f48f30b82763a7739f266f3a072_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_2af91d40cf156e4260e0425f4797670082373f48f30b82763a7739f266f3a072->leave($__internal_2af91d40cf156e4260e0425f4797670082373f48f30b82763a7739f266f3a072_prof);

        
        $__internal_1d7c19916cc34ecca518b573868eaa0a14ee1402925eeb0013ca77021fbf014c->leave($__internal_1d7c19916cc34ecca518b573868eaa0a14ee1402925eeb0013ca77021fbf014c_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_7ad7e64583164c98efb67c92bbfdf82fac84ba1a37fdec1e82029e44fc6e02df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ad7e64583164c98efb67c92bbfdf82fac84ba1a37fdec1e82029e44fc6e02df->enter($__internal_7ad7e64583164c98efb67c92bbfdf82fac84ba1a37fdec1e82029e44fc6e02df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_16ff450ded92afa1fbbfbd00c2e2e6625694cd1e9826f3dc51bf575157054217 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16ff450ded92afa1fbbfbd00c2e2e6625694cd1e9826f3dc51bf575157054217->enter($__internal_16ff450ded92afa1fbbfbd00c2e2e6625694cd1e9826f3dc51bf575157054217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_16ff450ded92afa1fbbfbd00c2e2e6625694cd1e9826f3dc51bf575157054217->leave($__internal_16ff450ded92afa1fbbfbd00c2e2e6625694cd1e9826f3dc51bf575157054217_prof);

        
        $__internal_7ad7e64583164c98efb67c92bbfdf82fac84ba1a37fdec1e82029e44fc6e02df->leave($__internal_7ad7e64583164c98efb67c92bbfdf82fac84ba1a37fdec1e82029e44fc6e02df_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
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
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "@FOSUser/Registration/email.txt.twig", "C:\\wamp64\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\email.txt.twig");
    }
}
