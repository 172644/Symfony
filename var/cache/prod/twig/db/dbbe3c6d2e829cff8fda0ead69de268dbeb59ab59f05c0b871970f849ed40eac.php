<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_ff0a9ad4c9977b19fa031d22c95e6808e15bfba0aa3165361e929dff7eeda788 extends Twig_Template
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
        $__internal_f97423f16eb2ec05b1e171892e5b111278176f09b22d37ceb6b3a45c0e2dc98e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f97423f16eb2ec05b1e171892e5b111278176f09b22d37ceb6b3a45c0e2dc98e->enter($__internal_f97423f16eb2ec05b1e171892e5b111278176f09b22d37ceb6b3a45c0e2dc98e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_f97423f16eb2ec05b1e171892e5b111278176f09b22d37ceb6b3a45c0e2dc98e->leave($__internal_f97423f16eb2ec05b1e171892e5b111278176f09b22d37ceb6b3a45c0e2dc98e_prof);

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
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.atom.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
