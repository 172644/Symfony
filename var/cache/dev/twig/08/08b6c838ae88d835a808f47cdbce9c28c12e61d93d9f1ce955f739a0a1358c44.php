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
        $__internal_f816d4c4b3d77e2e5416cc739f87eec2de567ab4bff48af16c43e94d72223791 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f816d4c4b3d77e2e5416cc739f87eec2de567ab4bff48af16c43e94d72223791->enter($__internal_f816d4c4b3d77e2e5416cc739f87eec2de567ab4bff48af16c43e94d72223791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_a744289348e8c2c64e4995459da1fc78256646ed72a730cd3f85c55207ff16cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a744289348e8c2c64e4995459da1fc78256646ed72a730cd3f85c55207ff16cc->enter($__internal_a744289348e8c2c64e4995459da1fc78256646ed72a730cd3f85c55207ff16cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f816d4c4b3d77e2e5416cc739f87eec2de567ab4bff48af16c43e94d72223791->leave($__internal_f816d4c4b3d77e2e5416cc739f87eec2de567ab4bff48af16c43e94d72223791_prof);

        
        $__internal_a744289348e8c2c64e4995459da1fc78256646ed72a730cd3f85c55207ff16cc->leave($__internal_a744289348e8c2c64e4995459da1fc78256646ed72a730cd3f85c55207ff16cc_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_67f20ed1a4d25bd3137c6941417b70e0646ed9ffbb76094907b5f19b5bf35f83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67f20ed1a4d25bd3137c6941417b70e0646ed9ffbb76094907b5f19b5bf35f83->enter($__internal_67f20ed1a4d25bd3137c6941417b70e0646ed9ffbb76094907b5f19b5bf35f83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_07f93535c99a72ae89335eec1bf37a121ed3b663dc03731a331f7d15357a1031 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07f93535c99a72ae89335eec1bf37a121ed3b663dc03731a331f7d15357a1031->enter($__internal_07f93535c99a72ae89335eec1bf37a121ed3b663dc03731a331f7d15357a1031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_07f93535c99a72ae89335eec1bf37a121ed3b663dc03731a331f7d15357a1031->leave($__internal_07f93535c99a72ae89335eec1bf37a121ed3b663dc03731a331f7d15357a1031_prof);

        
        $__internal_67f20ed1a4d25bd3137c6941417b70e0646ed9ffbb76094907b5f19b5bf35f83->leave($__internal_67f20ed1a4d25bd3137c6941417b70e0646ed9ffbb76094907b5f19b5bf35f83_prof);

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
