<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_398cca7b259f6c5065329de84b4a92c47e8d65d72d2e84da92b5c409d93142d2 extends Twig_Template
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
        $__internal_fe85287ee03e0e2dce2067bd81e99cc80577d7c5db9cb3a37f25be5bed3c019f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe85287ee03e0e2dce2067bd81e99cc80577d7c5db9cb3a37f25be5bed3c019f->enter($__internal_fe85287ee03e0e2dce2067bd81e99cc80577d7c5db9cb3a37f25be5bed3c019f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_fe85287ee03e0e2dce2067bd81e99cc80577d7c5db9cb3a37f25be5bed3c019f->leave($__internal_fe85287ee03e0e2dce2067bd81e99cc80577d7c5db9cb3a37f25be5bed3c019f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
