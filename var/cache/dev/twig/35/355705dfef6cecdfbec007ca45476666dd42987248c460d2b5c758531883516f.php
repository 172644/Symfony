<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_7f5d1861be71f65954f306925c0f41bbb4010e8c1b0581b97f07e8cbb01042f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f71fa1b933c35a818b10e8ae33cb21c5c894b4379dac09bab2847ba067304b64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f71fa1b933c35a818b10e8ae33cb21c5c894b4379dac09bab2847ba067304b64->enter($__internal_f71fa1b933c35a818b10e8ae33cb21c5c894b4379dac09bab2847ba067304b64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_179a5355c6cc9d540d36681951ff59bc7b0dd23b7cb82eab339027a5913b02a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_179a5355c6cc9d540d36681951ff59bc7b0dd23b7cb82eab339027a5913b02a0->enter($__internal_179a5355c6cc9d540d36681951ff59bc7b0dd23b7cb82eab339027a5913b02a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f71fa1b933c35a818b10e8ae33cb21c5c894b4379dac09bab2847ba067304b64->leave($__internal_f71fa1b933c35a818b10e8ae33cb21c5c894b4379dac09bab2847ba067304b64_prof);

        
        $__internal_179a5355c6cc9d540d36681951ff59bc7b0dd23b7cb82eab339027a5913b02a0->leave($__internal_179a5355c6cc9d540d36681951ff59bc7b0dd23b7cb82eab339027a5913b02a0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_668af7d7598bdc79d13dd90d3d73a75590c307663ff4c1e7376113b673799542 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_668af7d7598bdc79d13dd90d3d73a75590c307663ff4c1e7376113b673799542->enter($__internal_668af7d7598bdc79d13dd90d3d73a75590c307663ff4c1e7376113b673799542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7c6bbe3381ba9f7e015d25082cef1a603994ecb6ff146b9c11bf8f8c3932cc20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c6bbe3381ba9f7e015d25082cef1a603994ecb6ff146b9c11bf8f8c3932cc20->enter($__internal_7c6bbe3381ba9f7e015d25082cef1a603994ecb6ff146b9c11bf8f8c3932cc20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7c6bbe3381ba9f7e015d25082cef1a603994ecb6ff146b9c11bf8f8c3932cc20->leave($__internal_7c6bbe3381ba9f7e015d25082cef1a603994ecb6ff146b9c11bf8f8c3932cc20_prof);

        
        $__internal_668af7d7598bdc79d13dd90d3d73a75590c307663ff4c1e7376113b673799542->leave($__internal_668af7d7598bdc79d13dd90d3d73a75590c307663ff4c1e7376113b673799542_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3152eb3ed7594072d48240db9a41e24d426f5b40c277b887f0a27cf8b9dd4bcd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3152eb3ed7594072d48240db9a41e24d426f5b40c277b887f0a27cf8b9dd4bcd->enter($__internal_3152eb3ed7594072d48240db9a41e24d426f5b40c277b887f0a27cf8b9dd4bcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f04456e60482833802671b514e467fda82150ab7b646710319964ea45504ce98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f04456e60482833802671b514e467fda82150ab7b646710319964ea45504ce98->enter($__internal_f04456e60482833802671b514e467fda82150ab7b646710319964ea45504ce98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f04456e60482833802671b514e467fda82150ab7b646710319964ea45504ce98->leave($__internal_f04456e60482833802671b514e467fda82150ab7b646710319964ea45504ce98_prof);

        
        $__internal_3152eb3ed7594072d48240db9a41e24d426f5b40c277b887f0a27cf8b9dd4bcd->leave($__internal_3152eb3ed7594072d48240db9a41e24d426f5b40c277b887f0a27cf8b9dd4bcd_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7e9c841004c12d6558e158ec5da98aff2f2f6855440e3583f82d721f6e97ea6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e9c841004c12d6558e158ec5da98aff2f2f6855440e3583f82d721f6e97ea6d->enter($__internal_7e9c841004c12d6558e158ec5da98aff2f2f6855440e3583f82d721f6e97ea6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_dca47a81d9d8336d063e33f95052925948b7dbc295f37032977563e0336e1b55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dca47a81d9d8336d063e33f95052925948b7dbc295f37032977563e0336e1b55->enter($__internal_dca47a81d9d8336d063e33f95052925948b7dbc295f37032977563e0336e1b55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_dca47a81d9d8336d063e33f95052925948b7dbc295f37032977563e0336e1b55->leave($__internal_dca47a81d9d8336d063e33f95052925948b7dbc295f37032977563e0336e1b55_prof);

        
        $__internal_7e9c841004c12d6558e158ec5da98aff2f2f6855440e3583f82d721f6e97ea6d->leave($__internal_7e9c841004c12d6558e158ec5da98aff2f2f6855440e3583f82d721f6e97ea6d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
