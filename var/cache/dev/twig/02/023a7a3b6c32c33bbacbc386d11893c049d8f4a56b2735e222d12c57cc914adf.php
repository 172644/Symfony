<?php

/* @FOSUser/Group/edit_content.html.twig */
class __TwigTemplate_145dac8b044f9128f3c35d1964a1fa884faba74be39620b028e55dd847706d06 extends Twig_Template
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
        $__internal_3fca9f64cff9d12610476c44056e1fb69f6a4dc2e5165eff24ffedb7c2809269 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fca9f64cff9d12610476c44056e1fb69f6a4dc2e5165eff24ffedb7c2809269->enter($__internal_3fca9f64cff9d12610476c44056e1fb69f6a4dc2e5165eff24ffedb7c2809269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit_content.html.twig"));

        $__internal_4c59b016e3fe07e54d76ef1adcb4c371fcabf2f054080ae6f42c2e7461c13eca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c59b016e3fe07e54d76ef1adcb4c371fcabf2f054080ae6f42c2e7461c13eca->enter($__internal_4c59b016e3fe07e54d76ef1adcb4c371fcabf2f054080ae6f42c2e7461c13eca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_edit", array("groupName" => (isset($context["group_name"]) || array_key_exists("group_name", $context) ? $context["group_name"] : (function () { throw new Twig_Error_Runtime('Variable "group_name" does not exist.', 3, $this->getSourceContext()); })()))), "attr" => array("class" => "fos_user_group_edit")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->getSourceContext()); })()), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), 'form_end');
        echo "
";
        
        $__internal_3fca9f64cff9d12610476c44056e1fb69f6a4dc2e5165eff24ffedb7c2809269->leave($__internal_3fca9f64cff9d12610476c44056e1fb69f6a4dc2e5165eff24ffedb7c2809269_prof);

        
        $__internal_4c59b016e3fe07e54d76ef1adcb4c371fcabf2f054080ae6f42c2e7461c13eca->leave($__internal_4c59b016e3fe07e54d76ef1adcb4c371fcabf2f054080ae6f42c2e7461c13eca_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit_content.html.twig";
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

{{ form_start(form, { 'action': path('fos_user_group_edit', {'groupName': group_name}), 'attr': { 'class': 'fos_user_group_edit' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'group.edit.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "@FOSUser/Group/edit_content.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\edit_content.html.twig");
    }
}
