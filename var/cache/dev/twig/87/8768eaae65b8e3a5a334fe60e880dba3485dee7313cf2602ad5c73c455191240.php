<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_05cdd1a7be82ded170fdfa23c82747430812b8eb799b5bf54b5c8dfadd9c16ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_bed7c80cde10dd6aed6b041e23b401708f508cb238a5acaba1b1ee0a865e4a21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bed7c80cde10dd6aed6b041e23b401708f508cb238a5acaba1b1ee0a865e4a21->enter($__internal_bed7c80cde10dd6aed6b041e23b401708f508cb238a5acaba1b1ee0a865e4a21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_672659ac853626682b93645309a3e0dd093d218bc9675615892e50b4db176158 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_672659ac853626682b93645309a3e0dd093d218bc9675615892e50b4db176158->enter($__internal_672659ac853626682b93645309a3e0dd093d218bc9675615892e50b4db176158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bed7c80cde10dd6aed6b041e23b401708f508cb238a5acaba1b1ee0a865e4a21->leave($__internal_bed7c80cde10dd6aed6b041e23b401708f508cb238a5acaba1b1ee0a865e4a21_prof);

        
        $__internal_672659ac853626682b93645309a3e0dd093d218bc9675615892e50b4db176158->leave($__internal_672659ac853626682b93645309a3e0dd093d218bc9675615892e50b4db176158_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_20536ffe12b38118e5c61574954a30db24290c91c46774e4d67fa013698f509f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20536ffe12b38118e5c61574954a30db24290c91c46774e4d67fa013698f509f->enter($__internal_20536ffe12b38118e5c61574954a30db24290c91c46774e4d67fa013698f509f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7f0f516d663a67aa192f1217dbdced9189cf4d7b0455e7f2fcef9f69ce1bce46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f0f516d663a67aa192f1217dbdced9189cf4d7b0455e7f2fcef9f69ce1bce46->enter($__internal_7f0f516d663a67aa192f1217dbdced9189cf4d7b0455e7f2fcef9f69ce1bce46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_7f0f516d663a67aa192f1217dbdced9189cf4d7b0455e7f2fcef9f69ce1bce46->leave($__internal_7f0f516d663a67aa192f1217dbdced9189cf4d7b0455e7f2fcef9f69ce1bce46_prof);

        
        $__internal_20536ffe12b38118e5c61574954a30db24290c91c46774e4d67fa013698f509f->leave($__internal_20536ffe12b38118e5c61574954a30db24290c91c46774e4d67fa013698f509f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Profile/show.html.twig");
    }
}
