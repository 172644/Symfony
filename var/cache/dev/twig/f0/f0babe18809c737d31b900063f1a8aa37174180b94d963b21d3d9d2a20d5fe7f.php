<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_f2ce372595823d2f149f5a4c21553d578fc7296439af4db91a0987fbfd45527b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_6e377e4b6868afe49efcd84595cedb7a0aaaf3d99514378bbdea6fa2d138cff5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e377e4b6868afe49efcd84595cedb7a0aaaf3d99514378bbdea6fa2d138cff5->enter($__internal_6e377e4b6868afe49efcd84595cedb7a0aaaf3d99514378bbdea6fa2d138cff5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_662feb863c26180ea28344677e2a124de92c17a7badb6ecb05d67a33480e5fa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_662feb863c26180ea28344677e2a124de92c17a7badb6ecb05d67a33480e5fa4->enter($__internal_662feb863c26180ea28344677e2a124de92c17a7badb6ecb05d67a33480e5fa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e377e4b6868afe49efcd84595cedb7a0aaaf3d99514378bbdea6fa2d138cff5->leave($__internal_6e377e4b6868afe49efcd84595cedb7a0aaaf3d99514378bbdea6fa2d138cff5_prof);

        
        $__internal_662feb863c26180ea28344677e2a124de92c17a7badb6ecb05d67a33480e5fa4->leave($__internal_662feb863c26180ea28344677e2a124de92c17a7badb6ecb05d67a33480e5fa4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b0f15a422606a2ea329d6fbad2b546f83e9576b94208113ef570f8ad58fc143e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0f15a422606a2ea329d6fbad2b546f83e9576b94208113ef570f8ad58fc143e->enter($__internal_b0f15a422606a2ea329d6fbad2b546f83e9576b94208113ef570f8ad58fc143e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e7ccab03465bbf432013bd756720079cae5a5c1f346f1f5c7f828e433893a035 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7ccab03465bbf432013bd756720079cae5a5c1f346f1f5c7f828e433893a035->enter($__internal_e7ccab03465bbf432013bd756720079cae5a5c1f346f1f5c7f828e433893a035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_e7ccab03465bbf432013bd756720079cae5a5c1f346f1f5c7f828e433893a035->leave($__internal_e7ccab03465bbf432013bd756720079cae5a5c1f346f1f5c7f828e433893a035_prof);

        
        $__internal_b0f15a422606a2ea329d6fbad2b546f83e9576b94208113ef570f8ad58fc143e->leave($__internal_b0f15a422606a2ea329d6fbad2b546f83e9576b94208113ef570f8ad58fc143e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Security\\login.html.twig");
    }
}
