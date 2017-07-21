<?php

/* @OCPlatform/Advert/menu.html.twig */
class __TwigTemplate_b9669622a54d9b251b704abb18638b798fa79a44ec20243f7d9f318a8f42fc11 extends Twig_Template
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
        $__internal_3a70adba8ac14de785d1b42d95f086260105370739be388b7aec8360d0ba2ab2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a70adba8ac14de785d1b42d95f086260105370739be388b7aec8360d0ba2ab2->enter($__internal_3a70adba8ac14de785d1b42d95f086260105370739be388b7aec8360d0ba2ab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCPlatform/Advert/menu.html.twig"));

        $__internal_9d0aef1c038ea8e227d4db045fb936231b41b9ee5f6b09a21a7317512d6146a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d0aef1c038ea8e227d4db045fb936231b41b9ee5f6b09a21a7317512d6146a0->enter($__internal_9d0aef1c038ea8e227d4db045fb936231b41b9ee5f6b09a21a7317512d6146a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCPlatform/Advert/menu.html.twig"));

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
        
        $__internal_3a70adba8ac14de785d1b42d95f086260105370739be388b7aec8360d0ba2ab2->leave($__internal_3a70adba8ac14de785d1b42d95f086260105370739be388b7aec8360d0ba2ab2_prof);

        
        $__internal_9d0aef1c038ea8e227d4db045fb936231b41b9ee5f6b09a21a7317512d6146a0->leave($__internal_9d0aef1c038ea8e227d4db045fb936231b41b9ee5f6b09a21a7317512d6146a0_prof);

    }

    public function getTemplateName()
    {
        return "@OCPlatform/Advert/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 25,  94 => 24,  84 => 20,  80 => 19,  77 => 18,  72 => 17,  70 => 16,  67 => 15,  64 => 14,  56 => 11,  50 => 9,  44 => 7,  42 => 6,  38 => 5,  35 => 4,  30 => 3,  28 => 2,  25 => 1,);
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
</ul>", "@OCPlatform/Advert/menu.html.twig", "C:\\wamp64\\www\\Symfony\\src\\OC\\PlatformBundle\\Resources\\views\\Advert\\menu.html.twig");
    }
}
