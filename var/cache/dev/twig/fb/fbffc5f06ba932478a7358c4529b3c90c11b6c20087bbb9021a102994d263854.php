<?php

/* VichUploaderBundle:Form:fields.html.twig */
class __TwigTemplate_0ff890af049939f2f891dbf67c56647e04b89952ac115f5a52f563ecc354c1b7 extends Twig_Template
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
        $__internal_8d7bedd156dbbf1e1f1570eb1a2d77d5b2f679e6cf390c0de5c39ab3725f05b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d7bedd156dbbf1e1f1570eb1a2d77d5b2f679e6cf390c0de5c39ab3725f05b8->enter($__internal_8d7bedd156dbbf1e1f1570eb1a2d77d5b2f679e6cf390c0de5c39ab3725f05b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VichUploaderBundle:Form:fields.html.twig"));

        $__internal_e0700a91bcdbf93f8e287365bf42f89d3b061c152473fb699c478a633724d330 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0700a91bcdbf93f8e287365bf42f89d3b061c152473fb699c478a633724d330->enter($__internal_e0700a91bcdbf93f8e287365bf42f89d3b061c152473fb699c478a633724d330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VichUploaderBundle:Form:fields.html.twig"));

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
        
        $__internal_8d7bedd156dbbf1e1f1570eb1a2d77d5b2f679e6cf390c0de5c39ab3725f05b8->leave($__internal_8d7bedd156dbbf1e1f1570eb1a2d77d5b2f679e6cf390c0de5c39ab3725f05b8_prof);

        
        $__internal_e0700a91bcdbf93f8e287365bf42f89d3b061c152473fb699c478a633724d330->leave($__internal_e0700a91bcdbf93f8e287365bf42f89d3b061c152473fb699c478a633724d330_prof);

    }

    // line 1
    public function block_vich_file_row($context, array $blocks = array())
    {
        $__internal_c3fbb5680c0abd0e1eb3e57bf1c5e992942ce8d5c5c0ae9fc7deadc4468b8aa6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3fbb5680c0abd0e1eb3e57bf1c5e992942ce8d5c5c0ae9fc7deadc4468b8aa6->enter($__internal_c3fbb5680c0abd0e1eb3e57bf1c5e992942ce8d5c5c0ae9fc7deadc4468b8aa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        $__internal_def169f616e9579423c86a23308f7e9085543f57d040489ce1433f8a3bf4ac4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_def169f616e9579423c86a23308f7e9085543f57d040489ce1433f8a3bf4ac4d->enter($__internal_def169f616e9579423c86a23308f7e9085543f57d040489ce1433f8a3bf4ac4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        // line 2
        $context["force_error"] = true;
        // line 3
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_def169f616e9579423c86a23308f7e9085543f57d040489ce1433f8a3bf4ac4d->leave($__internal_def169f616e9579423c86a23308f7e9085543f57d040489ce1433f8a3bf4ac4d_prof);

        
        $__internal_c3fbb5680c0abd0e1eb3e57bf1c5e992942ce8d5c5c0ae9fc7deadc4468b8aa6->leave($__internal_c3fbb5680c0abd0e1eb3e57bf1c5e992942ce8d5c5c0ae9fc7deadc4468b8aa6_prof);

    }

    // line 6
    public function block_vich_file_widget($context, array $blocks = array())
    {
        $__internal_493c2d9c26136a218e8bdb88b8c05b221d6bb2dbff2cdcbf2b7f0b79bbdf123d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_493c2d9c26136a218e8bdb88b8c05b221d6bb2dbff2cdcbf2b7f0b79bbdf123d->enter($__internal_493c2d9c26136a218e8bdb88b8c05b221d6bb2dbff2cdcbf2b7f0b79bbdf123d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        $__internal_716d72a1c2a7aab45565c4f3f408cc216eb772e7c0566f2c6b6a880d56d11f12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_716d72a1c2a7aab45565c4f3f408cc216eb772e7c0566f2c6b6a880d56d11f12->enter($__internal_716d72a1c2a7aab45565c4f3f408cc216eb772e7c0566f2c6b6a880d56d11f12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

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
        
        $__internal_716d72a1c2a7aab45565c4f3f408cc216eb772e7c0566f2c6b6a880d56d11f12->leave($__internal_716d72a1c2a7aab45565c4f3f408cc216eb772e7c0566f2c6b6a880d56d11f12_prof);

        
        $__internal_493c2d9c26136a218e8bdb88b8c05b221d6bb2dbff2cdcbf2b7f0b79bbdf123d->leave($__internal_493c2d9c26136a218e8bdb88b8c05b221d6bb2dbff2cdcbf2b7f0b79bbdf123d_prof);

    }

    // line 21
    public function block_vich_image_row($context, array $blocks = array())
    {
        $__internal_f412fef85092852a6c44ef014b03f9dc83e4174b17d5851e56f055d46bfc49a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f412fef85092852a6c44ef014b03f9dc83e4174b17d5851e56f055d46bfc49a0->enter($__internal_f412fef85092852a6c44ef014b03f9dc83e4174b17d5851e56f055d46bfc49a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        $__internal_20a57ceab13a8b4ab43f8f8eb2ff7150e9cabdeaf2a556713b0f8ee30302a890 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20a57ceab13a8b4ab43f8f8eb2ff7150e9cabdeaf2a556713b0f8ee30302a890->enter($__internal_20a57ceab13a8b4ab43f8f8eb2ff7150e9cabdeaf2a556713b0f8ee30302a890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        // line 22
        $context["force_error"] = true;
        // line 23
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_20a57ceab13a8b4ab43f8f8eb2ff7150e9cabdeaf2a556713b0f8ee30302a890->leave($__internal_20a57ceab13a8b4ab43f8f8eb2ff7150e9cabdeaf2a556713b0f8ee30302a890_prof);

        
        $__internal_f412fef85092852a6c44ef014b03f9dc83e4174b17d5851e56f055d46bfc49a0->leave($__internal_f412fef85092852a6c44ef014b03f9dc83e4174b17d5851e56f055d46bfc49a0_prof);

    }

    // line 26
    public function block_vich_image_widget($context, array $blocks = array())
    {
        $__internal_dd689cdea432043c80aa1aed174eab5fe9b7f5b4ded07b430b664931be098746 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd689cdea432043c80aa1aed174eab5fe9b7f5b4ded07b430b664931be098746->enter($__internal_dd689cdea432043c80aa1aed174eab5fe9b7f5b4ded07b430b664931be098746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        $__internal_e2d7d7c8c98ba2c0b34c54e82003129a0cd2ddce850c55e63d778527c04f53a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2d7d7c8c98ba2c0b34c54e82003129a0cd2ddce850c55e63d778527c04f53a3->enter($__internal_e2d7d7c8c98ba2c0b34c54e82003129a0cd2ddce850c55e63d778527c04f53a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

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
        
        $__internal_e2d7d7c8c98ba2c0b34c54e82003129a0cd2ddce850c55e63d778527c04f53a3->leave($__internal_e2d7d7c8c98ba2c0b34c54e82003129a0cd2ddce850c55e63d778527c04f53a3_prof);

        
        $__internal_dd689cdea432043c80aa1aed174eab5fe9b7f5b4ded07b430b664931be098746->leave($__internal_dd689cdea432043c80aa1aed174eab5fe9b7f5b4ded07b430b664931be098746_prof);

    }

    public function getTemplateName()
    {
        return "VichUploaderBundle:Form:fields.html.twig";
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
", "VichUploaderBundle:Form:fields.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\vich\\uploader-bundle/Resources/views/Form/fields.html.twig");
    }
}
