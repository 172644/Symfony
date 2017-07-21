<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_12b44678dab88bb34a1b9f0c7eb3f4389e41bc17f7d6fb6927fe0e4ef21b2b09 extends Twig_Template
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
        $__internal_185480bd9adad4723b22669d94c210c23bf607e897979a8710eaa2089c3d2e40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_185480bd9adad4723b22669d94c210c23bf607e897979a8710eaa2089c3d2e40->enter($__internal_185480bd9adad4723b22669d94c210c23bf607e897979a8710eaa2089c3d2e40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_ed469400def1899e856a74a1cb7075378000a82bd8635459ac59f18057ce9f70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed469400def1899e856a74a1cb7075378000a82bd8635459ac59f18057ce9f70->enter($__internal_ed469400def1899e856a74a1cb7075378000a82bd8635459ac59f18057ce9f70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new Twig_Error_Runtime('Variable "group" does not exist.', 4, $this->getSourceContext()); })()), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_185480bd9adad4723b22669d94c210c23bf607e897979a8710eaa2089c3d2e40->leave($__internal_185480bd9adad4723b22669d94c210c23bf607e897979a8710eaa2089c3d2e40_prof);

        
        $__internal_ed469400def1899e856a74a1cb7075378000a82bd8635459ac59f18057ce9f70->leave($__internal_ed469400def1899e856a74a1cb7075378000a82bd8635459ac59f18057ce9f70_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "FOSUserBundle:Group:show_content.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/show_content.html.twig");
    }
}
