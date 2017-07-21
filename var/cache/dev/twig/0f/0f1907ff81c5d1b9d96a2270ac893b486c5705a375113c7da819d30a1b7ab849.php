<?php

/* @CoreSphereConsole/Console/htmlTemplates.html.twig */
class __TwigTemplate_5a5f2cf9d1d62e017a5f6915941cb0773cfd43b183461bd16482386e9a6c228a extends Twig_Template
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
        $__internal_d57568a51ca451cb841ae456d2464d30db91790b1c053637769f7b45b85f5474 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d57568a51ca451cb841ae456d2464d30db91790b1c053637769f7b45b85f5474->enter($__internal_d57568a51ca451cb841ae456d2464d30db91790b1c053637769f7b45b85f5474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CoreSphereConsole/Console/htmlTemplates.html.twig"));

        $__internal_c90e7f1dcefa92859498d58ea8170d889bbeae25e762d22fa29f0ca7873a329d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c90e7f1dcefa92859498d58ea8170d889bbeae25e762d22fa29f0ca7873a329d->enter($__internal_c90e7f1dcefa92859498d58ea8170d889bbeae25e762d22fa29f0ca7873a329d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CoreSphereConsole/Console/htmlTemplates.html.twig"));

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
        
        $__internal_d57568a51ca451cb841ae456d2464d30db91790b1c053637769f7b45b85f5474->leave($__internal_d57568a51ca451cb841ae456d2464d30db91790b1c053637769f7b45b85f5474_prof);

        
        $__internal_c90e7f1dcefa92859498d58ea8170d889bbeae25e762d22fa29f0ca7873a329d->leave($__internal_c90e7f1dcefa92859498d58ea8170d889bbeae25e762d22fa29f0ca7873a329d_prof);

    }

    public function getTemplateName()
    {
        return "@CoreSphereConsole/Console/htmlTemplates.html.twig";
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
", "@CoreSphereConsole/Console/htmlTemplates.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\coresphere\\console-bundle\\Resources\\views\\Console\\htmlTemplates.html.twig");
    }
}
