<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_5b118f590cdf3ee6b3d78b28f020050b3ed73ba6fa0289ccdbd6c7d2c1aacace extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_f9cc60e58ec3853cf17f3e5749bcf2e16b2bed96bdd15345f99570289383654b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9cc60e58ec3853cf17f3e5749bcf2e16b2bed96bdd15345f99570289383654b->enter($__internal_f9cc60e58ec3853cf17f3e5749bcf2e16b2bed96bdd15345f99570289383654b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $__internal_c01c7ff11d0580a802a57c0829072c941591187fdbc3a0cd50398d7d7ea5c6f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c01c7ff11d0580a802a57c0829072c941591187fdbc3a0cd50398d7d7ea5c6f2->enter($__internal_c01c7ff11d0580a802a57c0829072c941591187fdbc3a0cd50398d7d7ea5c6f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f9cc60e58ec3853cf17f3e5749bcf2e16b2bed96bdd15345f99570289383654b->leave($__internal_f9cc60e58ec3853cf17f3e5749bcf2e16b2bed96bdd15345f99570289383654b_prof);

        
        $__internal_c01c7ff11d0580a802a57c0829072c941591187fdbc3a0cd50398d7d7ea5c6f2->leave($__internal_c01c7ff11d0580a802a57c0829072c941591187fdbc3a0cd50398d7d7ea5c6f2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1ced0d30a775c92143e47c80697aa885d2e80c5ec4fc4b70561b02b29030e2d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ced0d30a775c92143e47c80697aa885d2e80c5ec4fc4b70561b02b29030e2d6->enter($__internal_1ced0d30a775c92143e47c80697aa885d2e80c5ec4fc4b70561b02b29030e2d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b3bc64dc8c8ad0899a8a36b4f7245f3da8cd514863e8b332bb7e6d4c1b11af2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3bc64dc8c8ad0899a8a36b4f7245f3da8cd514863e8b332bb7e6d4c1b11af2d->enter($__internal_b3bc64dc8c8ad0899a8a36b4f7245f3da8cd514863e8b332bb7e6d4c1b11af2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_b3bc64dc8c8ad0899a8a36b4f7245f3da8cd514863e8b332bb7e6d4c1b11af2d->leave($__internal_b3bc64dc8c8ad0899a8a36b4f7245f3da8cd514863e8b332bb7e6d4c1b11af2d_prof);

        
        $__internal_1ced0d30a775c92143e47c80697aa885d2e80c5ec4fc4b70561b02b29030e2d6->leave($__internal_1ced0d30a775c92143e47c80697aa885d2e80c5ec4fc4b70561b02b29030e2d6_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/list.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\list.html.twig");
    }
}
