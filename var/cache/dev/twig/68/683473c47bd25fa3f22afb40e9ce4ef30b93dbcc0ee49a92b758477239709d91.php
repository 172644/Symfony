<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_8e54e6a74883504a59cdcbc5fcaf901a6d543aa1c0ba608a29e1a6a3b6e2f9d2 extends Twig_Template
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
        $__internal_3b2b5175553c09c8ee97a2e567c045c48ddef2ba022f08376d31d3de165461f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b2b5175553c09c8ee97a2e567c045c48ddef2ba022f08376d31d3de165461f4->enter($__internal_3b2b5175553c09c8ee97a2e567c045c48ddef2ba022f08376d31d3de165461f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_c29b32f0f793856bbf3c5baa827edaab0de0303478fdd581fe05ffb5a421c718 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c29b32f0f793856bbf3c5baa827edaab0de0303478fdd581fe05ffb5a421c718->enter($__internal_c29b32f0f793856bbf3c5baa827edaab0de0303478fdd581fe05ffb5a421c718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_3b2b5175553c09c8ee97a2e567c045c48ddef2ba022f08376d31d3de165461f4->leave($__internal_3b2b5175553c09c8ee97a2e567c045c48ddef2ba022f08376d31d3de165461f4_prof);

        
        $__internal_c29b32f0f793856bbf3c5baa827edaab0de0303478fdd581fe05ffb5a421c718->leave($__internal_c29b32f0f793856bbf3c5baa827edaab0de0303478fdd581fe05ffb5a421c718_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.css.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
