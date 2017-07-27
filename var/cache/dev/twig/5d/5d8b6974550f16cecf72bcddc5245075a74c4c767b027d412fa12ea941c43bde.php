<?php

/* OCPlatformBundle:Advert:menu.html.twig */
class __TwigTemplate_cee077617037426a3a183ec995dbd2f43f2a24a9ebf5bd13e18639a933856e69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_57863a29014a40059db90a61d876f70d225a411a39fd6fda180de46fdd5974f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57863a29014a40059db90a61d876f70d225a411a39fd6fda180de46fdd5974f1->enter($__internal_57863a29014a40059db90a61d876f70d225a411a39fd6fda180de46fdd5974f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:menu.html.twig"));

        $__internal_3c7c5bedae4dd2998ff0a71ac19faf76ac36c1681c592f306e6ada538d548aca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c7c5bedae4dd2998ff0a71ac19faf76ac36c1681c592f306e6ada538d548aca->enter($__internal_3c7c5bedae4dd2998ff0a71ac19faf76ac36c1681c592f306e6ada538d548aca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:menu.html.twig"));

        // line 1
        echo "<ul class=\"nav nav-pills nav-stacked\">
    ";
        // line 2
        if (array_key_exists("listAdverts", $context)) {
            // line 3
            echo "        ";
            if ((twig_length_filter($this->env, (isset($context["listAdverts"]) || array_key_exists("listAdverts", $context) ? $context["listAdverts"] : (function () { throw new Twig_Error_Runtime('Variable "listAdverts" does not exist.', 3, $this->getSourceContext()); })())) >= 1)) {
                // line 4
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["listAdverts"]) || array_key_exists("listAdverts", $context) ? $context["listAdverts"] : (function () { throw new Twig_Error_Runtime('Variable "listAdverts" does not exist.', 4, $this->getSourceContext()); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
                    // line 5
                    echo "                <li>
                    <a href=\"";
                    // line 6
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_view", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "id", array()))), "html", null, true);
                    echo "\">
                        ";
                    // line 7
                    if (array_key_exists("showNumber", $context)) {
                        // line 8
                        echo "                            ";
                        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "title", array()) . " [") . twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "nbApplications", array())) . "]"), "html", null, true);
                        echo "
                        ";
                    } else {
                        // line 10
                        echo "                            ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "title", array()), "html", null, true);
                        echo "
                        ";
                    }
                    // line 12
                    echo "                    </a>
                </li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 15
                echo "        ";
            } else {
                // line 16
                echo "            <div class=\"menu-span\">[ AUCUNE ]</div>
        ";
            }
            // line 18
            echo "    ";
        }
        // line 19
        echo "
    ";
        // line 20
        if (array_key_exists("listMenu", $context)) {
            // line 21
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listMenu"]) || array_key_exists("listMenu", $context) ? $context["listMenu"] : (function () { throw new Twig_Error_Runtime('Variable "listMenu" does not exist.', 21, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                // line 22
                echo "            <li>
                <a href=\"";
                // line 23
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["menu"], "url", array()), "html", null, true);
                echo "\">
                    ";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["menu"], "title", array()), "html", null, true);
                echo "
                </a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "
        ";
            // line 29
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                // line 30
                echo "            <li><a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
                echo "\">Profil</a></li>
            <li><a href=\"";
                // line 31
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
                echo "\">Déconnexion</a></li>
        ";
            } else {
                // line 33
                echo "            <li><a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
                echo "\">Connexion</a></li>
        ";
            }
            // line 35
            echo "    ";
        }
        // line 36
        echo "</ul>";
        
        $__internal_57863a29014a40059db90a61d876f70d225a411a39fd6fda180de46fdd5974f1->leave($__internal_57863a29014a40059db90a61d876f70d225a411a39fd6fda180de46fdd5974f1_prof);

        
        $__internal_3c7c5bedae4dd2998ff0a71ac19faf76ac36c1681c592f306e6ada538d548aca->leave($__internal_3c7c5bedae4dd2998ff0a71ac19faf76ac36c1681c592f306e6ada538d548aca_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 36,  125 => 35,  119 => 33,  114 => 31,  109 => 30,  107 => 29,  104 => 28,  94 => 24,  90 => 23,  87 => 22,  82 => 21,  80 => 20,  77 => 19,  74 => 18,  70 => 16,  67 => 15,  59 => 12,  53 => 10,  47 => 8,  45 => 7,  41 => 6,  38 => 5,  33 => 4,  30 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<ul class=\"nav nav-pills nav-stacked\">
    {% if listAdverts is defined %}
        {% if listAdverts|length >= 1 %}
            {% for advert in listAdverts %}
                <li>
                    <a href=\"{{ path('oc_platform_view', {'id': advert.id}) }}\">
                        {% if showNumber is defined %}
                            {{ advert.title ~ \" [\" ~ advert.nbApplications ~ \"]\" }}
                        {%  else %}
                            {{ advert.title }}
                        {% endif %}
                    </a>
                </li>
            {% endfor %}
        {% else %}
            <div class=\"menu-span\">[ AUCUNE ]</div>
        {% endif %}
    {% endif %}

    {% if listMenu is defined %}
        {% for menu in listMenu %}
            <li>
                <a href=\"{{ menu.url }}\">
                    {{ menu.title }}
                </a>
            </li>
        {% endfor %}

        {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
            <li><a href=\"{{ path('fos_user_profile_edit') }}\">Profil</a></li>
            <li><a href=\"{{ path('fos_user_security_logout') }}\">Déconnexion</a></li>
        {% else %}
            <li><a href=\"{{ path('fos_user_security_login') }}\">Connexion</a></li>
        {% endif %}
    {% endif %}
</ul>", "OCPlatformBundle:Advert:menu.html.twig", "C:\\wamp64\\www\\Symfony\\src\\OC\\PlatformBundle/Resources/views/Advert/menu.html.twig");
    }
}
