<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_9578364aa8074a48c6c98d12c67768211e8752693a11d60cd769ee39cdfbda8a extends Twig_Template
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
        $__internal_76ffa359bebf35f3b03aa63c93742635205da3b5ebd95bd03b03023f3030d4be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76ffa359bebf35f3b03aa63c93742635205da3b5ebd95bd03b03023f3030d4be->enter($__internal_76ffa359bebf35f3b03aa63c93742635205da3b5ebd95bd03b03023f3030d4be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_50a1d2b505344889d7df8243475a6453df16008bebc34165134f572c178d3f08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50a1d2b505344889d7df8243475a6453df16008bebc34165134f572c178d3f08->enter($__internal_50a1d2b505344889d7df8243475a6453df16008bebc34165134f572c178d3f08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_76ffa359bebf35f3b03aa63c93742635205da3b5ebd95bd03b03023f3030d4be->leave($__internal_76ffa359bebf35f3b03aa63c93742635205da3b5ebd95bd03b03023f3030d4be_prof);

        
        $__internal_50a1d2b505344889d7df8243475a6453df16008bebc34165134f572c178d3f08->leave($__internal_50a1d2b505344889d7df8243475a6453df16008bebc34165134f572c178d3f08_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
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
