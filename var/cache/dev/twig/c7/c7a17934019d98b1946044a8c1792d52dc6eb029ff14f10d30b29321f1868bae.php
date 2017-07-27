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
        $__internal_a240edf56c31d9e7b5a77adbe64c80f6ad49048f77b3fa0e87f3d455f5b37d00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a240edf56c31d9e7b5a77adbe64c80f6ad49048f77b3fa0e87f3d455f5b37d00->enter($__internal_a240edf56c31d9e7b5a77adbe64c80f6ad49048f77b3fa0e87f3d455f5b37d00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@VichUploader/Form/fields.html.twig"));

        $__internal_3e8da921da47324e07a2dd9052f9ad3105715dcb1fd4e0e38f21e3187e7cef88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e8da921da47324e07a2dd9052f9ad3105715dcb1fd4e0e38f21e3187e7cef88->enter($__internal_3e8da921da47324e07a2dd9052f9ad3105715dcb1fd4e0e38f21e3187e7cef88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@VichUploader/Form/fields.html.twig"));

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
        
        $__internal_a240edf56c31d9e7b5a77adbe64c80f6ad49048f77b3fa0e87f3d455f5b37d00->leave($__internal_a240edf56c31d9e7b5a77adbe64c80f6ad49048f77b3fa0e87f3d455f5b37d00_prof);

        
        $__internal_3e8da921da47324e07a2dd9052f9ad3105715dcb1fd4e0e38f21e3187e7cef88->leave($__internal_3e8da921da47324e07a2dd9052f9ad3105715dcb1fd4e0e38f21e3187e7cef88_prof);

    }

    // line 1
    public function block_vich_file_row($context, array $blocks = array())
    {
        $__internal_f79c0cc97bb1b77ef5cd830e72c13e39267423f364d488e386b3c9cce9d24077 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f79c0cc97bb1b77ef5cd830e72c13e39267423f364d488e386b3c9cce9d24077->enter($__internal_f79c0cc97bb1b77ef5cd830e72c13e39267423f364d488e386b3c9cce9d24077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        $__internal_20cb13333e806641c459c4a1014570d957eae3c4789cf2cc538aefb9d68b1d20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20cb13333e806641c459c4a1014570d957eae3c4789cf2cc538aefb9d68b1d20->enter($__internal_20cb13333e806641c459c4a1014570d957eae3c4789cf2cc538aefb9d68b1d20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        // line 2
        $context["force_error"] = true;
        // line 3
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_20cb13333e806641c459c4a1014570d957eae3c4789cf2cc538aefb9d68b1d20->leave($__internal_20cb13333e806641c459c4a1014570d957eae3c4789cf2cc538aefb9d68b1d20_prof);

        
        $__internal_f79c0cc97bb1b77ef5cd830e72c13e39267423f364d488e386b3c9cce9d24077->leave($__internal_f79c0cc97bb1b77ef5cd830e72c13e39267423f364d488e386b3c9cce9d24077_prof);

    }

    // line 6
    public function block_vich_file_widget($context, array $blocks = array())
    {
        $__internal_a954d8ba6a3c5aa5ae7660401539fd570e500be69ca1a1a9c7381f73ac09a738 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a954d8ba6a3c5aa5ae7660401539fd570e500be69ca1a1a9c7381f73ac09a738->enter($__internal_a954d8ba6a3c5aa5ae7660401539fd570e500be69ca1a1a9c7381f73ac09a738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        $__internal_4c88b6a3b3f63cd99067375e8b42d5bb305f6451042f3ccd51ad4edc999af8fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c88b6a3b3f63cd99067375e8b42d5bb305f6451042f3ccd51ad4edc999af8fe->enter($__internal_4c88b6a3b3f63cd99067375e8b42d5bb305f6451042f3ccd51ad4edc999af8fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

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
        
        $__internal_4c88b6a3b3f63cd99067375e8b42d5bb305f6451042f3ccd51ad4edc999af8fe->leave($__internal_4c88b6a3b3f63cd99067375e8b42d5bb305f6451042f3ccd51ad4edc999af8fe_prof);

        
        $__internal_a954d8ba6a3c5aa5ae7660401539fd570e500be69ca1a1a9c7381f73ac09a738->leave($__internal_a954d8ba6a3c5aa5ae7660401539fd570e500be69ca1a1a9c7381f73ac09a738_prof);

    }

    // line 21
    public function block_vich_image_row($context, array $blocks = array())
    {
        $__internal_0f08a82eb9b22f3fcc53a7268bba00f927e9a1a4938dae12a849315720eeda45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f08a82eb9b22f3fcc53a7268bba00f927e9a1a4938dae12a849315720eeda45->enter($__internal_0f08a82eb9b22f3fcc53a7268bba00f927e9a1a4938dae12a849315720eeda45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        $__internal_ce0d37c1f6758c3f7c2a948aea359eccaf33c6f94855399b6119e8e90a4936f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce0d37c1f6758c3f7c2a948aea359eccaf33c6f94855399b6119e8e90a4936f4->enter($__internal_ce0d37c1f6758c3f7c2a948aea359eccaf33c6f94855399b6119e8e90a4936f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        // line 22
        $context["force_error"] = true;
        // line 23
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_ce0d37c1f6758c3f7c2a948aea359eccaf33c6f94855399b6119e8e90a4936f4->leave($__internal_ce0d37c1f6758c3f7c2a948aea359eccaf33c6f94855399b6119e8e90a4936f4_prof);

        
        $__internal_0f08a82eb9b22f3fcc53a7268bba00f927e9a1a4938dae12a849315720eeda45->leave($__internal_0f08a82eb9b22f3fcc53a7268bba00f927e9a1a4938dae12a849315720eeda45_prof);

    }

    // line 26
    public function block_vich_image_widget($context, array $blocks = array())
    {
        $__internal_d767132734c82d1aaadf88bc1fc3298b685cf9c27a1217cbc6efb08183ec8b8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d767132734c82d1aaadf88bc1fc3298b685cf9c27a1217cbc6efb08183ec8b8a->enter($__internal_d767132734c82d1aaadf88bc1fc3298b685cf9c27a1217cbc6efb08183ec8b8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        $__internal_b2c9d903e2b0da50601699ee3961db33ffca2e89520a8f377e4d23dc4ed80d12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2c9d903e2b0da50601699ee3961db33ffca2e89520a8f377e4d23dc4ed80d12->enter($__internal_b2c9d903e2b0da50601699ee3961db33ffca2e89520a8f377e4d23dc4ed80d12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

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
        
        $__internal_b2c9d903e2b0da50601699ee3961db33ffca2e89520a8f377e4d23dc4ed80d12->leave($__internal_b2c9d903e2b0da50601699ee3961db33ffca2e89520a8f377e4d23dc4ed80d12_prof);

        
        $__internal_d767132734c82d1aaadf88bc1fc3298b685cf9c27a1217cbc6efb08183ec8b8a->leave($__internal_d767132734c82d1aaadf88bc1fc3298b685cf9c27a1217cbc6efb08183ec8b8a_prof);

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
