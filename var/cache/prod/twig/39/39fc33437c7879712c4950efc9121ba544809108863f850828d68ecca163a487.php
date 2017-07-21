<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_ad0b47929fad751475ac6214eba70e05b67a2571f6ad843c182cd531ebdb627a extends Twig_Template
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
        $__internal_598d4fbeec27aca03369106d61fc0d22976da317446436d8542ef0221d7be3f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_598d4fbeec27aca03369106d61fc0d22976da317446436d8542ef0221d7be3f0->enter($__internal_598d4fbeec27aca03369106d61fc0d22976da317446436d8542ef0221d7be3f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_598d4fbeec27aca03369106d61fc0d22976da317446436d8542ef0221d7be3f0->leave($__internal_598d4fbeec27aca03369106d61fc0d22976da317446436d8542ef0221d7be3f0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
