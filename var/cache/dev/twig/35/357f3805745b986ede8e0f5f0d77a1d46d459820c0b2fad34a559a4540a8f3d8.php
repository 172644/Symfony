<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_539de4daa842b56d39adcb44883d9df9b5da71560205ef69bce334143711567e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_be67f45cdb9fa7804cfacce52b748578c71c9407742810bea20069b8e1f887a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be67f45cdb9fa7804cfacce52b748578c71c9407742810bea20069b8e1f887a0->enter($__internal_be67f45cdb9fa7804cfacce52b748578c71c9407742810bea20069b8e1f887a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_ee28f8634b8c0b777354f06e89b69ed71229809fb79762b7df434cbd90ca7d59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee28f8634b8c0b777354f06e89b69ed71229809fb79762b7df434cbd90ca7d59->enter($__internal_ee28f8634b8c0b777354f06e89b69ed71229809fb79762b7df434cbd90ca7d59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be67f45cdb9fa7804cfacce52b748578c71c9407742810bea20069b8e1f887a0->leave($__internal_be67f45cdb9fa7804cfacce52b748578c71c9407742810bea20069b8e1f887a0_prof);

        
        $__internal_ee28f8634b8c0b777354f06e89b69ed71229809fb79762b7df434cbd90ca7d59->leave($__internal_ee28f8634b8c0b777354f06e89b69ed71229809fb79762b7df434cbd90ca7d59_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_00f48e42c29bb579049f6f658dc8913f0aee39f4c8589c45436c3d513906ce1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00f48e42c29bb579049f6f658dc8913f0aee39f4c8589c45436c3d513906ce1f->enter($__internal_00f48e42c29bb579049f6f658dc8913f0aee39f4c8589c45436c3d513906ce1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_22f22aca74396530438d04c579e815f1d22dd2db5a112af989e843c0fe1434c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22f22aca74396530438d04c579e815f1d22dd2db5a112af989e843c0fe1434c4->enter($__internal_22f22aca74396530438d04c579e815f1d22dd2db5a112af989e843c0fe1434c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_22f22aca74396530438d04c579e815f1d22dd2db5a112af989e843c0fe1434c4->leave($__internal_22f22aca74396530438d04c579e815f1d22dd2db5a112af989e843c0fe1434c4_prof);

        
        $__internal_00f48e42c29bb579049f6f658dc8913f0aee39f4c8589c45436c3d513906ce1f->leave($__internal_00f48e42c29bb579049f6f658dc8913f0aee39f4c8589c45436c3d513906ce1f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_266abb3723a3fd31c5b91c8b38f1035db8e8827ea605081b36ce76d038e45cef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_266abb3723a3fd31c5b91c8b38f1035db8e8827ea605081b36ce76d038e45cef->enter($__internal_266abb3723a3fd31c5b91c8b38f1035db8e8827ea605081b36ce76d038e45cef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d0cf1c704baaeaf744e7cda8cfcc36d93a99bc10627b1a4fd50842293d535039 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0cf1c704baaeaf744e7cda8cfcc36d93a99bc10627b1a4fd50842293d535039->enter($__internal_d0cf1c704baaeaf744e7cda8cfcc36d93a99bc10627b1a4fd50842293d535039_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d0cf1c704baaeaf744e7cda8cfcc36d93a99bc10627b1a4fd50842293d535039->leave($__internal_d0cf1c704baaeaf744e7cda8cfcc36d93a99bc10627b1a4fd50842293d535039_prof);

        
        $__internal_266abb3723a3fd31c5b91c8b38f1035db8e8827ea605081b36ce76d038e45cef->leave($__internal_266abb3723a3fd31c5b91c8b38f1035db8e8827ea605081b36ce76d038e45cef_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_60782e8ed238c6b5b6c3760a06dc83e9d82bdacc922ddde59e03b889eafa9f96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60782e8ed238c6b5b6c3760a06dc83e9d82bdacc922ddde59e03b889eafa9f96->enter($__internal_60782e8ed238c6b5b6c3760a06dc83e9d82bdacc922ddde59e03b889eafa9f96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d2ff7b97517341e37d486d6c42126dadae88abc17691ad0373b0eede4f49a505 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2ff7b97517341e37d486d6c42126dadae88abc17691ad0373b0eede4f49a505->enter($__internal_d2ff7b97517341e37d486d6c42126dadae88abc17691ad0373b0eede4f49a505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_d2ff7b97517341e37d486d6c42126dadae88abc17691ad0373b0eede4f49a505->leave($__internal_d2ff7b97517341e37d486d6c42126dadae88abc17691ad0373b0eede4f49a505_prof);

        
        $__internal_60782e8ed238c6b5b6c3760a06dc83e9d82bdacc922ddde59e03b889eafa9f96->leave($__internal_60782e8ed238c6b5b6c3760a06dc83e9d82bdacc922ddde59e03b889eafa9f96_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
