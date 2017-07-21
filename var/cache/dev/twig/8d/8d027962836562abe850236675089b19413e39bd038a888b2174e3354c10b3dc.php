<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_376e4d6a4b4260f5e57bdec84dc4223c8f809df1cf58aab0ff68f57dba92302c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
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
        $__internal_885dc6b77b7a02aa78a7439a5e9e4bce98eb237bd898ee7c30e3f61a9be14d3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_885dc6b77b7a02aa78a7439a5e9e4bce98eb237bd898ee7c30e3f61a9be14d3b->enter($__internal_885dc6b77b7a02aa78a7439a5e9e4bce98eb237bd898ee7c30e3f61a9be14d3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_4edd14efd588cfb7e3b7c8b394fd87cc87a475c4c71f6dda8b6d79a3180b7fe4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4edd14efd588cfb7e3b7c8b394fd87cc87a475c4c71f6dda8b6d79a3180b7fe4->enter($__internal_4edd14efd588cfb7e3b7c8b394fd87cc87a475c4c71f6dda8b6d79a3180b7fe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_885dc6b77b7a02aa78a7439a5e9e4bce98eb237bd898ee7c30e3f61a9be14d3b->leave($__internal_885dc6b77b7a02aa78a7439a5e9e4bce98eb237bd898ee7c30e3f61a9be14d3b_prof);

        
        $__internal_4edd14efd588cfb7e3b7c8b394fd87cc87a475c4c71f6dda8b6d79a3180b7fe4->leave($__internal_4edd14efd588cfb7e3b7c8b394fd87cc87a475c4c71f6dda8b6d79a3180b7fe4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ed0ab386107b10a6fc625d17fd2dbbfec88e1fff325203070b958236dc22644a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed0ab386107b10a6fc625d17fd2dbbfec88e1fff325203070b958236dc22644a->enter($__internal_ed0ab386107b10a6fc625d17fd2dbbfec88e1fff325203070b958236dc22644a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8b86aa97685f596082ef0df3d0352bd5325a063b5f2aec0884aab0b7f56714ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b86aa97685f596082ef0df3d0352bd5325a063b5f2aec0884aab0b7f56714ad->enter($__internal_8b86aa97685f596082ef0df3d0352bd5325a063b5f2aec0884aab0b7f56714ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_8b86aa97685f596082ef0df3d0352bd5325a063b5f2aec0884aab0b7f56714ad->leave($__internal_8b86aa97685f596082ef0df3d0352bd5325a063b5f2aec0884aab0b7f56714ad_prof);

        
        $__internal_ed0ab386107b10a6fc625d17fd2dbbfec88e1fff325203070b958236dc22644a->leave($__internal_ed0ab386107b10a6fc625d17fd2dbbfec88e1fff325203070b958236dc22644a_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_5689f5f218514a383db0f0dbb7e348fbb3c7eb6decacbc4f2997b9d8aea0028f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5689f5f218514a383db0f0dbb7e348fbb3c7eb6decacbc4f2997b9d8aea0028f->enter($__internal_5689f5f218514a383db0f0dbb7e348fbb3c7eb6decacbc4f2997b9d8aea0028f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_236fd2a02920695d8eb9effe896120baec801d9fac76a6604f2e80455ce4da03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_236fd2a02920695d8eb9effe896120baec801d9fac76a6604f2e80455ce4da03->enter($__internal_236fd2a02920695d8eb9effe896120baec801d9fac76a6604f2e80455ce4da03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_236fd2a02920695d8eb9effe896120baec801d9fac76a6604f2e80455ce4da03->leave($__internal_236fd2a02920695d8eb9effe896120baec801d9fac76a6604f2e80455ce4da03_prof);

        
        $__internal_5689f5f218514a383db0f0dbb7e348fbb3c7eb6decacbc4f2997b9d8aea0028f->leave($__internal_5689f5f218514a383db0f0dbb7e348fbb3c7eb6decacbc4f2997b9d8aea0028f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
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
", "@WebProfiler/Profiler/open.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
