<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_d762dd102d54197a96e2fb0c90116e7d6953249c451d6f97ed638d4046304066 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_c69026fb0dcd1acecd467c745c5879cd2b66e1af847fd03340f32a6e4aea0523 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c69026fb0dcd1acecd467c745c5879cd2b66e1af847fd03340f32a6e4aea0523->enter($__internal_c69026fb0dcd1acecd467c745c5879cd2b66e1af847fd03340f32a6e4aea0523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c69026fb0dcd1acecd467c745c5879cd2b66e1af847fd03340f32a6e4aea0523->leave($__internal_c69026fb0dcd1acecd467c745c5879cd2b66e1af847fd03340f32a6e4aea0523_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_72ab9b214f570cf25c47ad4cfbe239e5aefd2011e60043beee3ef707335b0fc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72ab9b214f570cf25c47ad4cfbe239e5aefd2011e60043beee3ef707335b0fc7->enter($__internal_72ab9b214f570cf25c47ad4cfbe239e5aefd2011e60043beee3ef707335b0fc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_72ab9b214f570cf25c47ad4cfbe239e5aefd2011e60043beee3ef707335b0fc7->leave($__internal_72ab9b214f570cf25c47ad4cfbe239e5aefd2011e60043beee3ef707335b0fc7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/list.html.twig");
    }
}
