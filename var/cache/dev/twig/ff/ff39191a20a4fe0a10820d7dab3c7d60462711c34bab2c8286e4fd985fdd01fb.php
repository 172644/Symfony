<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_660c25b1f859b94f2739cef43b06d2692398f2b69b7dd8a152bf93ae13429cfc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9c12df222ec2f76381118c4da59d56ae0b965a8a7fd9355683c73703d9442d6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c12df222ec2f76381118c4da59d56ae0b965a8a7fd9355683c73703d9442d6a->enter($__internal_9c12df222ec2f76381118c4da59d56ae0b965a8a7fd9355683c73703d9442d6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_deaa270509488c50a7ee8bc79653af0807f104ac60516b32a3b15978bbd7fd3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_deaa270509488c50a7ee8bc79653af0807f104ac60516b32a3b15978bbd7fd3e->enter($__internal_deaa270509488c50a7ee8bc79653af0807f104ac60516b32a3b15978bbd7fd3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c12df222ec2f76381118c4da59d56ae0b965a8a7fd9355683c73703d9442d6a->leave($__internal_9c12df222ec2f76381118c4da59d56ae0b965a8a7fd9355683c73703d9442d6a_prof);

        
        $__internal_deaa270509488c50a7ee8bc79653af0807f104ac60516b32a3b15978bbd7fd3e->leave($__internal_deaa270509488c50a7ee8bc79653af0807f104ac60516b32a3b15978bbd7fd3e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8a09ee5d22e9c05b9df31b488d226c5d20bd11ef19aaa93b51f62c87b8858e0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a09ee5d22e9c05b9df31b488d226c5d20bd11ef19aaa93b51f62c87b8858e0e->enter($__internal_8a09ee5d22e9c05b9df31b488d226c5d20bd11ef19aaa93b51f62c87b8858e0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1782680a39a5575de83c512bb29545603ca5ba8e812d447c1ea0478b5b438075 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1782680a39a5575de83c512bb29545603ca5ba8e812d447c1ea0478b5b438075->enter($__internal_1782680a39a5575de83c512bb29545603ca5ba8e812d447c1ea0478b5b438075_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_1782680a39a5575de83c512bb29545603ca5ba8e812d447c1ea0478b5b438075->leave($__internal_1782680a39a5575de83c512bb29545603ca5ba8e812d447c1ea0478b5b438075_prof);

        
        $__internal_8a09ee5d22e9c05b9df31b488d226c5d20bd11ef19aaa93b51f62c87b8858e0e->leave($__internal_8a09ee5d22e9c05b9df31b488d226c5d20bd11ef19aaa93b51f62c87b8858e0e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/register.html.twig");
    }
}
