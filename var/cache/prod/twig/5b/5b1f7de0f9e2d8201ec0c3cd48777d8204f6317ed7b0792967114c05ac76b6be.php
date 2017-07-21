<?php

/* ::base.html.twig */
class __TwigTemplate_a7cb4087780aa64f575f2e8eefddf7d88ef658bb01ed2a28ef1e79c976e689fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8467413f4a518ae5c907161ed508d425f886bf532a969455ae2ab77d720a2b63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8467413f4a518ae5c907161ed508d425f886bf532a969455ae2ab77d720a2b63->enter($__internal_8467413f4a518ae5c907161ed508d425f886bf532a969455ae2ab77d720a2b63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_8467413f4a518ae5c907161ed508d425f886bf532a969455ae2ab77d720a2b63->leave($__internal_8467413f4a518ae5c907161ed508d425f886bf532a969455ae2ab77d720a2b63_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f3120b6734bb512526dc6b8593ae8a295c3ed46b5c761262000615d35f4b5a30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3120b6734bb512526dc6b8593ae8a295c3ed46b5c761262000615d35f4b5a30->enter($__internal_f3120b6734bb512526dc6b8593ae8a295c3ed46b5c761262000615d35f4b5a30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f3120b6734bb512526dc6b8593ae8a295c3ed46b5c761262000615d35f4b5a30->leave($__internal_f3120b6734bb512526dc6b8593ae8a295c3ed46b5c761262000615d35f4b5a30_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3eed817314f50b647388529dce4a1876d2e18f43cc554a03dc3a83185d3979ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3eed817314f50b647388529dce4a1876d2e18f43cc554a03dc3a83185d3979ff->enter($__internal_3eed817314f50b647388529dce4a1876d2e18f43cc554a03dc3a83185d3979ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_3eed817314f50b647388529dce4a1876d2e18f43cc554a03dc3a83185d3979ff->leave($__internal_3eed817314f50b647388529dce4a1876d2e18f43cc554a03dc3a83185d3979ff_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c31158a8038ac25933c3e5d9fa1bf19443746a629fdb6af28f2740a988aff029 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c31158a8038ac25933c3e5d9fa1bf19443746a629fdb6af28f2740a988aff029->enter($__internal_c31158a8038ac25933c3e5d9fa1bf19443746a629fdb6af28f2740a988aff029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c31158a8038ac25933c3e5d9fa1bf19443746a629fdb6af28f2740a988aff029->leave($__internal_c31158a8038ac25933c3e5d9fa1bf19443746a629fdb6af28f2740a988aff029_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fbca5cfae732a10e7f4d623a54cd6ddf0166e6c8b95af626752bc6fc762cd275 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbca5cfae732a10e7f4d623a54cd6ddf0166e6c8b95af626752bc6fc762cd275->enter($__internal_fbca5cfae732a10e7f4d623a54cd6ddf0166e6c8b95af626752bc6fc762cd275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_fbca5cfae732a10e7f4d623a54cd6ddf0166e6c8b95af626752bc6fc762cd275->leave($__internal_fbca5cfae732a10e7f4d623a54cd6ddf0166e6c8b95af626752bc6fc762cd275_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "C:\\wamp64\\www\\Symfony\\app/Resources\\views/base.html.twig");
    }
}
