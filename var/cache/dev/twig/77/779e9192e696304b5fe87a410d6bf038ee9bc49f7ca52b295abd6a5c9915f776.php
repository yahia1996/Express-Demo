<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_f680ee6ea4e66336aef94ee7a0c74cb2d9c22302366ef42a1b567818f3f0fb4b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_041b90e60472bc574fb5fb143c743e5d14c308ee735005f22e679c3e6a4a2c32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_041b90e60472bc574fb5fb143c743e5d14c308ee735005f22e679c3e6a4a2c32->enter($__internal_041b90e60472bc574fb5fb143c743e5d14c308ee735005f22e679c3e6a4a2c32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_ef4d315bd3bd2e48502dd803d3f79e38bb147593c09bbff02cd9b0162bae770c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef4d315bd3bd2e48502dd803d3f79e38bb147593c09bbff02cd9b0162bae770c->enter($__internal_ef4d315bd3bd2e48502dd803d3f79e38bb147593c09bbff02cd9b0162bae770c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_041b90e60472bc574fb5fb143c743e5d14c308ee735005f22e679c3e6a4a2c32->leave($__internal_041b90e60472bc574fb5fb143c743e5d14c308ee735005f22e679c3e6a4a2c32_prof);

        
        $__internal_ef4d315bd3bd2e48502dd803d3f79e38bb147593c09bbff02cd9b0162bae770c->leave($__internal_ef4d315bd3bd2e48502dd803d3f79e38bb147593c09bbff02cd9b0162bae770c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f9de50599e572f54d94e6e3a14df286465e21ffe3c6e64aef50dea1e3d9377fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9de50599e572f54d94e6e3a14df286465e21ffe3c6e64aef50dea1e3d9377fb->enter($__internal_f9de50599e572f54d94e6e3a14df286465e21ffe3c6e64aef50dea1e3d9377fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_8bfaecbc88611ea61e3db6734426e87ab3c0eeac381b40f2f9dd9e3100bc3ab5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bfaecbc88611ea61e3db6734426e87ab3c0eeac381b40f2f9dd9e3100bc3ab5->enter($__internal_8bfaecbc88611ea61e3db6734426e87ab3c0eeac381b40f2f9dd9e3100bc3ab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8bfaecbc88611ea61e3db6734426e87ab3c0eeac381b40f2f9dd9e3100bc3ab5->leave($__internal_8bfaecbc88611ea61e3db6734426e87ab3c0eeac381b40f2f9dd9e3100bc3ab5_prof);

        
        $__internal_f9de50599e572f54d94e6e3a14df286465e21ffe3c6e64aef50dea1e3d9377fb->leave($__internal_f9de50599e572f54d94e6e3a14df286465e21ffe3c6e64aef50dea1e3d9377fb_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8dfdbb6797f86306e778e89ab34c3ec867b48e8851a50b650e4746c04e84e566 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8dfdbb6797f86306e778e89ab34c3ec867b48e8851a50b650e4746c04e84e566->enter($__internal_8dfdbb6797f86306e778e89ab34c3ec867b48e8851a50b650e4746c04e84e566_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ade95a2e404cc018fe81020063bf474d35ec7270b7f82e8d6ca04bc462c3dfe9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ade95a2e404cc018fe81020063bf474d35ec7270b7f82e8d6ca04bc462c3dfe9->enter($__internal_ade95a2e404cc018fe81020063bf474d35ec7270b7f82e8d6ca04bc462c3dfe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ade95a2e404cc018fe81020063bf474d35ec7270b7f82e8d6ca04bc462c3dfe9->leave($__internal_ade95a2e404cc018fe81020063bf474d35ec7270b7f82e8d6ca04bc462c3dfe9_prof);

        
        $__internal_8dfdbb6797f86306e778e89ab34c3ec867b48e8851a50b650e4746c04e84e566->leave($__internal_8dfdbb6797f86306e778e89ab34c3ec867b48e8851a50b650e4746c04e84e566_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7fb15e69d6cf1d7eddc845573a2781a08ddf39bbd97b6b6a30a8dbc2898d19b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fb15e69d6cf1d7eddc845573a2781a08ddf39bbd97b6b6a30a8dbc2898d19b9->enter($__internal_7fb15e69d6cf1d7eddc845573a2781a08ddf39bbd97b6b6a30a8dbc2898d19b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e88d3c78ed9ca959844bbf3081854e50d062ca9888e8ae6b6bb8697a7ecd00cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e88d3c78ed9ca959844bbf3081854e50d062ca9888e8ae6b6bb8697a7ecd00cb->enter($__internal_e88d3c78ed9ca959844bbf3081854e50d062ca9888e8ae6b6bb8697a7ecd00cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_e88d3c78ed9ca959844bbf3081854e50d062ca9888e8ae6b6bb8697a7ecd00cb->leave($__internal_e88d3c78ed9ca959844bbf3081854e50d062ca9888e8ae6b6bb8697a7ecd00cb_prof);

        
        $__internal_7fb15e69d6cf1d7eddc845573a2781a08ddf39bbd97b6b6a30a8dbc2898d19b9->leave($__internal_7fb15e69d6cf1d7eddc845573a2781a08ddf39bbd97b6b6a30a8dbc2898d19b9_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/Users/hakim/Sites/tunisie-express/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
