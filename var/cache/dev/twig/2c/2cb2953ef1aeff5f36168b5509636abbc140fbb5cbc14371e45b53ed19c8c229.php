<?php

/* base.html.twig */
class __TwigTemplate_9f0e922cc4cb09c324b62a428a19b2c037916aa16b5760c86ed9aa4cd2389912 extends Twig_Template
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
        $__internal_bab9d9b640f46c86c550d51a365764217157af8788da18747a7713710c58584e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bab9d9b640f46c86c550d51a365764217157af8788da18747a7713710c58584e->enter($__internal_bab9d9b640f46c86c550d51a365764217157af8788da18747a7713710c58584e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_e0652353f3102286d3677c8e45cbc4b7338ee0da169baa6dae7bc82a01aa73c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0652353f3102286d3677c8e45cbc4b7338ee0da169baa6dae7bc82a01aa73c8->enter($__internal_e0652353f3102286d3677c8e45cbc4b7338ee0da169baa6dae7bc82a01aa73c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_bab9d9b640f46c86c550d51a365764217157af8788da18747a7713710c58584e->leave($__internal_bab9d9b640f46c86c550d51a365764217157af8788da18747a7713710c58584e_prof);

        
        $__internal_e0652353f3102286d3677c8e45cbc4b7338ee0da169baa6dae7bc82a01aa73c8->leave($__internal_e0652353f3102286d3677c8e45cbc4b7338ee0da169baa6dae7bc82a01aa73c8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6af18a898365e7cfdafdce2524be3b7b1ae4735952842f88fac0bc6ebd165eea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6af18a898365e7cfdafdce2524be3b7b1ae4735952842f88fac0bc6ebd165eea->enter($__internal_6af18a898365e7cfdafdce2524be3b7b1ae4735952842f88fac0bc6ebd165eea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4758eb0bedfca08ccd62341fb7d82075fbfdf29345e07cdb3a6ab55b3909a399 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4758eb0bedfca08ccd62341fb7d82075fbfdf29345e07cdb3a6ab55b3909a399->enter($__internal_4758eb0bedfca08ccd62341fb7d82075fbfdf29345e07cdb3a6ab55b3909a399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_4758eb0bedfca08ccd62341fb7d82075fbfdf29345e07cdb3a6ab55b3909a399->leave($__internal_4758eb0bedfca08ccd62341fb7d82075fbfdf29345e07cdb3a6ab55b3909a399_prof);

        
        $__internal_6af18a898365e7cfdafdce2524be3b7b1ae4735952842f88fac0bc6ebd165eea->leave($__internal_6af18a898365e7cfdafdce2524be3b7b1ae4735952842f88fac0bc6ebd165eea_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_70db33dd6679f5e05d0a820355ade8d93ed1666b1109a843bdd6ca2d7d2114ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70db33dd6679f5e05d0a820355ade8d93ed1666b1109a843bdd6ca2d7d2114ee->enter($__internal_70db33dd6679f5e05d0a820355ade8d93ed1666b1109a843bdd6ca2d7d2114ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ce8ddde3b77a56bc8acfe190965a3dc784092b34e0b12ba2703feb3e4b7c0eb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce8ddde3b77a56bc8acfe190965a3dc784092b34e0b12ba2703feb3e4b7c0eb6->enter($__internal_ce8ddde3b77a56bc8acfe190965a3dc784092b34e0b12ba2703feb3e4b7c0eb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ce8ddde3b77a56bc8acfe190965a3dc784092b34e0b12ba2703feb3e4b7c0eb6->leave($__internal_ce8ddde3b77a56bc8acfe190965a3dc784092b34e0b12ba2703feb3e4b7c0eb6_prof);

        
        $__internal_70db33dd6679f5e05d0a820355ade8d93ed1666b1109a843bdd6ca2d7d2114ee->leave($__internal_70db33dd6679f5e05d0a820355ade8d93ed1666b1109a843bdd6ca2d7d2114ee_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_3dee7086eb22d89ba13b2bc7585d0dce2492e5bc4ad1c1564b0a2820be6b7249 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dee7086eb22d89ba13b2bc7585d0dce2492e5bc4ad1c1564b0a2820be6b7249->enter($__internal_3dee7086eb22d89ba13b2bc7585d0dce2492e5bc4ad1c1564b0a2820be6b7249_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_56f120605a813a3848dfa26a924a0dc12df181a72586c511a9d0faeaea26917c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56f120605a813a3848dfa26a924a0dc12df181a72586c511a9d0faeaea26917c->enter($__internal_56f120605a813a3848dfa26a924a0dc12df181a72586c511a9d0faeaea26917c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_56f120605a813a3848dfa26a924a0dc12df181a72586c511a9d0faeaea26917c->leave($__internal_56f120605a813a3848dfa26a924a0dc12df181a72586c511a9d0faeaea26917c_prof);

        
        $__internal_3dee7086eb22d89ba13b2bc7585d0dce2492e5bc4ad1c1564b0a2820be6b7249->leave($__internal_3dee7086eb22d89ba13b2bc7585d0dce2492e5bc4ad1c1564b0a2820be6b7249_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_792f5932626d2bb9fe4daad34967d42d9f7d2632825ce0a5faac06d9ba0a933d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_792f5932626d2bb9fe4daad34967d42d9f7d2632825ce0a5faac06d9ba0a933d->enter($__internal_792f5932626d2bb9fe4daad34967d42d9f7d2632825ce0a5faac06d9ba0a933d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c4f4c7d396523dedc44ff99cb71aeca35a5a59baaa3dd1ba51d5a153ea9ea0e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4f4c7d396523dedc44ff99cb71aeca35a5a59baaa3dd1ba51d5a153ea9ea0e8->enter($__internal_c4f4c7d396523dedc44ff99cb71aeca35a5a59baaa3dd1ba51d5a153ea9ea0e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c4f4c7d396523dedc44ff99cb71aeca35a5a59baaa3dd1ba51d5a153ea9ea0e8->leave($__internal_c4f4c7d396523dedc44ff99cb71aeca35a5a59baaa3dd1ba51d5a153ea9ea0e8_prof);

        
        $__internal_792f5932626d2bb9fe4daad34967d42d9f7d2632825ce0a5faac06d9ba0a933d->leave($__internal_792f5932626d2bb9fe4daad34967d42d9f7d2632825ce0a5faac06d9ba0a933d_prof);

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
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
