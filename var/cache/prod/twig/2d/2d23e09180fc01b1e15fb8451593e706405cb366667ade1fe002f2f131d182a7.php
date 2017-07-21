<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_7fa18b01db2396667276ac66d8c2199de20f117265d9ee81cd384f61a3b4b97b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_583a1b4a49c3820557e41cad039648438ab0f0069237471d12c374c07af86678 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_583a1b4a49c3820557e41cad039648438ab0f0069237471d12c374c07af86678->enter($__internal_583a1b4a49c3820557e41cad039648438ab0f0069237471d12c374c07af86678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_583a1b4a49c3820557e41cad039648438ab0f0069237471d12c374c07af86678->leave($__internal_583a1b4a49c3820557e41cad039648438ab0f0069237471d12c374c07af86678_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bba903b075691e0fa62f504b7a3af8520a805b60e6924c5ba7de20c318860fdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bba903b075691e0fa62f504b7a3af8520a805b60e6924c5ba7de20c318860fdb->enter($__internal_bba903b075691e0fa62f504b7a3af8520a805b60e6924c5ba7de20c318860fdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_bba903b075691e0fa62f504b7a3af8520a805b60e6924c5ba7de20c318860fdb->leave($__internal_bba903b075691e0fa62f504b7a3af8520a805b60e6924c5ba7de20c318860fdb_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
", "@FOSUser/Group/list.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\list.html.twig");
    }
}
