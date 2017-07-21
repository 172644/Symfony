<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_8470cc18f7515a272aba119a68a8a0ed51af7f844c96b4cf9541b844f680f614 extends Twig_Template
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
        $__internal_65a292aab591933f245d6b3711132ac7280092285d28469007e2e989a906c716 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65a292aab591933f245d6b3711132ac7280092285d28469007e2e989a906c716->enter($__internal_65a292aab591933f245d6b3711132ac7280092285d28469007e2e989a906c716_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_9426c47193e8361d92b7a967d5cccc9619bb72faae94c6952d56a1195ff38bb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9426c47193e8361d92b7a967d5cccc9619bb72faae94c6952d56a1195ff38bb5->enter($__internal_9426c47193e8361d92b7a967d5cccc9619bb72faae94c6952d56a1195ff38bb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />
";
        
        $__internal_65a292aab591933f245d6b3711132ac7280092285d28469007e2e989a906c716->leave($__internal_65a292aab591933f245d6b3711132ac7280092285d28469007e2e989a906c716_prof);

        
        $__internal_9426c47193e8361d92b7a967d5cccc9619bb72faae94c6952d56a1195ff38bb5->leave($__internal_9426c47193e8361d92b7a967d5cccc9619bb72faae94c6952d56a1195ff38bb5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
