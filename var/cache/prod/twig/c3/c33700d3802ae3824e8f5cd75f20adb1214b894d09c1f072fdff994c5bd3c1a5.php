<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_1453de3daa898b838f4b5581793700ebb8f737858c480dcea3ab1b5adb4a3c18 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_c8e2556e780c5113707c13a815e046f50fc1731481b89aeb540e9c1c2e68c15b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8e2556e780c5113707c13a815e046f50fc1731481b89aeb540e9c1c2e68c15b->enter($__internal_c8e2556e780c5113707c13a815e046f50fc1731481b89aeb540e9c1c2e68c15b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8e2556e780c5113707c13a815e046f50fc1731481b89aeb540e9c1c2e68c15b->leave($__internal_c8e2556e780c5113707c13a815e046f50fc1731481b89aeb540e9c1c2e68c15b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6bcee99ca3647cff8890533588a695b5c088e02fa62c908ae91554e2a8f98427 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bcee99ca3647cff8890533588a695b5c088e02fa62c908ae91554e2a8f98427->enter($__internal_6bcee99ca3647cff8890533588a695b5c088e02fa62c908ae91554e2a8f98427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_6bcee99ca3647cff8890533588a695b5c088e02fa62c908ae91554e2a8f98427->leave($__internal_6bcee99ca3647cff8890533588a695b5c088e02fa62c908ae91554e2a8f98427_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/request.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\request.html.twig");
    }
}
