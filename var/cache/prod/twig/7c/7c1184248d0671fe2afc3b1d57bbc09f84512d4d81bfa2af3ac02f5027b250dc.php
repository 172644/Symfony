<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_365ec004db768dd80b48fc26332b04a30f5a5e3837e5f7c95de59c3dcfcb21c2 extends Twig_Template
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
        $__internal_0883ae09cee0ca22bc23fde036bbed0bdb75c9f16b14211fee47f785f75ea671 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0883ae09cee0ca22bc23fde036bbed0bdb75c9f16b14211fee47f785f75ea671->enter($__internal_0883ae09cee0ca22bc23fde036bbed0bdb75c9f16b14211fee47f785f75ea671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_0883ae09cee0ca22bc23fde036bbed0bdb75c9f16b14211fee47f785f75ea671->leave($__internal_0883ae09cee0ca22bc23fde036bbed0bdb75c9f16b14211fee47f785f75ea671_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
