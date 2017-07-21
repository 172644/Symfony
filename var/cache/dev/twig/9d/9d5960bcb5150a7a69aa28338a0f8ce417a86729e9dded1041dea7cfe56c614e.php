<?php

/* @CoreSphereConsole/Console/console.html.twig */
class __TwigTemplate_0e384066f49776a37f73ad217e2f15f0f97f91c476a1150d8fcff7882869e69b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoreSphereConsoleBundle::base.html.twig", "@CoreSphereConsole/Console/console.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CoreSphereConsoleBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8dea6ec42937fbad8c7d1568c4920aec35560b472d0082e06eb3124bab98acc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8dea6ec42937fbad8c7d1568c4920aec35560b472d0082e06eb3124bab98acc2->enter($__internal_8dea6ec42937fbad8c7d1568c4920aec35560b472d0082e06eb3124bab98acc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CoreSphereConsole/Console/console.html.twig"));

        $__internal_935c29c217ddabd43e448494f6567645a1b343f4e7fc0146d494b484e16837d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_935c29c217ddabd43e448494f6567645a1b343f4e7fc0146d494b484e16837d0->enter($__internal_935c29c217ddabd43e448494f6567645a1b343f4e7fc0146d494b484e16837d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CoreSphereConsole/Console/console.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8dea6ec42937fbad8c7d1568c4920aec35560b472d0082e06eb3124bab98acc2->leave($__internal_8dea6ec42937fbad8c7d1568c4920aec35560b472d0082e06eb3124bab98acc2_prof);

        
        $__internal_935c29c217ddabd43e448494f6567645a1b343f4e7fc0146d494b484e16837d0->leave($__internal_935c29c217ddabd43e448494f6567645a1b343f4e7fc0146d494b484e16837d0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fbf7642df9bd95b1632e04e8e49f85badfc3d11b61126c3ef8ec09c62e5ade25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbf7642df9bd95b1632e04e8e49f85badfc3d11b61126c3ef8ec09c62e5ade25->enter($__internal_fbf7642df9bd95b1632e04e8e49f85badfc3d11b61126c3ef8ec09c62e5ade25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5ecc9cafe30bc8dc6dd68ef2517fce83d86ad3cddb3c26214c1ddf84abeecb4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ecc9cafe30bc8dc6dd68ef2517fce83d86ad3cddb3c26214c1ddf84abeecb4b->enter($__internal_5ecc9cafe30bc8dc6dd68ef2517fce83d86ad3cddb3c26214c1ddf84abeecb4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("coresphere_console.headline.index"), "html", null, true);
        
        $__internal_5ecc9cafe30bc8dc6dd68ef2517fce83d86ad3cddb3c26214c1ddf84abeecb4b->leave($__internal_5ecc9cafe30bc8dc6dd68ef2517fce83d86ad3cddb3c26214c1ddf84abeecb4b_prof);

        
        $__internal_fbf7642df9bd95b1632e04e8e49f85badfc3d11b61126c3ef8ec09c62e5ade25->leave($__internal_fbf7642df9bd95b1632e04e8e49f85badfc3d11b61126c3ef8ec09c62e5ade25_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bcafcfad19b7e9b5958cd17387d78dec2ba9ada40de0ab40ec9b7d78239bbb02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcafcfad19b7e9b5958cd17387d78dec2ba9ada40de0ab40ec9b7d78239bbb02->enter($__internal_bcafcfad19b7e9b5958cd17387d78dec2ba9ada40de0ab40ec9b7d78239bbb02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_03e5aba6ca45b662ee31a01f985144103bc076e30e514e00d0c21afb7f406f3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03e5aba6ca45b662ee31a01f985144103bc076e30e514e00d0c21afb7f406f3b->enter($__internal_03e5aba6ca45b662ee31a01f985144103bc076e30e514e00d0c21afb7f406f3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/css/console.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
        
        $__internal_03e5aba6ca45b662ee31a01f985144103bc076e30e514e00d0c21afb7f406f3b->leave($__internal_03e5aba6ca45b662ee31a01f985144103bc076e30e514e00d0c21afb7f406f3b_prof);

        
        $__internal_bcafcfad19b7e9b5958cd17387d78dec2ba9ada40de0ab40ec9b7d78239bbb02->leave($__internal_bcafcfad19b7e9b5958cd17387d78dec2ba9ada40de0ab40ec9b7d78239bbb02_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_cca71f0d1b893ca17ddc6b03b0dea173557b48829812c1f18229dd328f2360e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cca71f0d1b893ca17ddc6b03b0dea173557b48829812c1f18229dd328f2360e5->enter($__internal_cca71f0d1b893ca17ddc6b03b0dea173557b48829812c1f18229dd328f2360e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8822247c99704907bd80518606f93a302927e8fa4e7535285dfb2a80e86fb798 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8822247c99704907bd80518606f93a302927e8fa4e7535285dfb2a80e86fb798->enter($__internal_8822247c99704907bd80518606f93a302927e8fa4e7535285dfb2a80e86fb798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    ";
        $this->loadTemplate("CoreSphereConsoleBundle:Console:terminal.html.twig", "@CoreSphereConsole/Console/console.html.twig", 11)->display($context);
        // line 12
        echo "    ";
        $this->loadTemplate("CoreSphereConsoleBundle:Console:htmlTemplates.html.twig", "@CoreSphereConsole/Console/console.html.twig", 12)->display($context);
        
        $__internal_8822247c99704907bd80518606f93a302927e8fa4e7535285dfb2a80e86fb798->leave($__internal_8822247c99704907bd80518606f93a302927e8fa4e7535285dfb2a80e86fb798_prof);

        
        $__internal_cca71f0d1b893ca17ddc6b03b0dea173557b48829812c1f18229dd328f2360e5->leave($__internal_cca71f0d1b893ca17ddc6b03b0dea173557b48829812c1f18229dd328f2360e5_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d5d46410617d13923943e1106adc875e398b591cc56bd16fa2c9d71f4ab13fcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5d46410617d13923943e1106adc875e398b591cc56bd16fa2c9d71f4ab13fcc->enter($__internal_d5d46410617d13923943e1106adc875e398b591cc56bd16fa2c9d71f4ab13fcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3f0ae56cac49e326595d2fa0a7cb667892dcb19fecf0aa2d9281d6f6b35c1347 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f0ae56cac49e326595d2fa0a7cb667892dcb19fecf0aa2d9281d6f6b35c1347->enter($__internal_3f0ae56cac49e326595d2fa0a7cb667892dcb19fecf0aa2d9281d6f6b35c1347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 16
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/js/console.js"), "html", null, true);
        echo "\"></script>
    <script>
        jQuery(function () {
            ";
        // line 21
        echo "            var coresphere_console = new CoreSphereConsole(
                jQuery(\"#coresphere_consolebundle_console\"), {
                \"commands\" : ";
        // line 23
        echo json_encode(twig_get_array_keys_filter((isset($context["commands"]) || array_key_exists("commands", $context) ? $context["commands"] : (function () { throw new Twig_Error_Runtime('Variable "commands" does not exist.', 23, $this->getSourceContext()); })())));
        echo ".sort(),
                \"post_path\" : \"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("console_exec"), "js", null, true);
        echo "\",
                \"environment\" : \"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["environment"]) || array_key_exists("environment", $context) ? $context["environment"] : (function () { throw new Twig_Error_Runtime('Variable "environment" does not exist.', 25, $this->getSourceContext()); })()), "js", null, true);
        echo "\",
                \"lang\" : {
                    \"loading\" : \"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("coresphere_console.loading"), "js", null, true);
        echo "\",
                    \"suggestion_head\" : \"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("coresphere_console.suggestion_head"), "js", null, true);
        echo "\",
                    \"environment\" : \"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("coresphere_console.environment"), "js", null, true);
        echo "\",
                    \"empty_response\" : \"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("coresphere_console.empty_response"), "js", null, true);
        echo "\",
                    \"welcome_message\" : \"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("coresphere_console.welcome_message", array("%command%" => "<code class=\"console_command\">list</code>")), "js", null, true);
        echo "\"
                },
                \"templates\" : {
                    \"error\" : \$(\"#template_console_error\").text(),
                    \"command\" : \$(\"#template_console_command\").text(),
                    \"environment\" : \$(\"#template_console_environment\").text(),
                    \"suggestion_list\" : \$('#template_suggestion_list').text(),
                    \"loading\" : \$('#template_console_loading').text(),
                    \"suggestion_item_active\" : \$('#suggestion_item_active').text(),
                    \"suggestion_item\" : \$('#suggestion_item').text(),
                    \"highlight\" : \$('#template_console_highlight').text().trim()
                }
            });
            ";
        // line 45
        echo "        });
    </script>
";
        
        $__internal_3f0ae56cac49e326595d2fa0a7cb667892dcb19fecf0aa2d9281d6f6b35c1347->leave($__internal_3f0ae56cac49e326595d2fa0a7cb667892dcb19fecf0aa2d9281d6f6b35c1347_prof);

        
        $__internal_d5d46410617d13923943e1106adc875e398b591cc56bd16fa2c9d71f4ab13fcc->leave($__internal_d5d46410617d13923943e1106adc875e398b591cc56bd16fa2c9d71f4ab13fcc_prof);

    }

    public function getTemplateName()
    {
        return "@CoreSphereConsole/Console/console.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 45,  163 => 31,  159 => 30,  155 => 29,  151 => 28,  147 => 27,  142 => 25,  138 => 24,  134 => 23,  130 => 21,  124 => 17,  119 => 16,  110 => 15,  99 => 12,  96 => 11,  87 => 10,  75 => 7,  70 => 6,  61 => 5,  43 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'CoreSphereConsoleBundle::base.html.twig'  %}

{% block title %}{{ 'coresphere_console.headline.index'|trans }}{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/coresphereconsole/css/console.css') }}\" type=\"text/css\" />
{% endblock %}

{% block body %}
    {%  include 'CoreSphereConsoleBundle:Console:terminal.html.twig' %}
    {%  include 'CoreSphereConsoleBundle:Console:htmlTemplates.html.twig' %}
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('bundles/coresphereconsole/js/console.js') }}\"></script>
    <script>
        jQuery(function () {
            {% autoescape 'js' %}
            var coresphere_console = new CoreSphereConsole(
                jQuery(\"#coresphere_consolebundle_console\"), {
                \"commands\" : {{ commands|keys|json_encode|raw }}.sort(),
                \"post_path\" : \"{{ path('console_exec') }}\",
                \"environment\" : \"{{ environment }}\",
                \"lang\" : {
                    \"loading\" : \"{{ 'coresphere_console.loading'|trans }}\",
                    \"suggestion_head\" : \"{{ 'coresphere_console.suggestion_head'|trans }}\",
                    \"environment\" : \"{{ 'coresphere_console.environment'|trans }}\",
                    \"empty_response\" : \"{{ 'coresphere_console.empty_response'|trans }}\",
                    \"welcome_message\" : \"{{ 'coresphere_console.welcome_message'|trans({'%command%': '<code class=\\\"console_command\\\">list</code>'}) }}\"
                },
                \"templates\" : {
                    \"error\" : \$(\"#template_console_error\").text(),
                    \"command\" : \$(\"#template_console_command\").text(),
                    \"environment\" : \$(\"#template_console_environment\").text(),
                    \"suggestion_list\" : \$('#template_suggestion_list').text(),
                    \"loading\" : \$('#template_console_loading').text(),
                    \"suggestion_item_active\" : \$('#suggestion_item_active').text(),
                    \"suggestion_item\" : \$('#suggestion_item').text(),
                    \"highlight\" : \$('#template_console_highlight').text().trim()
                }
            });
            {% endautoescape %}
        });
    </script>
{% endblock %}
", "@CoreSphereConsole/Console/console.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\coresphere\\console-bundle\\Resources\\views\\Console\\console.html.twig");
    }
}
