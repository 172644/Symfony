<?php

/* CoreSphereConsoleBundle:Console:terminal.html.twig */
class __TwigTemplate_174d6e91b416fb0cfbf9335d34657aa5e7960eb8ee59e3f212116a8d3d1a189f extends Twig_Template
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
        $__internal_b62ed82ae891f2f2e4c186daebd885757ce774bd40f0e75d14e53d8a024b273e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b62ed82ae891f2f2e4c186daebd885757ce774bd40f0e75d14e53d8a024b273e->enter($__internal_b62ed82ae891f2f2e4c186daebd885757ce774bd40f0e75d14e53d8a024b273e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle:Console:terminal.html.twig"));

        $__internal_09a9ac0bbddb9fefc22ad0afa24714c70afc76de1af7c0c087d21497f0bec018 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09a9ac0bbddb9fefc22ad0afa24714c70afc76de1af7c0c087d21497f0bec018->enter($__internal_09a9ac0bbddb9fefc22ad0afa24714c70afc76de1af7c0c087d21497f0bec018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle:Console:terminal.html.twig"));

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
        
        $__internal_b62ed82ae891f2f2e4c186daebd885757ce774bd40f0e75d14e53d8a024b273e->leave($__internal_b62ed82ae891f2f2e4c186daebd885757ce774bd40f0e75d14e53d8a024b273e_prof);

        
        $__internal_09a9ac0bbddb9fefc22ad0afa24714c70afc76de1af7c0c087d21497f0bec018->leave($__internal_09a9ac0bbddb9fefc22ad0afa24714c70afc76de1af7c0c087d21497f0bec018_prof);

    }

    public function getTemplateName()
    {
        return "CoreSphereConsoleBundle:Console:terminal.html.twig";
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
", "CoreSphereConsoleBundle:Console:terminal.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\coresphere\\console-bundle/Resources/views/Console/terminal.html.twig");
    }
}
