<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_28739a276688a1dd7c77915a2683dbcc93c6a98f85bf5cabf2d2ac1f2a2831ca extends Twig_Template
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
        $__internal_ccf8351068294847d1b3061d8ac238fe5700a72919f438e037ef52c27ba95d80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccf8351068294847d1b3061d8ac238fe5700a72919f438e037ef52c27ba95d80->enter($__internal_ccf8351068294847d1b3061d8ac238fe5700a72919f438e037ef52c27ba95d80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_854902d1743d0592ef949a1e4bb2bf2fa7dac2e240a74ff2d71a97b915d7ce02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_854902d1743d0592ef949a1e4bb2bf2fa7dac2e240a74ff2d71a97b915d7ce02->enter($__internal_854902d1743d0592ef949a1e4bb2bf2fa7dac2e240a74ff2d71a97b915d7ce02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_ccf8351068294847d1b3061d8ac238fe5700a72919f438e037ef52c27ba95d80->leave($__internal_ccf8351068294847d1b3061d8ac238fe5700a72919f438e037ef52c27ba95d80_prof);

        
        $__internal_854902d1743d0592ef949a1e4bb2bf2fa7dac2e240a74ff2d71a97b915d7ce02->leave($__internal_854902d1743d0592ef949a1e4bb2bf2fa7dac2e240a74ff2d71a97b915d7ce02_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
