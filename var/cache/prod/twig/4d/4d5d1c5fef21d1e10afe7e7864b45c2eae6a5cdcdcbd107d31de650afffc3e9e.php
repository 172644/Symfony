<?php

/* @FOSUser/Resetting/check_email.html.twig */
class __TwigTemplate_7bbe989e1d0ef66420ed4598ea859d6e0ba4414f89b81d2052b8383c9b44f69c extends Twig_Template
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
        $__internal_b98ce1114cde240d6e8e013ee2c7b9076b972473df32641df202c1774d88435d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b98ce1114cde240d6e8e013ee2c7b9076b972473df32641df202c1774d88435d->enter($__internal_b98ce1114cde240d6e8e013ee2c7b9076b972473df32641df202c1774d88435d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b98ce1114cde240d6e8e013ee2c7b9076b972473df32641df202c1774d88435d->leave($__internal_b98ce1114cde240d6e8e013ee2c7b9076b972473df32641df202c1774d88435d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e343dbb2029ef9e8ca0e01bd745671c547f713dbece957cca976085e8d970119 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e343dbb2029ef9e8ca0e01bd745671c547f713dbece957cca976085e8d970119->enter($__internal_e343dbb2029ef9e8ca0e01bd745671c547f713dbece957cca976085e8d970119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) || array_key_exists("tokenLifetime", $context) ? $context["tokenLifetime"] : (function () { throw new Twig_Error_Runtime('Variable "tokenLifetime" does not exist.', 7, $this->getSourceContext()); })())), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_e343dbb2029ef9e8ca0e01bd745671c547f713dbece957cca976085e8d970119->leave($__internal_e343dbb2029ef9e8ca0e01bd745671c547f713dbece957cca976085e8d970119_prof);

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
", "@FOSUser/Resetting/check_email.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\check_email.html.twig");
    }
}
