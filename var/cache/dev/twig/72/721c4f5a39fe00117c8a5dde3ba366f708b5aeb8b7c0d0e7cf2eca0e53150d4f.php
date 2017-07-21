<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_89ee3c4d1993fbfb03eb153d3033b87eb2bf6cd111f347a88e62e564451e1b7d extends Twig_Template
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
        $__internal_0e9796214be4e7020670e2c9febd3343989487f4842414b420abc384e526ceb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e9796214be4e7020670e2c9febd3343989487f4842414b420abc384e526ceb6->enter($__internal_0e9796214be4e7020670e2c9febd3343989487f4842414b420abc384e526ceb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_f2492164509ea0f2d95e90576bd6e8fd83f738209d890e68cf3aa420f00ab8d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2492164509ea0f2d95e90576bd6e8fd83f738209d890e68cf3aa420f00ab8d9->enter($__internal_f2492164509ea0f2d95e90576bd6e8fd83f738209d890e68cf3aa420f00ab8d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_0e9796214be4e7020670e2c9febd3343989487f4842414b420abc384e526ceb6->leave($__internal_0e9796214be4e7020670e2c9febd3343989487f4842414b420abc384e526ceb6_prof);

        
        $__internal_f2492164509ea0f2d95e90576bd6e8fd83f738209d890e68cf3aa420f00ab8d9->leave($__internal_f2492164509ea0f2d95e90576bd6e8fd83f738209d890e68cf3aa420f00ab8d9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
