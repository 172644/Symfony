<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_fa28c9b014f09b4570b25a9ea3480327d8b16726691272bdc2dfdbe0f1fd61bb extends Twig_Template
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
        $__internal_46aeac62ad5e8b82a1ab9c53d0de57a41918caa619573e07304320f106abe6b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46aeac62ad5e8b82a1ab9c53d0de57a41918caa619573e07304320f106abe6b1->enter($__internal_46aeac62ad5e8b82a1ab9c53d0de57a41918caa619573e07304320f106abe6b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_df7e4d81fdf24f6aadfbbebfb3cadae8513cabf01960fba851148ee02e130b36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df7e4d81fdf24f6aadfbbebfb3cadae8513cabf01960fba851148ee02e130b36->enter($__internal_df7e4d81fdf24f6aadfbbebfb3cadae8513cabf01960fba851148ee02e130b36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_46aeac62ad5e8b82a1ab9c53d0de57a41918caa619573e07304320f106abe6b1->leave($__internal_46aeac62ad5e8b82a1ab9c53d0de57a41918caa619573e07304320f106abe6b1_prof);

        
        $__internal_df7e4d81fdf24f6aadfbbebfb3cadae8513cabf01960fba851148ee02e130b36->leave($__internal_df7e4d81fdf24f6aadfbbebfb3cadae8513cabf01960fba851148ee02e130b36_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
