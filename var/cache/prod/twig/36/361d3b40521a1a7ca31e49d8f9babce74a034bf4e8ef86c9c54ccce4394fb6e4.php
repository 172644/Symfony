<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_d4b425196e06c0c78e9d610f0c035b4daab1dd8e597629845e49006383b1d4c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_8784db3ee398d7b9053da1b5fd68c9070fdf34dc42a910932d12549efb4230a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8784db3ee398d7b9053da1b5fd68c9070fdf34dc42a910932d12549efb4230a7->enter($__internal_8784db3ee398d7b9053da1b5fd68c9070fdf34dc42a910932d12549efb4230a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8784db3ee398d7b9053da1b5fd68c9070fdf34dc42a910932d12549efb4230a7->leave($__internal_8784db3ee398d7b9053da1b5fd68c9070fdf34dc42a910932d12549efb4230a7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c6678d09bb04815be3d98d1085059a8d30bb33139d842bc5ac171c1c6517f22a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6678d09bb04815be3d98d1085059a8d30bb33139d842bc5ac171c1c6517f22a->enter($__internal_c6678d09bb04815be3d98d1085059a8d30bb33139d842bc5ac171c1c6517f22a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_c6678d09bb04815be3d98d1085059a8d30bb33139d842bc5ac171c1c6517f22a->leave($__internal_c6678d09bb04815be3d98d1085059a8d30bb33139d842bc5ac171c1c6517f22a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Security/login.html.twig");
    }
}
