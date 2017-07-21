<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_08590cc68381592bbb831c6ac68537d2bcdebf0a6f0fee1c00567de96b7374c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_9972167a9b5b680825119a1ac3512324becedf447c5565c03dadc27645ad1568 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9972167a9b5b680825119a1ac3512324becedf447c5565c03dadc27645ad1568->enter($__internal_9972167a9b5b680825119a1ac3512324becedf447c5565c03dadc27645ad1568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_d8e23c90d33c243d9209094d157422d779e184f308b9555f77a50709f41e3e29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8e23c90d33c243d9209094d157422d779e184f308b9555f77a50709f41e3e29->enter($__internal_d8e23c90d33c243d9209094d157422d779e184f308b9555f77a50709f41e3e29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9972167a9b5b680825119a1ac3512324becedf447c5565c03dadc27645ad1568->leave($__internal_9972167a9b5b680825119a1ac3512324becedf447c5565c03dadc27645ad1568_prof);

        
        $__internal_d8e23c90d33c243d9209094d157422d779e184f308b9555f77a50709f41e3e29->leave($__internal_d8e23c90d33c243d9209094d157422d779e184f308b9555f77a50709f41e3e29_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_425379ea2213ead738b3c2e9c1f6a653f188a6fd4733b98b2ceb4667f94e44ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_425379ea2213ead738b3c2e9c1f6a653f188a6fd4733b98b2ceb4667f94e44ba->enter($__internal_425379ea2213ead738b3c2e9c1f6a653f188a6fd4733b98b2ceb4667f94e44ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_04a09846ad7659206bcbe2cc9abdf6d72aad4daaf7908a02cbd4abbca9ff98d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04a09846ad7659206bcbe2cc9abdf6d72aad4daaf7908a02cbd4abbca9ff98d1->enter($__internal_04a09846ad7659206bcbe2cc9abdf6d72aad4daaf7908a02cbd4abbca9ff98d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_04a09846ad7659206bcbe2cc9abdf6d72aad4daaf7908a02cbd4abbca9ff98d1->leave($__internal_04a09846ad7659206bcbe2cc9abdf6d72aad4daaf7908a02cbd4abbca9ff98d1_prof);

        
        $__internal_425379ea2213ead738b3c2e9c1f6a653f188a6fd4733b98b2ceb4667f94e44ba->leave($__internal_425379ea2213ead738b3c2e9c1f6a653f188a6fd4733b98b2ceb4667f94e44ba_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/edit.html.twig");
    }
}
