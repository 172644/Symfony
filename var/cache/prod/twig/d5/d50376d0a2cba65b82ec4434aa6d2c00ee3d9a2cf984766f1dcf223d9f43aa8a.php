<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_25051c4fd152522296a430195a0187e85343e713fd379c5b8d640999338756cb extends Twig_Template
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
        $__internal_2dfab45ae3032ae391d578337e99ce5fb9fd7507cf604d75f8e30ab65573f9a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dfab45ae3032ae391d578337e99ce5fb9fd7507cf604d75f8e30ab65573f9a6->enter($__internal_2dfab45ae3032ae391d578337e99ce5fb9fd7507cf604d75f8e30ab65573f9a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_2dfab45ae3032ae391d578337e99ce5fb9fd7507cf604d75f8e30ab65573f9a6->leave($__internal_2dfab45ae3032ae391d578337e99ce5fb9fd7507cf604d75f8e30ab65573f9a6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
