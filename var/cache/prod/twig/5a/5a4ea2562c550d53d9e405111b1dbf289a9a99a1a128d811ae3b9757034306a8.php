<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_fcb8dfe1b4f21f3555ea0340865397d17d0389a7a0a091eff0eba8cba45880da extends Twig_Template
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
        $__internal_168a24e25c6784b6b34a94a474aa76b4c4f66a00bc1c0bc3eb9325dbc55dddc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_168a24e25c6784b6b34a94a474aa76b4c4f66a00bc1c0bc3eb9325dbc55dddc6->enter($__internal_168a24e25c6784b6b34a94a474aa76b4c4f66a00bc1c0bc3eb9325dbc55dddc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_168a24e25c6784b6b34a94a474aa76b4c4f66a00bc1c0bc3eb9325dbc55dddc6->leave($__internal_168a24e25c6784b6b34a94a474aa76b4c4f66a00bc1c0bc3eb9325dbc55dddc6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
