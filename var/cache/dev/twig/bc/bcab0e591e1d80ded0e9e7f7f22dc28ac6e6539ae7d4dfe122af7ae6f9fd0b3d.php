<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_506f3d5844b8525a4fae81f7ab669653943ba950e45766894758177c9d1f4018 extends Twig_Template
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
        $__internal_29426133ab0f6ed0e5aa08ac5f011f9c584762ce69ad07b40aa21a377854b7ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29426133ab0f6ed0e5aa08ac5f011f9c584762ce69ad07b40aa21a377854b7ad->enter($__internal_29426133ab0f6ed0e5aa08ac5f011f9c584762ce69ad07b40aa21a377854b7ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_e6cf3416bdb2b6da41342b349e46ac227a63894183e666d7858473506d5fcec5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6cf3416bdb2b6da41342b349e46ac227a63894183e666d7858473506d5fcec5->enter($__internal_e6cf3416bdb2b6da41342b349e46ac227a63894183e666d7858473506d5fcec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper {
    min-height: auto;
}
";
        
        $__internal_29426133ab0f6ed0e5aa08ac5f011f9c584762ce69ad07b40aa21a377854b7ad->leave($__internal_29426133ab0f6ed0e5aa08ac5f011f9c584762ce69ad07b40aa21a377854b7ad_prof);

        
        $__internal_e6cf3416bdb2b6da41342b349e46ac227a63894183e666d7858473506d5fcec5->leave($__internal_e6cf3416bdb2b6da41342b349e46ac227a63894183e666d7858473506d5fcec5_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper {
    min-height: auto;
}
", "WebProfilerBundle:Collector:exception.css.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
