<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_7416340bb652c54a2c01e6111a48883ac3e19bbc5101d19f617de4983bad46eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a250778065f73fb2e324468483d35c53eeee19b4a8f8a9deca78646d066cd4fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a250778065f73fb2e324468483d35c53eeee19b4a8f8a9deca78646d066cd4fc->enter($__internal_a250778065f73fb2e324468483d35c53eeee19b4a8f8a9deca78646d066cd4fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_c2ebe2edaa5f802a7cd06b9ce2790a5237f19efc7a2cd86377794a13d0a4ec90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2ebe2edaa5f802a7cd06b9ce2790a5237f19efc7a2cd86377794a13d0a4ec90->enter($__internal_c2ebe2edaa5f802a7cd06b9ce2790a5237f19efc7a2cd86377794a13d0a4ec90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_a250778065f73fb2e324468483d35c53eeee19b4a8f8a9deca78646d066cd4fc->leave($__internal_a250778065f73fb2e324468483d35c53eeee19b4a8f8a9deca78646d066cd4fc_prof);

        
        $__internal_c2ebe2edaa5f802a7cd06b9ce2790a5237f19efc7a2cd86377794a13d0a4ec90->leave($__internal_c2ebe2edaa5f802a7cd06b9ce2790a5237f19efc7a2cd86377794a13d0a4ec90_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f4a16a9ddba2b813cf71e05fc0b47566b979a0576c5ac949eb1a939824e2f275 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4a16a9ddba2b813cf71e05fc0b47566b979a0576c5ac949eb1a939824e2f275->enter($__internal_f4a16a9ddba2b813cf71e05fc0b47566b979a0576c5ac949eb1a939824e2f275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5d2dd66ce3247fbcebe18856f5c1ac54a4aa10e9a3b37f1cd5a0a8f7120cb2f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d2dd66ce3247fbcebe18856f5c1ac54a4aa10e9a3b37f1cd5a0a8f7120cb2f4->enter($__internal_5d2dd66ce3247fbcebe18856f5c1ac54a4aa10e9a3b37f1cd5a0a8f7120cb2f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_5d2dd66ce3247fbcebe18856f5c1ac54a4aa10e9a3b37f1cd5a0a8f7120cb2f4->leave($__internal_5d2dd66ce3247fbcebe18856f5c1ac54a4aa10e9a3b37f1cd5a0a8f7120cb2f4_prof);

        
        $__internal_f4a16a9ddba2b813cf71e05fc0b47566b979a0576c5ac949eb1a939824e2f275->leave($__internal_f4a16a9ddba2b813cf71e05fc0b47566b979a0576c5ac949eb1a939824e2f275_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_a8cbbbb54242818fba3bc231bc32a28cead9ef468b607ab2fb9c991384b1103d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8cbbbb54242818fba3bc231bc32a28cead9ef468b607ab2fb9c991384b1103d->enter($__internal_a8cbbbb54242818fba3bc231bc32a28cead9ef468b607ab2fb9c991384b1103d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_50ef0f2649cd929609df1920e01836ad62e4e99123a9532472bb5a8d6c292759 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50ef0f2649cd929609df1920e01836ad62e4e99123a9532472bb5a8d6c292759->enter($__internal_50ef0f2649cd929609df1920e01836ad62e4e99123a9532472bb5a8d6c292759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_50ef0f2649cd929609df1920e01836ad62e4e99123a9532472bb5a8d6c292759->leave($__internal_50ef0f2649cd929609df1920e01836ad62e4e99123a9532472bb5a8d6c292759_prof);

        
        $__internal_a8cbbbb54242818fba3bc231bc32a28cead9ef468b607ab2fb9c991384b1103d->leave($__internal_a8cbbbb54242818fba3bc231bc32a28cead9ef468b607ab2fb9c991384b1103d_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_d4ac7e6eee10fdbd5529912240ddb534bba55d0f404962e8b6e8314c20f5592a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4ac7e6eee10fdbd5529912240ddb534bba55d0f404962e8b6e8314c20f5592a->enter($__internal_d4ac7e6eee10fdbd5529912240ddb534bba55d0f404962e8b6e8314c20f5592a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_39d9956bdc6f4e37c09779fd14399117d8906a31e31807be662b594ecda7fbd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39d9956bdc6f4e37c09779fd14399117d8906a31e31807be662b594ecda7fbd6->enter($__internal_39d9956bdc6f4e37c09779fd14399117d8906a31e31807be662b594ecda7fbd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_39d9956bdc6f4e37c09779fd14399117d8906a31e31807be662b594ecda7fbd6->leave($__internal_39d9956bdc6f4e37c09779fd14399117d8906a31e31807be662b594ecda7fbd6_prof);

        
        $__internal_d4ac7e6eee10fdbd5529912240ddb534bba55d0f404962e8b6e8314c20f5592a->leave($__internal_d4ac7e6eee10fdbd5529912240ddb534bba55d0f404962e8b6e8314c20f5592a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
