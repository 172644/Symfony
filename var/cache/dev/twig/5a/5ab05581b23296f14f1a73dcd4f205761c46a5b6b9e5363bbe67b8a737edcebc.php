<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_3bd293cacda860a3ce81274a6428385d398e6ea660d4e6b161430c3f8cb9d394 extends Twig_Template
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
        $__internal_ea5aacb970cd60082f78b4f1c66d8da03f9ffbe7854d9d7ff72680f56ef575fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea5aacb970cd60082f78b4f1c66d8da03f9ffbe7854d9d7ff72680f56ef575fb->enter($__internal_ea5aacb970cd60082f78b4f1c66d8da03f9ffbe7854d9d7ff72680f56ef575fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_5a4d4f852ca585eb400f909b390b29a9831c50054fc7ed70b1d5e2852754d922 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a4d4f852ca585eb400f909b390b29a9831c50054fc7ed70b1d5e2852754d922->enter($__internal_5a4d4f852ca585eb400f909b390b29a9831c50054fc7ed70b1d5e2852754d922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_ea5aacb970cd60082f78b4f1c66d8da03f9ffbe7854d9d7ff72680f56ef575fb->leave($__internal_ea5aacb970cd60082f78b4f1c66d8da03f9ffbe7854d9d7ff72680f56ef575fb_prof);

        
        $__internal_5a4d4f852ca585eb400f909b390b29a9831c50054fc7ed70b1d5e2852754d922->leave($__internal_5a4d4f852ca585eb400f909b390b29a9831c50054fc7ed70b1d5e2852754d922_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\datetime_widget.html.php");
    }
}
