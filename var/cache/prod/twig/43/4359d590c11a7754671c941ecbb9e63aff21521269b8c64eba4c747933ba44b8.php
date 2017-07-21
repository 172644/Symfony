<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_bc16fde5cf4476fb8cfe2553b2188eb3ec00230e2f26e67a64c236047acc251d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCCoreBundle::layout.html.twig", "@FOSUser/layout.html.twig", 3);
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
        $__internal_2383af708f8af254dc4617f6364d40c3c8729eb0de5557371a6800f163bc5ad0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2383af708f8af254dc4617f6364d40c3c8729eb0de5557371a6800f163bc5ad0->enter($__internal_2383af708f8af254dc4617f6364d40c3c8729eb0de5557371a6800f163bc5ad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2383af708f8af254dc4617f6364d40c3c8729eb0de5557371a6800f163bc5ad0->leave($__internal_2383af708f8af254dc4617f6364d40c3c8729eb0de5557371a6800f163bc5ad0_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_ff3ffc9ad483c7c1d129a3babcdb5ef5a00f256f502ecebd034c1635e8278ac0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff3ffc9ad483c7c1d129a3babcdb5ef5a00f256f502ecebd034c1635e8278ac0->enter($__internal_ff3ffc9ad483c7c1d129a3babcdb5ef5a00f256f502ecebd034c1635e8278ac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ff3ffc9ad483c7c1d129a3babcdb5ef5a00f256f502ecebd034c1635e8278ac0->leave($__internal_ff3ffc9ad483c7c1d129a3babcdb5ef5a00f256f502ecebd034c1635e8278ac0_prof);

    }

    // line 18
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d48fc080fc114d369adf851ab4a16afc21a102fcfe6560256882d1fd0f08b5fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d48fc080fc114d369adf851ab4a16afc21a102fcfe6560256882d1fd0f08b5fe->enter($__internal_d48fc080fc114d369adf851ab4a16afc21a102fcfe6560256882d1fd0f08b5fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 19
        echo "    ";
        
        $__internal_d48fc080fc114d369adf851ab4a16afc21a102fcfe6560256882d1fd0f08b5fe->leave($__internal_d48fc080fc114d369adf851ab4a16afc21a102fcfe6560256882d1fd0f08b5fe_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
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

{% endblock %}", "@FOSUser/layout.html.twig", "C:\\wamp64\\www\\Symfony\\src\\OC\\UserBundle\\Resources\\views\\layout.html.twig");
    }
}
