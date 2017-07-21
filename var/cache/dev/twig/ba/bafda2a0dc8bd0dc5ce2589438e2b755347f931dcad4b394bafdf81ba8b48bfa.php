<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_401cfe4615c2e934bc01c95257e7f026d854f023b35a125d7becf8ac7852d429 extends Twig_Template
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
        $__internal_0ac50ae2b016108ec1b05519ddeedf813fbcd684b3b2a2cd232a78f69c3df322 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ac50ae2b016108ec1b05519ddeedf813fbcd684b3b2a2cd232a78f69c3df322->enter($__internal_0ac50ae2b016108ec1b05519ddeedf813fbcd684b3b2a2cd232a78f69c3df322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_bb564b4195b70970a5887b2bda3e5b460e435aa4b8cbf2e4fba49e5afbf595ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb564b4195b70970a5887b2bda3e5b460e435aa4b8cbf2e4fba49e5afbf595ac->enter($__internal_bb564b4195b70970a5887b2bda3e5b460e435aa4b8cbf2e4fba49e5afbf595ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_0ac50ae2b016108ec1b05519ddeedf813fbcd684b3b2a2cd232a78f69c3df322->leave($__internal_0ac50ae2b016108ec1b05519ddeedf813fbcd684b3b2a2cd232a78f69c3df322_prof);

        
        $__internal_bb564b4195b70970a5887b2bda3e5b460e435aa4b8cbf2e4fba49e5afbf595ac->leave($__internal_bb564b4195b70970a5887b2bda3e5b460e435aa4b8cbf2e4fba49e5afbf595ac_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
