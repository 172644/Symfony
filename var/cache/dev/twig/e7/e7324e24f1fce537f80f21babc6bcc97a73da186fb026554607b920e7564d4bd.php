<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_2f57871bba7db4438ec24e1d37de28c5801bfe50ccf952da4c816db650798993 extends Twig_Template
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
        $__internal_0e4c368123f7fdaae112a02e40647ef23ada74875b303fe4dfc469acdcd5f387 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e4c368123f7fdaae112a02e40647ef23ada74875b303fe4dfc469acdcd5f387->enter($__internal_0e4c368123f7fdaae112a02e40647ef23ada74875b303fe4dfc469acdcd5f387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_64c26f9a57e4f3ff50c1e86f9865cac526687e9350776f49028782300b453006 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64c26f9a57e4f3ff50c1e86f9865cac526687e9350776f49028782300b453006->enter($__internal_64c26f9a57e4f3ff50c1e86f9865cac526687e9350776f49028782300b453006_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_0e4c368123f7fdaae112a02e40647ef23ada74875b303fe4dfc469acdcd5f387->leave($__internal_0e4c368123f7fdaae112a02e40647ef23ada74875b303fe4dfc469acdcd5f387_prof);

        
        $__internal_64c26f9a57e4f3ff50c1e86f9865cac526687e9350776f49028782300b453006->leave($__internal_64c26f9a57e4f3ff50c1e86f9865cac526687e9350776f49028782300b453006_prof);

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
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.rdf.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
