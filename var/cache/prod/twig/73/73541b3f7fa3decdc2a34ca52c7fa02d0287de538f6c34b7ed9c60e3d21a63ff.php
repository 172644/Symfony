<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_a8a8883b8eedad1309bb314072af1ba37f6c2ad0f8672c8d251d2e161033ef2f extends Twig_Template
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
        $__internal_1d083b192fb9ec720a567b283356a53048b9477957dd02bfdd42c048e9a1aa0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d083b192fb9ec720a567b283356a53048b9477957dd02bfdd42c048e9a1aa0e->enter($__internal_1d083b192fb9ec720a567b283356a53048b9477957dd02bfdd42c048e9a1aa0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_1d083b192fb9ec720a567b283356a53048b9477957dd02bfdd42c048e9a1aa0e->leave($__internal_1d083b192fb9ec720a567b283356a53048b9477957dd02bfdd42c048e9a1aa0e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
