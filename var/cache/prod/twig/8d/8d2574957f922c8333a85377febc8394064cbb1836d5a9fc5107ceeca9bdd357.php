<?php

/* OCPlatformBundle::layout.html.twig */
class __TwigTemplate_cc6dda26975b91dc3f970ffdb81f40c80527733662ffd168c79e2ba263cf35ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OCCoreBundle::layout.html.twig", "OCPlatformBundle::layout.html.twig", 1);
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
        $__internal_d1ff62a5faf8b9dd2ae4188ac00943680c951095421d9d6841b25fa44472b3b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1ff62a5faf8b9dd2ae4188ac00943680c951095421d9d6841b25fa44472b3b9->enter($__internal_d1ff62a5faf8b9dd2ae4188ac00943680c951095421d9d6841b25fa44472b3b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1ff62a5faf8b9dd2ae4188ac00943680c951095421d9d6841b25fa44472b3b9->leave($__internal_d1ff62a5faf8b9dd2ae4188ac00943680c951095421d9d6841b25fa44472b3b9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_35d74e5fa5b5d24426a4d3068d71a513cbacac8eab5b1fd729821920ee432a30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35d74e5fa5b5d24426a4d3068d71a513cbacac8eab5b1fd729821920ee432a30->enter($__internal_35d74e5fa5b5d24426a4d3068d71a513cbacac8eab5b1fd729821920ee432a30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_35d74e5fa5b5d24426a4d3068d71a513cbacac8eab5b1fd729821920ee432a30->leave($__internal_35d74e5fa5b5d24426a4d3068d71a513cbacac8eab5b1fd729821920ee432a30_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_9a1cb057fe4d1f98ad122e522612a415f26a0a86e63b7a22807e99949214cd67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a1cb057fe4d1f98ad122e522612a415f26a0a86e63b7a22807e99949214cd67->enter($__internal_9a1cb057fe4d1f98ad122e522612a415f26a0a86e63b7a22807e99949214cd67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9a1cb057fe4d1f98ad122e522612a415f26a0a86e63b7a22807e99949214cd67->leave($__internal_9a1cb057fe4d1f98ad122e522612a415f26a0a86e63b7a22807e99949214cd67_prof);

    }

    // line 15
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_6af53dec0bb9781f377c42341a2753c99956a1f8bb65d1efcc5e7c936bd6a65e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6af53dec0bb9781f377c42341a2753c99956a1f8bb65d1efcc5e7c936bd6a65e->enter($__internal_6af53dec0bb9781f377c42341a2753c99956a1f8bb65d1efcc5e7c936bd6a65e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 16
        echo "    ";
        
        $__internal_6af53dec0bb9781f377c42341a2753c99956a1f8bb65d1efcc5e7c936bd6a65e->leave($__internal_6af53dec0bb9781f377c42341a2753c99956a1f8bb65d1efcc5e7c936bd6a65e_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle::layout.html.twig";
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

{% endblock %}", "OCPlatformBundle::layout.html.twig", "C:\\wamp64\\www\\Symfony\\src\\OC\\PlatformBundle/Resources/views/layout.html.twig");
    }
}
