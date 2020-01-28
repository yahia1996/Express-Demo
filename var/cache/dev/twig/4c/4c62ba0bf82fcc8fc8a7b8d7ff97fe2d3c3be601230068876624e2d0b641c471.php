<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_271c7ad983918dae7c27aff76609d7b4dc88f9162b1e69bd4ecc6d5cdc1462e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_f778fff60648468649673befc8d1ee290dea72d0e8e9adf824eef04bba50ab01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f778fff60648468649673befc8d1ee290dea72d0e8e9adf824eef04bba50ab01->enter($__internal_f778fff60648468649673befc8d1ee290dea72d0e8e9adf824eef04bba50ab01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_2ad7d0a6dfc5af1d63765b709a8952f2e70ee1e72ef5730a3f7fe2c275d87362 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ad7d0a6dfc5af1d63765b709a8952f2e70ee1e72ef5730a3f7fe2c275d87362->enter($__internal_2ad7d0a6dfc5af1d63765b709a8952f2e70ee1e72ef5730a3f7fe2c275d87362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f778fff60648468649673befc8d1ee290dea72d0e8e9adf824eef04bba50ab01->leave($__internal_f778fff60648468649673befc8d1ee290dea72d0e8e9adf824eef04bba50ab01_prof);

        
        $__internal_2ad7d0a6dfc5af1d63765b709a8952f2e70ee1e72ef5730a3f7fe2c275d87362->leave($__internal_2ad7d0a6dfc5af1d63765b709a8952f2e70ee1e72ef5730a3f7fe2c275d87362_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e45b909a2bc28ba70c8344ec8fc4c51ae1e1d80ee4d2577ced8128e6ca82afa1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e45b909a2bc28ba70c8344ec8fc4c51ae1e1d80ee4d2577ced8128e6ca82afa1->enter($__internal_e45b909a2bc28ba70c8344ec8fc4c51ae1e1d80ee4d2577ced8128e6ca82afa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1ef7f81de13d7aae1d62bb5ba51176f87d1ae3f0c0ca5388426686f47433bdea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ef7f81de13d7aae1d62bb5ba51176f87d1ae3f0c0ca5388426686f47433bdea->enter($__internal_1ef7f81de13d7aae1d62bb5ba51176f87d1ae3f0c0ca5388426686f47433bdea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_1ef7f81de13d7aae1d62bb5ba51176f87d1ae3f0c0ca5388426686f47433bdea->leave($__internal_1ef7f81de13d7aae1d62bb5ba51176f87d1ae3f0c0ca5388426686f47433bdea_prof);

        
        $__internal_e45b909a2bc28ba70c8344ec8fc4c51ae1e1d80ee4d2577ced8128e6ca82afa1->leave($__internal_e45b909a2bc28ba70c8344ec8fc4c51ae1e1d80ee4d2577ced8128e6ca82afa1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/Users/hakim/Sites/tunisie-express/vendor/friendsofsymfony/user-bundle/Resources/views/Group/edit.html.twig");
    }
}
