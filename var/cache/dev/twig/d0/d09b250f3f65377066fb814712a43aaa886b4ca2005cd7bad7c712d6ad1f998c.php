<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_a4244880f6ec002c9906cb40c0c09debf8403120ca03de005254c721e18b3cf2 extends Twig_Template
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
        $__internal_ef38a31ed5e81103341ce029ecf4688e9f3842cf92804892f93685d018654eb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef38a31ed5e81103341ce029ecf4688e9f3842cf92804892f93685d018654eb7->enter($__internal_ef38a31ed5e81103341ce029ecf4688e9f3842cf92804892f93685d018654eb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_6cfd9d9b3cac3a367aa999321197cc625a9c33412ee66acad8e8af5a91b8d3aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cfd9d9b3cac3a367aa999321197cc625a9c33412ee66acad8e8af5a91b8d3aa->enter($__internal_6cfd9d9b3cac3a367aa999321197cc625a9c33412ee66acad8e8af5a91b8d3aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_ef38a31ed5e81103341ce029ecf4688e9f3842cf92804892f93685d018654eb7->leave($__internal_ef38a31ed5e81103341ce029ecf4688e9f3842cf92804892f93685d018654eb7_prof);

        
        $__internal_6cfd9d9b3cac3a367aa999321197cc625a9c33412ee66acad8e8af5a91b8d3aa->leave($__internal_6cfd9d9b3cac3a367aa999321197cc625a9c33412ee66acad8e8af5a91b8d3aa_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
