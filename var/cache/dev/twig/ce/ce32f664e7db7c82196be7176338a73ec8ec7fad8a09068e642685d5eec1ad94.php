<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_7dec9355a4ce6abbf7d9629080cadbfd956297c1f5b089cc8d02094574207c35 extends Twig_Template
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
        $__internal_fe95ae005a57286caaf7aabc7a83401a8a4fee67119e31160182e179a43298ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe95ae005a57286caaf7aabc7a83401a8a4fee67119e31160182e179a43298ba->enter($__internal_fe95ae005a57286caaf7aabc7a83401a8a4fee67119e31160182e179a43298ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_2eaa11b35e81da9b78d5f479a68ff366083e10ee8db898d74e19d66acacfa09b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2eaa11b35e81da9b78d5f479a68ff366083e10ee8db898d74e19d66acacfa09b->enter($__internal_2eaa11b35e81da9b78d5f479a68ff366083e10ee8db898d74e19d66acacfa09b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_fe95ae005a57286caaf7aabc7a83401a8a4fee67119e31160182e179a43298ba->leave($__internal_fe95ae005a57286caaf7aabc7a83401a8a4fee67119e31160182e179a43298ba_prof);

        
        $__internal_2eaa11b35e81da9b78d5f479a68ff366083e10ee8db898d74e19d66acacfa09b->leave($__internal_2eaa11b35e81da9b78d5f479a68ff366083e10ee8db898d74e19d66acacfa09b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
