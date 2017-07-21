<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_6a18f906f39d25bd5a96be311815d7b80ecb8aee3c5137ca92f78291dbdae2c3 extends Twig_Template
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
        $__internal_d1e4b67b5b86e0f72c70f2570eaf0cba781f2980987c33642c2582a627b591cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1e4b67b5b86e0f72c70f2570eaf0cba781f2980987c33642c2582a627b591cf->enter($__internal_d1e4b67b5b86e0f72c70f2570eaf0cba781f2980987c33642c2582a627b591cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_cfef59849b538c17a24c4651d0e28eac1cbbd6280858f3879b20a5328e3c53f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfef59849b538c17a24c4651d0e28eac1cbbd6280858f3879b20a5328e3c53f8->enter($__internal_cfef59849b538c17a24c4651d0e28eac1cbbd6280858f3879b20a5328e3c53f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_d1e4b67b5b86e0f72c70f2570eaf0cba781f2980987c33642c2582a627b591cf->leave($__internal_d1e4b67b5b86e0f72c70f2570eaf0cba781f2980987c33642c2582a627b591cf_prof);

        
        $__internal_cfef59849b538c17a24c4651d0e28eac1cbbd6280858f3879b20a5328e3c53f8->leave($__internal_cfef59849b538c17a24c4651d0e28eac1cbbd6280858f3879b20a5328e3c53f8_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_b764c85cf699e67b405e58cfb78231901075fcf04e0aa5d3b6d32b84f837d3c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b764c85cf699e67b405e58cfb78231901075fcf04e0aa5d3b6d32b84f837d3c9->enter($__internal_b764c85cf699e67b405e58cfb78231901075fcf04e0aa5d3b6d32b84f837d3c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_79454573c230af37efe0289456fe7dc1536413d741728f6a89d446cfff5f75b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79454573c230af37efe0289456fe7dc1536413d741728f6a89d446cfff5f75b1->enter($__internal_79454573c230af37efe0289456fe7dc1536413d741728f6a89d446cfff5f75b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_79454573c230af37efe0289456fe7dc1536413d741728f6a89d446cfff5f75b1->leave($__internal_79454573c230af37efe0289456fe7dc1536413d741728f6a89d446cfff5f75b1_prof);

        
        $__internal_b764c85cf699e67b405e58cfb78231901075fcf04e0aa5d3b6d32b84f837d3c9->leave($__internal_b764c85cf699e67b405e58cfb78231901075fcf04e0aa5d3b6d32b84f837d3c9_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
