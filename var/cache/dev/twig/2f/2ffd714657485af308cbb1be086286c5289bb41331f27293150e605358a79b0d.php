<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_cdb271da1ab484f259bb34adf31edd4539d22a809c738fa995814c5cc89700a0 extends Twig_Template
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
        $__internal_7525411f17becc42c031b29ecc01c1e03e0efe3811f904a964924302da132cb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7525411f17becc42c031b29ecc01c1e03e0efe3811f904a964924302da132cb1->enter($__internal_7525411f17becc42c031b29ecc01c1e03e0efe3811f904a964924302da132cb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        $__internal_96240c37958243ffa080a4d8335749f3480a161e8dc6311cb87613c457d134eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96240c37958243ffa080a4d8335749f3480a161e8dc6311cb87613c457d134eb->enter($__internal_96240c37958243ffa080a4d8335749f3480a161e8dc6311cb87613c457d134eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

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
        
        $__internal_7525411f17becc42c031b29ecc01c1e03e0efe3811f904a964924302da132cb1->leave($__internal_7525411f17becc42c031b29ecc01c1e03e0efe3811f904a964924302da132cb1_prof);

        
        $__internal_96240c37958243ffa080a4d8335749f3480a161e8dc6311cb87613c457d134eb->leave($__internal_96240c37958243ffa080a4d8335749f3480a161e8dc6311cb87613c457d134eb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
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
", "FOSUserBundle:Profile:show_content.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Profile/show_content.html.twig");
    }
}
