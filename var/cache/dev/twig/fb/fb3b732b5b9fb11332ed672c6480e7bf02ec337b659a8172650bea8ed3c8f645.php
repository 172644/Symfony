<?php

/* @CoreSphereConsole/base.html.twig */
class __TwigTemplate_d075b16b98907da7ebf24744b329af957413fb43f4c258d96a53bcba6c10412f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ebded49308deb5642a20949c7a7dfc897c9695e46e33b7f7f9607aa454062a24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebded49308deb5642a20949c7a7dfc897c9695e46e33b7f7f9607aa454062a24->enter($__internal_ebded49308deb5642a20949c7a7dfc897c9695e46e33b7f7f9607aa454062a24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CoreSphereConsole/base.html.twig"));

        $__internal_1c7a11b1df9ce1d75904904fe19afda0299f58154a6de4a882b6f269957ffd6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c7a11b1df9ce1d75904904fe19afda0299f58154a6de4a882b6f269957ffd6d->enter($__internal_1c7a11b1df9ce1d75904904fe19afda0299f58154a6de4a882b6f269957ffd6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CoreSphereConsole/base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 22
        echo "    </body>
</html>
";
        
        $__internal_ebded49308deb5642a20949c7a7dfc897c9695e46e33b7f7f9607aa454062a24->leave($__internal_ebded49308deb5642a20949c7a7dfc897c9695e46e33b7f7f9607aa454062a24_prof);

        
        $__internal_1c7a11b1df9ce1d75904904fe19afda0299f58154a6de4a882b6f269957ffd6d->leave($__internal_1c7a11b1df9ce1d75904904fe19afda0299f58154a6de4a882b6f269957ffd6d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_49e3db919f79e96937d3620225945c9c562bb2999b55c7cb21c0ffba11ccd432 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49e3db919f79e96937d3620225945c9c562bb2999b55c7cb21c0ffba11ccd432->enter($__internal_49e3db919f79e96937d3620225945c9c562bb2999b55c7cb21c0ffba11ccd432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c8184f869fdb7bc126887173cea1931179fe805538af0c5148738cbe0eedfa7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8184f869fdb7bc126887173cea1931179fe805538af0c5148738cbe0eedfa7f->enter($__internal_c8184f869fdb7bc126887173cea1931179fe805538af0c5148738cbe0eedfa7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CoreSphere Console";
        
        $__internal_c8184f869fdb7bc126887173cea1931179fe805538af0c5148738cbe0eedfa7f->leave($__internal_c8184f869fdb7bc126887173cea1931179fe805538af0c5148738cbe0eedfa7f_prof);

        
        $__internal_49e3db919f79e96937d3620225945c9c562bb2999b55c7cb21c0ffba11ccd432->leave($__internal_49e3db919f79e96937d3620225945c9c562bb2999b55c7cb21c0ffba11ccd432_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7f9535d88947ca22893e631d6077c7b843541579661d94f754b9fd82ccf9c3f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f9535d88947ca22893e631d6077c7b843541579661d94f754b9fd82ccf9c3f4->enter($__internal_7f9535d88947ca22893e631d6077c7b843541579661d94f754b9fd82ccf9c3f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ed99cafe149407e58abc166eb1cf1bc6c3812ffe4cc689573550d8d71a8d6295 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed99cafe149407e58abc166eb1cf1bc6c3812ffe4cc689573550d8d71a8d6295->enter($__internal_ed99cafe149407e58abc166eb1cf1bc6c3812ffe4cc689573550d8d71a8d6295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/css/base.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        ";
        
        $__internal_ed99cafe149407e58abc166eb1cf1bc6c3812ffe4cc689573550d8d71a8d6295->leave($__internal_ed99cafe149407e58abc166eb1cf1bc6c3812ffe4cc689573550d8d71a8d6295_prof);

        
        $__internal_7f9535d88947ca22893e631d6077c7b843541579661d94f754b9fd82ccf9c3f4->leave($__internal_7f9535d88947ca22893e631d6077c7b843541579661d94f754b9fd82ccf9c3f4_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_6573a6f9a3e474d17254c78f7e7b3c114eb2eea25beeaeea808fe75fb15d3766 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6573a6f9a3e474d17254c78f7e7b3c114eb2eea25beeaeea808fe75fb15d3766->enter($__internal_6573a6f9a3e474d17254c78f7e7b3c114eb2eea25beeaeea808fe75fb15d3766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_64c90dbb33cc4b36e01ef1a4b0af5e8c2cf5bdb0a66ca5e30b2daa77aef4a8a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64c90dbb33cc4b36e01ef1a4b0af5e8c2cf5bdb0a66ca5e30b2daa77aef4a8a2->enter($__internal_64c90dbb33cc4b36e01ef1a4b0af5e8c2cf5bdb0a66ca5e30b2daa77aef4a8a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "";
        
        $__internal_64c90dbb33cc4b36e01ef1a4b0af5e8c2cf5bdb0a66ca5e30b2daa77aef4a8a2->leave($__internal_64c90dbb33cc4b36e01ef1a4b0af5e8c2cf5bdb0a66ca5e30b2daa77aef4a8a2_prof);

        
        $__internal_6573a6f9a3e474d17254c78f7e7b3c114eb2eea25beeaeea808fe75fb15d3766->leave($__internal_6573a6f9a3e474d17254c78f7e7b3c114eb2eea25beeaeea808fe75fb15d3766_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b3a709b1ba199680a01e337607e4bc28b933fc3bc1f06fa50bba466bb164df4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3a709b1ba199680a01e337607e4bc28b933fc3bc1f06fa50bba466bb164df4c->enter($__internal_b3a709b1ba199680a01e337607e4bc28b933fc3bc1f06fa50bba466bb164df4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c1dd5ecfa35eed0866e4e03d7563a6f8abae3487c71185ee2ac95bd7e5aa1bce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1dd5ecfa35eed0866e4e03d7563a6f8abae3487c71185ee2ac95bd7e5aa1bce->enter($__internal_c1dd5ecfa35eed0866e4e03d7563a6f8abae3487c71185ee2ac95bd7e5aa1bce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "            ";
        // line 15
        echo "            <script>
            window.jQuery || document.write('<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js\"><\\/script>')
            </script>
            <script>
            window.jQuery || document.write(\"<script src=\\\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/js/jquery-1.8.3.min.js"), "html", null, true);
        echo "\\\"><\\/script>\");
            </script>
        ";
        
        $__internal_c1dd5ecfa35eed0866e4e03d7563a6f8abae3487c71185ee2ac95bd7e5aa1bce->leave($__internal_c1dd5ecfa35eed0866e4e03d7563a6f8abae3487c71185ee2ac95bd7e5aa1bce_prof);

        
        $__internal_b3a709b1ba199680a01e337607e4bc28b933fc3bc1f06fa50bba466bb164df4c->leave($__internal_b3a709b1ba199680a01e337607e4bc28b933fc3bc1f06fa50bba466bb164df4c_prof);

    }

    public function getTemplateName()
    {
        return "@CoreSphereConsole/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 19,  134 => 15,  132 => 14,  123 => 13,  105 => 12,  92 => 7,  83 => 6,  65 => 5,  53 => 22,  50 => 13,  48 => 12,  41 => 9,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title 'CoreSphere Console' %}</title>
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/coresphereconsole/css/base.css') }}\" type=\"text/css\" />
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body '' %}
        {% block javascripts %}
            {# Load jQuery from Google CDN with a local fallback when not laded yet #}
            <script>
            window.jQuery || document.write('<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js\"><\\/script>')
            </script>
            <script>
            window.jQuery || document.write(\"<script src=\\\"{{ asset('bundles/coresphereconsole/js/jquery-1.8.3.min.js') }}\\\"><\\/script>\");
            </script>
        {% endblock %}
    </body>
</html>
", "@CoreSphereConsole/base.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\coresphere\\console-bundle\\Resources\\views\\base.html.twig");
    }
}
