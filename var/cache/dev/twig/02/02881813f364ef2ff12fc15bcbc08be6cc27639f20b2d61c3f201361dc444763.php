<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_d03bdc7e42b361c4b43d3f47e7a0827d46316d2ef81d37bc2c05d31f40a3722f extends Twig_Template
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
        $__internal_2528bcf77ae93041467b99e8197a8866605b483a0b0d3dbf8b2c71455dc4df41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2528bcf77ae93041467b99e8197a8866605b483a0b0d3dbf8b2c71455dc4df41->enter($__internal_2528bcf77ae93041467b99e8197a8866605b483a0b0d3dbf8b2c71455dc4df41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_484cc238f3cd4e076f8ecb015aa579121d464472ce58c9f58a60cb99927af17b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_484cc238f3cd4e076f8ecb015aa579121d464472ce58c9f58a60cb99927af17b->enter($__internal_484cc238f3cd4e076f8ecb015aa579121d464472ce58c9f58a60cb99927af17b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_2528bcf77ae93041467b99e8197a8866605b483a0b0d3dbf8b2c71455dc4df41->leave($__internal_2528bcf77ae93041467b99e8197a8866605b483a0b0d3dbf8b2c71455dc4df41_prof);

        
        $__internal_484cc238f3cd4e076f8ecb015aa579121d464472ce58c9f58a60cb99927af17b->leave($__internal_484cc238f3cd4e076f8ecb015aa579121d464472ce58c9f58a60cb99927af17b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
