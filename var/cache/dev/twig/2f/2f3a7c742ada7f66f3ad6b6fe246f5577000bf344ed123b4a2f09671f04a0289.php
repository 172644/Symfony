<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_c78d88ca116cdb078e763a028110cb86bce6d200761aa578373cbb53785dfd5a extends Twig_Template
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
        $__internal_f510e675094a6387a67e642765a0cbb2c5fcc2f6e03554a234c0372ce53bfa89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f510e675094a6387a67e642765a0cbb2c5fcc2f6e03554a234c0372ce53bfa89->enter($__internal_f510e675094a6387a67e642765a0cbb2c5fcc2f6e03554a234c0372ce53bfa89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_afb648bcfb2203430d78744e0779523a53d375bae8172817c8ccc9136af36552 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afb648bcfb2203430d78744e0779523a53d375bae8172817c8ccc9136af36552->enter($__internal_afb648bcfb2203430d78744e0779523a53d375bae8172817c8ccc9136af36552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_f510e675094a6387a67e642765a0cbb2c5fcc2f6e03554a234c0372ce53bfa89->leave($__internal_f510e675094a6387a67e642765a0cbb2c5fcc2f6e03554a234c0372ce53bfa89_prof);

        
        $__internal_afb648bcfb2203430d78744e0779523a53d375bae8172817c8ccc9136af36552->leave($__internal_afb648bcfb2203430d78744e0779523a53d375bae8172817c8ccc9136af36552_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
