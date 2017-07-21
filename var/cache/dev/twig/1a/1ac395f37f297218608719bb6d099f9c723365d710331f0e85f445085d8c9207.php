<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_71e1788fb74023371be82aee4d63dd717ed9e9ce196306555e053b04c37433ba extends Twig_Template
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
        $__internal_848a291ab2423627846ca5d34b732bb9f3631978f3c97e675a879a5fcdf61bad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_848a291ab2423627846ca5d34b732bb9f3631978f3c97e675a879a5fcdf61bad->enter($__internal_848a291ab2423627846ca5d34b732bb9f3631978f3c97e675a879a5fcdf61bad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_8b99cbd9c52eee7ca926f9444a4921a5157bb3d9615b9bf5140c385e6f8a24fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b99cbd9c52eee7ca926f9444a4921a5157bb3d9615b9bf5140c385e6f8a24fd->enter($__internal_8b99cbd9c52eee7ca926f9444a4921a5157bb3d9615b9bf5140c385e6f8a24fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_848a291ab2423627846ca5d34b732bb9f3631978f3c97e675a879a5fcdf61bad->leave($__internal_848a291ab2423627846ca5d34b732bb9f3631978f3c97e675a879a5fcdf61bad_prof);

        
        $__internal_8b99cbd9c52eee7ca926f9444a4921a5157bb3d9615b9bf5140c385e6f8a24fd->leave($__internal_8b99cbd9c52eee7ca926f9444a4921a5157bb3d9615b9bf5140c385e6f8a24fd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
