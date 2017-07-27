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
            'titlePage' => array($this, 'block_titlePage'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c7f9eb7fb74d2e7fd75a466200bdddc2e76c886033a48abd4450e851cd947e61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7f9eb7fb74d2e7fd75a466200bdddc2e76c886033a48abd4450e851cd947e61->enter($__internal_c7f9eb7fb74d2e7fd75a466200bdddc2e76c886033a48abd4450e851cd947e61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCCoreBundle::layout.html.twig"));

        $__internal_8d1cc446d6280c4cb05356ac585b86cfbfa5f1f205a425e62db082b1692d012f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d1cc446d6280c4cb05356ac585b86cfbfa5f1f205a425e62db082b1692d012f->enter($__internal_8d1cc446d6280c4cb05356ac585b86cfbfa5f1f205a425e62db082b1692d012f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCCoreBundle::layout.html.twig"));

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
        // line 17
        echo "</head>

<body>
<div class=\"container\" style=\"width:100%; padding: 0\">
        <ul id=\"dropdown1\" class=\"dropdown-content\">
            ";
        // line 22
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 23
            echo "                <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">logout</a></li>
                <li><a href=\"";
            // line 24
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
            echo "\">edit profil</a></li>
            ";
        } else {
            // line 26
            echo "                <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">login</a></li>
                <li><a href=\"";
            // line 27
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\">register</a></li>
            ";
        }
        // line 29
        echo "        </ul>
        <nav style=\"background-color: #444444\">
            <div class=\"nav-wrapper\">
                <div class=\"col-md-2 menu-head\">
                    <a href=\"#!\" class=\"brand-logo\">
                        <span style=\"font-size: 22px;\">OC-PLATFORM</span>
                    </a>
                </div>
                <ul class=\"right hide-on-med-and-down\">
                    ";
        // line 39
        echo "                    ";
        // line 40
        echo "                    <!-- Dropdown Trigger -->
                    <li>
                        <a class=\"dropdown-button\" href=\"#!\" data-activates=\"dropdown1\">
                            <span class=\"user-dropdown\">
                                ";
        // line 44
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 45
            echo "                                    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 45, $this->getSourceContext()); })()), "user", array()), "username", array()), "html", null, true);
            echo "
                                ";
        } else {
            // line 47
            echo "                                    visitor
                                ";
        }
        // line 49
        echo "                                <i class=\"material-icons\">more_vert</i>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

    <div class=\"row\">
        <div id=\"menu\" class=\"col-md-2\"\">
            <div class=\"menu-span\">--- MENU GENERAL ---</div>
            ";
        // line 60
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("OCPlatformBundle:Advert:menu"));
        echo "


            <div class=\"menu-span\">--- Dernières annonces ---</div>
            ";
        // line 64
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("OCPlatformBundle:Advert:lastAnnonce", array("limit" => 3)));
        echo "

            ";
        // line 66
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SEARCH")) {
            // line 67
            echo "                <div class=\"menu-span\">--- Mes applications ---</div>
                ";
            // line 68
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("OCPlatformBundle:Advert:lastApplication", array("user" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 68, $this->getSourceContext()); })()), "user", array()))));
            echo "
            ";
        }
        // line 70
        echo "
            ";
        // line 71
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_AUTEUR")) {
            // line 72
            echo "                <div class=\"menu-span\">--- Mes annonces ---</div>
                ";
            // line 73
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("OCPlatformBundle:Advert:lastAdvert", array("user" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 73, $this->getSourceContext()); })()), "user", array()))));
            echo "
            ";
        }
        // line 75
        echo "

        </div>
        <div id=\"content\" class=\"col-md-9\">

            <div class=\"well title-page\">
                <span>";
        // line 81
        $this->displayBlock('titlePage', $context, $blocks);
        echo "</span>
            </div>

            <hr>

            ";
        // line 86
        $this->displayBlock('body', $context, $blocks);
        // line 88
        echo "        </div>
    </div>

    <hr>

    <footer>
        <p>The sky's the limit © ";
        // line 94
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " and beyond.</p>
    </footer>
</div>

";
        // line 98
        $this->displayBlock('javascripts', $context, $blocks);
        // line 119
        echo "
</body>
</html>";
        
        $__internal_c7f9eb7fb74d2e7fd75a466200bdddc2e76c886033a48abd4450e851cd947e61->leave($__internal_c7f9eb7fb74d2e7fd75a466200bdddc2e76c886033a48abd4450e851cd947e61_prof);

        
        $__internal_8d1cc446d6280c4cb05356ac585b86cfbfa5f1f205a425e62db082b1692d012f->leave($__internal_8d1cc446d6280c4cb05356ac585b86cfbfa5f1f205a425e62db082b1692d012f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_533b919dd629041569d238c98c3587832e113f8899166be348ca51bf9ee033e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_533b919dd629041569d238c98c3587832e113f8899166be348ca51bf9ee033e9->enter($__internal_533b919dd629041569d238c98c3587832e113f8899166be348ca51bf9ee033e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a7691f1be4fc6c7009915afa63f86d6a5d4a6c907f18fc46c50af7d440db1ae1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7691f1be4fc6c7009915afa63f86d6a5d4a6c907f18fc46c50af7d440db1ae1->enter($__internal_a7691f1be4fc6c7009915afa63f86d6a5d4a6c907f18fc46c50af7d440db1ae1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "OC Plateforme";
        
        $__internal_a7691f1be4fc6c7009915afa63f86d6a5d4a6c907f18fc46c50af7d440db1ae1->leave($__internal_a7691f1be4fc6c7009915afa63f86d6a5d4a6c907f18fc46c50af7d440db1ae1_prof);

        
        $__internal_533b919dd629041569d238c98c3587832e113f8899166be348ca51bf9ee033e9->leave($__internal_533b919dd629041569d238c98c3587832e113f8899166be348ca51bf9ee033e9_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7ba132ec4f704c72e924893b83bc08bae42d4e28e3f09f87be6b6366f24bb21c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ba132ec4f704c72e924893b83bc08bae42d4e28e3f09f87be6b6366f24bb21c->enter($__internal_7ba132ec4f704c72e924893b83bc08bae42d4e28e3f09f87be6b6366f24bb21c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_112a98e698546e786ac0ded455e8e976abf95b07ed6f5632810a8fe9f2b2ef6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_112a98e698546e786ac0ded455e8e976abf95b07ed6f5632810a8fe9f2b2ef6a->enter($__internal_112a98e698546e786ac0ded455e8e976abf95b07ed6f5632810a8fe9f2b2ef6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "        ";
        // line 11
        echo "        ";
        // line 12
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/Slate.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/css/materialize.min.css\">
        <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" />
    ";
        
        $__internal_112a98e698546e786ac0ded455e8e976abf95b07ed6f5632810a8fe9f2b2ef6a->leave($__internal_112a98e698546e786ac0ded455e8e976abf95b07ed6f5632810a8fe9f2b2ef6a_prof);

        
        $__internal_7ba132ec4f704c72e924893b83bc08bae42d4e28e3f09f87be6b6366f24bb21c->leave($__internal_7ba132ec4f704c72e924893b83bc08bae42d4e28e3f09f87be6b6366f24bb21c_prof);

    }

    // line 81
    public function block_titlePage($context, array $blocks = array())
    {
        $__internal_ae44f2f70ab4db87089be797e6f92c4d559bf3ee91a33a7e57e9b9f30345351b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae44f2f70ab4db87089be797e6f92c4d559bf3ee91a33a7e57e9b9f30345351b->enter($__internal_ae44f2f70ab4db87089be797e6f92c4d559bf3ee91a33a7e57e9b9f30345351b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titlePage"));

        $__internal_ed356a435b0ccb1ed5714b428fb897bd4f7d6e2faa56a1873fd5af2ea0c521c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed356a435b0ccb1ed5714b428fb897bd4f7d6e2faa56a1873fd5af2ea0c521c9->enter($__internal_ed356a435b0ccb1ed5714b428fb897bd4f7d6e2faa56a1873fd5af2ea0c521c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titlePage"));

        
        $__internal_ed356a435b0ccb1ed5714b428fb897bd4f7d6e2faa56a1873fd5af2ea0c521c9->leave($__internal_ed356a435b0ccb1ed5714b428fb897bd4f7d6e2faa56a1873fd5af2ea0c521c9_prof);

        
        $__internal_ae44f2f70ab4db87089be797e6f92c4d559bf3ee91a33a7e57e9b9f30345351b->leave($__internal_ae44f2f70ab4db87089be797e6f92c4d559bf3ee91a33a7e57e9b9f30345351b_prof);

    }

    // line 86
    public function block_body($context, array $blocks = array())
    {
        $__internal_c81d93e36696a50cae3489915c8244f1a949dce5582f05ec42a0fdd607285318 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c81d93e36696a50cae3489915c8244f1a949dce5582f05ec42a0fdd607285318->enter($__internal_c81d93e36696a50cae3489915c8244f1a949dce5582f05ec42a0fdd607285318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_594748a08633b9a819b18b6409f69bdb3440333abbaf69567add350c7e11d1da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_594748a08633b9a819b18b6409f69bdb3440333abbaf69567add350c7e11d1da->enter($__internal_594748a08633b9a819b18b6409f69bdb3440333abbaf69567add350c7e11d1da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 87
        echo "            ";
        
        $__internal_594748a08633b9a819b18b6409f69bdb3440333abbaf69567add350c7e11d1da->leave($__internal_594748a08633b9a819b18b6409f69bdb3440333abbaf69567add350c7e11d1da_prof);

        
        $__internal_c81d93e36696a50cae3489915c8244f1a949dce5582f05ec42a0fdd607285318->leave($__internal_c81d93e36696a50cae3489915c8244f1a949dce5582f05ec42a0fdd607285318_prof);

    }

    // line 98
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c31f20ff9362df12774ce788ffffbbbac92b7608d2ab5572189af88fcea4cbf7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c31f20ff9362df12774ce788ffffbbbac92b7608d2ab5572189af88fcea4cbf7->enter($__internal_c31f20ff9362df12774ce788ffffbbbac92b7608d2ab5572189af88fcea4cbf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a34081484733a45d7d5824fe9ada00873ab876c4cfca0cde504dbfeed35ac4ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a34081484733a45d7d5824fe9ada00873ab876c4cfca0cde504dbfeed35ac4ab->enter($__internal_a34081484733a45d7d5824fe9ada00873ab876c4cfca0cde504dbfeed35ac4ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 99
        echo "    ";
        // line 100
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/js/materialize.min.js\"></script>
    <script>
        \$( document ).ready(function() {
            console.log( \"ready!\" );
            \$(\".dropdown-button\").dropdown({
                inDuration: 400,
                outDuration: 350,
                constrainWidth: false, // Does not change width of dropdown to that of the activator
                hover: true, // Activate on hover
                gutter: 0, // Spacing from edge
                belowOrigin: true, // Displays dropdown below the button
                alignment: 'left', // Displays dropdown with edge aligned to the left of button
                stopPropagation: false // Stops event propagation
            });
        });
    </script>
";
        
        $__internal_a34081484733a45d7d5824fe9ada00873ab876c4cfca0cde504dbfeed35ac4ab->leave($__internal_a34081484733a45d7d5824fe9ada00873ab876c4cfca0cde504dbfeed35ac4ab_prof);

        
        $__internal_c31f20ff9362df12774ce788ffffbbbac92b7608d2ab5572189af88fcea4cbf7->leave($__internal_c31f20ff9362df12774ce788ffffbbbac92b7608d2ab5572189af88fcea4cbf7_prof);

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
        return array (  297 => 100,  295 => 99,  286 => 98,  276 => 87,  267 => 86,  250 => 81,  238 => 15,  231 => 12,  229 => 11,  227 => 10,  218 => 9,  200 => 7,  188 => 119,  186 => 98,  179 => 94,  171 => 88,  169 => 86,  161 => 81,  153 => 75,  148 => 73,  145 => 72,  143 => 71,  140 => 70,  135 => 68,  132 => 67,  130 => 66,  125 => 64,  118 => 60,  105 => 49,  101 => 47,  95 => 45,  93 => 44,  87 => 40,  85 => 39,  74 => 29,  69 => 27,  64 => 26,  59 => 24,  54 => 23,  52 => 22,  45 => 17,  43 => 9,  38 => 7,  30 => 1,);
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
        {#<link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">#}
        <link rel=\"stylesheet\" href=\"{{ asset('css/Slate.css') }}\" />
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/css/materialize.min.css\">
        <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/main.css') }}\" />
    {% endblock %}
</head>

<body>
<div class=\"container\" style=\"width:100%; padding: 0\">
        <ul id=\"dropdown1\" class=\"dropdown-content\">
            {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                <li><a href=\"{{ path('fos_user_security_logout') }}\">logout</a></li>
                <li><a href=\"{{ path('fos_user_profile_edit') }}\">edit profil</a></li>
            {% else %}
                <li><a href=\"{{ path('fos_user_security_login') }}\">login</a></li>
                <li><a href=\"{{ path('fos_user_registration_register') }}\">register</a></li>
            {% endif %}
        </ul>
        <nav style=\"background-color: #444444\">
            <div class=\"nav-wrapper\">
                <div class=\"col-md-2 menu-head\">
                    <a href=\"#!\" class=\"brand-logo\">
                        <span style=\"font-size: 22px;\">OC-PLATFORM</span>
                    </a>
                </div>
                <ul class=\"right hide-on-med-and-down\">
                    {#<li><a href=\"sass.html\">Sass</a></li>#}
                    {#<li><a href=\"badges.html\">Components</a></li>#}
                    <!-- Dropdown Trigger -->
                    <li>
                        <a class=\"dropdown-button\" href=\"#!\" data-activates=\"dropdown1\">
                            <span class=\"user-dropdown\">
                                {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                                    {{ app.user.username }}
                                {% else %}
                                    visitor
                                {% endif %}
                                <i class=\"material-icons\">more_vert</i>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

    <div class=\"row\">
        <div id=\"menu\" class=\"col-md-2\"\">
            <div class=\"menu-span\">--- MENU GENERAL ---</div>
            {{ render(controller(\"OCPlatformBundle:Advert:menu\")) }}


            <div class=\"menu-span\">--- Dernières annonces ---</div>
            {{ render(controller(\"OCPlatformBundle:Advert:lastAnnonce\", {'limit': 3})) }}

            {% if is_granted('ROLE_SEARCH') %}
                <div class=\"menu-span\">--- Mes applications ---</div>
                {{ render(controller(\"OCPlatformBundle:Advert:lastApplication\", {'user': app.user})) }}
            {% endif %}

            {% if is_granted('ROLE_AUTEUR') %}
                <div class=\"menu-span\">--- Mes annonces ---</div>
                {{ render(controller(\"OCPlatformBundle:Advert:lastAdvert\", {'user': app.user})) }}
            {% endif %}


        </div>
        <div id=\"content\" class=\"col-md-9\">

            <div class=\"well title-page\">
                <span>{% block titlePage %}{% endblock %}</span>
            </div>

            <hr>

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
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/js/materialize.min.js\"></script>
    <script>
        \$( document ).ready(function() {
            console.log( \"ready!\" );
            \$(\".dropdown-button\").dropdown({
                inDuration: 400,
                outDuration: 350,
                constrainWidth: false, // Does not change width of dropdown to that of the activator
                hover: true, // Activate on hover
                gutter: 0, // Spacing from edge
                belowOrigin: true, // Displays dropdown below the button
                alignment: 'left', // Displays dropdown with edge aligned to the left of button
                stopPropagation: false // Stops event propagation
            });
        });
    </script>
{% endblock %}

</body>
</html>", "OCCoreBundle::layout.html.twig", "C:\\wamp64\\www\\Symfony\\src\\OC\\CoreBundle/Resources/views/layout.html.twig");
    }
}
