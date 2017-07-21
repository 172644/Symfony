<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_414bf301821f80989728c75d50f0fc092b6e87fce2c6b292e635e4af1f4ee8a9 extends Twig_Template
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
        $__internal_2d94c2dd6223324ea9050e7755061fa3ab84d128338e8f1787f3fec831fabe64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d94c2dd6223324ea9050e7755061fa3ab84d128338e8f1787f3fec831fabe64->enter($__internal_2d94c2dd6223324ea9050e7755061fa3ab84d128338e8f1787f3fec831fabe64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_d424b88c9cc39a8b929e7a756ccff86c676f0dc9b9e09c02d331fb7884e4c5ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d424b88c9cc39a8b929e7a756ccff86c676f0dc9b9e09c02d331fb7884e4c5ed->enter($__internal_d424b88c9cc39a8b929e7a756ccff86c676f0dc9b9e09c02d331fb7884e4c5ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 4, $this->getSourceContext()); })());
        echo " ";
        echo (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 4, $this->getSourceContext()); })());
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_2d94c2dd6223324ea9050e7755061fa3ab84d128338e8f1787f3fec831fabe64->leave($__internal_2d94c2dd6223324ea9050e7755061fa3ab84d128338e8f1787f3fec831fabe64_prof);

        
        $__internal_d424b88c9cc39a8b929e7a756ccff86c676f0dc9b9e09c02d331fb7884e4c5ed->leave($__internal_d424b88c9cc39a8b929e7a756ccff86c676f0dc9b9e09c02d331fb7884e4c5ed_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
