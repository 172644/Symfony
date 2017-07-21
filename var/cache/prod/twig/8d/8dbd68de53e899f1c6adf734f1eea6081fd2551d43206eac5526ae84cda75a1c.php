<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_b67600311c0781771d02a892f4211b9fe608114a61790628d5c63f209efa0933 extends Twig_Template
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
        $__internal_ed2f5ab7981c441121b084daf000044c35ad6cc2448f1cf60c024731c462df12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed2f5ab7981c441121b084daf000044c35ad6cc2448f1cf60c024731c462df12->enter($__internal_ed2f5ab7981c441121b084daf000044c35ad6cc2448f1cf60c024731c462df12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_ed2f5ab7981c441121b084daf000044c35ad6cc2448f1cf60c024731c462df12->leave($__internal_ed2f5ab7981c441121b084daf000044c35ad6cc2448f1cf60c024731c462df12_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
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
