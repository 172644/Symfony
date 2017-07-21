<?php

/* @OCPlatform/Advert/index.html.twig */
class __TwigTemplate_6a3d471f6ed84a1fbe1b584b32bc901923d9fac5186847144ee51e7a43841900 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "@OCPlatform/Advert/index.html.twig", 1);
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
        $__internal_c21c48e8d0bb76a4573191c842220fdc26434f3a2d5e48e14773bb0a3149b883 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c21c48e8d0bb76a4573191c842220fdc26434f3a2d5e48e14773bb0a3149b883->enter($__internal_c21c48e8d0bb76a4573191c842220fdc26434f3a2d5e48e14773bb0a3149b883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCPlatform/Advert/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c21c48e8d0bb76a4573191c842220fdc26434f3a2d5e48e14773bb0a3149b883->leave($__internal_c21c48e8d0bb76a4573191c842220fdc26434f3a2d5e48e14773bb0a3149b883_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a5d3fc8582e7c61af58e84c12e69cd2d92aa595ca65e881c8234893ad4d7e07a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5d3fc8582e7c61af58e84c12e69cd2d92aa595ca65e881c8234893ad4d7e07a->enter($__internal_a5d3fc8582e7c61af58e84c12e69cd2d92aa595ca65e881c8234893ad4d7e07a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_a5d3fc8582e7c61af58e84c12e69cd2d92aa595ca65e881c8234893ad4d7e07a->leave($__internal_a5d3fc8582e7c61af58e84c12e69cd2d92aa595ca65e881c8234893ad4d7e07a_prof);

    }

    // line 7
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_0bc0fbffa962c27bc95b39d0f1680ac3e945c8fd26024375545a9feb3521a0e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bc0fbffa962c27bc95b39d0f1680ac3e945c8fd26024375545a9feb3521a0e3->enter($__internal_0bc0fbffa962c27bc95b39d0f1680ac3e945c8fd26024375545a9feb3521a0e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 8
        echo "    <p>
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 9, $this->getSourceContext()); })()), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 10
            echo "        <div class=\"alert alert-info\">Info : ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "    </p>

    <h2>Liste des annonces</h2>

    <ul>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listAdverts"]) || array_key_exists("listAdverts", $context) ? $context["listAdverts"] : (function () { throw new Twig_Error_Runtime('Variable "listAdverts" does not exist.', 17, $this->getSourceContext()); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 18
            echo "            <li>
                <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_view", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "id", array()))), "html", null, true);
            echo "\">
                    ";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "title", array()), "html", null, true);
            echo "
                </a>
                par ";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "author", array()), "username", array()), "html", null, true);
            echo ",
                le ";
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "date", array()), "d/m/Y"), "html", null, true);
            echo "
            </li>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 26
            echo "            <li>Pas (encore !) d'annonces</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "    </ul>

    <ul class=\"pagination\">
        ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nbPages"]) || array_key_exists("nbPages", $context) ? $context["nbPages"] : (function () { throw new Twig_Error_Runtime('Variable "nbPages" does not exist.', 31, $this->getSourceContext()); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 32
            echo "            <li";
            if (($context["p"] == (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 32, $this->getSourceContext()); })()))) {
                echo " class=\"active\"";
            }
            echo ">
                <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_home", array("page" => $context["p"])), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["p"], "html", null, true);
            echo "</a>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "    </ul>

";
        
        $__internal_0bc0fbffa962c27bc95b39d0f1680ac3e945c8fd26024375545a9feb3521a0e3->leave($__internal_0bc0fbffa962c27bc95b39d0f1680ac3e945c8fd26024375545a9feb3521a0e3_prof);

    }

    public function getTemplateName()
    {
        return "@OCPlatform/Advert/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 36,  132 => 33,  125 => 32,  121 => 31,  116 => 28,  109 => 26,  101 => 23,  97 => 22,  92 => 20,  88 => 19,  85 => 18,  80 => 17,  73 => 12,  64 => 10,  60 => 9,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"OCPlatformBundle::layout.html.twig\" %}

{% block title %}
    Accueil - {{ parent() }}
{% endblock %}

{% block ocplatform_body %}
    <p>
    {% for message in app.session.flashbag.get('info') %}
        <div class=\"alert alert-info\">Info : {{ message }}</div>
    {% endfor %}
    </p>

    <h2>Liste des annonces</h2>

    <ul>
        {% for advert in listAdverts %}
            <li>
                <a href=\"{{ path('oc_platform_view', {'id': advert.id}) }}\">
                    {{ advert.title }}
                </a>
                par {{ advert.author.username }},
                le {{ advert.date|date('d/m/Y') }}
            </li>
        {% else %}
            <li>Pas (encore !) d'annonces</li>
        {% endfor %}
    </ul>

    <ul class=\"pagination\">
        {% for p in range(1, nbPages) %}
            <li{% if p == page %} class=\"active\"{% endif %}>
                <a href=\"{{ path('oc_platform_home', {'page': p}) }}\">{{ p }}</a>
            </li>
        {% endfor %}
    </ul>

{% endblock %}", "@OCPlatform/Advert/index.html.twig", "C:\\wamp64\\www\\Symfony\\src\\OC\\PlatformBundle\\Resources\\views\\Advert\\index.html.twig");
    }
}
