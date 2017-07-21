<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_a7a4375f2b337203bf04c6e0dbb8ff9c0c44c84004a94ab9cc37a3e354a662ba extends Twig_Template
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
        $__internal_5446dc32c7fbfa9030368daeff148d94f6bb0e0c48540c73e20c3f02b82b8900 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5446dc32c7fbfa9030368daeff148d94f6bb0e0c48540c73e20c3f02b82b8900->enter($__internal_5446dc32c7fbfa9030368daeff148d94f6bb0e0c48540c73e20c3f02b82b8900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_5446dc32c7fbfa9030368daeff148d94f6bb0e0c48540c73e20c3f02b82b8900->leave($__internal_5446dc32c7fbfa9030368daeff148d94f6bb0e0c48540c73e20c3f02b82b8900_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
