<?php

/* @OCPlatform/Advert/edit.html.twig */
class __TwigTemplate_63c1dc4b7f7fe671a6e6d4cab21b851c08df279164e333af1db1e12c9b679e11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "@OCPlatform/Advert/edit.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ce883e437f11224af0efc3cccf9df46cc9ca14ee7402d3d04e0e1d0e568d1e40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce883e437f11224af0efc3cccf9df46cc9ca14ee7402d3d04e0e1d0e568d1e40->enter($__internal_ce883e437f11224af0efc3cccf9df46cc9ca14ee7402d3d04e0e1d0e568d1e40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCPlatform/Advert/edit.html.twig"));

        $__internal_dfd8af168d1eca6d56a1683d4d499a51c709c7acb0e0ac153330324c5984864b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfd8af168d1eca6d56a1683d4d499a51c709c7acb0e0ac153330324c5984864b->enter($__internal_dfd8af168d1eca6d56a1683d4d499a51c709c7acb0e0ac153330324c5984864b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCPlatform/Advert/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce883e437f11224af0efc3cccf9df46cc9ca14ee7402d3d04e0e1d0e568d1e40->leave($__internal_ce883e437f11224af0efc3cccf9df46cc9ca14ee7402d3d04e0e1d0e568d1e40_prof);

        
        $__internal_dfd8af168d1eca6d56a1683d4d499a51c709c7acb0e0ac153330324c5984864b->leave($__internal_dfd8af168d1eca6d56a1683d4d499a51c709c7acb0e0ac153330324c5984864b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5453610fc2c36548f9236613d80bc774e0cc9bb85dd3d692c0ccc5d68a6e1c2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5453610fc2c36548f9236613d80bc774e0cc9bb85dd3d692c0ccc5d68a6e1c2c->enter($__internal_5453610fc2c36548f9236613d80bc774e0cc9bb85dd3d692c0ccc5d68a6e1c2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_598ff292d88fc0b6be633a9d378e9c0c38ac2e6f8adf92a265110fb322cb6eac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_598ff292d88fc0b6be633a9d378e9c0c38ac2e6f8adf92a265110fb322cb6eac->enter($__internal_598ff292d88fc0b6be633a9d378e9c0c38ac2e6f8adf92a265110fb322cb6eac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Modifier une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_598ff292d88fc0b6be633a9d378e9c0c38ac2e6f8adf92a265110fb322cb6eac->leave($__internal_598ff292d88fc0b6be633a9d378e9c0c38ac2e6f8adf92a265110fb322cb6eac_prof);

        
        $__internal_5453610fc2c36548f9236613d80bc774e0cc9bb85dd3d692c0ccc5d68a6e1c2c->leave($__internal_5453610fc2c36548f9236613d80bc774e0cc9bb85dd3d692c0ccc5d68a6e1c2c_prof);

    }

    // line 7
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_26c8eff30493d0ef497249fe5ce03999c921ada087009f9c74ab08a70d0fd8e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26c8eff30493d0ef497249fe5ce03999c921ada087009f9c74ab08a70d0fd8e6->enter($__internal_26c8eff30493d0ef497249fe5ce03999c921ada087009f9c74ab08a70d0fd8e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_97edd4df371ed3e86db9e82952438c92a80a736fb88bf6e26c98142bb0a8a24e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97edd4df371ed3e86db9e82952438c92a80a736fb88bf6e26c98142bb0a8a24e->enter($__internal_97edd4df371ed3e86db9e82952438c92a80a736fb88bf6e26c98142bb0a8a24e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 8
        echo "
    <h2>Modifier une annonce</h2>

    ";
        // line 11
        echo twig_include($this->env, $context, "OCPlatformBundle:Advert:form.html.twig");
        echo "

    <p>
        Vous éditez une annonce déjà existante, merci de ne pas changer
        l'esprit général de l'annonce déjà publiée.
    </p>

    <p>
        <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_view", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 19, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour à l'annonce
        </a>
    </p>

";
        
        $__internal_97edd4df371ed3e86db9e82952438c92a80a736fb88bf6e26c98142bb0a8a24e->leave($__internal_97edd4df371ed3e86db9e82952438c92a80a736fb88bf6e26c98142bb0a8a24e_prof);

        
        $__internal_26c8eff30493d0ef497249fe5ce03999c921ada087009f9c74ab08a70d0fd8e6->leave($__internal_26c8eff30493d0ef497249fe5ce03999c921ada087009f9c74ab08a70d0fd8e6_prof);

    }

    public function getTemplateName()
    {
        return "@OCPlatform/Advert/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 19,  77 => 11,  72 => 8,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"OCPlatformBundle::layout.html.twig\" %}

{% block title %}
    Modifier une annonce - {{ parent() }}
{% endblock %}

{% block ocplatform_body %}

    <h2>Modifier une annonce</h2>

    {{ include(\"OCPlatformBundle:Advert:form.html.twig\") }}

    <p>
        Vous éditez une annonce déjà existante, merci de ne pas changer
        l'esprit général de l'annonce déjà publiée.
    </p>

    <p>
        <a href=\"{{ path('oc_platform_view', {'id': advert.id}) }}\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour à l'annonce
        </a>
    </p>

{% endblock %}", "@OCPlatform/Advert/edit.html.twig", "C:\\wamp64\\www\\Symfony\\src\\OC\\PlatformBundle\\Resources\\views\\Advert\\edit.html.twig");
    }
}
