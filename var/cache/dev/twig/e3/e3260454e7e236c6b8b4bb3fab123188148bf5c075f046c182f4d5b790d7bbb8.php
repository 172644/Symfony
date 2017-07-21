<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_1d74a4e1865fe880b8e56de1e0d4b9f385aee43763c0a4d0ee2b24518c847831 extends Twig_Template
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
        $__internal_f8a54671304845b4d818e2b4c384abe4bdb3d9fec24cd076311395a227422eab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8a54671304845b4d818e2b4c384abe4bdb3d9fec24cd076311395a227422eab->enter($__internal_f8a54671304845b4d818e2b4c384abe4bdb3d9fec24cd076311395a227422eab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_f111c5bbeea9d8e7b6162fd86d828d186e6a4dfd62b637afdf84fa33231a0d8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f111c5bbeea9d8e7b6162fd86d828d186e6a4dfd62b637afdf84fa33231a0d8d->enter($__internal_f111c5bbeea9d8e7b6162fd86d828d186e6a4dfd62b637afdf84fa33231a0d8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_f8a54671304845b4d818e2b4c384abe4bdb3d9fec24cd076311395a227422eab->leave($__internal_f8a54671304845b4d818e2b4c384abe4bdb3d9fec24cd076311395a227422eab_prof);

        
        $__internal_f111c5bbeea9d8e7b6162fd86d828d186e6a4dfd62b637afdf84fa33231a0d8d->leave($__internal_f111c5bbeea9d8e7b6162fd86d828d186e6a4dfd62b637afdf84fa33231a0d8d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_widget_compound.html.php");
    }
}
