<?php

/* OCPlatformBundle:Advert:add.html.twig */
class __TwigTemplate_ba5eed966fa6722314dbeff9b401beca27103bf1c645cbb6bc832105a23fdcdb extends Twig_Template
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
        $__internal_286aa1f794dd3413e02438c8bd0076312c0a43c872bb010f66cfd75ebd9a90c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_286aa1f794dd3413e02438c8bd0076312c0a43c872bb010f66cfd75ebd9a90c5->enter($__internal_286aa1f794dd3413e02438c8bd0076312c0a43c872bb010f66cfd75ebd9a90c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:add.html.twig"));

        $__internal_020fa6e6b2c4736b3889d4bdf7bf4e95462da6e8700a2c69b4c4ff25b4f36c13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_020fa6e6b2c4736b3889d4bdf7bf4e95462da6e8700a2c69b4c4ff25b4f36c13->enter($__internal_020fa6e6b2c4736b3889d4bdf7bf4e95462da6e8700a2c69b4c4ff25b4f36c13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_286aa1f794dd3413e02438c8bd0076312c0a43c872bb010f66cfd75ebd9a90c5->leave($__internal_286aa1f794dd3413e02438c8bd0076312c0a43c872bb010f66cfd75ebd9a90c5_prof);

        
        $__internal_020fa6e6b2c4736b3889d4bdf7bf4e95462da6e8700a2c69b4c4ff25b4f36c13->leave($__internal_020fa6e6b2c4736b3889d4bdf7bf4e95462da6e8700a2c69b4c4ff25b4f36c13_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a217fa431f4cbaf89687011d563da771a5164d7c55c69bc955db587aa3619a0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a217fa431f4cbaf89687011d563da771a5164d7c55c69bc955db587aa3619a0d->enter($__internal_a217fa431f4cbaf89687011d563da771a5164d7c55c69bc955db587aa3619a0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_36f57138c0c3e6500bbaef1c2c1cb4328e32506379cdeb6c58a763ecaf157666 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36f57138c0c3e6500bbaef1c2c1cb4328e32506379cdeb6c58a763ecaf157666->enter($__internal_36f57138c0c3e6500bbaef1c2c1cb4328e32506379cdeb6c58a763ecaf157666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_36f57138c0c3e6500bbaef1c2c1cb4328e32506379cdeb6c58a763ecaf157666->leave($__internal_36f57138c0c3e6500bbaef1c2c1cb4328e32506379cdeb6c58a763ecaf157666_prof);

        
        $__internal_a217fa431f4cbaf89687011d563da771a5164d7c55c69bc955db587aa3619a0d->leave($__internal_a217fa431f4cbaf89687011d563da771a5164d7c55c69bc955db587aa3619a0d_prof);

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
        return array (  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
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
