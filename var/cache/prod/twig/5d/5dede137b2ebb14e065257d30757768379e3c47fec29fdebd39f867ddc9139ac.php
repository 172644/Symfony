<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_ee1dc3205a1921ac62fc8cc0b44aae0a3809239f1df11aacf70c208115787165 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_b9b706ffdf5f2931046bf91c4c9479fab5d40d7fd408f12d50b6ab904c09a8b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9b706ffdf5f2931046bf91c4c9479fab5d40d7fd408f12d50b6ab904c09a8b4->enter($__internal_b9b706ffdf5f2931046bf91c4c9479fab5d40d7fd408f12d50b6ab904c09a8b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9b706ffdf5f2931046bf91c4c9479fab5d40d7fd408f12d50b6ab904c09a8b4->leave($__internal_b9b706ffdf5f2931046bf91c4c9479fab5d40d7fd408f12d50b6ab904c09a8b4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_06289cbb1707a3447f851a3c389bb4d1148564458c3082422320af38a251d72e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06289cbb1707a3447f851a3c389bb4d1148564458c3082422320af38a251d72e->enter($__internal_06289cbb1707a3447f851a3c389bb4d1148564458c3082422320af38a251d72e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_06289cbb1707a3447f851a3c389bb4d1148564458c3082422320af38a251d72e->leave($__internal_06289cbb1707a3447f851a3c389bb4d1148564458c3082422320af38a251d72e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
", "@FOSUser/Group/edit.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\edit.html.twig");
    }
}
