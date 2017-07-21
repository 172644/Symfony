<?php

/* @FOSUser/ChangePassword/change_password_content.html.twig */
class __TwigTemplate_d4669f8dd8bd950d90f01b654dea08f24ba596c46158da0ef2d4e143e75357f8 extends Twig_Template
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
        $__internal_cda412015183f978be455c705c073f1565e997157c61289cf576b607645a08de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cda412015183f978be455c705c073f1565e997157c61289cf576b607645a08de->enter($__internal_cda412015183f978be455c705c073f1565e997157c61289cf576b607645a08de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password_content.html.twig"));

        $__internal_0676b511742c236005c8baa71f1fb5e8e9892468cb906440c9611834dee9b17e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0676b511742c236005c8baa71f1fb5e8e9892468cb906440c9611834dee9b17e->enter($__internal_0676b511742c236005c8baa71f1fb5e8e9892468cb906440c9611834dee9b17e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password"), "attr" => array("class" => "fos_user_change_password")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->getSourceContext()); })()), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("change_password.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), 'form_end');
        echo "
";
        
        $__internal_cda412015183f978be455c705c073f1565e997157c61289cf576b607645a08de->leave($__internal_cda412015183f978be455c705c073f1565e997157c61289cf576b607645a08de_prof);

        
        $__internal_0676b511742c236005c8baa71f1fb5e8e9892468cb906440c9611834dee9b17e->leave($__internal_0676b511742c236005c8baa71f1fb5e8e9892468cb906440c9611834dee9b17e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/change_password_content.html.twig";
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

{{ form_start(form, { 'action': path('fos_user_change_password'), 'attr': { 'class': 'fos_user_change_password' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'change_password.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "@FOSUser/ChangePassword/change_password_content.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\ChangePassword\\change_password_content.html.twig");
    }
}
