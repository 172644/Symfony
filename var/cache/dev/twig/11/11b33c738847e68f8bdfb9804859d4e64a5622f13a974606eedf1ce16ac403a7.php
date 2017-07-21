<?php

/* OCPlatformBundle:Advert:delete.html.twig */
class __TwigTemplate_ece2037d20f3d411bd22e99e11907ca07067e1255a0c915290ca29c34d1f844f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:delete.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e09e0262449e8ae9e758431b3156b7bdfe72cfe89af0f2107bad0e46728b0689 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e09e0262449e8ae9e758431b3156b7bdfe72cfe89af0f2107bad0e46728b0689->enter($__internal_e09e0262449e8ae9e758431b3156b7bdfe72cfe89af0f2107bad0e46728b0689_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:delete.html.twig"));

        $__internal_cf977e184753527048dca7d54c9b83a3fb906faaff691fe6e7ae039ccfe8cc6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf977e184753527048dca7d54c9b83a3fb906faaff691fe6e7ae039ccfe8cc6d->enter($__internal_cf977e184753527048dca7d54c9b83a3fb906faaff691fe6e7ae039ccfe8cc6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e09e0262449e8ae9e758431b3156b7bdfe72cfe89af0f2107bad0e46728b0689->leave($__internal_e09e0262449e8ae9e758431b3156b7bdfe72cfe89af0f2107bad0e46728b0689_prof);

        
        $__internal_cf977e184753527048dca7d54c9b83a3fb906faaff691fe6e7ae039ccfe8cc6d->leave($__internal_cf977e184753527048dca7d54c9b83a3fb906faaff691fe6e7ae039ccfe8cc6d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_aed53deaa044dab457a81c4fda365f6328dffd3c23e5f46fbe3cb6f43d7bb37e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aed53deaa044dab457a81c4fda365f6328dffd3c23e5f46fbe3cb6f43d7bb37e->enter($__internal_aed53deaa044dab457a81c4fda365f6328dffd3c23e5f46fbe3cb6f43d7bb37e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2d32d410590ff576bd11f192d0e17c52ca79613e6283f6a8b01cad048d4a7487 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d32d410590ff576bd11f192d0e17c52ca79613e6283f6a8b01cad048d4a7487->enter($__internal_2d32d410590ff576bd11f192d0e17c52ca79613e6283f6a8b01cad048d4a7487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Supprimer une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_2d32d410590ff576bd11f192d0e17c52ca79613e6283f6a8b01cad048d4a7487->leave($__internal_2d32d410590ff576bd11f192d0e17c52ca79613e6283f6a8b01cad048d4a7487_prof);

        
        $__internal_aed53deaa044dab457a81c4fda365f6328dffd3c23e5f46fbe3cb6f43d7bb37e->leave($__internal_aed53deaa044dab457a81c4fda365f6328dffd3c23e5f46fbe3cb6f43d7bb37e_prof);

    }

    // line 7
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_e4274b847d3d586b76db813706df3e26b100285f6ba2b4e17eba021c434c41e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4274b847d3d586b76db813706df3e26b100285f6ba2b4e17eba021c434c41e2->enter($__internal_e4274b847d3d586b76db813706df3e26b100285f6ba2b4e17eba021c434c41e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_220e65fd48fc4f64bd01857ed870cd69689c14ea2d57aeaf26083a5135d7a815 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_220e65fd48fc4f64bd01857ed870cd69689c14ea2d57aeaf26083a5135d7a815->enter($__internal_220e65fd48fc4f64bd01857ed870cd69689c14ea2d57aeaf26083a5135d7a815_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 8
        echo "
    <h2>Supprimer une annonce</h2>

    <p>
        Etes-vous certain de vouloir supprimer l'annonce \"";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 12, $this->getSourceContext()); })()), "title", array()), "html", null, true);
        echo "\" ?
    </p>

    ";
        // line 16
        echo "    <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_delete", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 16, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
        <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_view", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 17, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour à l'annonce
        </a>
        ";
        // line 22
        echo "        <input type=\"submit\" value=\"Supprimer\" class=\"btn btn-danger\" />
        ";
        // line 24
        echo "        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 24, $this->getSourceContext()); })()), 'rest');
        echo "
    </form>

";
        
        $__internal_220e65fd48fc4f64bd01857ed870cd69689c14ea2d57aeaf26083a5135d7a815->leave($__internal_220e65fd48fc4f64bd01857ed870cd69689c14ea2d57aeaf26083a5135d7a815_prof);

        
        $__internal_e4274b847d3d586b76db813706df3e26b100285f6ba2b4e17eba021c434c41e2->leave($__internal_e4274b847d3d586b76db813706df3e26b100285f6ba2b4e17eba021c434c41e2_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 24,  96 => 22,  89 => 17,  84 => 16,  78 => 12,  72 => 8,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"OCPlatformBundle::layout.html.twig\" %}

{% block title %}
    Supprimer une annonce - {{ parent() }}
{% endblock %}

{% block ocplatform_body %}

    <h2>Supprimer une annonce</h2>

    <p>
        Etes-vous certain de vouloir supprimer l'annonce \"{{ advert.title }}\" ?
    </p>

    {# On met l'id de l'annonce dans la route de l'action du formulaire #}
    <form action=\"{{ path('oc_platform_delete', {'id': advert.id}) }}\" method=\"post\">
        <a href=\"{{ path('oc_platform_view', {'id': advert.id}) }}\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour à l'annonce
        </a>
        {# Ici j'ai écrit le bouton de soumission à la main #}
        <input type=\"submit\" value=\"Supprimer\" class=\"btn btn-danger\" />
        {# Ceci va générer le champ CSRF #}
        {{ form_rest(form) }}
    </form>

{% endblock %}", "OCPlatformBundle:Advert:delete.html.twig", "C:\\wamp64\\www\\Symfony\\src\\OC\\PlatformBundle/Resources/views/Advert/delete.html.twig");
    }
}
