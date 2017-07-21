<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_bfaa9671ecf273739da324b7a4402a37020d537178ce3a6ce85b77d83b111854 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_30c2f6908bfa41d919d530680b45e7888daf25fa8e7d3e76f55e22ed307360aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30c2f6908bfa41d919d530680b45e7888daf25fa8e7d3e76f55e22ed307360aa->enter($__internal_30c2f6908bfa41d919d530680b45e7888daf25fa8e7d3e76f55e22ed307360aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_f10d1cfc18bea36216be6d53aca3e9ce57699a0eba143274e13316e62bd00320 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f10d1cfc18bea36216be6d53aca3e9ce57699a0eba143274e13316e62bd00320->enter($__internal_f10d1cfc18bea36216be6d53aca3e9ce57699a0eba143274e13316e62bd00320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30c2f6908bfa41d919d530680b45e7888daf25fa8e7d3e76f55e22ed307360aa->leave($__internal_30c2f6908bfa41d919d530680b45e7888daf25fa8e7d3e76f55e22ed307360aa_prof);

        
        $__internal_f10d1cfc18bea36216be6d53aca3e9ce57699a0eba143274e13316e62bd00320->leave($__internal_f10d1cfc18bea36216be6d53aca3e9ce57699a0eba143274e13316e62bd00320_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1a12d110379003a88829ee5e1f70b9f2e198793848f93414a965027db65b5bed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a12d110379003a88829ee5e1f70b9f2e198793848f93414a965027db65b5bed->enter($__internal_1a12d110379003a88829ee5e1f70b9f2e198793848f93414a965027db65b5bed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e8690ad9e5e5f67dcd760b1d4a0a197d866e041cc0697eb0b6686e7abc037b8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8690ad9e5e5f67dcd760b1d4a0a197d866e041cc0697eb0b6686e7abc037b8b->enter($__internal_e8690ad9e5e5f67dcd760b1d4a0a197d866e041cc0697eb0b6686e7abc037b8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_e8690ad9e5e5f67dcd760b1d4a0a197d866e041cc0697eb0b6686e7abc037b8b->leave($__internal_e8690ad9e5e5f67dcd760b1d4a0a197d866e041cc0697eb0b6686e7abc037b8b_prof);

        
        $__internal_1a12d110379003a88829ee5e1f70b9f2e198793848f93414a965027db65b5bed->leave($__internal_1a12d110379003a88829ee5e1f70b9f2e198793848f93414a965027db65b5bed_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
