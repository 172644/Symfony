<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_5864c0a57d38f78894976321ff29e494e6975257d131250e94bc3e1132a3ecbf extends Twig_Template
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
        $__internal_d1b6d734065c809085ee8b654b5945a21014ade76f1ba14dd09855ed2af682bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1b6d734065c809085ee8b654b5945a21014ade76f1ba14dd09855ed2af682bb->enter($__internal_d1b6d734065c809085ee8b654b5945a21014ade76f1ba14dd09855ed2af682bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_fa58663e2b30b5c601a9bec52cdb898b5ec73e6b161305b03401c5f72003f4f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa58663e2b30b5c601a9bec52cdb898b5ec73e6b161305b03401c5f72003f4f8->enter($__internal_fa58663e2b30b5c601a9bec52cdb898b5ec73e6b161305b03401c5f72003f4f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 4, $this->getSourceContext()); })());
        echo " ";
        echo (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 4, $this->getSourceContext()); })());
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_d1b6d734065c809085ee8b654b5945a21014ade76f1ba14dd09855ed2af682bb->leave($__internal_d1b6d734065c809085ee8b654b5945a21014ade76f1ba14dd09855ed2af682bb_prof);

        
        $__internal_fa58663e2b30b5c601a9bec52cdb898b5ec73e6b161305b03401c5f72003f4f8->leave($__internal_fa58663e2b30b5c601a9bec52cdb898b5ec73e6b161305b03401c5f72003f4f8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.txt.twig");
    }
}
