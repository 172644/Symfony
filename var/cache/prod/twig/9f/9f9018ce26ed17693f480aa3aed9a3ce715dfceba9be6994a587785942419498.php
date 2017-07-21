<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_7d8fa5d60a3d6264c49fe71ca130547088ecf6536240b1c4597e32c43eb4eec0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_4453218d72113155045281f22c7747afb67b448cdc49e20fbe23c1418636fe88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4453218d72113155045281f22c7747afb67b448cdc49e20fbe23c1418636fe88->enter($__internal_4453218d72113155045281f22c7747afb67b448cdc49e20fbe23c1418636fe88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4453218d72113155045281f22c7747afb67b448cdc49e20fbe23c1418636fe88->leave($__internal_4453218d72113155045281f22c7747afb67b448cdc49e20fbe23c1418636fe88_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2f945e762ecc2a5445ff872d017d1d3f4366cd3e1a8809c38199f2319e70e407 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f945e762ecc2a5445ff872d017d1d3f4366cd3e1a8809c38199f2319e70e407->enter($__internal_2f945e762ecc2a5445ff872d017d1d3f4366cd3e1a8809c38199f2319e70e407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_2f945e762ecc2a5445ff872d017d1d3f4366cd3e1a8809c38199f2319e70e407->leave($__internal_2f945e762ecc2a5445ff872d017d1d3f4366cd3e1a8809c38199f2319e70e407_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
", "@FOSUser/Profile/show.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Profile\\show.html.twig");
    }
}
