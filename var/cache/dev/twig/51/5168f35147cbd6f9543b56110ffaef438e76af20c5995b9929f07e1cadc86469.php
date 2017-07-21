<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_9948a212c9fdd672db0ba194e7b4908650b870a4b872f9f40a490f9347792eee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_285e696211f6af4f1e76aaa95b0a719d02ebeb1e9e629668dac36eabbe4f0806 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_285e696211f6af4f1e76aaa95b0a719d02ebeb1e9e629668dac36eabbe4f0806->enter($__internal_285e696211f6af4f1e76aaa95b0a719d02ebeb1e9e629668dac36eabbe4f0806_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_154f2a47ea315e66d759bdd405a3a34d855e7fea8a11d98e0786cca006408f56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_154f2a47ea315e66d759bdd405a3a34d855e7fea8a11d98e0786cca006408f56->enter($__internal_154f2a47ea315e66d759bdd405a3a34d855e7fea8a11d98e0786cca006408f56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_285e696211f6af4f1e76aaa95b0a719d02ebeb1e9e629668dac36eabbe4f0806->leave($__internal_285e696211f6af4f1e76aaa95b0a719d02ebeb1e9e629668dac36eabbe4f0806_prof);

        
        $__internal_154f2a47ea315e66d759bdd405a3a34d855e7fea8a11d98e0786cca006408f56->leave($__internal_154f2a47ea315e66d759bdd405a3a34d855e7fea8a11d98e0786cca006408f56_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_907183866f90e4b98d90845d14def94e77618d206d8982f725b49b7d8bffad4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_907183866f90e4b98d90845d14def94e77618d206d8982f725b49b7d8bffad4e->enter($__internal_907183866f90e4b98d90845d14def94e77618d206d8982f725b49b7d8bffad4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c9395ca8e94517cb87dcc30d56893c4af54aa8b1b24d7ae21b4a2bc53739c7be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9395ca8e94517cb87dcc30d56893c4af54aa8b1b24d7ae21b4a2bc53739c7be->enter($__internal_c9395ca8e94517cb87dcc30d56893c4af54aa8b1b24d7ae21b4a2bc53739c7be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_c9395ca8e94517cb87dcc30d56893c4af54aa8b1b24d7ae21b4a2bc53739c7be->leave($__internal_c9395ca8e94517cb87dcc30d56893c4af54aa8b1b24d7ae21b4a2bc53739c7be_prof);

        
        $__internal_907183866f90e4b98d90845d14def94e77618d206d8982f725b49b7d8bffad4e->leave($__internal_907183866f90e4b98d90845d14def94e77618d206d8982f725b49b7d8bffad4e_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d26a9006656e3e0b7604cc0b070ea9807b271700f60ae14b8461199833e28edc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d26a9006656e3e0b7604cc0b070ea9807b271700f60ae14b8461199833e28edc->enter($__internal_d26a9006656e3e0b7604cc0b070ea9807b271700f60ae14b8461199833e28edc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_60ffdfd79b15f8c8f196ad748bb208d52da49ddf667fb00ca171c640bfdf4223 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60ffdfd79b15f8c8f196ad748bb208d52da49ddf667fb00ca171c640bfdf4223->enter($__internal_60ffdfd79b15f8c8f196ad748bb208d52da49ddf667fb00ca171c640bfdf4223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_60ffdfd79b15f8c8f196ad748bb208d52da49ddf667fb00ca171c640bfdf4223->leave($__internal_60ffdfd79b15f8c8f196ad748bb208d52da49ddf667fb00ca171c640bfdf4223_prof);

        
        $__internal_d26a9006656e3e0b7604cc0b070ea9807b271700f60ae14b8461199833e28edc->leave($__internal_d26a9006656e3e0b7604cc0b070ea9807b271700f60ae14b8461199833e28edc_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6bc8ea4ed963085c902a77d24c4abdfe90c07a55acfd86b7df868650f17e427b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bc8ea4ed963085c902a77d24c4abdfe90c07a55acfd86b7df868650f17e427b->enter($__internal_6bc8ea4ed963085c902a77d24c4abdfe90c07a55acfd86b7df868650f17e427b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7d8bac25fd00ad399ffa962dffd04691cec4223c466bfbd09475f2bbbdff8c73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d8bac25fd00ad399ffa962dffd04691cec4223c466bfbd09475f2bbbdff8c73->enter($__internal_7d8bac25fd00ad399ffa962dffd04691cec4223c466bfbd09475f2bbbdff8c73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_7d8bac25fd00ad399ffa962dffd04691cec4223c466bfbd09475f2bbbdff8c73->leave($__internal_7d8bac25fd00ad399ffa962dffd04691cec4223c466bfbd09475f2bbbdff8c73_prof);

        
        $__internal_6bc8ea4ed963085c902a77d24c4abdfe90c07a55acfd86b7df868650f17e427b->leave($__internal_6bc8ea4ed963085c902a77d24c4abdfe90c07a55acfd86b7df868650f17e427b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
