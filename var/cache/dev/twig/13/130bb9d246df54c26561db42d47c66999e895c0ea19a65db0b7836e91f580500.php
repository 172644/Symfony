<?php

/* @CoreSphereConsole/Console/terminal.html.twig */
class __TwigTemplate_8e8569c3c13054c6645fc8b42c4ad8b8c02d080f50ac4de835810340ec21c3ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_05ad642df430c09a7a4f4d1030a358b588cdf1c5b176793d09dfd5d4863909af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05ad642df430c09a7a4f4d1030a358b588cdf1c5b176793d09dfd5d4863909af->enter($__internal_05ad642df430c09a7a4f4d1030a358b588cdf1c5b176793d09dfd5d4863909af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CoreSphereConsole/Console/terminal.html.twig"));

        $__internal_28348ea65dda08833053df9852721a1bff5c3ed9182375deb8c478369185817d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28348ea65dda08833053df9852721a1bff5c3ed9182375deb8c478369185817d->enter($__internal_28348ea65dda08833053df9852721a1bff5c3ed9182375deb8c478369185817d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CoreSphereConsole/Console/terminal.html.twig"));

        // line 1
        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("coresphere_console.headline.index"), "html", null, true);
        echo "</h1>
<div id=\"coresphere_consolebundle_console\" class=\"console\">
    <div class=\"console_info_bar\">
        ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("coresphere_console.working_directory"), "html", null, true);
        echo ": <strong>";
        echo twig_escape_filter($this->env, (isset($context["working_dir"]) || array_key_exists("working_dir", $context) ? $context["working_dir"] : (function () { throw new Twig_Error_Runtime('Variable "working_dir" does not exist.', 4, $this->getSourceContext()); })()), "html", null, true);
        echo "</strong>
        <span class=\"console_env_info\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("coresphere_console.environment"), "html", null, true);
        echo ": <strong>";
        echo twig_escape_filter($this->env, (isset($context["environment"]) || array_key_exists("environment", $context) ? $context["environment"] : (function () { throw new Twig_Error_Runtime('Variable "environment" does not exist.', 5, $this->getSourceContext()); })()), "html", null, true);
        echo "</strong></span>
    </div>
    <div class=\"console_log_container\">
        <ol class=\"console_log\">

        </ol>
    </div>
    <div class=\"console_prompt\">
        <div contenteditable=\"true\" class=\"console_input\"></div>
        <div class=\"console_input_background\"></div>
    </div>
    <div class=\"console_suggestions\"></div>
</div>
";
        
        $__internal_05ad642df430c09a7a4f4d1030a358b588cdf1c5b176793d09dfd5d4863909af->leave($__internal_05ad642df430c09a7a4f4d1030a358b588cdf1c5b176793d09dfd5d4863909af_prof);

        
        $__internal_28348ea65dda08833053df9852721a1bff5c3ed9182375deb8c478369185817d->leave($__internal_28348ea65dda08833053df9852721a1bff5c3ed9182375deb8c478369185817d_prof);

    }

    public function getTemplateName()
    {
        return "@CoreSphereConsole/Console/terminal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 5,  32 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>{{ 'coresphere_console.headline.index'|trans }}</h1>
<div id=\"coresphere_consolebundle_console\" class=\"console\">
    <div class=\"console_info_bar\">
        {{ 'coresphere_console.working_directory'|trans }}: <strong>{{ working_dir }}</strong>
        <span class=\"console_env_info\">{{ 'coresphere_console.environment'|trans }}: <strong>{{ environment }}</strong></span>
    </div>
    <div class=\"console_log_container\">
        <ol class=\"console_log\">

        </ol>
    </div>
    <div class=\"console_prompt\">
        <div contenteditable=\"true\" class=\"console_input\"></div>
        <div class=\"console_input_background\"></div>
    </div>
    <div class=\"console_suggestions\"></div>
</div>
", "@CoreSphereConsole/Console/terminal.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\coresphere\\console-bundle\\Resources\\views\\Console\\terminal.html.twig");
    }
}
