<?php

/* OCPlatformBundle:Advert:index.html.twig */
class __TwigTemplate_e972f7aaa4a363f0c4752fc0e89044f148c014f27f1d1a75960486e4e85782e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'titlePage' => array($this, 'block_titlePage'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_40aff8db91a072366bd5ac93aee6533bf793f0a9660cfdbbfd4bdc3ab6f0d060 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40aff8db91a072366bd5ac93aee6533bf793f0a9660cfdbbfd4bdc3ab6f0d060->enter($__internal_40aff8db91a072366bd5ac93aee6533bf793f0a9660cfdbbfd4bdc3ab6f0d060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:index.html.twig"));

        $__internal_15e3aef390e7d7e337820452952357d5696089216c239df766ce569facffdfbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15e3aef390e7d7e337820452952357d5696089216c239df766ce569facffdfbe->enter($__internal_15e3aef390e7d7e337820452952357d5696089216c239df766ce569facffdfbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40aff8db91a072366bd5ac93aee6533bf793f0a9660cfdbbfd4bdc3ab6f0d060->leave($__internal_40aff8db91a072366bd5ac93aee6533bf793f0a9660cfdbbfd4bdc3ab6f0d060_prof);

        
        $__internal_15e3aef390e7d7e337820452952357d5696089216c239df766ce569facffdfbe->leave($__internal_15e3aef390e7d7e337820452952357d5696089216c239df766ce569facffdfbe_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_49cb0093e8998b125a8f41b8030e20085df5e9d54125da95e4f1c44722cf8d19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49cb0093e8998b125a8f41b8030e20085df5e9d54125da95e4f1c44722cf8d19->enter($__internal_49cb0093e8998b125a8f41b8030e20085df5e9d54125da95e4f1c44722cf8d19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_247740837111e5f87cf0492ef3fa6591f11a82e52384e77dbdbd43fcff9129b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_247740837111e5f87cf0492ef3fa6591f11a82e52384e77dbdbd43fcff9129b3->enter($__internal_247740837111e5f87cf0492ef3fa6591f11a82e52384e77dbdbd43fcff9129b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_247740837111e5f87cf0492ef3fa6591f11a82e52384e77dbdbd43fcff9129b3->leave($__internal_247740837111e5f87cf0492ef3fa6591f11a82e52384e77dbdbd43fcff9129b3_prof);

        
        $__internal_49cb0093e8998b125a8f41b8030e20085df5e9d54125da95e4f1c44722cf8d19->leave($__internal_49cb0093e8998b125a8f41b8030e20085df5e9d54125da95e4f1c44722cf8d19_prof);

    }

    // line 7
    public function block_titlePage($context, array $blocks = array())
    {
        $__internal_9ba3e73a7c4d87eeebefbb394f500bf4bf0abfe8e57121fa7ca143bc128ec83c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ba3e73a7c4d87eeebefbb394f500bf4bf0abfe8e57121fa7ca143bc128ec83c->enter($__internal_9ba3e73a7c4d87eeebefbb394f500bf4bf0abfe8e57121fa7ca143bc128ec83c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titlePage"));

        $__internal_fde107ebe81002aae76f32e0f884784facf4f2d28903f148e75f6ef5027d6590 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fde107ebe81002aae76f32e0f884784facf4f2d28903f148e75f6ef5027d6590->enter($__internal_fde107ebe81002aae76f32e0f884784facf4f2d28903f148e75f6ef5027d6590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titlePage"));

        // line 8
        echo "    Liste des annonces
";
        
        $__internal_fde107ebe81002aae76f32e0f884784facf4f2d28903f148e75f6ef5027d6590->leave($__internal_fde107ebe81002aae76f32e0f884784facf4f2d28903f148e75f6ef5027d6590_prof);

        
        $__internal_9ba3e73a7c4d87eeebefbb394f500bf4bf0abfe8e57121fa7ca143bc128ec83c->leave($__internal_9ba3e73a7c4d87eeebefbb394f500bf4bf0abfe8e57121fa7ca143bc128ec83c_prof);

    }

    // line 11
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_aa3b8e4869fe80c5778847637286a4007e51557e9a2f3d5af23da4ab245f94db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa3b8e4869fe80c5778847637286a4007e51557e9a2f3d5af23da4ab245f94db->enter($__internal_aa3b8e4869fe80c5778847637286a4007e51557e9a2f3d5af23da4ab245f94db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_6ec7ae00eefc02e8e5ab0ea01e71d51856f1b8d0503a8cdfce0144d503897b67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ec7ae00eefc02e8e5ab0ea01e71d51856f1b8d0503a8cdfce0144d503897b67->enter($__internal_6ec7ae00eefc02e8e5ab0ea01e71d51856f1b8d0503a8cdfce0144d503897b67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 12
        echo "    <p>
    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 13, $this->getSourceContext()); })()), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 14
            echo "        <div class=\"alert alert-info\">Info : ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    </p>

    <ul class=\"collection\">
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listAdverts"]) || array_key_exists("listAdverts", $context) ? $context["listAdverts"] : (function () { throw new Twig_Error_Runtime('Variable "listAdverts" does not exist.', 19, $this->getSourceContext()); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 20
            echo "            <li class=\"collection-item avatar\">

                    ";
            // line 22
            if ( !(null === twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "image", array()))) {
                // line 23
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_view", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "id", array()))), "html", null, true);
                echo "\">
                            <img src=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "image", array()), "webPath", array())), "html", null, true);
                echo "\" alt=\"\" class=\"circle\">
                        </a>
                    ";
            }
            // line 27
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_view", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "id", array()))), "html", null, true);
            echo "\">
                        <span class=\"title\">";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "title", array()), "html", null, true);
            echo "</span>
                    </a>
                    <p>
                        By ";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "author", array()), "username", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "date", array()), "d/m/Y"), "html", null, true);
            echo "
                    </p>
            </li>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 35
            echo "            <li>Pas (encore !) d'annonces</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "    </ul>

    <ul class=\"pagination\">
        ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nbPages"]) || array_key_exists("nbPages", $context) ? $context["nbPages"] : (function () { throw new Twig_Error_Runtime('Variable "nbPages" does not exist.', 40, $this->getSourceContext()); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 41
            echo "            <li";
            if (($context["p"] == (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 41, $this->getSourceContext()); })()))) {
                echo " class=\"active\"";
            }
            echo ">
                <a href=\"";
            // line 42
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
        // line 45
        echo "    </ul>

";
        
        $__internal_6ec7ae00eefc02e8e5ab0ea01e71d51856f1b8d0503a8cdfce0144d503897b67->leave($__internal_6ec7ae00eefc02e8e5ab0ea01e71d51856f1b8d0503a8cdfce0144d503897b67_prof);

        
        $__internal_aa3b8e4869fe80c5778847637286a4007e51557e9a2f3d5af23da4ab245f94db->leave($__internal_aa3b8e4869fe80c5778847637286a4007e51557e9a2f3d5af23da4ab245f94db_prof);

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
        return array (  192 => 45,  181 => 42,  174 => 41,  170 => 40,  165 => 37,  158 => 35,  147 => 31,  141 => 28,  136 => 27,  130 => 24,  125 => 23,  123 => 22,  119 => 20,  114 => 19,  109 => 16,  100 => 14,  96 => 13,  93 => 12,  84 => 11,  73 => 8,  64 => 7,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"OCPlatformBundle::layout.html.twig\" %}

{% block title %}
    Accueil - {{ parent() }}
{% endblock %}

{% block titlePage %}
    Liste des annonces
{% endblock %}

{% block ocplatform_body %}
    <p>
    {% for message in app.session.flashbag.get('info') %}
        <div class=\"alert alert-info\">Info : {{ message }}</div>
    {% endfor %}
    </p>

    <ul class=\"collection\">
        {% for advert in listAdverts %}
            <li class=\"collection-item avatar\">

                    {% if advert.image is not null %}
                        <a href=\"{{ path('oc_platform_view', {'id': advert.id}) }}\">
                            <img src=\"{{ asset(advert.image.webPath) }}\" alt=\"\" class=\"circle\">
                        </a>
                    {% endif %}
                    <a href=\"{{ path('oc_platform_view', {'id': advert.id}) }}\">
                        <span class=\"title\">{{ advert.title }}</span>
                    </a>
                    <p>
                        By {{ advert.author.username }} - {{ advert.date|date('d/m/Y') }}
                    </p>
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

{% endblock %}", "OCPlatformBundle:Advert:index.html.twig", "C:\\wamp64\\www\\Symfony\\src\\OC\\PlatformBundle\\Resources\\views\\Advert\\index.html.twig");
    }
}
