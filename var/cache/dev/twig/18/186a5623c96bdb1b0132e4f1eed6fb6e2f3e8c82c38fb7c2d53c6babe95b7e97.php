<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_8909bd743f54549cc749f3e465d5a9cc153cdaad2f0eb3769ac29328c4f66d42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_63669f379afc2405919d89d6a480bab780f2362024f649f46e2a67a933e290ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63669f379afc2405919d89d6a480bab780f2362024f649f46e2a67a933e290ac->enter($__internal_63669f379afc2405919d89d6a480bab780f2362024f649f46e2a67a933e290ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $__internal_cfd49e8b17aaca487a1f3a625fb9f56801c0ade07fe5c41b3e4d9cf01e0392a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfd49e8b17aaca487a1f3a625fb9f56801c0ade07fe5c41b3e4d9cf01e0392a6->enter($__internal_cfd49e8b17aaca487a1f3a625fb9f56801c0ade07fe5c41b3e4d9cf01e0392a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63669f379afc2405919d89d6a480bab780f2362024f649f46e2a67a933e290ac->leave($__internal_63669f379afc2405919d89d6a480bab780f2362024f649f46e2a67a933e290ac_prof);

        
        $__internal_cfd49e8b17aaca487a1f3a625fb9f56801c0ade07fe5c41b3e4d9cf01e0392a6->leave($__internal_cfd49e8b17aaca487a1f3a625fb9f56801c0ade07fe5c41b3e4d9cf01e0392a6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2f93c6dd3d6d9e07d79ace393cc342c8e9458fb9b0110638eec9f8330323db72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f93c6dd3d6d9e07d79ace393cc342c8e9458fb9b0110638eec9f8330323db72->enter($__internal_2f93c6dd3d6d9e07d79ace393cc342c8e9458fb9b0110638eec9f8330323db72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_70850ff856cb9fbbb5ff10e4dc5cd1213899cb0ce2529bda17d104bdee98d10c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70850ff856cb9fbbb5ff10e4dc5cd1213899cb0ce2529bda17d104bdee98d10c->enter($__internal_70850ff856cb9fbbb5ff10e4dc5cd1213899cb0ce2529bda17d104bdee98d10c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_70850ff856cb9fbbb5ff10e4dc5cd1213899cb0ce2529bda17d104bdee98d10c->leave($__internal_70850ff856cb9fbbb5ff10e4dc5cd1213899cb0ce2529bda17d104bdee98d10c_prof);

        
        $__internal_2f93c6dd3d6d9e07d79ace393cc342c8e9458fb9b0110638eec9f8330323db72->leave($__internal_2f93c6dd3d6d9e07d79ace393cc342c8e9458fb9b0110638eec9f8330323db72_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
", "@FOSUser/Profile/edit.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Profile\\edit.html.twig");
    }
}
