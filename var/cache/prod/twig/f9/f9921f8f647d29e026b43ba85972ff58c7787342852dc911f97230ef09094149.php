<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_ace677761898db48964c9e4f2d8480eddcbe309a1418be365bd1e6314cbcfa7c extends Twig_Template
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
        $__internal_3c45b92006efe48ce9132af5b7a8920d79f4d0352612c927e813fcb20354e851 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c45b92006efe48ce9132af5b7a8920d79f4d0352612c927e813fcb20354e851->enter($__internal_3c45b92006efe48ce9132af5b7a8920d79f4d0352612c927e813fcb20354e851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_3c45b92006efe48ce9132af5b7a8920d79f4d0352612c927e813fcb20354e851->leave($__internal_3c45b92006efe48ce9132af5b7a8920d79f4d0352612c927e813fcb20354e851_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
