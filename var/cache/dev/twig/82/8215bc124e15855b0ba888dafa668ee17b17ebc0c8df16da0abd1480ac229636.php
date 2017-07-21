<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_6fcc899ef06b012e92822dd3d05e99f01fa54920bfbb01a1e900b2a3a3fa1212 extends Twig_Template
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
        $__internal_b74b8d1cb51e5abdb187e44820855ea319dc630db557baf1310addef3d43c6ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b74b8d1cb51e5abdb187e44820855ea319dc630db557baf1310addef3d43c6ad->enter($__internal_b74b8d1cb51e5abdb187e44820855ea319dc630db557baf1310addef3d43c6ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_4d29e4e5d165d722c7f7e6f2d6eae0c14c253192ac784c7ef5874b67ef5ffa56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d29e4e5d165d722c7f7e6f2d6eae0c14c253192ac784c7ef5874b67ef5ffa56->enter($__internal_4d29e4e5d165d722c7f7e6f2d6eae0c14c253192ac784c7ef5874b67ef5ffa56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_b74b8d1cb51e5abdb187e44820855ea319dc630db557baf1310addef3d43c6ad->leave($__internal_b74b8d1cb51e5abdb187e44820855ea319dc630db557baf1310addef3d43c6ad_prof);

        
        $__internal_4d29e4e5d165d722c7f7e6f2d6eae0c14c253192ac784c7ef5874b67ef5ffa56->leave($__internal_4d29e4e5d165d722c7f7e6f2d6eae0c14c253192ac784c7ef5874b67ef5ffa56_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_container_attributes.html.php");
    }
}
