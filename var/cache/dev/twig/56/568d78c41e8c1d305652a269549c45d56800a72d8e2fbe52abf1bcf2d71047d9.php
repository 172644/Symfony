<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_d5d10ad18fc6db7d243904774a86a59149eae0f72c9b9adfa73f96ac40f379f1 extends Twig_Template
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
        $__internal_2f0948e1c315b9a5a7a1455fe9c81fbbc653a0a3940eefdba4a68e345d7064a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f0948e1c315b9a5a7a1455fe9c81fbbc653a0a3940eefdba4a68e345d7064a4->enter($__internal_2f0948e1c315b9a5a7a1455fe9c81fbbc653a0a3940eefdba4a68e345d7064a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $__internal_0cb877a10ad671754d7f4d5dc8677c90bd0d9c8d62b2346c04a6888a32f54526 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cb877a10ad671754d7f4d5dc8677c90bd0d9c8d62b2346c04a6888a32f54526->enter($__internal_0cb877a10ad671754d7f4d5dc8677c90bd0d9c8d62b2346c04a6888a32f54526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f0948e1c315b9a5a7a1455fe9c81fbbc653a0a3940eefdba4a68e345d7064a4->leave($__internal_2f0948e1c315b9a5a7a1455fe9c81fbbc653a0a3940eefdba4a68e345d7064a4_prof);

        
        $__internal_0cb877a10ad671754d7f4d5dc8677c90bd0d9c8d62b2346c04a6888a32f54526->leave($__internal_0cb877a10ad671754d7f4d5dc8677c90bd0d9c8d62b2346c04a6888a32f54526_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e5d6ef516efa16106cd2d19ef765fc2c10ca59a754ddd1653325665254a8e802 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5d6ef516efa16106cd2d19ef765fc2c10ca59a754ddd1653325665254a8e802->enter($__internal_e5d6ef516efa16106cd2d19ef765fc2c10ca59a754ddd1653325665254a8e802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_23f897c974df032656ed7ad701f640e9971644e9910ed56e1ee5036dce38b8fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23f897c974df032656ed7ad701f640e9971644e9910ed56e1ee5036dce38b8fe->enter($__internal_23f897c974df032656ed7ad701f640e9971644e9910ed56e1ee5036dce38b8fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_23f897c974df032656ed7ad701f640e9971644e9910ed56e1ee5036dce38b8fe->leave($__internal_23f897c974df032656ed7ad701f640e9971644e9910ed56e1ee5036dce38b8fe_prof);

        
        $__internal_e5d6ef516efa16106cd2d19ef765fc2c10ca59a754ddd1653325665254a8e802->leave($__internal_e5d6ef516efa16106cd2d19ef765fc2c10ca59a754ddd1653325665254a8e802_prof);

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
        return array (  49 => 4,  40 => 3,  11 => 1,);
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
