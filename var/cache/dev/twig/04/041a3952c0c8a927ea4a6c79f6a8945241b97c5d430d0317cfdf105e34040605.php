<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_8ce138dcd4854646a2defcaf0762a04a9d5ef8e0b4d037e1a5647154681271fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b797524695d7aaf854ec382af9baf64812661ea57257c48b94aeafdfc9c15d83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b797524695d7aaf854ec382af9baf64812661ea57257c48b94aeafdfc9c15d83->enter($__internal_b797524695d7aaf854ec382af9baf64812661ea57257c48b94aeafdfc9c15d83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_31b5160a5ffeacfd2011e0013bb2afaaaf3c8256e67ddb4f4fd8b950a4095796 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31b5160a5ffeacfd2011e0013bb2afaaaf3c8256e67ddb4f4fd8b950a4095796->enter($__internal_31b5160a5ffeacfd2011e0013bb2afaaaf3c8256e67ddb4f4fd8b950a4095796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b797524695d7aaf854ec382af9baf64812661ea57257c48b94aeafdfc9c15d83->leave($__internal_b797524695d7aaf854ec382af9baf64812661ea57257c48b94aeafdfc9c15d83_prof);

        
        $__internal_31b5160a5ffeacfd2011e0013bb2afaaaf3c8256e67ddb4f4fd8b950a4095796->leave($__internal_31b5160a5ffeacfd2011e0013bb2afaaaf3c8256e67ddb4f4fd8b950a4095796_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fa9e31bc196a1e7e68b49aaa36003019263ceb90625a7ad96c3765ea2fdd910d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa9e31bc196a1e7e68b49aaa36003019263ceb90625a7ad96c3765ea2fdd910d->enter($__internal_fa9e31bc196a1e7e68b49aaa36003019263ceb90625a7ad96c3765ea2fdd910d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0bdbe0896f85d47ff058c7b4750a320b062a51639d7a7abbda6ade068fb6c916 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bdbe0896f85d47ff058c7b4750a320b062a51639d7a7abbda6ade068fb6c916->enter($__internal_0bdbe0896f85d47ff058c7b4750a320b062a51639d7a7abbda6ade068fb6c916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_0bdbe0896f85d47ff058c7b4750a320b062a51639d7a7abbda6ade068fb6c916->leave($__internal_0bdbe0896f85d47ff058c7b4750a320b062a51639d7a7abbda6ade068fb6c916_prof);

        
        $__internal_fa9e31bc196a1e7e68b49aaa36003019263ceb90625a7ad96c3765ea2fdd910d->leave($__internal_fa9e31bc196a1e7e68b49aaa36003019263ceb90625a7ad96c3765ea2fdd910d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_cccf04f565cfaf8d325bb0d9699ba37b948312bdb1187ab85adc39231218146d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cccf04f565cfaf8d325bb0d9699ba37b948312bdb1187ab85adc39231218146d->enter($__internal_cccf04f565cfaf8d325bb0d9699ba37b948312bdb1187ab85adc39231218146d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_90fbd4438a6e48ecf9bd7bd4642558e3c32ce76ba913f27a80d0a7f102ebb9a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90fbd4438a6e48ecf9bd7bd4642558e3c32ce76ba913f27a80d0a7f102ebb9a9->enter($__internal_90fbd4438a6e48ecf9bd7bd4642558e3c32ce76ba913f27a80d0a7f102ebb9a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_90fbd4438a6e48ecf9bd7bd4642558e3c32ce76ba913f27a80d0a7f102ebb9a9->leave($__internal_90fbd4438a6e48ecf9bd7bd4642558e3c32ce76ba913f27a80d0a7f102ebb9a9_prof);

        
        $__internal_cccf04f565cfaf8d325bb0d9699ba37b948312bdb1187ab85adc39231218146d->leave($__internal_cccf04f565cfaf8d325bb0d9699ba37b948312bdb1187ab85adc39231218146d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
