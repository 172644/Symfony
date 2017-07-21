<?php

/* FOSUserBundle:Group:list_content.html.twig */
class __TwigTemplate_2bde8e289f44e04792e9b805b162ab34477b4b858873d3bb44bec3234987a4c5 extends Twig_Template
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
        $__internal_2030ffd423b36d71e7ef009cd4d61ceb160bd285f5ad74d8de968afaf8dd5842 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2030ffd423b36d71e7ef009cd4d61ceb160bd285f5ad74d8de968afaf8dd5842->enter($__internal_2030ffd423b36d71e7ef009cd4d61ceb160bd285f5ad74d8de968afaf8dd5842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

        $__internal_90e1c2b1424a4409f6399ef79d4990562839be62826bf857259f01aff761c52f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90e1c2b1424a4409f6399ef79d4990562839be62826bf857259f01aff761c52f->enter($__internal_90e1c2b1424a4409f6399ef79d4990562839be62826bf857259f01aff761c52f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

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
        
        $__internal_2030ffd423b36d71e7ef009cd4d61ceb160bd285f5ad74d8de968afaf8dd5842->leave($__internal_2030ffd423b36d71e7ef009cd4d61ceb160bd285f5ad74d8de968afaf8dd5842_prof);

        
        $__internal_90e1c2b1424a4409f6399ef79d4990562839be62826bf857259f01aff761c52f->leave($__internal_90e1c2b1424a4409f6399ef79d4990562839be62826bf857259f01aff761c52f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list_content.html.twig";
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
", "FOSUserBundle:Group:list_content.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/list_content.html.twig");
    }
}
