<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_6bde29f8b01bc7b23837e71d838adcd48f3c6fe253f896913578e1a6984ec881 extends Twig_Template
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
        $__internal_8edfce01b4d17f54bc1d85e29bd2b102c941baf971fcc40885cda2cfcdea12a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8edfce01b4d17f54bc1d85e29bd2b102c941baf971fcc40885cda2cfcdea12a3->enter($__internal_8edfce01b4d17f54bc1d85e29bd2b102c941baf971fcc40885cda2cfcdea12a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_8edfce01b4d17f54bc1d85e29bd2b102c941baf971fcc40885cda2cfcdea12a3->leave($__internal_8edfce01b4d17f54bc1d85e29bd2b102c941baf971fcc40885cda2cfcdea12a3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_container_attributes.html.php");
    }
}
