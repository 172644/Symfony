<?php

/* OCUserBundle::layout.html.twig */
class __TwigTemplate_a141acb9b3274d197c19a720c6cc71595ea092ab8d1478e5844c65f751f65905 extends Twig_Template
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
        $__internal_08c08536c8f335f54bc5eeb7f78dd68a27485a35aa600c47fded1cd97254c268 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08c08536c8f335f54bc5eeb7f78dd68a27485a35aa600c47fded1cd97254c268->enter($__internal_08c08536c8f335f54bc5eeb7f78dd68a27485a35aa600c47fded1cd97254c268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCUserBundle::layout.html.twig"));

        $__internal_82059994c55387d1b4926dff282b1af283f4fc61c5f75ab82893e34ba0120b69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82059994c55387d1b4926dff282b1af283f4fc61c5f75ab82893e34ba0120b69->enter($__internal_82059994c55387d1b4926dff282b1af283f4fc61c5f75ab82893e34ba0120b69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08c08536c8f335f54bc5eeb7f78dd68a27485a35aa600c47fded1cd97254c268->leave($__internal_08c08536c8f335f54bc5eeb7f78dd68a27485a35aa600c47fded1cd97254c268_prof);

        
        $__internal_82059994c55387d1b4926dff282b1af283f4fc61c5f75ab82893e34ba0120b69->leave($__internal_82059994c55387d1b4926dff282b1af283f4fc61c5f75ab82893e34ba0120b69_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_f74a38d3833cbc8ef18c9fbb3d8f02f2bf206dcf1d44872647fef3470c5b52fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f74a38d3833cbc8ef18c9fbb3d8f02f2bf206dcf1d44872647fef3470c5b52fe->enter($__internal_f74a38d3833cbc8ef18c9fbb3d8f02f2bf206dcf1d44872647fef3470c5b52fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_30768848f283b905d5e84f57058bca9dc6bb2c4baf87ded1fc67950639fe671d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30768848f283b905d5e84f57058bca9dc6bb2c4baf87ded1fc67950639fe671d->enter($__internal_30768848f283b905d5e84f57058bca9dc6bb2c4baf87ded1fc67950639fe671d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_30768848f283b905d5e84f57058bca9dc6bb2c4baf87ded1fc67950639fe671d->leave($__internal_30768848f283b905d5e84f57058bca9dc6bb2c4baf87ded1fc67950639fe671d_prof);

        
        $__internal_f74a38d3833cbc8ef18c9fbb3d8f02f2bf206dcf1d44872647fef3470c5b52fe->leave($__internal_f74a38d3833cbc8ef18c9fbb3d8f02f2bf206dcf1d44872647fef3470c5b52fe_prof);

    }

    // line 18
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7e085fa814cced2e94ba26a209ebc0b7d2ff16b847093852b1bb1a2731a9f951 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e085fa814cced2e94ba26a209ebc0b7d2ff16b847093852b1bb1a2731a9f951->enter($__internal_7e085fa814cced2e94ba26a209ebc0b7d2ff16b847093852b1bb1a2731a9f951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_540fe7bb8f414084c79251607622867acb683d91083c7880187af59b1e7ad34f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_540fe7bb8f414084c79251607622867acb683d91083c7880187af59b1e7ad34f->enter($__internal_540fe7bb8f414084c79251607622867acb683d91083c7880187af59b1e7ad34f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 19
        echo "    ";
        
        $__internal_540fe7bb8f414084c79251607622867acb683d91083c7880187af59b1e7ad34f->leave($__internal_540fe7bb8f414084c79251607622867acb683d91083c7880187af59b1e7ad34f_prof);

        
        $__internal_7e085fa814cced2e94ba26a209ebc0b7d2ff16b847093852b1bb1a2731a9f951->leave($__internal_7e085fa814cced2e94ba26a209ebc0b7d2ff16b847093852b1bb1a2731a9f951_prof);

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
        return array (  109 => 19,  100 => 18,  89 => 20,  86 => 18,  83 => 16,  77 => 15,  68 => 12,  63 => 11,  58 => 10,  53 => 9,  50 => 7,  41 => 6,  11 => 3,);
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
