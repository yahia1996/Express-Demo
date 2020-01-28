<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_63c6adc924cfeae25a762d948e0599fec163c7d51fa8f6a630f51cc52b9c5edc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_f0fa23fd6da49dccbd667f12a6075c7cd977a0356cc00c53117cf18e96521147 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0fa23fd6da49dccbd667f12a6075c7cd977a0356cc00c53117cf18e96521147->enter($__internal_f0fa23fd6da49dccbd667f12a6075c7cd977a0356cc00c53117cf18e96521147_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_202f3aafcfc233facce7ab01d35259f49a9c42ab302d1f7e0f780a97afb1b17e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_202f3aafcfc233facce7ab01d35259f49a9c42ab302d1f7e0f780a97afb1b17e->enter($__internal_202f3aafcfc233facce7ab01d35259f49a9c42ab302d1f7e0f780a97afb1b17e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0fa23fd6da49dccbd667f12a6075c7cd977a0356cc00c53117cf18e96521147->leave($__internal_f0fa23fd6da49dccbd667f12a6075c7cd977a0356cc00c53117cf18e96521147_prof);

        
        $__internal_202f3aafcfc233facce7ab01d35259f49a9c42ab302d1f7e0f780a97afb1b17e->leave($__internal_202f3aafcfc233facce7ab01d35259f49a9c42ab302d1f7e0f780a97afb1b17e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e92bf14830e27e1a71e40ddc2a0de3da125e06e954391123b90ce0ef53604e4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e92bf14830e27e1a71e40ddc2a0de3da125e06e954391123b90ce0ef53604e4d->enter($__internal_e92bf14830e27e1a71e40ddc2a0de3da125e06e954391123b90ce0ef53604e4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8302555dca468fefc54094a8022838480093e76ab9170afe03e7d53d0291cca1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8302555dca468fefc54094a8022838480093e76ab9170afe03e7d53d0291cca1->enter($__internal_8302555dca468fefc54094a8022838480093e76ab9170afe03e7d53d0291cca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_8302555dca468fefc54094a8022838480093e76ab9170afe03e7d53d0291cca1->leave($__internal_8302555dca468fefc54094a8022838480093e76ab9170afe03e7d53d0291cca1_prof);

        
        $__internal_e92bf14830e27e1a71e40ddc2a0de3da125e06e954391123b90ce0ef53604e4d->leave($__internal_e92bf14830e27e1a71e40ddc2a0de3da125e06e954391123b90ce0ef53604e4d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/Users/hakim/Sites/tunisie-express/vendor/friendsofsymfony/user-bundle/Resources/views/Group/new.html.twig");
    }
}
