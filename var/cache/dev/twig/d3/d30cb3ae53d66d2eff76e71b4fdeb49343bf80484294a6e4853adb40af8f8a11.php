<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_5bf0cb38a884765e33c45b113d789992a61052ad51eb97db586497b0a02696ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_da2929587cc6ca444df4a3b523402baa042e8c620e12dbffa25309f552d2b9f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da2929587cc6ca444df4a3b523402baa042e8c620e12dbffa25309f552d2b9f7->enter($__internal_da2929587cc6ca444df4a3b523402baa042e8c620e12dbffa25309f552d2b9f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_97f8c7cad3f37532189b1812c8499b25fdda73d8100c0d435dcb1dcf792a4833 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97f8c7cad3f37532189b1812c8499b25fdda73d8100c0d435dcb1dcf792a4833->enter($__internal_97f8c7cad3f37532189b1812c8499b25fdda73d8100c0d435dcb1dcf792a4833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_da2929587cc6ca444df4a3b523402baa042e8c620e12dbffa25309f552d2b9f7->leave($__internal_da2929587cc6ca444df4a3b523402baa042e8c620e12dbffa25309f552d2b9f7_prof);

        
        $__internal_97f8c7cad3f37532189b1812c8499b25fdda73d8100c0d435dcb1dcf792a4833->leave($__internal_97f8c7cad3f37532189b1812c8499b25fdda73d8100c0d435dcb1dcf792a4833_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_e1b1d379db1e356fceaf342ebc94a20b58c78cdc767b0355757a89b6a06644b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1b1d379db1e356fceaf342ebc94a20b58c78cdc767b0355757a89b6a06644b0->enter($__internal_e1b1d379db1e356fceaf342ebc94a20b58c78cdc767b0355757a89b6a06644b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_85c8c90b7188894fd87429450b8987a34c9da8bcc98664ecc7161c1048085782 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85c8c90b7188894fd87429450b8987a34c9da8bcc98664ecc7161c1048085782->enter($__internal_85c8c90b7188894fd87429450b8987a34c9da8bcc98664ecc7161c1048085782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 4, $this->getSourceContext()); })())), "FOSUserBundle");
        
        $__internal_85c8c90b7188894fd87429450b8987a34c9da8bcc98664ecc7161c1048085782->leave($__internal_85c8c90b7188894fd87429450b8987a34c9da8bcc98664ecc7161c1048085782_prof);

        
        $__internal_e1b1d379db1e356fceaf342ebc94a20b58c78cdc767b0355757a89b6a06644b0->leave($__internal_e1b1d379db1e356fceaf342ebc94a20b58c78cdc767b0355757a89b6a06644b0_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_69f24259340cb801c15de755f85fc75c7158a69ba44041631cd171d061412ccb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69f24259340cb801c15de755f85fc75c7158a69ba44041631cd171d061412ccb->enter($__internal_69f24259340cb801c15de755f85fc75c7158a69ba44041631cd171d061412ccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_b32cd2de809348115e6d70cf9c130c43e88f784a43016e88f124505d91fd2048 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b32cd2de809348115e6d70cf9c130c43e88f784a43016e88f124505d91fd2048->enter($__internal_b32cd2de809348115e6d70cf9c130c43e88f784a43016e88f124505d91fd2048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_b32cd2de809348115e6d70cf9c130c43e88f784a43016e88f124505d91fd2048->leave($__internal_b32cd2de809348115e6d70cf9c130c43e88f784a43016e88f124505d91fd2048_prof);

        
        $__internal_69f24259340cb801c15de755f85fc75c7158a69ba44041631cd171d061412ccb->leave($__internal_69f24259340cb801c15de755f85fc75c7158a69ba44041631cd171d061412ccb_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_a4a919746117001950b6b4f9194b2358b837bfbf73df02359336043731deb5fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4a919746117001950b6b4f9194b2358b837bfbf73df02359336043731deb5fd->enter($__internal_a4a919746117001950b6b4f9194b2358b837bfbf73df02359336043731deb5fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_2ac4de69cbe929950d06193e218624c784f23ae4c76af528b91d39064a5ee144 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ac4de69cbe929950d06193e218624c784f23ae4c76af528b91d39064a5ee144->enter($__internal_2ac4de69cbe929950d06193e218624c784f23ae4c76af528b91d39064a5ee144_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_2ac4de69cbe929950d06193e218624c784f23ae4c76af528b91d39064a5ee144->leave($__internal_2ac4de69cbe929950d06193e218624c784f23ae4c76af528b91d39064a5ee144_prof);

        
        $__internal_a4a919746117001950b6b4f9194b2358b837bfbf73df02359336043731deb5fd->leave($__internal_a4a919746117001950b6b4f9194b2358b837bfbf73df02359336043731deb5fd_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "C:\\wamp64\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
