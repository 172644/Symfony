<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_b241d38b7b03a6345ab297006a3e96ad3dbab2fe5cc1307823fdd2ad7d058a90 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_692adf239f4e1c0a3b751e7295053159ed99eab8af55e8ac91db1835ee3630d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_692adf239f4e1c0a3b751e7295053159ed99eab8af55e8ac91db1835ee3630d2->enter($__internal_692adf239f4e1c0a3b751e7295053159ed99eab8af55e8ac91db1835ee3630d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_692adf239f4e1c0a3b751e7295053159ed99eab8af55e8ac91db1835ee3630d2->leave($__internal_692adf239f4e1c0a3b751e7295053159ed99eab8af55e8ac91db1835ee3630d2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e1c0d7825d45d9dcc895692b10a3f06026769ca2fcfedf9237aea498009edaae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1c0d7825d45d9dcc895692b10a3f06026769ca2fcfedf9237aea498009edaae->enter($__internal_e1c0d7825d45d9dcc895692b10a3f06026769ca2fcfedf9237aea498009edaae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_e1c0d7825d45d9dcc895692b10a3f06026769ca2fcfedf9237aea498009edaae->leave($__internal_e1c0d7825d45d9dcc895692b10a3f06026769ca2fcfedf9237aea498009edaae_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
", "@FOSUser/Group/new.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\new.html.twig");
    }
}
