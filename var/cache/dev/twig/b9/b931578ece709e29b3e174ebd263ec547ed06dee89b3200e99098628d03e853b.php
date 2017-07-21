<?php

/* @OCPlatform/Advert/delete.html.twig */
class __TwigTemplate_5c66b9f77225943059d2616ff3873356c7c1351300ad33031cc1da7c2fd7df51 extends Twig_Template
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
        $__internal_3d99c3f1db8c9c3cb74b99c71fa64bb15d13798c1eb853204f722a5222a4fc6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d99c3f1db8c9c3cb74b99c71fa64bb15d13798c1eb853204f722a5222a4fc6a->enter($__internal_3d99c3f1db8c9c3cb74b99c71fa64bb15d13798c1eb853204f722a5222a4fc6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCPlatform/Advert/delete.html.twig"));

        $__internal_730fa4ad1a42e837e388daec218feb26ad2e4fa8a39d2f7df3d85c1cc6dc3ac2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_730fa4ad1a42e837e388daec218feb26ad2e4fa8a39d2f7df3d85c1cc6dc3ac2->enter($__internal_730fa4ad1a42e837e388daec218feb26ad2e4fa8a39d2f7df3d85c1cc6dc3ac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCPlatform/Advert/delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d99c3f1db8c9c3cb74b99c71fa64bb15d13798c1eb853204f722a5222a4fc6a->leave($__internal_3d99c3f1db8c9c3cb74b99c71fa64bb15d13798c1eb853204f722a5222a4fc6a_prof);

        
        $__internal_730fa4ad1a42e837e388daec218feb26ad2e4fa8a39d2f7df3d85c1cc6dc3ac2->leave($__internal_730fa4ad1a42e837e388daec218feb26ad2e4fa8a39d2f7df3d85c1cc6dc3ac2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9088c6718c3cc673527a93e8505c5b76eedf6c2885aa31347c1955bb6eba5564 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9088c6718c3cc673527a93e8505c5b76eedf6c2885aa31347c1955bb6eba5564->enter($__internal_9088c6718c3cc673527a93e8505c5b76eedf6c2885aa31347c1955bb6eba5564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_be58e699405932da8321c9a150fcb0cd485082d16f2e7c676e9dc71180a8c6a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be58e699405932da8321c9a150fcb0cd485082d16f2e7c676e9dc71180a8c6a4->enter($__internal_be58e699405932da8321c9a150fcb0cd485082d16f2e7c676e9dc71180a8c6a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Supprimer une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_be58e699405932da8321c9a150fcb0cd485082d16f2e7c676e9dc71180a8c6a4->leave($__internal_be58e699405932da8321c9a150fcb0cd485082d16f2e7c676e9dc71180a8c6a4_prof);

        
        $__internal_9088c6718c3cc673527a93e8505c5b76eedf6c2885aa31347c1955bb6eba5564->leave($__internal_9088c6718c3cc673527a93e8505c5b76eedf6c2885aa31347c1955bb6eba5564_prof);

    }

    // line 7
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_362ea0f19b9300cecada408cb907dd53bed23383f5bb28f6aca2cfdf81864984 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_362ea0f19b9300cecada408cb907dd53bed23383f5bb28f6aca2cfdf81864984->enter($__internal_362ea0f19b9300cecada408cb907dd53bed23383f5bb28f6aca2cfdf81864984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_791d52b30759ec14cb3d4039ae7cbea7b1eebd9c25768341ff31015c235faade = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_791d52b30759ec14cb3d4039ae7cbea7b1eebd9c25768341ff31015c235faade->enter($__internal_791d52b30759ec14cb3d4039ae7cbea7b1eebd9c25768341ff31015c235faade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

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
        
        $__internal_791d52b30759ec14cb3d4039ae7cbea7b1eebd9c25768341ff31015c235faade->leave($__internal_791d52b30759ec14cb3d4039ae7cbea7b1eebd9c25768341ff31015c235faade_prof);

        
        $__internal_362ea0f19b9300cecada408cb907dd53bed23383f5bb28f6aca2cfdf81864984->leave($__internal_362ea0f19b9300cecada408cb907dd53bed23383f5bb28f6aca2cfdf81864984_prof);

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

{% endblock %}", "@OCPlatform/Advert/delete.html.twig", "C:\\wamp64\\www\\Symfony\\src\\OC\\PlatformBundle\\Resources\\views\\Advert\\delete.html.twig");
    }
}
