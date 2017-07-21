<?php

/* @OCPlatform/layout.html.twig */
class __TwigTemplate_78465eda2cf8fda697bcf6c585e1005127c25ca071cdd5d2036291dbbcc3b27a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OCCoreBundle::layout.html.twig", "@OCPlatform/layout.html.twig", 1);
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
        $__internal_0c364d7e15f219280af1689951e806a507171a13b26d8eefa654d7dc618b52d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c364d7e15f219280af1689951e806a507171a13b26d8eefa654d7dc618b52d6->enter($__internal_0c364d7e15f219280af1689951e806a507171a13b26d8eefa654d7dc618b52d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCPlatform/layout.html.twig"));

        $__internal_93c7969d1d505e05e3421723badd0399016b5247cc12d5e48b6c9ce1d164b534 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93c7969d1d505e05e3421723badd0399016b5247cc12d5e48b6c9ce1d164b534->enter($__internal_93c7969d1d505e05e3421723badd0399016b5247cc12d5e48b6c9ce1d164b534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCPlatform/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c364d7e15f219280af1689951e806a507171a13b26d8eefa654d7dc618b52d6->leave($__internal_0c364d7e15f219280af1689951e806a507171a13b26d8eefa654d7dc618b52d6_prof);

        
        $__internal_93c7969d1d505e05e3421723badd0399016b5247cc12d5e48b6c9ce1d164b534->leave($__internal_93c7969d1d505e05e3421723badd0399016b5247cc12d5e48b6c9ce1d164b534_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6e4c5bf3cb0b261aed9f3f38784944bbdc0e14b2b4086b93dc35e290a46be706 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e4c5bf3cb0b261aed9f3f38784944bbdc0e14b2b4086b93dc35e290a46be706->enter($__internal_6e4c5bf3cb0b261aed9f3f38784944bbdc0e14b2b4086b93dc35e290a46be706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bfd5bda9c157dedbd33930bcb516954cb72a260c3d58f77635dd771f6cbd6280 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfd5bda9c157dedbd33930bcb516954cb72a260c3d58f77635dd771f6cbd6280->enter($__internal_bfd5bda9c157dedbd33930bcb516954cb72a260c3d58f77635dd771f6cbd6280_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_bfd5bda9c157dedbd33930bcb516954cb72a260c3d58f77635dd771f6cbd6280->leave($__internal_bfd5bda9c157dedbd33930bcb516954cb72a260c3d58f77635dd771f6cbd6280_prof);

        
        $__internal_6e4c5bf3cb0b261aed9f3f38784944bbdc0e14b2b4086b93dc35e290a46be706->leave($__internal_6e4c5bf3cb0b261aed9f3f38784944bbdc0e14b2b4086b93dc35e290a46be706_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_4657ea242a8c242201e79a30e02763b8fba6a0af09143f8ed17956e1eb85b4d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4657ea242a8c242201e79a30e02763b8fba6a0af09143f8ed17956e1eb85b4d5->enter($__internal_4657ea242a8c242201e79a30e02763b8fba6a0af09143f8ed17956e1eb85b4d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_eb6ba3b45310db505769971a57e7a9e332360e34eedceebedbebca505402ed9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb6ba3b45310db505769971a57e7a9e332360e34eedceebedbebca505402ed9b->enter($__internal_eb6ba3b45310db505769971a57e7a9e332360e34eedceebedbebca505402ed9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
    ";
        // line 10
        echo "    <h1>Annonces</h1>

    <hr>

    ";
        // line 15
        echo "    ";
        $this->displayBlock('ocplatform_body', $context, $blocks);
        // line 17
        echo "
";
        
        $__internal_eb6ba3b45310db505769971a57e7a9e332360e34eedceebedbebca505402ed9b->leave($__internal_eb6ba3b45310db505769971a57e7a9e332360e34eedceebedbebca505402ed9b_prof);

        
        $__internal_4657ea242a8c242201e79a30e02763b8fba6a0af09143f8ed17956e1eb85b4d5->leave($__internal_4657ea242a8c242201e79a30e02763b8fba6a0af09143f8ed17956e1eb85b4d5_prof);

    }

    // line 15
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_5da2a09409c64db09d19277f39509b4823237a01c07ce042510d9c2975e79770 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5da2a09409c64db09d19277f39509b4823237a01c07ce042510d9c2975e79770->enter($__internal_5da2a09409c64db09d19277f39509b4823237a01c07ce042510d9c2975e79770_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_3b27e90af6fb75da8173af62efa10f6481080182ccda23b59ab93b8121b9a5a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b27e90af6fb75da8173af62efa10f6481080182ccda23b59ab93b8121b9a5a5->enter($__internal_3b27e90af6fb75da8173af62efa10f6481080182ccda23b59ab93b8121b9a5a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 16
        echo "    ";
        
        $__internal_3b27e90af6fb75da8173af62efa10f6481080182ccda23b59ab93b8121b9a5a5->leave($__internal_3b27e90af6fb75da8173af62efa10f6481080182ccda23b59ab93b8121b9a5a5_prof);

        
        $__internal_5da2a09409c64db09d19277f39509b4823237a01c07ce042510d9c2975e79770->leave($__internal_5da2a09409c64db09d19277f39509b4823237a01c07ce042510d9c2975e79770_prof);

    }

    public function getTemplateName()
    {
        return "@OCPlatform/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 16,  96 => 15,  85 => 17,  82 => 15,  76 => 10,  73 => 8,  64 => 7,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"OCCoreBundle::layout.html.twig\" %}

{% block title %}
    Annonces - {{ parent() }}
{% endblock %}

{% block body %}

    {# On définit un sous-titre commun à toutes les pages du bundle, par exemple #}
    <h1>Annonces</h1>

    <hr>

    {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}
    {% block ocplatform_body %}
    {% endblock %}

{% endblock %}", "@OCPlatform/layout.html.twig", "C:\\wamp64\\www\\Symfony\\src\\OC\\PlatformBundle\\Resources\\views\\layout.html.twig");
    }
}
