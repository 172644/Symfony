<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_e14c1d2b3c802a8bc19bc9febcb59537160f0b4d611cc72cfc9f2d30962c3a37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0ca2c778d34cfd127b6c6dc0d456471870e992b69c7e84ab9f2917cdcde89e59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ca2c778d34cfd127b6c6dc0d456471870e992b69c7e84ab9f2917cdcde89e59->enter($__internal_0ca2c778d34cfd127b6c6dc0d456471870e992b69c7e84ab9f2917cdcde89e59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_438cc88514f970bcb171de3c9473f5ce0eaced0b81fa8017a78c4805bfded4a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_438cc88514f970bcb171de3c9473f5ce0eaced0b81fa8017a78c4805bfded4a6->enter($__internal_438cc88514f970bcb171de3c9473f5ce0eaced0b81fa8017a78c4805bfded4a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ca2c778d34cfd127b6c6dc0d456471870e992b69c7e84ab9f2917cdcde89e59->leave($__internal_0ca2c778d34cfd127b6c6dc0d456471870e992b69c7e84ab9f2917cdcde89e59_prof);

        
        $__internal_438cc88514f970bcb171de3c9473f5ce0eaced0b81fa8017a78c4805bfded4a6->leave($__internal_438cc88514f970bcb171de3c9473f5ce0eaced0b81fa8017a78c4805bfded4a6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0b38d1ab79368bcc5afcf0d97bbce292aff228fd3ba7d57117aad67b66d1758e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b38d1ab79368bcc5afcf0d97bbce292aff228fd3ba7d57117aad67b66d1758e->enter($__internal_0b38d1ab79368bcc5afcf0d97bbce292aff228fd3ba7d57117aad67b66d1758e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e31200183d8e63f50726e707301a3f081ecd183626b093a074a34645252ac7c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e31200183d8e63f50726e707301a3f081ecd183626b093a074a34645252ac7c7->enter($__internal_e31200183d8e63f50726e707301a3f081ecd183626b093a074a34645252ac7c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_e31200183d8e63f50726e707301a3f081ecd183626b093a074a34645252ac7c7->leave($__internal_e31200183d8e63f50726e707301a3f081ecd183626b093a074a34645252ac7c7_prof);

        
        $__internal_0b38d1ab79368bcc5afcf0d97bbce292aff228fd3ba7d57117aad67b66d1758e->leave($__internal_0b38d1ab79368bcc5afcf0d97bbce292aff228fd3ba7d57117aad67b66d1758e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0c24663ec5395172253e0a8daf3409bfc3d68c1fb1d6c084ac1b262a5cc1cc5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c24663ec5395172253e0a8daf3409bfc3d68c1fb1d6c084ac1b262a5cc1cc5b->enter($__internal_0c24663ec5395172253e0a8daf3409bfc3d68c1fb1d6c084ac1b262a5cc1cc5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0b0cc10cbaf6e4d45275aa44cf39a71c0c342782470d6e71daf6a0bd99de6e48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b0cc10cbaf6e4d45275aa44cf39a71c0c342782470d6e71daf6a0bd99de6e48->enter($__internal_0b0cc10cbaf6e4d45275aa44cf39a71c0c342782470d6e71daf6a0bd99de6e48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_0b0cc10cbaf6e4d45275aa44cf39a71c0c342782470d6e71daf6a0bd99de6e48->leave($__internal_0b0cc10cbaf6e4d45275aa44cf39a71c0c342782470d6e71daf6a0bd99de6e48_prof);

        
        $__internal_0c24663ec5395172253e0a8daf3409bfc3d68c1fb1d6c084ac1b262a5cc1cc5b->leave($__internal_0c24663ec5395172253e0a8daf3409bfc3d68c1fb1d6c084ac1b262a5cc1cc5b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
