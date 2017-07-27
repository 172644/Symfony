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
        $__internal_84c6358da7e88012a93a66aa8b74f0ab48363d4d2238bb0102cd8c0264c7cd4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84c6358da7e88012a93a66aa8b74f0ab48363d4d2238bb0102cd8c0264c7cd4c->enter($__internal_84c6358da7e88012a93a66aa8b74f0ab48363d4d2238bb0102cd8c0264c7cd4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle:Toolbar:toolbar.html.twig"));

        $__internal_a4adc078a27ad437ba8138f4d48b4533825b91d4381aba15be0c52812574fb19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4adc078a27ad437ba8138f4d48b4533825b91d4381aba15be0c52812574fb19->enter($__internal_a4adc078a27ad437ba8138f4d48b4533825b91d4381aba15be0c52812574fb19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle:Toolbar:toolbar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84c6358da7e88012a93a66aa8b74f0ab48363d4d2238bb0102cd8c0264c7cd4c->leave($__internal_84c6358da7e88012a93a66aa8b74f0ab48363d4d2238bb0102cd8c0264c7cd4c_prof);

        
        $__internal_a4adc078a27ad437ba8138f4d48b4533825b91d4381aba15be0c52812574fb19->leave($__internal_a4adc078a27ad437ba8138f4d48b4533825b91d4381aba15be0c52812574fb19_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2ee390f92e56c7a6bc2d0c94b4b12030b36458c23208ecf6ff60262931245a2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ee390f92e56c7a6bc2d0c94b4b12030b36458c23208ecf6ff60262931245a2c->enter($__internal_2ee390f92e56c7a6bc2d0c94b4b12030b36458c23208ecf6ff60262931245a2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_973c6b3c7afd6440d6419bc95989d3064477d1fa12a2db547b3e11170b6ff5b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_973c6b3c7afd6440d6419bc95989d3064477d1fa12a2db547b3e11170b6ff5b7->enter($__internal_973c6b3c7afd6440d6419bc95989d3064477d1fa12a2db547b3e11170b6ff5b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_973c6b3c7afd6440d6419bc95989d3064477d1fa12a2db547b3e11170b6ff5b7->leave($__internal_973c6b3c7afd6440d6419bc95989d3064477d1fa12a2db547b3e11170b6ff5b7_prof);

        
        $__internal_2ee390f92e56c7a6bc2d0c94b4b12030b36458c23208ecf6ff60262931245a2c->leave($__internal_2ee390f92e56c7a6bc2d0c94b4b12030b36458c23208ecf6ff60262931245a2c_prof);

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
