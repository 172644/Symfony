<?php

/* base.html.twig */
class __TwigTemplate_da5c70cd6ac6b19e55fb4f8cc6e619c59d16c68eaf28c987d5c3bd48092cbe8f extends Twig_Template
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
        $__internal_609b6de3c2223c04dca7e6e95eaead73950b4e7722f69cee71e0475dc7fd1a43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_609b6de3c2223c04dca7e6e95eaead73950b4e7722f69cee71e0475dc7fd1a43->enter($__internal_609b6de3c2223c04dca7e6e95eaead73950b4e7722f69cee71e0475dc7fd1a43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_609b6de3c2223c04dca7e6e95eaead73950b4e7722f69cee71e0475dc7fd1a43->leave($__internal_609b6de3c2223c04dca7e6e95eaead73950b4e7722f69cee71e0475dc7fd1a43_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_96bf0a15b2ebaca38dc4d14b5b4205a6afd8785529f7a16bc1e1b90d7f84d0df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96bf0a15b2ebaca38dc4d14b5b4205a6afd8785529f7a16bc1e1b90d7f84d0df->enter($__internal_96bf0a15b2ebaca38dc4d14b5b4205a6afd8785529f7a16bc1e1b90d7f84d0df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_96bf0a15b2ebaca38dc4d14b5b4205a6afd8785529f7a16bc1e1b90d7f84d0df->leave($__internal_96bf0a15b2ebaca38dc4d14b5b4205a6afd8785529f7a16bc1e1b90d7f84d0df_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e5652cdd8b9aba060852230cd7e0064d5eef906fde19edb8a231845084899380 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5652cdd8b9aba060852230cd7e0064d5eef906fde19edb8a231845084899380->enter($__internal_e5652cdd8b9aba060852230cd7e0064d5eef906fde19edb8a231845084899380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e5652cdd8b9aba060852230cd7e0064d5eef906fde19edb8a231845084899380->leave($__internal_e5652cdd8b9aba060852230cd7e0064d5eef906fde19edb8a231845084899380_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b4ff2bf8329e9d156b28962b7437fc1d38a9a78a0d4cce7b439d7fc49068680b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4ff2bf8329e9d156b28962b7437fc1d38a9a78a0d4cce7b439d7fc49068680b->enter($__internal_b4ff2bf8329e9d156b28962b7437fc1d38a9a78a0d4cce7b439d7fc49068680b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b4ff2bf8329e9d156b28962b7437fc1d38a9a78a0d4cce7b439d7fc49068680b->leave($__internal_b4ff2bf8329e9d156b28962b7437fc1d38a9a78a0d4cce7b439d7fc49068680b_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b9bcc72ef56018f63b682486b76ea12ac6b616f533a8515a12f97e56eadab597 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9bcc72ef56018f63b682486b76ea12ac6b616f533a8515a12f97e56eadab597->enter($__internal_b9bcc72ef56018f63b682486b76ea12ac6b616f533a8515a12f97e56eadab597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b9bcc72ef56018f63b682486b76ea12ac6b616f533a8515a12f97e56eadab597->leave($__internal_b9bcc72ef56018f63b682486b76ea12ac6b616f533a8515a12f97e56eadab597_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
", "base.html.twig", "C:\\wamp64\\www\\Symfony\\app\\Resources\\views\\base.html.twig");
    }
}
