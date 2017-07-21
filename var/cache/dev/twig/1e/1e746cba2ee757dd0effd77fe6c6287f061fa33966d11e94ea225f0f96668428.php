<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_f789fe33a951ca703d6762b2e998e1bce09deb4357ece028232b6d2e5121bcda extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_a7c4c0c5ddceacce65b0c78aa7e0f8b8173ed2a30969f80643d48d6124c8c022 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7c4c0c5ddceacce65b0c78aa7e0f8b8173ed2a30969f80643d48d6124c8c022->enter($__internal_a7c4c0c5ddceacce65b0c78aa7e0f8b8173ed2a30969f80643d48d6124c8c022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $__internal_b0015dec98a97906ae3bc574b4211ac6edbec73d1f5761ad18e608245b133d1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0015dec98a97906ae3bc574b4211ac6edbec73d1f5761ad18e608245b133d1c->enter($__internal_b0015dec98a97906ae3bc574b4211ac6edbec73d1f5761ad18e608245b133d1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7c4c0c5ddceacce65b0c78aa7e0f8b8173ed2a30969f80643d48d6124c8c022->leave($__internal_a7c4c0c5ddceacce65b0c78aa7e0f8b8173ed2a30969f80643d48d6124c8c022_prof);

        
        $__internal_b0015dec98a97906ae3bc574b4211ac6edbec73d1f5761ad18e608245b133d1c->leave($__internal_b0015dec98a97906ae3bc574b4211ac6edbec73d1f5761ad18e608245b133d1c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_192bf91863067edb30f05b9ecb9544367fd06a59b33c444ce5282fd935f7e17b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_192bf91863067edb30f05b9ecb9544367fd06a59b33c444ce5282fd935f7e17b->enter($__internal_192bf91863067edb30f05b9ecb9544367fd06a59b33c444ce5282fd935f7e17b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_031422fab3eae26da59ad18374b873c5df5dd2f4ef035e9a72511e8690ce1244 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_031422fab3eae26da59ad18374b873c5df5dd2f4ef035e9a72511e8690ce1244->enter($__internal_031422fab3eae26da59ad18374b873c5df5dd2f4ef035e9a72511e8690ce1244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_031422fab3eae26da59ad18374b873c5df5dd2f4ef035e9a72511e8690ce1244->leave($__internal_031422fab3eae26da59ad18374b873c5df5dd2f4ef035e9a72511e8690ce1244_prof);

        
        $__internal_192bf91863067edb30f05b9ecb9544367fd06a59b33c444ce5282fd935f7e17b->leave($__internal_192bf91863067edb30f05b9ecb9544367fd06a59b33c444ce5282fd935f7e17b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/show.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Profile\\show.html.twig");
    }
}
