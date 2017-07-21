<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_07e85e01bda558b45b681c2ca667f24771efefd95c89e1d958cd0054944dc959 extends Twig_Template
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
        $__internal_999e59ed097b01040b5bca098ff3fe795b127bf007b9d5184f0707b511c1379c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_999e59ed097b01040b5bca098ff3fe795b127bf007b9d5184f0707b511c1379c->enter($__internal_999e59ed097b01040b5bca098ff3fe795b127bf007b9d5184f0707b511c1379c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_7509ef990de07182958f419fba66797ae0bb2bb64ffd06398e248e37cf9007ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7509ef990de07182958f419fba66797ae0bb2bb64ffd06398e248e37cf9007ba->enter($__internal_7509ef990de07182958f419fba66797ae0bb2bb64ffd06398e248e37cf9007ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_999e59ed097b01040b5bca098ff3fe795b127bf007b9d5184f0707b511c1379c->leave($__internal_999e59ed097b01040b5bca098ff3fe795b127bf007b9d5184f0707b511c1379c_prof);

        
        $__internal_7509ef990de07182958f419fba66797ae0bb2bb64ffd06398e248e37cf9007ba->leave($__internal_7509ef990de07182958f419fba66797ae0bb2bb64ffd06398e248e37cf9007ba_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
", "@Twig/Exception/exception.json.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.json.twig");
    }
}
