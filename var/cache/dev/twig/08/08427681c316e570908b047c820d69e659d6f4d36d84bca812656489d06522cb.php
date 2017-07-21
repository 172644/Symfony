<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_98849d5f148b513ac89aaea6535d8b340fe30764d1028e7a23d09e58a5c809b1 extends Twig_Template
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
        $__internal_d121052cd4710760a66b2496e7ff9114ba5b25124392766f3380bf15d8ce1f32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d121052cd4710760a66b2496e7ff9114ba5b25124392766f3380bf15d8ce1f32->enter($__internal_d121052cd4710760a66b2496e7ff9114ba5b25124392766f3380bf15d8ce1f32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_150ec5b1c34d3fd886134232d995bc6a3d3aaae19d83e4811ef3ab21e0269084 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_150ec5b1c34d3fd886134232d995bc6a3d3aaae19d83e4811ef3ab21e0269084->enter($__internal_150ec5b1c34d3fd886134232d995bc6a3d3aaae19d83e4811ef3ab21e0269084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_d121052cd4710760a66b2496e7ff9114ba5b25124392766f3380bf15d8ce1f32->leave($__internal_d121052cd4710760a66b2496e7ff9114ba5b25124392766f3380bf15d8ce1f32_prof);

        
        $__internal_150ec5b1c34d3fd886134232d995bc6a3d3aaae19d83e4811ef3ab21e0269084->leave($__internal_150ec5b1c34d3fd886134232d995bc6a3d3aaae19d83e4811ef3ab21e0269084_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
