<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_a3c049f3e81f6e72dce7b71d611e4dbd1491ca265d0502d0e8c4f21dbaf3e280 extends Twig_Template
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
        $__internal_cb6b3a673db653a8a6ab8e2380fbe43f99da4f672eaf8190041b5451fa5e8cc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb6b3a673db653a8a6ab8e2380fbe43f99da4f672eaf8190041b5451fa5e8cc0->enter($__internal_cb6b3a673db653a8a6ab8e2380fbe43f99da4f672eaf8190041b5451fa5e8cc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_cb6b3a673db653a8a6ab8e2380fbe43f99da4f672eaf8190041b5451fa5e8cc0->leave($__internal_cb6b3a673db653a8a6ab8e2380fbe43f99da4f672eaf8190041b5451fa5e8cc0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_attributes.html.php");
    }
}
