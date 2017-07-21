<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_0b91c4c0e880ed7911373383d36451b76ca68f2a8632c5374fe4f07d75bef5aa extends Twig_Template
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
        $__internal_03c27cac82d8a6fa14ac1219416dc738e87db2cab40d06614334519a588a66a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03c27cac82d8a6fa14ac1219416dc738e87db2cab40d06614334519a588a66a3->enter($__internal_03c27cac82d8a6fa14ac1219416dc738e87db2cab40d06614334519a588a66a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_d9ad1b69a70e2c9b393c638be22291f61a82707448e401db41ccb22d765f8083 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9ad1b69a70e2c9b393c638be22291f61a82707448e401db41ccb22d765f8083->enter($__internal_d9ad1b69a70e2c9b393c638be22291f61a82707448e401db41ccb22d765f8083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_03c27cac82d8a6fa14ac1219416dc738e87db2cab40d06614334519a588a66a3->leave($__internal_03c27cac82d8a6fa14ac1219416dc738e87db2cab40d06614334519a588a66a3_prof);

        
        $__internal_d9ad1b69a70e2c9b393c638be22291f61a82707448e401db41ccb22d765f8083->leave($__internal_d9ad1b69a70e2c9b393c638be22291f61a82707448e401db41ccb22d765f8083_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
