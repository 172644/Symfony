<?php

/* TwigBundle:Exception:error404.html.twig */
class __TwigTemplate_0479d7f8cf76654c28b514a2b25b0eba4aa0efcb80e551786de7dbdbf9a49d63 extends Twig_Template
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
        $__internal_0486c0d7bb89f309ec64d5a943ddaead6e1709635516e2cd7d400645514548f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0486c0d7bb89f309ec64d5a943ddaead6e1709635516e2cd7d400645514548f1->enter($__internal_0486c0d7bb89f309ec64d5a943ddaead6e1709635516e2cd7d400645514548f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error404.html.twig"));

        $__internal_aeac32aebdf8ac910a2971886ae0b76d371e30abaf43fd471ab532804d512887 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aeac32aebdf8ac910a2971886ae0b76d371e30abaf43fd471ab532804d512887->enter($__internal_aeac32aebdf8ac910a2971886ae0b76d371e30abaf43fd471ab532804d512887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error404.html.twig"));

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
        
        $__internal_0486c0d7bb89f309ec64d5a943ddaead6e1709635516e2cd7d400645514548f1->leave($__internal_0486c0d7bb89f309ec64d5a943ddaead6e1709635516e2cd7d400645514548f1_prof);

        
        $__internal_aeac32aebdf8ac910a2971886ae0b76d371e30abaf43fd471ab532804d512887->leave($__internal_aeac32aebdf8ac910a2971886ae0b76d371e30abaf43fd471ab532804d512887_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error404.html.twig";
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
</html>", "TwigBundle:Exception:error404.html.twig", "C:\\wamp64\\www\\Symfony\\app/Resources/TwigBundle/views/Exception/error404.html.twig");
    }
}
