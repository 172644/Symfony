<?php

/* @FOSUser/Group/list_content.html.twig */
class __TwigTemplate_e781236c7986cf7be17a077f0decc73da5a66e6676aa5b39f3368efc983b9334 extends Twig_Template
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
        $__internal_428582316bd7700ea597fe0655a23118bccbda67e93a0e3db2c37475c7762f63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_428582316bd7700ea597fe0655a23118bccbda67e93a0e3db2c37475c7762f63->enter($__internal_428582316bd7700ea597fe0655a23118bccbda67e93a0e3db2c37475c7762f63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list_content.html.twig"));

        $__internal_5249a2880ee441eb73b5b7cb4579af1d2de7f73c8bd71833d256ecd1e354174b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5249a2880ee441eb73b5b7cb4579af1d2de7f73c8bd71833d256ecd1e354174b->enter($__internal_5249a2880ee441eb73b5b7cb4579af1d2de7f73c8bd71833d256ecd1e354174b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list_content.html.twig"));

        // line 1
        echo "<div class=\"fos_user_group_list\">
    <ul>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) || array_key_exists("groups", $context) ? $context["groups"] : (function () { throw new Twig_Error_Runtime('Variable "groups" does not exist.', 3, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 4
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_show", array("groupName" => twig_get_attribute($this->env, $this->getSourceContext(), $context["group"], "getName", array(), "method"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["group"], "getName", array(), "method"), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "    </ul>
</div>
";
        
        $__internal_428582316bd7700ea597fe0655a23118bccbda67e93a0e3db2c37475c7762f63->leave($__internal_428582316bd7700ea597fe0655a23118bccbda67e93a0e3db2c37475c7762f63_prof);

        
        $__internal_5249a2880ee441eb73b5b7cb4579af1d2de7f73c8bd71833d256ecd1e354174b->leave($__internal_5249a2880ee441eb73b5b7cb4579af1d2de7f73c8bd71833d256ecd1e354174b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  33 => 4,  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"fos_user_group_list\">
    <ul>
    {% for group in groups %}
        <li><a href=\"{{ path('fos_user_group_show', {'groupName': group.getName()} ) }}\">{{ group.getName() }}</a></li>
    {% endfor %}
    </ul>
</div>
", "@FOSUser/Group/list_content.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\list_content.html.twig");
    }
}
