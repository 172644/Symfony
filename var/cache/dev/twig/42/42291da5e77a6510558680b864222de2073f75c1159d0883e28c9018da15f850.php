<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_918c08d7f27563733cc6578a17bdb356080b30496fef309c627c1237fca34a5f extends Twig_Template
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
        $__internal_7148106534f57c2afa5e73e0a2981f73508576f9e9bb16ade76f74512fd8e439 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7148106534f57c2afa5e73e0a2981f73508576f9e9bb16ade76f74512fd8e439->enter($__internal_7148106534f57c2afa5e73e0a2981f73508576f9e9bb16ade76f74512fd8e439_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_ff82814174094768bab2ef6b6c55b891ec13d5ed02b3f01c76cbdae40bdc108b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff82814174094768bab2ef6b6c55b891ec13d5ed02b3f01c76cbdae40bdc108b->enter($__internal_ff82814174094768bab2ef6b6c55b891ec13d5ed02b3f01c76cbdae40bdc108b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_7148106534f57c2afa5e73e0a2981f73508576f9e9bb16ade76f74512fd8e439->leave($__internal_7148106534f57c2afa5e73e0a2981f73508576f9e9bb16ade76f74512fd8e439_prof);

        
        $__internal_ff82814174094768bab2ef6b6c55b891ec13d5ed02b3f01c76cbdae40bdc108b->leave($__internal_ff82814174094768bab2ef6b6c55b891ec13d5ed02b3f01c76cbdae40bdc108b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}
