<?php

/* @OCPlatform/layout.html.twig */
class __TwigTemplate_33842d89cae7e2593f19f45fcb3e3ede3da8e665508982b0e0e824a75bcff52e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OCCoreBundle::layout.html.twig", "@OCPlatform/layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_210acb046636a7aeea752e94a54fb81282b654c29d0d5d26bd8522123572c466 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_210acb046636a7aeea752e94a54fb81282b654c29d0d5d26bd8522123572c466->enter($__internal_210acb046636a7aeea752e94a54fb81282b654c29d0d5d26bd8522123572c466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCPlatform/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_210acb046636a7aeea752e94a54fb81282b654c29d0d5d26bd8522123572c466->leave($__internal_210acb046636a7aeea752e94a54fb81282b654c29d0d5d26bd8522123572c466_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e99ceb1e7b27973b7b2ea80cf6b4f67b65197d8ea32633751d95240038472511 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e99ceb1e7b27973b7b2ea80cf6b4f67b65197d8ea32633751d95240038472511->enter($__internal_e99ceb1e7b27973b7b2ea80cf6b4f67b65197d8ea32633751d95240038472511_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_e99ceb1e7b27973b7b2ea80cf6b4f67b65197d8ea32633751d95240038472511->leave($__internal_e99ceb1e7b27973b7b2ea80cf6b4f67b65197d8ea32633751d95240038472511_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_567328842c78d89a2d057bc697f8d75a7860c6dcaa66d24989efc2f33f1977c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_567328842c78d89a2d057bc697f8d75a7860c6dcaa66d24989efc2f33f1977c2->enter($__internal_567328842c78d89a2d057bc697f8d75a7860c6dcaa66d24989efc2f33f1977c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
    ";
        // line 10
        echo "    <h1>Annonces</h1>

    <hr>

    ";
        // line 15
        echo "    ";
        $this->displayBlock('ocplatform_body', $context, $blocks);
        // line 17
        echo "
";
        
        $__internal_567328842c78d89a2d057bc697f8d75a7860c6dcaa66d24989efc2f33f1977c2->leave($__internal_567328842c78d89a2d057bc697f8d75a7860c6dcaa66d24989efc2f33f1977c2_prof);

    }

    // line 15
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_65ecb356fd30c9ae71c458a3b06bef243b325aca071fabcaca3ae1a4b5a813ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65ecb356fd30c9ae71c458a3b06bef243b325aca071fabcaca3ae1a4b5a813ab->enter($__internal_65ecb356fd30c9ae71c458a3b06bef243b325aca071fabcaca3ae1a4b5a813ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 16
        echo "    ";
        
        $__internal_65ecb356fd30c9ae71c458a3b06bef243b325aca071fabcaca3ae1a4b5a813ab->leave($__internal_65ecb356fd30c9ae71c458a3b06bef243b325aca071fabcaca3ae1a4b5a813ab_prof);

    }

    public function getTemplateName()
    {
        return "@OCPlatform/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 16,  78 => 15,  70 => 17,  67 => 15,  61 => 10,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"OCCoreBundle::layout.html.twig\" %}

{% block title %}
    Annonces - {{ parent() }}
{% endblock %}

{% block body %}

    {# On définit un sous-titre commun à toutes les pages du bundle, par exemple #}
    <h1>Annonces</h1>

    <hr>

    {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}
    {% block ocplatform_body %}
    {% endblock %}

{% endblock %}", "@OCPlatform/layout.html.twig", "C:\\wamp64\\www\\Symfony\\src\\OC\\PlatformBundle\\Resources\\views\\layout.html.twig");
    }
}
