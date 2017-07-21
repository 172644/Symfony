<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_acc4b5880f36e738a80948945c3b873bb90d9f2be8c3335936b78167e7fd0517 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_1455ddf34cfbe0857b5b2050311c0be52587344c4da1da19b7d93e83af658514 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1455ddf34cfbe0857b5b2050311c0be52587344c4da1da19b7d93e83af658514->enter($__internal_1455ddf34cfbe0857b5b2050311c0be52587344c4da1da19b7d93e83af658514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $__internal_8eaac64674a368a367ad1182cba52579c7df3b18db77fef59fea9acbf4b7b9fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8eaac64674a368a367ad1182cba52579c7df3b18db77fef59fea9acbf4b7b9fe->enter($__internal_8eaac64674a368a367ad1182cba52579c7df3b18db77fef59fea9acbf4b7b9fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1455ddf34cfbe0857b5b2050311c0be52587344c4da1da19b7d93e83af658514->leave($__internal_1455ddf34cfbe0857b5b2050311c0be52587344c4da1da19b7d93e83af658514_prof);

        
        $__internal_8eaac64674a368a367ad1182cba52579c7df3b18db77fef59fea9acbf4b7b9fe->leave($__internal_8eaac64674a368a367ad1182cba52579c7df3b18db77fef59fea9acbf4b7b9fe_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c6383902a76286a0a59a0e112132f7eb92a342712723b8614cfcaf9efe92ae2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6383902a76286a0a59a0e112132f7eb92a342712723b8614cfcaf9efe92ae2d->enter($__internal_c6383902a76286a0a59a0e112132f7eb92a342712723b8614cfcaf9efe92ae2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7facb34eee2c223b8a67276b3bd0631a986549e7dbea8066b9101e2612c6bcd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7facb34eee2c223b8a67276b3bd0631a986549e7dbea8066b9101e2612c6bcd6->enter($__internal_7facb34eee2c223b8a67276b3bd0631a986549e7dbea8066b9101e2612c6bcd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_7facb34eee2c223b8a67276b3bd0631a986549e7dbea8066b9101e2612c6bcd6->leave($__internal_7facb34eee2c223b8a67276b3bd0631a986549e7dbea8066b9101e2612c6bcd6_prof);

        
        $__internal_c6383902a76286a0a59a0e112132f7eb92a342712723b8614cfcaf9efe92ae2d->leave($__internal_c6383902a76286a0a59a0e112132f7eb92a342712723b8614cfcaf9efe92ae2d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/edit.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\edit.html.twig");
    }
}
