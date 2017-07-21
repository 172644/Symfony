<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_e82bb0bb0a0ac6a1e1ab0e447676007f290b5fe030c837bf6d7514e2556e6734 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c8c9c383ab2d3640f2cff0416fd761bcd3e16fd301f121bec388de73d30be445 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8c9c383ab2d3640f2cff0416fd761bcd3e16fd301f121bec388de73d30be445->enter($__internal_c8c9c383ab2d3640f2cff0416fd761bcd3e16fd301f121bec388de73d30be445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_235d932cdcf092b9ee099a23fda962af4b92e6d1813654e62d84c114e0517f32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_235d932cdcf092b9ee099a23fda962af4b92e6d1813654e62d84c114e0517f32->enter($__internal_235d932cdcf092b9ee099a23fda962af4b92e6d1813654e62d84c114e0517f32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_c8c9c383ab2d3640f2cff0416fd761bcd3e16fd301f121bec388de73d30be445->leave($__internal_c8c9c383ab2d3640f2cff0416fd761bcd3e16fd301f121bec388de73d30be445_prof);

        
        $__internal_235d932cdcf092b9ee099a23fda962af4b92e6d1813654e62d84c114e0517f32->leave($__internal_235d932cdcf092b9ee099a23fda962af4b92e6d1813654e62d84c114e0517f32_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7e06b3742d48cdf65d85d3187a6f38dd38ae7bc7cdf6ef3fa71ef80c18443c11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e06b3742d48cdf65d85d3187a6f38dd38ae7bc7cdf6ef3fa71ef80c18443c11->enter($__internal_7e06b3742d48cdf65d85d3187a6f38dd38ae7bc7cdf6ef3fa71ef80c18443c11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9ac553aa5ca6e261071906adaece87eaf56bb4a5426237c6d92306a0a41a5055 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ac553aa5ca6e261071906adaece87eaf56bb4a5426237c6d92306a0a41a5055->enter($__internal_9ac553aa5ca6e261071906adaece87eaf56bb4a5426237c6d92306a0a41a5055_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_9ac553aa5ca6e261071906adaece87eaf56bb4a5426237c6d92306a0a41a5055->leave($__internal_9ac553aa5ca6e261071906adaece87eaf56bb4a5426237c6d92306a0a41a5055_prof);

        
        $__internal_7e06b3742d48cdf65d85d3187a6f38dd38ae7bc7cdf6ef3fa71ef80c18443c11->leave($__internal_7e06b3742d48cdf65d85d3187a6f38dd38ae7bc7cdf6ef3fa71ef80c18443c11_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_9f0b790335744f1d81382fa475322cdc54f5596b6c87ad3aca9e0054fe3187e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f0b790335744f1d81382fa475322cdc54f5596b6c87ad3aca9e0054fe3187e9->enter($__internal_9f0b790335744f1d81382fa475322cdc54f5596b6c87ad3aca9e0054fe3187e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_213b86f5e9e916235ab57f60e64db54141399c63c0200fa681d2c96ca5b3a8e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_213b86f5e9e916235ab57f60e64db54141399c63c0200fa681d2c96ca5b3a8e3->enter($__internal_213b86f5e9e916235ab57f60e64db54141399c63c0200fa681d2c96ca5b3a8e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_213b86f5e9e916235ab57f60e64db54141399c63c0200fa681d2c96ca5b3a8e3->leave($__internal_213b86f5e9e916235ab57f60e64db54141399c63c0200fa681d2c96ca5b3a8e3_prof);

        
        $__internal_9f0b790335744f1d81382fa475322cdc54f5596b6c87ad3aca9e0054fe3187e9->leave($__internal_9f0b790335744f1d81382fa475322cdc54f5596b6c87ad3aca9e0054fe3187e9_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_3fde5e70161aef0cf8077c485119831c595b1a9539f741569f113e63ef063f17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fde5e70161aef0cf8077c485119831c595b1a9539f741569f113e63ef063f17->enter($__internal_3fde5e70161aef0cf8077c485119831c595b1a9539f741569f113e63ef063f17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c790ca112065634bd05bc6567e2fb9c0cb0b3ed1da8e6d27b06272aa8e29300b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c790ca112065634bd05bc6567e2fb9c0cb0b3ed1da8e6d27b06272aa8e29300b->enter($__internal_c790ca112065634bd05bc6567e2fb9c0cb0b3ed1da8e6d27b06272aa8e29300b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c790ca112065634bd05bc6567e2fb9c0cb0b3ed1da8e6d27b06272aa8e29300b->leave($__internal_c790ca112065634bd05bc6567e2fb9c0cb0b3ed1da8e6d27b06272aa8e29300b_prof);

        
        $__internal_3fde5e70161aef0cf8077c485119831c595b1a9539f741569f113e63ef063f17->leave($__internal_3fde5e70161aef0cf8077c485119831c595b1a9539f741569f113e63ef063f17_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "TwigBundle::layout.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/layout.html.twig");
    }
}
