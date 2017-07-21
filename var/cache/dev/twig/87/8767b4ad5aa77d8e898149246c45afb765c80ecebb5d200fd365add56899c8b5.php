<?php

/* @OCCore/Default/index.html.twig */
class __TwigTemplate_e0c3f9750af8419fbf1d5305868ed520ddacb4babedb2af1157de53d01341955 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OCCoreBundle::layout.html.twig", "@OCCore/Default/index.html.twig", 1);
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
        $__internal_65d427c46e85c13a83eb492e7383eabeec70a5039eda6ae33dbb0266e46976c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65d427c46e85c13a83eb492e7383eabeec70a5039eda6ae33dbb0266e46976c7->enter($__internal_65d427c46e85c13a83eb492e7383eabeec70a5039eda6ae33dbb0266e46976c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCCore/Default/index.html.twig"));

        $__internal_2e1aa79e4c5af49e58f866b4f5fd7eb5a501f177d2f5fd81e7477da83fe657e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e1aa79e4c5af49e58f866b4f5fd7eb5a501f177d2f5fd81e7477da83fe657e4->enter($__internal_2e1aa79e4c5af49e58f866b4f5fd7eb5a501f177d2f5fd81e7477da83fe657e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCCore/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65d427c46e85c13a83eb492e7383eabeec70a5039eda6ae33dbb0266e46976c7->leave($__internal_65d427c46e85c13a83eb492e7383eabeec70a5039eda6ae33dbb0266e46976c7_prof);

        
        $__internal_2e1aa79e4c5af49e58f866b4f5fd7eb5a501f177d2f5fd81e7477da83fe657e4->leave($__internal_2e1aa79e4c5af49e58f866b4f5fd7eb5a501f177d2f5fd81e7477da83fe657e4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ab739798b70de53a9ce068475b402bb6b500f24317c1bc33ce7a1ffa3bb42a93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab739798b70de53a9ce068475b402bb6b500f24317c1bc33ce7a1ffa3bb42a93->enter($__internal_ab739798b70de53a9ce068475b402bb6b500f24317c1bc33ce7a1ffa3bb42a93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b9d3eba68f276d592599edceba90cda4f7400a3d63be7af9310be72d50acecb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9d3eba68f276d592599edceba90cda4f7400a3d63be7af9310be72d50acecb4->enter($__internal_b9d3eba68f276d592599edceba90cda4f7400a3d63be7af9310be72d50acecb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Index - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_b9d3eba68f276d592599edceba90cda4f7400a3d63be7af9310be72d50acecb4->leave($__internal_b9d3eba68f276d592599edceba90cda4f7400a3d63be7af9310be72d50acecb4_prof);

        
        $__internal_ab739798b70de53a9ce068475b402bb6b500f24317c1bc33ce7a1ffa3bb42a93->leave($__internal_ab739798b70de53a9ce068475b402bb6b500f24317c1bc33ce7a1ffa3bb42a93_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_894d255ecd7ba8c0771ab623f8043ab04832e1ba0741564be63f5c2d73dce758 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_894d255ecd7ba8c0771ab623f8043ab04832e1ba0741564be63f5c2d73dce758->enter($__internal_894d255ecd7ba8c0771ab623f8043ab04832e1ba0741564be63f5c2d73dce758_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_94fb7a6ebe88f849939311c85db4020e9a0f7fe74e0adcf06cc7594da1583b0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94fb7a6ebe88f849939311c85db4020e9a0f7fe74e0adcf06cc7594da1583b0b->enter($__internal_94fb7a6ebe88f849939311c85db4020e9a0f7fe74e0adcf06cc7594da1583b0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
    ";
        // line 10
        echo "    <h1>Annonces</h1>

    <hr>

    <p>
    ";
        // line 16
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 16, $this->getSourceContext()); })()), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 17
            echo "        <p>Message flash : ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    </p>

    <hr>
    ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("OCPlatformBundle:Advert:lastAnnonce", array("limit" => 3)));
        echo "
";
        
        $__internal_94fb7a6ebe88f849939311c85db4020e9a0f7fe74e0adcf06cc7594da1583b0b->leave($__internal_94fb7a6ebe88f849939311c85db4020e9a0f7fe74e0adcf06cc7594da1583b0b_prof);

        
        $__internal_894d255ecd7ba8c0771ab623f8043ab04832e1ba0741564be63f5c2d73dce758->leave($__internal_894d255ecd7ba8c0771ab623f8043ab04832e1ba0741564be63f5c2d73dce758_prof);

    }

    public function getTemplateName()
    {
        return "@OCCore/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 22,  96 => 19,  87 => 17,  82 => 16,  75 => 10,  72 => 8,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"OCCoreBundle::layout.html.twig\" %}

{% block title %}
    Index - {{ parent() }}
{% endblock %}

{% block body %}

    {# On définit un sous-titre commun à toutes les pages du bundle, par exemple #}
    <h1>Annonces</h1>

    <hr>

    <p>
    {# On affiche tous les messages flash dont le nom est « info » #}
    {% for message in app.session.flashbag.get('info') %}
        <p>Message flash : {{ message }}</p>
    {% endfor %}
    </p>

    <hr>
    {{ render(controller(\"OCPlatformBundle:Advert:lastAnnonce\", {'limit': 3})) }}
{% endblock %}", "@OCCore/Default/index.html.twig", "C:\\wamp64\\www\\Symfony\\src\\OC\\CoreBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
