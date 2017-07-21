<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_73638c4f56969f17d538ee05c2436204e2a98e480f3c7865f25fdf3e4bfe252a extends Twig_Template
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
        $__internal_7c40f4380cacf7415574f80b1291b457e6a81e2f51d1c2e61480e64d7ce2cad2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c40f4380cacf7415574f80b1291b457e6a81e2f51d1c2e61480e64d7ce2cad2->enter($__internal_7c40f4380cacf7415574f80b1291b457e6a81e2f51d1c2e61480e64d7ce2cad2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_7c40f4380cacf7415574f80b1291b457e6a81e2f51d1c2e61480e64d7ce2cad2->leave($__internal_7c40f4380cacf7415574f80b1291b457e6a81e2f51d1c2e61480e64d7ce2cad2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
