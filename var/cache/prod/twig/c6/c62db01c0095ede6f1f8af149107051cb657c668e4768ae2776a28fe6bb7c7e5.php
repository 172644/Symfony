<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_eff98ae5483a5053aa93586824c3ef82aeb748d7a42f9f43f2822640c7aa9d8e extends Twig_Template
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
        $__internal_275776e20e3130d110b22865cc300fa51ff9d98e1671d4963675dbbf6e4ce01b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_275776e20e3130d110b22865cc300fa51ff9d98e1671d4963675dbbf6e4ce01b->enter($__internal_275776e20e3130d110b22865cc300fa51ff9d98e1671d4963675dbbf6e4ce01b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_275776e20e3130d110b22865cc300fa51ff9d98e1671d4963675dbbf6e4ce01b->leave($__internal_275776e20e3130d110b22865cc300fa51ff9d98e1671d4963675dbbf6e4ce01b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.css.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
