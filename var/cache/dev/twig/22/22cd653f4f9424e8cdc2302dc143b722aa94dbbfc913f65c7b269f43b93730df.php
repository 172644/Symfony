<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_069caf8048835f12f1e0133cfa09710cf05189572d6490563ac84d007a1cd99a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_665437ebeb9c71d7664539d218cfd8719548cd64119f96437e4f906c68c1fdf4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_665437ebeb9c71d7664539d218cfd8719548cd64119f96437e4f906c68c1fdf4->enter($__internal_665437ebeb9c71d7664539d218cfd8719548cd64119f96437e4f906c68c1fdf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_61b40e19d1ae22f5c4d7a117527e86a2a47876fcae992041a4349a59d4270b6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61b40e19d1ae22f5c4d7a117527e86a2a47876fcae992041a4349a59d4270b6a->enter($__internal_61b40e19d1ae22f5c4d7a117527e86a2a47876fcae992041a4349a59d4270b6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_665437ebeb9c71d7664539d218cfd8719548cd64119f96437e4f906c68c1fdf4->leave($__internal_665437ebeb9c71d7664539d218cfd8719548cd64119f96437e4f906c68c1fdf4_prof);

        
        $__internal_61b40e19d1ae22f5c4d7a117527e86a2a47876fcae992041a4349a59d4270b6a->leave($__internal_61b40e19d1ae22f5c4d7a117527e86a2a47876fcae992041a4349a59d4270b6a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1a6a12d3a05e7b02935b250514652055ccdc2f3016196a9ed5c0236af94cbe16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a6a12d3a05e7b02935b250514652055ccdc2f3016196a9ed5c0236af94cbe16->enter($__internal_1a6a12d3a05e7b02935b250514652055ccdc2f3016196a9ed5c0236af94cbe16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_cd4e5010dcb30cbd8455eaabb52b00fc1bec744bdd1db690351aa490af2334df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd4e5010dcb30cbd8455eaabb52b00fc1bec744bdd1db690351aa490af2334df->enter($__internal_cd4e5010dcb30cbd8455eaabb52b00fc1bec744bdd1db690351aa490af2334df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_cd4e5010dcb30cbd8455eaabb52b00fc1bec744bdd1db690351aa490af2334df->leave($__internal_cd4e5010dcb30cbd8455eaabb52b00fc1bec744bdd1db690351aa490af2334df_prof);

        
        $__internal_1a6a12d3a05e7b02935b250514652055ccdc2f3016196a9ed5c0236af94cbe16->leave($__internal_1a6a12d3a05e7b02935b250514652055ccdc2f3016196a9ed5c0236af94cbe16_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_f1b08e9f741371cf9cf2d2393eabb1a6522867cefdeac02863c9bc81e64afacd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1b08e9f741371cf9cf2d2393eabb1a6522867cefdeac02863c9bc81e64afacd->enter($__internal_f1b08e9f741371cf9cf2d2393eabb1a6522867cefdeac02863c9bc81e64afacd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a775c967ad41bf2daff0dffb670130b3d3fceb7d38cb8dc13f23a17bb2bece3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a775c967ad41bf2daff0dffb670130b3d3fceb7d38cb8dc13f23a17bb2bece3b->enter($__internal_a775c967ad41bf2daff0dffb670130b3d3fceb7d38cb8dc13f23a17bb2bece3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new Twig_Error_Runtime('Variable "file" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new Twig_Error_Runtime('Variable "filename" does not exist.', 15, $this->getSourceContext()); })()), (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 15, $this->getSourceContext()); })()),  -1);
        echo "
</div>
";
        
        $__internal_a775c967ad41bf2daff0dffb670130b3d3fceb7d38cb8dc13f23a17bb2bece3b->leave($__internal_a775c967ad41bf2daff0dffb670130b3d3fceb7d38cb8dc13f23a17bb2bece3b_prof);

        
        $__internal_f1b08e9f741371cf9cf2d2393eabb1a6522867cefdeac02863c9bc81e64afacd->leave($__internal_f1b08e9f741371cf9cf2d2393eabb1a6522867cefdeac02863c9bc81e64afacd_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
