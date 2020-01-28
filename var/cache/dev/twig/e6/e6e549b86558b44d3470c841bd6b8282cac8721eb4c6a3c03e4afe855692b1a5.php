<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_7cbe89159141b689613ae473f588cd986ce4a9e8530d58a0bdc81dc9fc7896d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
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
        $__internal_babd0c78720e43d2fda392473bab7d72a4b94cbc7e20e3009e4697414f67f141 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_babd0c78720e43d2fda392473bab7d72a4b94cbc7e20e3009e4697414f67f141->enter($__internal_babd0c78720e43d2fda392473bab7d72a4b94cbc7e20e3009e4697414f67f141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_d3baa28801f4d15a176934b1983df5dda0eaf5f9d1a3db041d809290b46f985d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3baa28801f4d15a176934b1983df5dda0eaf5f9d1a3db041d809290b46f985d->enter($__internal_d3baa28801f4d15a176934b1983df5dda0eaf5f9d1a3db041d809290b46f985d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_babd0c78720e43d2fda392473bab7d72a4b94cbc7e20e3009e4697414f67f141->leave($__internal_babd0c78720e43d2fda392473bab7d72a4b94cbc7e20e3009e4697414f67f141_prof);

        
        $__internal_d3baa28801f4d15a176934b1983df5dda0eaf5f9d1a3db041d809290b46f985d->leave($__internal_d3baa28801f4d15a176934b1983df5dda0eaf5f9d1a3db041d809290b46f985d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6054dec5eea323c9d3c0416b0c64cd44dc2575e3b6214a909ba1e4fdb6f1cd5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6054dec5eea323c9d3c0416b0c64cd44dc2575e3b6214a909ba1e4fdb6f1cd5b->enter($__internal_6054dec5eea323c9d3c0416b0c64cd44dc2575e3b6214a909ba1e4fdb6f1cd5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_9675f8daed75ce56235d334d7d25520de6b48e0e6939047c8ff8cb3f190dd06f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9675f8daed75ce56235d334d7d25520de6b48e0e6939047c8ff8cb3f190dd06f->enter($__internal_9675f8daed75ce56235d334d7d25520de6b48e0e6939047c8ff8cb3f190dd06f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_9675f8daed75ce56235d334d7d25520de6b48e0e6939047c8ff8cb3f190dd06f->leave($__internal_9675f8daed75ce56235d334d7d25520de6b48e0e6939047c8ff8cb3f190dd06f_prof);

        
        $__internal_6054dec5eea323c9d3c0416b0c64cd44dc2575e3b6214a909ba1e4fdb6f1cd5b->leave($__internal_6054dec5eea323c9d3c0416b0c64cd44dc2575e3b6214a909ba1e4fdb6f1cd5b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
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
", "WebProfilerBundle:Collector:ajax.html.twig", "/Users/hakim/Sites/tunisie-express/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
