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
        $__internal_c9df23a89e5826f1c2377f2ba0e4f269dd22d97d07f7c99300dc63ffaafc6cb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9df23a89e5826f1c2377f2ba0e4f269dd22d97d07f7c99300dc63ffaafc6cb0->enter($__internal_c9df23a89e5826f1c2377f2ba0e4f269dd22d97d07f7c99300dc63ffaafc6cb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_bf5424afd088e547054aefebf1ad2aeeba0d2186321611535353e50846d9b11d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf5424afd088e547054aefebf1ad2aeeba0d2186321611535353e50846d9b11d->enter($__internal_bf5424afd088e547054aefebf1ad2aeeba0d2186321611535353e50846d9b11d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c9df23a89e5826f1c2377f2ba0e4f269dd22d97d07f7c99300dc63ffaafc6cb0->leave($__internal_c9df23a89e5826f1c2377f2ba0e4f269dd22d97d07f7c99300dc63ffaafc6cb0_prof);

        
        $__internal_bf5424afd088e547054aefebf1ad2aeeba0d2186321611535353e50846d9b11d->leave($__internal_bf5424afd088e547054aefebf1ad2aeeba0d2186321611535353e50846d9b11d_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_673e748b709290481570df4f0c8b0cb60d898b4b001ae693a547a7fa112a6ee6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_673e748b709290481570df4f0c8b0cb60d898b4b001ae693a547a7fa112a6ee6->enter($__internal_673e748b709290481570df4f0c8b0cb60d898b4b001ae693a547a7fa112a6ee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2eadd4944c474fb25472cb94b95edb609325bde99cc595122b6f9591058878de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2eadd4944c474fb25472cb94b95edb609325bde99cc595122b6f9591058878de->enter($__internal_2eadd4944c474fb25472cb94b95edb609325bde99cc595122b6f9591058878de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2eadd4944c474fb25472cb94b95edb609325bde99cc595122b6f9591058878de->leave($__internal_2eadd4944c474fb25472cb94b95edb609325bde99cc595122b6f9591058878de_prof);

        
        $__internal_673e748b709290481570df4f0c8b0cb60d898b4b001ae693a547a7fa112a6ee6->leave($__internal_673e748b709290481570df4f0c8b0cb60d898b4b001ae693a547a7fa112a6ee6_prof);

    }

    // line 18
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_050df9ccacb281a6caff303bf042d548e9fcda35b88490f9710eff6c278f4f1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_050df9ccacb281a6caff303bf042d548e9fcda35b88490f9710eff6c278f4f1b->enter($__internal_050df9ccacb281a6caff303bf042d548e9fcda35b88490f9710eff6c278f4f1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_af3901a646ad510eefac7fdfdf0294694e517953721270e9062b5f09be8c1e35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af3901a646ad510eefac7fdfdf0294694e517953721270e9062b5f09be8c1e35->enter($__internal_af3901a646ad510eefac7fdfdf0294694e517953721270e9062b5f09be8c1e35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 19
        echo "    ";
        
        $__internal_af3901a646ad510eefac7fdfdf0294694e517953721270e9062b5f09be8c1e35->leave($__internal_af3901a646ad510eefac7fdfdf0294694e517953721270e9062b5f09be8c1e35_prof);

        
        $__internal_050df9ccacb281a6caff303bf042d548e9fcda35b88490f9710eff6c278f4f1b->leave($__internal_050df9ccacb281a6caff303bf042d548e9fcda35b88490f9710eff6c278f4f1b_prof);

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
