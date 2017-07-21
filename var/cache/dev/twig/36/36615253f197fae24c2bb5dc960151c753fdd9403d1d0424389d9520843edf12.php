<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_9e366ccf0affd80a39e19d07424ea2b4698a4709a224cb0fb377fb1897d1ea69 extends Twig_Template
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
        $__internal_5cf459be35e0dfd7025c0ff4100af910f82f99df38c6b5bb4f18184378312c3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cf459be35e0dfd7025c0ff4100af910f82f99df38c6b5bb4f18184378312c3e->enter($__internal_5cf459be35e0dfd7025c0ff4100af910f82f99df38c6b5bb4f18184378312c3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_e842ceb524d2f206be3625ce51696816253b77bb30d4e41a45993cf2dffcf644 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e842ceb524d2f206be3625ce51696816253b77bb30d4e41a45993cf2dffcf644->enter($__internal_e842ceb524d2f206be3625ce51696816253b77bb30d4e41a45993cf2dffcf644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_5cf459be35e0dfd7025c0ff4100af910f82f99df38c6b5bb4f18184378312c3e->leave($__internal_5cf459be35e0dfd7025c0ff4100af910f82f99df38c6b5bb4f18184378312c3e_prof);

        
        $__internal_e842ceb524d2f206be3625ce51696816253b77bb30d4e41a45993cf2dffcf644->leave($__internal_e842ceb524d2f206be3625ce51696816253b77bb30d4e41a45993cf2dffcf644_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_6fc76d72d511d5df1e8a8d8f122d990ad0edf0b8b63c15235970925c83f6e746 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fc76d72d511d5df1e8a8d8f122d990ad0edf0b8b63c15235970925c83f6e746->enter($__internal_6fc76d72d511d5df1e8a8d8f122d990ad0edf0b8b63c15235970925c83f6e746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_821c9e3de8abf28ab53f950ac7ddd79189eb2959849daa69c96a6564be414644 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_821c9e3de8abf28ab53f950ac7ddd79189eb2959849daa69c96a6564be414644->enter($__internal_821c9e3de8abf28ab53f950ac7ddd79189eb2959849daa69c96a6564be414644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle");
        
        $__internal_821c9e3de8abf28ab53f950ac7ddd79189eb2959849daa69c96a6564be414644->leave($__internal_821c9e3de8abf28ab53f950ac7ddd79189eb2959849daa69c96a6564be414644_prof);

        
        $__internal_6fc76d72d511d5df1e8a8d8f122d990ad0edf0b8b63c15235970925c83f6e746->leave($__internal_6fc76d72d511d5df1e8a8d8f122d990ad0edf0b8b63c15235970925c83f6e746_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_e837c1e96058eb6a9d387c767f8ddfefd0a978b5c7464ad5d9cd9d1fc2f1e445 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e837c1e96058eb6a9d387c767f8ddfefd0a978b5c7464ad5d9cd9d1fc2f1e445->enter($__internal_e837c1e96058eb6a9d387c767f8ddfefd0a978b5c7464ad5d9cd9d1fc2f1e445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_51571e4ea38233db829063bf1abe0eb1e1da31e06ba8bfab4d08a816d68cc382 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51571e4ea38233db829063bf1abe0eb1e1da31e06ba8bfab4d08a816d68cc382->enter($__internal_51571e4ea38233db829063bf1abe0eb1e1da31e06ba8bfab4d08a816d68cc382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_51571e4ea38233db829063bf1abe0eb1e1da31e06ba8bfab4d08a816d68cc382->leave($__internal_51571e4ea38233db829063bf1abe0eb1e1da31e06ba8bfab4d08a816d68cc382_prof);

        
        $__internal_e837c1e96058eb6a9d387c767f8ddfefd0a978b5c7464ad5d9cd9d1fc2f1e445->leave($__internal_e837c1e96058eb6a9d387c767f8ddfefd0a978b5c7464ad5d9cd9d1fc2f1e445_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_ae627ccafe62f7e9086757d7833e5f742fdd799aed8c7658dd2d81dd1ef50cb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae627ccafe62f7e9086757d7833e5f742fdd799aed8c7658dd2d81dd1ef50cb4->enter($__internal_ae627ccafe62f7e9086757d7833e5f742fdd799aed8c7658dd2d81dd1ef50cb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_7fedd1445ec4e372cb991d1d9e37ae7013e38a65feeee446502143764c66c9aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fedd1445ec4e372cb991d1d9e37ae7013e38a65feeee446502143764c66c9aa->enter($__internal_7fedd1445ec4e372cb991d1d9e37ae7013e38a65feeee446502143764c66c9aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_7fedd1445ec4e372cb991d1d9e37ae7013e38a65feeee446502143764c66c9aa->leave($__internal_7fedd1445ec4e372cb991d1d9e37ae7013e38a65feeee446502143764c66c9aa_prof);

        
        $__internal_ae627ccafe62f7e9086757d7833e5f742fdd799aed8c7658dd2d81dd1ef50cb4->leave($__internal_ae627ccafe62f7e9086757d7833e5f742fdd799aed8c7658dd2d81dd1ef50cb4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "C:\\wamp64\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
