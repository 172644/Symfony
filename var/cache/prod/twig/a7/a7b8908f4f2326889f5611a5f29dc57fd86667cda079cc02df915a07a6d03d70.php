<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_31581eb285c3b0e82cb51092572c49c3997930153e43b2696d9c403872babac9 extends Twig_Template
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
        $__internal_d1f267e9aebde7bf0ab2bc7f7d6307760e09ac5df3e06a24e52817c266500664 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1f267e9aebde7bf0ab2bc7f7d6307760e09ac5df3e06a24e52817c266500664->enter($__internal_d1f267e9aebde7bf0ab2bc7f7d6307760e09ac5df3e06a24e52817c266500664_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_d1f267e9aebde7bf0ab2bc7f7d6307760e09ac5df3e06a24e52817c266500664->leave($__internal_d1f267e9aebde7bf0ab2bc7f7d6307760e09ac5df3e06a24e52817c266500664_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
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
