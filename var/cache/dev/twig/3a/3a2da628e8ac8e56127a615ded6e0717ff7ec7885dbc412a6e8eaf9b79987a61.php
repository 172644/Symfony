<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_6d0859e6b237707233043870c80500c1074578a82d8d3699fc330bf63032bbd8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_63ca30ae8f11f547f845608ea742da83e471adb2c2c1d56c82b22cbc84560d18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63ca30ae8f11f547f845608ea742da83e471adb2c2c1d56c82b22cbc84560d18->enter($__internal_63ca30ae8f11f547f845608ea742da83e471adb2c2c1d56c82b22cbc84560d18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $__internal_ce29b6335c235afcb1452acaa805e2ef03927434cc1871accc08eb16c7dd1d2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce29b6335c235afcb1452acaa805e2ef03927434cc1871accc08eb16c7dd1d2f->enter($__internal_ce29b6335c235afcb1452acaa805e2ef03927434cc1871accc08eb16c7dd1d2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63ca30ae8f11f547f845608ea742da83e471adb2c2c1d56c82b22cbc84560d18->leave($__internal_63ca30ae8f11f547f845608ea742da83e471adb2c2c1d56c82b22cbc84560d18_prof);

        
        $__internal_ce29b6335c235afcb1452acaa805e2ef03927434cc1871accc08eb16c7dd1d2f->leave($__internal_ce29b6335c235afcb1452acaa805e2ef03927434cc1871accc08eb16c7dd1d2f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bded80d3dd6cffba566fbb0b20ae12274f92d7f2d7af5efb8090155eeeaa1356 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bded80d3dd6cffba566fbb0b20ae12274f92d7f2d7af5efb8090155eeeaa1356->enter($__internal_bded80d3dd6cffba566fbb0b20ae12274f92d7f2d7af5efb8090155eeeaa1356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ec4aa7293dfaeb8b664b3e61b52ae52c2f6a28226c31be65a3e3ad252d377761 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec4aa7293dfaeb8b664b3e61b52ae52c2f6a28226c31be65a3e3ad252d377761->enter($__internal_ec4aa7293dfaeb8b664b3e61b52ae52c2f6a28226c31be65a3e3ad252d377761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_ec4aa7293dfaeb8b664b3e61b52ae52c2f6a28226c31be65a3e3ad252d377761->leave($__internal_ec4aa7293dfaeb8b664b3e61b52ae52c2f6a28226c31be65a3e3ad252d377761_prof);

        
        $__internal_bded80d3dd6cffba566fbb0b20ae12274f92d7f2d7af5efb8090155eeeaa1356->leave($__internal_bded80d3dd6cffba566fbb0b20ae12274f92d7f2d7af5efb8090155eeeaa1356_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/request.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\request.html.twig");
    }
}
