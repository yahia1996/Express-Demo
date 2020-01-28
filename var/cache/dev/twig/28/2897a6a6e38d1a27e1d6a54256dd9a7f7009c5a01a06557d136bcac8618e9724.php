<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_317dab8f48ce3f247a8d6aed64692bd0b368ef22f4e3f106f7ffafa3ee9c48a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_3e82ee98d339292ef048cd576f025ec7c9ccb8ab970b484170e787db5f692c41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e82ee98d339292ef048cd576f025ec7c9ccb8ab970b484170e787db5f692c41->enter($__internal_3e82ee98d339292ef048cd576f025ec7c9ccb8ab970b484170e787db5f692c41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_5b1d2e23e296dedc82388ff658432aacf70040d15723722de17f6459e2b5c704 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b1d2e23e296dedc82388ff658432aacf70040d15723722de17f6459e2b5c704->enter($__internal_5b1d2e23e296dedc82388ff658432aacf70040d15723722de17f6459e2b5c704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e82ee98d339292ef048cd576f025ec7c9ccb8ab970b484170e787db5f692c41->leave($__internal_3e82ee98d339292ef048cd576f025ec7c9ccb8ab970b484170e787db5f692c41_prof);

        
        $__internal_5b1d2e23e296dedc82388ff658432aacf70040d15723722de17f6459e2b5c704->leave($__internal_5b1d2e23e296dedc82388ff658432aacf70040d15723722de17f6459e2b5c704_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3edc150c6c967ffd8cf2cb895838d778400c52f1ae3e354651d63377edc78ae8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3edc150c6c967ffd8cf2cb895838d778400c52f1ae3e354651d63377edc78ae8->enter($__internal_3edc150c6c967ffd8cf2cb895838d778400c52f1ae3e354651d63377edc78ae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b0e2a018817f5a25030984795e62422d5797f0a4d3b65d76a6d577c9c17a9220 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0e2a018817f5a25030984795e62422d5797f0a4d3b65d76a6d577c9c17a9220->enter($__internal_b0e2a018817f5a25030984795e62422d5797f0a4d3b65d76a6d577c9c17a9220_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_b0e2a018817f5a25030984795e62422d5797f0a4d3b65d76a6d577c9c17a9220->leave($__internal_b0e2a018817f5a25030984795e62422d5797f0a4d3b65d76a6d577c9c17a9220_prof);

        
        $__internal_3edc150c6c967ffd8cf2cb895838d778400c52f1ae3e354651d63377edc78ae8->leave($__internal_3edc150c6c967ffd8cf2cb895838d778400c52f1ae3e354651d63377edc78ae8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/Users/hakim/Sites/tunisie-express/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
