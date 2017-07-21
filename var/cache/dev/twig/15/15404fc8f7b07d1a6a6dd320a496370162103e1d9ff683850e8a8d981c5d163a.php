<?php

/* OCCoreBundle:Default:index.html.twig */
class __TwigTemplate_26df6d08017a0351b1258f0e535147ef2c5eddd2f2c358ece39a9af0f9247823 extends Twig_Template
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
        $__internal_125f35682f4b60356763782bcf1c4559a0cadd42fd2df45b8360612b3051702d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_125f35682f4b60356763782bcf1c4559a0cadd42fd2df45b8360612b3051702d->enter($__internal_125f35682f4b60356763782bcf1c4559a0cadd42fd2df45b8360612b3051702d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCCoreBundle:Default:index.html.twig"));

        $__internal_f0c9e38b575607528f92e8b6bc9988ffd3d8b7472432a1796623a1512c3e8b26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0c9e38b575607528f92e8b6bc9988ffd3d8b7472432a1796623a1512c3e8b26->enter($__internal_f0c9e38b575607528f92e8b6bc9988ffd3d8b7472432a1796623a1512c3e8b26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCCoreBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_125f35682f4b60356763782bcf1c4559a0cadd42fd2df45b8360612b3051702d->leave($__internal_125f35682f4b60356763782bcf1c4559a0cadd42fd2df45b8360612b3051702d_prof);

        
        $__internal_f0c9e38b575607528f92e8b6bc9988ffd3d8b7472432a1796623a1512c3e8b26->leave($__internal_f0c9e38b575607528f92e8b6bc9988ffd3d8b7472432a1796623a1512c3e8b26_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_25236d189992d00e75d03e793e81b6bf2be588d5bd200c69f57e5ca1500313bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25236d189992d00e75d03e793e81b6bf2be588d5bd200c69f57e5ca1500313bb->enter($__internal_25236d189992d00e75d03e793e81b6bf2be588d5bd200c69f57e5ca1500313bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7529e8a34155eba4dcc785ddcaf8810311e3a634b2930b4065e06484c8d5d6cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7529e8a34155eba4dcc785ddcaf8810311e3a634b2930b4065e06484c8d5d6cf->enter($__internal_7529e8a34155eba4dcc785ddcaf8810311e3a634b2930b4065e06484c8d5d6cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Index - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_7529e8a34155eba4dcc785ddcaf8810311e3a634b2930b4065e06484c8d5d6cf->leave($__internal_7529e8a34155eba4dcc785ddcaf8810311e3a634b2930b4065e06484c8d5d6cf_prof);

        
        $__internal_25236d189992d00e75d03e793e81b6bf2be588d5bd200c69f57e5ca1500313bb->leave($__internal_25236d189992d00e75d03e793e81b6bf2be588d5bd200c69f57e5ca1500313bb_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_3a755a36d49338dc427522740914c340ca3dbc53b89e3dca63687cb9aa0656f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a755a36d49338dc427522740914c340ca3dbc53b89e3dca63687cb9aa0656f3->enter($__internal_3a755a36d49338dc427522740914c340ca3dbc53b89e3dca63687cb9aa0656f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_10e8e1d843b4834de08653890d327ecb855877b999d0f7d233e93be81a6645f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10e8e1d843b4834de08653890d327ecb855877b999d0f7d233e93be81a6645f0->enter($__internal_10e8e1d843b4834de08653890d327ecb855877b999d0f7d233e93be81a6645f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_10e8e1d843b4834de08653890d327ecb855877b999d0f7d233e93be81a6645f0->leave($__internal_10e8e1d843b4834de08653890d327ecb855877b999d0f7d233e93be81a6645f0_prof);

        
        $__internal_3a755a36d49338dc427522740914c340ca3dbc53b89e3dca63687cb9aa0656f3->leave($__internal_3a755a36d49338dc427522740914c340ca3dbc53b89e3dca63687cb9aa0656f3_prof);

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
        return array (  101 => 22,  96 => 19,  87 => 17,  82 => 16,  75 => 10,  72 => 8,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
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
