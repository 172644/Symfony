<?php

/* CoreSphereConsoleBundle:Toolbar:toolbar.html.twig */
class __TwigTemplate_af036d50a7ca6172776aa879a7495f7e084b3777cfc97bb478049f57c3800049 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig", "CoreSphereConsoleBundle:Toolbar:toolbar.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_35dd3630a4061bd1de88d2b21113d534809fcc972d5b17b0fcdd545f2cda293b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35dd3630a4061bd1de88d2b21113d534809fcc972d5b17b0fcdd545f2cda293b->enter($__internal_35dd3630a4061bd1de88d2b21113d534809fcc972d5b17b0fcdd545f2cda293b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle:Toolbar:toolbar.html.twig"));

        $__internal_a8c773fe58ed66b46d5d9ebd3560c01ea2dedc4e1d46f0ea8eae0688e9394336 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8c773fe58ed66b46d5d9ebd3560c01ea2dedc4e1d46f0ea8eae0688e9394336->enter($__internal_a8c773fe58ed66b46d5d9ebd3560c01ea2dedc4e1d46f0ea8eae0688e9394336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle:Toolbar:toolbar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35dd3630a4061bd1de88d2b21113d534809fcc972d5b17b0fcdd545f2cda293b->leave($__internal_35dd3630a4061bd1de88d2b21113d534809fcc972d5b17b0fcdd545f2cda293b_prof);

        
        $__internal_a8c773fe58ed66b46d5d9ebd3560c01ea2dedc4e1d46f0ea8eae0688e9394336->leave($__internal_a8c773fe58ed66b46d5d9ebd3560c01ea2dedc4e1d46f0ea8eae0688e9394336_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a75eceb1f0ab984effddd718ad3606a60ccc423e20cf8adb33576b13306a15a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a75eceb1f0ab984effddd718ad3606a60ccc423e20cf8adb33576b13306a15a2->enter($__internal_a75eceb1f0ab984effddd718ad3606a60ccc423e20cf8adb33576b13306a15a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_13790562025b6d88fa98e7f9e8fe7919047401c920d408cb3a49b78eaece0224 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13790562025b6d88fa98e7f9e8fe7919047401c920d408cb3a49b78eaece0224->enter($__internal_13790562025b6d88fa98e7f9e8fe7919047401c920d408cb3a49b78eaece0224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("console");
        echo "\" class=\"coresphere_console_popover\">
            <img width=\"13\" height=\"28\" alt=\"Console\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcCAYAAABh2p9gAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJ
bWFnZVJlYWR5ccllPAAAAG5JREFUeNpi/P//PwM1ARMDlcGogZQDlhMnTlAtmi0sLBip70IkNiOF
rsMwkKGiouL/CE42Bw4cAGOqGejg4AA3mGouRDaYnGSD1YXoFhCyhIVYm4l16UguvmB5keLCAVTk
UNOFjKO13ggwECDAAAMNHZ7ErsJjAAAAAElFTkSuQmCC\"/>
        </a>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 12
        echo "    ";
        $context["text"] = ('' === $tmp = "Console") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 13
        echo "
    ";
        // line 14
        $this->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig", "CoreSphereConsoleBundle:Toolbar:toolbar.html.twig", 14)->display(array_merge($context, array("link" => false)));
        
        $__internal_13790562025b6d88fa98e7f9e8fe7919047401c920d408cb3a49b78eaece0224->leave($__internal_13790562025b6d88fa98e7f9e8fe7919047401c920d408cb3a49b78eaece0224_prof);

        
        $__internal_a75eceb1f0ab984effddd718ad3606a60ccc423e20cf8adb33576b13306a15a2->leave($__internal_a75eceb1f0ab984effddd718ad3606a60ccc423e20cf8adb33576b13306a15a2_prof);

    }

    public function getTemplateName()
    {
        return "CoreSphereConsoleBundle:Toolbar:toolbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 14,  66 => 13,  63 => 12,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'WebProfilerBundle:Profiler:layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        <a href=\"{{ path('console') }}\" class=\"coresphere_console_popover\">
            <img width=\"13\" height=\"28\" alt=\"Console\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcCAYAAABh2p9gAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJ
bWFnZVJlYWR5ccllPAAAAG5JREFUeNpi/P//PwM1ARMDlcGogZQDlhMnTlAtmi0sLBip70IkNiOF
rsMwkKGiouL/CE42Bw4cAGOqGejg4AA3mGouRDaYnGSD1YXoFhCyhIVYm4l16UguvmB5keLCAVTk
UNOFjKO13ggwECDAAAMNHZ7ErsJjAAAAAElFTkSuQmCC\"/>
        </a>
    {% endset %}
    {% set text %}Console{% endset %}

    {% include 'WebProfilerBundle:Profiler:toolbar_item.html.twig' with { 'link': false } %}
{% endblock %}
", "CoreSphereConsoleBundle:Toolbar:toolbar.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\coresphere\\console-bundle/Resources/views/Toolbar/toolbar.html.twig");
    }
}
