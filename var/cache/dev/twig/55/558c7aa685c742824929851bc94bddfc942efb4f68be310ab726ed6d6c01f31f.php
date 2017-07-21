<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_e243871f966f467d2e50393d46fc57a35b8a3374c2101dde22386602eacd848c extends Twig_Template
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
        $__internal_64ebe5c810bc46e9d59550bcfcd1ce6d73a82138184d9e02cf1c0491d97b3335 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64ebe5c810bc46e9d59550bcfcd1ce6d73a82138184d9e02cf1c0491d97b3335->enter($__internal_64ebe5c810bc46e9d59550bcfcd1ce6d73a82138184d9e02cf1c0491d97b3335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_03bcaf75558992f327e1563c247ea2d61ee844aefab9a43f73db8c094ac676b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03bcaf75558992f327e1563c247ea2d61ee844aefab9a43f73db8c094ac676b9->enter($__internal_03bcaf75558992f327e1563c247ea2d61ee844aefab9a43f73db8c094ac676b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_64ebe5c810bc46e9d59550bcfcd1ce6d73a82138184d9e02cf1c0491d97b3335->leave($__internal_64ebe5c810bc46e9d59550bcfcd1ce6d73a82138184d9e02cf1c0491d97b3335_prof);

        
        $__internal_03bcaf75558992f327e1563c247ea2d61ee844aefab9a43f73db8c094ac676b9->leave($__internal_03bcaf75558992f327e1563c247ea2d61ee844aefab9a43f73db8c094ac676b9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}
