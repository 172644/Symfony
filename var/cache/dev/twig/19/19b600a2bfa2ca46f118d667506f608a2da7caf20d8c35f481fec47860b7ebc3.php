<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_9f1bcf960eba306a2bb52c265c3d65f257c807d02615cf134009b12ab524c525 extends Twig_Template
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
        $__internal_8e8ec2a42e722f73d6680c92a77073bdfebfb02d349d58575430ea408456d0be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e8ec2a42e722f73d6680c92a77073bdfebfb02d349d58575430ea408456d0be->enter($__internal_8e8ec2a42e722f73d6680c92a77073bdfebfb02d349d58575430ea408456d0be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_004fe00b964db7a8d5ed431a9aa4796f2ceaa56db0f6adf3f79f6a2253919263 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_004fe00b964db7a8d5ed431a9aa4796f2ceaa56db0f6adf3f79f6a2253919263->enter($__internal_004fe00b964db7a8d5ed431a9aa4796f2ceaa56db0f6adf3f79f6a2253919263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo "

*/
";
        
        $__internal_8e8ec2a42e722f73d6680c92a77073bdfebfb02d349d58575430ea408456d0be->leave($__internal_8e8ec2a42e722f73d6680c92a77073bdfebfb02d349d58575430ea408456d0be_prof);

        
        $__internal_004fe00b964db7a8d5ed431a9aa4796f2ceaa56db0f6adf3f79f6a2253919263->leave($__internal_004fe00b964db7a8d5ed431a9aa4796f2ceaa56db0f6adf3f79f6a2253919263_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
", "TwigBundle:Exception:error.js.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
