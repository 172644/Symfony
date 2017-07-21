<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_48fd00879593bf9067290ef3f249ddb64c7659d0c55cdbeaf650bfcdfca25995 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_f49559ad7d57e7bd8ff1fa16d45e967b662f0c973b042e42cddede72166d5f0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f49559ad7d57e7bd8ff1fa16d45e967b662f0c973b042e42cddede72166d5f0f->enter($__internal_f49559ad7d57e7bd8ff1fa16d45e967b662f0c973b042e42cddede72166d5f0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_cd0e23e87d0d092ebc4e97b1937ef4e379a32c167b50bf620e1f84f190e7b45c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd0e23e87d0d092ebc4e97b1937ef4e379a32c167b50bf620e1f84f190e7b45c->enter($__internal_cd0e23e87d0d092ebc4e97b1937ef4e379a32c167b50bf620e1f84f190e7b45c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f49559ad7d57e7bd8ff1fa16d45e967b662f0c973b042e42cddede72166d5f0f->leave($__internal_f49559ad7d57e7bd8ff1fa16d45e967b662f0c973b042e42cddede72166d5f0f_prof);

        
        $__internal_cd0e23e87d0d092ebc4e97b1937ef4e379a32c167b50bf620e1f84f190e7b45c->leave($__internal_cd0e23e87d0d092ebc4e97b1937ef4e379a32c167b50bf620e1f84f190e7b45c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_841a899dfb6a4750b27cfd2452243193a9cd8b24a93c869b191a23928228f620 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_841a899dfb6a4750b27cfd2452243193a9cd8b24a93c869b191a23928228f620->enter($__internal_841a899dfb6a4750b27cfd2452243193a9cd8b24a93c869b191a23928228f620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_abc45ad0456ce3bf85a8cd9beae5aabf05c4d571009b26081a0b9406f143e8c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abc45ad0456ce3bf85a8cd9beae5aabf05c4d571009b26081a0b9406f143e8c1->enter($__internal_abc45ad0456ce3bf85a8cd9beae5aabf05c4d571009b26081a0b9406f143e8c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_abc45ad0456ce3bf85a8cd9beae5aabf05c4d571009b26081a0b9406f143e8c1->leave($__internal_abc45ad0456ce3bf85a8cd9beae5aabf05c4d571009b26081a0b9406f143e8c1_prof);

        
        $__internal_841a899dfb6a4750b27cfd2452243193a9cd8b24a93c869b191a23928228f620->leave($__internal_841a899dfb6a4750b27cfd2452243193a9cd8b24a93c869b191a23928228f620_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
", "@FOSUser/Registration/register.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\register.html.twig");
    }
}
