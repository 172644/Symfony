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
        $__internal_4b6acfb015fe85cc12111853ac0c7d6c2398eb2e027035f209a080e44253b204 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b6acfb015fe85cc12111853ac0c7d6c2398eb2e027035f209a080e44253b204->enter($__internal_4b6acfb015fe85cc12111853ac0c7d6c2398eb2e027035f209a080e44253b204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_b1d1d849b50a2e3d583a2880d01ff1ba9e3f0fc30bcbeaab61810064b1011140 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1d1d849b50a2e3d583a2880d01ff1ba9e3f0fc30bcbeaab61810064b1011140->enter($__internal_b1d1d849b50a2e3d583a2880d01ff1ba9e3f0fc30bcbeaab61810064b1011140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_4b6acfb015fe85cc12111853ac0c7d6c2398eb2e027035f209a080e44253b204->leave($__internal_4b6acfb015fe85cc12111853ac0c7d6c2398eb2e027035f209a080e44253b204_prof);

        
        $__internal_b1d1d849b50a2e3d583a2880d01ff1ba9e3f0fc30bcbeaab61810064b1011140->leave($__internal_b1d1d849b50a2e3d583a2880d01ff1ba9e3f0fc30bcbeaab61810064b1011140_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_86fd51e7e91ecabbfec426e3e4357e9da44ef69e8ec2c4daacb16d902dd61c90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86fd51e7e91ecabbfec426e3e4357e9da44ef69e8ec2c4daacb16d902dd61c90->enter($__internal_86fd51e7e91ecabbfec426e3e4357e9da44ef69e8ec2c4daacb16d902dd61c90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8578453bdb048a0a03ecc21d7e12fe8649cf16f8ccb37fb3c8ab9cba270225f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8578453bdb048a0a03ecc21d7e12fe8649cf16f8ccb37fb3c8ab9cba270225f2->enter($__internal_8578453bdb048a0a03ecc21d7e12fe8649cf16f8ccb37fb3c8ab9cba270225f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_8578453bdb048a0a03ecc21d7e12fe8649cf16f8ccb37fb3c8ab9cba270225f2->leave($__internal_8578453bdb048a0a03ecc21d7e12fe8649cf16f8ccb37fb3c8ab9cba270225f2_prof);

        
        $__internal_86fd51e7e91ecabbfec426e3e4357e9da44ef69e8ec2c4daacb16d902dd61c90->leave($__internal_86fd51e7e91ecabbfec426e3e4357e9da44ef69e8ec2c4daacb16d902dd61c90_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_a4906edb6e9e737fde5343ff992e314feec6891406410689181c4293cddf584c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4906edb6e9e737fde5343ff992e314feec6891406410689181c4293cddf584c->enter($__internal_a4906edb6e9e737fde5343ff992e314feec6891406410689181c4293cddf584c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ac4d5fa9ea02aadc0007b1b898c5da82ad48cc65a09ff6f528889ef0cf61863b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac4d5fa9ea02aadc0007b1b898c5da82ad48cc65a09ff6f528889ef0cf61863b->enter($__internal_ac4d5fa9ea02aadc0007b1b898c5da82ad48cc65a09ff6f528889ef0cf61863b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_ac4d5fa9ea02aadc0007b1b898c5da82ad48cc65a09ff6f528889ef0cf61863b->leave($__internal_ac4d5fa9ea02aadc0007b1b898c5da82ad48cc65a09ff6f528889ef0cf61863b_prof);

        
        $__internal_a4906edb6e9e737fde5343ff992e314feec6891406410689181c4293cddf584c->leave($__internal_a4906edb6e9e737fde5343ff992e314feec6891406410689181c4293cddf584c_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_3ff8a06242dc74756b5e2f17cf795a23bbc2caa3207248ae472b215318bd950c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ff8a06242dc74756b5e2f17cf795a23bbc2caa3207248ae472b215318bd950c->enter($__internal_3ff8a06242dc74756b5e2f17cf795a23bbc2caa3207248ae472b215318bd950c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f997ae7b6ed2cb9ce5181fc08fef9fff0061c347fe58372ce470ffde73d69622 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f997ae7b6ed2cb9ce5181fc08fef9fff0061c347fe58372ce470ffde73d69622->enter($__internal_f997ae7b6ed2cb9ce5181fc08fef9fff0061c347fe58372ce470ffde73d69622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f997ae7b6ed2cb9ce5181fc08fef9fff0061c347fe58372ce470ffde73d69622->leave($__internal_f997ae7b6ed2cb9ce5181fc08fef9fff0061c347fe58372ce470ffde73d69622_prof);

        
        $__internal_3ff8a06242dc74756b5e2f17cf795a23bbc2caa3207248ae472b215318bd950c->leave($__internal_3ff8a06242dc74756b5e2f17cf795a23bbc2caa3207248ae472b215318bd950c_prof);

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
