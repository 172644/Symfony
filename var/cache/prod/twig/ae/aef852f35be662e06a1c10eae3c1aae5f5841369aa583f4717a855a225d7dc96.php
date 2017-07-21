<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_26b69b523419a7416ec747bb6b7b5b75c087ae205c44dbee3e6943875d5010c1 extends Twig_Template
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
        $__internal_2978503b55ff88c8c5bb2cc151e101d2ce16062d4e3ea12a60d22cf42b1d8710 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2978503b55ff88c8c5bb2cc151e101d2ce16062d4e3ea12a60d22cf42b1d8710->enter($__internal_2978503b55ff88c8c5bb2cc151e101d2ce16062d4e3ea12a60d22cf42b1d8710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_2978503b55ff88c8c5bb2cc151e101d2ce16062d4e3ea12a60d22cf42b1d8710->leave($__internal_2978503b55ff88c8c5bb2cc151e101d2ce16062d4e3ea12a60d22cf42b1d8710_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
