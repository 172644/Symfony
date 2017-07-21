<?php

/* @OCPlatform/Advert/delete.html.twig */
class __TwigTemplate_6ca0ef2a3477e5274eee2f68983cdcd2bb977ab21a4a9d804d9053257bb4f42c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "@OCPlatform/Advert/delete.html.twig", 1);
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
        $__internal_059363e38347347653b3c78f4bb78876f80430d864d956deb91eba0263742e75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_059363e38347347653b3c78f4bb78876f80430d864d956deb91eba0263742e75->enter($__internal_059363e38347347653b3c78f4bb78876f80430d864d956deb91eba0263742e75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCPlatform/Advert/delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_059363e38347347653b3c78f4bb78876f80430d864d956deb91eba0263742e75->leave($__internal_059363e38347347653b3c78f4bb78876f80430d864d956deb91eba0263742e75_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6b1d47cf46ecda60d1e2a09c37f32a55285244fa0230d189788efb3e5de71012 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b1d47cf46ecda60d1e2a09c37f32a55285244fa0230d189788efb3e5de71012->enter($__internal_6b1d47cf46ecda60d1e2a09c37f32a55285244fa0230d189788efb3e5de71012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Supprimer une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_6b1d47cf46ecda60d1e2a09c37f32a55285244fa0230d189788efb3e5de71012->leave($__internal_6b1d47cf46ecda60d1e2a09c37f32a55285244fa0230d189788efb3e5de71012_prof);

    }

    // line 7
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_0afbfee22a2da1508dbc724e993ca3df4b1688225aff3eb52dacecf60fdfc1c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0afbfee22a2da1508dbc724e993ca3df4b1688225aff3eb52dacecf60fdfc1c8->enter($__internal_0afbfee22a2da1508dbc724e993ca3df4b1688225aff3eb52dacecf60fdfc1c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

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
        
        $__internal_0afbfee22a2da1508dbc724e993ca3df4b1688225aff3eb52dacecf60fdfc1c8->leave($__internal_0afbfee22a2da1508dbc724e993ca3df4b1688225aff3eb52dacecf60fdfc1c8_prof);

    }

    public function getTemplateName()
    {
        return "@OCPlatform/Advert/delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 24,  81 => 22,  74 => 17,  69 => 16,  63 => 12,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
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

{% endblock %}", "@OCPlatform/Advert/delete.html.twig", "C:\\wamp64\\www\\Symfony\\src\\OC\\PlatformBundle\\Resources\\views\\Advert\\delete.html.twig");
    }
}
