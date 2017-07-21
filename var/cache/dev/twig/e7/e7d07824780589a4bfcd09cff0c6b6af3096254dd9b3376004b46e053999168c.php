<?php

/* @FOSUser/Registration/check_email.html.twig */
class __TwigTemplate_642f9f10a8b9ffbb1d7722bcd04e67f51d912fd0280225ffd6f72ffacd2c508f extends Twig_Template
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
        $__internal_c5bd6821eb92b3244b08a20d4ea64ee98860343b7275c8de53c39ca62c4539bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5bd6821eb92b3244b08a20d4ea64ee98860343b7275c8de53c39ca62c4539bd->enter($__internal_c5bd6821eb92b3244b08a20d4ea64ee98860343b7275c8de53c39ca62c4539bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $__internal_6ada4027e7ece210b11908a18050aecb0c71c4160c542fb9f886099de9aadbde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ada4027e7ece210b11908a18050aecb0c71c4160c542fb9f886099de9aadbde->enter($__internal_6ada4027e7ece210b11908a18050aecb0c71c4160c542fb9f886099de9aadbde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c5bd6821eb92b3244b08a20d4ea64ee98860343b7275c8de53c39ca62c4539bd->leave($__internal_c5bd6821eb92b3244b08a20d4ea64ee98860343b7275c8de53c39ca62c4539bd_prof);

        
        $__internal_6ada4027e7ece210b11908a18050aecb0c71c4160c542fb9f886099de9aadbde->leave($__internal_6ada4027e7ece210b11908a18050aecb0c71c4160c542fb9f886099de9aadbde_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_827e005d02364e24f2c694f2e57796a9d7c514dcd2cf62d01955247e7e2b8629 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_827e005d02364e24f2c694f2e57796a9d7c514dcd2cf62d01955247e7e2b8629->enter($__internal_827e005d02364e24f2c694f2e57796a9d7c514dcd2cf62d01955247e7e2b8629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_fbff79a21c9cb57bbc2a68028b594464ce28395d1f45f5f1cff34f0ad4bbd4ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbff79a21c9cb57bbc2a68028b594464ce28395d1f45f5f1cff34f0ad4bbd4ee->enter($__internal_fbff79a21c9cb57bbc2a68028b594464ce28395d1f45f5f1cff34f0ad4bbd4ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_fbff79a21c9cb57bbc2a68028b594464ce28395d1f45f5f1cff34f0ad4bbd4ee->leave($__internal_fbff79a21c9cb57bbc2a68028b594464ce28395d1f45f5f1cff34f0ad4bbd4ee_prof);

        
        $__internal_827e005d02364e24f2c694f2e57796a9d7c514dcd2cf62d01955247e7e2b8629->leave($__internal_827e005d02364e24f2c694f2e57796a9d7c514dcd2cf62d01955247e7e2b8629_prof);

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
        return array (  49 => 6,  40 => 5,  11 => 1,);
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
