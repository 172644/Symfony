<?php

/* @VichUploader/Form/fields.html.twig */
class __TwigTemplate_56b4156c18baf454b2362af0df527c9dce488285837dcd54a3974eb5e71ed9b3 extends Twig_Template
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
        $__internal_c2940474d34d0e290d6324fb75f62e0cc6b62beae48983b285c3f856f95c1259 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2940474d34d0e290d6324fb75f62e0cc6b62beae48983b285c3f856f95c1259->enter($__internal_c2940474d34d0e290d6324fb75f62e0cc6b62beae48983b285c3f856f95c1259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@VichUploader/Form/fields.html.twig"));

        $__internal_a6929f27942f64bec4fe0dfbbd8445657f14bacb5cb28a7526d9e5be3228b4db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6929f27942f64bec4fe0dfbbd8445657f14bacb5cb28a7526d9e5be3228b4db->enter($__internal_a6929f27942f64bec4fe0dfbbd8445657f14bacb5cb28a7526d9e5be3228b4db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@VichUploader/Form/fields.html.twig"));

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
        
        $__internal_c2940474d34d0e290d6324fb75f62e0cc6b62beae48983b285c3f856f95c1259->leave($__internal_c2940474d34d0e290d6324fb75f62e0cc6b62beae48983b285c3f856f95c1259_prof);

        
        $__internal_a6929f27942f64bec4fe0dfbbd8445657f14bacb5cb28a7526d9e5be3228b4db->leave($__internal_a6929f27942f64bec4fe0dfbbd8445657f14bacb5cb28a7526d9e5be3228b4db_prof);

    }

    // line 1
    public function block_vich_file_row($context, array $blocks = array())
    {
        $__internal_4ccb5149bb716c0a646f520c8850b31c290c54d561887981e3173cb147aa3997 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ccb5149bb716c0a646f520c8850b31c290c54d561887981e3173cb147aa3997->enter($__internal_4ccb5149bb716c0a646f520c8850b31c290c54d561887981e3173cb147aa3997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        $__internal_160418095f255c2efe1b3cc96856347376892002035a18d2962c1c42e1f0b690 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_160418095f255c2efe1b3cc96856347376892002035a18d2962c1c42e1f0b690->enter($__internal_160418095f255c2efe1b3cc96856347376892002035a18d2962c1c42e1f0b690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        // line 2
        $context["force_error"] = true;
        // line 3
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_160418095f255c2efe1b3cc96856347376892002035a18d2962c1c42e1f0b690->leave($__internal_160418095f255c2efe1b3cc96856347376892002035a18d2962c1c42e1f0b690_prof);

        
        $__internal_4ccb5149bb716c0a646f520c8850b31c290c54d561887981e3173cb147aa3997->leave($__internal_4ccb5149bb716c0a646f520c8850b31c290c54d561887981e3173cb147aa3997_prof);

    }

    // line 6
    public function block_vich_file_widget($context, array $blocks = array())
    {
        $__internal_3515279779578a564670854aed284c1077f54eb8568b286124e5a05af4aa3710 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3515279779578a564670854aed284c1077f54eb8568b286124e5a05af4aa3710->enter($__internal_3515279779578a564670854aed284c1077f54eb8568b286124e5a05af4aa3710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        $__internal_4d64ece3816eec5fe1ed0de52387c8422e1e534cf039b20c03c547d9cb08828f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d64ece3816eec5fe1ed0de52387c8422e1e534cf039b20c03c547d9cb08828f->enter($__internal_4d64ece3816eec5fe1ed0de52387c8422e1e534cf039b20c03c547d9cb08828f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

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
        
        $__internal_4d64ece3816eec5fe1ed0de52387c8422e1e534cf039b20c03c547d9cb08828f->leave($__internal_4d64ece3816eec5fe1ed0de52387c8422e1e534cf039b20c03c547d9cb08828f_prof);

        
        $__internal_3515279779578a564670854aed284c1077f54eb8568b286124e5a05af4aa3710->leave($__internal_3515279779578a564670854aed284c1077f54eb8568b286124e5a05af4aa3710_prof);

    }

    // line 21
    public function block_vich_image_row($context, array $blocks = array())
    {
        $__internal_bbdf6cdd8ff66eb69eb97a7939a9c3cb95cb34ed49b2a6e037d5cb86ed8e6e12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbdf6cdd8ff66eb69eb97a7939a9c3cb95cb34ed49b2a6e037d5cb86ed8e6e12->enter($__internal_bbdf6cdd8ff66eb69eb97a7939a9c3cb95cb34ed49b2a6e037d5cb86ed8e6e12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        $__internal_6c48dae05f66ae7fadc270133a1c98e585ea8e53d7190e4fb1415da0d4d0edf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c48dae05f66ae7fadc270133a1c98e585ea8e53d7190e4fb1415da0d4d0edf8->enter($__internal_6c48dae05f66ae7fadc270133a1c98e585ea8e53d7190e4fb1415da0d4d0edf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        // line 22
        $context["force_error"] = true;
        // line 23
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_6c48dae05f66ae7fadc270133a1c98e585ea8e53d7190e4fb1415da0d4d0edf8->leave($__internal_6c48dae05f66ae7fadc270133a1c98e585ea8e53d7190e4fb1415da0d4d0edf8_prof);

        
        $__internal_bbdf6cdd8ff66eb69eb97a7939a9c3cb95cb34ed49b2a6e037d5cb86ed8e6e12->leave($__internal_bbdf6cdd8ff66eb69eb97a7939a9c3cb95cb34ed49b2a6e037d5cb86ed8e6e12_prof);

    }

    // line 26
    public function block_vich_image_widget($context, array $blocks = array())
    {
        $__internal_79fae229cfb89703bd57c0d5d7a771528f8af1486e4383f8d17be7ca04444dd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79fae229cfb89703bd57c0d5d7a771528f8af1486e4383f8d17be7ca04444dd7->enter($__internal_79fae229cfb89703bd57c0d5d7a771528f8af1486e4383f8d17be7ca04444dd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        $__internal_2a1008eef1846b02ccb66f77e85b56111f36907b7f50519ebb8bbb23c08d135d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a1008eef1846b02ccb66f77e85b56111f36907b7f50519ebb8bbb23c08d135d->enter($__internal_2a1008eef1846b02ccb66f77e85b56111f36907b7f50519ebb8bbb23c08d135d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

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
        
        $__internal_2a1008eef1846b02ccb66f77e85b56111f36907b7f50519ebb8bbb23c08d135d->leave($__internal_2a1008eef1846b02ccb66f77e85b56111f36907b7f50519ebb8bbb23c08d135d_prof);

        
        $__internal_79fae229cfb89703bd57c0d5d7a771528f8af1486e4383f8d17be7ca04444dd7->leave($__internal_79fae229cfb89703bd57c0d5d7a771528f8af1486e4383f8d17be7ca04444dd7_prof);

    }

    public function getTemplateName()
    {
        return "@VichUploader/Form/fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  199 => 40,  191 => 38,  188 => 37,  180 => 35,  178 => 34,  175 => 33,  169 => 31,  167 => 30,  163 => 29,  160 => 28,  157 => 27,  148 => 26,  138 => 23,  136 => 22,  127 => 21,  115 => 17,  107 => 15,  105 => 14,  102 => 13,  96 => 11,  94 => 10,  90 => 9,  87 => 8,  84 => 7,  75 => 6,  65 => 3,  63 => 2,  54 => 1,  44 => 26,  41 => 25,  39 => 21,  36 => 20,  34 => 6,  31 => 5,  29 => 1,);
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
", "@VichUploader/Form/fields.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\vich\\uploader-bundle\\Resources\\views\\Form\\fields.html.twig");
    }
}
