<?php

/* OCPlatformBundle:Advert:add.html.twig */
class __TwigTemplate_b8f86476007fd9ba1c7c4752475c314ddb372e06c53ed0c8ae2d3ab2309d545e extends Twig_Template
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
        $__internal_985779b65cf04d922a93b4f21d672371e989f2c9bd25cf1304a5153947942bd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_985779b65cf04d922a93b4f21d672371e989f2c9bd25cf1304a5153947942bd8->enter($__internal_985779b65cf04d922a93b4f21d672371e989f2c9bd25cf1304a5153947942bd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:add.html.twig"));

        $__internal_944dc62e74858ce0fc6aa63acdce16860b69fdd92e96ef24bf7f1d4f24dc3711 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_944dc62e74858ce0fc6aa63acdce16860b69fdd92e96ef24bf7f1d4f24dc3711->enter($__internal_944dc62e74858ce0fc6aa63acdce16860b69fdd92e96ef24bf7f1d4f24dc3711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_985779b65cf04d922a93b4f21d672371e989f2c9bd25cf1304a5153947942bd8->leave($__internal_985779b65cf04d922a93b4f21d672371e989f2c9bd25cf1304a5153947942bd8_prof);

        
        $__internal_944dc62e74858ce0fc6aa63acdce16860b69fdd92e96ef24bf7f1d4f24dc3711->leave($__internal_944dc62e74858ce0fc6aa63acdce16860b69fdd92e96ef24bf7f1d4f24dc3711_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_556b35ab1cf0a506777d51c0ba9398d941788f3064651b649dc878d4483861ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_556b35ab1cf0a506777d51c0ba9398d941788f3064651b649dc878d4483861ec->enter($__internal_556b35ab1cf0a506777d51c0ba9398d941788f3064651b649dc878d4483861ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_431149890fcf11a07e9f47be2f293c8af6393d75a851a8a3dd1ead9412ae9488 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_431149890fcf11a07e9f47be2f293c8af6393d75a851a8a3dd1ead9412ae9488->enter($__internal_431149890fcf11a07e9f47be2f293c8af6393d75a851a8a3dd1ead9412ae9488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"well\">
        <span>Ajouter une annonce</span>
    </div>

    ";
        // line 9
        echo twig_include($this->env, $context, "OCPlatformBundle:Advert:form.html.twig");
        echo "

    <p>
        Attention : cette annonce sera ajoutée directement
        sur la page d'accueil après validation du formulaire.
    </p>

";
        
        $__internal_431149890fcf11a07e9f47be2f293c8af6393d75a851a8a3dd1ead9412ae9488->leave($__internal_431149890fcf11a07e9f47be2f293c8af6393d75a851a8a3dd1ead9412ae9488_prof);

        
        $__internal_556b35ab1cf0a506777d51c0ba9398d941788f3064651b649dc878d4483861ec->leave($__internal_556b35ab1cf0a506777d51c0ba9398d941788f3064651b649dc878d4483861ec_prof);

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
        return array (  56 => 9,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"OCPlatformBundle::layout.html.twig\" %}

{% block body %}

    <div class=\"well\">
        <span>Ajouter une annonce</span>
    </div>

    {{ include(\"OCPlatformBundle:Advert:form.html.twig\") }}

    <p>
        Attention : cette annonce sera ajoutée directement
        sur la page d'accueil après validation du formulaire.
    </p>

{% endblock %}", "OCPlatformBundle:Advert:add.html.twig", "C:\\wamp64\\www\\Symfony\\src\\OC\\PlatformBundle\\Resources\\views\\Advert\\add.html.twig");
    }
}
