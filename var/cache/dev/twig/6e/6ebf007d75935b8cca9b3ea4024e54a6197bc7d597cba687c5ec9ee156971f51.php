<?php

/* OCPlatformBundle:Advert:view.html.twig */
class __TwigTemplate_b267f26fb98bc06b89539e63da8b18274031ff5c990e0ad5f4283af8597dc0c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:view.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'titlePage' => array($this, 'block_titlePage'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e478bb6c72b5aad9d30a058e386ee6c085a94ef15781d3adf8780b9955f958ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e478bb6c72b5aad9d30a058e386ee6c085a94ef15781d3adf8780b9955f958ec->enter($__internal_e478bb6c72b5aad9d30a058e386ee6c085a94ef15781d3adf8780b9955f958ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:view.html.twig"));

        $__internal_b4594703b145b2bb8b4c862e5421e2ba7b5407eba728e8ccb99955ed642ed4b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4594703b145b2bb8b4c862e5421e2ba7b5407eba728e8ccb99955ed642ed4b7->enter($__internal_b4594703b145b2bb8b4c862e5421e2ba7b5407eba728e8ccb99955ed642ed4b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e478bb6c72b5aad9d30a058e386ee6c085a94ef15781d3adf8780b9955f958ec->leave($__internal_e478bb6c72b5aad9d30a058e386ee6c085a94ef15781d3adf8780b9955f958ec_prof);

        
        $__internal_b4594703b145b2bb8b4c862e5421e2ba7b5407eba728e8ccb99955ed642ed4b7->leave($__internal_b4594703b145b2bb8b4c862e5421e2ba7b5407eba728e8ccb99955ed642ed4b7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5c0af676f5aba502608c6a7a2cefa490fecb8fbe1100abb3c696564fc0513a3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c0af676f5aba502608c6a7a2cefa490fecb8fbe1100abb3c696564fc0513a3d->enter($__internal_5c0af676f5aba502608c6a7a2cefa490fecb8fbe1100abb3c696564fc0513a3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a11e82d7503c0bb3ef13f2738412462be890b2892eafdb9c26ec61a601ccbaed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a11e82d7503c0bb3ef13f2738412462be890b2892eafdb9c26ec61a601ccbaed->enter($__internal_a11e82d7503c0bb3ef13f2738412462be890b2892eafdb9c26ec61a601ccbaed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Lecture d'une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_a11e82d7503c0bb3ef13f2738412462be890b2892eafdb9c26ec61a601ccbaed->leave($__internal_a11e82d7503c0bb3ef13f2738412462be890b2892eafdb9c26ec61a601ccbaed_prof);

        
        $__internal_5c0af676f5aba502608c6a7a2cefa490fecb8fbe1100abb3c696564fc0513a3d->leave($__internal_5c0af676f5aba502608c6a7a2cefa490fecb8fbe1100abb3c696564fc0513a3d_prof);

    }

    // line 7
    public function block_titlePage($context, array $blocks = array())
    {
        $__internal_013da2010668db5e6a14ba066b0cfdfd83c524c913d1d7ce5e129df77c1e378a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_013da2010668db5e6a14ba066b0cfdfd83c524c913d1d7ce5e129df77c1e378a->enter($__internal_013da2010668db5e6a14ba066b0cfdfd83c524c913d1d7ce5e129df77c1e378a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titlePage"));

        $__internal_d3e7802344b1af604d61656c5fd2cc617a20ac701d09e026a5459fa214295fff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3e7802344b1af604d61656c5fd2cc617a20ac701d09e026a5459fa214295fff->enter($__internal_d3e7802344b1af604d61656c5fd2cc617a20ac701d09e026a5459fa214295fff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titlePage"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 8, $this->getSourceContext()); })()), "title", array()), "html", null, true);
        echo "
";
        
        $__internal_d3e7802344b1af604d61656c5fd2cc617a20ac701d09e026a5459fa214295fff->leave($__internal_d3e7802344b1af604d61656c5fd2cc617a20ac701d09e026a5459fa214295fff_prof);

        
        $__internal_013da2010668db5e6a14ba066b0cfdfd83c524c913d1d7ce5e129df77c1e378a->leave($__internal_013da2010668db5e6a14ba066b0cfdfd83c524c913d1d7ce5e129df77c1e378a_prof);

    }

    // line 11
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_76a1018bcf056fac7d4931e6dbb22ef0d33fb60c8c16af9c089a5d8fe3368d0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76a1018bcf056fac7d4931e6dbb22ef0d33fb60c8c16af9c089a5d8fe3368d0d->enter($__internal_76a1018bcf056fac7d4931e6dbb22ef0d33fb60c8c16af9c089a5d8fe3368d0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_a618314775ed86814673205f7f19565b474c06e8e258a4fc85d01bc5fc493c6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a618314775ed86814673205f7f19565b474c06e8e258a4fc85d01bc5fc493c6b->enter($__internal_a618314775ed86814673205f7f19565b474c06e8e258a4fc85d01bc5fc493c6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 12
        echo "    <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_home");
        echo "\" class=\"btn btn-default\">
        <i class=\"Tiny material-icons\">arrow_back</i> <span>Retour</span>
    </a>
    ";
        // line 15
        if ((($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_AUTEUR") && (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 15, $this->getSourceContext()); })()), "author", array()), "username", array()) == twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 15, $this->getSourceContext()); })()), "user", array()), "username", array()))) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN"))) {
            // line 16
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 16, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default\">
            <i class=\"material-icons\">edit</i>
        </a>

        <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_delete", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 20, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger\">
            <i class=\"material-icons\">delete</i>
        </a>
    ";
        }
        // line 24
        echo "
    <br />

    <div class=\"well detailAdvert\">
        ";
        // line 28
        if ( !(null === twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 28, $this->getSourceContext()); })()), "image", array()))) {
            // line 29
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 29, $this->getSourceContext()); })()), "image", array()), "webPath", array())), "html", null, true);
            echo "\" class=\"col-md-4\"/>
        ";
        }
        // line 31
        echo "
        <div class=\"col-md-8\">
            Par ";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 33, $this->getSourceContext()); })()), "author", array()), "username", array()), "html", null, true);
        echo ", le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 33, $this->getSourceContext()); })()), "date", array()), "d/m/Y"), "html", null, true);
        echo "
            <br />
            <br />
            ";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 36, $this->getSourceContext()); })()), "content", array()), "html", null, true);
        echo "

            ";
        // line 38
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 38, $this->getSourceContext()); })()), "categories", array()), "empty", array())) {
            // line 39
            echo "                <p>
                    Cette annonce est parue dans les catégories suivantes :
                    ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 41, $this->getSourceContext()); })()), "categories", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 42
                echo "                        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "name", array()), "html", null, true);
                if ( !twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 43
                echo "                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "                </p>
            ";
        }
        // line 46
        echo "        </div>
    </div>

    <div>
        ";
        // line 50
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SEARCH")) {
            // line 51
            echo "            <div class=\"well\">
                ";
            // line 52
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 52, $this->getSourceContext()); })()), 'form_start', array("attr" => array("class" => "form-horizontal")));
            echo "
                ";
            // line 53
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 53, $this->getSourceContext()); })()), 'errors');
            echo "
                ";
            // line 54
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 54, $this->getSourceContext()); })()), "content", array()), 'widget');
            echo "
                ";
            // line 55
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 55, $this->getSourceContext()); })()), "Postuler", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
            echo "
                ";
            // line 56
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 56, $this->getSourceContext()); })()), 'form_end');
            echo "
            </div>
        ";
        }
        // line 59
        echo "
        ";
        // line 60
        if (array_key_exists("listApplications", $context)) {
            // line 61
            echo "
            ";
            // line 62
            if ( !(($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_AUTEUR") && (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 62, $this->getSourceContext()); })()), "author", array()), "username", array()) == twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 62, $this->getSourceContext()); })()), "user", array()), "username", array()))) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN"))) {
                // line 63
                echo "                <br />Vous n'êtes pas censé voir les postulants, c'est encore là pour le dev'
                <br />
            ";
            }
            // line 66
            echo "            <table class=\"responsive-table\">
                <thead>
                <tr>
                    <th>Date</th>
                    <th>Auteur</th>
                    <th>Détail</th>
                </tr>
                </thead>

                <tbody>
                    ";
            // line 76
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listApplications"]) || array_key_exists("listApplications", $context) ? $context["listApplications"] : (function () { throw new Twig_Error_Runtime('Variable "listApplications" does not exist.', 76, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["app"]) {
                // line 77
                echo "                        <tr>
                            <td>";
                // line 78
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["app"], "date", array()), "H:i m/d/Y"), "html", null, true);
                echo "</td>
                            <td>";
                // line 79
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["app"], "author", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 80
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["app"], "content", array()), "html", null, true);
                echo "</td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['app'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo "                </tbody>
            </table>
        ";
        }
        // line 86
        echo "        ";
        if (array_key_exists("listAdvertSkill", $context)) {
            // line 87
            echo "            <ul>
                ";
            // line 88
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listAdvertSkill"]) || array_key_exists("listAdvertSkill", $context) ? $context["listAdvertSkill"] : (function () { throw new Twig_Error_Runtime('Variable "listAdvertSkill" does not exist.', 88, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["advertSkill"]) {
                // line 89
                echo "                    <li>";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["advertSkill"], "Skill", array()), "name", array()) . " : ") . twig_get_attribute($this->env, $this->getSourceContext(), $context["advertSkill"], "level", array())), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advertSkill'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            echo "            </ul>
        ";
        }
        // line 93
        echo "    </div>


";
        
        $__internal_a618314775ed86814673205f7f19565b474c06e8e258a4fc85d01bc5fc493c6b->leave($__internal_a618314775ed86814673205f7f19565b474c06e8e258a4fc85d01bc5fc493c6b_prof);

        
        $__internal_76a1018bcf056fac7d4931e6dbb22ef0d33fb60c8c16af9c089a5d8fe3368d0d->leave($__internal_76a1018bcf056fac7d4931e6dbb22ef0d33fb60c8c16af9c089a5d8fe3368d0d_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  309 => 93,  305 => 91,  296 => 89,  292 => 88,  289 => 87,  286 => 86,  281 => 83,  272 => 80,  268 => 79,  264 => 78,  261 => 77,  257 => 76,  245 => 66,  240 => 63,  238 => 62,  235 => 61,  233 => 60,  230 => 59,  224 => 56,  220 => 55,  216 => 54,  212 => 53,  208 => 52,  205 => 51,  203 => 50,  197 => 46,  193 => 44,  179 => 43,  173 => 42,  156 => 41,  152 => 39,  150 => 38,  145 => 36,  137 => 33,  133 => 31,  127 => 29,  125 => 28,  119 => 24,  112 => 20,  104 => 16,  102 => 15,  95 => 12,  86 => 11,  73 => 8,  64 => 7,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"OCPlatformBundle::layout.html.twig\" %}

{% block title %}
    Lecture d'une annonce - {{ parent() }}
{% endblock %}

{% block titlePage %}
    {{ advert.title }}
{% endblock %}

{% block ocplatform_body %}
    <a href=\"{{ path('oc_platform_home') }}\" class=\"btn btn-default\">
        <i class=\"Tiny material-icons\">arrow_back</i> <span>Retour</span>
    </a>
    {% if (is_granted('ROLE_AUTEUR') and advert.author.username == app.user.username) or (is_granted('ROLE_ADMIN')) %}
        <a href=\"{{ path('oc_platform_edit', {'id': advert.id}) }}\" class=\"btn btn-default\">
            <i class=\"material-icons\">edit</i>
        </a>

        <a href=\"{{ path('oc_platform_delete', {'id': advert.id}) }}\" class=\"btn btn-danger\">
            <i class=\"material-icons\">delete</i>
        </a>
    {% endif %}

    <br />

    <div class=\"well detailAdvert\">
        {% if advert.image is not null %}
                <img src=\"{{ asset(advert.image.webPath) }}\" class=\"col-md-4\"/>
        {% endif %}

        <div class=\"col-md-8\">
            Par {{ advert.author.username }}, le {{ advert.date|date('d/m/Y') }}
            <br />
            <br />
            {{ advert.content }}

            {% if not advert.categories.empty %}
                <p>
                    Cette annonce est parue dans les catégories suivantes :
                    {% for category in advert.categories %}
                        {{ category.name }}{% if not loop.last %}, {% endif %}
                    {% endfor %}
                </p>
            {% endif %}
        </div>
    </div>

    <div>
        {% if is_granted('ROLE_SEARCH') %}
            <div class=\"well\">
                {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}
                {{ form_errors(form) }}
                {{ form_widget(form.content) }}
                {{ form_widget(form.Postuler, {'attr': {'class': 'btn btn-primary'}}) }}
                {{ form_end(form) }}
            </div>
        {% endif %}

        {% if listApplications is defined %}

            {% if not((is_granted('ROLE_AUTEUR') and advert.author.username == app.user.username) or (is_granted('ROLE_ADMIN'))) %}
                <br />Vous n'êtes pas censé voir les postulants, c'est encore là pour le dev'
                <br />
            {% endif %}
            <table class=\"responsive-table\">
                <thead>
                <tr>
                    <th>Date</th>
                    <th>Auteur</th>
                    <th>Détail</th>
                </tr>
                </thead>

                <tbody>
                    {% for app in listApplications %}
                        <tr>
                            <td>{{ app.date|date(\"H:i m/d/Y\") }}</td>
                            <td>{{ app.author }}</td>
                            <td>{{ app.content }}</td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        {% endif %}
        {% if listAdvertSkill is defined %}
            <ul>
                {% for advertSkill in listAdvertSkill %}
                    <li>{{ advertSkill.Skill.name ~ ' : ' ~ advertSkill.level}}</li>
                {% endfor %}
            </ul>
        {% endif %}
    </div>


{% endblock %}", "OCPlatformBundle:Advert:view.html.twig", "C:\\wamp64\\www\\Symfony\\src\\OC\\PlatformBundle\\Resources\\views\\Advert\\view.html.twig");
    }
}
