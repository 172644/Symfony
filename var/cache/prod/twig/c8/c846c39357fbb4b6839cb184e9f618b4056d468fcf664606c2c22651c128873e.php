<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_4da6b51fd5a67a96ac47eccf8a5ec6732f92f556e78b65df38877a1c92142db3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_446aa5fca2650661a6b4dd524b385ed67797215aec322463d9d813810b84e01e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_446aa5fca2650661a6b4dd524b385ed67797215aec322463d9d813810b84e01e->enter($__internal_446aa5fca2650661a6b4dd524b385ed67797215aec322463d9d813810b84e01e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_446aa5fca2650661a6b4dd524b385ed67797215aec322463d9d813810b84e01e->leave($__internal_446aa5fca2650661a6b4dd524b385ed67797215aec322463d9d813810b84e01e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_19d938cab3504de80c3bfc14f2b4f28356bb62b4d969091e8e4a9000f9f83f9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19d938cab3504de80c3bfc14f2b4f28356bb62b4d969091e8e4a9000f9f83f9a->enter($__internal_19d938cab3504de80c3bfc14f2b4f28356bb62b4d969091e8e4a9000f9f83f9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_19d938cab3504de80c3bfc14f2b4f28356bb62b4d969091e8e4a9000f9f83f9a->leave($__internal_19d938cab3504de80c3bfc14f2b4f28356bb62b4d969091e8e4a9000f9f83f9a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/show.html.twig");
    }
}
