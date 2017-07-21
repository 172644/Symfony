<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_97f6822c88b82192205ed37d22156718ac99ec2960ba157d59ebfb1a4bc75390 extends Twig_Template
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
        $__internal_b87943b5f80c1fc18cb8c7176829eb10f808fb17f9940fc5328b5d400737aeeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b87943b5f80c1fc18cb8c7176829eb10f808fb17f9940fc5328b5d400737aeeb->enter($__internal_b87943b5f80c1fc18cb8c7176829eb10f808fb17f9940fc5328b5d400737aeeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_4ee3b532761f8cdd1e8a931e08d203522970e57437e4476b1afb9e1ce8a911f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ee3b532761f8cdd1e8a931e08d203522970e57437e4476b1afb9e1ce8a911f9->enter($__internal_4ee3b532761f8cdd1e8a931e08d203522970e57437e4476b1afb9e1ce8a911f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_b87943b5f80c1fc18cb8c7176829eb10f808fb17f9940fc5328b5d400737aeeb->leave($__internal_b87943b5f80c1fc18cb8c7176829eb10f808fb17f9940fc5328b5d400737aeeb_prof);

        
        $__internal_4ee3b532761f8cdd1e8a931e08d203522970e57437e4476b1afb9e1ce8a911f9->leave($__internal_4ee3b532761f8cdd1e8a931e08d203522970e57437e4476b1afb9e1ce8a911f9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
