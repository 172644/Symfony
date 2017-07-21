<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_1afae245292774af41938c02065119d8fe51f33c8f32933944daad4b5160ae35 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_3fc312d2bf59904de049f28e60bbe9cc8e0894cd814df1915aa8ae8b58e69eba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fc312d2bf59904de049f28e60bbe9cc8e0894cd814df1915aa8ae8b58e69eba->enter($__internal_3fc312d2bf59904de049f28e60bbe9cc8e0894cd814df1915aa8ae8b58e69eba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3fc312d2bf59904de049f28e60bbe9cc8e0894cd814df1915aa8ae8b58e69eba->leave($__internal_3fc312d2bf59904de049f28e60bbe9cc8e0894cd814df1915aa8ae8b58e69eba_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6f9dcc933b6911344a461e45446d6fec838c9e532ec8b255a8a72f9b29b7581d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f9dcc933b6911344a461e45446d6fec838c9e532ec8b255a8a72f9b29b7581d->enter($__internal_6f9dcc933b6911344a461e45446d6fec838c9e532ec8b255a8a72f9b29b7581d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_6f9dcc933b6911344a461e45446d6fec838c9e532ec8b255a8a72f9b29b7581d->leave($__internal_6f9dcc933b6911344a461e45446d6fec838c9e532ec8b255a8a72f9b29b7581d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/reset.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\reset.html.twig");
    }
}
