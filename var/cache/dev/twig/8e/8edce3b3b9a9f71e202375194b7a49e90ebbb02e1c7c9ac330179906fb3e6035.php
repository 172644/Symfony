<?php

/* OCPlatformBundle:Advert:oldindex.html.twig */
class __TwigTemplate_701616f978f8da8e3e4bd41bce573a6dcfcdc3593850a1f327ad468dd2100c42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:oldindex.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_75763f233de0bd6fbbe3a75d945ea53e5e1e03ab10c5284f018541acac23c67f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75763f233de0bd6fbbe3a75d945ea53e5e1e03ab10c5284f018541acac23c67f->enter($__internal_75763f233de0bd6fbbe3a75d945ea53e5e1e03ab10c5284f018541acac23c67f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:oldindex.html.twig"));

        $__internal_7b12d6eb5695889cc11a60ec9678f817ad0496f3e621829a9e34e7c2ff180c5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b12d6eb5695889cc11a60ec9678f817ad0496f3e621829a9e34e7c2ff180c5a->enter($__internal_7b12d6eb5695889cc11a60ec9678f817ad0496f3e621829a9e34e7c2ff180c5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:oldindex.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_75763f233de0bd6fbbe3a75d945ea53e5e1e03ab10c5284f018541acac23c67f->leave($__internal_75763f233de0bd6fbbe3a75d945ea53e5e1e03ab10c5284f018541acac23c67f_prof);

        
        $__internal_7b12d6eb5695889cc11a60ec9678f817ad0496f3e621829a9e34e7c2ff180c5a->leave($__internal_7b12d6eb5695889cc11a60ec9678f817ad0496f3e621829a9e34e7c2ff180c5a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7afab99c0c1bf9603b1ce7b1316315dc7761a23b1c35952927ea88cb3751fd42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7afab99c0c1bf9603b1ce7b1316315dc7761a23b1c35952927ea88cb3751fd42->enter($__internal_7afab99c0c1bf9603b1ce7b1316315dc7761a23b1c35952927ea88cb3751fd42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_36dc23d5353551a008bc3d18fdd47a64f811855441a5dc018f7d458649385226 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36dc23d5353551a008bc3d18fdd47a64f811855441a5dc018f7d458649385226->enter($__internal_36dc23d5353551a008bc3d18fdd47a64f811855441a5dc018f7d458649385226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - OldIndex";
        
        $__internal_36dc23d5353551a008bc3d18fdd47a64f811855441a5dc018f7d458649385226->leave($__internal_36dc23d5353551a008bc3d18fdd47a64f811855441a5dc018f7d458649385226_prof);

        
        $__internal_7afab99c0c1bf9603b1ce7b1316315dc7761a23b1c35952927ea88cb3751fd42->leave($__internal_7afab99c0c1bf9603b1ce7b1316315dc7761a23b1c35952927ea88cb3751fd42_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_bb68f57813b55c6052b4d9fdf5a1428b7f28a59bd3f770dae2944c108369fa9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb68f57813b55c6052b4d9fdf5a1428b7f28a59bd3f770dae2944c108369fa9a->enter($__internal_bb68f57813b55c6052b4d9fdf5a1428b7f28a59bd3f770dae2944c108369fa9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5090b0210ec82db11c79b2e11742f8c9093b879c1fc3e6176d3f6037ff1377c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5090b0210ec82db11c79b2e11742f8c9093b879c1fc3e6176d3f6037ff1377c5->enter($__internal_5090b0210ec82db11c79b2e11742f8c9093b879c1fc3e6176d3f6037ff1377c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Hello ";
        echo twig_escape_filter($this->env, (isset($context["nom"]) || array_key_exists("nom", $context) ? $context["nom"] : (function () { throw new Twig_Error_Runtime('Variable "nom" does not exist.', 6, $this->getSourceContext()); })()), "html", null, true);
        echo " !</h1>

    <p>
        Le Hello World est un grand classique en programmation.
        Il signifie énormément, car cela veut dire que vous avez
        réussi à exécuter le programme pour accomplir une tâche simple :
        afficher ce hello world !
    </p>
    <br />
    ";
        // line 15
        if (array_key_exists("advert_id", $context)) {
            // line 16
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_view", array("id" => (isset($context["advert_id"]) || array_key_exists("advert_id", $context) ? $context["advert_id"] : (function () { throw new Twig_Error_Runtime('Variable "advert_id" does not exist.', 16, $this->getSourceContext()); })()))), "html", null, true);
            echo "\">
            Lien vers l'annonce d'id ";
            // line 17
            echo twig_escape_filter($this->env, (isset($context["advert_id"]) || array_key_exists("advert_id", $context) ? $context["advert_id"] : (function () { throw new Twig_Error_Runtime('Variable "advert_id" does not exist.', 17, $this->getSourceContext()); })()), "html", null, true);
            echo "
        </a>
    ";
        }
        
        $__internal_5090b0210ec82db11c79b2e11742f8c9093b879c1fc3e6176d3f6037ff1377c5->leave($__internal_5090b0210ec82db11c79b2e11742f8c9093b879c1fc3e6176d3f6037ff1377c5_prof);

        
        $__internal_bb68f57813b55c6052b4d9fdf5a1428b7f28a59bd3f770dae2944c108369fa9a->leave($__internal_bb68f57813b55c6052b4d9fdf5a1428b7f28a59bd3f770dae2944c108369fa9a_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:oldindex.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 17,  84 => 16,  82 => 15,  69 => 6,  60 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"OCPlatformBundle::layout.html.twig\" %}

{% block title %}{{ parent() }} - OldIndex{% endblock %}

{% block body %}
    <h1>Hello {{ nom }} !</h1>

    <p>
        Le Hello World est un grand classique en programmation.
        Il signifie énormément, car cela veut dire que vous avez
        réussi à exécuter le programme pour accomplir une tâche simple :
        afficher ce hello world !
    </p>
    <br />
    {% if advert_id is defined %}
        <a href=\"{{ path('oc_platform_view', { 'id': advert_id }) }}\">
            Lien vers l'annonce d'id {{ advert_id }}
        </a>
    {% endif %}
{% endblock %}", "OCPlatformBundle:Advert:oldindex.html.twig", "C:\\wamp64\\www\\Symfony\\src\\OC\\PlatformBundle/Resources/views/Advert/oldindex.html.twig");
    }
}
