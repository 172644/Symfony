<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_6439889028d4196865c8722852c4e93f41d986c3ceb7995fa583f5146c163183 extends Twig_Template
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
        $__internal_6081502c24f30dd6e5fbb2b71ac1235587b081848d9dbe6e309de47ec8258e80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6081502c24f30dd6e5fbb2b71ac1235587b081848d9dbe6e309de47ec8258e80->enter($__internal_6081502c24f30dd6e5fbb2b71ac1235587b081848d9dbe6e309de47ec8258e80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_00ec4f48d1aafaa3cc39c0dc72eefe7db47034110c9951bb3e9b9c11f2290d31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00ec4f48d1aafaa3cc39c0dc72eefe7db47034110c9951bb3e9b9c11f2290d31->enter($__internal_00ec4f48d1aafaa3cc39c0dc72eefe7db47034110c9951bb3e9b9c11f2290d31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6081502c24f30dd6e5fbb2b71ac1235587b081848d9dbe6e309de47ec8258e80->leave($__internal_6081502c24f30dd6e5fbb2b71ac1235587b081848d9dbe6e309de47ec8258e80_prof);

        
        $__internal_00ec4f48d1aafaa3cc39c0dc72eefe7db47034110c9951bb3e9b9c11f2290d31->leave($__internal_00ec4f48d1aafaa3cc39c0dc72eefe7db47034110c9951bb3e9b9c11f2290d31_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_f369938c5d6a3aa5bf56b5f0ec4f059d5e2773ae569767ec9313af23812f96b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f369938c5d6a3aa5bf56b5f0ec4f059d5e2773ae569767ec9313af23812f96b3->enter($__internal_f369938c5d6a3aa5bf56b5f0ec4f059d5e2773ae569767ec9313af23812f96b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0b856cbbf23875cbe0f4a734ef8501451d5b79127a92d8e116f675968a15290e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b856cbbf23875cbe0f4a734ef8501451d5b79127a92d8e116f675968a15290e->enter($__internal_0b856cbbf23875cbe0f4a734ef8501451d5b79127a92d8e116f675968a15290e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0b856cbbf23875cbe0f4a734ef8501451d5b79127a92d8e116f675968a15290e->leave($__internal_0b856cbbf23875cbe0f4a734ef8501451d5b79127a92d8e116f675968a15290e_prof);

        
        $__internal_f369938c5d6a3aa5bf56b5f0ec4f059d5e2773ae569767ec9313af23812f96b3->leave($__internal_f369938c5d6a3aa5bf56b5f0ec4f059d5e2773ae569767ec9313af23812f96b3_prof);

    }

    // line 18
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_84f5ffe1539588e0b8c10ca3730118ea78db8d7d93262d1ffd50decb797e374f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84f5ffe1539588e0b8c10ca3730118ea78db8d7d93262d1ffd50decb797e374f->enter($__internal_84f5ffe1539588e0b8c10ca3730118ea78db8d7d93262d1ffd50decb797e374f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0a3f4dd4b4c278418518666c81e89a85e2631e7885ca4895df63e86945ed0e6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a3f4dd4b4c278418518666c81e89a85e2631e7885ca4895df63e86945ed0e6b->enter($__internal_0a3f4dd4b4c278418518666c81e89a85e2631e7885ca4895df63e86945ed0e6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 19
        echo "    ";
        
        $__internal_0a3f4dd4b4c278418518666c81e89a85e2631e7885ca4895df63e86945ed0e6b->leave($__internal_0a3f4dd4b4c278418518666c81e89a85e2631e7885ca4895df63e86945ed0e6b_prof);

        
        $__internal_84f5ffe1539588e0b8c10ca3730118ea78db8d7d93262d1ffd50decb797e374f->leave($__internal_84f5ffe1539588e0b8c10ca3730118ea78db8d7d93262d1ffd50decb797e374f_prof);

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

{% endblock %}", "@FOSUser/layout.html.twig", "C:\\wamp64\\www\\Symfony\\src\\OC\\UserBundle\\Resources\\views\\layout.html.twig");
    }
}
