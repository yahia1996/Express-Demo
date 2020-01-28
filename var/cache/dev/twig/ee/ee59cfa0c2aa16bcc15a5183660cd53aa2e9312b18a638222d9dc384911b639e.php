<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_cd98fc093384d54d299774fca02da73b4715fe716c8de520cbe1b4b64d882bef extends Twig_Template
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
        $__internal_4be0f18478176c930d2bd1d73478943e5903b3c18ac793a20f02f355728412b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4be0f18478176c930d2bd1d73478943e5903b3c18ac793a20f02f355728412b2->enter($__internal_4be0f18478176c930d2bd1d73478943e5903b3c18ac793a20f02f355728412b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_7e672904bd0a62237463efbcd6e73fafe63526dfa66da2f8e5db55af1f8ed2a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e672904bd0a62237463efbcd6e73fafe63526dfa66da2f8e5db55af1f8ed2a9->enter($__internal_7e672904bd0a62237463efbcd6e73fafe63526dfa66da2f8e5db55af1f8ed2a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        // line 1
        $this->loadTemplate("@MorivenBundle/Resources/views/index.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1)->display($context);
        
        $__internal_4be0f18478176c930d2bd1d73478943e5903b3c18ac793a20f02f355728412b2->leave($__internal_4be0f18478176c930d2bd1d73478943e5903b3c18ac793a20f02f355728412b2_prof);

        
        $__internal_7e672904bd0a62237463efbcd6e73fafe63526dfa66da2f8e5db55af1f8ed2a9->leave($__internal_7e672904bd0a62237463efbcd6e73fafe63526dfa66da2f8e5db55af1f8ed2a9_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@MorivenBundle/Resources/views/index.html.twig' %}", "@FOSUser/Registration/confirmed.html.twig", "C:\\wamp64\\www\\Express-Demo\\Express-Demo\\src\\MorivenBundle\\Resources\\views\\Registration\\confirmed.html.twig");
    }
}
