<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_577baa53164abd884b9debcacc53777ee59ddb2d4ab97fadd8ddf75611edc4a8 extends Twig_Template
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
        $__internal_fc658928d5a9335f21246748525d2f6db40b310fbe9c5e2b4ccbdec1e0614329 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc658928d5a9335f21246748525d2f6db40b310fbe9c5e2b4ccbdec1e0614329->enter($__internal_fc658928d5a9335f21246748525d2f6db40b310fbe9c5e2b4ccbdec1e0614329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_fc658928d5a9335f21246748525d2f6db40b310fbe9c5e2b4ccbdec1e0614329->leave($__internal_fc658928d5a9335f21246748525d2f6db40b310fbe9c5e2b4ccbdec1e0614329_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_32423932236648fb618c36db7b1b30a09f23ebeb5d616b1289dbe2f3de904bf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32423932236648fb618c36db7b1b30a09f23ebeb5d616b1289dbe2f3de904bf3->enter($__internal_32423932236648fb618c36db7b1b30a09f23ebeb5d616b1289dbe2f3de904bf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 4, $this->getSourceContext()); })())), "FOSUserBundle");
        
        $__internal_32423932236648fb618c36db7b1b30a09f23ebeb5d616b1289dbe2f3de904bf3->leave($__internal_32423932236648fb618c36db7b1b30a09f23ebeb5d616b1289dbe2f3de904bf3_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_9fc18d2a8899964c24ce42e542a7676882907d7077558744cb7e8b85193d3574 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fc18d2a8899964c24ce42e542a7676882907d7077558744cb7e8b85193d3574->enter($__internal_9fc18d2a8899964c24ce42e542a7676882907d7077558744cb7e8b85193d3574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_9fc18d2a8899964c24ce42e542a7676882907d7077558744cb7e8b85193d3574->leave($__internal_9fc18d2a8899964c24ce42e542a7676882907d7077558744cb7e8b85193d3574_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_c31cf0d320c5c32d225cd235f4ecee1931ee1d152b0565e679826fd3fc9c8710 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c31cf0d320c5c32d225cd235f4ecee1931ee1d152b0565e679826fd3fc9c8710->enter($__internal_c31cf0d320c5c32d225cd235f4ecee1931ee1d152b0565e679826fd3fc9c8710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_c31cf0d320c5c32d225cd235f4ecee1931ee1d152b0565e679826fd3fc9c8710->leave($__internal_c31cf0d320c5c32d225cd235f4ecee1931ee1d152b0565e679826fd3fc9c8710_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  67 => 13,  58 => 10,  52 => 8,  45 => 4,  39 => 2,  32 => 13,  30 => 8,  27 => 7,  25 => 2,);
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
", "@FOSUser/Registration/email.txt.twig", "C:\\wamp64\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\email.txt.twig");
    }
}
