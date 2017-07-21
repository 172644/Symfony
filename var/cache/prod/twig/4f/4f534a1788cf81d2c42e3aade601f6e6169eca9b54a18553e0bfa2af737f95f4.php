<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_a950746e8a004ad709888e7ad0cb7f5dc8fd1ee56cc075f6c1d2e66cb77b5e11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_916a24b7e7f6082aa788a776e207f0f39fea3bff578c8a32192132eb8825fde6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_916a24b7e7f6082aa788a776e207f0f39fea3bff578c8a32192132eb8825fde6->enter($__internal_916a24b7e7f6082aa788a776e207f0f39fea3bff578c8a32192132eb8825fde6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_916a24b7e7f6082aa788a776e207f0f39fea3bff578c8a32192132eb8825fde6->leave($__internal_916a24b7e7f6082aa788a776e207f0f39fea3bff578c8a32192132eb8825fde6_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6733f2ef6b321a9427a1476077a9a2c0102424a4ce73565df0da033db62c583c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6733f2ef6b321a9427a1476077a9a2c0102424a4ce73565df0da033db62c583c->enter($__internal_6733f2ef6b321a9427a1476077a9a2c0102424a4ce73565df0da033db62c583c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_6733f2ef6b321a9427a1476077a9a2c0102424a4ce73565df0da033db62c583c->leave($__internal_6733f2ef6b321a9427a1476077a9a2c0102424a4ce73565df0da033db62c583c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
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
", "FOSUserBundle:Registration:check_email.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
