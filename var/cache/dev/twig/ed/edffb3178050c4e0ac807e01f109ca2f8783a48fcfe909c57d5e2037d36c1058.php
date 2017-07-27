<?php

/* OCPlatformBundle:Advert:form.html.twig */
class __TwigTemplate_f60a9c778f4965eea66fe350f349b5421ab84cb716fc01118cef3970313186ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d08d1c8ad9ca8492796927c6037f9051730c9ac1552c0283ae04acfb12abe4e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d08d1c8ad9ca8492796927c6037f9051730c9ac1552c0283ae04acfb12abe4e2->enter($__internal_d08d1c8ad9ca8492796927c6037f9051730c9ac1552c0283ae04acfb12abe4e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:form.html.twig"));

        $__internal_aa6285ca02dfdd6b19485d5683a25788c24310a3ab0e9d078b40b41b91e19fb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa6285ca02dfdd6b19485d5683a25788c24310a3ab0e9d078b40b41b91e19fb1->enter($__internal_aa6285ca02dfdd6b19485d5683a25788c24310a3ab0e9d078b40b41b91e19fb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:form.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->getSourceContext()); })()), 'errors');
        echo "

<div class=\"well\">

    ";
        // line 8
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "date", array(), "any", true, true)) {
            // line 9
            echo "        <div class=\"form-group\">
            ";
            // line 10
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), "date", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Date"));
            echo "
            ";
            // line 11
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->getSourceContext()); })()), "date", array()), 'errors');
            echo "

            <div class=\"col-sm-10\">
                ";
            // line 14
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->getSourceContext()); })()), "date", array()), 'widget');
            echo "
            </div>
        </div>
    ";
        }
        // line 18
        echo "
    <div class=\"form-group\">
        ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 20, $this->getSourceContext()); })()), "title", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Titre de l'annonce"));
        echo "
        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 21, $this->getSourceContext()); })()), "title", array()), 'errors');
        echo "

        <div class=\"col-sm-10\">
            ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 24, $this->getSourceContext()); })()), "title", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
    </div>

    <div class=\"form-group\">
        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->getSourceContext()); })()), "content", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Contenu de l'annonce"));
        echo "
        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->getSourceContext()); })()), "content", array()), 'errors');
        echo "
        <div class=\"col-sm-10\">
            ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 32, $this->getSourceContext()); })()), "content", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
    </div>

    ";
        // line 36
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "published", array(), "any", true, true)) {
            // line 37
            echo "        <div class=\"form-group\">
            <span class=\"col-sm-2 control-label\">Published</span>

            <div class=\"col-sm-10\">
                ";
            // line 41
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 41, $this->getSourceContext()); })()), "published", array()), 'widget');
            echo "
            </div>
        </div>
    ";
        }
        // line 45
        echo "
    ";
        // line 46
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "categories", array(), "any", true, true)) {
            // line 47
            echo "        <div class=\"form-group\">
            ";
            // line 48
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 48, $this->getSourceContext()); })()), "categories", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Catégories"));
            echo "
            ";
            // line 49
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 49, $this->getSourceContext()); })()), "categories", array()), 'errors');
            echo "

            <div class=\"col-sm-10\">
                ";
            // line 52
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 52, $this->getSourceContext()); })()), "categories", array()), 'widget');
            echo "
            </div>
        </div>
    ";
        }
        // line 56
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "categories_", array(), "any", true, true)) {
            // line 57
            echo "        <div class=\"form-group\">
            ";
            // line 58
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 58, $this->getSourceContext()); })()), "categories_", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Add catégories"));
            echo "
            ";
            // line 59
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 59, $this->getSourceContext()); })()), "categories_", array()), 'errors');
            echo "

            <div class=\"col-sm-10\">
                ";
            // line 62
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 62, $this->getSourceContext()); })()), "categories_", array()), 'widget');
            echo "
                <a href=\"#\" id=\"add_category\" class=\"btn btn-default\">Ajouter une catégorie inéxistante</a>
            </div>
        </div>
    ";
        }
        // line 67
        echo "
    <div class=\"form-group\">
        ";
        // line 69
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 69, $this->getSourceContext()); })()), "image", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Image"));
        echo "
        ";
        // line 70
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 70, $this->getSourceContext()); })()), "image", array()), 'errors');
        echo "

        <div class=\"col-sm-10\">
            ";
        // line 73
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 73, $this->getSourceContext()); })()), "image", array()), 'widget');
        echo "
        </div>
    </div>

    ";
        // line 77
        if (array_key_exists("advert", $context)) {
            // line 78
            echo "        ";
            if ( !(null === twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 78, $this->getSourceContext()); })()), "image", array()))) {
                // line 79
                echo "            <div class=\"form-group\">
                <span class=\"col-sm-2 control-label\">Image actuelle</span>

                <div class=\"col-sm-10\">
                    <img src=\"";
                // line 83
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 83, $this->getSourceContext()); })()), "image", array()), "webPath", array())), "html", null, true);
                echo "\" />
                </div>
            </div>
        ";
            }
            // line 87
            echo "    ";
        }
        // line 88
        echo "
    <div class=\"form-group\">
        <span class=\"col-sm-2 control-label\"> </span>

        <div class=\"col-sm-10\">
            ";
        // line 93
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 93, $this->getSourceContext()); })()), "save", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
        </div>
    </div>
</div>

";
        // line 98
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 98, $this->getSourceContext()); })()), 'form_end');
        echo "



<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>

<script type=\"text/javascript\">
    \$(document).ready(function() {
        var \$container = \$(\"div[id\$='_categories_']\");

        \$( \"div[id^='advert_edit_categories__']\" ).each(function( index ) {
            \$(this).parent().remove();
        });

        var index = \$container.find(':input').length;
        \$('#add_category').click(function(e)
        {
            addCategory(\$container);
            e.preventDefault();
            return false;
        });

        if (index == 0)
            console.log('plop');
        else {
            \$container.children('div').each(function() {
                addDeleteLink(\$(this));
            });
        }

        function addCategory(\$container)
        {
            var template = \$container.attr('data-prototype')
                .replace(/__name__label__/g, 'Catégorie n°' + (index+1))
                .replace(/__name__/g,        index)
            ;
            var \$prototype = \$(template);
            addDeleteLink(\$prototype);
            \$container.append(\$prototype);
            index++;
        }

        function addDeleteLink(\$prototype)
        {
            var \$deleteLink = \$('<a href=\"#\" class=\"btn btn-danger\">Supprimer</a>');
            \$prototype.append(\$deleteLink);
            \$deleteLink.click(function(e)
            {
                \$prototype.remove();
                e.preventDefault();
                return false;
            });
        }
    });
</script>";
        
        $__internal_d08d1c8ad9ca8492796927c6037f9051730c9ac1552c0283ae04acfb12abe4e2->leave($__internal_d08d1c8ad9ca8492796927c6037f9051730c9ac1552c0283ae04acfb12abe4e2_prof);

        
        $__internal_aa6285ca02dfdd6b19485d5683a25788c24310a3ab0e9d078b40b41b91e19fb1->leave($__internal_aa6285ca02dfdd6b19485d5683a25788c24310a3ab0e9d078b40b41b91e19fb1_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 98,  212 => 93,  205 => 88,  202 => 87,  195 => 83,  189 => 79,  186 => 78,  184 => 77,  177 => 73,  171 => 70,  167 => 69,  163 => 67,  155 => 62,  149 => 59,  145 => 58,  142 => 57,  139 => 56,  132 => 52,  126 => 49,  122 => 48,  119 => 47,  117 => 46,  114 => 45,  107 => 41,  101 => 37,  99 => 36,  92 => 32,  87 => 30,  83 => 29,  75 => 24,  69 => 21,  65 => 20,  61 => 18,  54 => 14,  48 => 11,  44 => 10,  41 => 9,  39 => 8,  32 => 4,  28 => 3,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/Advert/form.html.twig #}

{{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}
{{ form_errors(form) }}

<div class=\"well\">

    {% if form.date is defined %}
        <div class=\"form-group\">
            {{ form_label(form.date, \"Date\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
            {{ form_errors(form.date) }}

            <div class=\"col-sm-10\">
                {{ form_widget(form.date) }}
            </div>
        </div>
    {% endif %}

    <div class=\"form-group\">
        {{ form_label(form.title, \"Titre de l'annonce\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
        {{ form_errors(form.title) }}

        <div class=\"col-sm-10\">
            {{ form_widget(form.title, {'attr': {'class': 'form-control'}}) }}
        </div>
    </div>

    <div class=\"form-group\">
        {{ form_label(form.content, \"Contenu de l'annonce\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
        {{ form_errors(form.content) }}
        <div class=\"col-sm-10\">
            {{ form_widget(form.content, {'attr': {'class': 'form-control'}}) }}
        </div>
    </div>

    {% if form.published is defined %}
        <div class=\"form-group\">
            <span class=\"col-sm-2 control-label\">Published</span>

            <div class=\"col-sm-10\">
                {{ form_widget(form.published) }}
            </div>
        </div>
    {% endif %}

    {% if form.categories is defined %}
        <div class=\"form-group\">
            {{ form_label(form.categories, \"Catégories\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
            {{ form_errors(form.categories) }}

            <div class=\"col-sm-10\">
                {{ form_widget(form.categories) }}
            </div>
        </div>
    {% endif %}
    {% if form.categories_ is defined %}
        <div class=\"form-group\">
            {{ form_label(form.categories_, \"Add catégories\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
            {{ form_errors(form.categories_) }}

            <div class=\"col-sm-10\">
                {{ form_widget(form.categories_) }}
                <a href=\"#\" id=\"add_category\" class=\"btn btn-default\">Ajouter une catégorie inéxistante</a>
            </div>
        </div>
    {% endif %}

    <div class=\"form-group\">
        {{ form_label(form.image, \"Image\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
        {{ form_errors(form.image) }}

        <div class=\"col-sm-10\">
            {{ form_widget(form.image) }}
        </div>
    </div>

    {% if advert is defined %}
        {% if advert.image is not null %}
            <div class=\"form-group\">
                <span class=\"col-sm-2 control-label\">Image actuelle</span>

                <div class=\"col-sm-10\">
                    <img src=\"{{ asset(advert.image.webPath) }}\" />
                </div>
            </div>
        {% endif %}
    {% endif %}

    <div class=\"form-group\">
        <span class=\"col-sm-2 control-label\"> </span>

        <div class=\"col-sm-10\">
            {{ form_widget(form.save, {'attr': {'class': 'btn btn-primary'}}) }}
        </div>
    </div>
</div>

{{ form_end(form) }}



<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>

<script type=\"text/javascript\">
    \$(document).ready(function() {
        var \$container = \$(\"div[id\$='_categories_']\");

        \$( \"div[id^='advert_edit_categories__']\" ).each(function( index ) {
            \$(this).parent().remove();
        });

        var index = \$container.find(':input').length;
        \$('#add_category').click(function(e)
        {
            addCategory(\$container);
            e.preventDefault();
            return false;
        });

        if (index == 0)
            console.log('plop');
        else {
            \$container.children('div').each(function() {
                addDeleteLink(\$(this));
            });
        }

        function addCategory(\$container)
        {
            var template = \$container.attr('data-prototype')
                .replace(/__name__label__/g, 'Catégorie n°' + (index+1))
                .replace(/__name__/g,        index)
            ;
            var \$prototype = \$(template);
            addDeleteLink(\$prototype);
            \$container.append(\$prototype);
            index++;
        }

        function addDeleteLink(\$prototype)
        {
            var \$deleteLink = \$('<a href=\"#\" class=\"btn btn-danger\">Supprimer</a>');
            \$prototype.append(\$deleteLink);
            \$deleteLink.click(function(e)
            {
                \$prototype.remove();
                e.preventDefault();
                return false;
            });
        }
    });
</script>", "OCPlatformBundle:Advert:form.html.twig", "C:\\wamp64\\www\\Symfony\\src\\OC\\PlatformBundle\\Resources\\views\\Advert\\form.html.twig");
    }
}
