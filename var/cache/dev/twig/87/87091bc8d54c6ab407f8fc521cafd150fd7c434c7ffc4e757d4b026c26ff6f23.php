<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_7adf09acd66cbdfe7e2c2bc8639458d8c0d681bb24eb6e48c826319f2a0dc783 extends Twig_Template
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
        $__internal_955a913c706d77fa1652ae30dbadef7ac984ae8e680f9dc0b1aeada984b76224 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_955a913c706d77fa1652ae30dbadef7ac984ae8e680f9dc0b1aeada984b76224->enter($__internal_955a913c706d77fa1652ae30dbadef7ac984ae8e680f9dc0b1aeada984b76224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_6e7adc717d4af7b346d7c3c9c9f2a0dbc371165b6055956fa5f5e1830b6fb91b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e7adc717d4af7b346d7c3c9c9f2a0dbc371165b6055956fa5f5e1830b6fb91b->enter($__internal_6e7adc717d4af7b346d7c3c9c9f2a0dbc371165b6055956fa5f5e1830b6fb91b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_955a913c706d77fa1652ae30dbadef7ac984ae8e680f9dc0b1aeada984b76224->leave($__internal_955a913c706d77fa1652ae30dbadef7ac984ae8e680f9dc0b1aeada984b76224_prof);

        
        $__internal_6e7adc717d4af7b346d7c3c9c9f2a0dbc371165b6055956fa5f5e1830b6fb91b->leave($__internal_6e7adc717d4af7b346d7c3c9c9f2a0dbc371165b6055956fa5f5e1830b6fb91b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
