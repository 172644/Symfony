<?php

/* @FOSUser/Profile/show_content.html.twig */
class __TwigTemplate_f3a86a9d00d305e60f5412d4f09d7a2db1a53a97924520c8f1ed945b4baaa700 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_90f7976d910a79ddc9694504e293c9dd49c69430602fef9bd48f9676b1743f71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90f7976d910a79ddc9694504e293c9dd49c69430602fef9bd48f9676b1743f71->enter($__internal_90f7976d910a79ddc9694504e293c9dd49c69430602fef9bd48f9676b1743f71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        $__internal_d710ab5d29da61798410819c6bf46a7d6516c203f3206b97a5dc7c91390e8a04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d710ab5d29da61798410819c6bf46a7d6516c203f3206b97a5dc7c91390e8a04->enter($__internal_d710ab5d29da61798410819c6bf46a7d6516c203f3206b97a5dc7c91390e8a04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 5, $this->getSourceContext()); })()), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_90f7976d910a79ddc9694504e293c9dd49c69430602fef9bd48f9676b1743f71->leave($__internal_90f7976d910a79ddc9694504e293c9dd49c69430602fef9bd48f9676b1743f71_prof);

        
        $__internal_d710ab5d29da61798410819c6bf46a7d6516c203f3206b97a5dc7c91390e8a04->leave($__internal_d710ab5d29da61798410819c6bf46a7d6516c203f3206b97a5dc7c91390e8a04_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  29 => 4,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_user_show\">
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
</div>
", "@FOSUser/Profile/show_content.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Profile\\show_content.html.twig");
    }
}
