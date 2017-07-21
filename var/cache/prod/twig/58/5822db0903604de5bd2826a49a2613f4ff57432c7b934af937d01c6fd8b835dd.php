<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_a5cf10c23556dd8f5817f49648727d0fba6dfd007323b7e2c03115876daaf15b extends Twig_Template
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
        $__internal_f3b23fdc1a508f8af331d0cee8056d4a67dd4dab04f78befa4345994f6136356 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3b23fdc1a508f8af331d0cee8056d4a67dd4dab04f78befa4345994f6136356->enter($__internal_f3b23fdc1a508f8af331d0cee8056d4a67dd4dab04f78befa4345994f6136356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_f3b23fdc1a508f8af331d0cee8056d4a67dd4dab04f78befa4345994f6136356->leave($__internal_f3b23fdc1a508f8af331d0cee8056d4a67dd4dab04f78befa4345994f6136356_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
