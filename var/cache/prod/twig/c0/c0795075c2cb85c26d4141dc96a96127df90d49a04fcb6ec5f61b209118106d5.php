<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_8da8fd20b954ce24249aef63eeeab456137d8de7070978f29a645c23684523e0 extends Twig_Template
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
        $__internal_2e959faf3dbe16ace50ea9433e612186a03e120d4ef5f9a87d455cbd5d1063db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e959faf3dbe16ace50ea9433e612186a03e120d4ef5f9a87d455cbd5d1063db->enter($__internal_2e959faf3dbe16ace50ea9433e612186a03e120d4ef5f9a87d455cbd5d1063db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_2e959faf3dbe16ace50ea9433e612186a03e120d4ef5f9a87d455cbd5d1063db->leave($__internal_2e959faf3dbe16ace50ea9433e612186a03e120d4ef5f9a87d455cbd5d1063db_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
