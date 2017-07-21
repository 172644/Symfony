<?php

/* OCPlatformBundle:Advert:add.html.twig */
class __TwigTemplate_7b72d8414bf6c0b0c4e28105e76f95be023c974603e5574572474b971146fdc6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:add.html.twig", 1);
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
        $__internal_32f273b5873ad43d5fc1356072f2a91e02fedf2e28c03ce2b6d96683e79b0bfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32f273b5873ad43d5fc1356072f2a91e02fedf2e28c03ce2b6d96683e79b0bfd->enter($__internal_32f273b5873ad43d5fc1356072f2a91e02fedf2e28c03ce2b6d96683e79b0bfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32f273b5873ad43d5fc1356072f2a91e02fedf2e28c03ce2b6d96683e79b0bfd->leave($__internal_32f273b5873ad43d5fc1356072f2a91e02fedf2e28c03ce2b6d96683e79b0bfd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3833a3f4742366e3dc074ed452d5d9ae42ab5607cf4986a3fdc353da51b86836 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3833a3f4742366e3dc074ed452d5d9ae42ab5607cf4986a3fdc353da51b86836->enter($__internal_3833a3f4742366e3dc074ed452d5d9ae42ab5607cf4986a3fdc353da51b86836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3833a3f4742366e3dc074ed452d5d9ae42ab5607cf4986a3fdc353da51b86836->leave($__internal_3833a3f4742366e3dc074ed452d5d9ae42ab5607cf4986a3fdc353da51b86836_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:add.html.twig";
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

{% endblock %}", "OCPlatformBundle:Advert:add.html.twig", "C:\\wamp64\\www\\Symfony\\src\\OC\\PlatformBundle/Resources/views/Advert/add.html.twig");
    }
}
