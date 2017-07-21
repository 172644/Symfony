<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_7b8a7d3bc3594fa0217961b711a46b600bd9581633b63fb59c7c129df18ecee6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_caa71905b9632fdcff48e3f91330e8b27e954b1d68831ff0a8ac9a6d31a356b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_caa71905b9632fdcff48e3f91330e8b27e954b1d68831ff0a8ac9a6d31a356b7->enter($__internal_caa71905b9632fdcff48e3f91330e8b27e954b1d68831ff0a8ac9a6d31a356b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $__internal_04968c140d7c00bd9f2b14b67732dc08fb050b7e42ae5572cd550b32d26ca29d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04968c140d7c00bd9f2b14b67732dc08fb050b7e42ae5572cd550b32d26ca29d->enter($__internal_04968c140d7c00bd9f2b14b67732dc08fb050b7e42ae5572cd550b32d26ca29d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_caa71905b9632fdcff48e3f91330e8b27e954b1d68831ff0a8ac9a6d31a356b7->leave($__internal_caa71905b9632fdcff48e3f91330e8b27e954b1d68831ff0a8ac9a6d31a356b7_prof);

        
        $__internal_04968c140d7c00bd9f2b14b67732dc08fb050b7e42ae5572cd550b32d26ca29d->leave($__internal_04968c140d7c00bd9f2b14b67732dc08fb050b7e42ae5572cd550b32d26ca29d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ee5d66733064a07f21c113c9503a18359b0fab92310f99c81c8286802b9a8d2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee5d66733064a07f21c113c9503a18359b0fab92310f99c81c8286802b9a8d2e->enter($__internal_ee5d66733064a07f21c113c9503a18359b0fab92310f99c81c8286802b9a8d2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_98b2a76422db1932e4fd2a1a71eb98dc74a8a61e5d2e8ec380d966031df6ad7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98b2a76422db1932e4fd2a1a71eb98dc74a8a61e5d2e8ec380d966031df6ad7a->enter($__internal_98b2a76422db1932e4fd2a1a71eb98dc74a8a61e5d2e8ec380d966031df6ad7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_98b2a76422db1932e4fd2a1a71eb98dc74a8a61e5d2e8ec380d966031df6ad7a->leave($__internal_98b2a76422db1932e4fd2a1a71eb98dc74a8a61e5d2e8ec380d966031df6ad7a_prof);

        
        $__internal_ee5d66733064a07f21c113c9503a18359b0fab92310f99c81c8286802b9a8d2e->leave($__internal_ee5d66733064a07f21c113c9503a18359b0fab92310f99c81c8286802b9a8d2e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/show.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\show.html.twig");
    }
}
