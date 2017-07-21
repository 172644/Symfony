<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_4d6f8a0d43abd415e75cd386837b22982f26e04089917c4e93a38f4ab1e08f87 extends Twig_Template
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
        $__internal_9329df2073626239f40d69fca4bb7ed2fc49261eac9f41de0622078f05346010 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9329df2073626239f40d69fca4bb7ed2fc49261eac9f41de0622078f05346010->enter($__internal_9329df2073626239f40d69fca4bb7ed2fc49261eac9f41de0622078f05346010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_b396cb0c19e254447e9cd75f0aa92e85cc08fe8f5590365029495fc46d57867a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b396cb0c19e254447e9cd75f0aa92e85cc08fe8f5590365029495fc46d57867a->enter($__internal_b396cb0c19e254447e9cd75f0aa92e85cc08fe8f5590365029495fc46d57867a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_9329df2073626239f40d69fca4bb7ed2fc49261eac9f41de0622078f05346010->leave($__internal_9329df2073626239f40d69fca4bb7ed2fc49261eac9f41de0622078f05346010_prof);

        
        $__internal_b396cb0c19e254447e9cd75f0aa92e85cc08fe8f5590365029495fc46d57867a->leave($__internal_b396cb0c19e254447e9cd75f0aa92e85cc08fe8f5590365029495fc46d57867a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
