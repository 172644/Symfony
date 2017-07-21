<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_f57841ab6686dae6785ac4986d9d1b15de177d4c402c07f3b7d2741cc8eb3be2 extends Twig_Template
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
        $__internal_aecb5f94daceaa31120db881d9cd8997a96695913d8e8d227808f52f2e298dcd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aecb5f94daceaa31120db881d9cd8997a96695913d8e8d227808f52f2e298dcd->enter($__internal_aecb5f94daceaa31120db881d9cd8997a96695913d8e8d227808f52f2e298dcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_922977171e3596b6588c35a1def9262b27a18bf89d33d776c9aafb5a56d50586 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_922977171e3596b6588c35a1def9262b27a18bf89d33d776c9aafb5a56d50586->enter($__internal_922977171e3596b6588c35a1def9262b27a18bf89d33d776c9aafb5a56d50586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_aecb5f94daceaa31120db881d9cd8997a96695913d8e8d227808f52f2e298dcd->leave($__internal_aecb5f94daceaa31120db881d9cd8997a96695913d8e8d227808f52f2e298dcd_prof);

        
        $__internal_922977171e3596b6588c35a1def9262b27a18bf89d33d776c9aafb5a56d50586->leave($__internal_922977171e3596b6588c35a1def9262b27a18bf89d33d776c9aafb5a56d50586_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.css.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
