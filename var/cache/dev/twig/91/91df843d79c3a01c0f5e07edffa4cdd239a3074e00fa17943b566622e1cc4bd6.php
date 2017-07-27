<?php

/* OCPlatformBundle::layout.html.twig */
class __TwigTemplate_78465eda2cf8fda697bcf6c585e1005127c25ca071cdd5d2036291dbbcc3b27a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OCCoreBundle::layout.html.twig", "OCPlatformBundle::layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_893fe03aa26874900b18981e051bde3207600e315017df90574307a8d556c775 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_893fe03aa26874900b18981e051bde3207600e315017df90574307a8d556c775->enter($__internal_893fe03aa26874900b18981e051bde3207600e315017df90574307a8d556c775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle::layout.html.twig"));

        $__internal_40854c1ffffd7c0ef67ada14d75dc0c107779ceeaf9d7ccc70cd1efd9bc3bdf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40854c1ffffd7c0ef67ada14d75dc0c107779ceeaf9d7ccc70cd1efd9bc3bdf1->enter($__internal_40854c1ffffd7c0ef67ada14d75dc0c107779ceeaf9d7ccc70cd1efd9bc3bdf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_893fe03aa26874900b18981e051bde3207600e315017df90574307a8d556c775->leave($__internal_893fe03aa26874900b18981e051bde3207600e315017df90574307a8d556c775_prof);

        
        $__internal_40854c1ffffd7c0ef67ada14d75dc0c107779ceeaf9d7ccc70cd1efd9bc3bdf1->leave($__internal_40854c1ffffd7c0ef67ada14d75dc0c107779ceeaf9d7ccc70cd1efd9bc3bdf1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b7131b22b727f52f169756156e9e747308cd6121ff40fd44b5a5ff66d4db5390 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7131b22b727f52f169756156e9e747308cd6121ff40fd44b5a5ff66d4db5390->enter($__internal_b7131b22b727f52f169756156e9e747308cd6121ff40fd44b5a5ff66d4db5390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3c6fe7fec59b42132cb5221fbe3fd3026dc352fec14c3f7ae0c73a5e8d963cb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c6fe7fec59b42132cb5221fbe3fd3026dc352fec14c3f7ae0c73a5e8d963cb8->enter($__internal_3c6fe7fec59b42132cb5221fbe3fd3026dc352fec14c3f7ae0c73a5e8d963cb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_3c6fe7fec59b42132cb5221fbe3fd3026dc352fec14c3f7ae0c73a5e8d963cb8->leave($__internal_3c6fe7fec59b42132cb5221fbe3fd3026dc352fec14c3f7ae0c73a5e8d963cb8_prof);

        
        $__internal_b7131b22b727f52f169756156e9e747308cd6121ff40fd44b5a5ff66d4db5390->leave($__internal_b7131b22b727f52f169756156e9e747308cd6121ff40fd44b5a5ff66d4db5390_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_b113443aea90d1266bc7f56d30768d089abb6b212da921b3241e431dd2906527 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b113443aea90d1266bc7f56d30768d089abb6b212da921b3241e431dd2906527->enter($__internal_b113443aea90d1266bc7f56d30768d089abb6b212da921b3241e431dd2906527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4c2293c6d91117f1efebeacffd10b75d5c39f23cce05af6745e11226bedd49e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c2293c6d91117f1efebeacffd10b75d5c39f23cce05af6745e11226bedd49e9->enter($__internal_4c2293c6d91117f1efebeacffd10b75d5c39f23cce05af6745e11226bedd49e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    ";
        $this->displayBlock('ocplatform_body', $context, $blocks);
        
        $__internal_4c2293c6d91117f1efebeacffd10b75d5c39f23cce05af6745e11226bedd49e9->leave($__internal_4c2293c6d91117f1efebeacffd10b75d5c39f23cce05af6745e11226bedd49e9_prof);

        
        $__internal_b113443aea90d1266bc7f56d30768d089abb6b212da921b3241e431dd2906527->leave($__internal_b113443aea90d1266bc7f56d30768d089abb6b212da921b3241e431dd2906527_prof);

    }

    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_c2a69478d1caa093ba58e93fc4534eee8f2ecc717fe2b3acf45c5c16ee350e56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2a69478d1caa093ba58e93fc4534eee8f2ecc717fe2b3acf45c5c16ee350e56->enter($__internal_c2a69478d1caa093ba58e93fc4534eee8f2ecc717fe2b3acf45c5c16ee350e56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_3cdb6c9fe413b87d9a829a0dda9dc80696e394ffd5ebb0df5c983c03903fdab6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cdb6c9fe413b87d9a829a0dda9dc80696e394ffd5ebb0df5c983c03903fdab6->enter($__internal_3cdb6c9fe413b87d9a829a0dda9dc80696e394ffd5ebb0df5c983c03903fdab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 9
        echo "    ";
        
        $__internal_3cdb6c9fe413b87d9a829a0dda9dc80696e394ffd5ebb0df5c983c03903fdab6->leave($__internal_3cdb6c9fe413b87d9a829a0dda9dc80696e394ffd5ebb0df5c983c03903fdab6_prof);

        
        $__internal_c2a69478d1caa093ba58e93fc4534eee8f2ecc717fe2b3acf45c5c16ee350e56->leave($__internal_c2a69478d1caa093ba58e93fc4534eee8f2ecc717fe2b3acf45c5c16ee350e56_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 9,  73 => 8,  64 => 7,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"OCCoreBundle::layout.html.twig\" %}

{% block title %}
    Annonces - {{ parent() }}
{% endblock %}

{% block body %}
    {% block ocplatform_body %}
    {% endblock %}
{% endblock %}", "OCPlatformBundle::layout.html.twig", "C:\\wamp64\\www\\Symfony\\src\\OC\\PlatformBundle\\Resources\\views\\layout.html.twig");
    }
}
