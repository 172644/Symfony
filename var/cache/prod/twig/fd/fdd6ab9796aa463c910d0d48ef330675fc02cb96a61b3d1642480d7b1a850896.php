<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_2bcd8da9cd6a5386477e54b1e7a3e2a7cea5ab34aac64e51ee9f4cd6fbd0c332 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_282465a5157c1e14467d97468444f205c3cdef1921060fcc151d1edac81bcee2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_282465a5157c1e14467d97468444f205c3cdef1921060fcc151d1edac81bcee2->enter($__internal_282465a5157c1e14467d97468444f205c3cdef1921060fcc151d1edac81bcee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_282465a5157c1e14467d97468444f205c3cdef1921060fcc151d1edac81bcee2->leave($__internal_282465a5157c1e14467d97468444f205c3cdef1921060fcc151d1edac81bcee2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_88cd3c2411debd8ae4e1c0813afdd0b778f168e39ad60efeb7188ce45d4d01b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88cd3c2411debd8ae4e1c0813afdd0b778f168e39ad60efeb7188ce45d4d01b7->enter($__internal_88cd3c2411debd8ae4e1c0813afdd0b778f168e39ad60efeb7188ce45d4d01b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_88cd3c2411debd8ae4e1c0813afdd0b778f168e39ad60efeb7188ce45d4d01b7->leave($__internal_88cd3c2411debd8ae4e1c0813afdd0b778f168e39ad60efeb7188ce45d4d01b7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/edit.html.twig");
    }
}
