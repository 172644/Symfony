<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_11926466615dafda6e5a783f91169e68c1d5a1721d0cbcd5bb6ae45af359699d extends Twig_Template
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
        $__internal_9104c6625a0d8c555cef70f1fa4d97aeca0a6aa292315683f5d0b617d25c8b9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9104c6625a0d8c555cef70f1fa4d97aeca0a6aa292315683f5d0b617d25c8b9a->enter($__internal_9104c6625a0d8c555cef70f1fa4d97aeca0a6aa292315683f5d0b617d25c8b9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_9104c6625a0d8c555cef70f1fa4d97aeca0a6aa292315683f5d0b617d25c8b9a->leave($__internal_9104c6625a0d8c555cef70f1fa4d97aeca0a6aa292315683f5d0b617d25c8b9a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
