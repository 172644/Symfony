<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_e6645cac2ef1774d9e674259c06ceb6d5556e6229a3d60c3c0af7da00819ed30 extends Twig_Template
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
        $__internal_19d1200a8152e01c8fdb633c522bfba2c77f63f383ecc94f60f62d5a2e608a43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19d1200a8152e01c8fdb633c522bfba2c77f63f383ecc94f60f62d5a2e608a43->enter($__internal_19d1200a8152e01c8fdb633c522bfba2c77f63f383ecc94f60f62d5a2e608a43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_19d1200a8152e01c8fdb633c522bfba2c77f63f383ecc94f60f62d5a2e608a43->leave($__internal_19d1200a8152e01c8fdb633c522bfba2c77f63f383ecc94f60f62d5a2e608a43_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.css.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
