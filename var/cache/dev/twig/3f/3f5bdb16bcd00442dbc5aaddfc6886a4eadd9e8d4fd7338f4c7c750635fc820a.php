<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_3773d66140480d8c806a2865cf06e96b9a91b9b372abd3b58cebe7bfd19b2701 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_081dea7dbbbfe787a33997f751202a5beca4b272b0dcc476890990f43d70f794 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_081dea7dbbbfe787a33997f751202a5beca4b272b0dcc476890990f43d70f794->enter($__internal_081dea7dbbbfe787a33997f751202a5beca4b272b0dcc476890990f43d70f794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $__internal_31f0b621a6ffd4bb8279342313e0111d93c5a20f75e296d0c8e7265cb327459d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31f0b621a6ffd4bb8279342313e0111d93c5a20f75e296d0c8e7265cb327459d->enter($__internal_31f0b621a6ffd4bb8279342313e0111d93c5a20f75e296d0c8e7265cb327459d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_081dea7dbbbfe787a33997f751202a5beca4b272b0dcc476890990f43d70f794->leave($__internal_081dea7dbbbfe787a33997f751202a5beca4b272b0dcc476890990f43d70f794_prof);

        
        $__internal_31f0b621a6ffd4bb8279342313e0111d93c5a20f75e296d0c8e7265cb327459d->leave($__internal_31f0b621a6ffd4bb8279342313e0111d93c5a20f75e296d0c8e7265cb327459d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6339575ac939944258439e2c712d84bc41c8bf4f5b2b311fe6b19f171e7e6acd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6339575ac939944258439e2c712d84bc41c8bf4f5b2b311fe6b19f171e7e6acd->enter($__internal_6339575ac939944258439e2c712d84bc41c8bf4f5b2b311fe6b19f171e7e6acd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_74a34fccb4d33607b5dc2c95ee2e920421a3f1a7d1bf923968e43fa8f819011d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74a34fccb4d33607b5dc2c95ee2e920421a3f1a7d1bf923968e43fa8f819011d->enter($__internal_74a34fccb4d33607b5dc2c95ee2e920421a3f1a7d1bf923968e43fa8f819011d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_74a34fccb4d33607b5dc2c95ee2e920421a3f1a7d1bf923968e43fa8f819011d->leave($__internal_74a34fccb4d33607b5dc2c95ee2e920421a3f1a7d1bf923968e43fa8f819011d_prof);

        
        $__internal_6339575ac939944258439e2c712d84bc41c8bf4f5b2b311fe6b19f171e7e6acd->leave($__internal_6339575ac939944258439e2c712d84bc41c8bf4f5b2b311fe6b19f171e7e6acd_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/reset.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\reset.html.twig");
    }
}
