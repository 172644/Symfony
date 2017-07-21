<?php

/* @OCPlatform/Advert/oldindex.html.twig */
class __TwigTemplate_bc45fcec534436fdb7fa0bbbb27907ab32939316b20928bc04b0adb3319a4f53 extends Twig_Template
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
        $__internal_317c23e261d0b8d0950417303a0c903c84ac23cdc4d84cc9866e7e7ea4452d1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_317c23e261d0b8d0950417303a0c903c84ac23cdc4d84cc9866e7e7ea4452d1e->enter($__internal_317c23e261d0b8d0950417303a0c903c84ac23cdc4d84cc9866e7e7ea4452d1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCPlatform/Advert/oldindex.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_317c23e261d0b8d0950417303a0c903c84ac23cdc4d84cc9866e7e7ea4452d1e->leave($__internal_317c23e261d0b8d0950417303a0c903c84ac23cdc4d84cc9866e7e7ea4452d1e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_480fbd648f0ddf310f6feba1d17401362b61513027673f37b5ef92b3462a7b2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_480fbd648f0ddf310f6feba1d17401362b61513027673f37b5ef92b3462a7b2b->enter($__internal_480fbd648f0ddf310f6feba1d17401362b61513027673f37b5ef92b3462a7b2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - OldIndex";
        
        $__internal_480fbd648f0ddf310f6feba1d17401362b61513027673f37b5ef92b3462a7b2b->leave($__internal_480fbd648f0ddf310f6feba1d17401362b61513027673f37b5ef92b3462a7b2b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_cebe1d708078177cf128148d0d02b47a98d2836bfbc0540e616450e394b43314 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cebe1d708078177cf128148d0d02b47a98d2836bfbc0540e616450e394b43314->enter($__internal_cebe1d708078177cf128148d0d02b47a98d2836bfbc0540e616450e394b43314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_cebe1d708078177cf128148d0d02b47a98d2836bfbc0540e616450e394b43314->leave($__internal_cebe1d708078177cf128148d0d02b47a98d2836bfbc0540e616450e394b43314_prof);

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
{% endblock %}", "@OCPlatform/Advert/oldindex.html.twig", "C:\\wamp64\\www\\Symfony\\src\\OC\\PlatformBundle\\Resources\\views\\Advert\\oldindex.html.twig");
    }
}
