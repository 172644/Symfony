<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_2eea39cb4fec2d67af25c3053a2a67d294724f71ef94f6ad235700c8f3e42b42 extends Twig_Template
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
        $__internal_5199e55452084de5c0f31f601ef7bfc611d4e027ed99869fa76b4c8b718d17ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5199e55452084de5c0f31f601ef7bfc611d4e027ed99869fa76b4c8b718d17ac->enter($__internal_5199e55452084de5c0f31f601ef7bfc611d4e027ed99869fa76b4c8b718d17ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_cc63f98a94a97b37826a4db72ec34c80ecff02e5f37e79e28ed585f5d9dc6841 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc63f98a94a97b37826a4db72ec34c80ecff02e5f37e79e28ed585f5d9dc6841->enter($__internal_cc63f98a94a97b37826a4db72ec34c80ecff02e5f37e79e28ed585f5d9dc6841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_5199e55452084de5c0f31f601ef7bfc611d4e027ed99869fa76b4c8b718d17ac->leave($__internal_5199e55452084de5c0f31f601ef7bfc611d4e027ed99869fa76b4c8b718d17ac_prof);

        
        $__internal_cc63f98a94a97b37826a4db72ec34c80ecff02e5f37e79e28ed585f5d9dc6841->leave($__internal_cc63f98a94a97b37826a4db72ec34c80ecff02e5f37e79e28ed585f5d9dc6841_prof);

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
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.atom.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
