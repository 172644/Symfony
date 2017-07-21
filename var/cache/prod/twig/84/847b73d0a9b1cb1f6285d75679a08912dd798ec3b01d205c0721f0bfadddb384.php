<?php

/* OCPlatformBundle:Advert:form.html.twig */
class __TwigTemplate_4de369d6bf97c3c91b06461bcc4ba0e5afdd091bf80222dea0e27472a60fcfeb extends Twig_Template
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
        $__internal_3cc9d4562f61c22304b4db21e281955aabd66ea35ad5b977d18b655528e63e8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cc9d4562f61c22304b4db21e281955aabd66ea35ad5b977d18b655528e63e8b->enter($__internal_3cc9d4562f61c22304b4db21e281955aabd66ea35ad5b977d18b655528e63e8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:form.html.twig"));

        // line 2
        echo "
<h3>Formulaire d'annonce</h3>

";
        // line 5
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 5, $this->getSourceContext()); })()), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), 'errors');
        echo "

<div class=\"well\">

    ";
        // line 10
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "date", array(), "any", true, true)) {
            // line 11
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->getSourceContext()); })()), "date", array()), 'row');
            echo "
    ";
        }
        // line 13
        echo "
    <div class=\"form-group\">
        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 15, $this->getSourceContext()); })()), "title", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Titre de l'annonce"));
        echo "
        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 16, $this->getSourceContext()); })()), "title", array()), 'errors');
        echo "

        <div class=\"col-sm-10\">
            ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), "title", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
    </div>

    <div class=\"form-group\">
        ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 24, $this->getSourceContext()); })()), "content", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Contenu de l'annonce"));
        echo "
        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 25, $this->getSourceContext()); })()), "content", array()), 'errors');
        echo "
        <div class=\"col-sm-10\">
            ";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), "content", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
    </div>

    ";
        // line 31
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "published", array(), "any", true, true)) {
            // line 32
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 32, $this->getSourceContext()); })()), "published", array()), 'row');
            echo "
    ";
        }
        // line 34
        echo "
    ";
        // line 35
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "categories", array(), "any", true, true)) {
            // line 36
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 36, $this->getSourceContext()); })()), "categories", array()), 'row');
            echo "
    ";
        }
        // line 38
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "categories_", array(), "any", true, true)) {
            // line 39
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 39, $this->getSourceContext()); })()), "categories_", array()), 'row');
            echo "
    ";
        }
        // line 41
        echo "    <a href=\"#\" id=\"add_category\" class=\"btn btn-default\">Ajouter une catégorie</a>
    ";
        // line 42
        if (array_key_exists("advert", $context)) {
            // line 43
            echo "        ";
            if ( !(null === twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 43, $this->getSourceContext()); })()), "image", array()))) {
                // line 44
                echo "            <br /><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 44, $this->getSourceContext()); })()), "image", array()), "webPath", array())), "html", null, true);
                echo "\" />
        ";
            }
            // line 46
            echo "    ";
        }
        // line 47
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 47, $this->getSourceContext()); })()), 'rest');
        echo "

</div>

";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 51, $this->getSourceContext()); })()), "save", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
";
        // line 52
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 52, $this->getSourceContext()); })()), 'form_end');
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
            addCategory(\$container);
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
        
        $__internal_3cc9d4562f61c22304b4db21e281955aabd66ea35ad5b977d18b655528e63e8b->leave($__internal_3cc9d4562f61c22304b4db21e281955aabd66ea35ad5b977d18b655528e63e8b_prof);

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
        return array (  141 => 52,  137 => 51,  129 => 47,  126 => 46,  120 => 44,  117 => 43,  115 => 42,  112 => 41,  106 => 39,  103 => 38,  97 => 36,  95 => 35,  92 => 34,  86 => 32,  84 => 31,  77 => 27,  72 => 25,  68 => 24,  60 => 19,  54 => 16,  50 => 15,  46 => 13,  40 => 11,  38 => 10,  31 => 6,  27 => 5,  22 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/Advert/form.html.twig #}

<h3>Formulaire d'annonce</h3>

{{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}
{{ form_errors(form) }}

<div class=\"well\">

    {% if form.date is defined %}
        {{ form_row(form.date) }}
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
        {{ form_row(form.published) }}
    {% endif %}

    {% if form.categories is defined %}
        {{ form_row(form.categories) }}
    {% endif %}
    {% if form.categories_ is defined %}
        {{ form_row(form.categories_) }}
    {% endif %}
    <a href=\"#\" id=\"add_category\" class=\"btn btn-default\">Ajouter une catégorie</a>
    {% if advert is defined %}
        {% if advert.image is not null %}
            <br /><img src=\"{{ asset(advert.image.webPath) }}\" />
        {% endif %}
    {% endif %}
    {{ form_rest(form) }}

</div>

{{ form_widget(form.save, {'attr': {'class': 'btn btn-primary'}}) }}
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
            addCategory(\$container);
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
</script>", "OCPlatformBundle:Advert:form.html.twig", "C:\\wamp64\\www\\Symfony\\src\\OC\\PlatformBundle/Resources/views/Advert/form.html.twig");
    }
}
