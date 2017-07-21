<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_f8a8686a14b82dc755ad1da7521c770577e6767d64840c7ab55652edaf586ea1 extends Twig_Template
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
        $__internal_87a589ba8094ba45e6079f8eb8f93fdee710ccc3b615fe6b54724f1c38c4f29b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87a589ba8094ba45e6079f8eb8f93fdee710ccc3b615fe6b54724f1c38c4f29b->enter($__internal_87a589ba8094ba45e6079f8eb8f93fdee710ccc3b615fe6b54724f1c38c4f29b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_7d9c38439f7e7286cd22671845ac5073242e44ff46aa11a37f447c463102fc05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d9c38439f7e7286cd22671845ac5073242e44ff46aa11a37f447c463102fc05->enter($__internal_7d9c38439f7e7286cd22671845ac5073242e44ff46aa11a37f447c463102fc05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_87a589ba8094ba45e6079f8eb8f93fdee710ccc3b615fe6b54724f1c38c4f29b->leave($__internal_87a589ba8094ba45e6079f8eb8f93fdee710ccc3b615fe6b54724f1c38c4f29b_prof);

        
        $__internal_7d9c38439f7e7286cd22671845ac5073242e44ff46aa11a37f447c463102fc05->leave($__internal_7d9c38439f7e7286cd22671845ac5073242e44ff46aa11a37f447c463102fc05_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
