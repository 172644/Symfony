<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_f36523ee60a2aa4bb716f4bb1203a2a4d6d8c2b59a9ef97a8e8bf4a6cb094fcc extends Twig_Template
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
        $__internal_a2bb5a3951471152887427bb8a310e7cf7f5a5b26352e834ffa5b70fa447702a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2bb5a3951471152887427bb8a310e7cf7f5a5b26352e834ffa5b70fa447702a->enter($__internal_a2bb5a3951471152887427bb8a310e7cf7f5a5b26352e834ffa5b70fa447702a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2bb5a3951471152887427bb8a310e7cf7f5a5b26352e834ffa5b70fa447702a->leave($__internal_a2bb5a3951471152887427bb8a310e7cf7f5a5b26352e834ffa5b70fa447702a_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_29be1f2e0ff1bbf88c6943e1b6d96d47b47f5d5caefdc7f039582564b4e636ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29be1f2e0ff1bbf88c6943e1b6d96d47b47f5d5caefdc7f039582564b4e636ba->enter($__internal_29be1f2e0ff1bbf88c6943e1b6d96d47b47f5d5caefdc7f039582564b4e636ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) || array_key_exists("tokenLifetime", $context) ? $context["tokenLifetime"] : (function () { throw new Twig_Error_Runtime('Variable "tokenLifetime" does not exist.', 7, $this->getSourceContext()); })())), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_29be1f2e0ff1bbf88c6943e1b6d96d47b47f5d5caefdc7f039582564b4e636ba->leave($__internal_29be1f2e0ff1bbf88c6943e1b6d96d47b47f5d5caefdc7f039582564b4e636ba_prof);

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
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
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
