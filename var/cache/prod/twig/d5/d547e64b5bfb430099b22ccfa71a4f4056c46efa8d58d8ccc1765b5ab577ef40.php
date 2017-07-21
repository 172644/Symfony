<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_5eb1e3a9ab7d7d6cde6bcb11582dc4a59fffdd5793248595aa0a190f7ac95948 extends Twig_Template
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
        $__internal_27ff27ff108339e52cbf671056e6c8b9e517715c92f6f9188f475292ffad8426 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27ff27ff108339e52cbf671056e6c8b9e517715c92f6f9188f475292ffad8426->enter($__internal_27ff27ff108339e52cbf671056e6c8b9e517715c92f6f9188f475292ffad8426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27ff27ff108339e52cbf671056e6c8b9e517715c92f6f9188f475292ffad8426->leave($__internal_27ff27ff108339e52cbf671056e6c8b9e517715c92f6f9188f475292ffad8426_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4a0acf55140785440f2ca347ba3d975febafa44b2621b3d943edca2c96d1cac0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a0acf55140785440f2ca347ba3d975febafa44b2621b3d943edca2c96d1cac0->enter($__internal_4a0acf55140785440f2ca347ba3d975febafa44b2621b3d943edca2c96d1cac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_4a0acf55140785440f2ca347ba3d975febafa44b2621b3d943edca2c96d1cac0->leave($__internal_4a0acf55140785440f2ca347ba3d975febafa44b2621b3d943edca2c96d1cac0_prof);

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
        return array (  40 => 4,  34 => 3,  11 => 1,);
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
