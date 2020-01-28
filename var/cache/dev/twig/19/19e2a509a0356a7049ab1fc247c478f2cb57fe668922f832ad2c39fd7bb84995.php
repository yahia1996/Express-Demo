<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_42492a8e2ff3a4b613f2e93578c88a904cb0d80d4b4604deae4712d4f85ac967 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_ff5af20044440aa1c7899cdb473b00dacacc1f49dffbcbd21d6d573aa64387c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff5af20044440aa1c7899cdb473b00dacacc1f49dffbcbd21d6d573aa64387c3->enter($__internal_ff5af20044440aa1c7899cdb473b00dacacc1f49dffbcbd21d6d573aa64387c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_f66d832b6ef8acf12b9a91cca0adc0eb51eac3a31621845deae332d471a80691 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f66d832b6ef8acf12b9a91cca0adc0eb51eac3a31621845deae332d471a80691->enter($__internal_f66d832b6ef8acf12b9a91cca0adc0eb51eac3a31621845deae332d471a80691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff5af20044440aa1c7899cdb473b00dacacc1f49dffbcbd21d6d573aa64387c3->leave($__internal_ff5af20044440aa1c7899cdb473b00dacacc1f49dffbcbd21d6d573aa64387c3_prof);

        
        $__internal_f66d832b6ef8acf12b9a91cca0adc0eb51eac3a31621845deae332d471a80691->leave($__internal_f66d832b6ef8acf12b9a91cca0adc0eb51eac3a31621845deae332d471a80691_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f7af655bd3c856e8e499e0c51c1544e1a84c4f46391c0b7f7a4523d51dc55639 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7af655bd3c856e8e499e0c51c1544e1a84c4f46391c0b7f7a4523d51dc55639->enter($__internal_f7af655bd3c856e8e499e0c51c1544e1a84c4f46391c0b7f7a4523d51dc55639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7f4d0c4e539e5ac787eb6089f9a4c148d04a21f8c50c195d1d0562f1081e269b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f4d0c4e539e5ac787eb6089f9a4c148d04a21f8c50c195d1d0562f1081e269b->enter($__internal_7f4d0c4e539e5ac787eb6089f9a4c148d04a21f8c50c195d1d0562f1081e269b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_7f4d0c4e539e5ac787eb6089f9a4c148d04a21f8c50c195d1d0562f1081e269b->leave($__internal_7f4d0c4e539e5ac787eb6089f9a4c148d04a21f8c50c195d1d0562f1081e269b_prof);

        
        $__internal_f7af655bd3c856e8e499e0c51c1544e1a84c4f46391c0b7f7a4523d51dc55639->leave($__internal_f7af655bd3c856e8e499e0c51c1544e1a84c4f46391c0b7f7a4523d51dc55639_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/Users/hakim/Sites/tunisie-express/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list.html.twig");
    }
}
