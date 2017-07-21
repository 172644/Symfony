<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_388c9ba55933942f1d0051deef0619f1d0d5f57bc7c430784440d6766b9b448f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8db1b37b129338cf4feb8ffc42d9d594754f07e5e80221c7f67146cbf778fcd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8db1b37b129338cf4feb8ffc42d9d594754f07e5e80221c7f67146cbf778fcd1->enter($__internal_8db1b37b129338cf4feb8ffc42d9d594754f07e5e80221c7f67146cbf778fcd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_5fa35ee70b277c69aeb6f1233af04f07789997f53ac2c610d8d842cc670ef4b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fa35ee70b277c69aeb6f1233af04f07789997f53ac2c610d8d842cc670ef4b8->enter($__internal_5fa35ee70b277c69aeb6f1233af04f07789997f53ac2c610d8d842cc670ef4b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8db1b37b129338cf4feb8ffc42d9d594754f07e5e80221c7f67146cbf778fcd1->leave($__internal_8db1b37b129338cf4feb8ffc42d9d594754f07e5e80221c7f67146cbf778fcd1_prof);

        
        $__internal_5fa35ee70b277c69aeb6f1233af04f07789997f53ac2c610d8d842cc670ef4b8->leave($__internal_5fa35ee70b277c69aeb6f1233af04f07789997f53ac2c610d8d842cc670ef4b8_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5f62aa464cf179130cab9b253276079401c0c157e99f7c003c99d6fa8e15e6a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f62aa464cf179130cab9b253276079401c0c157e99f7c003c99d6fa8e15e6a9->enter($__internal_5f62aa464cf179130cab9b253276079401c0c157e99f7c003c99d6fa8e15e6a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ad1c624b0113f6acf48a7433392b3c9443bdb006150e8de6b502ebc5141b4d83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad1c624b0113f6acf48a7433392b3c9443bdb006150e8de6b502ebc5141b4d83->enter($__internal_ad1c624b0113f6acf48a7433392b3c9443bdb006150e8de6b502ebc5141b4d83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) || array_key_exists("targetUrl", $context) ? $context["targetUrl"] : (function () { throw new Twig_Error_Runtime('Variable "targetUrl" does not exist.', 7, $this->getSourceContext()); })())) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) || array_key_exists("targetUrl", $context) ? $context["targetUrl"] : (function () { throw new Twig_Error_Runtime('Variable "targetUrl" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_ad1c624b0113f6acf48a7433392b3c9443bdb006150e8de6b502ebc5141b4d83->leave($__internal_ad1c624b0113f6acf48a7433392b3c9443bdb006150e8de6b502ebc5141b4d83_prof);

        
        $__internal_5f62aa464cf179130cab9b253276079401c0c157e99f7c003c99d6fa8e15e6a9->leave($__internal_5f62aa464cf179130cab9b253276079401c0c157e99f7c003c99d6fa8e15e6a9_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/confirmed.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\confirmed.html.twig");
    }
}
