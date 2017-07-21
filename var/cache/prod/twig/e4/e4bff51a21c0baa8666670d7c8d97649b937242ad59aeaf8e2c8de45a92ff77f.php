<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_cc54ab4954c71036b7d61067dec53abc20481c0a00f36e040b63ffe47d4fed3a extends Twig_Template
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
        $__internal_aaa16eba2168412b925497a329a12f1d3e49d23bbb7d46494104ba2b80208893 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaa16eba2168412b925497a329a12f1d3e49d23bbb7d46494104ba2b80208893->enter($__internal_aaa16eba2168412b925497a329a12f1d3e49d23bbb7d46494104ba2b80208893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_aaa16eba2168412b925497a329a12f1d3e49d23bbb7d46494104ba2b80208893->leave($__internal_aaa16eba2168412b925497a329a12f1d3e49d23bbb7d46494104ba2b80208893_prof);

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
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
