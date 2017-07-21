<?php

/* OCPlatformBundle::layout.html.twig */
class __TwigTemplate_d7e220025acd009b113605066b8d066a44d433f9bc811797b8e8c12e74702ec3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OCCoreBundle::layout.html.twig", "OCPlatformBundle::layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1606a07bcceb9339484c27d0179c41e66d91e8fa0d9ac3ea360325ceb9904079 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1606a07bcceb9339484c27d0179c41e66d91e8fa0d9ac3ea360325ceb9904079->enter($__internal_1606a07bcceb9339484c27d0179c41e66d91e8fa0d9ac3ea360325ceb9904079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle::layout.html.twig"));

        $__internal_708994c6ae6b252d4841e16cca1631098d892a90c081cc4d60a0a3b3dd7a06dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_708994c6ae6b252d4841e16cca1631098d892a90c081cc4d60a0a3b3dd7a06dc->enter($__internal_708994c6ae6b252d4841e16cca1631098d892a90c081cc4d60a0a3b3dd7a06dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1606a07bcceb9339484c27d0179c41e66d91e8fa0d9ac3ea360325ceb9904079->leave($__internal_1606a07bcceb9339484c27d0179c41e66d91e8fa0d9ac3ea360325ceb9904079_prof);

        
        $__internal_708994c6ae6b252d4841e16cca1631098d892a90c081cc4d60a0a3b3dd7a06dc->leave($__internal_708994c6ae6b252d4841e16cca1631098d892a90c081cc4d60a0a3b3dd7a06dc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_743ab0b1066a3a0e8592522a0c44166b0298105109c9b75dadcac9f9668006cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_743ab0b1066a3a0e8592522a0c44166b0298105109c9b75dadcac9f9668006cf->enter($__internal_743ab0b1066a3a0e8592522a0c44166b0298105109c9b75dadcac9f9668006cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0c52d0b324decf515341fbfd02a26c653471fced9f47d6a46b555ab77d1bf08b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c52d0b324decf515341fbfd02a26c653471fced9f47d6a46b555ab77d1bf08b->enter($__internal_0c52d0b324decf515341fbfd02a26c653471fced9f47d6a46b555ab77d1bf08b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_0c52d0b324decf515341fbfd02a26c653471fced9f47d6a46b555ab77d1bf08b->leave($__internal_0c52d0b324decf515341fbfd02a26c653471fced9f47d6a46b555ab77d1bf08b_prof);

        
        $__internal_743ab0b1066a3a0e8592522a0c44166b0298105109c9b75dadcac9f9668006cf->leave($__internal_743ab0b1066a3a0e8592522a0c44166b0298105109c9b75dadcac9f9668006cf_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_3d8fdbcf0686d33c3ce7efcf71cbff02f95387043dc136e92034138a484aaf1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d8fdbcf0686d33c3ce7efcf71cbff02f95387043dc136e92034138a484aaf1c->enter($__internal_3d8fdbcf0686d33c3ce7efcf71cbff02f95387043dc136e92034138a484aaf1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_87fd5b3604e8c7bd3d8fff7fcb8f38c04ae242178de012586d3f2951be9d7d52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87fd5b3604e8c7bd3d8fff7fcb8f38c04ae242178de012586d3f2951be9d7d52->enter($__internal_87fd5b3604e8c7bd3d8fff7fcb8f38c04ae242178de012586d3f2951be9d7d52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
    ";
        // line 10
        echo "    <h1>Annonces</h1>

    <hr>

    ";
        // line 15
        echo "    ";
        $this->displayBlock('ocplatform_body', $context, $blocks);
        // line 17
        echo "
";
        
        $__internal_87fd5b3604e8c7bd3d8fff7fcb8f38c04ae242178de012586d3f2951be9d7d52->leave($__internal_87fd5b3604e8c7bd3d8fff7fcb8f38c04ae242178de012586d3f2951be9d7d52_prof);

        
        $__internal_3d8fdbcf0686d33c3ce7efcf71cbff02f95387043dc136e92034138a484aaf1c->leave($__internal_3d8fdbcf0686d33c3ce7efcf71cbff02f95387043dc136e92034138a484aaf1c_prof);

    }

    // line 15
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_28716f78ae84d48436c8c5c5373829f4a6a777b6809022f54287e760996ad2ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28716f78ae84d48436c8c5c5373829f4a6a777b6809022f54287e760996ad2ec->enter($__internal_28716f78ae84d48436c8c5c5373829f4a6a777b6809022f54287e760996ad2ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_e7a6005d19b711cc5e11f4d0f34acdf8a66223d7997b2b8428c2d68bd84585d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7a6005d19b711cc5e11f4d0f34acdf8a66223d7997b2b8428c2d68bd84585d8->enter($__internal_e7a6005d19b711cc5e11f4d0f34acdf8a66223d7997b2b8428c2d68bd84585d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 16
        echo "    ";
        
        $__internal_e7a6005d19b711cc5e11f4d0f34acdf8a66223d7997b2b8428c2d68bd84585d8->leave($__internal_e7a6005d19b711cc5e11f4d0f34acdf8a66223d7997b2b8428c2d68bd84585d8_prof);

        
        $__internal_28716f78ae84d48436c8c5c5373829f4a6a777b6809022f54287e760996ad2ec->leave($__internal_28716f78ae84d48436c8c5c5373829f4a6a777b6809022f54287e760996ad2ec_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 16,  96 => 15,  85 => 17,  82 => 15,  76 => 10,  73 => 8,  64 => 7,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"OCCoreBundle::layout.html.twig\" %}

{% block title %}
    Annonces - {{ parent() }}
{% endblock %}

{% block body %}

    {# On définit un sous-titre commun à toutes les pages du bundle, par exemple #}
    <h1>Annonces</h1>

    <hr>

    {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}
    {% block ocplatform_body %}
    {% endblock %}

{% endblock %}", "OCPlatformBundle::layout.html.twig", "C:\\wamp64\\www\\Symfony\\src\\OC\\PlatformBundle/Resources/views/layout.html.twig");
    }
}
