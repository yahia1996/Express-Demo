<?php

/* MorivenBundle::index.html.twig */
class __TwigTemplate_1c10de5cac6040a94538a0726d8b26574172d46f16cc51542ccb43ad185c966c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@MorivenBundle/Resources/views/layout.html.twig", "MorivenBundle::index.html.twig", 1);
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
        $__internal_e73103c2ed4e705a03acfa735425c1f0af1fb7cf59f504f2563b5b9384b5f4e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e73103c2ed4e705a03acfa735425c1f0af1fb7cf59f504f2563b5b9384b5f4e5->enter($__internal_e73103c2ed4e705a03acfa735425c1f0af1fb7cf59f504f2563b5b9384b5f4e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MorivenBundle::index.html.twig"));

        $__internal_e2fcd8b1c24d4f2a38d24ade892de2f70240730eeecebecb4927c0fb1a265461 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2fcd8b1c24d4f2a38d24ade892de2f70240730eeecebecb4927c0fb1a265461->enter($__internal_e2fcd8b1c24d4f2a38d24ade892de2f70240730eeecebecb4927c0fb1a265461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MorivenBundle::index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e73103c2ed4e705a03acfa735425c1f0af1fb7cf59f504f2563b5b9384b5f4e5->leave($__internal_e73103c2ed4e705a03acfa735425c1f0af1fb7cf59f504f2563b5b9384b5f4e5_prof);

        
        $__internal_e2fcd8b1c24d4f2a38d24ade892de2f70240730eeecebecb4927c0fb1a265461->leave($__internal_e2fcd8b1c24d4f2a38d24ade892de2f70240730eeecebecb4927c0fb1a265461_prof);

    }

    // line 3
    public function block_slider($context, array $blocks = array())
    {
        $__internal_086be1c9a20fb487147b2abe437f029051f29ebd1c6d978a8d5d755189ed6b71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_086be1c9a20fb487147b2abe437f029051f29ebd1c6d978a8d5d755189ed6b71->enter($__internal_086be1c9a20fb487147b2abe437f029051f29ebd1c6d978a8d5d755189ed6b71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slider"));

        $__internal_dadcd7712beec4d202638072aa76acb0e49f0a283e52bf51e03bc39d6469836b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dadcd7712beec4d202638072aa76acb0e49f0a283e52bf51e03bc39d6469836b->enter($__internal_dadcd7712beec4d202638072aa76acb0e49f0a283e52bf51e03bc39d6469836b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slider"));

        // line 4
        echo "    ";
        $this->loadTemplate("MorivenBundle:parts:slider.html.twig", "MorivenBundle::index.html.twig", 4)->display($context);
        
        $__internal_dadcd7712beec4d202638072aa76acb0e49f0a283e52bf51e03bc39d6469836b->leave($__internal_dadcd7712beec4d202638072aa76acb0e49f0a283e52bf51e03bc39d6469836b_prof);

        
        $__internal_086be1c9a20fb487147b2abe437f029051f29ebd1c6d978a8d5d755189ed6b71->leave($__internal_086be1c9a20fb487147b2abe437f029051f29ebd1c6d978a8d5d755189ed6b71_prof);

    }

    public function getTemplateName()
    {
        return "MorivenBundle::index.html.twig";
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
{% endblock %}", "MorivenBundle::index.html.twig", "/Users/hakim/Sites/tunisie-express/src/MorivenBundle/Resources/views/index.html.twig");
    }
}
