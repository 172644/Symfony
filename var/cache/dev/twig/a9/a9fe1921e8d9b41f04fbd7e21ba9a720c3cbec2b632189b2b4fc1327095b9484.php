<?php

/* CoreSphereConsoleBundle:Console:console.html.twig */
class __TwigTemplate_db261b7dbb6c4bd84c211464e6b436a13894568c00fa9261248127286ac7a2e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoreSphereConsoleBundle::base.html.twig", "CoreSphereConsoleBundle:Console:console.html.twig", 1);
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
        $__internal_4638c7d678f00d430b99f3a23a7b59103e389750ffa37c544d58e25d09203b0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4638c7d678f00d430b99f3a23a7b59103e389750ffa37c544d58e25d09203b0c->enter($__internal_4638c7d678f00d430b99f3a23a7b59103e389750ffa37c544d58e25d09203b0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle:Console:console.html.twig"));

        $__internal_9e0212de5b82411467c632ecb76291e885e2040c37effcf3c7160cabcbc1747a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e0212de5b82411467c632ecb76291e885e2040c37effcf3c7160cabcbc1747a->enter($__internal_9e0212de5b82411467c632ecb76291e885e2040c37effcf3c7160cabcbc1747a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle:Console:console.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4638c7d678f00d430b99f3a23a7b59103e389750ffa37c544d58e25d09203b0c->leave($__internal_4638c7d678f00d430b99f3a23a7b59103e389750ffa37c544d58e25d09203b0c_prof);

        
        $__internal_9e0212de5b82411467c632ecb76291e885e2040c37effcf3c7160cabcbc1747a->leave($__internal_9e0212de5b82411467c632ecb76291e885e2040c37effcf3c7160cabcbc1747a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_35685f264af60be1bd860910795a9bde15fd08a193c88debb0850a0d2f2c413c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35685f264af60be1bd860910795a9bde15fd08a193c88debb0850a0d2f2c413c->enter($__internal_35685f264af60be1bd860910795a9bde15fd08a193c88debb0850a0d2f2c413c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4529d2c448dc413d2279cd0729a76d3a264b140c535dbd3425fb9d078741d992 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4529d2c448dc413d2279cd0729a76d3a264b140c535dbd3425fb9d078741d992->enter($__internal_4529d2c448dc413d2279cd0729a76d3a264b140c535dbd3425fb9d078741d992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("coresphere_console.headline.index"), "html", null, true);
        
        $__internal_4529d2c448dc413d2279cd0729a76d3a264b140c535dbd3425fb9d078741d992->leave($__internal_4529d2c448dc413d2279cd0729a76d3a264b140c535dbd3425fb9d078741d992_prof);

        
        $__internal_35685f264af60be1bd860910795a9bde15fd08a193c88debb0850a0d2f2c413c->leave($__internal_35685f264af60be1bd860910795a9bde15fd08a193c88debb0850a0d2f2c413c_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_83a1eb5f31843b54591a2f66b3d8bb957ca9bbe3481b667d7225aebe46d78c13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83a1eb5f31843b54591a2f66b3d8bb957ca9bbe3481b667d7225aebe46d78c13->enter($__internal_83a1eb5f31843b54591a2f66b3d8bb957ca9bbe3481b667d7225aebe46d78c13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_12a7a30697f4d2c73acf35187944c90abf8906f226296cb1384a8d01a2449d8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12a7a30697f4d2c73acf35187944c90abf8906f226296cb1384a8d01a2449d8e->enter($__internal_12a7a30697f4d2c73acf35187944c90abf8906f226296cb1384a8d01a2449d8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/css/console.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
        
        $__internal_12a7a30697f4d2c73acf35187944c90abf8906f226296cb1384a8d01a2449d8e->leave($__internal_12a7a30697f4d2c73acf35187944c90abf8906f226296cb1384a8d01a2449d8e_prof);

        
        $__internal_83a1eb5f31843b54591a2f66b3d8bb957ca9bbe3481b667d7225aebe46d78c13->leave($__internal_83a1eb5f31843b54591a2f66b3d8bb957ca9bbe3481b667d7225aebe46d78c13_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_73fd6b44d3de63908c3948e468c0c1bf1bee1c1b14053e38d6dda66388c186fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73fd6b44d3de63908c3948e468c0c1bf1bee1c1b14053e38d6dda66388c186fa->enter($__internal_73fd6b44d3de63908c3948e468c0c1bf1bee1c1b14053e38d6dda66388c186fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d50b446eacc5c4d0eb891804aa66aba4531fe1ec3898c2e050327ab288583414 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d50b446eacc5c4d0eb891804aa66aba4531fe1ec3898c2e050327ab288583414->enter($__internal_d50b446eacc5c4d0eb891804aa66aba4531fe1ec3898c2e050327ab288583414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    ";
        $this->loadTemplate("CoreSphereConsoleBundle:Console:terminal.html.twig", "CoreSphereConsoleBundle:Console:console.html.twig", 11)->display($context);
        // line 12
        echo "    ";
        $this->loadTemplate("CoreSphereConsoleBundle:Console:htmlTemplates.html.twig", "CoreSphereConsoleBundle:Console:console.html.twig", 12)->display($context);
        
        $__internal_d50b446eacc5c4d0eb891804aa66aba4531fe1ec3898c2e050327ab288583414->leave($__internal_d50b446eacc5c4d0eb891804aa66aba4531fe1ec3898c2e050327ab288583414_prof);

        
        $__internal_73fd6b44d3de63908c3948e468c0c1bf1bee1c1b14053e38d6dda66388c186fa->leave($__internal_73fd6b44d3de63908c3948e468c0c1bf1bee1c1b14053e38d6dda66388c186fa_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_636562b478cb92b0852991a8c39099b3f01d5a97ba8913c40710b497f2703172 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_636562b478cb92b0852991a8c39099b3f01d5a97ba8913c40710b497f2703172->enter($__internal_636562b478cb92b0852991a8c39099b3f01d5a97ba8913c40710b497f2703172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_54d3d733a5e3014d0008f1f2b2a3c73d094c6fcd241c620efde4ac4f7d08a0b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54d3d733a5e3014d0008f1f2b2a3c73d094c6fcd241c620efde4ac4f7d08a0b5->enter($__internal_54d3d733a5e3014d0008f1f2b2a3c73d094c6fcd241c620efde4ac4f7d08a0b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_54d3d733a5e3014d0008f1f2b2a3c73d094c6fcd241c620efde4ac4f7d08a0b5->leave($__internal_54d3d733a5e3014d0008f1f2b2a3c73d094c6fcd241c620efde4ac4f7d08a0b5_prof);

        
        $__internal_636562b478cb92b0852991a8c39099b3f01d5a97ba8913c40710b497f2703172->leave($__internal_636562b478cb92b0852991a8c39099b3f01d5a97ba8913c40710b497f2703172_prof);

    }

    public function getTemplateName()
    {
        return "CoreSphereConsoleBundle:Console:console.html.twig";
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
", "CoreSphereConsoleBundle:Console:console.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\coresphere\\console-bundle/Resources/views/Console/console.html.twig");
    }
}
