<?php

/* @FOSUser/Resetting/check_email.html.twig */
class __TwigTemplate_d41ce8f76d6cb45d04b5c8d0021e66ad4c65ba645e06145a5999d4cbf8a41550 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/check_email.html.twig", 1);
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
        $__internal_0d73357e57bb9535f2630b9a65d6a209b1cf89015e801756a0ae3f0400c28270 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d73357e57bb9535f2630b9a65d6a209b1cf89015e801756a0ae3f0400c28270->enter($__internal_0d73357e57bb9535f2630b9a65d6a209b1cf89015e801756a0ae3f0400c28270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $__internal_7bb92235bb9337fecab60125fb9ccb62e121d0ac9a8885eda09ef2afa7ef5dde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bb92235bb9337fecab60125fb9ccb62e121d0ac9a8885eda09ef2afa7ef5dde->enter($__internal_7bb92235bb9337fecab60125fb9ccb62e121d0ac9a8885eda09ef2afa7ef5dde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d73357e57bb9535f2630b9a65d6a209b1cf89015e801756a0ae3f0400c28270->leave($__internal_0d73357e57bb9535f2630b9a65d6a209b1cf89015e801756a0ae3f0400c28270_prof);

        
        $__internal_7bb92235bb9337fecab60125fb9ccb62e121d0ac9a8885eda09ef2afa7ef5dde->leave($__internal_7bb92235bb9337fecab60125fb9ccb62e121d0ac9a8885eda09ef2afa7ef5dde_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ef836a565f4b3295045372e8978f58ec9ee586a0fe756b384473fd34d2f739de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef836a565f4b3295045372e8978f58ec9ee586a0fe756b384473fd34d2f739de->enter($__internal_ef836a565f4b3295045372e8978f58ec9ee586a0fe756b384473fd34d2f739de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a09be93d56d885183e64d2e16c0305b06b440539a4a585a9656715e27fd5adde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a09be93d56d885183e64d2e16c0305b06b440539a4a585a9656715e27fd5adde->enter($__internal_a09be93d56d885183e64d2e16c0305b06b440539a4a585a9656715e27fd5adde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) || array_key_exists("tokenLifetime", $context) ? $context["tokenLifetime"] : (function () { throw new Twig_Error_Runtime('Variable "tokenLifetime" does not exist.', 7, $this->getSourceContext()); })())), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_a09be93d56d885183e64d2e16c0305b06b440539a4a585a9656715e27fd5adde->leave($__internal_a09be93d56d885183e64d2e16c0305b06b440539a4a585a9656715e27fd5adde_prof);

        
        $__internal_ef836a565f4b3295045372e8978f58ec9ee586a0fe756b384473fd34d2f739de->leave($__internal_ef836a565f4b3295045372e8978f58ec9ee586a0fe756b384473fd34d2f739de_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/check_email.html.twig";
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
", "@FOSUser/Resetting/check_email.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\check_email.html.twig");
    }
}
