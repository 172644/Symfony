<?php

/* @Twig/Exception/error.html.twig */
class __TwigTemplate_118da5d4d941c22eaff728b97f1ca1f71bc2c9d3c64e658c1a945520fd209269 extends Twig_Template
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
        $__internal_d26c42342753f3ca6d447d150a392e7f81235bcec3748871725ad513aec3574e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d26c42342753f3ca6d447d150a392e7f81235bcec3748871725ad513aec3574e->enter($__internal_d26c42342753f3ca6d447d150a392e7f81235bcec3748871725ad513aec3574e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.html.twig"));

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
        
        $__internal_d26c42342753f3ca6d447d150a392e7f81235bcec3748871725ad513aec3574e->leave($__internal_d26c42342753f3ca6d447d150a392e7f81235bcec3748871725ad513aec3574e_prof);

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
        return array (  35 => 9,  28 => 5,  22 => 1,);
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
