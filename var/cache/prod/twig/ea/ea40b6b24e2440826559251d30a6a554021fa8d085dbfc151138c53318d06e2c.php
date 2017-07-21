<?php

/* OCPlatformBundle:Advert:edit.html.twig */
class __TwigTemplate_38ab0b5f2c7164c6efda2ff593fb67b63c5822e4db93d196c24a4a492e4af49b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:edit.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e963454ef22fd57d358346d710fdc7ea9399441ec62d878df01c0c6cdc134707 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e963454ef22fd57d358346d710fdc7ea9399441ec62d878df01c0c6cdc134707->enter($__internal_e963454ef22fd57d358346d710fdc7ea9399441ec62d878df01c0c6cdc134707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e963454ef22fd57d358346d710fdc7ea9399441ec62d878df01c0c6cdc134707->leave($__internal_e963454ef22fd57d358346d710fdc7ea9399441ec62d878df01c0c6cdc134707_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4449339880fdf08ad06e6ae85715a91d8b529779edfedae5e173ae960eb61694 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4449339880fdf08ad06e6ae85715a91d8b529779edfedae5e173ae960eb61694->enter($__internal_4449339880fdf08ad06e6ae85715a91d8b529779edfedae5e173ae960eb61694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Modifier une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_4449339880fdf08ad06e6ae85715a91d8b529779edfedae5e173ae960eb61694->leave($__internal_4449339880fdf08ad06e6ae85715a91d8b529779edfedae5e173ae960eb61694_prof);

    }

    // line 7
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_4c09eb043b19fcfe23536dcf3f1f5f9f68ec4e052c23f82855c6a8ea11e8fa94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c09eb043b19fcfe23536dcf3f1f5f9f68ec4e052c23f82855c6a8ea11e8fa94->enter($__internal_4c09eb043b19fcfe23536dcf3f1f5f9f68ec4e052c23f82855c6a8ea11e8fa94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 8
        echo "
    <h2>Modifier une annonce</h2>

    ";
        // line 11
        echo twig_include($this->env, $context, "OCPlatformBundle:Advert:form.html.twig");
        echo "

    <p>
        Vous éditez une annonce déjà existante, merci de ne pas changer
        l'esprit général de l'annonce déjà publiée.
    </p>

    <p>
        <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_view", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 19, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour à l'annonce
        </a>
    </p>

";
        
        $__internal_4c09eb043b19fcfe23536dcf3f1f5f9f68ec4e052c23f82855c6a8ea11e8fa94->leave($__internal_4c09eb043b19fcfe23536dcf3f1f5f9f68ec4e052c23f82855c6a8ea11e8fa94_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 19,  62 => 11,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"OCPlatformBundle::layout.html.twig\" %}

{% block title %}
    Modifier une annonce - {{ parent() }}
{% endblock %}

{% block ocplatform_body %}

    <h2>Modifier une annonce</h2>

    {{ include(\"OCPlatformBundle:Advert:form.html.twig\") }}

    <p>
        Vous éditez une annonce déjà existante, merci de ne pas changer
        l'esprit général de l'annonce déjà publiée.
    </p>

    <p>
        <a href=\"{{ path('oc_platform_view', {'id': advert.id}) }}\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour à l'annonce
        </a>
    </p>

{% endblock %}", "OCPlatformBundle:Advert:edit.html.twig", "C:\\wamp64\\www\\Symfony\\src\\OC\\PlatformBundle/Resources/views/Advert/edit.html.twig");
    }
}
