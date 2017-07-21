<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_8f99e3f85d3bf61aafc4991f6639c28f065fece58b7211f922e6321a0a7a3ae9 extends Twig_Template
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
        $__internal_f8b3596ca9197d29f9699fbbdd913108d57dcafe464940576cb6eeacd411ec70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8b3596ca9197d29f9699fbbdd913108d57dcafe464940576cb6eeacd411ec70->enter($__internal_f8b3596ca9197d29f9699fbbdd913108d57dcafe464940576cb6eeacd411ec70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_f8b3596ca9197d29f9699fbbdd913108d57dcafe464940576cb6eeacd411ec70->leave($__internal_f8b3596ca9197d29f9699fbbdd913108d57dcafe464940576cb6eeacd411ec70_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
