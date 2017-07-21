<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_3e1face4aa51c2f03929d23cd3ccece04983244f78f9158af8a3208858d89485 extends Twig_Template
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
        $__internal_6bfc0f7313cfabf26a9d8935d2f0b9ac291e9d7a8f4265f90123f222aefd3bea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bfc0f7313cfabf26a9d8935d2f0b9ac291e9d7a8f4265f90123f222aefd3bea->enter($__internal_6bfc0f7313cfabf26a9d8935d2f0b9ac291e9d7a8f4265f90123f222aefd3bea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6bfc0f7313cfabf26a9d8935d2f0b9ac291e9d7a8f4265f90123f222aefd3bea->leave($__internal_6bfc0f7313cfabf26a9d8935d2f0b9ac291e9d7a8f4265f90123f222aefd3bea_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b2eaefaf5f71110eb095f9d3a486fb21900818393a049ae43b94c2262a273c3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2eaefaf5f71110eb095f9d3a486fb21900818393a049ae43b94c2262a273c3e->enter($__internal_b2eaefaf5f71110eb095f9d3a486fb21900818393a049ae43b94c2262a273c3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_b2eaefaf5f71110eb095f9d3a486fb21900818393a049ae43b94c2262a273c3e->leave($__internal_b2eaefaf5f71110eb095f9d3a486fb21900818393a049ae43b94c2262a273c3e_prof);

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
        return array (  40 => 4,  34 => 3,  11 => 1,);
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
