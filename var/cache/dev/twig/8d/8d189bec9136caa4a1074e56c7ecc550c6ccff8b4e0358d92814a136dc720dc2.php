<?php

/* OCPlatformBundle:Advert:edit.html.twig */
class __TwigTemplate_2ab1bf080a4b75fba435bf0a5f5b910b6ee2f7780c6785ccc85b108609cf8c48 extends Twig_Template
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
        $__internal_e59d47a25ab300ba203e113562c2d483d9db75732da0e6b3b4d8077f546cab55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e59d47a25ab300ba203e113562c2d483d9db75732da0e6b3b4d8077f546cab55->enter($__internal_e59d47a25ab300ba203e113562c2d483d9db75732da0e6b3b4d8077f546cab55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:edit.html.twig"));

        $__internal_65771aafa37f6eaf59c95c189d09eaebf56184f4087e6be9e7a51fbc7b3921a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65771aafa37f6eaf59c95c189d09eaebf56184f4087e6be9e7a51fbc7b3921a7->enter($__internal_65771aafa37f6eaf59c95c189d09eaebf56184f4087e6be9e7a51fbc7b3921a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e59d47a25ab300ba203e113562c2d483d9db75732da0e6b3b4d8077f546cab55->leave($__internal_e59d47a25ab300ba203e113562c2d483d9db75732da0e6b3b4d8077f546cab55_prof);

        
        $__internal_65771aafa37f6eaf59c95c189d09eaebf56184f4087e6be9e7a51fbc7b3921a7->leave($__internal_65771aafa37f6eaf59c95c189d09eaebf56184f4087e6be9e7a51fbc7b3921a7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_80e6cad69258e253e236edbe02803fc2482050a2a636550c37b656ba6d4affcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80e6cad69258e253e236edbe02803fc2482050a2a636550c37b656ba6d4affcb->enter($__internal_80e6cad69258e253e236edbe02803fc2482050a2a636550c37b656ba6d4affcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f8c552906babda5ee7496103deb3f41d13dd8370e194ec9bf0bd82bbbd4cc212 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8c552906babda5ee7496103deb3f41d13dd8370e194ec9bf0bd82bbbd4cc212->enter($__internal_f8c552906babda5ee7496103deb3f41d13dd8370e194ec9bf0bd82bbbd4cc212_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Modifier une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_f8c552906babda5ee7496103deb3f41d13dd8370e194ec9bf0bd82bbbd4cc212->leave($__internal_f8c552906babda5ee7496103deb3f41d13dd8370e194ec9bf0bd82bbbd4cc212_prof);

        
        $__internal_80e6cad69258e253e236edbe02803fc2482050a2a636550c37b656ba6d4affcb->leave($__internal_80e6cad69258e253e236edbe02803fc2482050a2a636550c37b656ba6d4affcb_prof);

    }

    // line 7
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_24e9198bf45d1f79d2d7c1bed13ce4a5b5eb7e05e6246157f965a309ba2f4cd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24e9198bf45d1f79d2d7c1bed13ce4a5b5eb7e05e6246157f965a309ba2f4cd1->enter($__internal_24e9198bf45d1f79d2d7c1bed13ce4a5b5eb7e05e6246157f965a309ba2f4cd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_c8addf6a8d511ec48759e0d97541e00ed1fb07be1ea6378482517a63c5d1f2f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8addf6a8d511ec48759e0d97541e00ed1fb07be1ea6378482517a63c5d1f2f5->enter($__internal_c8addf6a8d511ec48759e0d97541e00ed1fb07be1ea6378482517a63c5d1f2f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

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
        
        $__internal_c8addf6a8d511ec48759e0d97541e00ed1fb07be1ea6378482517a63c5d1f2f5->leave($__internal_c8addf6a8d511ec48759e0d97541e00ed1fb07be1ea6378482517a63c5d1f2f5_prof);

        
        $__internal_24e9198bf45d1f79d2d7c1bed13ce4a5b5eb7e05e6246157f965a309ba2f4cd1->leave($__internal_24e9198bf45d1f79d2d7c1bed13ce4a5b5eb7e05e6246157f965a309ba2f4cd1_prof);

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
        return array (  88 => 19,  77 => 11,  72 => 8,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
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
