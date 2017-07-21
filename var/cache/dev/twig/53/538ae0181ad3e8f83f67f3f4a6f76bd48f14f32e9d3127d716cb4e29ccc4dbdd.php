<?php

/* @FOSUser/Profile/edit_content.html.twig */
class __TwigTemplate_f1382216070351f9daeb6b1627875bf55a8387f1d7744a1d185751a005bc2198 extends Twig_Template
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
        $__internal_a33994cdbb5d975b001a7221fbb53720f5620d47e5ddf6e6d736e515dd70b9af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a33994cdbb5d975b001a7221fbb53720f5620d47e5ddf6e6d736e515dd70b9af->enter($__internal_a33994cdbb5d975b001a7221fbb53720f5620d47e5ddf6e6d736e515dd70b9af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit_content.html.twig"));

        $__internal_d58bba7ce78f3a32a84b76b2d16c89d5f554f2b9d2c0f0922ca22efae6da0f2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d58bba7ce78f3a32a84b76b2d16c89d5f554f2b9d2c0f0922ca22efae6da0f2b->enter($__internal_d58bba7ce78f3a32a84b76b2d16c89d5f554f2b9d2c0f0922ca22efae6da0f2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit"), "attr" => array("class" => "fos_user_profile_edit")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->getSourceContext()); })()), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), 'form_end');
        echo "
";
        
        $__internal_a33994cdbb5d975b001a7221fbb53720f5620d47e5ddf6e6d736e515dd70b9af->leave($__internal_a33994cdbb5d975b001a7221fbb53720f5620d47e5ddf6e6d736e515dd70b9af_prof);

        
        $__internal_d58bba7ce78f3a32a84b76b2d16c89d5f554f2b9d2c0f0922ca22efae6da0f2b->leave($__internal_d58bba7ce78f3a32a84b76b2d16c89d5f554f2b9d2c0f0922ca22efae6da0f2b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit_content.html.twig";
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

{{ form_start(form, { 'action': path('fos_user_profile_edit'), 'attr': { 'class': 'fos_user_profile_edit' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'profile.edit.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "@FOSUser/Profile/edit_content.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Profile\\edit_content.html.twig");
    }
}
