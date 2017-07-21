<?php

/* @OCPlatform/Advert/oldindex.html.twig */
class __TwigTemplate_11273f95931c31d4900fa44d3b2a7dcdc7150b2b4c7115b0db7a1987992341b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "@OCPlatform/Advert/oldindex.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0e32f35f9fa1917a75d2f6eb072317e19c433e0025c18122e304c9bcaf3c51e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e32f35f9fa1917a75d2f6eb072317e19c433e0025c18122e304c9bcaf3c51e7->enter($__internal_0e32f35f9fa1917a75d2f6eb072317e19c433e0025c18122e304c9bcaf3c51e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCPlatform/Advert/oldindex.html.twig"));

        $__internal_96011c4b89a3c03980af85e916915cbc37dc3af196fe62e53568f3a455c9c547 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96011c4b89a3c03980af85e916915cbc37dc3af196fe62e53568f3a455c9c547->enter($__internal_96011c4b89a3c03980af85e916915cbc37dc3af196fe62e53568f3a455c9c547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCPlatform/Advert/oldindex.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e32f35f9fa1917a75d2f6eb072317e19c433e0025c18122e304c9bcaf3c51e7->leave($__internal_0e32f35f9fa1917a75d2f6eb072317e19c433e0025c18122e304c9bcaf3c51e7_prof);

        
        $__internal_96011c4b89a3c03980af85e916915cbc37dc3af196fe62e53568f3a455c9c547->leave($__internal_96011c4b89a3c03980af85e916915cbc37dc3af196fe62e53568f3a455c9c547_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_87c4ca7d3e2ccc542ceee750fe35435bfcd4f9aa220a0102867d711a3b3a070e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87c4ca7d3e2ccc542ceee750fe35435bfcd4f9aa220a0102867d711a3b3a070e->enter($__internal_87c4ca7d3e2ccc542ceee750fe35435bfcd4f9aa220a0102867d711a3b3a070e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_495882e9cb2f420e4a9ffb5a07f97772a391a968d7c3ab5011cfde5feeda7643 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_495882e9cb2f420e4a9ffb5a07f97772a391a968d7c3ab5011cfde5feeda7643->enter($__internal_495882e9cb2f420e4a9ffb5a07f97772a391a968d7c3ab5011cfde5feeda7643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - OldIndex";
        
        $__internal_495882e9cb2f420e4a9ffb5a07f97772a391a968d7c3ab5011cfde5feeda7643->leave($__internal_495882e9cb2f420e4a9ffb5a07f97772a391a968d7c3ab5011cfde5feeda7643_prof);

        
        $__internal_87c4ca7d3e2ccc542ceee750fe35435bfcd4f9aa220a0102867d711a3b3a070e->leave($__internal_87c4ca7d3e2ccc542ceee750fe35435bfcd4f9aa220a0102867d711a3b3a070e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_63de0b7bb3a2aadff26d207e6c10d8ac3e626edf51563dc7767477389e2289ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63de0b7bb3a2aadff26d207e6c10d8ac3e626edf51563dc7767477389e2289ee->enter($__internal_63de0b7bb3a2aadff26d207e6c10d8ac3e626edf51563dc7767477389e2289ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_db6031dfd782b14b47ec52b59e6010bb31b72fee60fe5e29493e63a581f98a09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db6031dfd782b14b47ec52b59e6010bb31b72fee60fe5e29493e63a581f98a09->enter($__internal_db6031dfd782b14b47ec52b59e6010bb31b72fee60fe5e29493e63a581f98a09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Hello ";
        echo twig_escape_filter($this->env, (isset($context["nom"]) || array_key_exists("nom", $context) ? $context["nom"] : (function () { throw new Twig_Error_Runtime('Variable "nom" does not exist.', 6, $this->getSourceContext()); })()), "html", null, true);
        echo " !</h1>

    <p>
        Le Hello World est un grand classique en programmation.
        Il signifie énormément, car cela veut dire que vous avez
        réussi à exécuter le programme pour accomplir une tâche simple :
        afficher ce hello world !
    </p>
    <br />
    ";
        // line 15
        if (array_key_exists("advert_id", $context)) {
            // line 16
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_view", array("id" => (isset($context["advert_id"]) || array_key_exists("advert_id", $context) ? $context["advert_id"] : (function () { throw new Twig_Error_Runtime('Variable "advert_id" does not exist.', 16, $this->getSourceContext()); })()))), "html", null, true);
            echo "\">
            Lien vers l'annonce d'id ";
            // line 17
            echo twig_escape_filter($this->env, (isset($context["advert_id"]) || array_key_exists("advert_id", $context) ? $context["advert_id"] : (function () { throw new Twig_Error_Runtime('Variable "advert_id" does not exist.', 17, $this->getSourceContext()); })()), "html", null, true);
            echo "
        </a>
    ";
        }
        
        $__internal_db6031dfd782b14b47ec52b59e6010bb31b72fee60fe5e29493e63a581f98a09->leave($__internal_db6031dfd782b14b47ec52b59e6010bb31b72fee60fe5e29493e63a581f98a09_prof);

        
        $__internal_63de0b7bb3a2aadff26d207e6c10d8ac3e626edf51563dc7767477389e2289ee->leave($__internal_63de0b7bb3a2aadff26d207e6c10d8ac3e626edf51563dc7767477389e2289ee_prof);

    }

    public function getTemplateName()
    {
        return "@OCPlatform/Advert/oldindex.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 17,  84 => 16,  82 => 15,  69 => 6,  60 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"OCPlatformBundle::layout.html.twig\" %}

{% block title %}{{ parent() }} - OldIndex{% endblock %}

{% block body %}
    <h1>Hello {{ nom }} !</h1>

    <p>
        Le Hello World est un grand classique en programmation.
        Il signifie énormément, car cela veut dire que vous avez
        réussi à exécuter le programme pour accomplir une tâche simple :
        afficher ce hello world !
    </p>
    <br />
    {% if advert_id is defined %}
        <a href=\"{{ path('oc_platform_view', { 'id': advert_id }) }}\">
            Lien vers l'annonce d'id {{ advert_id }}
        </a>
    {% endif %}
{% endblock %}", "@OCPlatform/Advert/oldindex.html.twig", "C:\\wamp64\\www\\Symfony\\src\\OC\\PlatformBundle\\Resources\\views\\Advert\\oldindex.html.twig");
    }
}
