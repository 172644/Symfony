<?php

/* @Twig/Exception/error.html.twig */
class __TwigTemplate_bfd5b666ad5a6d19947f21f7900a20783c5c9e43886e2b8eb8bac3373a6714cc extends Twig_Template
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
        $__internal_20e0d18609fcce934e23b8a76fc9a65ea964135e809ca892d3c2939be6efcdb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20e0d18609fcce934e23b8a76fc9a65ea964135e809ca892d3c2939be6efcdb0->enter($__internal_20e0d18609fcce934e23b8a76fc9a65ea964135e809ca892d3c2939be6efcdb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.html.twig"));

        $__internal_5ff68b51ff18a9cd45705bd8019384c657c0709719cb9ffdbe85fb23a0f5413e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ff68b51ff18a9cd45705bd8019384c657c0709719cb9ffdbe85fb23a0f5413e->enter($__internal_5ff68b51ff18a9cd45705bd8019384c657c0709719cb9ffdbe85fb23a0f5413e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <title>An Error Occurred: ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 5, $this->getSourceContext()); })()), "html", null, true);
        echo "</title>
</head>
<body>
<h1>Oops ! An Error Occurred</h1>
<h2>The server returned a \"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 9, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 9, $this->getSourceContext()); })()), "html", null, true);
        echo "\".</h2>

<div>
    Something is broken. Please e-mail us at [email] and let us know
    what you were doing when this error occurred. We will fix it as soon
    as possible. Sorry for any inconvenience caused.
</div>
</body>
</html>";
        
        $__internal_20e0d18609fcce934e23b8a76fc9a65ea964135e809ca892d3c2939be6efcdb0->leave($__internal_20e0d18609fcce934e23b8a76fc9a65ea964135e809ca892d3c2939be6efcdb0_prof);

        
        $__internal_5ff68b51ff18a9cd45705bd8019384c657c0709719cb9ffdbe85fb23a0f5413e->leave($__internal_5ff68b51ff18a9cd45705bd8019384c657c0709719cb9ffdbe85fb23a0f5413e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 9,  31 => 5,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <title>An Error Occurred: {{ status_text }}</title>
</head>
<body>
<h1>Oops ! An Error Occurred</h1>
<h2>The server returned a \"{{ status_code }} {{ status_text }}\".</h2>

<div>
    Something is broken. Please e-mail us at [email] and let us know
    what you were doing when this error occurred. We will fix it as soon
    as possible. Sorry for any inconvenience caused.
</div>
</body>
</html>", "@Twig/Exception/error.html.twig", "C:\\wamp64\\www\\Symfony\\app\\Resources\\TwigBundle\\views\\Exception\\error.html.twig");
    }
}
