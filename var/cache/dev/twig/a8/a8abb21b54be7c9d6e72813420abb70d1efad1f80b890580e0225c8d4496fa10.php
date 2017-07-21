<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_0a9cf805f5f40ca0cb0d4eeeb890cb8e8ca5e3f34146329d6e25752e9d184f19 extends Twig_Template
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
        $__internal_37c21872c99d053ddee40eabf71ade599cc57c6b48b7ac82806f1fb94b7227d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37c21872c99d053ddee40eabf71ade599cc57c6b48b7ac82806f1fb94b7227d3->enter($__internal_37c21872c99d053ddee40eabf71ade599cc57c6b48b7ac82806f1fb94b7227d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_dff800a2fc70630adfa60e6867945b1b74192012756d4211d65d19c4ea09134e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dff800a2fc70630adfa60e6867945b1b74192012756d4211d65d19c4ea09134e->enter($__internal_dff800a2fc70630adfa60e6867945b1b74192012756d4211d65d19c4ea09134e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37c21872c99d053ddee40eabf71ade599cc57c6b48b7ac82806f1fb94b7227d3->leave($__internal_37c21872c99d053ddee40eabf71ade599cc57c6b48b7ac82806f1fb94b7227d3_prof);

        
        $__internal_dff800a2fc70630adfa60e6867945b1b74192012756d4211d65d19c4ea09134e->leave($__internal_dff800a2fc70630adfa60e6867945b1b74192012756d4211d65d19c4ea09134e_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d9d2dc277413597da7a336874ba99febf51c0f58d3a789037ead1c736e15c099 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9d2dc277413597da7a336874ba99febf51c0f58d3a789037ead1c736e15c099->enter($__internal_d9d2dc277413597da7a336874ba99febf51c0f58d3a789037ead1c736e15c099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_76bc4907763ebb3d10245d2e3b07fdb9c319f0ce9ddad546544fc8909f23e2c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76bc4907763ebb3d10245d2e3b07fdb9c319f0ce9ddad546544fc8909f23e2c4->enter($__internal_76bc4907763ebb3d10245d2e3b07fdb9c319f0ce9ddad546544fc8909f23e2c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_76bc4907763ebb3d10245d2e3b07fdb9c319f0ce9ddad546544fc8909f23e2c4->leave($__internal_76bc4907763ebb3d10245d2e3b07fdb9c319f0ce9ddad546544fc8909f23e2c4_prof);

        
        $__internal_d9d2dc277413597da7a336874ba99febf51c0f58d3a789037ead1c736e15c099->leave($__internal_d9d2dc277413597da7a336874ba99febf51c0f58d3a789037ead1c736e15c099_prof);

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
        return array (  49 => 6,  40 => 5,  11 => 1,);
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
