<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_084562f190cd251742049a1d2db583bad14ac2a43c0245654dd9c39ae381b109 extends Twig_Template
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
        $__internal_c30fdd7c5c439ce33676109b132f3b93dc1a317f041e47c165fb61cb5b0fce15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c30fdd7c5c439ce33676109b132f3b93dc1a317f041e47c165fb61cb5b0fce15->enter($__internal_c30fdd7c5c439ce33676109b132f3b93dc1a317f041e47c165fb61cb5b0fce15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_c30fdd7c5c439ce33676109b132f3b93dc1a317f041e47c165fb61cb5b0fce15->leave($__internal_c30fdd7c5c439ce33676109b132f3b93dc1a317f041e47c165fb61cb5b0fce15_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
