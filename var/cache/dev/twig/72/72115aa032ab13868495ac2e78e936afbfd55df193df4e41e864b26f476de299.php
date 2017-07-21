<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_ee5545bbd40903c67bb9d8a7b6c3551a19ea393ae4c35ebf07b9c95cf5862359 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_5d18a769e1702593e7a67c2770da0931aea86f71eda0ffb8c76e0d8a703d4d93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d18a769e1702593e7a67c2770da0931aea86f71eda0ffb8c76e0d8a703d4d93->enter($__internal_5d18a769e1702593e7a67c2770da0931aea86f71eda0ffb8c76e0d8a703d4d93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_4abc3662595b14fc7370c74849486bafdeef3db657a6bbfc71e1c204ddb16b5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4abc3662595b14fc7370c74849486bafdeef3db657a6bbfc71e1c204ddb16b5c->enter($__internal_4abc3662595b14fc7370c74849486bafdeef3db657a6bbfc71e1c204ddb16b5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d18a769e1702593e7a67c2770da0931aea86f71eda0ffb8c76e0d8a703d4d93->leave($__internal_5d18a769e1702593e7a67c2770da0931aea86f71eda0ffb8c76e0d8a703d4d93_prof);

        
        $__internal_4abc3662595b14fc7370c74849486bafdeef3db657a6bbfc71e1c204ddb16b5c->leave($__internal_4abc3662595b14fc7370c74849486bafdeef3db657a6bbfc71e1c204ddb16b5c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2ecf40fa6638c25285df9f498d5ffb4b34f75f8fdf7f166fc2a81148cebc0bfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ecf40fa6638c25285df9f498d5ffb4b34f75f8fdf7f166fc2a81148cebc0bfb->enter($__internal_2ecf40fa6638c25285df9f498d5ffb4b34f75f8fdf7f166fc2a81148cebc0bfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_fb670d7dfcc33351bb01c2c385035cf8641d1b058c4e7ef499d5314246816417 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb670d7dfcc33351bb01c2c385035cf8641d1b058c4e7ef499d5314246816417->enter($__internal_fb670d7dfcc33351bb01c2c385035cf8641d1b058c4e7ef499d5314246816417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_fb670d7dfcc33351bb01c2c385035cf8641d1b058c4e7ef499d5314246816417->leave($__internal_fb670d7dfcc33351bb01c2c385035cf8641d1b058c4e7ef499d5314246816417_prof);

        
        $__internal_2ecf40fa6638c25285df9f498d5ffb4b34f75f8fdf7f166fc2a81148cebc0bfb->leave($__internal_2ecf40fa6638c25285df9f498d5ffb4b34f75f8fdf7f166fc2a81148cebc0bfb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
", "FOSUserBundle:Security:login.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Security/login.html.twig");
    }
}
