<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_f312329621e846ad234935fa82f781834427d069f6d37a6558f1c72751862240 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_0d96435a64c37b1e8186ac9187052b3979173231ff38b6c72cc5b8e3b1957604 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d96435a64c37b1e8186ac9187052b3979173231ff38b6c72cc5b8e3b1957604->enter($__internal_0d96435a64c37b1e8186ac9187052b3979173231ff38b6c72cc5b8e3b1957604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d96435a64c37b1e8186ac9187052b3979173231ff38b6c72cc5b8e3b1957604->leave($__internal_0d96435a64c37b1e8186ac9187052b3979173231ff38b6c72cc5b8e3b1957604_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5891a4ae374e5c6015d962c9ec0f75cbf4078158e1792e2fb25e588090d4ebc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5891a4ae374e5c6015d962c9ec0f75cbf4078158e1792e2fb25e588090d4ebc2->enter($__internal_5891a4ae374e5c6015d962c9ec0f75cbf4078158e1792e2fb25e588090d4ebc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_5891a4ae374e5c6015d962c9ec0f75cbf4078158e1792e2fb25e588090d4ebc2->leave($__internal_5891a4ae374e5c6015d962c9ec0f75cbf4078158e1792e2fb25e588090d4ebc2_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/edit.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Profile\\edit.html.twig");
    }
}
