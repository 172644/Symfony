<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_b37d3404f0792ca65bb7e4a2e2199781cb1febe35e2b4042f20b285af33e4bf5 extends Twig_Template
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
        $__internal_6dfd8c052e1471b82805444ab66f3be02295dd26e17ff5da0d176e0cc12169f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6dfd8c052e1471b82805444ab66f3be02295dd26e17ff5da0d176e0cc12169f3->enter($__internal_6dfd8c052e1471b82805444ab66f3be02295dd26e17ff5da0d176e0cc12169f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_f5d473cec56377b843c987f355ed500cc350a30f35c8a8e6ae3365dec8d992c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5d473cec56377b843c987f355ed500cc350a30f35c8a8e6ae3365dec8d992c3->enter($__internal_f5d473cec56377b843c987f355ed500cc350a30f35c8a8e6ae3365dec8d992c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_6dfd8c052e1471b82805444ab66f3be02295dd26e17ff5da0d176e0cc12169f3->leave($__internal_6dfd8c052e1471b82805444ab66f3be02295dd26e17ff5da0d176e0cc12169f3_prof);

        
        $__internal_f5d473cec56377b843c987f355ed500cc350a30f35c8a8e6ae3365dec8d992c3->leave($__internal_f5d473cec56377b843c987f355ed500cc350a30f35c8a8e6ae3365dec8d992c3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
