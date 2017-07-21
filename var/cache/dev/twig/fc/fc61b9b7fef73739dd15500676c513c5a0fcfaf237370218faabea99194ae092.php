<?php

/* @OCPlatform/Advert/translation.html.twig */
class __TwigTemplate_daf954aebac35f68aee74a3a5a331404ebfa43ecb816a034cb9e1730965b69f7 extends Twig_Template
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
        $__internal_8fe44d8b30342d6ef16473a87e5e9a7c17af3697cd4521d0bd587fd1e80a2c96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fe44d8b30342d6ef16473a87e5e9a7c17af3697cd4521d0bd587fd1e80a2c96->enter($__internal_8fe44d8b30342d6ef16473a87e5e9a7c17af3697cd4521d0bd587fd1e80a2c96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCPlatform/Advert/translation.html.twig"));

        $__internal_f61a33a789d5cb6bd6f9e6509111cc76e6df061ef386ce16d0779cccf6597768 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f61a33a789d5cb6bd6f9e6509111cc76e6df061ef386ce16d0779cccf6597768->enter($__internal_f61a33a789d5cb6bd6f9e6509111cc76e6df061ef386ce16d0779cccf6597768_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCPlatform/Advert/translation.html.twig"));

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
        
        $__internal_8fe44d8b30342d6ef16473a87e5e9a7c17af3697cd4521d0bd587fd1e80a2c96->leave($__internal_8fe44d8b30342d6ef16473a87e5e9a7c17af3697cd4521d0bd587fd1e80a2c96_prof);

        
        $__internal_f61a33a789d5cb6bd6f9e6509111cc76e6df061ef386ce16d0779cccf6597768->leave($__internal_f61a33a789d5cb6bd6f9e6509111cc76e6df061ef386ce16d0779cccf6597768_prof);

    }

    public function getTemplateName()
    {
        return "@OCPlatform/Advert/translation.html.twig";
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
</html>", "@OCPlatform/Advert/translation.html.twig", "C:\\wamp64\\www\\Symfony\\src\\OC\\PlatformBundle\\Resources\\views\\Advert\\translation.html.twig");
    }
}
