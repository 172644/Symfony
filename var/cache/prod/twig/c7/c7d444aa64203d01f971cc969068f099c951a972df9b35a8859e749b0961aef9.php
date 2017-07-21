<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_0f100546a95b4b06fc093046d6ff8a18903fa879477f328e95022238fc282f55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_5a5578e3b5ffd82aa50c6d64fd3ed549ecc5f957de586494d1ceaa199b42b201 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a5578e3b5ffd82aa50c6d64fd3ed549ecc5f957de586494d1ceaa199b42b201->enter($__internal_5a5578e3b5ffd82aa50c6d64fd3ed549ecc5f957de586494d1ceaa199b42b201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a5578e3b5ffd82aa50c6d64fd3ed549ecc5f957de586494d1ceaa199b42b201->leave($__internal_5a5578e3b5ffd82aa50c6d64fd3ed549ecc5f957de586494d1ceaa199b42b201_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_05309aa3e72f8dda68d377dbc856f255dec8b78e41a1af4df90f4d9a688c8c49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05309aa3e72f8dda68d377dbc856f255dec8b78e41a1af4df90f4d9a688c8c49->enter($__internal_05309aa3e72f8dda68d377dbc856f255dec8b78e41a1af4df90f4d9a688c8c49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_05309aa3e72f8dda68d377dbc856f255dec8b78e41a1af4df90f4d9a688c8c49->leave($__internal_05309aa3e72f8dda68d377dbc856f255dec8b78e41a1af4df90f4d9a688c8c49_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/register.html.twig");
    }
}
