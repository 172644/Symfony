<?php

/* @FOSUser/Registration/check_email.html.twig */
class __TwigTemplate_5179d4dc386cc2f9f110bc268e574a0fa8542d79e0eddf5319f76b4396596adb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/check_email.html.twig", 1);
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
        $__internal_a118be237dbaced90af4f3ff7c395f716020fc371196dc565f7de051f3c7e909 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a118be237dbaced90af4f3ff7c395f716020fc371196dc565f7de051f3c7e909->enter($__internal_a118be237dbaced90af4f3ff7c395f716020fc371196dc565f7de051f3c7e909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a118be237dbaced90af4f3ff7c395f716020fc371196dc565f7de051f3c7e909->leave($__internal_a118be237dbaced90af4f3ff7c395f716020fc371196dc565f7de051f3c7e909_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_69e2f787ea4273dec13bc03d626e4520b0c1e9f39cf6e1623fcf2043de4884b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69e2f787ea4273dec13bc03d626e4520b0c1e9f39cf6e1623fcf2043de4884b2->enter($__internal_69e2f787ea4273dec13bc03d626e4520b0c1e9f39cf6e1623fcf2043de4884b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_69e2f787ea4273dec13bc03d626e4520b0c1e9f39cf6e1623fcf2043de4884b2->leave($__internal_69e2f787ea4273dec13bc03d626e4520b0c1e9f39cf6e1623fcf2043de4884b2_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "@FOSUser/Registration/check_email.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\check_email.html.twig");
    }
}
