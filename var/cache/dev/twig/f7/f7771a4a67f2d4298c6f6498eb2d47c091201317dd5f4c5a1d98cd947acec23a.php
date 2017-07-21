<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_4e91b9c5368b979c3e339ba1cb0767b0ffd1460d55a38a06f0a00a7b3cfbfd89 extends Twig_Template
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
        $__internal_a3a82f2f339445f01c1c4f87174fdbeb9e25efb2a1b5a3dc329bfab52364fccf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3a82f2f339445f01c1c4f87174fdbeb9e25efb2a1b5a3dc329bfab52364fccf->enter($__internal_a3a82f2f339445f01c1c4f87174fdbeb9e25efb2a1b5a3dc329bfab52364fccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_7eda756d0d79f67f6dce346f91b2df62d36e26cfe5bd4c7cf883c235a33a066c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7eda756d0d79f67f6dce346f91b2df62d36e26cfe5bd4c7cf883c235a33a066c->enter($__internal_7eda756d0d79f67f6dce346f91b2df62d36e26cfe5bd4c7cf883c235a33a066c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_a3a82f2f339445f01c1c4f87174fdbeb9e25efb2a1b5a3dc329bfab52364fccf->leave($__internal_a3a82f2f339445f01c1c4f87174fdbeb9e25efb2a1b5a3dc329bfab52364fccf_prof);

        
        $__internal_7eda756d0d79f67f6dce346f91b2df62d36e26cfe5bd4c7cf883c235a33a066c->leave($__internal_7eda756d0d79f67f6dce346f91b2df62d36e26cfe5bd4c7cf883c235a33a066c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.rdf.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
