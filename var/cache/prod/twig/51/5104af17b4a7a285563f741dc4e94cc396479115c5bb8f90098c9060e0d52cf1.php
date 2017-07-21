<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_26c0044a1959ea7a0fba4e6262cf46191a26904b6346dfea1ddedb1d090a741b extends Twig_Template
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
        $__internal_86d16658aa2869c711e05150854543a9e58628cc1f20ef61cb106e15297ba6d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86d16658aa2869c711e05150854543a9e58628cc1f20ef61cb106e15297ba6d5->enter($__internal_86d16658aa2869c711e05150854543a9e58628cc1f20ef61cb106e15297ba6d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_86d16658aa2869c711e05150854543a9e58628cc1f20ef61cb106e15297ba6d5->leave($__internal_86d16658aa2869c711e05150854543a9e58628cc1f20ef61cb106e15297ba6d5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
