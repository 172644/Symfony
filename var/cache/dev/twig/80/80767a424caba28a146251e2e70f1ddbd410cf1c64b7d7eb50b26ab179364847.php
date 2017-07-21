<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_ebbe83b3d18213568a009cb602210920826b4e6f332ba9c13d8c6ac3643bcc0c extends Twig_Template
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
        $__internal_49f693be33d28d2f56b4a03a820baf85881e40373bb1be6d61ec897899641945 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49f693be33d28d2f56b4a03a820baf85881e40373bb1be6d61ec897899641945->enter($__internal_49f693be33d28d2f56b4a03a820baf85881e40373bb1be6d61ec897899641945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_407248018289b9e492474482272149576a17cdd3864f08ce8ebcf910c0cc3f6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_407248018289b9e492474482272149576a17cdd3864f08ce8ebcf910c0cc3f6c->enter($__internal_407248018289b9e492474482272149576a17cdd3864f08ce8ebcf910c0cc3f6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_49f693be33d28d2f56b4a03a820baf85881e40373bb1be6d61ec897899641945->leave($__internal_49f693be33d28d2f56b4a03a820baf85881e40373bb1be6d61ec897899641945_prof);

        
        $__internal_407248018289b9e492474482272149576a17cdd3864f08ce8ebcf910c0cc3f6c->leave($__internal_407248018289b9e492474482272149576a17cdd3864f08ce8ebcf910c0cc3f6c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
