<?php

/* OCPlatformBundle:Advert:translation.html.twig */
class __TwigTemplate_28b1a1f5fbfbd668942d95fbfafbc15a3648b13d742a11e5b0b410bcf47c49aa extends Twig_Template
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
        $__internal_8ba12bd3bedc0dcfae4fdff15ab0a040e6e23a039232947beae28657e3685661 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ba12bd3bedc0dcfae4fdff15ab0a040e6e23a039232947beae28657e3685661->enter($__internal_8ba12bd3bedc0dcfae4fdff15ab0a040e6e23a039232947beae28657e3685661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:translation.html.twig"));

        $__internal_d68be5d7fa61fb8e1de86e4f4ea44a038cc3c7bb464685a0cc7037332f8af478 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d68be5d7fa61fb8e1de86e4f4ea44a038cc3c7bb464685a0cc7037332f8af478->enter($__internal_d68be5d7fa61fb8e1de86e4f4ea44a038cc3c7bb464685a0cc7037332f8af478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:translation.html.twig"));

        // line 1
        echo "<html>
    <body>
        <br />
        <br />
        ";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Hello"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 5, $this->getSourceContext()); })()), "html", null, true);
        echo "!
    </body>
</html>";
        
        $__internal_8ba12bd3bedc0dcfae4fdff15ab0a040e6e23a039232947beae28657e3685661->leave($__internal_8ba12bd3bedc0dcfae4fdff15ab0a040e6e23a039232947beae28657e3685661_prof);

        
        $__internal_d68be5d7fa61fb8e1de86e4f4ea44a038cc3c7bb464685a0cc7037332f8af478->leave($__internal_d68be5d7fa61fb8e1de86e4f4ea44a038cc3c7bb464685a0cc7037332f8af478_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:translation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
    <body>
        <br />
        <br />
        {{ 'Hello'|trans }} {{ name }}!
    </body>
</html>", "OCPlatformBundle:Advert:translation.html.twig", "C:\\wamp64\\www\\Symfony\\src\\OC\\PlatformBundle/Resources/views/Advert/translation.html.twig");
    }
}
