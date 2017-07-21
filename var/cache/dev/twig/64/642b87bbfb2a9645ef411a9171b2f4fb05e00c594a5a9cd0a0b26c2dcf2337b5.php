<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_488c29d298d023174f3f249d15f824974050999b990064823a57e3b6cd71ab14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_2a26144b110bc702ba6af36a0db671e8afca93b51161e1174cc4c9eb71826421 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a26144b110bc702ba6af36a0db671e8afca93b51161e1174cc4c9eb71826421->enter($__internal_2a26144b110bc702ba6af36a0db671e8afca93b51161e1174cc4c9eb71826421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_ce089605811abfcf9be61413d867aacb0b3d9debef117bfd333e980669f5dc2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce089605811abfcf9be61413d867aacb0b3d9debef117bfd333e980669f5dc2d->enter($__internal_ce089605811abfcf9be61413d867aacb0b3d9debef117bfd333e980669f5dc2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a26144b110bc702ba6af36a0db671e8afca93b51161e1174cc4c9eb71826421->leave($__internal_2a26144b110bc702ba6af36a0db671e8afca93b51161e1174cc4c9eb71826421_prof);

        
        $__internal_ce089605811abfcf9be61413d867aacb0b3d9debef117bfd333e980669f5dc2d->leave($__internal_ce089605811abfcf9be61413d867aacb0b3d9debef117bfd333e980669f5dc2d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ec1b9283bb26bd586fd4e050e159649b758c70f97f1ace080ee24c51f7ecaeeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec1b9283bb26bd586fd4e050e159649b758c70f97f1ace080ee24c51f7ecaeeb->enter($__internal_ec1b9283bb26bd586fd4e050e159649b758c70f97f1ace080ee24c51f7ecaeeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_039024d7e3c45d62c7f68743004b80300e991ae6b73fce39b93d0ea56693dc15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_039024d7e3c45d62c7f68743004b80300e991ae6b73fce39b93d0ea56693dc15->enter($__internal_039024d7e3c45d62c7f68743004b80300e991ae6b73fce39b93d0ea56693dc15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_039024d7e3c45d62c7f68743004b80300e991ae6b73fce39b93d0ea56693dc15->leave($__internal_039024d7e3c45d62c7f68743004b80300e991ae6b73fce39b93d0ea56693dc15_prof);

        
        $__internal_ec1b9283bb26bd586fd4e050e159649b758c70f97f1ace080ee24c51f7ecaeeb->leave($__internal_ec1b9283bb26bd586fd4e050e159649b758c70f97f1ace080ee24c51f7ecaeeb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
", "FOSUserBundle:Group:list.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/list.html.twig");
    }
}
