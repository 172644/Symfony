<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_d855c7d46166245e2c2fe3f9f01622e7861ac436aba252fc7608c540f76858e2 extends Twig_Template
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
        $__internal_ed850b376f2eb027d70663d7dc31b17ee179d3142ff90d55c25f8caaee29f664 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed850b376f2eb027d70663d7dc31b17ee179d3142ff90d55c25f8caaee29f664->enter($__internal_ed850b376f2eb027d70663d7dc31b17ee179d3142ff90d55c25f8caaee29f664_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_ed850b376f2eb027d70663d7dc31b17ee179d3142ff90d55c25f8caaee29f664->leave($__internal_ed850b376f2eb027d70663d7dc31b17ee179d3142ff90d55c25f8caaee29f664_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
