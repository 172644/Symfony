<?php

/* VichUploaderBundle:Form:fields.html.twig */
class __TwigTemplate_8faa4547d6bbb5c9d051a08f219cddf0e3191d22bf302ec2ea0f8b211e9157e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'vich_file_row' => array($this, 'block_vich_file_row'),
            'vich_file_widget' => array($this, 'block_vich_file_widget'),
            'vich_image_row' => array($this, 'block_vich_image_row'),
            'vich_image_widget' => array($this, 'block_vich_image_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f1d107c7931c2ce5226ca77e64b77681d3c54b62491b89b11e22aab118bda53b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1d107c7931c2ce5226ca77e64b77681d3c54b62491b89b11e22aab118bda53b->enter($__internal_f1d107c7931c2ce5226ca77e64b77681d3c54b62491b89b11e22aab118bda53b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VichUploaderBundle:Form:fields.html.twig"));

        // line 1
        $this->displayBlock('vich_file_row', $context, $blocks);
        // line 5
        echo "
";
        // line 6
        $this->displayBlock('vich_file_widget', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('vich_image_row', $context, $blocks);
        // line 25
        echo "
";
        // line 26
        $this->displayBlock('vich_image_widget', $context, $blocks);
        
        $__internal_f1d107c7931c2ce5226ca77e64b77681d3c54b62491b89b11e22aab118bda53b->leave($__internal_f1d107c7931c2ce5226ca77e64b77681d3c54b62491b89b11e22aab118bda53b_prof);

    }

    // line 1
    public function block_vich_file_row($context, array $blocks = array())
    {
        $__internal_258473d406c25513eff49e09f0549b9f2571ee251386bb6d92a1732e4d38845d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_258473d406c25513eff49e09f0549b9f2571ee251386bb6d92a1732e4d38845d->enter($__internal_258473d406c25513eff49e09f0549b9f2571ee251386bb6d92a1732e4d38845d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        // line 2
        $context["force_error"] = true;
        // line 3
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_258473d406c25513eff49e09f0549b9f2571ee251386bb6d92a1732e4d38845d->leave($__internal_258473d406c25513eff49e09f0549b9f2571ee251386bb6d92a1732e4d38845d_prof);

    }

    // line 6
    public function block_vich_file_widget($context, array $blocks = array())
    {
        $__internal_dd74b875a035ff239ce22c241fb0d8b2d57c7b6943c0175702c88676e1d8340b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd74b875a035ff239ce22c241fb0d8b2d57c7b6943c0175702c88676e1d8340b->enter($__internal_dd74b875a035ff239ce22c241fb0d8b2d57c7b6943c0175702c88676e1d8340b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        // line 7
        echo "    ";
        ob_start();
        // line 8
        echo "        <div class=\"vich-file\">
            ";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), "file", array()), 'widget');
        echo "
            ";
        // line 10
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "delete", array(), "any", true, true)) {
            // line 11
            echo "                ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->getSourceContext()); })()), "delete", array()), 'row');
            echo "
            ";
        }
        // line 13
        echo "
            ";
        // line 14
        if ((isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new Twig_Error_Runtime('Variable "download_uri" does not exist.', 14, $this->getSourceContext()); })())) {
            // line 15
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new Twig_Error_Runtime('Variable "download_uri" does not exist.', 15, $this->getSourceContext()); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 15, $this->getSourceContext()); })()) === false)) ? ((isset($context["download_label"]) || array_key_exists("download_label", $context) ? $context["download_label"] : (function () { throw new Twig_Error_Runtime('Variable "download_label" does not exist.', 15, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["download_label"]) || array_key_exists("download_label", $context) ? $context["download_label"] : (function () { throw new Twig_Error_Runtime('Variable "download_label" does not exist.', 15, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 15, $this->getSourceContext()); })())))), "html", null, true);
            echo "</a>
            ";
        }
        // line 17
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_dd74b875a035ff239ce22c241fb0d8b2d57c7b6943c0175702c88676e1d8340b->leave($__internal_dd74b875a035ff239ce22c241fb0d8b2d57c7b6943c0175702c88676e1d8340b_prof);

    }

    // line 21
    public function block_vich_image_row($context, array $blocks = array())
    {
        $__internal_a05c1badb63c880f8a187fd580b0a4b9c7e520d7c6ce6cbc3aad87e217bdb24e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a05c1badb63c880f8a187fd580b0a4b9c7e520d7c6ce6cbc3aad87e217bdb24e->enter($__internal_a05c1badb63c880f8a187fd580b0a4b9c7e520d7c6ce6cbc3aad87e217bdb24e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        // line 22
        $context["force_error"] = true;
        // line 23
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_a05c1badb63c880f8a187fd580b0a4b9c7e520d7c6ce6cbc3aad87e217bdb24e->leave($__internal_a05c1badb63c880f8a187fd580b0a4b9c7e520d7c6ce6cbc3aad87e217bdb24e_prof);

    }

    // line 26
    public function block_vich_image_widget($context, array $blocks = array())
    {
        $__internal_d1b5b10a1849b4adb60b652f6cc101299744f12438219a4bae54bbbc728ee99a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1b5b10a1849b4adb60b652f6cc101299744f12438219a4bae54bbbc728ee99a->enter($__internal_d1b5b10a1849b4adb60b652f6cc101299744f12438219a4bae54bbbc728ee99a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        // line 27
        echo "    ";
        ob_start();
        // line 28
        echo "        <div class=\"vich-image\">
            ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->getSourceContext()); })()), "file", array()), 'widget');
        echo "
            ";
        // line 30
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "delete", array(), "any", true, true)) {
            // line 31
            echo "                ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->getSourceContext()); })()), "delete", array()), 'row');
            echo "
            ";
        }
        // line 33
        echo "
            ";
        // line 34
        if ((isset($context["image_uri"]) || array_key_exists("image_uri", $context) ? $context["image_uri"] : (function () { throw new Twig_Error_Runtime('Variable "image_uri" does not exist.', 34, $this->getSourceContext()); })())) {
            // line 35
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["image_uri"]) || array_key_exists("image_uri", $context) ? $context["image_uri"] : (function () { throw new Twig_Error_Runtime('Variable "image_uri" does not exist.', 35, $this->getSourceContext()); })()), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, (isset($context["image_uri"]) || array_key_exists("image_uri", $context) ? $context["image_uri"] : (function () { throw new Twig_Error_Runtime('Variable "image_uri" does not exist.', 35, $this->getSourceContext()); })()), "html", null, true);
            echo "\" alt=\"\" /></a>
            ";
        }
        // line 37
        echo "            ";
        if ((isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new Twig_Error_Runtime('Variable "download_uri" does not exist.', 37, $this->getSourceContext()); })())) {
            // line 38
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new Twig_Error_Runtime('Variable "download_uri" does not exist.', 38, $this->getSourceContext()); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 38, $this->getSourceContext()); })()) === false)) ? ((isset($context["download_label"]) || array_key_exists("download_label", $context) ? $context["download_label"] : (function () { throw new Twig_Error_Runtime('Variable "download_label" does not exist.', 38, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["download_label"]) || array_key_exists("download_label", $context) ? $context["download_label"] : (function () { throw new Twig_Error_Runtime('Variable "download_label" does not exist.', 38, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 38, $this->getSourceContext()); })())))), "html", null, true);
            echo "</a>
            ";
        }
        // line 40
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_d1b5b10a1849b4adb60b652f6cc101299744f12438219a4bae54bbbc728ee99a->leave($__internal_d1b5b10a1849b4adb60b652f6cc101299744f12438219a4bae54bbbc728ee99a_prof);

    }

    public function getTemplateName()
    {
        return "VichUploaderBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  172 => 40,  164 => 38,  161 => 37,  153 => 35,  151 => 34,  148 => 33,  142 => 31,  140 => 30,  136 => 29,  133 => 28,  130 => 27,  124 => 26,  117 => 23,  115 => 22,  109 => 21,  100 => 17,  92 => 15,  90 => 14,  87 => 13,  81 => 11,  79 => 10,  75 => 9,  72 => 8,  69 => 7,  63 => 6,  56 => 3,  54 => 2,  48 => 1,  41 => 26,  38 => 25,  36 => 21,  33 => 20,  31 => 6,  28 => 5,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block vich_file_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock %}

{% block vich_file_widget %}
    {% spaceless %}
        <div class=\"vich-file\">
            {{ form_widget(form.file) }}
            {% if form.delete is defined %}
                {{ form_row(form.delete) }}
            {% endif %}

            {% if download_uri %}
                <a href=\"{{ download_uri }}\">{{ translation_domain is same as(false) ? download_label : download_label|trans({}, translation_domain) }}</a>
            {% endif %}
        </div>
    {% endspaceless %}
{% endblock %}

{% block vich_image_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock %}

{% block vich_image_widget %}
    {% spaceless %}
        <div class=\"vich-image\">
            {{ form_widget(form.file) }}
            {% if form.delete is defined %}
                {{ form_row(form.delete) }}
            {% endif %}

            {% if image_uri %}
                <a href=\"{{ image_uri }}\"><img src=\"{{ image_uri }}\" alt=\"\" /></a>
            {% endif %}
            {% if download_uri %}
                <a href=\"{{ download_uri }}\">{{ translation_domain is same as(false) ? download_label : download_label|trans({}, translation_domain) }}</a>
            {% endif %}
        </div>
    {% endspaceless %}
{% endblock %}
", "VichUploaderBundle:Form:fields.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\vich\\uploader-bundle/Resources/views/Form/fields.html.twig");
    }
}
