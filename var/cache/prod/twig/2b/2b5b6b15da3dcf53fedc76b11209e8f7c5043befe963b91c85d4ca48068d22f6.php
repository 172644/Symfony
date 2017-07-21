<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_318076c384fa12f4504a2149ad96732f82073343e08b1989228bda85cba273cc extends Twig_Template
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
        $__internal_c00cc3303aa7d71dd018453af673c43fe53f1c60e397c00aed4cb895a931aecc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c00cc3303aa7d71dd018453af673c43fe53f1c60e397c00aed4cb895a931aecc->enter($__internal_c00cc3303aa7d71dd018453af673c43fe53f1c60e397c00aed4cb895a931aecc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_c00cc3303aa7d71dd018453af673c43fe53f1c60e397c00aed4cb895a931aecc->leave($__internal_c00cc3303aa7d71dd018453af673c43fe53f1c60e397c00aed4cb895a931aecc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
