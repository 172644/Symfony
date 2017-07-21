<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_020601d30be9d6b53fdab5292f16f2785f789ebdc0b34c2de317cd50a32feca8 extends Twig_Template
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
        $__internal_db515abda70330b0d4c76306a38af52616b678eda87d025be7b9db601b1fd267 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db515abda70330b0d4c76306a38af52616b678eda87d025be7b9db601b1fd267->enter($__internal_db515abda70330b0d4c76306a38af52616b678eda87d025be7b9db601b1fd267_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_d1c86eac3c94704464cd0539466eb612d67b0897e33f4a0b46fb97e2297fa4af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1c86eac3c94704464cd0539466eb612d67b0897e33f4a0b46fb97e2297fa4af->enter($__internal_d1c86eac3c94704464cd0539466eb612d67b0897e33f4a0b46fb97e2297fa4af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_db515abda70330b0d4c76306a38af52616b678eda87d025be7b9db601b1fd267->leave($__internal_db515abda70330b0d4c76306a38af52616b678eda87d025be7b9db601b1fd267_prof);

        
        $__internal_d1c86eac3c94704464cd0539466eb612d67b0897e33f4a0b46fb97e2297fa4af->leave($__internal_d1c86eac3c94704464cd0539466eb612d67b0897e33f4a0b46fb97e2297fa4af_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
