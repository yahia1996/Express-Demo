<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_406952b8188cb00fc796336e44027f8052a7204909559447b8f8f1f0690f8e5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_02efb90b517a0fd338b2806d82cfd7e5055d3e0b4708727de79e5304b176061d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02efb90b517a0fd338b2806d82cfd7e5055d3e0b4708727de79e5304b176061d->enter($__internal_02efb90b517a0fd338b2806d82cfd7e5055d3e0b4708727de79e5304b176061d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_3cba529a4330c222d2db1b9f8b4234e8461648e7d27b59b30cc583818e6763c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cba529a4330c222d2db1b9f8b4234e8461648e7d27b59b30cc583818e6763c6->enter($__internal_3cba529a4330c222d2db1b9f8b4234e8461648e7d27b59b30cc583818e6763c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02efb90b517a0fd338b2806d82cfd7e5055d3e0b4708727de79e5304b176061d->leave($__internal_02efb90b517a0fd338b2806d82cfd7e5055d3e0b4708727de79e5304b176061d_prof);

        
        $__internal_3cba529a4330c222d2db1b9f8b4234e8461648e7d27b59b30cc583818e6763c6->leave($__internal_3cba529a4330c222d2db1b9f8b4234e8461648e7d27b59b30cc583818e6763c6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a3a6002299b07e561e34bdf7c5f192b61aa0ffbefbe54628f7e35c6ac1830c1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3a6002299b07e561e34bdf7c5f192b61aa0ffbefbe54628f7e35c6ac1830c1b->enter($__internal_a3a6002299b07e561e34bdf7c5f192b61aa0ffbefbe54628f7e35c6ac1830c1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_40c124e17e53a85595ec7ebd563e89006f36cfc5f7a3ecd74471c6b2d3ab5b4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40c124e17e53a85595ec7ebd563e89006f36cfc5f7a3ecd74471c6b2d3ab5b4e->enter($__internal_40c124e17e53a85595ec7ebd563e89006f36cfc5f7a3ecd74471c6b2d3ab5b4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_40c124e17e53a85595ec7ebd563e89006f36cfc5f7a3ecd74471c6b2d3ab5b4e->leave($__internal_40c124e17e53a85595ec7ebd563e89006f36cfc5f7a3ecd74471c6b2d3ab5b4e_prof);

        
        $__internal_a3a6002299b07e561e34bdf7c5f192b61aa0ffbefbe54628f7e35c6ac1830c1b->leave($__internal_a3a6002299b07e561e34bdf7c5f192b61aa0ffbefbe54628f7e35c6ac1830c1b_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3b3d24cbeda9bcb01e9d61d00c6d5124b6bd41c15de2db7db08e36521c3a43d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b3d24cbeda9bcb01e9d61d00c6d5124b6bd41c15de2db7db08e36521c3a43d4->enter($__internal_3b3d24cbeda9bcb01e9d61d00c6d5124b6bd41c15de2db7db08e36521c3a43d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a30d80bfa946ca7bd93a7920cf9e02f26a20bf89dae3f0b40921e3f28a722049 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a30d80bfa946ca7bd93a7920cf9e02f26a20bf89dae3f0b40921e3f28a722049->enter($__internal_a30d80bfa946ca7bd93a7920cf9e02f26a20bf89dae3f0b40921e3f28a722049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_a30d80bfa946ca7bd93a7920cf9e02f26a20bf89dae3f0b40921e3f28a722049->leave($__internal_a30d80bfa946ca7bd93a7920cf9e02f26a20bf89dae3f0b40921e3f28a722049_prof);

        
        $__internal_3b3d24cbeda9bcb01e9d61d00c6d5124b6bd41c15de2db7db08e36521c3a43d4->leave($__internal_3b3d24cbeda9bcb01e9d61d00c6d5124b6bd41c15de2db7db08e36521c3a43d4_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_aff6532169d5d774ada07a42624f052cac5c9113e31f9e5afe24517dff32886e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aff6532169d5d774ada07a42624f052cac5c9113e31f9e5afe24517dff32886e->enter($__internal_aff6532169d5d774ada07a42624f052cac5c9113e31f9e5afe24517dff32886e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4802f0a350a4af44e93d528f04bfd1dfa81da14a8c415a811a31d032fb25a64e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4802f0a350a4af44e93d528f04bfd1dfa81da14a8c415a811a31d032fb25a64e->enter($__internal_4802f0a350a4af44e93d528f04bfd1dfa81da14a8c415a811a31d032fb25a64e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_4802f0a350a4af44e93d528f04bfd1dfa81da14a8c415a811a31d032fb25a64e->leave($__internal_4802f0a350a4af44e93d528f04bfd1dfa81da14a8c415a811a31d032fb25a64e_prof);

        
        $__internal_aff6532169d5d774ada07a42624f052cac5c9113e31f9e5afe24517dff32886e->leave($__internal_aff6532169d5d774ada07a42624f052cac5c9113e31f9e5afe24517dff32886e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\Express-Demo\\Express-Demo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
