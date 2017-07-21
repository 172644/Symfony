<?php

/* @Framework/Form/form_label.html.php */
class __TwigTemplate_ddc766576f09e65c2d25ef610d8f67bf0160141eb1481c3ce3da11ee00abc420 extends Twig_Template
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
        $__internal_ffdab29c8b17972fb7a2b2e6d35bd1f983174544f98235cd5946fb47a10a40f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffdab29c8b17972fb7a2b2e6d35bd1f983174544f98235cd5946fb47a10a40f2->enter($__internal_ffdab29c8b17972fb7a2b2e6d35bd1f983174544f98235cd5946fb47a10a40f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        $__internal_07f8a78b4293e9fe67bcefce8b43c056dab82be7d9c341894fd485d26e368930 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07f8a78b4293e9fe67bcefce8b43c056dab82be7d9c341894fd485d26e368930->enter($__internal_07f8a78b4293e9fe67bcefce8b43c056dab82be7d9c341894fd485d26e368930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        // line 1
        echo "<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
";
        
        $__internal_ffdab29c8b17972fb7a2b2e6d35bd1f983174544f98235cd5946fb47a10a40f2->leave($__internal_ffdab29c8b17972fb7a2b2e6d35bd1f983174544f98235cd5946fb47a10a40f2_prof);

        
        $__internal_07f8a78b4293e9fe67bcefce8b43c056dab82be7d9c341894fd485d26e368930->leave($__internal_07f8a78b4293e9fe67bcefce8b43c056dab82be7d9c341894fd485d26e368930_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_label.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
", "@Framework/Form/form_label.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_label.html.php");
    }
}
