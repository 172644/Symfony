<?php

/* ::base.html.twig */
class __TwigTemplate_e718bbe502e7024f8bcf4bac93603094f8730420c6b04d3f0c3907504cd74752 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_881bd32ec40ba46f0b91b5dc04fba48ffb16f5ee54480352bb3f7ffb02b4c52d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_881bd32ec40ba46f0b91b5dc04fba48ffb16f5ee54480352bb3f7ffb02b4c52d->enter($__internal_881bd32ec40ba46f0b91b5dc04fba48ffb16f5ee54480352bb3f7ffb02b4c52d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_d6a06d22cce2357a59439c4d4f19025a779891bb4bf4b0f7ff5db45a7981a3ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6a06d22cce2357a59439c4d4f19025a779891bb4bf4b0f7ff5db45a7981a3ab->enter($__internal_d6a06d22cce2357a59439c4d4f19025a779891bb4bf4b0f7ff5db45a7981a3ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_881bd32ec40ba46f0b91b5dc04fba48ffb16f5ee54480352bb3f7ffb02b4c52d->leave($__internal_881bd32ec40ba46f0b91b5dc04fba48ffb16f5ee54480352bb3f7ffb02b4c52d_prof);

        
        $__internal_d6a06d22cce2357a59439c4d4f19025a779891bb4bf4b0f7ff5db45a7981a3ab->leave($__internal_d6a06d22cce2357a59439c4d4f19025a779891bb4bf4b0f7ff5db45a7981a3ab_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7e78530615f3d6783726586fc7e2cdef94f14321c8f8a493eec38c9186b28b4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e78530615f3d6783726586fc7e2cdef94f14321c8f8a493eec38c9186b28b4d->enter($__internal_7e78530615f3d6783726586fc7e2cdef94f14321c8f8a493eec38c9186b28b4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2c96e9c5d69eaa0e63beff72443e06ee0dbfc76dd5c9e13aae78ee3c19b3cec7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c96e9c5d69eaa0e63beff72443e06ee0dbfc76dd5c9e13aae78ee3c19b3cec7->enter($__internal_2c96e9c5d69eaa0e63beff72443e06ee0dbfc76dd5c9e13aae78ee3c19b3cec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_2c96e9c5d69eaa0e63beff72443e06ee0dbfc76dd5c9e13aae78ee3c19b3cec7->leave($__internal_2c96e9c5d69eaa0e63beff72443e06ee0dbfc76dd5c9e13aae78ee3c19b3cec7_prof);

        
        $__internal_7e78530615f3d6783726586fc7e2cdef94f14321c8f8a493eec38c9186b28b4d->leave($__internal_7e78530615f3d6783726586fc7e2cdef94f14321c8f8a493eec38c9186b28b4d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4c24500e0c8d15dc40bb6f3e915024378c0a5f0fbaa6e8faf9758e9750918998 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c24500e0c8d15dc40bb6f3e915024378c0a5f0fbaa6e8faf9758e9750918998->enter($__internal_4c24500e0c8d15dc40bb6f3e915024378c0a5f0fbaa6e8faf9758e9750918998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_344a0e0511511606b486e2661569c8fc612322c070433cc7b2fa36ec4d18053e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_344a0e0511511606b486e2661569c8fc612322c070433cc7b2fa36ec4d18053e->enter($__internal_344a0e0511511606b486e2661569c8fc612322c070433cc7b2fa36ec4d18053e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_344a0e0511511606b486e2661569c8fc612322c070433cc7b2fa36ec4d18053e->leave($__internal_344a0e0511511606b486e2661569c8fc612322c070433cc7b2fa36ec4d18053e_prof);

        
        $__internal_4c24500e0c8d15dc40bb6f3e915024378c0a5f0fbaa6e8faf9758e9750918998->leave($__internal_4c24500e0c8d15dc40bb6f3e915024378c0a5f0fbaa6e8faf9758e9750918998_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_9d0b3ad9bc52e37cff4bc817d46f58fa9a9357c4f6fdd6c03d0be661fd96a3ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d0b3ad9bc52e37cff4bc817d46f58fa9a9357c4f6fdd6c03d0be661fd96a3ba->enter($__internal_9d0b3ad9bc52e37cff4bc817d46f58fa9a9357c4f6fdd6c03d0be661fd96a3ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_411e9d80aa81d6534e8bb8fafeaf3df0e3970eecac1a384f15d21b2b613f812f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_411e9d80aa81d6534e8bb8fafeaf3df0e3970eecac1a384f15d21b2b613f812f->enter($__internal_411e9d80aa81d6534e8bb8fafeaf3df0e3970eecac1a384f15d21b2b613f812f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_411e9d80aa81d6534e8bb8fafeaf3df0e3970eecac1a384f15d21b2b613f812f->leave($__internal_411e9d80aa81d6534e8bb8fafeaf3df0e3970eecac1a384f15d21b2b613f812f_prof);

        
        $__internal_9d0b3ad9bc52e37cff4bc817d46f58fa9a9357c4f6fdd6c03d0be661fd96a3ba->leave($__internal_9d0b3ad9bc52e37cff4bc817d46f58fa9a9357c4f6fdd6c03d0be661fd96a3ba_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_016347bf636743cb433d57787634f18510b8924e9609fd0bdc31d8d9a66c50f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_016347bf636743cb433d57787634f18510b8924e9609fd0bdc31d8d9a66c50f3->enter($__internal_016347bf636743cb433d57787634f18510b8924e9609fd0bdc31d8d9a66c50f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c331549c130ea6984326eef3be1cc62b0a55093a3765b7c383e2a7b6f21f9347 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c331549c130ea6984326eef3be1cc62b0a55093a3765b7c383e2a7b6f21f9347->enter($__internal_c331549c130ea6984326eef3be1cc62b0a55093a3765b7c383e2a7b6f21f9347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c331549c130ea6984326eef3be1cc62b0a55093a3765b7c383e2a7b6f21f9347->leave($__internal_c331549c130ea6984326eef3be1cc62b0a55093a3765b7c383e2a7b6f21f9347_prof);

        
        $__internal_016347bf636743cb433d57787634f18510b8924e9609fd0bdc31d8d9a66c50f3->leave($__internal_016347bf636743cb433d57787634f18510b8924e9609fd0bdc31d8d9a66c50f3_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "C:\\wamp64\\www\\Symfony\\app/Resources\\views/base.html.twig");
    }
}
