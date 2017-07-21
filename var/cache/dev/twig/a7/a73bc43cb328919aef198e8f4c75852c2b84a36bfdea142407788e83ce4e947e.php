<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_7f0cec565fc13f080c557800c4a907f5902bf76373a3b76d0b6fee16f0c54ff4 extends Twig_Template
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
        $__internal_27862e68d3e09e39d469f7d73b4ba66404ffe98e3d07bc8e61f19dae588dde4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27862e68d3e09e39d469f7d73b4ba66404ffe98e3d07bc8e61f19dae588dde4d->enter($__internal_27862e68d3e09e39d469f7d73b4ba66404ffe98e3d07bc8e61f19dae588dde4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_64af30b43ed9d5b844d29e91c1825836165b30a77fced7f537aeee402adc4f78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64af30b43ed9d5b844d29e91c1825836165b30a77fced7f537aeee402adc4f78->enter($__internal_64af30b43ed9d5b844d29e91c1825836165b30a77fced7f537aeee402adc4f78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_27862e68d3e09e39d469f7d73b4ba66404ffe98e3d07bc8e61f19dae588dde4d->leave($__internal_27862e68d3e09e39d469f7d73b4ba66404ffe98e3d07bc8e61f19dae588dde4d_prof);

        
        $__internal_64af30b43ed9d5b844d29e91c1825836165b30a77fced7f537aeee402adc4f78->leave($__internal_64af30b43ed9d5b844d29e91c1825836165b30a77fced7f537aeee402adc4f78_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
