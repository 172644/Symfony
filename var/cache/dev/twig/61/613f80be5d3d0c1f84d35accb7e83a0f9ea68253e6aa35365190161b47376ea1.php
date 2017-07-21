<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_cb5393b1c41f5ea97351a144913ed97db61c33b435b67975a8847aa31f18b58a extends Twig_Template
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
        $__internal_c6a84ee1db47daeb8bb6c835fb75cb6e9c452f2392b65d3f88c7f67ad9fc682e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6a84ee1db47daeb8bb6c835fb75cb6e9c452f2392b65d3f88c7f67ad9fc682e->enter($__internal_c6a84ee1db47daeb8bb6c835fb75cb6e9c452f2392b65d3f88c7f67ad9fc682e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_71e50dfe41b60e01a9ceb4eab11e6a598d482aa8dfc5ed2d13a2d6159344dcd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71e50dfe41b60e01a9ceb4eab11e6a598d482aa8dfc5ed2d13a2d6159344dcd3->enter($__internal_71e50dfe41b60e01a9ceb4eab11e6a598d482aa8dfc5ed2d13a2d6159344dcd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_c6a84ee1db47daeb8bb6c835fb75cb6e9c452f2392b65d3f88c7f67ad9fc682e->leave($__internal_c6a84ee1db47daeb8bb6c835fb75cb6e9c452f2392b65d3f88c7f67ad9fc682e_prof);

        
        $__internal_71e50dfe41b60e01a9ceb4eab11e6a598d482aa8dfc5ed2d13a2d6159344dcd3->leave($__internal_71e50dfe41b60e01a9ceb4eab11e6a598d482aa8dfc5ed2d13a2d6159344dcd3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
", "@Twig/Exception/error.json.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.json.twig");
    }
}
