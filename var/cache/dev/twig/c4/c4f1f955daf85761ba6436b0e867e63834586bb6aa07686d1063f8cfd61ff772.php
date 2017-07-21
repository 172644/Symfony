<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_3a807cf3cadd4e1e1ac4561f06d440985784053e328e220e48b379cc09471023 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f942e63c72ae217e64a492c74f5458188227300c68d47370b42d55161c54d8b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f942e63c72ae217e64a492c74f5458188227300c68d47370b42d55161c54d8b3->enter($__internal_f942e63c72ae217e64a492c74f5458188227300c68d47370b42d55161c54d8b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_7851febc7d3ce32e005ab218ea34bbe6459e1f5036ee158232ced7fd3f27cd0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7851febc7d3ce32e005ab218ea34bbe6459e1f5036ee158232ced7fd3f27cd0d->enter($__internal_7851febc7d3ce32e005ab218ea34bbe6459e1f5036ee158232ced7fd3f27cd0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f942e63c72ae217e64a492c74f5458188227300c68d47370b42d55161c54d8b3->leave($__internal_f942e63c72ae217e64a492c74f5458188227300c68d47370b42d55161c54d8b3_prof);

        
        $__internal_7851febc7d3ce32e005ab218ea34bbe6459e1f5036ee158232ced7fd3f27cd0d->leave($__internal_7851febc7d3ce32e005ab218ea34bbe6459e1f5036ee158232ced7fd3f27cd0d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2179069a6df0debbb485fa14adeb2529c4bae9aeab7962307b966701408a928e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2179069a6df0debbb485fa14adeb2529c4bae9aeab7962307b966701408a928e->enter($__internal_2179069a6df0debbb485fa14adeb2529c4bae9aeab7962307b966701408a928e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_5dbd7a8c0f367042a2b623b4bfa576c7b6c47f6a49772c9182815479e316b527 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dbd7a8c0f367042a2b623b4bfa576c7b6c47f6a49772c9182815479e316b527->enter($__internal_5dbd7a8c0f367042a2b623b4bfa576c7b6c47f6a49772c9182815479e316b527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_5dbd7a8c0f367042a2b623b4bfa576c7b6c47f6a49772c9182815479e316b527->leave($__internal_5dbd7a8c0f367042a2b623b4bfa576c7b6c47f6a49772c9182815479e316b527_prof);

        
        $__internal_2179069a6df0debbb485fa14adeb2529c4bae9aeab7962307b966701408a928e->leave($__internal_2179069a6df0debbb485fa14adeb2529c4bae9aeab7962307b966701408a928e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
