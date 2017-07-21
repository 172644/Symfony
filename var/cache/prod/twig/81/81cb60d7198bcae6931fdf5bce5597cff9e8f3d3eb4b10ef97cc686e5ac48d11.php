<?php

/* OCCoreBundle::layout.html.twig */
class __TwigTemplate_49f0061985e6bc8ada3f57cfc8b9d5969d57a05d008c61b09557bbb2eb7a66e3 extends Twig_Template
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array()), "username", array()), "html", null, true);
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("OCPlatformBundle:Advert:lastApplication", array("user" => twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array()))));
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("OCPlatformBundle:Advert:lastAdvert", array("user" => twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array()))));
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
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "OC Plateforme";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 10
        echo "        ";
        // line 11
        echo "        <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
    ";
    }

    // line 66
    public function block_body($context, array $blocks = array())
    {
        // line 67
        echo "            ";
    }

    // line 78
    public function block_javascripts($context, array $blocks = array())
    {
        // line 79
        echo "    ";
        // line 80
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
";
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
        return array (  186 => 80,  184 => 79,  181 => 78,  177 => 67,  174 => 66,  169 => 11,  167 => 10,  164 => 9,  158 => 7,  152 => 83,  150 => 78,  143 => 74,  135 => 68,  133 => 66,  126 => 61,  121 => 59,  118 => 58,  116 => 57,  113 => 56,  108 => 54,  105 => 53,  103 => 52,  98 => 50,  91 => 45,  85 => 43,  79 => 41,  77 => 40,  70 => 36,  67 => 35,  61 => 33,  59 => 32,  38 => 13,  36 => 9,  31 => 7,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OCCoreBundle::layout.html.twig", "C:\\wamp64\\www\\Symfony\\src\\OC\\CoreBundle\\Resources\\views\\layout.html.twig");
    }
}
