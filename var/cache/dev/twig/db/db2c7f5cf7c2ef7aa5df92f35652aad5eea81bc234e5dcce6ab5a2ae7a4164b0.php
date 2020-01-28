<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_c277c35c425ece5a2102172af0a590a00fdc510cea296afe87e500c995793345 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_dbc2f8e2adeba6d4cfbf7eb76aa011f3ca895e2ebd877ee7b0955f60a8f932e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbc2f8e2adeba6d4cfbf7eb76aa011f3ca895e2ebd877ee7b0955f60a8f932e1->enter($__internal_dbc2f8e2adeba6d4cfbf7eb76aa011f3ca895e2ebd877ee7b0955f60a8f932e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_ee6678468472911b3379644df5f3a468c7e624a8511dd8cf20b308dca30d98c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee6678468472911b3379644df5f3a468c7e624a8511dd8cf20b308dca30d98c5->enter($__internal_ee6678468472911b3379644df5f3a468c7e624a8511dd8cf20b308dca30d98c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbc2f8e2adeba6d4cfbf7eb76aa011f3ca895e2ebd877ee7b0955f60a8f932e1->leave($__internal_dbc2f8e2adeba6d4cfbf7eb76aa011f3ca895e2ebd877ee7b0955f60a8f932e1_prof);

        
        $__internal_ee6678468472911b3379644df5f3a468c7e624a8511dd8cf20b308dca30d98c5->leave($__internal_ee6678468472911b3379644df5f3a468c7e624a8511dd8cf20b308dca30d98c5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6121478b1f852e57d601405c21f02d0e5ca63a11dc6fe608cd5e6567b84732bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6121478b1f852e57d601405c21f02d0e5ca63a11dc6fe608cd5e6567b84732bb->enter($__internal_6121478b1f852e57d601405c21f02d0e5ca63a11dc6fe608cd5e6567b84732bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e716571ee930bdae317c30acb62bc5ec080d7b839043b996b63edab1cea6db2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e716571ee930bdae317c30acb62bc5ec080d7b839043b996b63edab1cea6db2a->enter($__internal_e716571ee930bdae317c30acb62bc5ec080d7b839043b996b63edab1cea6db2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_e716571ee930bdae317c30acb62bc5ec080d7b839043b996b63edab1cea6db2a->leave($__internal_e716571ee930bdae317c30acb62bc5ec080d7b839043b996b63edab1cea6db2a_prof);

        
        $__internal_6121478b1f852e57d601405c21f02d0e5ca63a11dc6fe608cd5e6567b84732bb->leave($__internal_6121478b1f852e57d601405c21f02d0e5ca63a11dc6fe608cd5e6567b84732bb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/Users/hakim/Sites/tunisie-express/vendor/friendsofsymfony/user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
