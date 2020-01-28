<?php

/* @moriven/views/index.html.twig */
class __TwigTemplate_f20bc44836981e12e1b8fe1e1db3c87379d80b4226507248b10224ce8de23b53 extends Twig_Template
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
        $__internal_02c5bb1b92a4e1cab21daa7de15cadfb6fe143ed31a72de223a83144fd589013 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02c5bb1b92a4e1cab21daa7de15cadfb6fe143ed31a72de223a83144fd589013->enter($__internal_02c5bb1b92a4e1cab21daa7de15cadfb6fe143ed31a72de223a83144fd589013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@moriven/views/index.html.twig"));

        $__internal_d55594b9fa1182798fdff834c3181fd174c0f3c6cc29116106c7a7aae0afc46f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d55594b9fa1182798fdff834c3181fd174c0f3c6cc29116106c7a7aae0afc46f->enter($__internal_d55594b9fa1182798fdff834c3181fd174c0f3c6cc29116106c7a7aae0afc46f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@moriven/views/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02c5bb1b92a4e1cab21daa7de15cadfb6fe143ed31a72de223a83144fd589013->leave($__internal_02c5bb1b92a4e1cab21daa7de15cadfb6fe143ed31a72de223a83144fd589013_prof);

        
        $__internal_d55594b9fa1182798fdff834c3181fd174c0f3c6cc29116106c7a7aae0afc46f->leave($__internal_d55594b9fa1182798fdff834c3181fd174c0f3c6cc29116106c7a7aae0afc46f_prof);

    }

    // line 3
    public function block_slider($context, array $blocks = array())
    {
        $__internal_dda688b89ee8795aa511356a13055863c116d1a4bc934b015bcb43c4de4c1a89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dda688b89ee8795aa511356a13055863c116d1a4bc934b015bcb43c4de4c1a89->enter($__internal_dda688b89ee8795aa511356a13055863c116d1a4bc934b015bcb43c4de4c1a89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slider"));

        $__internal_b917522035e351e94b2853e56098de7d5edd109830910af4f51f1fd91908205d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b917522035e351e94b2853e56098de7d5edd109830910af4f51f1fd91908205d->enter($__internal_b917522035e351e94b2853e56098de7d5edd109830910af4f51f1fd91908205d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slider"));

        // line 4
        echo "    ";
        $this->loadTemplate("MorivenBundle:parts:slider.html.twig", "@moriven/views/index.html.twig", 4)->display($context);
        
        $__internal_b917522035e351e94b2853e56098de7d5edd109830910af4f51f1fd91908205d->leave($__internal_b917522035e351e94b2853e56098de7d5edd109830910af4f51f1fd91908205d_prof);

        
        $__internal_dda688b89ee8795aa511356a13055863c116d1a4bc934b015bcb43c4de4c1a89->leave($__internal_dda688b89ee8795aa511356a13055863c116d1a4bc934b015bcb43c4de4c1a89_prof);

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
