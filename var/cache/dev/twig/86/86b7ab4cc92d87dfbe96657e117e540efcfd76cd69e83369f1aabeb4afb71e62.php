<?php

/* OCCoreBundle::layout.html.twig */
class __TwigTemplate_e32c7e06ad704c41710dc7b9ac722e3fb700c32dd32900ba75015f271bd0ca43 extends Twig_Template
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
        $__internal_38ea53f8ac845c29eba9959a927185889eab5931e73cef76b281817313000504 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38ea53f8ac845c29eba9959a927185889eab5931e73cef76b281817313000504->enter($__internal_38ea53f8ac845c29eba9959a927185889eab5931e73cef76b281817313000504_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCCoreBundle::layout.html.twig"));

        $__internal_4760a099c84dd374dfefc0a03eacddd482da1804a6a99597417e94fd9ad0a596 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4760a099c84dd374dfefc0a03eacddd482da1804a6a99597417e94fd9ad0a596->enter($__internal_4760a099c84dd374dfefc0a03eacddd482da1804a6a99597417e94fd9ad0a596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCCoreBundle::layout.html.twig"));

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
        
        $__internal_38ea53f8ac845c29eba9959a927185889eab5931e73cef76b281817313000504->leave($__internal_38ea53f8ac845c29eba9959a927185889eab5931e73cef76b281817313000504_prof);

        
        $__internal_4760a099c84dd374dfefc0a03eacddd482da1804a6a99597417e94fd9ad0a596->leave($__internal_4760a099c84dd374dfefc0a03eacddd482da1804a6a99597417e94fd9ad0a596_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_fa65cd496d454473bb2b832725fbcfede5f75498773aae6a3eaefadc84208010 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa65cd496d454473bb2b832725fbcfede5f75498773aae6a3eaefadc84208010->enter($__internal_fa65cd496d454473bb2b832725fbcfede5f75498773aae6a3eaefadc84208010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_58acb6dee715a30745306db6c55c50e7613c358175d6a95c454f5c8d3d0e0fcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58acb6dee715a30745306db6c55c50e7613c358175d6a95c454f5c8d3d0e0fcf->enter($__internal_58acb6dee715a30745306db6c55c50e7613c358175d6a95c454f5c8d3d0e0fcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "OC Plateforme";
        
        $__internal_58acb6dee715a30745306db6c55c50e7613c358175d6a95c454f5c8d3d0e0fcf->leave($__internal_58acb6dee715a30745306db6c55c50e7613c358175d6a95c454f5c8d3d0e0fcf_prof);

        
        $__internal_fa65cd496d454473bb2b832725fbcfede5f75498773aae6a3eaefadc84208010->leave($__internal_fa65cd496d454473bb2b832725fbcfede5f75498773aae6a3eaefadc84208010_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_75aaa5f81ae1ee73a329a13aed973e69a2580fd1aea00be8927c065af0be10ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75aaa5f81ae1ee73a329a13aed973e69a2580fd1aea00be8927c065af0be10ea->enter($__internal_75aaa5f81ae1ee73a329a13aed973e69a2580fd1aea00be8927c065af0be10ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_7133e0470a5ed13bc81143fdc7973519bf5a4d4adac331f31e25954ac0ae0a74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7133e0470a5ed13bc81143fdc7973519bf5a4d4adac331f31e25954ac0ae0a74->enter($__internal_7133e0470a5ed13bc81143fdc7973519bf5a4d4adac331f31e25954ac0ae0a74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "        ";
        // line 11
        echo "        <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
    ";
        
        $__internal_7133e0470a5ed13bc81143fdc7973519bf5a4d4adac331f31e25954ac0ae0a74->leave($__internal_7133e0470a5ed13bc81143fdc7973519bf5a4d4adac331f31e25954ac0ae0a74_prof);

        
        $__internal_75aaa5f81ae1ee73a329a13aed973e69a2580fd1aea00be8927c065af0be10ea->leave($__internal_75aaa5f81ae1ee73a329a13aed973e69a2580fd1aea00be8927c065af0be10ea_prof);

    }

    // line 66
    public function block_body($context, array $blocks = array())
    {
        $__internal_0ef326125ff2e154eafae2941f47aa9f2258eed76d4d13a580272d4d9282b0a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ef326125ff2e154eafae2941f47aa9f2258eed76d4d13a580272d4d9282b0a7->enter($__internal_0ef326125ff2e154eafae2941f47aa9f2258eed76d4d13a580272d4d9282b0a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b459fbf9763707cf1e1d5a05e36ac1ad4416c030f68d8bb35a3498d3afd6ba42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b459fbf9763707cf1e1d5a05e36ac1ad4416c030f68d8bb35a3498d3afd6ba42->enter($__internal_b459fbf9763707cf1e1d5a05e36ac1ad4416c030f68d8bb35a3498d3afd6ba42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 67
        echo "            ";
        
        $__internal_b459fbf9763707cf1e1d5a05e36ac1ad4416c030f68d8bb35a3498d3afd6ba42->leave($__internal_b459fbf9763707cf1e1d5a05e36ac1ad4416c030f68d8bb35a3498d3afd6ba42_prof);

        
        $__internal_0ef326125ff2e154eafae2941f47aa9f2258eed76d4d13a580272d4d9282b0a7->leave($__internal_0ef326125ff2e154eafae2941f47aa9f2258eed76d4d13a580272d4d9282b0a7_prof);

    }

    // line 78
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9a2eae79907aae870b608d954334347730a0c689aca892c72ff36f01a2247056 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a2eae79907aae870b608d954334347730a0c689aca892c72ff36f01a2247056->enter($__internal_9a2eae79907aae870b608d954334347730a0c689aca892c72ff36f01a2247056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3004c80533760afa906ba48a0992c34652166330e27dda05b98e352f415b5f6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3004c80533760afa906ba48a0992c34652166330e27dda05b98e352f415b5f6e->enter($__internal_3004c80533760afa906ba48a0992c34652166330e27dda05b98e352f415b5f6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 79
        echo "    ";
        // line 80
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
";
        
        $__internal_3004c80533760afa906ba48a0992c34652166330e27dda05b98e352f415b5f6e->leave($__internal_3004c80533760afa906ba48a0992c34652166330e27dda05b98e352f415b5f6e_prof);

        
        $__internal_9a2eae79907aae870b608d954334347730a0c689aca892c72ff36f01a2247056->leave($__internal_9a2eae79907aae870b608d954334347730a0c689aca892c72ff36f01a2247056_prof);

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
</html>", "OCCoreBundle::layout.html.twig", "C:\\wamp64\\www\\Symfony\\src\\OC\\CoreBundle/Resources/views/layout.html.twig");
    }
}
