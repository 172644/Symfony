<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_85798145d16ae626d70f2bb7228efe5f55e97fbfe8ec30822a1b619acde5beff extends Twig_Template
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
        $__internal_0388a6a28312978ee89ae142b4af60a90a7dff6c9165685d69a550546db439b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0388a6a28312978ee89ae142b4af60a90a7dff6c9165685d69a550546db439b3->enter($__internal_0388a6a28312978ee89ae142b4af60a90a7dff6c9165685d69a550546db439b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_0388a6a28312978ee89ae142b4af60a90a7dff6c9165685d69a550546db439b3->leave($__internal_0388a6a28312978ee89ae142b4af60a90a7dff6c9165685d69a550546db439b3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
