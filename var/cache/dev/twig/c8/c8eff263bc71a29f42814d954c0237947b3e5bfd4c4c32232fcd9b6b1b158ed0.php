<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_cf5b447f13c7a4877895df6375771ba5d6504d76e5ec5cf21b1041e411b23d47 extends Twig_Template
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
        $__internal_84d463e2c3610ef32c0426d98efaaf73058ff67ece784f831a5ae2cd449a47f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84d463e2c3610ef32c0426d98efaaf73058ff67ece784f831a5ae2cd449a47f8->enter($__internal_84d463e2c3610ef32c0426d98efaaf73058ff67ece784f831a5ae2cd449a47f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_f65dcfa0b821495e3ae8a0cf3deace4f44c10e6c0c727ae293906f9621cdc89d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f65dcfa0b821495e3ae8a0cf3deace4f44c10e6c0c727ae293906f9621cdc89d->enter($__internal_f65dcfa0b821495e3ae8a0cf3deace4f44c10e6c0c727ae293906f9621cdc89d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_84d463e2c3610ef32c0426d98efaaf73058ff67ece784f831a5ae2cd449a47f8->leave($__internal_84d463e2c3610ef32c0426d98efaaf73058ff67ece784f831a5ae2cd449a47f8_prof);

        
        $__internal_f65dcfa0b821495e3ae8a0cf3deace4f44c10e6c0c727ae293906f9621cdc89d->leave($__internal_f65dcfa0b821495e3ae8a0cf3deace4f44c10e6c0c727ae293906f9621cdc89d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_compound.html.php");
    }
}
