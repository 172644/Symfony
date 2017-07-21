<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_0967452df66c0814ee9efa4f6d914c2ac9ef28d4dc2d7008baabb1fc8e38850e extends Twig_Template
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
        $__internal_7908e8112ba1189c509ce337a1151e93124e1a7d5a60da6a296e60bc88d21baa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7908e8112ba1189c509ce337a1151e93124e1a7d5a60da6a296e60bc88d21baa->enter($__internal_7908e8112ba1189c509ce337a1151e93124e1a7d5a60da6a296e60bc88d21baa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_f0f079c9e28785e7716b0e8ebd892011dffeb5f146402b8f48e9d2efc18437a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0f079c9e28785e7716b0e8ebd892011dffeb5f146402b8f48e9d2efc18437a9->enter($__internal_f0f079c9e28785e7716b0e8ebd892011dffeb5f146402b8f48e9d2efc18437a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_7908e8112ba1189c509ce337a1151e93124e1a7d5a60da6a296e60bc88d21baa->leave($__internal_7908e8112ba1189c509ce337a1151e93124e1a7d5a60da6a296e60bc88d21baa_prof);

        
        $__internal_f0f079c9e28785e7716b0e8ebd892011dffeb5f146402b8f48e9d2efc18437a9->leave($__internal_f0f079c9e28785e7716b0e8ebd892011dffeb5f146402b8f48e9d2efc18437a9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_widget.html.php");
    }
}
