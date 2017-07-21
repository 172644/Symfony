<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_cc06513d9cd03956f022a9204bad5047970e4ad5bbeff6d659d26aa536a4e385 extends Twig_Template
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
        $__internal_c4a861535667422580f9e6e82ab3027ddab8d0397aef9732b86894b5b60ce1a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4a861535667422580f9e6e82ab3027ddab8d0397aef9732b86894b5b60ce1a5->enter($__internal_c4a861535667422580f9e6e82ab3027ddab8d0397aef9732b86894b5b60ce1a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_6ccee593baa72830ba91613f0814875b629fe3e09da82ff77b4cd6f0427b3729 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ccee593baa72830ba91613f0814875b629fe3e09da82ff77b4cd6f0427b3729->enter($__internal_6ccee593baa72830ba91613f0814875b629fe3e09da82ff77b4cd6f0427b3729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_c4a861535667422580f9e6e82ab3027ddab8d0397aef9732b86894b5b60ce1a5->leave($__internal_c4a861535667422580f9e6e82ab3027ddab8d0397aef9732b86894b5b60ce1a5_prof);

        
        $__internal_6ccee593baa72830ba91613f0814875b629fe3e09da82ff77b4cd6f0427b3729->leave($__internal_6ccee593baa72830ba91613f0814875b629fe3e09da82ff77b4cd6f0427b3729_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\money_widget.html.php");
    }
}
