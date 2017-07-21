<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_31c2858313b5d6b9067170515e89834dafa754d0bf89609e7fd8be061d94f081 extends Twig_Template
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
        $__internal_557aebecee11d9f0216c2b32349e4b67cf51ce355c8cdd0f6fe1c479aa797c15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_557aebecee11d9f0216c2b32349e4b67cf51ce355c8cdd0f6fe1c479aa797c15->enter($__internal_557aebecee11d9f0216c2b32349e4b67cf51ce355c8cdd0f6fe1c479aa797c15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_a7ab1fd5bf26989f274f391137cf57cb90359eb0f79da89f18b6794642013f2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7ab1fd5bf26989f274f391137cf57cb90359eb0f79da89f18b6794642013f2f->enter($__internal_a7ab1fd5bf26989f274f391137cf57cb90359eb0f79da89f18b6794642013f2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_557aebecee11d9f0216c2b32349e4b67cf51ce355c8cdd0f6fe1c479aa797c15->leave($__internal_557aebecee11d9f0216c2b32349e4b67cf51ce355c8cdd0f6fe1c479aa797c15_prof);

        
        $__internal_a7ab1fd5bf26989f274f391137cf57cb90359eb0f79da89f18b6794642013f2f->leave($__internal_a7ab1fd5bf26989f274f391137cf57cb90359eb0f79da89f18b6794642013f2f_prof);

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
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.atom.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
