<?php

/* OCPlatformBundle:Advert:index.html.twig */
class __TwigTemplate_1c4a629b31596b5203a7b17175cab862cc79c4744e96454ea33ad25cbc882634 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:index.html.twig", 1);
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
        $__internal_dde7df6383240ee6ecdb1279c34ec3034b963ea1c15808796cdc086ef459f9fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dde7df6383240ee6ecdb1279c34ec3034b963ea1c15808796cdc086ef459f9fe->enter($__internal_dde7df6383240ee6ecdb1279c34ec3034b963ea1c15808796cdc086ef459f9fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:index.html.twig"));

        $__internal_c355e5cc6d251765e34fd4e7333bf43e41bbed1090f09710ce0768bf885840a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c355e5cc6d251765e34fd4e7333bf43e41bbed1090f09710ce0768bf885840a6->enter($__internal_c355e5cc6d251765e34fd4e7333bf43e41bbed1090f09710ce0768bf885840a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dde7df6383240ee6ecdb1279c34ec3034b963ea1c15808796cdc086ef459f9fe->leave($__internal_dde7df6383240ee6ecdb1279c34ec3034b963ea1c15808796cdc086ef459f9fe_prof);

        
        $__internal_c355e5cc6d251765e34fd4e7333bf43e41bbed1090f09710ce0768bf885840a6->leave($__internal_c355e5cc6d251765e34fd4e7333bf43e41bbed1090f09710ce0768bf885840a6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1c80e95cd2340f96850eef5ffe8688c863a6f9e4a87977ae4c13831c478662b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c80e95cd2340f96850eef5ffe8688c863a6f9e4a87977ae4c13831c478662b5->enter($__internal_1c80e95cd2340f96850eef5ffe8688c863a6f9e4a87977ae4c13831c478662b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_03c0014811ce2c2fd30faa60b3b4c16ea0dab240fab4852b36168861d328bcb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03c0014811ce2c2fd30faa60b3b4c16ea0dab240fab4852b36168861d328bcb3->enter($__internal_03c0014811ce2c2fd30faa60b3b4c16ea0dab240fab4852b36168861d328bcb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_03c0014811ce2c2fd30faa60b3b4c16ea0dab240fab4852b36168861d328bcb3->leave($__internal_03c0014811ce2c2fd30faa60b3b4c16ea0dab240fab4852b36168861d328bcb3_prof);

        
        $__internal_1c80e95cd2340f96850eef5ffe8688c863a6f9e4a87977ae4c13831c478662b5->leave($__internal_1c80e95cd2340f96850eef5ffe8688c863a6f9e4a87977ae4c13831c478662b5_prof);

    }

    // line 7
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_156606ea3e0b828515c384af1a1cab39cb7e802841fd83235f18272faf5ab83f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_156606ea3e0b828515c384af1a1cab39cb7e802841fd83235f18272faf5ab83f->enter($__internal_156606ea3e0b828515c384af1a1cab39cb7e802841fd83235f18272faf5ab83f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_b866876538f6b28c7c1a796a95560216f0a97df639d582eaf6dd212e3ec0a9b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b866876538f6b28c7c1a796a95560216f0a97df639d582eaf6dd212e3ec0a9b3->enter($__internal_b866876538f6b28c7c1a796a95560216f0a97df639d582eaf6dd212e3ec0a9b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

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
        
        $__internal_b866876538f6b28c7c1a796a95560216f0a97df639d582eaf6dd212e3ec0a9b3->leave($__internal_b866876538f6b28c7c1a796a95560216f0a97df639d582eaf6dd212e3ec0a9b3_prof);

        
        $__internal_156606ea3e0b828515c384af1a1cab39cb7e802841fd83235f18272faf5ab83f->leave($__internal_156606ea3e0b828515c384af1a1cab39cb7e802841fd83235f18272faf5ab83f_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:index.html.twig";
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

{% endblock %}", "OCPlatformBundle:Advert:index.html.twig", "C:\\wamp64\\www\\Symfony\\src\\OC\\PlatformBundle/Resources/views/Advert/index.html.twig");
    }
}
