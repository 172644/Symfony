<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_9ad0c8d4cb9041b4e948aaa673e1c20e96ea88a4928f7e2c7173951038709e64 extends Twig_Template
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
        $__internal_eab6c664401ec51d8a8ff867a524d0e13533a3e88bd92d62ef6d0965365c8f20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eab6c664401ec51d8a8ff867a524d0e13533a3e88bd92d62ef6d0965365c8f20->enter($__internal_eab6c664401ec51d8a8ff867a524d0e13533a3e88bd92d62ef6d0965365c8f20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_687b85708e159febc50315594b4213e5be201eb8a05f8f7b67c0b1dec15e2b14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_687b85708e159febc50315594b4213e5be201eb8a05f8f7b67c0b1dec15e2b14->enter($__internal_687b85708e159febc50315594b4213e5be201eb8a05f8f7b67c0b1dec15e2b14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_eab6c664401ec51d8a8ff867a524d0e13533a3e88bd92d62ef6d0965365c8f20->leave($__internal_eab6c664401ec51d8a8ff867a524d0e13533a3e88bd92d62ef6d0965365c8f20_prof);

        
        $__internal_687b85708e159febc50315594b4213e5be201eb8a05f8f7b67c0b1dec15e2b14->leave($__internal_687b85708e159febc50315594b4213e5be201eb8a05f8f7b67c0b1dec15e2b14_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
", "@Twig/Exception/exception.atom.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
