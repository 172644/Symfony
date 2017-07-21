<?php

/* @OCPlatform/Advert/add.html.twig */
class __TwigTemplate_971e95a38c87da874734a7b4260fd6ff1799a95b0b565e6724e8ef99bdc6708a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "@OCPlatform/Advert/add.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_769d30940369eeb36a07fdb9970a4339e981a5d7b014724ae7bd8ba95a9c30ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_769d30940369eeb36a07fdb9970a4339e981a5d7b014724ae7bd8ba95a9c30ad->enter($__internal_769d30940369eeb36a07fdb9970a4339e981a5d7b014724ae7bd8ba95a9c30ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCPlatform/Advert/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_769d30940369eeb36a07fdb9970a4339e981a5d7b014724ae7bd8ba95a9c30ad->leave($__internal_769d30940369eeb36a07fdb9970a4339e981a5d7b014724ae7bd8ba95a9c30ad_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f21466ee435ceb64b9239e6ef05547910db5c35661ef61a6035485fd7da5197e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f21466ee435ceb64b9239e6ef05547910db5c35661ef61a6035485fd7da5197e->enter($__internal_f21466ee435ceb64b9239e6ef05547910db5c35661ef61a6035485fd7da5197e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <h2>Ajouter une annonce</h2>

    ";
        // line 7
        echo twig_include($this->env, $context, "OCPlatformBundle:Advert:form.html.twig");
        echo "

    <p>
        Attention : cette annonce sera ajoutée directement
        sur la page d'accueil après validation du formulaire.
    </p>

";
        
        $__internal_f21466ee435ceb64b9239e6ef05547910db5c35661ef61a6035485fd7da5197e->leave($__internal_f21466ee435ceb64b9239e6ef05547910db5c35661ef61a6035485fd7da5197e_prof);

    }

    public function getTemplateName()
    {
        return "@OCPlatform/Advert/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"OCPlatformBundle::layout.html.twig\" %}

{% block body %}

    <h2>Ajouter une annonce</h2>

    {{ include(\"OCPlatformBundle:Advert:form.html.twig\") }}

    <p>
        Attention : cette annonce sera ajoutée directement
        sur la page d'accueil après validation du formulaire.
    </p>

{% endblock %}", "@OCPlatform/Advert/add.html.twig", "C:\\wamp64\\www\\Symfony\\src\\OC\\PlatformBundle\\Resources\\views\\Advert\\add.html.twig");
    }
}
