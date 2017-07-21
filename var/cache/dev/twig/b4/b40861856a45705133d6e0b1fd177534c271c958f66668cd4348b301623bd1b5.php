<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_8e797e67c7e140e4b6c1a152bc647947cc416cd425d06b6324043b2e00b15e20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_93696bbc34e6b19db7c5cbd3c846cfa128c1021798bc68ad60ed67f0d97319f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93696bbc34e6b19db7c5cbd3c846cfa128c1021798bc68ad60ed67f0d97319f8->enter($__internal_93696bbc34e6b19db7c5cbd3c846cfa128c1021798bc68ad60ed67f0d97319f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_d80b303c24ce3d7fc259d6124f18c2eeb3b9c3575a84e8200a0e72cc0d7f9574 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d80b303c24ce3d7fc259d6124f18c2eeb3b9c3575a84e8200a0e72cc0d7f9574->enter($__internal_d80b303c24ce3d7fc259d6124f18c2eeb3b9c3575a84e8200a0e72cc0d7f9574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93696bbc34e6b19db7c5cbd3c846cfa128c1021798bc68ad60ed67f0d97319f8->leave($__internal_93696bbc34e6b19db7c5cbd3c846cfa128c1021798bc68ad60ed67f0d97319f8_prof);

        
        $__internal_d80b303c24ce3d7fc259d6124f18c2eeb3b9c3575a84e8200a0e72cc0d7f9574->leave($__internal_d80b303c24ce3d7fc259d6124f18c2eeb3b9c3575a84e8200a0e72cc0d7f9574_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_dab964847e627877afadfd7a908dbfa725bfd455fc2f4207dccf8b31e72c6f0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dab964847e627877afadfd7a908dbfa725bfd455fc2f4207dccf8b31e72c6f0d->enter($__internal_dab964847e627877afadfd7a908dbfa725bfd455fc2f4207dccf8b31e72c6f0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0afbf2720d7800ed2472ef31a76fd75c86a33825c770a2a7567626de3b10f6ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0afbf2720d7800ed2472ef31a76fd75c86a33825c770a2a7567626de3b10f6ca->enter($__internal_0afbf2720d7800ed2472ef31a76fd75c86a33825c770a2a7567626de3b10f6ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_0afbf2720d7800ed2472ef31a76fd75c86a33825c770a2a7567626de3b10f6ca->leave($__internal_0afbf2720d7800ed2472ef31a76fd75c86a33825c770a2a7567626de3b10f6ca_prof);

        
        $__internal_dab964847e627877afadfd7a908dbfa725bfd455fc2f4207dccf8b31e72c6f0d->leave($__internal_dab964847e627877afadfd7a908dbfa725bfd455fc2f4207dccf8b31e72c6f0d_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_5e964163399617e23b94a02a1cb721495596c899fb5aae39b5dece2a5e20b1cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e964163399617e23b94a02a1cb721495596c899fb5aae39b5dece2a5e20b1cc->enter($__internal_5e964163399617e23b94a02a1cb721495596c899fb5aae39b5dece2a5e20b1cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c8607c131b13f8393caafb1e11a3b070e02fa26c7171addc71fc28876b5adb3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8607c131b13f8393caafb1e11a3b070e02fa26c7171addc71fc28876b5adb3c->enter($__internal_c8607c131b13f8393caafb1e11a3b070e02fa26c7171addc71fc28876b5adb3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_c8607c131b13f8393caafb1e11a3b070e02fa26c7171addc71fc28876b5adb3c->leave($__internal_c8607c131b13f8393caafb1e11a3b070e02fa26c7171addc71fc28876b5adb3c_prof);

        
        $__internal_5e964163399617e23b94a02a1cb721495596c899fb5aae39b5dece2a5e20b1cc->leave($__internal_5e964163399617e23b94a02a1cb721495596c899fb5aae39b5dece2a5e20b1cc_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_8410b09f3414997b0d3d5453111a677b9d59ec991fd93a54e521cc77344d725b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8410b09f3414997b0d3d5453111a677b9d59ec991fd93a54e521cc77344d725b->enter($__internal_8410b09f3414997b0d3d5453111a677b9d59ec991fd93a54e521cc77344d725b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_08ac97f0f0dee4f3a29a176a7792b032578d0de3aa504dd0193348fc036d5568 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08ac97f0f0dee4f3a29a176a7792b032578d0de3aa504dd0193348fc036d5568->enter($__internal_08ac97f0f0dee4f3a29a176a7792b032578d0de3aa504dd0193348fc036d5568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_08ac97f0f0dee4f3a29a176a7792b032578d0de3aa504dd0193348fc036d5568->leave($__internal_08ac97f0f0dee4f3a29a176a7792b032578d0de3aa504dd0193348fc036d5568_prof);

        
        $__internal_8410b09f3414997b0d3d5453111a677b9d59ec991fd93a54e521cc77344d725b->leave($__internal_8410b09f3414997b0d3d5453111a677b9d59ec991fd93a54e521cc77344d725b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
