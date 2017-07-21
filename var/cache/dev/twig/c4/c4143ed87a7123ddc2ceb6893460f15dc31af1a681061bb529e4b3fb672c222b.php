<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_134249e71b2296c50f541198de3a5f020382e02cf8473cee56cea61a9a71bbf7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7976a394b4a560b3b3776fdf12c55ceae5aa46350c4eb682875f184066c72601 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7976a394b4a560b3b3776fdf12c55ceae5aa46350c4eb682875f184066c72601->enter($__internal_7976a394b4a560b3b3776fdf12c55ceae5aa46350c4eb682875f184066c72601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_8b5c43828be52f8581d58a4b9985876ec9c8693928d3a14b794c204ef2e319fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b5c43828be52f8581d58a4b9985876ec9c8693928d3a14b794c204ef2e319fb->enter($__internal_8b5c43828be52f8581d58a4b9985876ec9c8693928d3a14b794c204ef2e319fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7976a394b4a560b3b3776fdf12c55ceae5aa46350c4eb682875f184066c72601->leave($__internal_7976a394b4a560b3b3776fdf12c55ceae5aa46350c4eb682875f184066c72601_prof);

        
        $__internal_8b5c43828be52f8581d58a4b9985876ec9c8693928d3a14b794c204ef2e319fb->leave($__internal_8b5c43828be52f8581d58a4b9985876ec9c8693928d3a14b794c204ef2e319fb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_95bb9284842f067dd96b7821ffca0abe733b783a0ba004f26baad2daed52072a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95bb9284842f067dd96b7821ffca0abe733b783a0ba004f26baad2daed52072a->enter($__internal_95bb9284842f067dd96b7821ffca0abe733b783a0ba004f26baad2daed52072a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9f7081f44544bd6e9a19b2b8b1051d1945c264e73f9cd15eb933e0c78b81f5b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f7081f44544bd6e9a19b2b8b1051d1945c264e73f9cd15eb933e0c78b81f5b1->enter($__internal_9f7081f44544bd6e9a19b2b8b1051d1945c264e73f9cd15eb933e0c78b81f5b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_9f7081f44544bd6e9a19b2b8b1051d1945c264e73f9cd15eb933e0c78b81f5b1->leave($__internal_9f7081f44544bd6e9a19b2b8b1051d1945c264e73f9cd15eb933e0c78b81f5b1_prof);

        
        $__internal_95bb9284842f067dd96b7821ffca0abe733b783a0ba004f26baad2daed52072a->leave($__internal_95bb9284842f067dd96b7821ffca0abe733b783a0ba004f26baad2daed52072a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/new.html.twig");
    }
}
