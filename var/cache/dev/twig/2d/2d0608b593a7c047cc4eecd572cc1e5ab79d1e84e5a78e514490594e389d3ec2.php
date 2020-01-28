<?php

/* @MorivenBundle/Resources/views/index.html.twig */
class __TwigTemplate_432494d70099196d22a5e423e2d56a42b4c5d8a449110b96d48226b723f5e7f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@MorivenBundle/Resources/views/layout.html.twig", "@MorivenBundle/Resources/views/index.html.twig", 1);
        $this->blocks = array(
            'slider' => array($this, 'block_slider'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@MorivenBundle/Resources/views/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b7ce731aaa9aad454273fb8aa33aad097ca6bca6e77231110a25691f30991fee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7ce731aaa9aad454273fb8aa33aad097ca6bca6e77231110a25691f30991fee->enter($__internal_b7ce731aaa9aad454273fb8aa33aad097ca6bca6e77231110a25691f30991fee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MorivenBundle/Resources/views/index.html.twig"));

        $__internal_55f1f58fb532a93bf9584a85ddbfc9a3f45fdd4a20d1946a62f7bf08db9efab5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55f1f58fb532a93bf9584a85ddbfc9a3f45fdd4a20d1946a62f7bf08db9efab5->enter($__internal_55f1f58fb532a93bf9584a85ddbfc9a3f45fdd4a20d1946a62f7bf08db9efab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MorivenBundle/Resources/views/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7ce731aaa9aad454273fb8aa33aad097ca6bca6e77231110a25691f30991fee->leave($__internal_b7ce731aaa9aad454273fb8aa33aad097ca6bca6e77231110a25691f30991fee_prof);

        
        $__internal_55f1f58fb532a93bf9584a85ddbfc9a3f45fdd4a20d1946a62f7bf08db9efab5->leave($__internal_55f1f58fb532a93bf9584a85ddbfc9a3f45fdd4a20d1946a62f7bf08db9efab5_prof);

    }

    // line 3
    public function block_slider($context, array $blocks = array())
    {
        $__internal_c454734fb68f896acd4e67a30e90d12fe004724ea8644a1dc3be09427edad674 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c454734fb68f896acd4e67a30e90d12fe004724ea8644a1dc3be09427edad674->enter($__internal_c454734fb68f896acd4e67a30e90d12fe004724ea8644a1dc3be09427edad674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slider"));

        $__internal_d86e7dc31582c21b68f1b12675666c3c248165f6766299868e186cef08e30522 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d86e7dc31582c21b68f1b12675666c3c248165f6766299868e186cef08e30522->enter($__internal_d86e7dc31582c21b68f1b12675666c3c248165f6766299868e186cef08e30522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slider"));

        // line 4
        echo "    ";
        $this->loadTemplate("MorivenBundle:parts:slider.html.twig", "@MorivenBundle/Resources/views/index.html.twig", 4)->display($context);
        
        $__internal_d86e7dc31582c21b68f1b12675666c3c248165f6766299868e186cef08e30522->leave($__internal_d86e7dc31582c21b68f1b12675666c3c248165f6766299868e186cef08e30522_prof);

        
        $__internal_c454734fb68f896acd4e67a30e90d12fe004724ea8644a1dc3be09427edad674->leave($__internal_c454734fb68f896acd4e67a30e90d12fe004724ea8644a1dc3be09427edad674_prof);

    }

    public function getTemplateName()
    {
        return "@MorivenBundle/Resources/views/index.html.twig";
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
        return new Twig_Source("{% extends '@MorivenBundle/Resources/views/layout.html.twig' %}

{% block slider %}
    {% include 'MorivenBundle:parts:slider.html.twig' %}
{% endblock %}", "@MorivenBundle/Resources/views/index.html.twig", "C:\\wamp64\\www\\Express-Demo\\Express-Demo\\src\\MorivenBundle/Resources/views/index.html.twig");
    }
}
