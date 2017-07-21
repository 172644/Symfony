<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_1a56c700fe46ea91941c355e8243f4fd5fa5beb2a1c6e3e14c7c532a1c4258d4 extends Twig_Template
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
        $__internal_dd6e7e5ff70a6a0a2d0ebbfcafbc0e9ed20de696eb52bb36f72bbdcab146f1d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd6e7e5ff70a6a0a2d0ebbfcafbc0e9ed20de696eb52bb36f72bbdcab146f1d8->enter($__internal_dd6e7e5ff70a6a0a2d0ebbfcafbc0e9ed20de696eb52bb36f72bbdcab146f1d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_dd6e7e5ff70a6a0a2d0ebbfcafbc0e9ed20de696eb52bb36f72bbdcab146f1d8->leave($__internal_dd6e7e5ff70a6a0a2d0ebbfcafbc0e9ed20de696eb52bb36f72bbdcab146f1d8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
