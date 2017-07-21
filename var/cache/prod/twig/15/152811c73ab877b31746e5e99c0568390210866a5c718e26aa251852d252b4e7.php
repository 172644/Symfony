<?php

/* OCCoreBundle::layout.html.twig */
class __TwigTemplate_f7f75a0bef786f6871a19fb2af2b892e1f7b4746784d88a2d7352acdee963b11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_71dc76cbc7a8c55a28bacbbd0980f5d708c7bfbd17dbb7de54ca5b9850e16e71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71dc76cbc7a8c55a28bacbbd0980f5d708c7bfbd17dbb7de54ca5b9850e16e71->enter($__internal_71dc76cbc7a8c55a28bacbbd0980f5d708c7bfbd17dbb7de54ca5b9850e16e71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCCoreBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "</head>

<body>
<div class=\"container\">
    <div id=\"header\" class=\"jumbotron\">
        <h1>Ma plateforme d'annonces</h1>
        <p>
            Ce projet est propulsé par Symfony,
            et construit grâce au MOOC OpenClassrooms et SensioLabs.
        </p>
        <p>
            <a class=\"btn btn-primary btn-lg\" href=\"https://openclassrooms.com/courses/developpez-votre-site-web-avec-le-framework-symfony2\">
                Participer au MOOC »
            </a>
        </p>
    </div>

    <div class=\"row\">
        <div id=\"menu\" class=\"col-md-3\">
            ";
        // line 32
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 33
            echo "                Connecté en tant que ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 33, $this->getSourceContext()); })()), "user", array()), "username", array()), "html", null, true);
            echo "
            ";
        }
        // line 35
        echo "            <h3>Menu</h3>
            ";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("OCPlatformBundle:Advert:menu"));
        echo "

            <ul class=\"nav nav-pills nav-stacked\">
                <li>
                    ";
        // line 40
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 41
            echo "                        <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a>
                    ";
        } else {
            // line 43
            echo "                        <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Connexion</a>
                    ";
        }
        // line 45
        echo "                </li>
            </ul>


            <h4>Dernières annonces</h4>
            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("OCPlatformBundle:Advert:lastAnnonce", array("limit" => 3)));
        echo "

            ";
        // line 52
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SEARCH")) {
            // line 53
            echo "                <h4>Mes dernières applications</h4>
                ";
            // line 54
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("OCPlatformBundle:Advert:lastApplication", array("user" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 54, $this->getSourceContext()); })()), "user", array()))));
            echo "
            ";
        }
        // line 56
        echo "
            ";
        // line 57
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_AUTEUR")) {
            // line 58
            echo "                <h4>Mes dernières annonces</h4>
                ";
            // line 59
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("OCPlatformBundle:Advert:lastAdvert", array("user" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 59, $this->getSourceContext()); })()), "user", array()))));
            echo "
            ";
        }
        // line 61
        echo "

        </div>
        <div id=\"content\" class=\"col-md-9\">

            ";
        // line 66
        $this->displayBlock('body', $context, $blocks);
        // line 68
        echo "        </div>
    </div>

    <hr>

    <footer>
        <p>The sky's the limit © ";
        // line 74
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " and beyond.</p>
    </footer>
</div>

";
        // line 78
        $this->displayBlock('javascripts', $context, $blocks);
        // line 83
        echo "
</body>
</html>";
        
        $__internal_71dc76cbc7a8c55a28bacbbd0980f5d708c7bfbd17dbb7de54ca5b9850e16e71->leave($__internal_71dc76cbc7a8c55a28bacbbd0980f5d708c7bfbd17dbb7de54ca5b9850e16e71_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a15138e73223f9ed6c6bc30f348a75c350145ebd36a097b8a6a01a301fac2c50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a15138e73223f9ed6c6bc30f348a75c350145ebd36a097b8a6a01a301fac2c50->enter($__internal_a15138e73223f9ed6c6bc30f348a75c350145ebd36a097b8a6a01a301fac2c50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "OC Plateforme";
        
        $__internal_a15138e73223f9ed6c6bc30f348a75c350145ebd36a097b8a6a01a301fac2c50->leave($__internal_a15138e73223f9ed6c6bc30f348a75c350145ebd36a097b8a6a01a301fac2c50_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9332634e33a22498e92ff15fa975f2a9ef4ea43808e924be769d10d4b5ba65f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9332634e33a22498e92ff15fa975f2a9ef4ea43808e924be769d10d4b5ba65f7->enter($__internal_9332634e33a22498e92ff15fa975f2a9ef4ea43808e924be769d10d4b5ba65f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "        ";
        // line 11
        echo "        <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
    ";
        
        $__internal_9332634e33a22498e92ff15fa975f2a9ef4ea43808e924be769d10d4b5ba65f7->leave($__internal_9332634e33a22498e92ff15fa975f2a9ef4ea43808e924be769d10d4b5ba65f7_prof);

    }

    // line 66
    public function block_body($context, array $blocks = array())
    {
        $__internal_a7e123ae3b510432a6ad38d72394c867b642a6201f39c2fa1a76993f6d275070 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7e123ae3b510432a6ad38d72394c867b642a6201f39c2fa1a76993f6d275070->enter($__internal_a7e123ae3b510432a6ad38d72394c867b642a6201f39c2fa1a76993f6d275070_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 67
        echo "            ";
        
        $__internal_a7e123ae3b510432a6ad38d72394c867b642a6201f39c2fa1a76993f6d275070->leave($__internal_a7e123ae3b510432a6ad38d72394c867b642a6201f39c2fa1a76993f6d275070_prof);

    }

    // line 78
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_82f58b85a7ee0b0bb0f4ea7014232c0b149ad1fffa9dbc49464c7f0869890808 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82f58b85a7ee0b0bb0f4ea7014232c0b149ad1fffa9dbc49464c7f0869890808->enter($__internal_82f58b85a7ee0b0bb0f4ea7014232c0b149ad1fffa9dbc49464c7f0869890808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 79
        echo "    ";
        // line 80
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
";
        
        $__internal_82f58b85a7ee0b0bb0f4ea7014232c0b149ad1fffa9dbc49464c7f0869890808->leave($__internal_82f58b85a7ee0b0bb0f4ea7014232c0b149ad1fffa9dbc49464c7f0869890808_prof);

    }

    public function getTemplateName()
    {
        return "OCCoreBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 80,  211 => 79,  205 => 78,  198 => 67,  192 => 66,  184 => 11,  182 => 10,  176 => 9,  164 => 7,  155 => 83,  153 => 78,  146 => 74,  138 => 68,  136 => 66,  129 => 61,  124 => 59,  121 => 58,  119 => 57,  116 => 56,  111 => 54,  108 => 53,  106 => 52,  101 => 50,  94 => 45,  88 => 43,  82 => 41,  80 => 40,  73 => 36,  70 => 35,  64 => 33,  62 => 32,  41 => 13,  39 => 9,  34 => 7,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>{% block title %}OC Plateforme{% endblock %}</title>

    {% block stylesheets %}
        {# On charge le CSS de bootstrap depuis le site directement #}
        <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
    {% endblock %}
</head>

<body>
<div class=\"container\">
    <div id=\"header\" class=\"jumbotron\">
        <h1>Ma plateforme d'annonces</h1>
        <p>
            Ce projet est propulsé par Symfony,
            et construit grâce au MOOC OpenClassrooms et SensioLabs.
        </p>
        <p>
            <a class=\"btn btn-primary btn-lg\" href=\"https://openclassrooms.com/courses/developpez-votre-site-web-avec-le-framework-symfony2\">
                Participer au MOOC »
            </a>
        </p>
    </div>

    <div class=\"row\">
        <div id=\"menu\" class=\"col-md-3\">
            {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                Connecté en tant que {{ app.user.username }}
            {% endif %}
            <h3>Menu</h3>
            {{ render(controller(\"OCPlatformBundle:Advert:menu\")) }}

            <ul class=\"nav nav-pills nav-stacked\">
                <li>
                    {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                        <a href=\"{{ path('fos_user_security_logout') }}\">Déconnexion</a>
                    {% else %}
                        <a href=\"{{ path('fos_user_security_login') }}\">Connexion</a>
                    {% endif %}
                </li>
            </ul>


            <h4>Dernières annonces</h4>
            {{ render(controller(\"OCPlatformBundle:Advert:lastAnnonce\", {'limit': 3})) }}

            {% if is_granted('ROLE_SEARCH') %}
                <h4>Mes dernières applications</h4>
                {{ render(controller(\"OCPlatformBundle:Advert:lastApplication\", {'user': app.user})) }}
            {% endif %}

            {% if is_granted('ROLE_AUTEUR') %}
                <h4>Mes dernières annonces</h4>
                {{ render(controller(\"OCPlatformBundle:Advert:lastAdvert\", {'user': app.user})) }}
            {% endif %}


        </div>
        <div id=\"content\" class=\"col-md-9\">

            {% block body %}
            {% endblock %}
        </div>
    </div>

    <hr>

    <footer>
        <p>The sky's the limit © {{ 'now'|date('Y') }} and beyond.</p>
    </footer>
</div>

{% block javascripts %}
    {# Ajoutez ces lignes JavaScript si vous comptez vous servir des fonctionnalités du bootstrap Twitter #}
    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
{% endblock %}

</body>
</html>", "OCCoreBundle::layout.html.twig", "C:\\wamp64\\www\\Symfony\\src\\OC\\CoreBundle/Resources/views/layout.html.twig");
    }
}
