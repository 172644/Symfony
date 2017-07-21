<?php

/* @CoreSphereConsole/Toolbar/toolbar.html.twig */
class __TwigTemplate_f8dce08f4a6f832f8b09adc48fe9fd84ee32c6adb9d21430b0c3014ebae4db31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig", "@CoreSphereConsole/Toolbar/toolbar.html.twig", 1);
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
        $__internal_31f727d2607c089c6ad36f8ebf0e33d290a80698555f5724e8271a8ef1869083 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31f727d2607c089c6ad36f8ebf0e33d290a80698555f5724e8271a8ef1869083->enter($__internal_31f727d2607c089c6ad36f8ebf0e33d290a80698555f5724e8271a8ef1869083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CoreSphereConsole/Toolbar/toolbar.html.twig"));

        $__internal_0e499d93393edd78bdd3d73c60aff26ecc023dd157cf11ed101bd360e72e6949 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e499d93393edd78bdd3d73c60aff26ecc023dd157cf11ed101bd360e72e6949->enter($__internal_0e499d93393edd78bdd3d73c60aff26ecc023dd157cf11ed101bd360e72e6949_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CoreSphereConsole/Toolbar/toolbar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31f727d2607c089c6ad36f8ebf0e33d290a80698555f5724e8271a8ef1869083->leave($__internal_31f727d2607c089c6ad36f8ebf0e33d290a80698555f5724e8271a8ef1869083_prof);

        
        $__internal_0e499d93393edd78bdd3d73c60aff26ecc023dd157cf11ed101bd360e72e6949->leave($__internal_0e499d93393edd78bdd3d73c60aff26ecc023dd157cf11ed101bd360e72e6949_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ed57eb9735f6e68c892a7422abcd1f626aa2f6b4091d1a24f2004faeda11db71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed57eb9735f6e68c892a7422abcd1f626aa2f6b4091d1a24f2004faeda11db71->enter($__internal_ed57eb9735f6e68c892a7422abcd1f626aa2f6b4091d1a24f2004faeda11db71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_1c9cbce7fa25216c08d765899a939170ae0bfcb9f6b66219b1533f1dabcf9b01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c9cbce7fa25216c08d765899a939170ae0bfcb9f6b66219b1533f1dabcf9b01->enter($__internal_1c9cbce7fa25216c08d765899a939170ae0bfcb9f6b66219b1533f1dabcf9b01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        $this->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig", "@CoreSphereConsole/Toolbar/toolbar.html.twig", 14)->display(array_merge($context, array("link" => false)));
        
        $__internal_1c9cbce7fa25216c08d765899a939170ae0bfcb9f6b66219b1533f1dabcf9b01->leave($__internal_1c9cbce7fa25216c08d765899a939170ae0bfcb9f6b66219b1533f1dabcf9b01_prof);

        
        $__internal_ed57eb9735f6e68c892a7422abcd1f626aa2f6b4091d1a24f2004faeda11db71->leave($__internal_ed57eb9735f6e68c892a7422abcd1f626aa2f6b4091d1a24f2004faeda11db71_prof);

    }

    public function getTemplateName()
    {
        return "@CoreSphereConsole/Toolbar/toolbar.html.twig";
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
", "@CoreSphereConsole/Toolbar/toolbar.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\coresphere\\console-bundle\\Resources\\views\\Toolbar\\toolbar.html.twig");
    }
}
