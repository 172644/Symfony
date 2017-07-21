<?php

/* @OCCore/Default/contact.html.twig */
class __TwigTemplate_5327370fe997ad99ae5664a2f636bf93ec392f6154feb8cc6f10dd2800f0b857 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OCCoreBundle::layout.html.twig", "@OCCore/Default/contact.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d3bad604f9c6b4fef1db6642a5bf6e1b841be2eab8d76894a64afb2f9dc9b023 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3bad604f9c6b4fef1db6642a5bf6e1b841be2eab8d76894a64afb2f9dc9b023->enter($__internal_d3bad604f9c6b4fef1db6642a5bf6e1b841be2eab8d76894a64afb2f9dc9b023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCCore/Default/contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3bad604f9c6b4fef1db6642a5bf6e1b841be2eab8d76894a64afb2f9dc9b023->leave($__internal_d3bad604f9c6b4fef1db6642a5bf6e1b841be2eab8d76894a64afb2f9dc9b023_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_baec075a45229535e1c75d87b9305f7b4c47c873a4a60eb25acaee6be7e160ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baec075a45229535e1c75d87b9305f7b4c47c873a4a60eb25acaee6be7e160ce->enter($__internal_baec075a45229535e1c75d87b9305f7b4c47c873a4a60eb25acaee6be7e160ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Index - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_baec075a45229535e1c75d87b9305f7b4c47c873a4a60eb25acaee6be7e160ce->leave($__internal_baec075a45229535e1c75d87b9305f7b4c47c873a4a60eb25acaee6be7e160ce_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_93832ffae820893a8138d3f4b6a6efefb16c1c17606d88c2c5967147c2e19a75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93832ffae820893a8138d3f4b6a6efefb16c1c17606d88c2c5967147c2e19a75->enter($__internal_93832ffae820893a8138d3f4b6a6efefb16c1c17606d88c2c5967147c2e19a75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
    ";
        // line 10
        echo "    <h1>Contact</h1>

    <hr>
";
        
        $__internal_93832ffae820893a8138d3f4b6a6efefb16c1c17606d88c2c5967147c2e19a75->leave($__internal_93832ffae820893a8138d3f4b6a6efefb16c1c17606d88c2c5967147c2e19a75_prof);

    }

    public function getTemplateName()
    {
        return "@OCCore/Default/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 10,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"OCCoreBundle::layout.html.twig\" %}

{% block title %}
    Index - {{ parent() }}
{% endblock %}

{% block body %}

    {# On définit un sous-titre commun à toutes les pages du bundle, par exemple #}
    <h1>Contact</h1>

    <hr>
{% endblock %}", "@OCCore/Default/contact.html.twig", "C:\\wamp64\\www\\Symfony\\src\\OC\\CoreBundle\\Resources\\views\\Default\\contact.html.twig");
    }
}
