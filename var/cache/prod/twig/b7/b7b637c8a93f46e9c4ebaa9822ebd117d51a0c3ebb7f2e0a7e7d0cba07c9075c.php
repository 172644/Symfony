<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_44fbd2b189c272e7054f464956716c7334c1730cd98d45c70933d9517f520871 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_1166ccff3453ac949ab1f74ae8e5fe324de6afdc38f970f323b9658839f2fbb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1166ccff3453ac949ab1f74ae8e5fe324de6afdc38f970f323b9658839f2fbb6->enter($__internal_1166ccff3453ac949ab1f74ae8e5fe324de6afdc38f970f323b9658839f2fbb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1166ccff3453ac949ab1f74ae8e5fe324de6afdc38f970f323b9658839f2fbb6->leave($__internal_1166ccff3453ac949ab1f74ae8e5fe324de6afdc38f970f323b9658839f2fbb6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ca52285511aea0617c309b7f1ceb549b4510ed32af8b0ee17efe93fc6a1a92f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca52285511aea0617c309b7f1ceb549b4510ed32af8b0ee17efe93fc6a1a92f6->enter($__internal_ca52285511aea0617c309b7f1ceb549b4510ed32af8b0ee17efe93fc6a1a92f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_ca52285511aea0617c309b7f1ceb549b4510ed32af8b0ee17efe93fc6a1a92f6->leave($__internal_ca52285511aea0617c309b7f1ceb549b4510ed32af8b0ee17efe93fc6a1a92f6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
