<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_e457e3415001ab78e761779ba9e778ad95090e3c0caf292df6fbb2d76b7bc231 extends Twig_Template
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
        $__internal_7a28ffe97765bc97bbe5d7da616add0ca3b3cb00e0fa2f23cf3e589e7d471b45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a28ffe97765bc97bbe5d7da616add0ca3b3cb00e0fa2f23cf3e589e7d471b45->enter($__internal_7a28ffe97765bc97bbe5d7da616add0ca3b3cb00e0fa2f23cf3e589e7d471b45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a28ffe97765bc97bbe5d7da616add0ca3b3cb00e0fa2f23cf3e589e7d471b45->leave($__internal_7a28ffe97765bc97bbe5d7da616add0ca3b3cb00e0fa2f23cf3e589e7d471b45_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d2dafe39326206665f1fe1db9c02a9b4e473d64a9a77be4715d7c19f4778f738 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2dafe39326206665f1fe1db9c02a9b4e473d64a9a77be4715d7c19f4778f738->enter($__internal_d2dafe39326206665f1fe1db9c02a9b4e473d64a9a77be4715d7c19f4778f738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_d2dafe39326206665f1fe1db9c02a9b4e473d64a9a77be4715d7c19f4778f738->leave($__internal_d2dafe39326206665f1fe1db9c02a9b4e473d64a9a77be4715d7c19f4778f738_prof);

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
        return array (  40 => 4,  34 => 3,  11 => 1,);
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
