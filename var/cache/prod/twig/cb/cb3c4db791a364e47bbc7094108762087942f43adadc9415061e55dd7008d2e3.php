<?php

/* @FOSUser/ChangePassword/change_password.html.twig */
class __TwigTemplate_2cfa310c90d1ba24edf07f55b62fb3f931237b0d075acea669024ecc393df5b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 1);
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
        $__internal_3be6bdf8a399495b656a53e4ac428a0486fa495627071470549de11b263986de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3be6bdf8a399495b656a53e4ac428a0486fa495627071470549de11b263986de->enter($__internal_3be6bdf8a399495b656a53e4ac428a0486fa495627071470549de11b263986de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3be6bdf8a399495b656a53e4ac428a0486fa495627071470549de11b263986de->leave($__internal_3be6bdf8a399495b656a53e4ac428a0486fa495627071470549de11b263986de_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_47357803157e1c36207701f0e4912414ce3fe8384c36d03c604a4b5fbab49ef6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47357803157e1c36207701f0e4912414ce3fe8384c36d03c604a4b5fbab49ef6->enter($__internal_47357803157e1c36207701f0e4912414ce3fe8384c36d03c604a4b5fbab49ef6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_47357803157e1c36207701f0e4912414ce3fe8384c36d03c604a4b5fbab49ef6->leave($__internal_47357803157e1c36207701f0e4912414ce3fe8384c36d03c604a4b5fbab49ef6_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/ChangePassword/change_password.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\ChangePassword\\change_password.html.twig");
    }
}
