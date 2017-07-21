<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_a6a5bf0674426f54de2ec51bba3217a5ee21a45847b71aa597dc79a539fe8dea extends Twig_Template
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
        $__internal_3316c13c3e0cf4a822ca82e40a65e5c69973f5bbf1ab8ebe0ec3a97d081a1c50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3316c13c3e0cf4a822ca82e40a65e5c69973f5bbf1ab8ebe0ec3a97d081a1c50->enter($__internal_3316c13c3e0cf4a822ca82e40a65e5c69973f5bbf1ab8ebe0ec3a97d081a1c50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_3316c13c3e0cf4a822ca82e40a65e5c69973f5bbf1ab8ebe0ec3a97d081a1c50->leave($__internal_3316c13c3e0cf4a822ca82e40a65e5c69973f5bbf1ab8ebe0ec3a97d081a1c50_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}
