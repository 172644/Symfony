<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_6d5378a714aabed7a7d067a5e8fc8f4cbd635e3409082634d9e7400d9139bc90 extends Twig_Template
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
        $__internal_a0dfe95f61d870caadef9a94c2d280402a97df7ddeded0fe0b1b30c4000a9133 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0dfe95f61d870caadef9a94c2d280402a97df7ddeded0fe0b1b30c4000a9133->enter($__internal_a0dfe95f61d870caadef9a94c2d280402a97df7ddeded0fe0b1b30c4000a9133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_9db77adccd5703f9268eb6d2b7c8a1a24e52b3a0da88f336253d424c88491783 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9db77adccd5703f9268eb6d2b7c8a1a24e52b3a0da88f336253d424c88491783->enter($__internal_9db77adccd5703f9268eb6d2b7c8a1a24e52b3a0da88f336253d424c88491783_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_a0dfe95f61d870caadef9a94c2d280402a97df7ddeded0fe0b1b30c4000a9133->leave($__internal_a0dfe95f61d870caadef9a94c2d280402a97df7ddeded0fe0b1b30c4000a9133_prof);

        
        $__internal_9db77adccd5703f9268eb6d2b7c8a1a24e52b3a0da88f336253d424c88491783->leave($__internal_9db77adccd5703f9268eb6d2b7c8a1a24e52b3a0da88f336253d424c88491783_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
