<?php

/* OCPlatformBundle:Advert:menu.html.twig */
class __TwigTemplate_e4f25af4a6bf8a3d35d3631f413b87093bd78e043e005e3d8bbc812d2d1e0df5 extends Twig_Template
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
        $__internal_0101a942d730ddf3cec808678104177ad5fbcea83e9de10da690150164d98644 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0101a942d730ddf3cec808678104177ad5fbcea83e9de10da690150164d98644->enter($__internal_0101a942d730ddf3cec808678104177ad5fbcea83e9de10da690150164d98644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:menu.html.twig"));

        // line 1
        echo "<ul class=\"nav nav-pills nav-stacked\">
    ";
        // line 2
        if (array_key_exists("listAdverts", $context)) {
            // line 3
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listAdverts"]) || array_key_exists("listAdverts", $context) ? $context["listAdverts"] : (function () { throw new Twig_Error_Runtime('Variable "listAdverts" does not exist.', 3, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
                // line 4
                echo "            <li>
                <a href=\"";
                // line 5
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_view", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "id", array()))), "html", null, true);
                echo "\">
                    ";
                // line 6
                if (array_key_exists("showNumber", $context)) {
                    // line 7
                    echo "                        ";
                    echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "title", array()) . " [") . twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "nbApplications", array())) . "]"), "html", null, true);
                    echo "
                    ";
                } else {
                    // line 9
                    echo "                        ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "title", array()), "html", null, true);
                    echo "
                    ";
                }
                // line 11
                echo "                </a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "    ";
        }
        // line 15
        echo "
    ";
        // line 16
        if (array_key_exists("listMenu", $context)) {
            // line 17
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listMenu"]) || array_key_exists("listMenu", $context) ? $context["listMenu"] : (function () { throw new Twig_Error_Runtime('Variable "listMenu" does not exist.', 17, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                // line 18
                echo "            <li>
                <a href=\"";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["menu"], "url", array()), "html", null, true);
                echo "\">
                    ";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["menu"], "title", array()), "html", null, true);
                echo "
                </a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "    ";
        }
        // line 25
        echo "</ul>";
        
        $__internal_0101a942d730ddf3cec808678104177ad5fbcea83e9de10da690150164d98644->leave($__internal_0101a942d730ddf3cec808678104177ad5fbcea83e9de10da690150164d98644_prof);

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
        return array (  94 => 25,  91 => 24,  81 => 20,  77 => 19,  74 => 18,  69 => 17,  67 => 16,  64 => 15,  61 => 14,  53 => 11,  47 => 9,  41 => 7,  39 => 6,  35 => 5,  32 => 4,  27 => 3,  25 => 2,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<ul class=\"nav nav-pills nav-stacked\">
    {% if listAdverts is defined %}
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
    {% endif %}

    {% if listMenu is defined %}
        {% for menu in listMenu %}
            <li>
                <a href=\"{{ menu.url }}\">
                    {{ menu.title }}
                </a>
            </li>
        {% endfor %}
    {% endif %}
</ul>", "OCPlatformBundle:Advert:menu.html.twig", "C:\\wamp64\\www\\Symfony\\src\\OC\\PlatformBundle/Resources/views/Advert/menu.html.twig");
    }
}
