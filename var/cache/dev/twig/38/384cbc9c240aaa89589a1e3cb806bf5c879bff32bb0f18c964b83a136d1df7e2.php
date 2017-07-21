<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_1ffac0a180492568fbd0d10f605bde249ff66c7f3b121e357d2316c72fcad196 extends Twig_Template
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
        $__internal_f5a4c6e71216b287f61a296be385313f398013a57de04800a9f68a82dfe0c367 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5a4c6e71216b287f61a296be385313f398013a57de04800a9f68a82dfe0c367->enter($__internal_f5a4c6e71216b287f61a296be385313f398013a57de04800a9f68a82dfe0c367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_feca8f94f3a836af517e2ca7a39430dbb10036aa6b4b0aa390e60839606c75f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_feca8f94f3a836af517e2ca7a39430dbb10036aa6b4b0aa390e60839606c75f4->enter($__internal_feca8f94f3a836af517e2ca7a39430dbb10036aa6b4b0aa390e60839606c75f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_f5a4c6e71216b287f61a296be385313f398013a57de04800a9f68a82dfe0c367->leave($__internal_f5a4c6e71216b287f61a296be385313f398013a57de04800a9f68a82dfe0c367_prof);

        
        $__internal_feca8f94f3a836af517e2ca7a39430dbb10036aa6b4b0aa390e60839606c75f4->leave($__internal_feca8f94f3a836af517e2ca7a39430dbb10036aa6b4b0aa390e60839606c75f4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
