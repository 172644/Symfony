<?php

/* @OCCore/Default/index.html.twig */
class __TwigTemplate_76fa205051a068b5a665827a931eb156b0fa25871857602a93fa0cd0c8af77ba extends Twig_Template
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
        $__internal_0e8729f9262c44b1c4e00454b45904e06ca71805061abcce1740d9de269862db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e8729f9262c44b1c4e00454b45904e06ca71805061abcce1740d9de269862db->enter($__internal_0e8729f9262c44b1c4e00454b45904e06ca71805061abcce1740d9de269862db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCCore/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e8729f9262c44b1c4e00454b45904e06ca71805061abcce1740d9de269862db->leave($__internal_0e8729f9262c44b1c4e00454b45904e06ca71805061abcce1740d9de269862db_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8dd1b48ff05c458706f7b280a3192c4a6cae252accc2818ea40b71c0f606c906 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dd1b48ff05c458706f7b280a3192c4a6cae252accc2818ea40b71c0f606c906->enter($__internal_8dd1b48ff05c458706f7b280a3192c4a6cae252accc2818ea40b71c0f606c906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Index - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_8dd1b48ff05c458706f7b280a3192c4a6cae252accc2818ea40b71c0f606c906->leave($__internal_8dd1b48ff05c458706f7b280a3192c4a6cae252accc2818ea40b71c0f606c906_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_73a8c51dfea73ccb1f0e3eea8e6540863cd46b20af39b3967e1b9b1861f8c69e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73a8c51dfea73ccb1f0e3eea8e6540863cd46b20af39b3967e1b9b1861f8c69e->enter($__internal_73a8c51dfea73ccb1f0e3eea8e6540863cd46b20af39b3967e1b9b1861f8c69e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_73a8c51dfea73ccb1f0e3eea8e6540863cd46b20af39b3967e1b9b1861f8c69e->leave($__internal_73a8c51dfea73ccb1f0e3eea8e6540863cd46b20af39b3967e1b9b1861f8c69e_prof);

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
        return array (  86 => 22,  81 => 19,  72 => 17,  67 => 16,  60 => 10,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
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
