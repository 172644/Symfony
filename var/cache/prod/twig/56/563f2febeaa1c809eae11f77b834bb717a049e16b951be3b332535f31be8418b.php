<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_453a30be99ed409c8ae2349594151617a732df695eb7d48ac20e0e6d7f0a6d81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_477c103cc120d736cb4ee4ab0cd8ac7419193959525ce63837a0ea8c33e76c32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_477c103cc120d736cb4ee4ab0cd8ac7419193959525ce63837a0ea8c33e76c32->enter($__internal_477c103cc120d736cb4ee4ab0cd8ac7419193959525ce63837a0ea8c33e76c32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_477c103cc120d736cb4ee4ab0cd8ac7419193959525ce63837a0ea8c33e76c32->leave($__internal_477c103cc120d736cb4ee4ab0cd8ac7419193959525ce63837a0ea8c33e76c32_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1a6838fcf0a582e39a490f191e0140b7f5f9a812b64f32bf6805ac08199a19be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a6838fcf0a582e39a490f191e0140b7f5f9a812b64f32bf6805ac08199a19be->enter($__internal_1a6838fcf0a582e39a490f191e0140b7f5f9a812b64f32bf6805ac08199a19be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_1a6838fcf0a582e39a490f191e0140b7f5f9a812b64f32bf6805ac08199a19be->leave($__internal_1a6838fcf0a582e39a490f191e0140b7f5f9a812b64f32bf6805ac08199a19be_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\register.html.twig");
    }
}
