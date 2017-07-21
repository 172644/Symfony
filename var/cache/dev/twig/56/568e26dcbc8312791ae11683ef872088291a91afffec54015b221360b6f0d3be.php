<?php

/* @OCPlatform/Advert/index.html.twig */
class __TwigTemplate_e972f7aaa4a363f0c4752fc0e89044f148c014f27f1d1a75960486e4e85782e5 extends Twig_Template
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
        $__internal_a77d00d82661351f9536898dd949aeecfa082b43f57e9d487403f0036e7fea6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a77d00d82661351f9536898dd949aeecfa082b43f57e9d487403f0036e7fea6f->enter($__internal_a77d00d82661351f9536898dd949aeecfa082b43f57e9d487403f0036e7fea6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCPlatform/Advert/index.html.twig"));

        $__internal_d88866ef9388583fa7f38735d16a19d1dedcc92f3abeb822867c970f5eb06c79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d88866ef9388583fa7f38735d16a19d1dedcc92f3abeb822867c970f5eb06c79->enter($__internal_d88866ef9388583fa7f38735d16a19d1dedcc92f3abeb822867c970f5eb06c79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCPlatform/Advert/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a77d00d82661351f9536898dd949aeecfa082b43f57e9d487403f0036e7fea6f->leave($__internal_a77d00d82661351f9536898dd949aeecfa082b43f57e9d487403f0036e7fea6f_prof);

        
        $__internal_d88866ef9388583fa7f38735d16a19d1dedcc92f3abeb822867c970f5eb06c79->leave($__internal_d88866ef9388583fa7f38735d16a19d1dedcc92f3abeb822867c970f5eb06c79_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_32a4a29fb061919b5eba8e5dbeca5a9b33b2af8b2d7276d577d47100dbc0f52c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32a4a29fb061919b5eba8e5dbeca5a9b33b2af8b2d7276d577d47100dbc0f52c->enter($__internal_32a4a29fb061919b5eba8e5dbeca5a9b33b2af8b2d7276d577d47100dbc0f52c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f1961bb8e9534a6f47aa8eb442f6023c586aa4e33d7cc436983150e747a41e9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1961bb8e9534a6f47aa8eb442f6023c586aa4e33d7cc436983150e747a41e9f->enter($__internal_f1961bb8e9534a6f47aa8eb442f6023c586aa4e33d7cc436983150e747a41e9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_f1961bb8e9534a6f47aa8eb442f6023c586aa4e33d7cc436983150e747a41e9f->leave($__internal_f1961bb8e9534a6f47aa8eb442f6023c586aa4e33d7cc436983150e747a41e9f_prof);

        
        $__internal_32a4a29fb061919b5eba8e5dbeca5a9b33b2af8b2d7276d577d47100dbc0f52c->leave($__internal_32a4a29fb061919b5eba8e5dbeca5a9b33b2af8b2d7276d577d47100dbc0f52c_prof);

    }

    // line 7
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_e197d6b4c59e9546c2ee4cc844a64bec199f067d11e2d96972c60de26b718ca2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e197d6b4c59e9546c2ee4cc844a64bec199f067d11e2d96972c60de26b718ca2->enter($__internal_e197d6b4c59e9546c2ee4cc844a64bec199f067d11e2d96972c60de26b718ca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_385777f4946c8a9d3cacd8c17f40e455addd6b54e6f619ae6e89d5f9659fe3c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_385777f4946c8a9d3cacd8c17f40e455addd6b54e6f619ae6e89d5f9659fe3c1->enter($__internal_385777f4946c8a9d3cacd8c17f40e455addd6b54e6f619ae6e89d5f9659fe3c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

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
        
        $__internal_385777f4946c8a9d3cacd8c17f40e455addd6b54e6f619ae6e89d5f9659fe3c1->leave($__internal_385777f4946c8a9d3cacd8c17f40e455addd6b54e6f619ae6e89d5f9659fe3c1_prof);

        
        $__internal_e197d6b4c59e9546c2ee4cc844a64bec199f067d11e2d96972c60de26b718ca2->leave($__internal_e197d6b4c59e9546c2ee4cc844a64bec199f067d11e2d96972c60de26b718ca2_prof);

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
        return array (  158 => 36,  147 => 33,  140 => 32,  136 => 31,  131 => 28,  124 => 26,  116 => 23,  112 => 22,  107 => 20,  103 => 19,  100 => 18,  95 => 17,  88 => 12,  79 => 10,  75 => 9,  72 => 8,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
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
