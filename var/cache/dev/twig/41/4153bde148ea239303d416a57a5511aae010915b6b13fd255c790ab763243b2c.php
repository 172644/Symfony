<?php

/* @OCPlatform/Advert/add.html.twig */
class __TwigTemplate_b8f86476007fd9ba1c7c4752475c314ddb372e06c53ed0c8ae2d3ab2309d545e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "@OCPlatform/Advert/add.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_10eb68f2ce36adc34fe0160ea424ee726a1fbaf58fa671232fdbb677729976fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10eb68f2ce36adc34fe0160ea424ee726a1fbaf58fa671232fdbb677729976fe->enter($__internal_10eb68f2ce36adc34fe0160ea424ee726a1fbaf58fa671232fdbb677729976fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCPlatform/Advert/add.html.twig"));

        $__internal_cd27d26bd388ae526cce366e9b0d3a23a1d328354732b77044671b404ce586d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd27d26bd388ae526cce366e9b0d3a23a1d328354732b77044671b404ce586d2->enter($__internal_cd27d26bd388ae526cce366e9b0d3a23a1d328354732b77044671b404ce586d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCPlatform/Advert/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10eb68f2ce36adc34fe0160ea424ee726a1fbaf58fa671232fdbb677729976fe->leave($__internal_10eb68f2ce36adc34fe0160ea424ee726a1fbaf58fa671232fdbb677729976fe_prof);

        
        $__internal_cd27d26bd388ae526cce366e9b0d3a23a1d328354732b77044671b404ce586d2->leave($__internal_cd27d26bd388ae526cce366e9b0d3a23a1d328354732b77044671b404ce586d2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_99de609152bf48c90b6336c175a4bc2b06dabce4ff561c33bc811e146547b244 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99de609152bf48c90b6336c175a4bc2b06dabce4ff561c33bc811e146547b244->enter($__internal_99de609152bf48c90b6336c175a4bc2b06dabce4ff561c33bc811e146547b244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3cdb24a8a19986e786a05dda6923d25a71c7856560644ea223afef08d81d5d14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cdb24a8a19986e786a05dda6923d25a71c7856560644ea223afef08d81d5d14->enter($__internal_3cdb24a8a19986e786a05dda6923d25a71c7856560644ea223afef08d81d5d14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <h2>Ajouter une annonce</h2>

    ";
        // line 7
        echo twig_include($this->env, $context, "OCPlatformBundle:Advert:form.html.twig");
        echo "

    <p>
        Attention : cette annonce sera ajoutée directement
        sur la page d'accueil après validation du formulaire.
    </p>

";
        
        $__internal_3cdb24a8a19986e786a05dda6923d25a71c7856560644ea223afef08d81d5d14->leave($__internal_3cdb24a8a19986e786a05dda6923d25a71c7856560644ea223afef08d81d5d14_prof);

        
        $__internal_99de609152bf48c90b6336c175a4bc2b06dabce4ff561c33bc811e146547b244->leave($__internal_99de609152bf48c90b6336c175a4bc2b06dabce4ff561c33bc811e146547b244_prof);

    }

    public function getTemplateName()
    {
        return "@OCPlatform/Advert/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"OCPlatformBundle::layout.html.twig\" %}

{% block body %}

    <h2>Ajouter une annonce</h2>

    {{ include(\"OCPlatformBundle:Advert:form.html.twig\") }}

    <p>
        Attention : cette annonce sera ajoutée directement
        sur la page d'accueil après validation du formulaire.
    </p>

{% endblock %}", "@OCPlatform/Advert/add.html.twig", "C:\\wamp64\\www\\Symfony\\src\\OC\\PlatformBundle\\Resources\\views\\Advert\\add.html.twig");
    }
}
