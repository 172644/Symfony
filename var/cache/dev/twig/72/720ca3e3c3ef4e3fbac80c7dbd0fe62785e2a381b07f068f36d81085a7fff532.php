<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_caeb01f30bbca794531869adb857fb52f08fdd51870c5e92e6a0f13d263ee5e3 extends Twig_Template
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
        $__internal_d9d1eafaf4db23ab1a7283f2a63fa3ab45e42102ce522af1f0011e8bb53a883c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9d1eafaf4db23ab1a7283f2a63fa3ab45e42102ce522af1f0011e8bb53a883c->enter($__internal_d9d1eafaf4db23ab1a7283f2a63fa3ab45e42102ce522af1f0011e8bb53a883c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

        $__internal_d2a7103b87d6a094569a48179e13c6af699ef81bbf906ee7a093e1e0f52a17ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2a7103b87d6a094569a48179e13c6af699ef81bbf906ee7a093e1e0f52a17ef->enter($__internal_d2a7103b87d6a094569a48179e13c6af699ef81bbf906ee7a093e1e0f52a17ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new Twig_Error_Runtime('Variable "group" does not exist.', 4, $this->getSourceContext()); })()), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_d9d1eafaf4db23ab1a7283f2a63fa3ab45e42102ce522af1f0011e8bb53a883c->leave($__internal_d9d1eafaf4db23ab1a7283f2a63fa3ab45e42102ce522af1f0011e8bb53a883c_prof);

        
        $__internal_d2a7103b87d6a094569a48179e13c6af699ef81bbf906ee7a093e1e0f52a17ef->leave($__internal_d2a7103b87d6a094569a48179e13c6af699ef81bbf906ee7a093e1e0f52a17ef_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "@FOSUser/Group/show_content.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\show_content.html.twig");
    }
}
