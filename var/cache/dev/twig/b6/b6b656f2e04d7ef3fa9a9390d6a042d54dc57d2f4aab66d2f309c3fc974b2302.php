<?php

/* OCPlatformBundle::layout.html.twig */
class __TwigTemplate_d7e220025acd009b113605066b8d066a44d433f9bc811797b8e8c12e74702ec3 extends Twig_Template
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
        $__internal_7636fee7487403af9b444f79d63be8171d389445950abbe0333354fa170e9bdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7636fee7487403af9b444f79d63be8171d389445950abbe0333354fa170e9bdb->enter($__internal_7636fee7487403af9b444f79d63be8171d389445950abbe0333354fa170e9bdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle::layout.html.twig"));

        $__internal_e3c1886083f5fa48c403f0c0d6df58dd3e70fe5e708cfbfd016ae20ba46975f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3c1886083f5fa48c403f0c0d6df58dd3e70fe5e708cfbfd016ae20ba46975f8->enter($__internal_e3c1886083f5fa48c403f0c0d6df58dd3e70fe5e708cfbfd016ae20ba46975f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7636fee7487403af9b444f79d63be8171d389445950abbe0333354fa170e9bdb->leave($__internal_7636fee7487403af9b444f79d63be8171d389445950abbe0333354fa170e9bdb_prof);

        
        $__internal_e3c1886083f5fa48c403f0c0d6df58dd3e70fe5e708cfbfd016ae20ba46975f8->leave($__internal_e3c1886083f5fa48c403f0c0d6df58dd3e70fe5e708cfbfd016ae20ba46975f8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2105fd4ddb43d67533edac76d912deb81cd5cf45c6a6707745906ead04742f5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2105fd4ddb43d67533edac76d912deb81cd5cf45c6a6707745906ead04742f5f->enter($__internal_2105fd4ddb43d67533edac76d912deb81cd5cf45c6a6707745906ead04742f5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_de3337d329d23213cf5d81a869477e9b687818f4271a82d63422fcce60230ddb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de3337d329d23213cf5d81a869477e9b687818f4271a82d63422fcce60230ddb->enter($__internal_de3337d329d23213cf5d81a869477e9b687818f4271a82d63422fcce60230ddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_de3337d329d23213cf5d81a869477e9b687818f4271a82d63422fcce60230ddb->leave($__internal_de3337d329d23213cf5d81a869477e9b687818f4271a82d63422fcce60230ddb_prof);

        
        $__internal_2105fd4ddb43d67533edac76d912deb81cd5cf45c6a6707745906ead04742f5f->leave($__internal_2105fd4ddb43d67533edac76d912deb81cd5cf45c6a6707745906ead04742f5f_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_e93d340763acd90a74b2581c162bafb7fa08763ec46b04e1682d0e29d0687b23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e93d340763acd90a74b2581c162bafb7fa08763ec46b04e1682d0e29d0687b23->enter($__internal_e93d340763acd90a74b2581c162bafb7fa08763ec46b04e1682d0e29d0687b23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3433d44c426adcbeb15d36a67481d011190b87bd0b4bca29858daf507bad02a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3433d44c426adcbeb15d36a67481d011190b87bd0b4bca29858daf507bad02a1->enter($__internal_3433d44c426adcbeb15d36a67481d011190b87bd0b4bca29858daf507bad02a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    ";
        $this->displayBlock('ocplatform_body', $context, $blocks);
        
        $__internal_3433d44c426adcbeb15d36a67481d011190b87bd0b4bca29858daf507bad02a1->leave($__internal_3433d44c426adcbeb15d36a67481d011190b87bd0b4bca29858daf507bad02a1_prof);

        
        $__internal_e93d340763acd90a74b2581c162bafb7fa08763ec46b04e1682d0e29d0687b23->leave($__internal_e93d340763acd90a74b2581c162bafb7fa08763ec46b04e1682d0e29d0687b23_prof);

    }

    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_27eba3416e36b7d62caaafe16d99c0abf15897ca1f5fad06ceb74577a6ab3497 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27eba3416e36b7d62caaafe16d99c0abf15897ca1f5fad06ceb74577a6ab3497->enter($__internal_27eba3416e36b7d62caaafe16d99c0abf15897ca1f5fad06ceb74577a6ab3497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_04d5f9aef6b10b4d46d923ed13456e8542eb9ca0c4a5c738a0b6e58047318609 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04d5f9aef6b10b4d46d923ed13456e8542eb9ca0c4a5c738a0b6e58047318609->enter($__internal_04d5f9aef6b10b4d46d923ed13456e8542eb9ca0c4a5c738a0b6e58047318609_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 9
        echo "    ";
        
        $__internal_04d5f9aef6b10b4d46d923ed13456e8542eb9ca0c4a5c738a0b6e58047318609->leave($__internal_04d5f9aef6b10b4d46d923ed13456e8542eb9ca0c4a5c738a0b6e58047318609_prof);

        
        $__internal_27eba3416e36b7d62caaafe16d99c0abf15897ca1f5fad06ceb74577a6ab3497->leave($__internal_27eba3416e36b7d62caaafe16d99c0abf15897ca1f5fad06ceb74577a6ab3497_prof);

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
{% endblock %}", "OCPlatformBundle::layout.html.twig", "C:\\wamp64\\www\\Symfony\\src\\OC\\PlatformBundle/Resources/views/layout.html.twig");
    }
}
