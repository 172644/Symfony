<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_a29b7f47e9ec90dfacff3fdfb235d616487707a1032f0187c9575370bcb4b4c2 extends Twig_Template
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
        $__internal_979eb443bf3e0d4d80e3b5c574aa3e7a01c002ad72b5ddf0749490ddc5c9df81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_979eb443bf3e0d4d80e3b5c574aa3e7a01c002ad72b5ddf0749490ddc5c9df81->enter($__internal_979eb443bf3e0d4d80e3b5c574aa3e7a01c002ad72b5ddf0749490ddc5c9df81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_979eb443bf3e0d4d80e3b5c574aa3e7a01c002ad72b5ddf0749490ddc5c9df81->leave($__internal_979eb443bf3e0d4d80e3b5c574aa3e7a01c002ad72b5ddf0749490ddc5c9df81_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
