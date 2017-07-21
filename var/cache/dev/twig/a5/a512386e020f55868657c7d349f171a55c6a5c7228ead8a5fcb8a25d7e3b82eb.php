<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_3fcce607d64ea32d853231654d3679f031be92d24b4cc62f354b4ed8dab64190 extends Twig_Template
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
        $__internal_552749344055a53110830c14f5f167553d60cf1f5338b53e30bdb5c8ade02871 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_552749344055a53110830c14f5f167553d60cf1f5338b53e30bdb5c8ade02871->enter($__internal_552749344055a53110830c14f5f167553d60cf1f5338b53e30bdb5c8ade02871_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_554396f973346d1cd8e04a3c2e4579a6f486437bcad796597b01a8ec333eac98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_554396f973346d1cd8e04a3c2e4579a6f486437bcad796597b01a8ec333eac98->enter($__internal_554396f973346d1cd8e04a3c2e4579a6f486437bcad796597b01a8ec333eac98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_552749344055a53110830c14f5f167553d60cf1f5338b53e30bdb5c8ade02871->leave($__internal_552749344055a53110830c14f5f167553d60cf1f5338b53e30bdb5c8ade02871_prof);

        
        $__internal_554396f973346d1cd8e04a3c2e4579a6f486437bcad796597b01a8ec333eac98->leave($__internal_554396f973346d1cd8e04a3c2e4579a6f486437bcad796597b01a8ec333eac98_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
