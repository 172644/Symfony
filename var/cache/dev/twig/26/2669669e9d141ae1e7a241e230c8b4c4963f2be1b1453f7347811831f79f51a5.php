<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_023c7b0ca4ff77285bbe8f828c28bbeec639caeff742ce57efa87ebadb2cfb5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_293bddf9acd965acd064a72e0669e0b4134188445161f84da2ab0b7de26ca36b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_293bddf9acd965acd064a72e0669e0b4134188445161f84da2ab0b7de26ca36b->enter($__internal_293bddf9acd965acd064a72e0669e0b4134188445161f84da2ab0b7de26ca36b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_941e394e11f1374a25fce05cb8a74567a30831e5170a1a933d5fc56880b7256c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_941e394e11f1374a25fce05cb8a74567a30831e5170a1a933d5fc56880b7256c->enter($__internal_941e394e11f1374a25fce05cb8a74567a30831e5170a1a933d5fc56880b7256c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_293bddf9acd965acd064a72e0669e0b4134188445161f84da2ab0b7de26ca36b->leave($__internal_293bddf9acd965acd064a72e0669e0b4134188445161f84da2ab0b7de26ca36b_prof);

        
        $__internal_941e394e11f1374a25fce05cb8a74567a30831e5170a1a933d5fc56880b7256c->leave($__internal_941e394e11f1374a25fce05cb8a74567a30831e5170a1a933d5fc56880b7256c_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ab9931c1e6a66f21af8409f438ec4281c2757c58b248e0caa7a0880bcd544719 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab9931c1e6a66f21af8409f438ec4281c2757c58b248e0caa7a0880bcd544719->enter($__internal_ab9931c1e6a66f21af8409f438ec4281c2757c58b248e0caa7a0880bcd544719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_dd3adc90fd2969bc79820309cd32f578c20bab55d11b7a111f1e867e15762059 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd3adc90fd2969bc79820309cd32f578c20bab55d11b7a111f1e867e15762059->enter($__internal_dd3adc90fd2969bc79820309cd32f578c20bab55d11b7a111f1e867e15762059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) || array_key_exists("tokenLifetime", $context) ? $context["tokenLifetime"] : (function () { throw new Twig_Error_Runtime('Variable "tokenLifetime" does not exist.', 7, $this->getSourceContext()); })())), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_dd3adc90fd2969bc79820309cd32f578c20bab55d11b7a111f1e867e15762059->leave($__internal_dd3adc90fd2969bc79820309cd32f578c20bab55d11b7a111f1e867e15762059_prof);

        
        $__internal_ab9931c1e6a66f21af8409f438ec4281c2757c58b248e0caa7a0880bcd544719->leave($__internal_ab9931c1e6a66f21af8409f438ec4281c2757c58b248e0caa7a0880bcd544719_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/check_email.html.twig");
    }
}
