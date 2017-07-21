<?php

/* @Framework/Form/time_widget.html.php */
class __TwigTemplate_5ade22d1fd36fd6eb32fb125750c0ccf8a5d00ef6f878316664033b236274d3a extends Twig_Template
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
        $__internal_fc2f2c620af4692a88ea3b6da8ecb2b220256814852a03e64414850eac86ad88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc2f2c620af4692a88ea3b6da8ecb2b220256814852a03e64414850eac86ad88->enter($__internal_fc2f2c620af4692a88ea3b6da8ecb2b220256814852a03e64414850eac86ad88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        $__internal_e24cc0c3e2c7e972c0114f75dd56e49d2a17019501ef38af19fadbd35445f205 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e24cc0c3e2c7e972c0114f75dd56e49d2a17019501ef38af19fadbd35445f205->enter($__internal_e24cc0c3e2c7e972c0114f75dd56e49d2a17019501ef38af19fadbd35445f205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
";
        
        $__internal_fc2f2c620af4692a88ea3b6da8ecb2b220256814852a03e64414850eac86ad88->leave($__internal_fc2f2c620af4692a88ea3b6da8ecb2b220256814852a03e64414850eac86ad88_prof);

        
        $__internal_e24cc0c3e2c7e972c0114f75dd56e49d2a17019501ef38af19fadbd35445f205->leave($__internal_e24cc0c3e2c7e972c0114f75dd56e49d2a17019501ef38af19fadbd35445f205_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/time_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
", "@Framework/Form/time_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\time_widget.html.php");
    }
}
