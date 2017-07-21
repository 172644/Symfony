<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_0b1c6e2415d548976666c32d3eabc697455405a754298c32d501d142019bdc17 extends Twig_Template
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
        $__internal_2a70480202422a8030258342f9e0c549f8d20fcf2bdb6e3e6f02a8a1a7e36e3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a70480202422a8030258342f9e0c549f8d20fcf2bdb6e3e6f02a8a1a7e36e3e->enter($__internal_2a70480202422a8030258342f9e0c549f8d20fcf2bdb6e3e6f02a8a1a7e36e3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_2a70480202422a8030258342f9e0c549f8d20fcf2bdb6e3e6f02a8a1a7e36e3e->leave($__internal_2a70480202422a8030258342f9e0c549f8d20fcf2bdb6e3e6f02a8a1a7e36e3e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}
