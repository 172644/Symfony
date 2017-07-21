<?php

/* @OCCore/layout.html.twig */
class __TwigTemplate_a7add03676192ff58b31709b66b72a81cd12c4ddbbf46bd0a0092ed100b8b7a6 extends Twig_Template
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
        $__internal_4ed09d5567f698e5a434b372824e6a0d57a23fff865cf9329f7f9740aee2f943 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ed09d5567f698e5a434b372824e6a0d57a23fff865cf9329f7f9740aee2f943->enter($__internal_4ed09d5567f698e5a434b372824e6a0d57a23fff865cf9329f7f9740aee2f943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCCore/layout.html.twig"));

        $__internal_894fc1c960c7014fec6a6609214942ec2e4553f866f95de642b937576062388f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_894fc1c960c7014fec6a6609214942ec2e4553f866f95de642b937576062388f->enter($__internal_894fc1c960c7014fec6a6609214942ec2e4553f866f95de642b937576062388f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCCore/layout.html.twig"));

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
        
        $__internal_4ed09d5567f698e5a434b372824e6a0d57a23fff865cf9329f7f9740aee2f943->leave($__internal_4ed09d5567f698e5a434b372824e6a0d57a23fff865cf9329f7f9740aee2f943_prof);

        
        $__internal_894fc1c960c7014fec6a6609214942ec2e4553f866f95de642b937576062388f->leave($__internal_894fc1c960c7014fec6a6609214942ec2e4553f866f95de642b937576062388f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d59a28eca40c180a5f9e43d90de87339eeba8933c31b10b9eda7704f36f6d695 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d59a28eca40c180a5f9e43d90de87339eeba8933c31b10b9eda7704f36f6d695->enter($__internal_d59a28eca40c180a5f9e43d90de87339eeba8933c31b10b9eda7704f36f6d695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6e2ca6eca89ba532f89daad785299260e66bb872829523c6881733cc5af5e878 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e2ca6eca89ba532f89daad785299260e66bb872829523c6881733cc5af5e878->enter($__internal_6e2ca6eca89ba532f89daad785299260e66bb872829523c6881733cc5af5e878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "OC Plateforme";
        
        $__internal_6e2ca6eca89ba532f89daad785299260e66bb872829523c6881733cc5af5e878->leave($__internal_6e2ca6eca89ba532f89daad785299260e66bb872829523c6881733cc5af5e878_prof);

        
        $__internal_d59a28eca40c180a5f9e43d90de87339eeba8933c31b10b9eda7704f36f6d695->leave($__internal_d59a28eca40c180a5f9e43d90de87339eeba8933c31b10b9eda7704f36f6d695_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f8371de2a3efa5d396fa315c158597a912e6db93d8f1e675d1744877e5683c51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8371de2a3efa5d396fa315c158597a912e6db93d8f1e675d1744877e5683c51->enter($__internal_f8371de2a3efa5d396fa315c158597a912e6db93d8f1e675d1744877e5683c51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b95691eab5bb641efb75da000ce7d67fff490461a650c5c8a33357868de5f245 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b95691eab5bb641efb75da000ce7d67fff490461a650c5c8a33357868de5f245->enter($__internal_b95691eab5bb641efb75da000ce7d67fff490461a650c5c8a33357868de5f245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "        ";
        // line 11
        echo "        <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
    ";
        
        $__internal_b95691eab5bb641efb75da000ce7d67fff490461a650c5c8a33357868de5f245->leave($__internal_b95691eab5bb641efb75da000ce7d67fff490461a650c5c8a33357868de5f245_prof);

        
        $__internal_f8371de2a3efa5d396fa315c158597a912e6db93d8f1e675d1744877e5683c51->leave($__internal_f8371de2a3efa5d396fa315c158597a912e6db93d8f1e675d1744877e5683c51_prof);

    }

    // line 66
    public function block_body($context, array $blocks = array())
    {
        $__internal_5346f05724a23b92d841ec96616c14a86382f579a789c458144973779217ae7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5346f05724a23b92d841ec96616c14a86382f579a789c458144973779217ae7e->enter($__internal_5346f05724a23b92d841ec96616c14a86382f579a789c458144973779217ae7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_77265de54bfc95d700d71a3a72019b9da164df1a3b70d2d5474905a56cc0daaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77265de54bfc95d700d71a3a72019b9da164df1a3b70d2d5474905a56cc0daaa->enter($__internal_77265de54bfc95d700d71a3a72019b9da164df1a3b70d2d5474905a56cc0daaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 67
        echo "            ";
        
        $__internal_77265de54bfc95d700d71a3a72019b9da164df1a3b70d2d5474905a56cc0daaa->leave($__internal_77265de54bfc95d700d71a3a72019b9da164df1a3b70d2d5474905a56cc0daaa_prof);

        
        $__internal_5346f05724a23b92d841ec96616c14a86382f579a789c458144973779217ae7e->leave($__internal_5346f05724a23b92d841ec96616c14a86382f579a789c458144973779217ae7e_prof);

    }

    // line 78
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_782822163c114790f22615af3dafd0f843fa788a000d0e8b51ac84daf0e1f794 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_782822163c114790f22615af3dafd0f843fa788a000d0e8b51ac84daf0e1f794->enter($__internal_782822163c114790f22615af3dafd0f843fa788a000d0e8b51ac84daf0e1f794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_bd82d0a0f441a60659c02c29af1145dfb5b3c7069a562af0d0904734ebbb532b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd82d0a0f441a60659c02c29af1145dfb5b3c7069a562af0d0904734ebbb532b->enter($__internal_bd82d0a0f441a60659c02c29af1145dfb5b3c7069a562af0d0904734ebbb532b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 79
        echo "    ";
        // line 80
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
";
        
        $__internal_bd82d0a0f441a60659c02c29af1145dfb5b3c7069a562af0d0904734ebbb532b->leave($__internal_bd82d0a0f441a60659c02c29af1145dfb5b3c7069a562af0d0904734ebbb532b_prof);

        
        $__internal_782822163c114790f22615af3dafd0f843fa788a000d0e8b51ac84daf0e1f794->leave($__internal_782822163c114790f22615af3dafd0f843fa788a000d0e8b51ac84daf0e1f794_prof);

    }

    public function getTemplateName()
    {
        return "@OCCore/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 80,  238 => 79,  229 => 78,  219 => 67,  210 => 66,  199 => 11,  197 => 10,  188 => 9,  170 => 7,  158 => 83,  156 => 78,  149 => 74,  141 => 68,  139 => 66,  132 => 61,  127 => 59,  124 => 58,  122 => 57,  119 => 56,  114 => 54,  111 => 53,  109 => 52,  104 => 50,  97 => 45,  91 => 43,  85 => 41,  83 => 40,  76 => 36,  73 => 35,  67 => 33,  65 => 32,  44 => 13,  42 => 9,  37 => 7,  29 => 1,);
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
</html>", "@OCCore/layout.html.twig", "C:\\wamp64\\www\\Symfony\\src\\OC\\CoreBundle\\Resources\\views\\layout.html.twig");
    }
}
