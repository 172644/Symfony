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
        $__internal_60e1f52066dbc3a82f0642da7550e48b50f8f58bc2203d6c8515d3fc0aee05cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60e1f52066dbc3a82f0642da7550e48b50f8f58bc2203d6c8515d3fc0aee05cb->enter($__internal_60e1f52066dbc3a82f0642da7550e48b50f8f58bc2203d6c8515d3fc0aee05cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_b80965dd072f9d32134a5baf56cea67e3cc39275dc183cc1ca16159cfaa7856f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b80965dd072f9d32134a5baf56cea67e3cc39275dc183cc1ca16159cfaa7856f->enter($__internal_b80965dd072f9d32134a5baf56cea67e3cc39275dc183cc1ca16159cfaa7856f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60e1f52066dbc3a82f0642da7550e48b50f8f58bc2203d6c8515d3fc0aee05cb->leave($__internal_60e1f52066dbc3a82f0642da7550e48b50f8f58bc2203d6c8515d3fc0aee05cb_prof);

        
        $__internal_b80965dd072f9d32134a5baf56cea67e3cc39275dc183cc1ca16159cfaa7856f->leave($__internal_b80965dd072f9d32134a5baf56cea67e3cc39275dc183cc1ca16159cfaa7856f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d8f7f62244c2fa16c4ff608d37b89a451c4b2e876131df22f78a25ee0282a7e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8f7f62244c2fa16c4ff608d37b89a451c4b2e876131df22f78a25ee0282a7e7->enter($__internal_d8f7f62244c2fa16c4ff608d37b89a451c4b2e876131df22f78a25ee0282a7e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_fafc15110d33122030da41c91b34810df1b6a17b340b5dcebfcf5a41146937a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fafc15110d33122030da41c91b34810df1b6a17b340b5dcebfcf5a41146937a1->enter($__internal_fafc15110d33122030da41c91b34810df1b6a17b340b5dcebfcf5a41146937a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_fafc15110d33122030da41c91b34810df1b6a17b340b5dcebfcf5a41146937a1->leave($__internal_fafc15110d33122030da41c91b34810df1b6a17b340b5dcebfcf5a41146937a1_prof);

        
        $__internal_d8f7f62244c2fa16c4ff608d37b89a451c4b2e876131df22f78a25ee0282a7e7->leave($__internal_d8f7f62244c2fa16c4ff608d37b89a451c4b2e876131df22f78a25ee0282a7e7_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_c16102e8a56a262b677b88d0d76d10fdf0555f290d177f3e8f9f049633772e6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c16102e8a56a262b677b88d0d76d10fdf0555f290d177f3e8f9f049633772e6b->enter($__internal_c16102e8a56a262b677b88d0d76d10fdf0555f290d177f3e8f9f049633772e6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6ddf6f162996ade46a4daf640c8f58b20e511f261c28ecd89fc2a994bc3510a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ddf6f162996ade46a4daf640c8f58b20e511f261c28ecd89fc2a994bc3510a2->enter($__internal_6ddf6f162996ade46a4daf640c8f58b20e511f261c28ecd89fc2a994bc3510a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_6ddf6f162996ade46a4daf640c8f58b20e511f261c28ecd89fc2a994bc3510a2->leave($__internal_6ddf6f162996ade46a4daf640c8f58b20e511f261c28ecd89fc2a994bc3510a2_prof);

        
        $__internal_c16102e8a56a262b677b88d0d76d10fdf0555f290d177f3e8f9f049633772e6b->leave($__internal_c16102e8a56a262b677b88d0d76d10fdf0555f290d177f3e8f9f049633772e6b_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_66676480a707c7e17ff741fc34394fb5560f9910fa28c687c8186a64fe404e95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66676480a707c7e17ff741fc34394fb5560f9910fa28c687c8186a64fe404e95->enter($__internal_66676480a707c7e17ff741fc34394fb5560f9910fa28c687c8186a64fe404e95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2c6ed53b8075476bb312c6c568aafcd3d0d53463edaeefa5f58760aaab89c9c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c6ed53b8075476bb312c6c568aafcd3d0d53463edaeefa5f58760aaab89c9c2->enter($__internal_2c6ed53b8075476bb312c6c568aafcd3d0d53463edaeefa5f58760aaab89c9c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_2c6ed53b8075476bb312c6c568aafcd3d0d53463edaeefa5f58760aaab89c9c2->leave($__internal_2c6ed53b8075476bb312c6c568aafcd3d0d53463edaeefa5f58760aaab89c9c2_prof);

        
        $__internal_66676480a707c7e17ff741fc34394fb5560f9910fa28c687c8186a64fe404e95->leave($__internal_66676480a707c7e17ff741fc34394fb5560f9910fa28c687c8186a64fe404e95_prof);

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
