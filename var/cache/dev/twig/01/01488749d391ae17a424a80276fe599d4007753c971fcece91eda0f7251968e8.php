<?php

/* @FOSUser/Resetting/request_content.html.twig */
class __TwigTemplate_731c242308ca159e815e5b0de2fac3e15a40209917559700d9e66f7a6ec92a7c extends Twig_Template
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
        $__internal_dee2a8d86345fdcc7867b6c7d414e1a6a4472adffff38e46cecd6b22c32f4f2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dee2a8d86345fdcc7867b6c7d414e1a6a4472adffff38e46cecd6b22c32f4f2a->enter($__internal_dee2a8d86345fdcc7867b6c7d414e1a6a4472adffff38e46cecd6b22c32f4f2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request_content.html.twig"));

        $__internal_8b9adb5aa336be1194123acc4f492ca445db319dc52585a3d9c8955c3ba48ccd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b9adb5aa336be1194123acc4f492ca445db319dc52585a3d9c8955c3ba48ccd->enter($__internal_8b9adb5aa336be1194123acc4f492ca445db319dc52585a3d9c8955c3ba48ccd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request_content.html.twig"));

        // line 2
        echo "
<form action=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        <label for=\"username\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_dee2a8d86345fdcc7867b6c7d414e1a6a4472adffff38e46cecd6b22c32f4f2a->leave($__internal_dee2a8d86345fdcc7867b6c7d414e1a6a4472adffff38e46cecd6b22c32f4f2a_prof);

        
        $__internal_8b9adb5aa336be1194123acc4f492ca445db319dc52585a3d9c8955c3ba48ccd->leave($__internal_8b9adb5aa336be1194123acc4f492ca445db319dc52585a3d9c8955c3ba48ccd_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 9,  33 => 5,  28 => 3,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<form action=\"{{ path('fos_user_resetting_send_email') }}\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        <label for=\"username\">{{ 'resetting.request.username'|trans }}</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"{{ 'resetting.request.submit'|trans }}\" />
    </div>
</form>
", "@FOSUser/Resetting/request_content.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\request_content.html.twig");
    }
}
