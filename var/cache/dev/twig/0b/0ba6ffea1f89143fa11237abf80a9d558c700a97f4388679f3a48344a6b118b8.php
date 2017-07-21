<?php

/* FOSUserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_69b2624f3b0a048f4e7bb00bd6dd00efa28d60eedbc3e6784c9223b971d87e4f extends Twig_Template
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
        $__internal_f0e963b630e427330c853aa0bb13ccdd2ad0d622dbd2d8c747fcda479194525a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0e963b630e427330c853aa0bb13ccdd2ad0d622dbd2d8c747fcda479194525a->enter($__internal_f0e963b630e427330c853aa0bb13ccdd2ad0d622dbd2d8c747fcda479194525a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        $__internal_57290fcce9456616e15e9683a0f0fb5ab933ac3c553c46d55ae800db905af0ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57290fcce9456616e15e9683a0f0fb5ab933ac3c553c46d55ae800db905af0ed->enter($__internal_57290fcce9456616e15e9683a0f0fb5ab933ac3c553c46d55ae800db905af0ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

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
        
        $__internal_f0e963b630e427330c853aa0bb13ccdd2ad0d622dbd2d8c747fcda479194525a->leave($__internal_f0e963b630e427330c853aa0bb13ccdd2ad0d622dbd2d8c747fcda479194525a_prof);

        
        $__internal_57290fcce9456616e15e9683a0f0fb5ab933ac3c553c46d55ae800db905af0ed->leave($__internal_57290fcce9456616e15e9683a0f0fb5ab933ac3c553c46d55ae800db905af0ed_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request_content.html.twig";
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
", "FOSUserBundle:Resetting:request_content.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/request_content.html.twig");
    }
}
