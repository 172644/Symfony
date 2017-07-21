<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_9df91813167db60bbcb673b047daee2d4d4fbe49de36bcf40cfee0b10281975e extends Twig_Template
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
        $__internal_10b7e8a486559fc744c016bc5ffb6658f7c7f15e9a375a4f5927e8495982a5b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10b7e8a486559fc744c016bc5ffb6658f7c7f15e9a375a4f5927e8495982a5b1->enter($__internal_10b7e8a486559fc744c016bc5ffb6658f7c7f15e9a375a4f5927e8495982a5b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_83fd9c5791000709578fef15a68e14ed3c9b74aa132ed5b4e2c18e266b1feb8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83fd9c5791000709578fef15a68e14ed3c9b74aa132ed5b4e2c18e266b1feb8e->enter($__internal_83fd9c5791000709578fef15a68e14ed3c9b74aa132ed5b4e2c18e266b1feb8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_10b7e8a486559fc744c016bc5ffb6658f7c7f15e9a375a4f5927e8495982a5b1->leave($__internal_10b7e8a486559fc744c016bc5ffb6658f7c7f15e9a375a4f5927e8495982a5b1_prof);

        
        $__internal_83fd9c5791000709578fef15a68e14ed3c9b74aa132ed5b4e2c18e266b1feb8e->leave($__internal_83fd9c5791000709578fef15a68e14ed3c9b74aa132ed5b4e2c18e266b1feb8e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_attributes.html.php");
    }
}
