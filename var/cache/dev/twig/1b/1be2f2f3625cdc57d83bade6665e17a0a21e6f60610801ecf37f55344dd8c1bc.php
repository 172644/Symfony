<?php

/* CoreSphereConsoleBundle:Console:htmlTemplates.html.twig */
class __TwigTemplate_2cf990a0ad815cea906f9911f0b224e81db20977e2367a717f0a3eb7492dabe4 extends Twig_Template
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
        $__internal_ad079d4375fcaee2d9d80e6e158af6f44b58aa07fa8b8d0d6a39d649efd46149 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad079d4375fcaee2d9d80e6e158af6f44b58aa07fa8b8d0d6a39d649efd46149->enter($__internal_ad079d4375fcaee2d9d80e6e158af6f44b58aa07fa8b8d0d6a39d649efd46149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle:Console:htmlTemplates.html.twig"));

        $__internal_854d609ac525e58cac9cbbe258b3faaaeea3620727a44d1a684faa42b86321a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_854d609ac525e58cac9cbbe258b3faaaeea3620727a44d1a684faa42b86321a7->enter($__internal_854d609ac525e58cac9cbbe258b3faaaeea3620727a44d1a684faa42b86321a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle:Console:htmlTemplates.html.twig"));

        // line 1
        echo "<script type=\"text/html\" id=\"template_console_command\">
    <li>
        <div class=\"console_log_input console_%status%\">%command%%environment%</div>
        <div class=\"console_log_output\">%output%</div>
    </li>
</script>

<script type=\"text/html\" id=\"template_console_environment\">
    <span class=\"console_env_info\">%label%: <strong>%environment%</strong></span>
</script>

<script type=\"text/html\" id=\"template_console_error\">
    <li class=\"console_error\">
        <div class=\"console_log_input\">%command%</div>
        <div class=\"console_log_output\">[%message%] %error%</div>
    </li>
</script>

<script type=\"text/html\" id=\"template_console_loading\">
    <li class=\"console_loading\">
        <div class=\"console_log_input\">%command%</div>
        <div class=\"console_log_output\">%message%</div>
    </li>
</script>

<script type=\"text/html\" id=\"template_suggestion_list\">
    <h2 class=\"console_suggestion_head\">%head%</h2>
    <ul>%suggestions%</ul>
</script>

<script type=\"text/html\" id=\"template_console_highlight\">
    <strong class=\"match\">%word%</strong>
</script>

<script type=\"text/html\" id=\"suggestion_item_active\">
    <li class=\"%state%\">%suggestion%</li>
</script>

<script type=\"text/html\" id=\"suggestion_item\">
    <li>%suggestion%</li>
</script>
";
        
        $__internal_ad079d4375fcaee2d9d80e6e158af6f44b58aa07fa8b8d0d6a39d649efd46149->leave($__internal_ad079d4375fcaee2d9d80e6e158af6f44b58aa07fa8b8d0d6a39d649efd46149_prof);

        
        $__internal_854d609ac525e58cac9cbbe258b3faaaeea3620727a44d1a684faa42b86321a7->leave($__internal_854d609ac525e58cac9cbbe258b3faaaeea3620727a44d1a684faa42b86321a7_prof);

    }

    public function getTemplateName()
    {
        return "CoreSphereConsoleBundle:Console:htmlTemplates.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script type=\"text/html\" id=\"template_console_command\">
    <li>
        <div class=\"console_log_input console_%status%\">%command%%environment%</div>
        <div class=\"console_log_output\">%output%</div>
    </li>
</script>

<script type=\"text/html\" id=\"template_console_environment\">
    <span class=\"console_env_info\">%label%: <strong>%environment%</strong></span>
</script>

<script type=\"text/html\" id=\"template_console_error\">
    <li class=\"console_error\">
        <div class=\"console_log_input\">%command%</div>
        <div class=\"console_log_output\">[%message%] %error%</div>
    </li>
</script>

<script type=\"text/html\" id=\"template_console_loading\">
    <li class=\"console_loading\">
        <div class=\"console_log_input\">%command%</div>
        <div class=\"console_log_output\">%message%</div>
    </li>
</script>

<script type=\"text/html\" id=\"template_suggestion_list\">
    <h2 class=\"console_suggestion_head\">%head%</h2>
    <ul>%suggestions%</ul>
</script>

<script type=\"text/html\" id=\"template_console_highlight\">
    <strong class=\"match\">%word%</strong>
</script>

<script type=\"text/html\" id=\"suggestion_item_active\">
    <li class=\"%state%\">%suggestion%</li>
</script>

<script type=\"text/html\" id=\"suggestion_item\">
    <li>%suggestion%</li>
</script>
", "CoreSphereConsoleBundle:Console:htmlTemplates.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\coresphere\\console-bundle/Resources/views/Console/htmlTemplates.html.twig");
    }
}
