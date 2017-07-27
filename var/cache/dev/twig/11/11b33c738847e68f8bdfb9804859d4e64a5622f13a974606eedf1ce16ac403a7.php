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
        $__internal_a71168d6c5e9961d29ed5f65374ec0e2f95e9cec44f138f37b4f9023cdd3e66a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a71168d6c5e9961d29ed5f65374ec0e2f95e9cec44f138f37b4f9023cdd3e66a->enter($__internal_a71168d6c5e9961d29ed5f65374ec0e2f95e9cec44f138f37b4f9023cdd3e66a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:delete.html.twig"));

        $__internal_09b911953fc2f6dfe3fd11cf79b7d720189683ede5b9d711e29f1ebcaefddbe7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09b911953fc2f6dfe3fd11cf79b7d720189683ede5b9d711e29f1ebcaefddbe7->enter($__internal_09b911953fc2f6dfe3fd11cf79b7d720189683ede5b9d711e29f1ebcaefddbe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a71168d6c5e9961d29ed5f65374ec0e2f95e9cec44f138f37b4f9023cdd3e66a->leave($__internal_a71168d6c5e9961d29ed5f65374ec0e2f95e9cec44f138f37b4f9023cdd3e66a_prof);

        
        $__internal_09b911953fc2f6dfe3fd11cf79b7d720189683ede5b9d711e29f1ebcaefddbe7->leave($__internal_09b911953fc2f6dfe3fd11cf79b7d720189683ede5b9d711e29f1ebcaefddbe7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6ee7f0921bfc301d08520c155f339da9273dc495a4ba4b1d5d9d2e6851914d83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ee7f0921bfc301d08520c155f339da9273dc495a4ba4b1d5d9d2e6851914d83->enter($__internal_6ee7f0921bfc301d08520c155f339da9273dc495a4ba4b1d5d9d2e6851914d83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_50d5e5e93940348ca4f40a90b40d7941779838fb08b78a5a4d62d2d09d36d192 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50d5e5e93940348ca4f40a90b40d7941779838fb08b78a5a4d62d2d09d36d192->enter($__internal_50d5e5e93940348ca4f40a90b40d7941779838fb08b78a5a4d62d2d09d36d192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Supprimer une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_50d5e5e93940348ca4f40a90b40d7941779838fb08b78a5a4d62d2d09d36d192->leave($__internal_50d5e5e93940348ca4f40a90b40d7941779838fb08b78a5a4d62d2d09d36d192_prof);

        
        $__internal_6ee7f0921bfc301d08520c155f339da9273dc495a4ba4b1d5d9d2e6851914d83->leave($__internal_6ee7f0921bfc301d08520c155f339da9273dc495a4ba4b1d5d9d2e6851914d83_prof);

    }

    // line 7
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_fac97187af83c22801d418970c8abc9b6037c1fa76681d434e854d5d9a31a4ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fac97187af83c22801d418970c8abc9b6037c1fa76681d434e854d5d9a31a4ff->enter($__internal_fac97187af83c22801d418970c8abc9b6037c1fa76681d434e854d5d9a31a4ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_4c6ccd99266620299f805f82e5d99e73655dedda30abd56c0168334247bf3da3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c6ccd99266620299f805f82e5d99e73655dedda30abd56c0168334247bf3da3->enter($__internal_4c6ccd99266620299f805f82e5d99e73655dedda30abd56c0168334247bf3da3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

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
        
        $__internal_4c6ccd99266620299f805f82e5d99e73655dedda30abd56c0168334247bf3da3->leave($__internal_4c6ccd99266620299f805f82e5d99e73655dedda30abd56c0168334247bf3da3_prof);

        
        $__internal_fac97187af83c22801d418970c8abc9b6037c1fa76681d434e854d5d9a31a4ff->leave($__internal_fac97187af83c22801d418970c8abc9b6037c1fa76681d434e854d5d9a31a4ff_prof);

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
