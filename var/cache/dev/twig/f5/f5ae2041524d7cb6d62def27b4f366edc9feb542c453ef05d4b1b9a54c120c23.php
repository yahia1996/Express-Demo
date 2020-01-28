<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_c2071308112127eab3b20240aa30a1b5b603390c8e682a9e4f01051826d30a2f extends Twig_Template
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
        $__internal_525139a52a54159fb39dc7bf5c8c9b57550c1110a311924ab78cef7dc4c9e4a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_525139a52a54159fb39dc7bf5c8c9b57550c1110a311924ab78cef7dc4c9e4a4->enter($__internal_525139a52a54159fb39dc7bf5c8c9b57550c1110a311924ab78cef7dc4c9e4a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_4ac665df7e6ff61538d438f2667d2572f98dfb66e98bdc62732225b5ee1953d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ac665df7e6ff61538d438f2667d2572f98dfb66e98bdc62732225b5ee1953d2->enter($__internal_4ac665df7e6ff61538d438f2667d2572f98dfb66e98bdc62732225b5ee1953d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_525139a52a54159fb39dc7bf5c8c9b57550c1110a311924ab78cef7dc4c9e4a4->leave($__internal_525139a52a54159fb39dc7bf5c8c9b57550c1110a311924ab78cef7dc4c9e4a4_prof);

        
        $__internal_4ac665df7e6ff61538d438f2667d2572f98dfb66e98bdc62732225b5ee1953d2->leave($__internal_4ac665df7e6ff61538d438f2667d2572f98dfb66e98bdc62732225b5ee1953d2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a06a61329bc94f654833feb525d7bae05ae3e2669c2a01c7de101da3d0fe9084 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a06a61329bc94f654833feb525d7bae05ae3e2669c2a01c7de101da3d0fe9084->enter($__internal_a06a61329bc94f654833feb525d7bae05ae3e2669c2a01c7de101da3d0fe9084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c78a1e4769897fbaa05b4aa5548d5e98956ea36039c915c6236e479732670c22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c78a1e4769897fbaa05b4aa5548d5e98956ea36039c915c6236e479732670c22->enter($__internal_c78a1e4769897fbaa05b4aa5548d5e98956ea36039c915c6236e479732670c22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_c78a1e4769897fbaa05b4aa5548d5e98956ea36039c915c6236e479732670c22->leave($__internal_c78a1e4769897fbaa05b4aa5548d5e98956ea36039c915c6236e479732670c22_prof);

        
        $__internal_a06a61329bc94f654833feb525d7bae05ae3e2669c2a01c7de101da3d0fe9084->leave($__internal_a06a61329bc94f654833feb525d7bae05ae3e2669c2a01c7de101da3d0fe9084_prof);

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
