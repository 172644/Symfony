<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_f6ebadc59ef41930b16e2e5fc5754f9f8d777d7a18d16be8e2630c865d5855ae extends Twig_Template
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
        $__internal_4a3d7fda65fe8b451e431a212842acc7f3a54e06c09e333b7baa19881fcaa287 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a3d7fda65fe8b451e431a212842acc7f3a54e06c09e333b7baa19881fcaa287->enter($__internal_4a3d7fda65fe8b451e431a212842acc7f3a54e06c09e333b7baa19881fcaa287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_e85a064acda2379130d47f4f122b23703c507df97931d62f7c443394c0ed40bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e85a064acda2379130d47f4f122b23703c507df97931d62f7c443394c0ed40bb->enter($__internal_e85a064acda2379130d47f4f122b23703c507df97931d62f7c443394c0ed40bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo "

*/
";
        
        $__internal_4a3d7fda65fe8b451e431a212842acc7f3a54e06c09e333b7baa19881fcaa287->leave($__internal_4a3d7fda65fe8b451e431a212842acc7f3a54e06c09e333b7baa19881fcaa287_prof);

        
        $__internal_e85a064acda2379130d47f4f122b23703c507df97931d62f7c443394c0ed40bb->leave($__internal_e85a064acda2379130d47f4f122b23703c507df97931d62f7c443394c0ed40bb_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.js.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.js.twig");
    }
}
