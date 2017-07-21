<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_2eab0d005a4bbc98b42aca3a860a6117f90ac4fae44fde9b05b06c9cbc9a1a41 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5507a3dc858fd5212ebbc64e44186bad5c85a4e341d829c86a882008eab5b6b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5507a3dc858fd5212ebbc64e44186bad5c85a4e341d829c86a882008eab5b6b4->enter($__internal_5507a3dc858fd5212ebbc64e44186bad5c85a4e341d829c86a882008eab5b6b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_8248cb3f1dce47c7a9e4781752312e5f0c0f7f02b6ba3583c77e0e80255de0a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8248cb3f1dce47c7a9e4781752312e5f0c0f7f02b6ba3583c77e0e80255de0a3->enter($__internal_8248cb3f1dce47c7a9e4781752312e5f0c0f7f02b6ba3583c77e0e80255de0a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_5507a3dc858fd5212ebbc64e44186bad5c85a4e341d829c86a882008eab5b6b4->leave($__internal_5507a3dc858fd5212ebbc64e44186bad5c85a4e341d829c86a882008eab5b6b4_prof);

        
        $__internal_8248cb3f1dce47c7a9e4781752312e5f0c0f7f02b6ba3583c77e0e80255de0a3->leave($__internal_8248cb3f1dce47c7a9e4781752312e5f0c0f7f02b6ba3583c77e0e80255de0a3_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_53b8e30bb645ae10e5989d106c0ee57e60cd1f7d251120032d2368c2587f5059 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53b8e30bb645ae10e5989d106c0ee57e60cd1f7d251120032d2368c2587f5059->enter($__internal_53b8e30bb645ae10e5989d106c0ee57e60cd1f7d251120032d2368c2587f5059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d3edafb911aeb3edcfa032f092583fed6b809302d6054e9341454554d6c493b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3edafb911aeb3edcfa032f092583fed6b809302d6054e9341454554d6c493b0->enter($__internal_d3edafb911aeb3edcfa032f092583fed6b809302d6054e9341454554d6c493b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_d3edafb911aeb3edcfa032f092583fed6b809302d6054e9341454554d6c493b0->leave($__internal_d3edafb911aeb3edcfa032f092583fed6b809302d6054e9341454554d6c493b0_prof);

        
        $__internal_53b8e30bb645ae10e5989d106c0ee57e60cd1f7d251120032d2368c2587f5059->leave($__internal_53b8e30bb645ae10e5989d106c0ee57e60cd1f7d251120032d2368c2587f5059_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
