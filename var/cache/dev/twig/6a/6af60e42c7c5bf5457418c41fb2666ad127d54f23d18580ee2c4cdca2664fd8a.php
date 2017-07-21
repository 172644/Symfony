<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_682830364a9abf77f1a859ed0c3866349f4c6193ce80d015750bfda49b819a53 extends Twig_Template
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
        $__internal_837ba6b05de52d775bb4f24e96de08db9bab2fe5ba82923118edb8621c70bb52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_837ba6b05de52d775bb4f24e96de08db9bab2fe5ba82923118edb8621c70bb52->enter($__internal_837ba6b05de52d775bb4f24e96de08db9bab2fe5ba82923118edb8621c70bb52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_579c99876640736e37a98613be539026e87a7311437f0eddfa662142275f1fc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_579c99876640736e37a98613be539026e87a7311437f0eddfa662142275f1fc7->enter($__internal_579c99876640736e37a98613be539026e87a7311437f0eddfa662142275f1fc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_837ba6b05de52d775bb4f24e96de08db9bab2fe5ba82923118edb8621c70bb52->leave($__internal_837ba6b05de52d775bb4f24e96de08db9bab2fe5ba82923118edb8621c70bb52_prof);

        
        $__internal_579c99876640736e37a98613be539026e87a7311437f0eddfa662142275f1fc7->leave($__internal_579c99876640736e37a98613be539026e87a7311437f0eddfa662142275f1fc7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
