<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_b027149d6458e5a728cf91b5d206934b1debef381b446173fa2dbfcbaabdd4d4 extends Twig_Template
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
        $__internal_67a1f083ccfff185df47791f4df84ecce01ab281157e1c39ed72e55d64fe4bf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67a1f083ccfff185df47791f4df84ecce01ab281157e1c39ed72e55d64fe4bf1->enter($__internal_67a1f083ccfff185df47791f4df84ecce01ab281157e1c39ed72e55d64fe4bf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_67a1f083ccfff185df47791f4df84ecce01ab281157e1c39ed72e55d64fe4bf1->leave($__internal_67a1f083ccfff185df47791f4df84ecce01ab281157e1c39ed72e55d64fe4bf1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
", "@Twig/Exception/error.rdf.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
