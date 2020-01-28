<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_26b36c1871822dca9644dab5ba43584b98ec0065895da145d751ab3c2c4fe523 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_80f9ff944dc1d713863ac12bd5097986a45da2195b98ea4433a3f505b3a505ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80f9ff944dc1d713863ac12bd5097986a45da2195b98ea4433a3f505b3a505ad->enter($__internal_80f9ff944dc1d713863ac12bd5097986a45da2195b98ea4433a3f505b3a505ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_127b14bc88606246b73e81cf5453800c2fbf155ef161584a7cf08e7974e0ee8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_127b14bc88606246b73e81cf5453800c2fbf155ef161584a7cf08e7974e0ee8b->enter($__internal_127b14bc88606246b73e81cf5453800c2fbf155ef161584a7cf08e7974e0ee8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80f9ff944dc1d713863ac12bd5097986a45da2195b98ea4433a3f505b3a505ad->leave($__internal_80f9ff944dc1d713863ac12bd5097986a45da2195b98ea4433a3f505b3a505ad_prof);

        
        $__internal_127b14bc88606246b73e81cf5453800c2fbf155ef161584a7cf08e7974e0ee8b->leave($__internal_127b14bc88606246b73e81cf5453800c2fbf155ef161584a7cf08e7974e0ee8b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9ac297f97793ee68d21650c1682204ef1f106a1dbeacf61d6de95d8707ac7f29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ac297f97793ee68d21650c1682204ef1f106a1dbeacf61d6de95d8707ac7f29->enter($__internal_9ac297f97793ee68d21650c1682204ef1f106a1dbeacf61d6de95d8707ac7f29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a104dc2bcf26228f8c24d0cd0ba6d86d91b8152122b18c5a4f9507cf853fe658 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a104dc2bcf26228f8c24d0cd0ba6d86d91b8152122b18c5a4f9507cf853fe658->enter($__internal_a104dc2bcf26228f8c24d0cd0ba6d86d91b8152122b18c5a4f9507cf853fe658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_a104dc2bcf26228f8c24d0cd0ba6d86d91b8152122b18c5a4f9507cf853fe658->leave($__internal_a104dc2bcf26228f8c24d0cd0ba6d86d91b8152122b18c5a4f9507cf853fe658_prof);

        
        $__internal_9ac297f97793ee68d21650c1682204ef1f106a1dbeacf61d6de95d8707ac7f29->leave($__internal_9ac297f97793ee68d21650c1682204ef1f106a1dbeacf61d6de95d8707ac7f29_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\wamp64\\www\\Express-Demo\\Express-Demo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
