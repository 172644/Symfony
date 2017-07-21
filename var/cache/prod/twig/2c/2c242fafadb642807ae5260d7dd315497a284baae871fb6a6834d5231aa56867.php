<?php

/* OCPlatformBundle:Advert:index.html.twig */
class __TwigTemplate_4adb5fdb26c9ceb4f022b92e25fd4b3c4585ce70c0976e772271cf11653173fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_ocplatform_body($context, array $blocks = array())
    {
        // line 8
        echo "    <p>
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 10
            echo "        <div class=\"alert alert-info\">Info : ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "    </p>

    <h2>Liste des annonces</h2>

    <ul>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listAdverts"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 18
            echo "            <li>
                <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_view", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "id", array()))), "html", null, true);
            echo "\">
                    ";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "title", array()), "html", null, true);
            echo "
                </a>
                par ";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "author", array()), "username", array()), "html", null, true);
            echo ",
                le ";
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "date", array()), "d/m/Y"), "html", null, true);
            echo "
            </li>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 26
            echo "            <li>Pas (encore !) d'annonces</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "    </ul>

    <ul class=\"pagination\">
        ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["nbPages"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 32
            echo "            <li";
            if (($context["p"] == ($context["page"] ?? null))) {
                echo " class=\"active\"";
            }
            echo ">
                <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_home", array("page" => $context["p"])), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["p"], "html", null, true);
            echo "</a>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "    </ul>

";
    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 36,  117 => 33,  110 => 32,  106 => 31,  101 => 28,  94 => 26,  86 => 23,  82 => 22,  77 => 20,  73 => 19,  70 => 18,  65 => 17,  58 => 12,  49 => 10,  45 => 9,  42 => 8,  39 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OCPlatformBundle:Advert:index.html.twig", "C:\\wamp64\\www\\Symfony\\src\\OC\\PlatformBundle\\Resources\\views\\Advert\\index.html.twig");
    }
}
