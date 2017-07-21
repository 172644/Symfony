<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_3b6c2af27579519cbe759a9389e0b7ae78dec5c52f45d9b5a07880bf1862853d extends Twig_Template
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
        $__internal_c0a50ba2f0f6ae4002c12d76cf37e5cd8c219f55b3e79a7b80dc437989dfdec9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0a50ba2f0f6ae4002c12d76cf37e5cd8c219f55b3e79a7b80dc437989dfdec9->enter($__internal_c0a50ba2f0f6ae4002c12d76cf37e5cd8c219f55b3e79a7b80dc437989dfdec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_b4e440b1c978aa0c995d5f63bd7edf5a64da538311c85ada5763b0d2c74e792a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4e440b1c978aa0c995d5f63bd7edf5a64da538311c85ada5763b0d2c74e792a->enter($__internal_b4e440b1c978aa0c995d5f63bd7edf5a64da538311c85ada5763b0d2c74e792a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_c0a50ba2f0f6ae4002c12d76cf37e5cd8c219f55b3e79a7b80dc437989dfdec9->leave($__internal_c0a50ba2f0f6ae4002c12d76cf37e5cd8c219f55b3e79a7b80dc437989dfdec9_prof);

        
        $__internal_b4e440b1c978aa0c995d5f63bd7edf5a64da538311c85ada5763b0d2c74e792a->leave($__internal_b4e440b1c978aa0c995d5f63bd7edf5a64da538311c85ada5763b0d2c74e792a_prof);

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
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
