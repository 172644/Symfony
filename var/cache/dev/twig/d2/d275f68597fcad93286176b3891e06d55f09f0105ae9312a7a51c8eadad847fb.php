<?php

/* CoreSphereConsoleBundle::base.html.twig */
class __TwigTemplate_80bef6f43c0f3e248a1fdb99ba79fcca14571af00e0b38cd8020f20aafa9542e extends Twig_Template
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
        $__internal_6404eac5f2fb85b75f0729b8b85c6272a265396a9a5b69f984006aa9d78b5997 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6404eac5f2fb85b75f0729b8b85c6272a265396a9a5b69f984006aa9d78b5997->enter($__internal_6404eac5f2fb85b75f0729b8b85c6272a265396a9a5b69f984006aa9d78b5997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle::base.html.twig"));

        $__internal_93d09e038d129eba8bed4aa374fd1f15ae78c69e511cdca411917b93064a9b8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93d09e038d129eba8bed4aa374fd1f15ae78c69e511cdca411917b93064a9b8d->enter($__internal_93d09e038d129eba8bed4aa374fd1f15ae78c69e511cdca411917b93064a9b8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle::base.html.twig"));

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
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 22
        echo "    </body>
</html>
";
        
        $__internal_6404eac5f2fb85b75f0729b8b85c6272a265396a9a5b69f984006aa9d78b5997->leave($__internal_6404eac5f2fb85b75f0729b8b85c6272a265396a9a5b69f984006aa9d78b5997_prof);

        
        $__internal_93d09e038d129eba8bed4aa374fd1f15ae78c69e511cdca411917b93064a9b8d->leave($__internal_93d09e038d129eba8bed4aa374fd1f15ae78c69e511cdca411917b93064a9b8d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_48729ab418a509aab447ada206d6fc787b8b54c66515987458126fca884630f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48729ab418a509aab447ada206d6fc787b8b54c66515987458126fca884630f9->enter($__internal_48729ab418a509aab447ada206d6fc787b8b54c66515987458126fca884630f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_98cb943bc99b2206ebe5d6d65a5bff0c2e730ebbb26babab191ab38dcc48596a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98cb943bc99b2206ebe5d6d65a5bff0c2e730ebbb26babab191ab38dcc48596a->enter($__internal_98cb943bc99b2206ebe5d6d65a5bff0c2e730ebbb26babab191ab38dcc48596a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CoreSphere Console";
        
        $__internal_98cb943bc99b2206ebe5d6d65a5bff0c2e730ebbb26babab191ab38dcc48596a->leave($__internal_98cb943bc99b2206ebe5d6d65a5bff0c2e730ebbb26babab191ab38dcc48596a_prof);

        
        $__internal_48729ab418a509aab447ada206d6fc787b8b54c66515987458126fca884630f9->leave($__internal_48729ab418a509aab447ada206d6fc787b8b54c66515987458126fca884630f9_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f0b3b7ae313167ef7b731f677433001e17722e2f021e100f32b5a8f34fff447c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0b3b7ae313167ef7b731f677433001e17722e2f021e100f32b5a8f34fff447c->enter($__internal_f0b3b7ae313167ef7b731f677433001e17722e2f021e100f32b5a8f34fff447c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_273fdea0a92311c69e66a2dfe224df1283f3cde564ad6e4271217b15cc1d9953 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_273fdea0a92311c69e66a2dfe224df1283f3cde564ad6e4271217b15cc1d9953->enter($__internal_273fdea0a92311c69e66a2dfe224df1283f3cde564ad6e4271217b15cc1d9953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/css/base.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        ";
        
        $__internal_273fdea0a92311c69e66a2dfe224df1283f3cde564ad6e4271217b15cc1d9953->leave($__internal_273fdea0a92311c69e66a2dfe224df1283f3cde564ad6e4271217b15cc1d9953_prof);

        
        $__internal_f0b3b7ae313167ef7b731f677433001e17722e2f021e100f32b5a8f34fff447c->leave($__internal_f0b3b7ae313167ef7b731f677433001e17722e2f021e100f32b5a8f34fff447c_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_0954fb622c52e5a1b7edf899368d3d9a513c9ad3b0a22abff735f0023f22ef6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0954fb622c52e5a1b7edf899368d3d9a513c9ad3b0a22abff735f0023f22ef6b->enter($__internal_0954fb622c52e5a1b7edf899368d3d9a513c9ad3b0a22abff735f0023f22ef6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_82df2425dbeb3023a1148ccdf561b5ae1f3d5fff642cc60b6e5e515b59afbdba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82df2425dbeb3023a1148ccdf561b5ae1f3d5fff642cc60b6e5e515b59afbdba->enter($__internal_82df2425dbeb3023a1148ccdf561b5ae1f3d5fff642cc60b6e5e515b59afbdba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "";
        
        $__internal_82df2425dbeb3023a1148ccdf561b5ae1f3d5fff642cc60b6e5e515b59afbdba->leave($__internal_82df2425dbeb3023a1148ccdf561b5ae1f3d5fff642cc60b6e5e515b59afbdba_prof);

        
        $__internal_0954fb622c52e5a1b7edf899368d3d9a513c9ad3b0a22abff735f0023f22ef6b->leave($__internal_0954fb622c52e5a1b7edf899368d3d9a513c9ad3b0a22abff735f0023f22ef6b_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5716bc1fba91cd91cedb2b1332121f2828bad8980302205028ff3b541a7e9c20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5716bc1fba91cd91cedb2b1332121f2828bad8980302205028ff3b541a7e9c20->enter($__internal_5716bc1fba91cd91cedb2b1332121f2828bad8980302205028ff3b541a7e9c20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_0ed4475bb59b9708c1596bf6022d347f6a65f64c556e4b05f59d6ce9029a2276 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ed4475bb59b9708c1596bf6022d347f6a65f64c556e4b05f59d6ce9029a2276->enter($__internal_0ed4475bb59b9708c1596bf6022d347f6a65f64c556e4b05f59d6ce9029a2276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "            ";
        // line 15
        echo "            <script>
            window.jQuery || document.write('<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js\"><\\/script>')
            </script>
            <script>
            window.jQuery || document.write(\"<script src=\\\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/js/jquery-1.8.3.min.js"), "html", null, true);
        echo "\\\"><\\/script>\");
            </script>
        ";
        
        $__internal_0ed4475bb59b9708c1596bf6022d347f6a65f64c556e4b05f59d6ce9029a2276->leave($__internal_0ed4475bb59b9708c1596bf6022d347f6a65f64c556e4b05f59d6ce9029a2276_prof);

        
        $__internal_5716bc1fba91cd91cedb2b1332121f2828bad8980302205028ff3b541a7e9c20->leave($__internal_5716bc1fba91cd91cedb2b1332121f2828bad8980302205028ff3b541a7e9c20_prof);

    }

    public function getTemplateName()
    {
        return "CoreSphereConsoleBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 19,  134 => 15,  132 => 14,  123 => 13,  105 => 12,  92 => 7,  83 => 6,  65 => 5,  53 => 22,  50 => 13,  48 => 12,  41 => 9,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title 'CoreSphere Console' %}</title>
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/coresphereconsole/css/base.css') }}\" type=\"text/css\" />
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body '' %}
        {% block javascripts %}
            {# Load jQuery from Google CDN with a local fallback when not laded yet #}
            <script>
            window.jQuery || document.write('<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js\"><\\/script>')
            </script>
            <script>
            window.jQuery || document.write(\"<script src=\\\"{{ asset('bundles/coresphereconsole/js/jquery-1.8.3.min.js') }}\\\"><\\/script>\");
            </script>
        {% endblock %}
    </body>
</html>
", "CoreSphereConsoleBundle::base.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\coresphere\\console-bundle/Resources/views/base.html.twig");
    }
}
