<?php

/* TwigBundle:Exception:error.html.twig */
class __TwigTemplate_120d430445468d784d9bbfa667f3aff328f9eb2564eb0fb0b2e8349c41d267ec extends Twig_Template
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
        $__internal_83378a29775bd343248f4c5a6fb338fab76aaecbd84c475d3931a3b18e1c66db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83378a29775bd343248f4c5a6fb338fab76aaecbd84c475d3931a3b18e1c66db->enter($__internal_83378a29775bd343248f4c5a6fb338fab76aaecbd84c475d3931a3b18e1c66db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.html.twig"));

        $__internal_2d270915fa691cd7be83e40399836b9e46af8c313b79cdae73024aef683a4bfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d270915fa691cd7be83e40399836b9e46af8c313b79cdae73024aef683a4bfc->enter($__internal_2d270915fa691cd7be83e40399836b9e46af8c313b79cdae73024aef683a4bfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.html.twig"));

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
        
        $__internal_83378a29775bd343248f4c5a6fb338fab76aaecbd84c475d3931a3b18e1c66db->leave($__internal_83378a29775bd343248f4c5a6fb338fab76aaecbd84c475d3931a3b18e1c66db_prof);

        
        $__internal_2d270915fa691cd7be83e40399836b9e46af8c313b79cdae73024aef683a4bfc->leave($__internal_2d270915fa691cd7be83e40399836b9e46af8c313b79cdae73024aef683a4bfc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.html.twig";
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
</html>", "TwigBundle:Exception:error.html.twig", "C:\\wamp64\\www\\Symfony\\app/Resources/TwigBundle/views/Exception/error.html.twig");
    }
}
