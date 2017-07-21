<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_10194013028331d2a62a8de0ee0c8b4c8b107243c45616224e1dd25b4a9e1f8b extends Twig_Template
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
        $__internal_0e04e3fcb037b4e82677c9057b303bada0845d809dc8b540001d70fa21239473 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e04e3fcb037b4e82677c9057b303bada0845d809dc8b540001d70fa21239473->enter($__internal_0e04e3fcb037b4e82677c9057b303bada0845d809dc8b540001d70fa21239473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_1bac34f7ba699ffbbb3cc1d66c8acd6e6671fcef42514d000c5cf60d467657c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bac34f7ba699ffbbb3cc1d66c8acd6e6671fcef42514d000c5cf60d467657c4->enter($__internal_1bac34f7ba699ffbbb3cc1d66c8acd6e6671fcef42514d000c5cf60d467657c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_0e04e3fcb037b4e82677c9057b303bada0845d809dc8b540001d70fa21239473->leave($__internal_0e04e3fcb037b4e82677c9057b303bada0845d809dc8b540001d70fa21239473_prof);

        
        $__internal_1bac34f7ba699ffbbb3cc1d66c8acd6e6671fcef42514d000c5cf60d467657c4->leave($__internal_1bac34f7ba699ffbbb3cc1d66c8acd6e6671fcef42514d000c5cf60d467657c4_prof);

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
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.atom.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
