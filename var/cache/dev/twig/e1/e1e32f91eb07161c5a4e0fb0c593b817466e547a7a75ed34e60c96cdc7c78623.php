<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_54cdc94802148de2de00e0e6f46d53d6d88d3b895375dc5108fda442af076050 extends Twig_Template
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
        $__internal_8c12468d9c343e18a0c175fa703255bf347fdf3565dbb6a0ef8696d824a4a8c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c12468d9c343e18a0c175fa703255bf347fdf3565dbb6a0ef8696d824a4a8c9->enter($__internal_8c12468d9c343e18a0c175fa703255bf347fdf3565dbb6a0ef8696d824a4a8c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_2133dc241ce869a671088fe8d46999acd1f6d7376f7e00e1c4bbc49e059b0c48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2133dc241ce869a671088fe8d46999acd1f6d7376f7e00e1c4bbc49e059b0c48->enter($__internal_2133dc241ce869a671088fe8d46999acd1f6d7376f7e00e1c4bbc49e059b0c48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_8c12468d9c343e18a0c175fa703255bf347fdf3565dbb6a0ef8696d824a4a8c9->leave($__internal_8c12468d9c343e18a0c175fa703255bf347fdf3565dbb6a0ef8696d824a4a8c9_prof);

        
        $__internal_2133dc241ce869a671088fe8d46999acd1f6d7376f7e00e1c4bbc49e059b0c48->leave($__internal_2133dc241ce869a671088fe8d46999acd1f6d7376f7e00e1c4bbc49e059b0c48_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}
