<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_71b322afb6620137c2b8dfb2d7bcd7e00d6eb8ee578d79c0e79df24a0181263b extends Twig_Template
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
        $__internal_494e99116caebb66b174732093c2721fd9b938c5034bba03fe7e3ba8fcaba6b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_494e99116caebb66b174732093c2721fd9b938c5034bba03fe7e3ba8fcaba6b9->enter($__internal_494e99116caebb66b174732093c2721fd9b938c5034bba03fe7e3ba8fcaba6b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_f28d8617861fd76b80729530a98dc445cf2853ce5762286cae1b7f300365d103 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f28d8617861fd76b80729530a98dc445cf2853ce5762286cae1b7f300365d103->enter($__internal_f28d8617861fd76b80729530a98dc445cf2853ce5762286cae1b7f300365d103_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_494e99116caebb66b174732093c2721fd9b938c5034bba03fe7e3ba8fcaba6b9->leave($__internal_494e99116caebb66b174732093c2721fd9b938c5034bba03fe7e3ba8fcaba6b9_prof);

        
        $__internal_f28d8617861fd76b80729530a98dc445cf2853ce5762286cae1b7f300365d103->leave($__internal_f28d8617861fd76b80729530a98dc445cf2853ce5762286cae1b7f300365d103_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_attributes.html.php");
    }
}
