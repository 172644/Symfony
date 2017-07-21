<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_0ff1ead3d5a7312798f43f96e98c285a0c516c0336c2782c66114d66febbaed1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_800d2be90ba6668da47bdb4d548c897a5359942db6385bb780823cf2c28f2b4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_800d2be90ba6668da47bdb4d548c897a5359942db6385bb780823cf2c28f2b4a->enter($__internal_800d2be90ba6668da47bdb4d548c897a5359942db6385bb780823cf2c28f2b4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_07849578aff74ba4029ccc5257f6f0caf6b643d6fb550f072381d209fba53927 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07849578aff74ba4029ccc5257f6f0caf6b643d6fb550f072381d209fba53927->enter($__internal_07849578aff74ba4029ccc5257f6f0caf6b643d6fb550f072381d209fba53927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_800d2be90ba6668da47bdb4d548c897a5359942db6385bb780823cf2c28f2b4a->leave($__internal_800d2be90ba6668da47bdb4d548c897a5359942db6385bb780823cf2c28f2b4a_prof);

        
        $__internal_07849578aff74ba4029ccc5257f6f0caf6b643d6fb550f072381d209fba53927->leave($__internal_07849578aff74ba4029ccc5257f6f0caf6b643d6fb550f072381d209fba53927_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_507bfc70271899a76050f0a7d62a15583ea11dd2e4082a6824f371e79a71bd02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_507bfc70271899a76050f0a7d62a15583ea11dd2e4082a6824f371e79a71bd02->enter($__internal_507bfc70271899a76050f0a7d62a15583ea11dd2e4082a6824f371e79a71bd02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_12214cd93395427a53e0e296ccebc55498c642b6e7c1b66d15f31421205c7110 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12214cd93395427a53e0e296ccebc55498c642b6e7c1b66d15f31421205c7110->enter($__internal_12214cd93395427a53e0e296ccebc55498c642b6e7c1b66d15f31421205c7110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_12214cd93395427a53e0e296ccebc55498c642b6e7c1b66d15f31421205c7110->leave($__internal_12214cd93395427a53e0e296ccebc55498c642b6e7c1b66d15f31421205c7110_prof);

        
        $__internal_507bfc70271899a76050f0a7d62a15583ea11dd2e4082a6824f371e79a71bd02->leave($__internal_507bfc70271899a76050f0a7d62a15583ea11dd2e4082a6824f371e79a71bd02_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
