<?php

/* @OCPlatform/Advert/translation.html.twig */
class __TwigTemplate_0b87b759f8a513686d89b2c460dcb224359c6a0b59fceca59e4f78f0e307d29e extends Twig_Template
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
        $__internal_89a50880f047567f00f2b7499e833b2778970072e890d436a3ea85e1329415c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89a50880f047567f00f2b7499e833b2778970072e890d436a3ea85e1329415c0->enter($__internal_89a50880f047567f00f2b7499e833b2778970072e890d436a3ea85e1329415c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCPlatform/Advert/translation.html.twig"));

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
        
        $__internal_89a50880f047567f00f2b7499e833b2778970072e890d436a3ea85e1329415c0->leave($__internal_89a50880f047567f00f2b7499e833b2778970072e890d436a3ea85e1329415c0_prof);

    }

    public function getTemplateName()
    {
        return "@OCPlatform/Advert/translation.html.twig";
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
</html>", "@OCPlatform/Advert/translation.html.twig", "C:\\wamp64\\www\\Symfony\\src\\OC\\PlatformBundle\\Resources\\views\\Advert\\translation.html.twig");
    }
}
