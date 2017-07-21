<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_8af218c787204ad8de2afc9a2b2164f26f7e5fd000264dc9989c15a8b36a29dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_2ea80a63cc46f1840764d3fe0b9a6ad8ecc19833e1caa48543b4a4842524aab6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ea80a63cc46f1840764d3fe0b9a6ad8ecc19833e1caa48543b4a4842524aab6->enter($__internal_2ea80a63cc46f1840764d3fe0b9a6ad8ecc19833e1caa48543b4a4842524aab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_2c03f4b7592fd6d3f4658f30d4fd4fd4d73174b635c01725f5c131a837db511b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c03f4b7592fd6d3f4658f30d4fd4fd4d73174b635c01725f5c131a837db511b->enter($__internal_2c03f4b7592fd6d3f4658f30d4fd4fd4d73174b635c01725f5c131a837db511b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ea80a63cc46f1840764d3fe0b9a6ad8ecc19833e1caa48543b4a4842524aab6->leave($__internal_2ea80a63cc46f1840764d3fe0b9a6ad8ecc19833e1caa48543b4a4842524aab6_prof);

        
        $__internal_2c03f4b7592fd6d3f4658f30d4fd4fd4d73174b635c01725f5c131a837db511b->leave($__internal_2c03f4b7592fd6d3f4658f30d4fd4fd4d73174b635c01725f5c131a837db511b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a76cca58ff4974cb1cad4c253b831ad7a65f1e52724e009b2e257fa6cf8a520b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a76cca58ff4974cb1cad4c253b831ad7a65f1e52724e009b2e257fa6cf8a520b->enter($__internal_a76cca58ff4974cb1cad4c253b831ad7a65f1e52724e009b2e257fa6cf8a520b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_76668534ed6ca7e7b337dac5b825ce11822bab358b4ad81a8ab67b2b6300e8a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76668534ed6ca7e7b337dac5b825ce11822bab358b4ad81a8ab67b2b6300e8a5->enter($__internal_76668534ed6ca7e7b337dac5b825ce11822bab358b4ad81a8ab67b2b6300e8a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_76668534ed6ca7e7b337dac5b825ce11822bab358b4ad81a8ab67b2b6300e8a5->leave($__internal_76668534ed6ca7e7b337dac5b825ce11822bab358b4ad81a8ab67b2b6300e8a5_prof);

        
        $__internal_a76cca58ff4974cb1cad4c253b831ad7a65f1e52724e009b2e257fa6cf8a520b->leave($__internal_a76cca58ff4974cb1cad4c253b831ad7a65f1e52724e009b2e257fa6cf8a520b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
