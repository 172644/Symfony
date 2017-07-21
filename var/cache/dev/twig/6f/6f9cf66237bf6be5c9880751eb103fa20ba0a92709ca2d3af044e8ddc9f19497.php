<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_d3c3113f85ca9a44d964c78b38e3db18bec39785796d08765feb9f589930ce6f extends Twig_Template
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
        $__internal_5f3055fde64e014d862c69e85e1f8d1e40a2bce81900585adef16f05c05f6143 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f3055fde64e014d862c69e85e1f8d1e40a2bce81900585adef16f05c05f6143->enter($__internal_5f3055fde64e014d862c69e85e1f8d1e40a2bce81900585adef16f05c05f6143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_9a9ae20e05da9020757d63f35af95748a4250b2a198b8924c5b66b7e1e53872e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a9ae20e05da9020757d63f35af95748a4250b2a198b8924c5b66b7e1e53872e->enter($__internal_9a9ae20e05da9020757d63f35af95748a4250b2a198b8924c5b66b7e1e53872e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_5f3055fde64e014d862c69e85e1f8d1e40a2bce81900585adef16f05c05f6143->leave($__internal_5f3055fde64e014d862c69e85e1f8d1e40a2bce81900585adef16f05c05f6143_prof);

        
        $__internal_9a9ae20e05da9020757d63f35af95748a4250b2a198b8924c5b66b7e1e53872e->leave($__internal_9a9ae20e05da9020757d63f35af95748a4250b2a198b8924c5b66b7e1e53872e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
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
", "@WebProfiler/Profiler/header.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
