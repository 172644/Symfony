<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_550fd2655e0d2a42415382807f42fb487e33e3596d2480526d3922392ff75eaf extends Twig_Template
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
        $__internal_c82ba52cbbde5defcbbbefbe5497cfed19f41c8158724ec436ffb78ffa815a48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c82ba52cbbde5defcbbbefbe5497cfed19f41c8158724ec436ffb78ffa815a48->enter($__internal_c82ba52cbbde5defcbbbefbe5497cfed19f41c8158724ec436ffb78ffa815a48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_3138277bc65e7e43c0b933e208c14136862a0ecdd413e258064f0a5d33c5a369 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3138277bc65e7e43c0b933e208c14136862a0ecdd413e258064f0a5d33c5a369->enter($__internal_3138277bc65e7e43c0b933e208c14136862a0ecdd413e258064f0a5d33c5a369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />
";
        
        $__internal_c82ba52cbbde5defcbbbefbe5497cfed19f41c8158724ec436ffb78ffa815a48->leave($__internal_c82ba52cbbde5defcbbbefbe5497cfed19f41c8158724ec436ffb78ffa815a48_prof);

        
        $__internal_3138277bc65e7e43c0b933e208c14136862a0ecdd413e258064f0a5d33c5a369->leave($__internal_3138277bc65e7e43c0b933e208c14136862a0ecdd413e258064f0a5d33c5a369_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.xml.twig");
    }
}
