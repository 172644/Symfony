<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_f22d7e675bc7c3b9c4ea3b089d6a21b198ecf21c833b66abc8af13df5875b744 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_67e3a57f240ce7a28144e1100ffe108ef6e54686dff9ae8ce0315ddbce59b101 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67e3a57f240ce7a28144e1100ffe108ef6e54686dff9ae8ce0315ddbce59b101->enter($__internal_67e3a57f240ce7a28144e1100ffe108ef6e54686dff9ae8ce0315ddbce59b101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_7f9b79d7cb8b701a62ffc56d447525c0b9fc25f713d3195d70efe3fbc4535e01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f9b79d7cb8b701a62ffc56d447525c0b9fc25f713d3195d70efe3fbc4535e01->enter($__internal_7f9b79d7cb8b701a62ffc56d447525c0b9fc25f713d3195d70efe3fbc4535e01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_67e3a57f240ce7a28144e1100ffe108ef6e54686dff9ae8ce0315ddbce59b101->leave($__internal_67e3a57f240ce7a28144e1100ffe108ef6e54686dff9ae8ce0315ddbce59b101_prof);

        
        $__internal_7f9b79d7cb8b701a62ffc56d447525c0b9fc25f713d3195d70efe3fbc4535e01->leave($__internal_7f9b79d7cb8b701a62ffc56d447525c0b9fc25f713d3195d70efe3fbc4535e01_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6543016f064623f7d69d42e06676846e6afb8058fcc4e0240652a667b87b6576 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6543016f064623f7d69d42e06676846e6afb8058fcc4e0240652a667b87b6576->enter($__internal_6543016f064623f7d69d42e06676846e6afb8058fcc4e0240652a667b87b6576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7a664165433240a1a6cbc46f706de09423f37b548307ba824804fcd8a353d26e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a664165433240a1a6cbc46f706de09423f37b548307ba824804fcd8a353d26e->enter($__internal_7a664165433240a1a6cbc46f706de09423f37b548307ba824804fcd8a353d26e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_7a664165433240a1a6cbc46f706de09423f37b548307ba824804fcd8a353d26e->leave($__internal_7a664165433240a1a6cbc46f706de09423f37b548307ba824804fcd8a353d26e_prof);

        
        $__internal_6543016f064623f7d69d42e06676846e6afb8058fcc4e0240652a667b87b6576->leave($__internal_6543016f064623f7d69d42e06676846e6afb8058fcc4e0240652a667b87b6576_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
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
", "FOSUserBundle:Registration:confirmed.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}
