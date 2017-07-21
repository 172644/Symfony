<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_0769424d81ecddab3ce2066165e313c4b425e4dbacd58293583aa74af7006aaa extends Twig_Template
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
        $__internal_7218b2115bc23ee8136077a7228eedcc730e5a77d92ebd84da494d5bf4e86847 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7218b2115bc23ee8136077a7228eedcc730e5a77d92ebd84da494d5bf4e86847->enter($__internal_7218b2115bc23ee8136077a7228eedcc730e5a77d92ebd84da494d5bf4e86847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_7218b2115bc23ee8136077a7228eedcc730e5a77d92ebd84da494d5bf4e86847->leave($__internal_7218b2115bc23ee8136077a7228eedcc730e5a77d92ebd84da494d5bf4e86847_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9b422b0c9583113755419194c498c01c0cd84a508b1d785757afdf733b140be9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b422b0c9583113755419194c498c01c0cd84a508b1d785757afdf733b140be9->enter($__internal_9b422b0c9583113755419194c498c01c0cd84a508b1d785757afdf733b140be9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_9b422b0c9583113755419194c498c01c0cd84a508b1d785757afdf733b140be9->leave($__internal_9b422b0c9583113755419194c498c01c0cd84a508b1d785757afdf733b140be9_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_70557277a72905bad3ac23bfc560c1d3e71e36617c436523bd410ae23d3aeb63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70557277a72905bad3ac23bfc560c1d3e71e36617c436523bd410ae23d3aeb63->enter($__internal_70557277a72905bad3ac23bfc560c1d3e71e36617c436523bd410ae23d3aeb63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_70557277a72905bad3ac23bfc560c1d3e71e36617c436523bd410ae23d3aeb63->leave($__internal_70557277a72905bad3ac23bfc560c1d3e71e36617c436523bd410ae23d3aeb63_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_2d55cee2704bd37a1828f85b102228a159e4760ae97daf961ac7e917a13618f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d55cee2704bd37a1828f85b102228a159e4760ae97daf961ac7e917a13618f5->enter($__internal_2d55cee2704bd37a1828f85b102228a159e4760ae97daf961ac7e917a13618f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2d55cee2704bd37a1828f85b102228a159e4760ae97daf961ac7e917a13618f5->leave($__internal_2d55cee2704bd37a1828f85b102228a159e4760ae97daf961ac7e917a13618f5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 33,  108 => 10,  97 => 7,  85 => 34,  83 => 33,  73 => 26,  63 => 19,  56 => 15,  50 => 11,  48 => 10,  44 => 9,  40 => 8,  36 => 7,  30 => 4,  25 => 1,);
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
", "@Twig/layout.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
