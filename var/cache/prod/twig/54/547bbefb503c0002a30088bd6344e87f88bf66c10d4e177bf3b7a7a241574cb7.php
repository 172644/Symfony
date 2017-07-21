<?php

/* @OCPlatform/Advert/edit.html.twig */
class __TwigTemplate_803563dffb4110cb3654d5b444a3284998d3221accbae3d525124a8d1a622663 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "@OCPlatform/Advert/edit.html.twig", 1);
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
        $__internal_ba14e2a466a815d2dfd6ea5c87842ca8f52e81fe226fcd91bec44a118c838dd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba14e2a466a815d2dfd6ea5c87842ca8f52e81fe226fcd91bec44a118c838dd7->enter($__internal_ba14e2a466a815d2dfd6ea5c87842ca8f52e81fe226fcd91bec44a118c838dd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCPlatform/Advert/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba14e2a466a815d2dfd6ea5c87842ca8f52e81fe226fcd91bec44a118c838dd7->leave($__internal_ba14e2a466a815d2dfd6ea5c87842ca8f52e81fe226fcd91bec44a118c838dd7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e74a68f553496d89ebd75a75dd233332696fa226ec5d2bb65d3e637fa78153a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e74a68f553496d89ebd75a75dd233332696fa226ec5d2bb65d3e637fa78153a1->enter($__internal_e74a68f553496d89ebd75a75dd233332696fa226ec5d2bb65d3e637fa78153a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Modifier une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_e74a68f553496d89ebd75a75dd233332696fa226ec5d2bb65d3e637fa78153a1->leave($__internal_e74a68f553496d89ebd75a75dd233332696fa226ec5d2bb65d3e637fa78153a1_prof);

    }

    // line 7
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_c4fef259b1baa4027b16f3845297ba657124c0e64b74a6265d3985e0adde513f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4fef259b1baa4027b16f3845297ba657124c0e64b74a6265d3985e0adde513f->enter($__internal_c4fef259b1baa4027b16f3845297ba657124c0e64b74a6265d3985e0adde513f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

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
        
        $__internal_c4fef259b1baa4027b16f3845297ba657124c0e64b74a6265d3985e0adde513f->leave($__internal_c4fef259b1baa4027b16f3845297ba657124c0e64b74a6265d3985e0adde513f_prof);

    }

    public function getTemplateName()
    {
        return "@OCPlatform/Advert/edit.html.twig";
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

{% endblock %}", "@OCPlatform/Advert/edit.html.twig", "C:\\wamp64\\www\\Symfony\\src\\OC\\PlatformBundle\\Resources\\views\\Advert\\edit.html.twig");
    }
}
