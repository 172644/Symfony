<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_04253549ec9aaa461c56ae2451bff6a207f6c642e9e8b59bc167adbbb80b7812 extends Twig_Template
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
        $__internal_07ce3dd773a98307cd87ed14a34aee6680fab828ddaa852463d34311ed55b07f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07ce3dd773a98307cd87ed14a34aee6680fab828ddaa852463d34311ed55b07f->enter($__internal_07ce3dd773a98307cd87ed14a34aee6680fab828ddaa852463d34311ed55b07f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_07ce3dd773a98307cd87ed14a34aee6680fab828ddaa852463d34311ed55b07f->leave($__internal_07ce3dd773a98307cd87ed14a34aee6680fab828ddaa852463d34311ed55b07f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
