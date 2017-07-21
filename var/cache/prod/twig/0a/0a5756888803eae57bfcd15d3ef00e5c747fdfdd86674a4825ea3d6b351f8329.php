<?php

/* OCCoreBundle:Default:index.html.twig */
class __TwigTemplate_b2dede352eab2b51267892e07c98f3a100475f6a890108f3618fbfa07703334e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OCCoreBundle::layout.html.twig", "OCCoreBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4a15deb3d29d267b4bc345c9da7a486d0f91bd81c251eb94f552dae1cb20e866 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a15deb3d29d267b4bc345c9da7a486d0f91bd81c251eb94f552dae1cb20e866->enter($__internal_4a15deb3d29d267b4bc345c9da7a486d0f91bd81c251eb94f552dae1cb20e866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCCoreBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a15deb3d29d267b4bc345c9da7a486d0f91bd81c251eb94f552dae1cb20e866->leave($__internal_4a15deb3d29d267b4bc345c9da7a486d0f91bd81c251eb94f552dae1cb20e866_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_453e22ebf17c94d0e8f48cee48df7c1341be9c5205a722508d5b81f4f2018d33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_453e22ebf17c94d0e8f48cee48df7c1341be9c5205a722508d5b81f4f2018d33->enter($__internal_453e22ebf17c94d0e8f48cee48df7c1341be9c5205a722508d5b81f4f2018d33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Index - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_453e22ebf17c94d0e8f48cee48df7c1341be9c5205a722508d5b81f4f2018d33->leave($__internal_453e22ebf17c94d0e8f48cee48df7c1341be9c5205a722508d5b81f4f2018d33_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_50d11aed2e6951bab9df6342747ae21bacfd57fa54b575f4cb85594ea776adbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50d11aed2e6951bab9df6342747ae21bacfd57fa54b575f4cb85594ea776adbb->enter($__internal_50d11aed2e6951bab9df6342747ae21bacfd57fa54b575f4cb85594ea776adbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
    ";
        // line 10
        echo "    <h1>Annonces</h1>

    <hr>

    <p>
    ";
        // line 16
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 16, $this->getSourceContext()); })()), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 17
            echo "        <p>Message flash : ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    </p>

    <hr>
    ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("OCPlatformBundle:Advert:lastAnnonce", array("limit" => 3)));
        echo "
";
        
        $__internal_50d11aed2e6951bab9df6342747ae21bacfd57fa54b575f4cb85594ea776adbb->leave($__internal_50d11aed2e6951bab9df6342747ae21bacfd57fa54b575f4cb85594ea776adbb_prof);

    }

    public function getTemplateName()
    {
        return "OCCoreBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 22,  81 => 19,  72 => 17,  67 => 16,  60 => 10,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"OCCoreBundle::layout.html.twig\" %}

{% block title %}
    Index - {{ parent() }}
{% endblock %}

{% block body %}

    {# On définit un sous-titre commun à toutes les pages du bundle, par exemple #}
    <h1>Annonces</h1>

    <hr>

    <p>
    {# On affiche tous les messages flash dont le nom est « info » #}
    {% for message in app.session.flashbag.get('info') %}
        <p>Message flash : {{ message }}</p>
    {% endfor %}
    </p>

    <hr>
    {{ render(controller(\"OCPlatformBundle:Advert:lastAnnonce\", {'limit': 3})) }}
{% endblock %}", "OCCoreBundle:Default:index.html.twig", "C:\\wamp64\\www\\Symfony\\src\\OC\\CoreBundle/Resources/views/Default/index.html.twig");
    }
}
