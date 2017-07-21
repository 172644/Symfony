<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_a54edc6daccffd42afec947369120d924c2388012c0cdec7e2d58d34ab26d37c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_0128d4f9880764be2af2a6af1a3bf6f426166f317e841d8dc3082e0e3fff62b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0128d4f9880764be2af2a6af1a3bf6f426166f317e841d8dc3082e0e3fff62b3->enter($__internal_0128d4f9880764be2af2a6af1a3bf6f426166f317e841d8dc3082e0e3fff62b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0128d4f9880764be2af2a6af1a3bf6f426166f317e841d8dc3082e0e3fff62b3->leave($__internal_0128d4f9880764be2af2a6af1a3bf6f426166f317e841d8dc3082e0e3fff62b3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0ee2b968c23880c8f82067be11838561f5dac39adbe11830d1786e8752af86a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ee2b968c23880c8f82067be11838561f5dac39adbe11830d1786e8752af86a5->enter($__internal_0ee2b968c23880c8f82067be11838561f5dac39adbe11830d1786e8752af86a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_0ee2b968c23880c8f82067be11838561f5dac39adbe11830d1786e8752af86a5->leave($__internal_0ee2b968c23880c8f82067be11838561f5dac39adbe11830d1786e8752af86a5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
