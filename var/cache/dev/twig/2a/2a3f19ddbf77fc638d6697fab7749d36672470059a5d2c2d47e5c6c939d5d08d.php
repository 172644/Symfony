<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_e5787311ae6f0b5999d7dd1a9a9bd56c360474aee7c9fb6bf1601f81d8957778 extends Twig_Template
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
        $__internal_66272ba27a15e98ac337753c43d78915520fc75e650debd96950bdd30069bb3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66272ba27a15e98ac337753c43d78915520fc75e650debd96950bdd30069bb3c->enter($__internal_66272ba27a15e98ac337753c43d78915520fc75e650debd96950bdd30069bb3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_90d412cc0817d270742634ae190f858ac59c91229429d3238df0e8c97d689bda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90d412cc0817d270742634ae190f858ac59c91229429d3238df0e8c97d689bda->enter($__internal_90d412cc0817d270742634ae190f858ac59c91229429d3238df0e8c97d689bda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_66272ba27a15e98ac337753c43d78915520fc75e650debd96950bdd30069bb3c->leave($__internal_66272ba27a15e98ac337753c43d78915520fc75e650debd96950bdd30069bb3c_prof);

        
        $__internal_90d412cc0817d270742634ae190f858ac59c91229429d3238df0e8c97d689bda->leave($__internal_90d412cc0817d270742634ae190f858ac59c91229429d3238df0e8c97d689bda_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_attributes.html.php");
    }
}
