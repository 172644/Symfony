<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_d24a0364f5831714ecaa6ca704dcdedb75c3e782343bd5b48dde609401273e5a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_06e9566203ac9e650cbccf9d67d1ca1e4412d3f7d2c5bfd8f736b4a358cd140b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06e9566203ac9e650cbccf9d67d1ca1e4412d3f7d2c5bfd8f736b4a358cd140b->enter($__internal_06e9566203ac9e650cbccf9d67d1ca1e4412d3f7d2c5bfd8f736b4a358cd140b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06e9566203ac9e650cbccf9d67d1ca1e4412d3f7d2c5bfd8f736b4a358cd140b->leave($__internal_06e9566203ac9e650cbccf9d67d1ca1e4412d3f7d2c5bfd8f736b4a358cd140b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dd6ecb07b30b7e94bb36df9a9163d2e42cce997787572ebe3fb006e8f2a5f97f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd6ecb07b30b7e94bb36df9a9163d2e42cce997787572ebe3fb006e8f2a5f97f->enter($__internal_dd6ecb07b30b7e94bb36df9a9163d2e42cce997787572ebe3fb006e8f2a5f97f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_dd6ecb07b30b7e94bb36df9a9163d2e42cce997787572ebe3fb006e8f2a5f97f->leave($__internal_dd6ecb07b30b7e94bb36df9a9163d2e42cce997787572ebe3fb006e8f2a5f97f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Security\\login.html.twig");
    }
}
