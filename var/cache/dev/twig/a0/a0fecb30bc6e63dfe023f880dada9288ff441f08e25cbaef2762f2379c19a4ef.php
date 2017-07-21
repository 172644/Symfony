<?php

/* @FOSUser/Resetting/reset_content.html.twig */
class __TwigTemplate_9ef282aff9bd3be72d3150ebc1a55fdba85adc462923fde2624d65d19392bb22 extends Twig_Template
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
        $__internal_c51f19516e2f585be613f28564d01abd6f7be5e23034ca6d106318dfbc76c9d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c51f19516e2f585be613f28564d01abd6f7be5e23034ca6d106318dfbc76c9d0->enter($__internal_c51f19516e2f585be613f28564d01abd6f7be5e23034ca6d106318dfbc76c9d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset_content.html.twig"));

        $__internal_86715c1829bc79581f51125f381eee303950e4cb6919d3f7bec9d8c27bbc2111 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86715c1829bc79581f51125f381eee303950e4cb6919d3f7bec9d8c27bbc2111->enter($__internal_86715c1829bc79581f51125f381eee303950e4cb6919d3f7bec9d8c27bbc2111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_reset", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 3, $this->getSourceContext()); })()))), "attr" => array("class" => "fos_user_resetting_reset")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->getSourceContext()); })()), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.reset.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), 'form_end');
        echo "
";
        
        $__internal_c51f19516e2f585be613f28564d01abd6f7be5e23034ca6d106318dfbc76c9d0->leave($__internal_c51f19516e2f585be613f28564d01abd6f7be5e23034ca6d106318dfbc76c9d0_prof);

        
        $__internal_86715c1829bc79581f51125f381eee303950e4cb6919d3f7bec9d8c27bbc2111->leave($__internal_86715c1829bc79581f51125f381eee303950e4cb6919d3f7bec9d8c27bbc2111_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset_content.html.twig";
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

{{ form_start(form, { 'action': path('fos_user_resetting_reset', {'token': token}), 'attr': { 'class': 'fos_user_resetting_reset' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'resetting.reset.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "@FOSUser/Resetting/reset_content.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\reset_content.html.twig");
    }
}
