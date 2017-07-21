<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_609687b8637cf4813c72d1476026d6e081832fc1157f973d3d34b1958ba01533 extends Twig_Template
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
        $__internal_5711070c8e916aa021e332a69e365609bbe74b000e3d89db45c7e3aaf42d180d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5711070c8e916aa021e332a69e365609bbe74b000e3d89db45c7e3aaf42d180d->enter($__internal_5711070c8e916aa021e332a69e365609bbe74b000e3d89db45c7e3aaf42d180d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_5711070c8e916aa021e332a69e365609bbe74b000e3d89db45c7e3aaf42d180d->leave($__internal_5711070c8e916aa021e332a69e365609bbe74b000e3d89db45c7e3aaf42d180d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
