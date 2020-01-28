<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_c5f29f998e89a26181e4702dba74db0c75d302fb72f6086f37d07706a1180d60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_24852b5eab03b36688e95477d16a340c06da6b3567d3213f724b7402806a50cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24852b5eab03b36688e95477d16a340c06da6b3567d3213f724b7402806a50cc->enter($__internal_24852b5eab03b36688e95477d16a340c06da6b3567d3213f724b7402806a50cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_3cf3e183b676b7793e214cc6ae3cd7eaf53da792e0db20e6144c8c218d6c822c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cf3e183b676b7793e214cc6ae3cd7eaf53da792e0db20e6144c8c218d6c822c->enter($__internal_3cf3e183b676b7793e214cc6ae3cd7eaf53da792e0db20e6144c8c218d6c822c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24852b5eab03b36688e95477d16a340c06da6b3567d3213f724b7402806a50cc->leave($__internal_24852b5eab03b36688e95477d16a340c06da6b3567d3213f724b7402806a50cc_prof);

        
        $__internal_3cf3e183b676b7793e214cc6ae3cd7eaf53da792e0db20e6144c8c218d6c822c->leave($__internal_3cf3e183b676b7793e214cc6ae3cd7eaf53da792e0db20e6144c8c218d6c822c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8d33916f5c0f53f1cf2174f2760a3d21dbac89db37b11b11e982d6a005d42e00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d33916f5c0f53f1cf2174f2760a3d21dbac89db37b11b11e982d6a005d42e00->enter($__internal_8d33916f5c0f53f1cf2174f2760a3d21dbac89db37b11b11e982d6a005d42e00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_16500bf7567d8ac1109d44da58606e0e1048d6646572f83cb18e3d626f4e2322 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16500bf7567d8ac1109d44da58606e0e1048d6646572f83cb18e3d626f4e2322->enter($__internal_16500bf7567d8ac1109d44da58606e0e1048d6646572f83cb18e3d626f4e2322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_16500bf7567d8ac1109d44da58606e0e1048d6646572f83cb18e3d626f4e2322->leave($__internal_16500bf7567d8ac1109d44da58606e0e1048d6646572f83cb18e3d626f4e2322_prof);

        
        $__internal_8d33916f5c0f53f1cf2174f2760a3d21dbac89db37b11b11e982d6a005d42e00->leave($__internal_8d33916f5c0f53f1cf2174f2760a3d21dbac89db37b11b11e982d6a005d42e00_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/Users/hakim/Sites/tunisie-express/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show.html.twig");
    }
}
