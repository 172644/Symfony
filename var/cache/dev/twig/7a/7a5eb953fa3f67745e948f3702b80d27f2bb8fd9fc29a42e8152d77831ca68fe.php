<?php

/* @OCCore/Default/contact.html.twig */
class __TwigTemplate_036cea4d5da64cfb5cd2767edd3202fbf4676af3b31688f2762cf5be91e99b8a extends Twig_Template
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
        $__internal_6c99ccbd4e1a83625acd9483d516757fbd34c4afd53d7bf1e68cdafbb6b234c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c99ccbd4e1a83625acd9483d516757fbd34c4afd53d7bf1e68cdafbb6b234c9->enter($__internal_6c99ccbd4e1a83625acd9483d516757fbd34c4afd53d7bf1e68cdafbb6b234c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCCore/Default/contact.html.twig"));

        $__internal_6403799d89eed532f13e40c9bb6af1a5e96172eb90238a41185ddfd38b25e0af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6403799d89eed532f13e40c9bb6af1a5e96172eb90238a41185ddfd38b25e0af->enter($__internal_6403799d89eed532f13e40c9bb6af1a5e96172eb90238a41185ddfd38b25e0af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCCore/Default/contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c99ccbd4e1a83625acd9483d516757fbd34c4afd53d7bf1e68cdafbb6b234c9->leave($__internal_6c99ccbd4e1a83625acd9483d516757fbd34c4afd53d7bf1e68cdafbb6b234c9_prof);

        
        $__internal_6403799d89eed532f13e40c9bb6af1a5e96172eb90238a41185ddfd38b25e0af->leave($__internal_6403799d89eed532f13e40c9bb6af1a5e96172eb90238a41185ddfd38b25e0af_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8994f502490e65a609740e83bbf568b353f7b5704cb1c3e19389863acd0f7f4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8994f502490e65a609740e83bbf568b353f7b5704cb1c3e19389863acd0f7f4b->enter($__internal_8994f502490e65a609740e83bbf568b353f7b5704cb1c3e19389863acd0f7f4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a7cf43de8f89357008bc0da380114531baa7cfded96665ca9de329c20359b86e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7cf43de8f89357008bc0da380114531baa7cfded96665ca9de329c20359b86e->enter($__internal_a7cf43de8f89357008bc0da380114531baa7cfded96665ca9de329c20359b86e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Index - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_a7cf43de8f89357008bc0da380114531baa7cfded96665ca9de329c20359b86e->leave($__internal_a7cf43de8f89357008bc0da380114531baa7cfded96665ca9de329c20359b86e_prof);

        
        $__internal_8994f502490e65a609740e83bbf568b353f7b5704cb1c3e19389863acd0f7f4b->leave($__internal_8994f502490e65a609740e83bbf568b353f7b5704cb1c3e19389863acd0f7f4b_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_4c5e2b0c0b65f74aeb39fe7d5dac1b6d7993fe98b056ea6d7f990f7a8a55903b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c5e2b0c0b65f74aeb39fe7d5dac1b6d7993fe98b056ea6d7f990f7a8a55903b->enter($__internal_4c5e2b0c0b65f74aeb39fe7d5dac1b6d7993fe98b056ea6d7f990f7a8a55903b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1b02bff985a3a86a0f7b34225199e0ca32ef8e4bbc9507816cfb70361fbb1260 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b02bff985a3a86a0f7b34225199e0ca32ef8e4bbc9507816cfb70361fbb1260->enter($__internal_1b02bff985a3a86a0f7b34225199e0ca32ef8e4bbc9507816cfb70361fbb1260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
    ";
        // line 10
        echo "    <h1>Contact</h1>

    <hr>
";
        
        $__internal_1b02bff985a3a86a0f7b34225199e0ca32ef8e4bbc9507816cfb70361fbb1260->leave($__internal_1b02bff985a3a86a0f7b34225199e0ca32ef8e4bbc9507816cfb70361fbb1260_prof);

        
        $__internal_4c5e2b0c0b65f74aeb39fe7d5dac1b6d7993fe98b056ea6d7f990f7a8a55903b->leave($__internal_4c5e2b0c0b65f74aeb39fe7d5dac1b6d7993fe98b056ea6d7f990f7a8a55903b_prof);

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
        return array (  75 => 10,  72 => 8,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
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
