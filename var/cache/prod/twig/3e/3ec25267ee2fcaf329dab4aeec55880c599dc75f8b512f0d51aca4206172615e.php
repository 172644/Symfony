<?php

/* OCPlatformBundle:Advert:oldindex.html.twig */
class __TwigTemplate_17d8205e418ca54b7bf19348e9c8feb401ab4867401f74b91df08f97ed3dd0ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:oldindex.html.twig", 1);
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
        $__internal_b9b99ab17bef543ce048f1e7e367c59dc6da2149e32abdc15bb39899384ba23d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9b99ab17bef543ce048f1e7e367c59dc6da2149e32abdc15bb39899384ba23d->enter($__internal_b9b99ab17bef543ce048f1e7e367c59dc6da2149e32abdc15bb39899384ba23d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:oldindex.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9b99ab17bef543ce048f1e7e367c59dc6da2149e32abdc15bb39899384ba23d->leave($__internal_b9b99ab17bef543ce048f1e7e367c59dc6da2149e32abdc15bb39899384ba23d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_813269ca92e2cd59e0d0f31737fb8496fdecb6bc2e419c0bdf0f42e706509cae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_813269ca92e2cd59e0d0f31737fb8496fdecb6bc2e419c0bdf0f42e706509cae->enter($__internal_813269ca92e2cd59e0d0f31737fb8496fdecb6bc2e419c0bdf0f42e706509cae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - OldIndex";
        
        $__internal_813269ca92e2cd59e0d0f31737fb8496fdecb6bc2e419c0bdf0f42e706509cae->leave($__internal_813269ca92e2cd59e0d0f31737fb8496fdecb6bc2e419c0bdf0f42e706509cae_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_69375003041a6a9275cf9064a0eb36acbb36372442618c7398a5cc397ae2cfff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69375003041a6a9275cf9064a0eb36acbb36372442618c7398a5cc397ae2cfff->enter($__internal_69375003041a6a9275cf9064a0eb36acbb36372442618c7398a5cc397ae2cfff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_69375003041a6a9275cf9064a0eb36acbb36372442618c7398a5cc397ae2cfff->leave($__internal_69375003041a6a9275cf9064a0eb36acbb36372442618c7398a5cc397ae2cfff_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:oldindex.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 17,  69 => 16,  67 => 15,  54 => 6,  48 => 5,  35 => 3,  11 => 1,);
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
{% endblock %}", "OCPlatformBundle:Advert:oldindex.html.twig", "C:\\wamp64\\www\\Symfony\\src\\OC\\PlatformBundle/Resources/views/Advert/oldindex.html.twig");
    }
}
