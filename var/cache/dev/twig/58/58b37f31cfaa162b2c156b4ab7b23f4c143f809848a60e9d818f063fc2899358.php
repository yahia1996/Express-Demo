<?php

/* @moriven/views/index.html.twig */
class __TwigTemplate_cdba0d06a4f873aae328361353daa056a2bc14101d45d1717e234ab0808ce3cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@MorivenBundle/Resources/views/layout.html.twig", "@moriven/views/index.html.twig", 1);
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
        $__internal_ba445a860dd8850ee50b856f33a0b1de8bf5da1d31721ea1ae7e49ad3dd23f83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba445a860dd8850ee50b856f33a0b1de8bf5da1d31721ea1ae7e49ad3dd23f83->enter($__internal_ba445a860dd8850ee50b856f33a0b1de8bf5da1d31721ea1ae7e49ad3dd23f83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@moriven/views/index.html.twig"));

        $__internal_726bc95bd76a6ada94105dd6b211201142a5375ad3da78e105a129e510f04630 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_726bc95bd76a6ada94105dd6b211201142a5375ad3da78e105a129e510f04630->enter($__internal_726bc95bd76a6ada94105dd6b211201142a5375ad3da78e105a129e510f04630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@moriven/views/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba445a860dd8850ee50b856f33a0b1de8bf5da1d31721ea1ae7e49ad3dd23f83->leave($__internal_ba445a860dd8850ee50b856f33a0b1de8bf5da1d31721ea1ae7e49ad3dd23f83_prof);

        
        $__internal_726bc95bd76a6ada94105dd6b211201142a5375ad3da78e105a129e510f04630->leave($__internal_726bc95bd76a6ada94105dd6b211201142a5375ad3da78e105a129e510f04630_prof);

    }

    // line 3
    public function block_slider($context, array $blocks = array())
    {
        $__internal_75b1ce07f3b8f34a361ce1ddbcf059048454e76613960ca6abadb4ca0246ac45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75b1ce07f3b8f34a361ce1ddbcf059048454e76613960ca6abadb4ca0246ac45->enter($__internal_75b1ce07f3b8f34a361ce1ddbcf059048454e76613960ca6abadb4ca0246ac45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slider"));

        $__internal_e13b85cb5e465121e33537f28e6c5b92ecf842be696642c2ea8127bd9e4bba5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e13b85cb5e465121e33537f28e6c5b92ecf842be696642c2ea8127bd9e4bba5a->enter($__internal_e13b85cb5e465121e33537f28e6c5b92ecf842be696642c2ea8127bd9e4bba5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slider"));

        // line 4
        echo "    ";
        $this->loadTemplate("MorivenBundle:parts:slider.html.twig", "@moriven/views/index.html.twig", 4)->display($context);
        
        $__internal_e13b85cb5e465121e33537f28e6c5b92ecf842be696642c2ea8127bd9e4bba5a->leave($__internal_e13b85cb5e465121e33537f28e6c5b92ecf842be696642c2ea8127bd9e4bba5a_prof);

        
        $__internal_75b1ce07f3b8f34a361ce1ddbcf059048454e76613960ca6abadb4ca0246ac45->leave($__internal_75b1ce07f3b8f34a361ce1ddbcf059048454e76613960ca6abadb4ca0246ac45_prof);

    }

    public function getTemplateName()
    {
        return "@moriven/views/index.html.twig";
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
{% endblock %}", "@moriven/views/index.html.twig", "C:\\wamp64\\www\\Express-Demo\\Express-Demo\\src\\MorivenBundle\\Resources\\views\\index.html.twig");
    }
}
