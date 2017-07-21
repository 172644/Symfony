<?php

/* OCPlatformBundle:Advert:menu.html.twig */
class __TwigTemplate_3c616884c45964b6005eea4180cc90eeac133be53842a655b970357fb1934736 extends Twig_Template
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
        // line 1
        echo "<ul class=\"nav nav-pills nav-stacked\">
    ";
        // line 2
        if (array_key_exists("listAdverts", $context)) {
            // line 3
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["listAdverts"] ?? null));
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
            $context['_seq'] = twig_ensure_traversable(($context["listMenu"] ?? null));
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
        return array (  91 => 25,  88 => 24,  78 => 20,  74 => 19,  71 => 18,  66 => 17,  64 => 16,  61 => 15,  58 => 14,  50 => 11,  44 => 9,  38 => 7,  36 => 6,  32 => 5,  29 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OCPlatformBundle:Advert:menu.html.twig", "C:\\wamp64\\www\\Symfony\\src\\OC\\PlatformBundle\\Resources\\views\\Advert\\menu.html.twig");
    }
}
