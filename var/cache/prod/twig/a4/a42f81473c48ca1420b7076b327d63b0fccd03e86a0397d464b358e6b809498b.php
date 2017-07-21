<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_1d581a3b8b85ec2a5338e255062b06ea9ce0d7393a70ae5ce62ed89c1e1b6d22 extends Twig_Template
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
        $__internal_4d07c29eeacd17319e16d60f828a7580db44a05f0e0e036c471dd87d0ee0ef7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d07c29eeacd17319e16d60f828a7580db44a05f0e0e036c471dd87d0ee0ef7d->enter($__internal_4d07c29eeacd17319e16d60f828a7580db44a05f0e0e036c471dd87d0ee0ef7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_4d07c29eeacd17319e16d60f828a7580db44a05f0e0e036c471dd87d0ee0ef7d->leave($__internal_4d07c29eeacd17319e16d60f828a7580db44a05f0e0e036c471dd87d0ee0ef7d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_attributes.html.php");
    }
}
