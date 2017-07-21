<?php

/* OCCoreBundle:Default:contact.html.twig */
class __TwigTemplate_03c54bff649430a405e8047fb64aa6030a75fec22e01ec55797e98fac26f61d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OCCoreBundle::layout.html.twig", "OCCoreBundle:Default:contact.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b7430444a07a1c66a4dba2f4310e9720bb2d687d20e6e9810c470b73f59ab64c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7430444a07a1c66a4dba2f4310e9720bb2d687d20e6e9810c470b73f59ab64c->enter($__internal_b7430444a07a1c66a4dba2f4310e9720bb2d687d20e6e9810c470b73f59ab64c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCCoreBundle:Default:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7430444a07a1c66a4dba2f4310e9720bb2d687d20e6e9810c470b73f59ab64c->leave($__internal_b7430444a07a1c66a4dba2f4310e9720bb2d687d20e6e9810c470b73f59ab64c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3a2cc68206b4278eb383427da72ee5eefc5e95586450b0d38fb9509e9cb25092 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a2cc68206b4278eb383427da72ee5eefc5e95586450b0d38fb9509e9cb25092->enter($__internal_3a2cc68206b4278eb383427da72ee5eefc5e95586450b0d38fb9509e9cb25092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Index - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_3a2cc68206b4278eb383427da72ee5eefc5e95586450b0d38fb9509e9cb25092->leave($__internal_3a2cc68206b4278eb383427da72ee5eefc5e95586450b0d38fb9509e9cb25092_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_dfb99193441a6d04b7dc3a2448ee702a707f304ba10b7033a163696b1b84096a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfb99193441a6d04b7dc3a2448ee702a707f304ba10b7033a163696b1b84096a->enter($__internal_dfb99193441a6d04b7dc3a2448ee702a707f304ba10b7033a163696b1b84096a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
    ";
        // line 10
        echo "    <h1>Contact</h1>

    <hr>
";
        
        $__internal_dfb99193441a6d04b7dc3a2448ee702a707f304ba10b7033a163696b1b84096a->leave($__internal_dfb99193441a6d04b7dc3a2448ee702a707f304ba10b7033a163696b1b84096a_prof);

    }

    public function getTemplateName()
    {
        return "OCCoreBundle:Default:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 10,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"OCCoreBundle::layout.html.twig\" %}

{% block title %}
    Index - {{ parent() }}
{% endblock %}

{% block body %}

    {# On définit un sous-titre commun à toutes les pages du bundle, par exemple #}
    <h1>Contact</h1>

    <hr>
{% endblock %}", "OCCoreBundle:Default:contact.html.twig", "C:\\wamp64\\www\\Symfony\\src\\OC\\CoreBundle/Resources/views/Default/contact.html.twig");
    }
}
