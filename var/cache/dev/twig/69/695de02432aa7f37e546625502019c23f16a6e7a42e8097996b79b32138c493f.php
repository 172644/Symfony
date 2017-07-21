<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_4450ab2988374867966b17ee40989b20c8f65b26ec37a501f38588bb0cc9720e extends Twig_Template
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
        $__internal_8a6ef3105dd4c6246607e77866f28907803ecd540c93ab1f98078568d8a4d6ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a6ef3105dd4c6246607e77866f28907803ecd540c93ab1f98078568d8a4d6ab->enter($__internal_8a6ef3105dd4c6246607e77866f28907803ecd540c93ab1f98078568d8a4d6ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_15a662c8571e60a05ddbc3cec7e12ffa69c178b7ff0ae45d90e577b27615bcb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15a662c8571e60a05ddbc3cec7e12ffa69c178b7ff0ae45d90e577b27615bcb9->enter($__internal_15a662c8571e60a05ddbc3cec7e12ffa69c178b7ff0ae45d90e577b27615bcb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_8a6ef3105dd4c6246607e77866f28907803ecd540c93ab1f98078568d8a4d6ab->leave($__internal_8a6ef3105dd4c6246607e77866f28907803ecd540c93ab1f98078568d8a4d6ab_prof);

        
        $__internal_15a662c8571e60a05ddbc3cec7e12ffa69c178b7ff0ae45d90e577b27615bcb9->leave($__internal_15a662c8571e60a05ddbc3cec7e12ffa69c178b7ff0ae45d90e577b27615bcb9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
