<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_58c49f7cd78336ba8d546fa06f1e1b1ce4b48a9828fe50b46568f6827cc96eba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_a1f140c78dc32dc3b8d20f78454e7e54a05c57a7f73719f15fc4187a0d24b704 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1f140c78dc32dc3b8d20f78454e7e54a05c57a7f73719f15fc4187a0d24b704->enter($__internal_a1f140c78dc32dc3b8d20f78454e7e54a05c57a7f73719f15fc4187a0d24b704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1f140c78dc32dc3b8d20f78454e7e54a05c57a7f73719f15fc4187a0d24b704->leave($__internal_a1f140c78dc32dc3b8d20f78454e7e54a05c57a7f73719f15fc4187a0d24b704_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b1e273bac17b8976cb1c238cd7c439dd53963b292b7f7bbec6a5980a94adb6aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1e273bac17b8976cb1c238cd7c439dd53963b292b7f7bbec6a5980a94adb6aa->enter($__internal_b1e273bac17b8976cb1c238cd7c439dd53963b292b7f7bbec6a5980a94adb6aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_b1e273bac17b8976cb1c238cd7c439dd53963b292b7f7bbec6a5980a94adb6aa->leave($__internal_b1e273bac17b8976cb1c238cd7c439dd53963b292b7f7bbec6a5980a94adb6aa_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
