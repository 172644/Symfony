<?php

/* @Framework/Form/form_start.html.php */
class __TwigTemplate_ee5584ec6fcc6069b1adde9117446a5eefea7a92d0afff07a08f50fe437e55e5 extends Twig_Template
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
        $__internal_364413a66234116105aa7b532216c41d4535f9db2748000f4b89a9c104fe634a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_364413a66234116105aa7b532216c41d4535f9db2748000f4b89a9c104fe634a->enter($__internal_364413a66234116105aa7b532216c41d4535f9db2748000f4b89a9c104fe634a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_7a46fdf36db6cdff4f4c3164a3de136bfb7599207f7865691bfa2eef7ef4abbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a46fdf36db6cdff4f4c3164a3de136bfb7599207f7865691bfa2eef7ef4abbf->enter($__internal_7a46fdf36db6cdff4f4c3164a3de136bfb7599207f7865691bfa2eef7ef4abbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_364413a66234116105aa7b532216c41d4535f9db2748000f4b89a9c104fe634a->leave($__internal_364413a66234116105aa7b532216c41d4535f9db2748000f4b89a9c104fe634a_prof);

        
        $__internal_7a46fdf36db6cdff4f4c3164a3de136bfb7599207f7865691bfa2eef7ef4abbf->leave($__internal_7a46fdf36db6cdff4f4c3164a3de136bfb7599207f7865691bfa2eef7ef4abbf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_start.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
", "@Framework/Form/form_start.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_start.html.php");
    }
}
