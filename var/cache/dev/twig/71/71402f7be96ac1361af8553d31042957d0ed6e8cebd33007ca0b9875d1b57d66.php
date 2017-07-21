<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_f6a9f794de437d8fbca4715b59d02c46db5b7aeace970f62382a4c0c59cfed75 extends Twig_Template
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
        $__internal_d731fdb8b51dcdc89d10a16c4edfeb007f87d1a73a626c7789e9847bedd26346 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d731fdb8b51dcdc89d10a16c4edfeb007f87d1a73a626c7789e9847bedd26346->enter($__internal_d731fdb8b51dcdc89d10a16c4edfeb007f87d1a73a626c7789e9847bedd26346_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_d7dd8d405874aa920b7af8194f0c3673e75f6f2eb85b08c6ab1fcff7e1d961f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7dd8d405874aa920b7af8194f0c3673e75f6f2eb85b08c6ab1fcff7e1d961f0->enter($__internal_d7dd8d405874aa920b7af8194f0c3673e75f6f2eb85b08c6ab1fcff7e1d961f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_d731fdb8b51dcdc89d10a16c4edfeb007f87d1a73a626c7789e9847bedd26346->leave($__internal_d731fdb8b51dcdc89d10a16c4edfeb007f87d1a73a626c7789e9847bedd26346_prof);

        
        $__internal_d7dd8d405874aa920b7af8194f0c3673e75f6f2eb85b08c6ab1fcff7e1d961f0->leave($__internal_d7dd8d405874aa920b7af8194f0c3673e75f6f2eb85b08c6ab1fcff7e1d961f0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
