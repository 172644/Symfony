<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_ec66945d6d40d08cfe5e8a810c5d093b0509f201e04e3ffffb62ce3fde296f51 extends Twig_Template
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
        $__internal_51c4eb303207df1c6d12032aa0c9b5d57763e71f6b0a2dcce80c27288d2739f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51c4eb303207df1c6d12032aa0c9b5d57763e71f6b0a2dcce80c27288d2739f8->enter($__internal_51c4eb303207df1c6d12032aa0c9b5d57763e71f6b0a2dcce80c27288d2739f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_a17a28bde49cb5ad0a9ea93798ee5906f9e28384136b7368021233e2205b8b91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a17a28bde49cb5ad0a9ea93798ee5906f9e28384136b7368021233e2205b8b91->enter($__internal_a17a28bde49cb5ad0a9ea93798ee5906f9e28384136b7368021233e2205b8b91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_51c4eb303207df1c6d12032aa0c9b5d57763e71f6b0a2dcce80c27288d2739f8->leave($__internal_51c4eb303207df1c6d12032aa0c9b5d57763e71f6b0a2dcce80c27288d2739f8_prof);

        
        $__internal_a17a28bde49cb5ad0a9ea93798ee5906f9e28384136b7368021233e2205b8b91->leave($__internal_a17a28bde49cb5ad0a9ea93798ee5906f9e28384136b7368021233e2205b8b91_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
