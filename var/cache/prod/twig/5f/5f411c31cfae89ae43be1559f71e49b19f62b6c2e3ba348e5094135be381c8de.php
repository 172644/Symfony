<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_a41ea5e36cca51b839f164594aea0a8892b5d2f045cadd5259b5324248ded9f2 extends Twig_Template
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
        $__internal_06b3831410bd815117d9ac66151fd60d047e83ac3bf814f0b5452ad04299b9f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06b3831410bd815117d9ac66151fd60d047e83ac3bf814f0b5452ad04299b9f1->enter($__internal_06b3831410bd815117d9ac66151fd60d047e83ac3bf814f0b5452ad04299b9f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_06b3831410bd815117d9ac66151fd60d047e83ac3bf814f0b5452ad04299b9f1->leave($__internal_06b3831410bd815117d9ac66151fd60d047e83ac3bf814f0b5452ad04299b9f1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
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
