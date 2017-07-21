<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_bb8b352cfbc06cadc41954fbd10f19166a3dc35bc1fd16d5edca1b9c997c3e25 extends Twig_Template
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
        $__internal_96b51a6964a65a2350117d48b7a8a1fc3bfbc0ec1e50913973e0c09a5a6ed370 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96b51a6964a65a2350117d48b7a8a1fc3bfbc0ec1e50913973e0c09a5a6ed370->enter($__internal_96b51a6964a65a2350117d48b7a8a1fc3bfbc0ec1e50913973e0c09a5a6ed370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_96b51a6964a65a2350117d48b7a8a1fc3bfbc0ec1e50913973e0c09a5a6ed370->leave($__internal_96b51a6964a65a2350117d48b7a8a1fc3bfbc0ec1e50913973e0c09a5a6ed370_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
