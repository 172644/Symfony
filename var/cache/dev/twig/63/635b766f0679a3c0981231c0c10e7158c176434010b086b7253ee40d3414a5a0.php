<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_dc3f624e2ab04d02532665c1dd4651881c87fb6d3eb13ca9e577ae579e21b847 extends Twig_Template
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
        $__internal_690bd2eb19de3229f2d166353cdace09c35fcea7a02f6a1aec9f24e3bc9b122a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_690bd2eb19de3229f2d166353cdace09c35fcea7a02f6a1aec9f24e3bc9b122a->enter($__internal_690bd2eb19de3229f2d166353cdace09c35fcea7a02f6a1aec9f24e3bc9b122a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_8f1b4f6364868304ad6a9a9e47be6cae1863a94d1c02a6af671af6a5172142b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f1b4f6364868304ad6a9a9e47be6cae1863a94d1c02a6af671af6a5172142b1->enter($__internal_8f1b4f6364868304ad6a9a9e47be6cae1863a94d1c02a6af671af6a5172142b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_690bd2eb19de3229f2d166353cdace09c35fcea7a02f6a1aec9f24e3bc9b122a->leave($__internal_690bd2eb19de3229f2d166353cdace09c35fcea7a02f6a1aec9f24e3bc9b122a_prof);

        
        $__internal_8f1b4f6364868304ad6a9a9e47be6cae1863a94d1c02a6af671af6a5172142b1->leave($__internal_8f1b4f6364868304ad6a9a9e47be6cae1863a94d1c02a6af671af6a5172142b1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a1da23f5fd125ea6a6aafabcd1ad1e29ce7fe25b516bd2b6c3cac6d2b101ae52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1da23f5fd125ea6a6aafabcd1ad1e29ce7fe25b516bd2b6c3cac6d2b101ae52->enter($__internal_a1da23f5fd125ea6a6aafabcd1ad1e29ce7fe25b516bd2b6c3cac6d2b101ae52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4470f1163359ec7bc3716995e440d8f84386404f8ce49a735c580a2cfbb326ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4470f1163359ec7bc3716995e440d8f84386404f8ce49a735c580a2cfbb326ea->enter($__internal_4470f1163359ec7bc3716995e440d8f84386404f8ce49a735c580a2cfbb326ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_4470f1163359ec7bc3716995e440d8f84386404f8ce49a735c580a2cfbb326ea->leave($__internal_4470f1163359ec7bc3716995e440d8f84386404f8ce49a735c580a2cfbb326ea_prof);

        
        $__internal_a1da23f5fd125ea6a6aafabcd1ad1e29ce7fe25b516bd2b6c3cac6d2b101ae52->leave($__internal_a1da23f5fd125ea6a6aafabcd1ad1e29ce7fe25b516bd2b6c3cac6d2b101ae52_prof);

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
        return array (  49 => 4,  40 => 3,  11 => 1,);
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
