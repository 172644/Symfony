<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_f2ce372595823d2f149f5a4c21553d578fc7296439af4db91a0987fbfd45527b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_01e1ba4c02c7f8e779e4442ce40870274ad1c66dd91684481019fc2758622fd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01e1ba4c02c7f8e779e4442ce40870274ad1c66dd91684481019fc2758622fd6->enter($__internal_01e1ba4c02c7f8e779e4442ce40870274ad1c66dd91684481019fc2758622fd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_74b7e09a14e41ce17689374fe2339da970766a05dce011ffb60b78c43e9b9fe3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74b7e09a14e41ce17689374fe2339da970766a05dce011ffb60b78c43e9b9fe3->enter($__internal_74b7e09a14e41ce17689374fe2339da970766a05dce011ffb60b78c43e9b9fe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01e1ba4c02c7f8e779e4442ce40870274ad1c66dd91684481019fc2758622fd6->leave($__internal_01e1ba4c02c7f8e779e4442ce40870274ad1c66dd91684481019fc2758622fd6_prof);

        
        $__internal_74b7e09a14e41ce17689374fe2339da970766a05dce011ffb60b78c43e9b9fe3->leave($__internal_74b7e09a14e41ce17689374fe2339da970766a05dce011ffb60b78c43e9b9fe3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ff4f6caeb1de13f6f01bad097adf7b1105c4e7a7715288cc838b608fc38b4b93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff4f6caeb1de13f6f01bad097adf7b1105c4e7a7715288cc838b608fc38b4b93->enter($__internal_ff4f6caeb1de13f6f01bad097adf7b1105c4e7a7715288cc838b608fc38b4b93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f6195c335f11dc445cfd8f87a27b94799d958212ff38086c9ea85c66704184f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6195c335f11dc445cfd8f87a27b94799d958212ff38086c9ea85c66704184f0->enter($__internal_f6195c335f11dc445cfd8f87a27b94799d958212ff38086c9ea85c66704184f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_f6195c335f11dc445cfd8f87a27b94799d958212ff38086c9ea85c66704184f0->leave($__internal_f6195c335f11dc445cfd8f87a27b94799d958212ff38086c9ea85c66704184f0_prof);

        
        $__internal_ff4f6caeb1de13f6f01bad097adf7b1105c4e7a7715288cc838b608fc38b4b93->leave($__internal_ff4f6caeb1de13f6f01bad097adf7b1105c4e7a7715288cc838b608fc38b4b93_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Security\\login.html.twig");
    }
}
