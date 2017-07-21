<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_55014ab35ad11b1ec8b815d7f479c0e40b871e2423b8a01508be9f463c97ebe6 extends Twig_Template
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
        $__internal_5610bfefa97847a553b60c708bcee104ade7a9e76dcdd4f4d01f384678a86201 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5610bfefa97847a553b60c708bcee104ade7a9e76dcdd4f4d01f384678a86201->enter($__internal_5610bfefa97847a553b60c708bcee104ade7a9e76dcdd4f4d01f384678a86201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_5610bfefa97847a553b60c708bcee104ade7a9e76dcdd4f4d01f384678a86201->leave($__internal_5610bfefa97847a553b60c708bcee104ade7a9e76dcdd4f4d01f384678a86201_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
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
