<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_1de7ed2c040fa4e37ba075f3b9496d966aad16bd66f25c6ed4fae6c2d6351f6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_db2e2793736839d2bd43d5c93a6896b769582a0b72459d4a516fd3ef7b2500cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db2e2793736839d2bd43d5c93a6896b769582a0b72459d4a516fd3ef7b2500cd->enter($__internal_db2e2793736839d2bd43d5c93a6896b769582a0b72459d4a516fd3ef7b2500cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db2e2793736839d2bd43d5c93a6896b769582a0b72459d4a516fd3ef7b2500cd->leave($__internal_db2e2793736839d2bd43d5c93a6896b769582a0b72459d4a516fd3ef7b2500cd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_75d1450b4d8e7e17b86d3cbdb7fca845d4db38463e333e672000d5798678b5b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75d1450b4d8e7e17b86d3cbdb7fca845d4db38463e333e672000d5798678b5b4->enter($__internal_75d1450b4d8e7e17b86d3cbdb7fca845d4db38463e333e672000d5798678b5b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_75d1450b4d8e7e17b86d3cbdb7fca845d4db38463e333e672000d5798678b5b4->leave($__internal_75d1450b4d8e7e17b86d3cbdb7fca845d4db38463e333e672000d5798678b5b4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Profile/show.html.twig");
    }
}
