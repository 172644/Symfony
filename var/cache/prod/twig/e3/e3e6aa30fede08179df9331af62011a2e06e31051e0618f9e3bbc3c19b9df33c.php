<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_cbf99f6fd889ff6d69bf4e23e393d1b1d621307bef69548fd6368f34b75f720a extends Twig_Template
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
        $__internal_5a636282a8617ff56e64ca9b66ce309b9d02b443cf5408a600d5a8111301e3f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a636282a8617ff56e64ca9b66ce309b9d02b443cf5408a600d5a8111301e3f2->enter($__internal_5a636282a8617ff56e64ca9b66ce309b9d02b443cf5408a600d5a8111301e3f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_5a636282a8617ff56e64ca9b66ce309b9d02b443cf5408a600d5a8111301e3f2->leave($__internal_5a636282a8617ff56e64ca9b66ce309b9d02b443cf5408a600d5a8111301e3f2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.rdf.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
