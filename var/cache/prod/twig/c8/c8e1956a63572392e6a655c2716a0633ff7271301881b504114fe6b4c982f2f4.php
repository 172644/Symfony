<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_d897a431ef0984734e6192ea9b9c21822b7ad597584745f66d3ae08f25581cdd extends Twig_Template
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
        $__internal_ce790a93b1989029988b7e0d4473a5cd7252f874421090852d16c49ed30af984 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce790a93b1989029988b7e0d4473a5cd7252f874421090852d16c49ed30af984->enter($__internal_ce790a93b1989029988b7e0d4473a5cd7252f874421090852d16c49ed30af984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_ce790a93b1989029988b7e0d4473a5cd7252f874421090852d16c49ed30af984->leave($__internal_ce790a93b1989029988b7e0d4473a5cd7252f874421090852d16c49ed30af984_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
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
