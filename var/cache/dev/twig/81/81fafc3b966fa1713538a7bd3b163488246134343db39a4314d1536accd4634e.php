<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_bd0b116025a5eff140dd2a8165d6baa3bee9e47eccab687e7113e0d480db58ce extends Twig_Template
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
        $__internal_c9b97cf79309edf96f6253612dc9b332a96d2bbad74f9414183a041ee7908811 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9b97cf79309edf96f6253612dc9b332a96d2bbad74f9414183a041ee7908811->enter($__internal_c9b97cf79309edf96f6253612dc9b332a96d2bbad74f9414183a041ee7908811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_c42fb1fb44bfb07155b1eccff80f015ea6dfa4edd22e2622b3e615ffb8eaf4e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c42fb1fb44bfb07155b1eccff80f015ea6dfa4edd22e2622b3e615ffb8eaf4e0->enter($__internal_c42fb1fb44bfb07155b1eccff80f015ea6dfa4edd22e2622b3e615ffb8eaf4e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_c9b97cf79309edf96f6253612dc9b332a96d2bbad74f9414183a041ee7908811->leave($__internal_c9b97cf79309edf96f6253612dc9b332a96d2bbad74f9414183a041ee7908811_prof);

        
        $__internal_c42fb1fb44bfb07155b1eccff80f015ea6dfa4edd22e2622b3e615ffb8eaf4e0->leave($__internal_c42fb1fb44bfb07155b1eccff80f015ea6dfa4edd22e2622b3e615ffb8eaf4e0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
