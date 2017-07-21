<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_64ce43c0b949628c7fdfa01413b0e66cfc28074eadde505f2ca8ca7a30176301 extends Twig_Template
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
        $__internal_c2a84a77c501d0b5418aa84321471e03ae68b28560e818f86e448b87f0d679bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2a84a77c501d0b5418aa84321471e03ae68b28560e818f86e448b87f0d679bb->enter($__internal_c2a84a77c501d0b5418aa84321471e03ae68b28560e818f86e448b87f0d679bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_b5f336bf1dea88f7ad7516601fddc35c668dda68111f3e420adcb28d5d7d5f8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5f336bf1dea88f7ad7516601fddc35c668dda68111f3e420adcb28d5d7d5f8b->enter($__internal_b5f336bf1dea88f7ad7516601fddc35c668dda68111f3e420adcb28d5d7d5f8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo "

*/
";
        
        $__internal_c2a84a77c501d0b5418aa84321471e03ae68b28560e818f86e448b87f0d679bb->leave($__internal_c2a84a77c501d0b5418aa84321471e03ae68b28560e818f86e448b87f0d679bb_prof);

        
        $__internal_b5f336bf1dea88f7ad7516601fddc35c668dda68111f3e420adcb28d5d7d5f8b->leave($__internal_b5f336bf1dea88f7ad7516601fddc35c668dda68111f3e420adcb28d5d7d5f8b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
", "@Twig/Exception/error.css.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.css.twig");
    }
}
