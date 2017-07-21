<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_f16367df7978391d169f3a88f67d8002f010baa7d6b9001c13acb83fd8f53157 extends Twig_Template
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
        $__internal_2bdb9d5a5ac2716291aa44b0201ac4f6a6ba19c957b8670f9f03a8b67314ae21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bdb9d5a5ac2716291aa44b0201ac4f6a6ba19c957b8670f9f03a8b67314ae21->enter($__internal_2bdb9d5a5ac2716291aa44b0201ac4f6a6ba19c957b8670f9f03a8b67314ae21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_eed805dd1a0e9341044c02f960215393be1a43884c9a066afe818255827e3636 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eed805dd1a0e9341044c02f960215393be1a43884c9a066afe818255827e3636->enter($__internal_eed805dd1a0e9341044c02f960215393be1a43884c9a066afe818255827e3636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_2bdb9d5a5ac2716291aa44b0201ac4f6a6ba19c957b8670f9f03a8b67314ae21->leave($__internal_2bdb9d5a5ac2716291aa44b0201ac4f6a6ba19c957b8670f9f03a8b67314ae21_prof);

        
        $__internal_eed805dd1a0e9341044c02f960215393be1a43884c9a066afe818255827e3636->leave($__internal_eed805dd1a0e9341044c02f960215393be1a43884c9a066afe818255827e3636_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
