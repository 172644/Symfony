<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_7e81e2e7a22eb06a235f442023d89fca8be5f87570ccb744938137b6352aa5cf extends Twig_Template
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
        $__internal_fde9cd83c60e8613ff8c4f953f15da5213504a754bbc03c994d9a11d7fa52e35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fde9cd83c60e8613ff8c4f953f15da5213504a754bbc03c994d9a11d7fa52e35->enter($__internal_fde9cd83c60e8613ff8c4f953f15da5213504a754bbc03c994d9a11d7fa52e35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_fde9cd83c60e8613ff8c4f953f15da5213504a754bbc03c994d9a11d7fa52e35->leave($__internal_fde9cd83c60e8613ff8c4f953f15da5213504a754bbc03c994d9a11d7fa52e35_prof);

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
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\money_widget.html.php");
    }
}
