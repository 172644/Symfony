<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_abeb0cd4fcdad951b72921dff49b0a6b6f792d8ac7d292bccbfbc3699df531fb extends Twig_Template
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
        $__internal_b6a95986e59c90fcae9c30a9ad2ea33dc7f3d10280731a08aedb85c93a576a68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6a95986e59c90fcae9c30a9ad2ea33dc7f3d10280731a08aedb85c93a576a68->enter($__internal_b6a95986e59c90fcae9c30a9ad2ea33dc7f3d10280731a08aedb85c93a576a68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

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
        
        $__internal_b6a95986e59c90fcae9c30a9ad2ea33dc7f3d10280731a08aedb85c93a576a68->leave($__internal_b6a95986e59c90fcae9c30a9ad2ea33dc7f3d10280731a08aedb85c93a576a68_prof);

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
        return array (  26 => 4,  22 => 2,);
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
