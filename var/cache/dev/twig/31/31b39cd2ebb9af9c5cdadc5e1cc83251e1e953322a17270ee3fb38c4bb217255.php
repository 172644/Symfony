<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_9171465e6a5ae625521a5a0e311ea5a22e67524e1f9fc233ce23a1b3269f3860 extends Twig_Template
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
        $__internal_b736eaa134dbaa63ea741ed2f9710966662e52db868c4998b958f791332432fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b736eaa134dbaa63ea741ed2f9710966662e52db868c4998b958f791332432fc->enter($__internal_b736eaa134dbaa63ea741ed2f9710966662e52db868c4998b958f791332432fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_8dd80f67217a46e76ce286b84b51cf4718739545dd4d25dea997b153b2cc80de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dd80f67217a46e76ce286b84b51cf4718739545dd4d25dea997b153b2cc80de->enter($__internal_8dd80f67217a46e76ce286b84b51cf4718739545dd4d25dea997b153b2cc80de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_b736eaa134dbaa63ea741ed2f9710966662e52db868c4998b958f791332432fc->leave($__internal_b736eaa134dbaa63ea741ed2f9710966662e52db868c4998b958f791332432fc_prof);

        
        $__internal_8dd80f67217a46e76ce286b84b51cf4718739545dd4d25dea997b153b2cc80de->leave($__internal_8dd80f67217a46e76ce286b84b51cf4718739545dd4d25dea997b153b2cc80de_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
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
