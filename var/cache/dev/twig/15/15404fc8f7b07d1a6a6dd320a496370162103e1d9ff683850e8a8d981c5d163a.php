<?php

/* OCCoreBundle:Default:index.html.twig */
class __TwigTemplate_26df6d08017a0351b1258f0e535147ef2c5eddd2f2c358ece39a9af0f9247823 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OCCoreBundle::layout.html.twig", "OCCoreBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_db41cc5128ce76d59ee42e1c26f316d31efe3c4f21662841da0a3ba5c5f925d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db41cc5128ce76d59ee42e1c26f316d31efe3c4f21662841da0a3ba5c5f925d1->enter($__internal_db41cc5128ce76d59ee42e1c26f316d31efe3c4f21662841da0a3ba5c5f925d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCCoreBundle:Default:index.html.twig"));

        $__internal_af9fda86dfefc0dd6221829c5d05388f9a7a64b8ae035624282ae32fd702c824 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af9fda86dfefc0dd6221829c5d05388f9a7a64b8ae035624282ae32fd702c824->enter($__internal_af9fda86dfefc0dd6221829c5d05388f9a7a64b8ae035624282ae32fd702c824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCCoreBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db41cc5128ce76d59ee42e1c26f316d31efe3c4f21662841da0a3ba5c5f925d1->leave($__internal_db41cc5128ce76d59ee42e1c26f316d31efe3c4f21662841da0a3ba5c5f925d1_prof);

        
        $__internal_af9fda86dfefc0dd6221829c5d05388f9a7a64b8ae035624282ae32fd702c824->leave($__internal_af9fda86dfefc0dd6221829c5d05388f9a7a64b8ae035624282ae32fd702c824_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_26f05d038cd86c8ede6a1fe2c7c6822710dcd030bb3f87efcf73eecfadedf663 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26f05d038cd86c8ede6a1fe2c7c6822710dcd030bb3f87efcf73eecfadedf663->enter($__internal_26f05d038cd86c8ede6a1fe2c7c6822710dcd030bb3f87efcf73eecfadedf663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_323a67d48e0f8052907e4dc3c487d7b7a8b567386962e5c17aad59587d11606c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_323a67d48e0f8052907e4dc3c487d7b7a8b567386962e5c17aad59587d11606c->enter($__internal_323a67d48e0f8052907e4dc3c487d7b7a8b567386962e5c17aad59587d11606c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Index - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_323a67d48e0f8052907e4dc3c487d7b7a8b567386962e5c17aad59587d11606c->leave($__internal_323a67d48e0f8052907e4dc3c487d7b7a8b567386962e5c17aad59587d11606c_prof);

        
        $__internal_26f05d038cd86c8ede6a1fe2c7c6822710dcd030bb3f87efcf73eecfadedf663->leave($__internal_26f05d038cd86c8ede6a1fe2c7c6822710dcd030bb3f87efcf73eecfadedf663_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_07274d6b5f63805868338c88cdd28fd803bb088775b4b13e443cbf703532db7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07274d6b5f63805868338c88cdd28fd803bb088775b4b13e443cbf703532db7d->enter($__internal_07274d6b5f63805868338c88cdd28fd803bb088775b4b13e443cbf703532db7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ce02d0f97c7c74559dd6dad05903e02e2f0c2fb7d01aab5250d6b30adde93dd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce02d0f97c7c74559dd6dad05903e02e2f0c2fb7d01aab5250d6b30adde93dd6->enter($__internal_ce02d0f97c7c74559dd6dad05903e02e2f0c2fb7d01aab5250d6b30adde93dd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
    ";
        // line 10
        echo "    <h1>Annonces</h1>

    <hr>

    <p>
    ";
        // line 16
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 16, $this->getSourceContext()); })()), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 17
            echo "        <p>Message flash : ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    </p>

    <hr>
    ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("OCPlatformBundle:Advert:lastAnnonce", array("limit" => 3)));
        echo "
";
        
        $__internal_ce02d0f97c7c74559dd6dad05903e02e2f0c2fb7d01aab5250d6b30adde93dd6->leave($__internal_ce02d0f97c7c74559dd6dad05903e02e2f0c2fb7d01aab5250d6b30adde93dd6_prof);

        
        $__internal_07274d6b5f63805868338c88cdd28fd803bb088775b4b13e443cbf703532db7d->leave($__internal_07274d6b5f63805868338c88cdd28fd803bb088775b4b13e443cbf703532db7d_prof);

    }

    public function getTemplateName()
    {
        return "OCCoreBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 22,  96 => 19,  87 => 17,  82 => 16,  75 => 10,  72 => 8,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"OCCoreBundle::layout.html.twig\" %}

{% block title %}
    Index - {{ parent() }}
{% endblock %}

{% block body %}

    {# On définit un sous-titre commun à toutes les pages du bundle, par exemple #}
    <h1>Annonces</h1>

    <hr>

    <p>
    {# On affiche tous les messages flash dont le nom est « info » #}
    {% for message in app.session.flashbag.get('info') %}
        <p>Message flash : {{ message }}</p>
    {% endfor %}
    </p>

    <hr>
    {{ render(controller(\"OCPlatformBundle:Advert:lastAnnonce\", {'limit': 3})) }}
{% endblock %}", "OCCoreBundle:Default:index.html.twig", "C:\\wamp64\\www\\Symfony\\src\\OC\\CoreBundle/Resources/views/Default/index.html.twig");
    }
}
