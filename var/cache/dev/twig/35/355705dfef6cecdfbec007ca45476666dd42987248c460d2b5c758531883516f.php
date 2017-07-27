<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_7f5d1861be71f65954f306925c0f41bbb4010e8c1b0581b97f07e8cbb01042f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_2e7c4faad986a52d4bd8de19686cc15d8ccb0a85459e0260799a1e69e57b89df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e7c4faad986a52d4bd8de19686cc15d8ccb0a85459e0260799a1e69e57b89df->enter($__internal_2e7c4faad986a52d4bd8de19686cc15d8ccb0a85459e0260799a1e69e57b89df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_2cedb06b655c4c67dc787401b7f817999bd5f2988895b51f6e9dcdae531226f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cedb06b655c4c67dc787401b7f817999bd5f2988895b51f6e9dcdae531226f9->enter($__internal_2cedb06b655c4c67dc787401b7f817999bd5f2988895b51f6e9dcdae531226f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e7c4faad986a52d4bd8de19686cc15d8ccb0a85459e0260799a1e69e57b89df->leave($__internal_2e7c4faad986a52d4bd8de19686cc15d8ccb0a85459e0260799a1e69e57b89df_prof);

        
        $__internal_2cedb06b655c4c67dc787401b7f817999bd5f2988895b51f6e9dcdae531226f9->leave($__internal_2cedb06b655c4c67dc787401b7f817999bd5f2988895b51f6e9dcdae531226f9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e30d64c3269817a026163b018706ac466a89dddc2a542a0c32f6d383a3d4eddb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e30d64c3269817a026163b018706ac466a89dddc2a542a0c32f6d383a3d4eddb->enter($__internal_e30d64c3269817a026163b018706ac466a89dddc2a542a0c32f6d383a3d4eddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_4223b40c8512c5f41971c25d210ac3a07e284a3c4e88a701bd7941844598fd58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4223b40c8512c5f41971c25d210ac3a07e284a3c4e88a701bd7941844598fd58->enter($__internal_4223b40c8512c5f41971c25d210ac3a07e284a3c4e88a701bd7941844598fd58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4223b40c8512c5f41971c25d210ac3a07e284a3c4e88a701bd7941844598fd58->leave($__internal_4223b40c8512c5f41971c25d210ac3a07e284a3c4e88a701bd7941844598fd58_prof);

        
        $__internal_e30d64c3269817a026163b018706ac466a89dddc2a542a0c32f6d383a3d4eddb->leave($__internal_e30d64c3269817a026163b018706ac466a89dddc2a542a0c32f6d383a3d4eddb_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_284c20a496bdf5af4de18964a121b713258c7afef0e2d79e82403f6974557fe5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_284c20a496bdf5af4de18964a121b713258c7afef0e2d79e82403f6974557fe5->enter($__internal_284c20a496bdf5af4de18964a121b713258c7afef0e2d79e82403f6974557fe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_bb66bb206342f32442b453506d9755ed8f99553134d41d469516840a52e1740f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb66bb206342f32442b453506d9755ed8f99553134d41d469516840a52e1740f->enter($__internal_bb66bb206342f32442b453506d9755ed8f99553134d41d469516840a52e1740f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_bb66bb206342f32442b453506d9755ed8f99553134d41d469516840a52e1740f->leave($__internal_bb66bb206342f32442b453506d9755ed8f99553134d41d469516840a52e1740f_prof);

        
        $__internal_284c20a496bdf5af4de18964a121b713258c7afef0e2d79e82403f6974557fe5->leave($__internal_284c20a496bdf5af4de18964a121b713258c7afef0e2d79e82403f6974557fe5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9438156eca8b5a5f8cd8cf0b789167902cee107b65b3db03044173233e7b2606 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9438156eca8b5a5f8cd8cf0b789167902cee107b65b3db03044173233e7b2606->enter($__internal_9438156eca8b5a5f8cd8cf0b789167902cee107b65b3db03044173233e7b2606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f872a235450a7871f97ef2133075a9f91ec4010fea63240c790f6003056be79f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f872a235450a7871f97ef2133075a9f91ec4010fea63240c790f6003056be79f->enter($__internal_f872a235450a7871f97ef2133075a9f91ec4010fea63240c790f6003056be79f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_f872a235450a7871f97ef2133075a9f91ec4010fea63240c790f6003056be79f->leave($__internal_f872a235450a7871f97ef2133075a9f91ec4010fea63240c790f6003056be79f_prof);

        
        $__internal_9438156eca8b5a5f8cd8cf0b789167902cee107b65b3db03044173233e7b2606->leave($__internal_9438156eca8b5a5f8cd8cf0b789167902cee107b65b3db03044173233e7b2606_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
