<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_0b57fa7328fbd0e7052383449b6d7f78da4745730acfd1c1e8a42221adb98072 extends Twig_Template
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
        $__internal_d186f5c3526b45796d4b6bdde1c894a226aba9da168996897f8144c66ea7593a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d186f5c3526b45796d4b6bdde1c894a226aba9da168996897f8144c66ea7593a->enter($__internal_d186f5c3526b45796d4b6bdde1c894a226aba9da168996897f8144c66ea7593a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_d186f5c3526b45796d4b6bdde1c894a226aba9da168996897f8144c66ea7593a->leave($__internal_d186f5c3526b45796d4b6bdde1c894a226aba9da168996897f8144c66ea7593a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
