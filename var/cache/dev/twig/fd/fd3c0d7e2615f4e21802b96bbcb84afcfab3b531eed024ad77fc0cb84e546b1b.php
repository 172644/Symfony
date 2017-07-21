<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_e97ffc4776be223cceb8f83429854908d19dd77ba0326aab1019ed73e9d0beab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_8fef97edc3a4bf82fb15fd6302ab2c93147e7c109abc38499b56af24bf4f839d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fef97edc3a4bf82fb15fd6302ab2c93147e7c109abc38499b56af24bf4f839d->enter($__internal_8fef97edc3a4bf82fb15fd6302ab2c93147e7c109abc38499b56af24bf4f839d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_6e49b72a8a2ec5300b87c75bc8edea9d2766c6f1b07c5602ab02ffe8f2639c4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e49b72a8a2ec5300b87c75bc8edea9d2766c6f1b07c5602ab02ffe8f2639c4a->enter($__internal_6e49b72a8a2ec5300b87c75bc8edea9d2766c6f1b07c5602ab02ffe8f2639c4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8fef97edc3a4bf82fb15fd6302ab2c93147e7c109abc38499b56af24bf4f839d->leave($__internal_8fef97edc3a4bf82fb15fd6302ab2c93147e7c109abc38499b56af24bf4f839d_prof);

        
        $__internal_6e49b72a8a2ec5300b87c75bc8edea9d2766c6f1b07c5602ab02ffe8f2639c4a->leave($__internal_6e49b72a8a2ec5300b87c75bc8edea9d2766c6f1b07c5602ab02ffe8f2639c4a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e53769d7bf34e9a90e9881a8a3aef59da09b3441e33c1add05b8510c9f13d277 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e53769d7bf34e9a90e9881a8a3aef59da09b3441e33c1add05b8510c9f13d277->enter($__internal_e53769d7bf34e9a90e9881a8a3aef59da09b3441e33c1add05b8510c9f13d277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_aa40ee2c6986988e396c0ee2207f1f1d6a00cea3e00cf81126c2223214c67629 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa40ee2c6986988e396c0ee2207f1f1d6a00cea3e00cf81126c2223214c67629->enter($__internal_aa40ee2c6986988e396c0ee2207f1f1d6a00cea3e00cf81126c2223214c67629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_aa40ee2c6986988e396c0ee2207f1f1d6a00cea3e00cf81126c2223214c67629->leave($__internal_aa40ee2c6986988e396c0ee2207f1f1d6a00cea3e00cf81126c2223214c67629_prof);

        
        $__internal_e53769d7bf34e9a90e9881a8a3aef59da09b3441e33c1add05b8510c9f13d277->leave($__internal_e53769d7bf34e9a90e9881a8a3aef59da09b3441e33c1add05b8510c9f13d277_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
