<?php

/* @OCPlatform/Advert/view.html.twig */
class __TwigTemplate_a1c4d3c08bacec91d56720c07e453446658cdd6ff6195766526677a782df973a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "@OCPlatform/Advert/view.html.twig", 1);
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
        $__internal_e8ab8bfbc5ac935812540354f43b43444a6eac35d65266425b0e36f2d831ee47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8ab8bfbc5ac935812540354f43b43444a6eac35d65266425b0e36f2d831ee47->enter($__internal_e8ab8bfbc5ac935812540354f43b43444a6eac35d65266425b0e36f2d831ee47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCPlatform/Advert/view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e8ab8bfbc5ac935812540354f43b43444a6eac35d65266425b0e36f2d831ee47->leave($__internal_e8ab8bfbc5ac935812540354f43b43444a6eac35d65266425b0e36f2d831ee47_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f21ac3235a9b87173280f3d4ea577c90e106602170569162e0b233c170b0c9b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f21ac3235a9b87173280f3d4ea577c90e106602170569162e0b233c170b0c9b0->enter($__internal_f21ac3235a9b87173280f3d4ea577c90e106602170569162e0b233c170b0c9b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Lecture d'une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_f21ac3235a9b87173280f3d4ea577c90e106602170569162e0b233c170b0c9b0->leave($__internal_f21ac3235a9b87173280f3d4ea577c90e106602170569162e0b233c170b0c9b0_prof);

    }

    // line 7
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_0e47fe4759b394b3b56ec3c782b37cf961ea246cf89b6941e7a3c957c3e83095 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e47fe4759b394b3b56ec3c782b37cf961ea246cf89b6941e7a3c957c3e83095->enter($__internal_0e47fe4759b394b3b56ec3c782b37cf961ea246cf89b6941e7a3c957c3e83095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 8
        echo "    ";
        if ( !(null === twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 8, $this->getSourceContext()); })()), "image", array()))) {
            // line 9
            echo "        <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 9, $this->getSourceContext()); })()), "image", array()), "webPath", array())), "html", null, true);
            echo "\" />
    ";
        }
        // line 11
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 11, $this->getSourceContext()); })()), "title", array()), "html", null, true);
        echo "</h2>
    <i>Par ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 12, $this->getSourceContext()); })()), "author", array()), "username", array()), "html", null, true);
        echo ", le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 12, $this->getSourceContext()); })()), "date", array()), "d/m/Y"), "html", null, true);
        echo "</i>

    <div class=\"well\">
        ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 15, $this->getSourceContext()); })()), "content", array()), "html", null, true);
        echo "
    </div>

    <p>

        <a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_home");
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour à la liste
        </a>
        ";
        // line 24
        if ((($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_AUTEUR") && (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 24, $this->getSourceContext()); })()), "author", array()), "username", array()) == twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 24, $this->getSourceContext()); })()), "user", array()), "username", array()))) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN"))) {
            // line 25
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 25, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default\">
                <i class=\"glyphicon glyphicon-edit\"></i>
                Modifier l'annonce
            </a>

            <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_delete", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 30, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger\">
                <i class=\"glyphicon glyphicon-trash\"></i>
                Supprimer l'annonce
            </a>
        ";
        }
        // line 35
        echo "    </p>
    ";
        // line 36
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 36, $this->getSourceContext()); })()), "categories", array()), "empty", array())) {
            // line 37
            echo "        <p>
            Cette annonce est parue dans les catégories suivantes :
            ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 39, $this->getSourceContext()); })()), "categories", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 40
                echo "                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "name", array()), "html", null, true);
                if ( !twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 41
                echo "            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "        </p>
    ";
        }
        // line 44
        echo "
    ";
        // line 45
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SEARCH")) {
            // line 46
            echo "        ";
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 46, $this->getSourceContext()); })()), 'form_start', array("attr" => array("class" => "form-horizontal")));
            echo "
        ";
            // line 47
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 47, $this->getSourceContext()); })()), 'errors');
            echo "
        ";
            // line 48
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 48, $this->getSourceContext()); })()), "content", array()), 'row');
            echo "
        ";
            // line 49
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 49, $this->getSourceContext()); })()), "save", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
            echo "
        ";
            // line 50
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 50, $this->getSourceContext()); })()), 'form_end');
            echo "
        <br />
    ";
        }
        // line 53
        echo "
    ";
        // line 54
        if (array_key_exists("listApplications", $context)) {
            // line 55
            echo "
        ";
            // line 56
            if ( !(($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_AUTEUR") && (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 56, $this->getSourceContext()); })()), "author", array()), "username", array()) == twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 56, $this->getSourceContext()); })()), "user", array()), "username", array()))) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN"))) {
                // line 57
                echo "            <br />Vous n'êtes pas censé voir les postulants, c'est encore là pour le dev'
            <br />
        ";
            }
            // line 60
            echo "        <ul>
            ";
            // line 61
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listApplications"]) || array_key_exists("listApplications", $context) ? $context["listApplications"] : (function () { throw new Twig_Error_Runtime('Variable "listApplications" does not exist.', 61, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["app"]) {
                // line 62
                echo "                <li>";
                echo twig_escape_filter($this->env, (((((twig_get_attribute($this->env, $this->getSourceContext(), $context["app"], "author", array()) . " - ") . twig_get_attribute($this->env, $this->getSourceContext(), $context["app"], "content", array())) . "(") . twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["app"], "date", array()), "H:i m/d/Y")) . ")"), "html", null, true);
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['app'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "        </ul>
    ";
        }
        // line 66
        echo "    ";
        if (array_key_exists("listAdvertSkill", $context)) {
            // line 67
            echo "        <ul>
            ";
            // line 68
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listAdvertSkill"]) || array_key_exists("listAdvertSkill", $context) ? $context["listAdvertSkill"] : (function () { throw new Twig_Error_Runtime('Variable "listAdvertSkill" does not exist.', 68, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["advertSkill"]) {
                // line 69
                echo "                <li>";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["advertSkill"], "Skill", array()), "name", array()) . " : ") . twig_get_attribute($this->env, $this->getSourceContext(), $context["advertSkill"], "level", array())), "html", null, true);
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advertSkill'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "        </ul>
    ";
        }
        // line 73
        echo "

";
        
        $__internal_0e47fe4759b394b3b56ec3c782b37cf961ea246cf89b6941e7a3c957c3e83095->leave($__internal_0e47fe4759b394b3b56ec3c782b37cf961ea246cf89b6941e7a3c957c3e83095_prof);

    }

    public function getTemplateName()
    {
        return "@OCPlatform/Advert/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 73,  245 => 71,  236 => 69,  232 => 68,  229 => 67,  226 => 66,  222 => 64,  213 => 62,  209 => 61,  206 => 60,  201 => 57,  199 => 56,  196 => 55,  194 => 54,  191 => 53,  185 => 50,  181 => 49,  177 => 48,  173 => 47,  168 => 46,  166 => 45,  163 => 44,  159 => 42,  145 => 41,  139 => 40,  122 => 39,  118 => 37,  116 => 36,  113 => 35,  105 => 30,  96 => 25,  94 => 24,  87 => 20,  79 => 15,  71 => 12,  66 => 11,  60 => 9,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"OCPlatformBundle::layout.html.twig\" %}

{% block title %}
    Lecture d'une annonce - {{ parent() }}
{% endblock %}

{% block ocplatform_body %}
    {% if advert.image is not null %}
        <img src=\"{{ asset(advert.image.webPath) }}\" />
    {% endif %}
    <h2>{{ advert.title }}</h2>
    <i>Par {{ advert.author.username }}, le {{ advert.date|date('d/m/Y') }}</i>

    <div class=\"well\">
        {{ advert.content }}
    </div>

    <p>

        <a href=\"{{ path('oc_platform_home') }}\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour à la liste
        </a>
        {% if (is_granted('ROLE_AUTEUR') and advert.author.username == app.user.username) or (is_granted('ROLE_ADMIN')) %}
            <a href=\"{{ path('oc_platform_edit', {'id': advert.id}) }}\" class=\"btn btn-default\">
                <i class=\"glyphicon glyphicon-edit\"></i>
                Modifier l'annonce
            </a>

            <a href=\"{{ path('oc_platform_delete', {'id': advert.id}) }}\" class=\"btn btn-danger\">
                <i class=\"glyphicon glyphicon-trash\"></i>
                Supprimer l'annonce
            </a>
        {% endif %}
    </p>
    {% if not advert.categories.empty %}
        <p>
            Cette annonce est parue dans les catégories suivantes :
            {% for category in advert.categories %}
                {{ category.name }}{% if not loop.last %}, {% endif %}
            {% endfor %}
        </p>
    {% endif %}

    {% if is_granted('ROLE_SEARCH') %}
        {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}
        {{ form_errors(form) }}
        {{ form_row(form.content) }}
        {{ form_widget(form.save, {'attr': {'class': 'btn btn-primary'}}) }}
        {{ form_end(form) }}
        <br />
    {% endif %}

    {% if listApplications is defined %}

        {% if not((is_granted('ROLE_AUTEUR') and advert.author.username == app.user.username) or (is_granted('ROLE_ADMIN'))) %}
            <br />Vous n'êtes pas censé voir les postulants, c'est encore là pour le dev'
            <br />
        {% endif %}
        <ul>
            {% for app in listApplications %}
                <li>{{ app.author ~ \" - \" ~ app.content ~ \"(\" ~ app.date|date(\"H:i m/d/Y\") ~ \")\" }}</li>
            {% endfor %}
        </ul>
    {% endif %}
    {% if listAdvertSkill is defined %}
        <ul>
            {% for advertSkill in listAdvertSkill %}
                <li>{{ advertSkill.Skill.name ~ ' : ' ~ advertSkill.level}}</li>
            {% endfor %}
        </ul>
    {% endif %}


{% endblock %}", "@OCPlatform/Advert/view.html.twig", "C:\\wamp64\\www\\Symfony\\src\\OC\\PlatformBundle\\Resources\\views\\Advert\\view.html.twig");
    }
}
