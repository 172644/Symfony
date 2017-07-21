<?php

/* @VichUploader/Form/fields.html.twig */
class __TwigTemplate_6157f9bb5ebc20d21a2b2a6eca4456f6e3c16142f5408798cc6a53346de56a13 extends Twig_Template
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
        $__internal_03553f55977c526f3ca8941aca694b6268825bcec2300c3baa8c7dc71e9ea369 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03553f55977c526f3ca8941aca694b6268825bcec2300c3baa8c7dc71e9ea369->enter($__internal_03553f55977c526f3ca8941aca694b6268825bcec2300c3baa8c7dc71e9ea369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@VichUploader/Form/fields.html.twig"));

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
        
        $__internal_03553f55977c526f3ca8941aca694b6268825bcec2300c3baa8c7dc71e9ea369->leave($__internal_03553f55977c526f3ca8941aca694b6268825bcec2300c3baa8c7dc71e9ea369_prof);

    }

    // line 1
    public function block_vich_file_row($context, array $blocks = array())
    {
        $__internal_73b596aa44b7bff8f00736618d820b682475d50930eeab7ba4e6f44e41773c85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73b596aa44b7bff8f00736618d820b682475d50930eeab7ba4e6f44e41773c85->enter($__internal_73b596aa44b7bff8f00736618d820b682475d50930eeab7ba4e6f44e41773c85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        // line 2
        $context["force_error"] = true;
        // line 3
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_73b596aa44b7bff8f00736618d820b682475d50930eeab7ba4e6f44e41773c85->leave($__internal_73b596aa44b7bff8f00736618d820b682475d50930eeab7ba4e6f44e41773c85_prof);

    }

    // line 6
    public function block_vich_file_widget($context, array $blocks = array())
    {
        $__internal_e47e4e3a97a3768d1e3a64bcb2494af4608cff02ed499cc7f363ebd508696c72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e47e4e3a97a3768d1e3a64bcb2494af4608cff02ed499cc7f363ebd508696c72->enter($__internal_e47e4e3a97a3768d1e3a64bcb2494af4608cff02ed499cc7f363ebd508696c72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

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
        
        $__internal_e47e4e3a97a3768d1e3a64bcb2494af4608cff02ed499cc7f363ebd508696c72->leave($__internal_e47e4e3a97a3768d1e3a64bcb2494af4608cff02ed499cc7f363ebd508696c72_prof);

    }

    // line 21
    public function block_vich_image_row($context, array $blocks = array())
    {
        $__internal_684067fe542a46cfecb588ed67d6635a658b6744629878a67858b4142f09e119 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_684067fe542a46cfecb588ed67d6635a658b6744629878a67858b4142f09e119->enter($__internal_684067fe542a46cfecb588ed67d6635a658b6744629878a67858b4142f09e119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        // line 22
        $context["force_error"] = true;
        // line 23
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_684067fe542a46cfecb588ed67d6635a658b6744629878a67858b4142f09e119->leave($__internal_684067fe542a46cfecb588ed67d6635a658b6744629878a67858b4142f09e119_prof);

    }

    // line 26
    public function block_vich_image_widget($context, array $blocks = array())
    {
        $__internal_80e92f8d57555f027ccb10848d0603335da7a8f46b68177a8fa5316160483816 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80e92f8d57555f027ccb10848d0603335da7a8f46b68177a8fa5316160483816->enter($__internal_80e92f8d57555f027ccb10848d0603335da7a8f46b68177a8fa5316160483816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

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
        
        $__internal_80e92f8d57555f027ccb10848d0603335da7a8f46b68177a8fa5316160483816->leave($__internal_80e92f8d57555f027ccb10848d0603335da7a8f46b68177a8fa5316160483816_prof);

    }

    public function getTemplateName()
    {
        return "@VichUploader/Form/fields.html.twig";
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
", "@VichUploader/Form/fields.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\vich\\uploader-bundle\\Resources\\views\\Form\\fields.html.twig");
    }
}
