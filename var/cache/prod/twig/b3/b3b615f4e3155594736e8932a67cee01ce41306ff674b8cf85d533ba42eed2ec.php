<?php

/* OCPlatformBundle:Advert:translation.html.twig */
class __TwigTemplate_9676205e1e5841d8c8f2f14d6f61653693d5478b0bec4f3558c8aa6db105f0b2 extends Twig_Template
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
        $__internal_5bf3c8eed361349f3e08b8b361d724e597257966e227767324a9d4342e84bd29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bf3c8eed361349f3e08b8b361d724e597257966e227767324a9d4342e84bd29->enter($__internal_5bf3c8eed361349f3e08b8b361d724e597257966e227767324a9d4342e84bd29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:translation.html.twig"));

        // line 1
        echo "<html>
    <body>
        <br />
        <br />
        ";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Hello"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 5, $this->getSourceContext()); })()), "html", null, true);
        echo "!
    </body>
</html>";
        
        $__internal_5bf3c8eed361349f3e08b8b361d724e597257966e227767324a9d4342e84bd29->leave($__internal_5bf3c8eed361349f3e08b8b361d724e597257966e227767324a9d4342e84bd29_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:translation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 5,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
    <body>
        <br />
        <br />
        {{ 'Hello'|trans }} {{ name }}!
    </body>
</html>", "OCPlatformBundle:Advert:translation.html.twig", "C:\\wamp64\\www\\Symfony\\src\\OC\\PlatformBundle/Resources/views/Advert/translation.html.twig");
    }
}
