<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_e9f7fee885ac05485b77504c4856b2a60de8b2fbf7deb70cded9d2922218f70d extends Twig_Template
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
        $__internal_573007cd5918bf1e42fb18663b58d91aee59c21d2d906c5d13dbc49a49ca7446 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_573007cd5918bf1e42fb18663b58d91aee59c21d2d906c5d13dbc49a49ca7446->enter($__internal_573007cd5918bf1e42fb18663b58d91aee59c21d2d906c5d13dbc49a49ca7446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_104c567578b904e6e38392d4d1f2dfe8f32de129e8fb45bca449bf832de34e11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_104c567578b904e6e38392d4d1f2dfe8f32de129e8fb45bca449bf832de34e11->enter($__internal_104c567578b904e6e38392d4d1f2dfe8f32de129e8fb45bca449bf832de34e11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo "

*/
";
        
        $__internal_573007cd5918bf1e42fb18663b58d91aee59c21d2d906c5d13dbc49a49ca7446->leave($__internal_573007cd5918bf1e42fb18663b58d91aee59c21d2d906c5d13dbc49a49ca7446_prof);

        
        $__internal_104c567578b904e6e38392d4d1f2dfe8f32de129e8fb45bca449bf832de34e11->leave($__internal_104c567578b904e6e38392d4d1f2dfe8f32de129e8fb45bca449bf832de34e11_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
