<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_2e0e71f59980ceb767d6f416c7b10884faa50c55f05dcf6648a4fa999c0116a1 extends Twig_Template
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
        $__internal_a15f703edc2e46d44b8ce008c03c3b4368688dc8de766427e40eba5d8bdd95e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a15f703edc2e46d44b8ce008c03c3b4368688dc8de766427e40eba5d8bdd95e4->enter($__internal_a15f703edc2e46d44b8ce008c03c3b4368688dc8de766427e40eba5d8bdd95e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_e177ce80f92ff46f00c34028d973b15a44bcbe4ba95e391b63a86bad651cb27f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e177ce80f92ff46f00c34028d973b15a44bcbe4ba95e391b63a86bad651cb27f->enter($__internal_e177ce80f92ff46f00c34028d973b15a44bcbe4ba95e391b63a86bad651cb27f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_a15f703edc2e46d44b8ce008c03c3b4368688dc8de766427e40eba5d8bdd95e4->leave($__internal_a15f703edc2e46d44b8ce008c03c3b4368688dc8de766427e40eba5d8bdd95e4_prof);

        
        $__internal_e177ce80f92ff46f00c34028d973b15a44bcbe4ba95e391b63a86bad651cb27f->leave($__internal_e177ce80f92ff46f00c34028d973b15a44bcbe4ba95e391b63a86bad651cb27f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.js.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
