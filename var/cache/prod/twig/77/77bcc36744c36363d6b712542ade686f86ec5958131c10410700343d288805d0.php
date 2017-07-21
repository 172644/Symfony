<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_7c8e83afe00374f2777ec8573bb3105e7784824ce989862b9259f276313c5790 extends Twig_Template
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
        $__internal_6f617cbfec2c42e56a4422495d59d2cb3e79804fbe0629f444d0777f7e09835f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f617cbfec2c42e56a4422495d59d2cb3e79804fbe0629f444d0777f7e09835f->enter($__internal_6f617cbfec2c42e56a4422495d59d2cb3e79804fbe0629f444d0777f7e09835f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_6f617cbfec2c42e56a4422495d59d2cb3e79804fbe0629f444d0777f7e09835f->leave($__internal_6f617cbfec2c42e56a4422495d59d2cb3e79804fbe0629f444d0777f7e09835f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
