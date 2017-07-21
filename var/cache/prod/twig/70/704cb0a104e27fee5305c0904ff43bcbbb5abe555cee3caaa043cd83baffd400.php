<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_d070746e9e04c9fd09f7e9ebe1d75d033bc963da41cb78bf1caa18d60e1126ff extends Twig_Template
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
        $__internal_82932f9027598eebf718b9c384b29d5c35e9aab391ca081926b897ffc66bd556 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82932f9027598eebf718b9c384b29d5c35e9aab391ca081926b897ffc66bd556->enter($__internal_82932f9027598eebf718b9c384b29d5c35e9aab391ca081926b897ffc66bd556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_82932f9027598eebf718b9c384b29d5c35e9aab391ca081926b897ffc66bd556->leave($__internal_82932f9027598eebf718b9c384b29d5c35e9aab391ca081926b897ffc66bd556_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
