<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_2ec3f172b2339b90d9ab5369acfc9d1124561d87c4b04bdc2172a404d5baa588 extends Twig_Template
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
        $__internal_504246eb727fdb19d93085176fef83c394072c3ce7d194107f21df18dde6fd3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_504246eb727fdb19d93085176fef83c394072c3ce7d194107f21df18dde6fd3d->enter($__internal_504246eb727fdb19d93085176fef83c394072c3ce7d194107f21df18dde6fd3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_504246eb727fdb19d93085176fef83c394072c3ce7d194107f21df18dde6fd3d->leave($__internal_504246eb727fdb19d93085176fef83c394072c3ce7d194107f21df18dde6fd3d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
