<?php

/* OCUserBundle::layout.html.twig */
class __TwigTemplate_3249941a2800b4bbe79956a35f32b5f68363d3a28721611aa0ded4712f2bfb93 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCCoreBundle::layout.html.twig", "OCUserBundle::layout.html.twig", 3);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_84bfc282e8d59c179fe207e7b3927a5f9a933c715ef1dfa958d7e98ddc4e53df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84bfc282e8d59c179fe207e7b3927a5f9a933c715ef1dfa958d7e98ddc4e53df->enter($__internal_84bfc282e8d59c179fe207e7b3927a5f9a933c715ef1dfa958d7e98ddc4e53df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84bfc282e8d59c179fe207e7b3927a5f9a933c715ef1dfa958d7e98ddc4e53df->leave($__internal_84bfc282e8d59c179fe207e7b3927a5f9a933c715ef1dfa958d7e98ddc4e53df_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_8a0ea30442ada0bd988870ec1fed0542d4f38f9eb7d11bfc3514f3923a8afd58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a0ea30442ada0bd988870ec1fed0542d4f38f9eb7d11bfc3514f3923a8afd58->enter($__internal_8a0ea30442ada0bd988870ec1fed0542d4f38f9eb7d11bfc3514f3923a8afd58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
    ";
        // line 9
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 9, $this->getSourceContext()); })()), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["messages"]) {
            // line 10
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 11
                echo "            <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\">
                ";
                // line 12
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
                echo "
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
    ";
        // line 18
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 20
        echo "
";
        
        $__internal_8a0ea30442ada0bd988870ec1fed0542d4f38f9eb7d11bfc3514f3923a8afd58->leave($__internal_8a0ea30442ada0bd988870ec1fed0542d4f38f9eb7d11bfc3514f3923a8afd58_prof);

    }

    // line 18
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_199bfb207d7da27682028ad9cf552c09d51919750c9238309c9c5faf700d4491 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_199bfb207d7da27682028ad9cf552c09d51919750c9238309c9c5faf700d4491->enter($__internal_199bfb207d7da27682028ad9cf552c09d51919750c9238309c9c5faf700d4491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 19
        echo "    ";
        
        $__internal_199bfb207d7da27682028ad9cf552c09d51919750c9238309c9c5faf700d4491->leave($__internal_199bfb207d7da27682028ad9cf552c09d51919750c9238309c9c5faf700d4491_prof);

    }

    public function getTemplateName()
    {
        return "OCUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 19,  88 => 18,  80 => 20,  77 => 18,  74 => 16,  68 => 15,  59 => 12,  54 => 11,  49 => 10,  44 => 9,  41 => 7,  35 => 6,  11 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{# On étend notre layout #}
{% extends \"OCCoreBundle::layout.html.twig\" %}

{# Dans notre layout, il faut définir le block body #}
{% block body %}

    {# On affiche les messages flash que définissent les contrôleurs du bundle #}
    {% for key, messages in app.session.flashbag.all() %}
        {% for message in messages %}
            <div class=\"alert alert-{{ key }}\">
                {{ message|trans({}, 'FOSUserBundle') }}
            </div>
        {% endfor %}
    {% endfor %}

    {# On définit ce block, dans lequel vont venir s'insérer les autres vues du bundle #}
    {% block fos_user_content %}
    {% endblock fos_user_content %}

{% endblock %}", "OCUserBundle::layout.html.twig", "C:\\wamp64\\www\\Symfony\\src\\OC\\UserBundle/Resources/views/layout.html.twig");
    }
}
