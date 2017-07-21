<?php

/* @FOSUser/ChangePassword/change_password.html.twig */
class __TwigTemplate_a3dc90c33136f41cfde27440f17e930f78ff72a2b362a669ed5ec35d516adf86 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 1);
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
        $__internal_6c242d7b135c79b7552afd93c8743feaaee1abb200f11e0811cc1dc3984d0820 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c242d7b135c79b7552afd93c8743feaaee1abb200f11e0811cc1dc3984d0820->enter($__internal_6c242d7b135c79b7552afd93c8743feaaee1abb200f11e0811cc1dc3984d0820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $__internal_11fe4287df4af7933e7ec9d820c96d90b6642a433d3fc26baacc0f17a859d77a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11fe4287df4af7933e7ec9d820c96d90b6642a433d3fc26baacc0f17a859d77a->enter($__internal_11fe4287df4af7933e7ec9d820c96d90b6642a433d3fc26baacc0f17a859d77a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c242d7b135c79b7552afd93c8743feaaee1abb200f11e0811cc1dc3984d0820->leave($__internal_6c242d7b135c79b7552afd93c8743feaaee1abb200f11e0811cc1dc3984d0820_prof);

        
        $__internal_11fe4287df4af7933e7ec9d820c96d90b6642a433d3fc26baacc0f17a859d77a->leave($__internal_11fe4287df4af7933e7ec9d820c96d90b6642a433d3fc26baacc0f17a859d77a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4905fdef516375cfd58fd2d4f6107735a33bd34263e241ac53ad6796d00ff4b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4905fdef516375cfd58fd2d4f6107735a33bd34263e241ac53ad6796d00ff4b8->enter($__internal_4905fdef516375cfd58fd2d4f6107735a33bd34263e241ac53ad6796d00ff4b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_14536bc28e7932e1880735b78635585071243a9af4ab8a6c7ae7bfd78b2c20f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14536bc28e7932e1880735b78635585071243a9af4ab8a6c7ae7bfd78b2c20f1->enter($__internal_14536bc28e7932e1880735b78635585071243a9af4ab8a6c7ae7bfd78b2c20f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_14536bc28e7932e1880735b78635585071243a9af4ab8a6c7ae7bfd78b2c20f1->leave($__internal_14536bc28e7932e1880735b78635585071243a9af4ab8a6c7ae7bfd78b2c20f1_prof);

        
        $__internal_4905fdef516375cfd58fd2d4f6107735a33bd34263e241ac53ad6796d00ff4b8->leave($__internal_4905fdef516375cfd58fd2d4f6107735a33bd34263e241ac53ad6796d00ff4b8_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/ChangePassword/change_password.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\ChangePassword\\change_password.html.twig");
    }
}
