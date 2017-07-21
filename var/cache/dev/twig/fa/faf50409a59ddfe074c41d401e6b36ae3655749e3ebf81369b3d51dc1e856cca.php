<?php

/* @FOSUser/Group/new_content.html.twig */
class __TwigTemplate_722ce8fef142b7639557989acf89067239372ef14f90ad56025fa35ed9a0738a extends Twig_Template
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
        $__internal_d19eb33cbb2b4898bda5a17351e700fdb7771618fd7da60f73912d383e6e4ba1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d19eb33cbb2b4898bda5a17351e700fdb7771618fd7da60f73912d383e6e4ba1->enter($__internal_d19eb33cbb2b4898bda5a17351e700fdb7771618fd7da60f73912d383e6e4ba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new_content.html.twig"));

        $__internal_729fe4b5bac6ee6a86a78bfd342130dbde4186cb8262d2e1107d5651df450fcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_729fe4b5bac6ee6a86a78bfd342130dbde4186cb8262d2e1107d5651df450fcf->enter($__internal_729fe4b5bac6ee6a86a78bfd342130dbde4186cb8262d2e1107d5651df450fcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_new"), "attr" => array("class" => "fos_user_group_new")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->getSourceContext()); })()), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.new.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), 'form_end');
        echo "
";
        
        $__internal_d19eb33cbb2b4898bda5a17351e700fdb7771618fd7da60f73912d383e6e4ba1->leave($__internal_d19eb33cbb2b4898bda5a17351e700fdb7771618fd7da60f73912d383e6e4ba1_prof);

        
        $__internal_729fe4b5bac6ee6a86a78bfd342130dbde4186cb8262d2e1107d5651df450fcf->leave($__internal_729fe4b5bac6ee6a86a78bfd342130dbde4186cb8262d2e1107d5651df450fcf_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  37 => 6,  32 => 4,  28 => 3,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{{ form_start(form, { 'action': path('fos_user_group_new'), 'attr': { 'class': 'fos_user_group_new' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'group.new.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "@FOSUser/Group/new_content.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\new_content.html.twig");
    }
}
