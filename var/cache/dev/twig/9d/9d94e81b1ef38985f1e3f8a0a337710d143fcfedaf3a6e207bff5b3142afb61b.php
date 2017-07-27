<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_21479d04dbddd3d734d3d7f50a70656c9fe6f7b10fcf494acdc07fef587b94c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_621c8e690c035bc6999d9fa2c0ff28a94e0ffa2debe59244b9f614cf9164abfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_621c8e690c035bc6999d9fa2c0ff28a94e0ffa2debe59244b9f614cf9164abfb->enter($__internal_621c8e690c035bc6999d9fa2c0ff28a94e0ffa2debe59244b9f614cf9164abfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_1f6cc992b74236a9fe2e111200b950608b9408f9356422ce4221f6d5bf8cbd5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f6cc992b74236a9fe2e111200b950608b9408f9356422ce4221f6d5bf8cbd5e->enter($__internal_1f6cc992b74236a9fe2e111200b950608b9408f9356422ce4221f6d5bf8cbd5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_621c8e690c035bc6999d9fa2c0ff28a94e0ffa2debe59244b9f614cf9164abfb->leave($__internal_621c8e690c035bc6999d9fa2c0ff28a94e0ffa2debe59244b9f614cf9164abfb_prof);

        
        $__internal_1f6cc992b74236a9fe2e111200b950608b9408f9356422ce4221f6d5bf8cbd5e->leave($__internal_1f6cc992b74236a9fe2e111200b950608b9408f9356422ce4221f6d5bf8cbd5e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_70c0249d0409684e6ac3175c97c1d685a8ef9d1e290316e636bae56448c1e958 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70c0249d0409684e6ac3175c97c1d685a8ef9d1e290316e636bae56448c1e958->enter($__internal_70c0249d0409684e6ac3175c97c1d685a8ef9d1e290316e636bae56448c1e958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7de1836e4392f9a4519a8cfd9da74c68beb5a77076f06d172de7fa90d711d78f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7de1836e4392f9a4519a8cfd9da74c68beb5a77076f06d172de7fa90d711d78f->enter($__internal_7de1836e4392f9a4519a8cfd9da74c68beb5a77076f06d172de7fa90d711d78f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_7de1836e4392f9a4519a8cfd9da74c68beb5a77076f06d172de7fa90d711d78f->leave($__internal_7de1836e4392f9a4519a8cfd9da74c68beb5a77076f06d172de7fa90d711d78f_prof);

        
        $__internal_70c0249d0409684e6ac3175c97c1d685a8ef9d1e290316e636bae56448c1e958->leave($__internal_70c0249d0409684e6ac3175c97c1d685a8ef9d1e290316e636bae56448c1e958_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_04b96adb726db3324b48dc42d32205aa232a4d2b0b3184534b42f245eba763df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04b96adb726db3324b48dc42d32205aa232a4d2b0b3184534b42f245eba763df->enter($__internal_04b96adb726db3324b48dc42d32205aa232a4d2b0b3184534b42f245eba763df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9206bc8631cf442259edfeffe07b6bdf02c2687b8d6a594ac98a7b1feb4065b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9206bc8631cf442259edfeffe07b6bdf02c2687b8d6a594ac98a7b1feb4065b0->enter($__internal_9206bc8631cf442259edfeffe07b6bdf02c2687b8d6a594ac98a7b1feb4065b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_9206bc8631cf442259edfeffe07b6bdf02c2687b8d6a594ac98a7b1feb4065b0->leave($__internal_9206bc8631cf442259edfeffe07b6bdf02c2687b8d6a594ac98a7b1feb4065b0_prof);

        
        $__internal_04b96adb726db3324b48dc42d32205aa232a4d2b0b3184534b42f245eba763df->leave($__internal_04b96adb726db3324b48dc42d32205aa232a4d2b0b3184534b42f245eba763df_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_ba07a54722dc5a074aaef811bdd6a2e655d2d0a868c5af156a9b69ea7ba3253a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba07a54722dc5a074aaef811bdd6a2e655d2d0a868c5af156a9b69ea7ba3253a->enter($__internal_ba07a54722dc5a074aaef811bdd6a2e655d2d0a868c5af156a9b69ea7ba3253a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0d683c9cc60c63fd70e2d569258a19ac3732463aceb677a1da7d28d03ceb8c4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d683c9cc60c63fd70e2d569258a19ac3732463aceb677a1da7d28d03ceb8c4a->enter($__internal_0d683c9cc60c63fd70e2d569258a19ac3732463aceb677a1da7d28d03ceb8c4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_0d683c9cc60c63fd70e2d569258a19ac3732463aceb677a1da7d28d03ceb8c4a->leave($__internal_0d683c9cc60c63fd70e2d569258a19ac3732463aceb677a1da7d28d03ceb8c4a_prof);

        
        $__internal_ba07a54722dc5a074aaef811bdd6a2e655d2d0a868c5af156a9b69ea7ba3253a->leave($__internal_ba07a54722dc5a074aaef811bdd6a2e655d2d0a868c5af156a9b69ea7ba3253a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
