<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_253f4455dd53903a2209b02c9008f6a12569f7745c0be277d4b1c6fafdd9b775 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
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
        $__internal_cd5c641e3e9e84bc9fe56becedf34a85f50483e22d191c8929261f05a36508ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd5c641e3e9e84bc9fe56becedf34a85f50483e22d191c8929261f05a36508ad->enter($__internal_cd5c641e3e9e84bc9fe56becedf34a85f50483e22d191c8929261f05a36508ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_968d04be28d32f0f24b00ffb05563f0755767a552a3fea5a91269ccc49829a55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_968d04be28d32f0f24b00ffb05563f0755767a552a3fea5a91269ccc49829a55->enter($__internal_968d04be28d32f0f24b00ffb05563f0755767a552a3fea5a91269ccc49829a55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd5c641e3e9e84bc9fe56becedf34a85f50483e22d191c8929261f05a36508ad->leave($__internal_cd5c641e3e9e84bc9fe56becedf34a85f50483e22d191c8929261f05a36508ad_prof);

        
        $__internal_968d04be28d32f0f24b00ffb05563f0755767a552a3fea5a91269ccc49829a55->leave($__internal_968d04be28d32f0f24b00ffb05563f0755767a552a3fea5a91269ccc49829a55_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_36e45f2ce654d60ae61db2433ee7882864b7ac265c29970619238f44ec9a870e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36e45f2ce654d60ae61db2433ee7882864b7ac265c29970619238f44ec9a870e->enter($__internal_36e45f2ce654d60ae61db2433ee7882864b7ac265c29970619238f44ec9a870e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a9c045ba8881bd9af18394bbf0083b000afa2bf36a90898b67b081bd0a8033e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9c045ba8881bd9af18394bbf0083b000afa2bf36a90898b67b081bd0a8033e9->enter($__internal_a9c045ba8881bd9af18394bbf0083b000afa2bf36a90898b67b081bd0a8033e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_a9c045ba8881bd9af18394bbf0083b000afa2bf36a90898b67b081bd0a8033e9->leave($__internal_a9c045ba8881bd9af18394bbf0083b000afa2bf36a90898b67b081bd0a8033e9_prof);

        
        $__internal_36e45f2ce654d60ae61db2433ee7882864b7ac265c29970619238f44ec9a870e->leave($__internal_36e45f2ce654d60ae61db2433ee7882864b7ac265c29970619238f44ec9a870e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
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
", "@WebProfiler/Collector/ajax.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
