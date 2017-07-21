<?php

/* @WebProfiler/Collector/exception.css.twig */
class __TwigTemplate_56f7e68d0db44494467cc8087c60b7c3f8a1a4bbf19e2f0bde71f903e810cb07 extends Twig_Template
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
        $__internal_8db9d1980862012b7685c3e18851c8a09f993fa06ef9da0b62cee4f5b3034def = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8db9d1980862012b7685c3e18851c8a09f993fa06ef9da0b62cee4f5b3034def->enter($__internal_8db9d1980862012b7685c3e18851c8a09f993fa06ef9da0b62cee4f5b3034def_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        $__internal_eefcb9782c2b4f8463608ba133c1c7fa95dd892c4b611f288a17c977adb52a21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eefcb9782c2b4f8463608ba133c1c7fa95dd892c4b611f288a17c977adb52a21->enter($__internal_eefcb9782c2b4f8463608ba133c1c7fa95dd892c4b611f288a17c977adb52a21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

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
        
        $__internal_8db9d1980862012b7685c3e18851c8a09f993fa06ef9da0b62cee4f5b3034def->leave($__internal_8db9d1980862012b7685c3e18851c8a09f993fa06ef9da0b62cee4f5b3034def_prof);

        
        $__internal_eefcb9782c2b4f8463608ba133c1c7fa95dd892c4b611f288a17c977adb52a21->leave($__internal_eefcb9782c2b4f8463608ba133c1c7fa95dd892c4b611f288a17c977adb52a21_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.css.twig";
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
", "@WebProfiler/Collector/exception.css.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.css.twig");
    }
}
