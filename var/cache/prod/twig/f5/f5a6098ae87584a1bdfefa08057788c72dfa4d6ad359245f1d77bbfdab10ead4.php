<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_8d9531753bc5433132f2784b2de9fa6fc36b8f0a79382a041a3b8f5e8a1db80b extends Twig_Template
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
        $__internal_bbd8c6fe0e7c2cb551ebad5c4bcf6ff71bb77ce0801d9dca060fae0821ce4a30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbd8c6fe0e7c2cb551ebad5c4bcf6ff71bb77ce0801d9dca060fae0821ce4a30->enter($__internal_bbd8c6fe0e7c2cb551ebad5c4bcf6ff71bb77ce0801d9dca060fae0821ce4a30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_bbd8c6fe0e7c2cb551ebad5c4bcf6ff71bb77ce0801d9dca060fae0821ce4a30->leave($__internal_bbd8c6fe0e7c2cb551ebad5c4bcf6ff71bb77ce0801d9dca060fae0821ce4a30_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
