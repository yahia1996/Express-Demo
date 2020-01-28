<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_5b9e3772d36fce644453e6658e89416d89fe489bfa9329407271f0c9420a55e0 extends Twig_Template
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
        $__internal_a553fb21d62fab50beed4e22589864144c2d7b155b657d422eebb11f78134a7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a553fb21d62fab50beed4e22589864144c2d7b155b657d422eebb11f78134a7c->enter($__internal_a553fb21d62fab50beed4e22589864144c2d7b155b657d422eebb11f78134a7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_a6a28ff01fb992877ab5ba5fafc01cb89382031753a6ff8c434b2c5ab1a5e619 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6a28ff01fb992877ab5ba5fafc01cb89382031753a6ff8c434b2c5ab1a5e619->enter($__internal_a6a28ff01fb992877ab5ba5fafc01cb89382031753a6ff8c434b2c5ab1a5e619_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a553fb21d62fab50beed4e22589864144c2d7b155b657d422eebb11f78134a7c->leave($__internal_a553fb21d62fab50beed4e22589864144c2d7b155b657d422eebb11f78134a7c_prof);

        
        $__internal_a6a28ff01fb992877ab5ba5fafc01cb89382031753a6ff8c434b2c5ab1a5e619->leave($__internal_a6a28ff01fb992877ab5ba5fafc01cb89382031753a6ff8c434b2c5ab1a5e619_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_645a2b52810a8d6fd1aa9ae3c3f6ac0df9ac7382588456cb4f21cdc6d14bdb35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_645a2b52810a8d6fd1aa9ae3c3f6ac0df9ac7382588456cb4f21cdc6d14bdb35->enter($__internal_645a2b52810a8d6fd1aa9ae3c3f6ac0df9ac7382588456cb4f21cdc6d14bdb35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c62a1b3b935b03095bfd617bfbd34ddcf2b908c0b04ceb56dde8358126481ba1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c62a1b3b935b03095bfd617bfbd34ddcf2b908c0b04ceb56dde8358126481ba1->enter($__internal_c62a1b3b935b03095bfd617bfbd34ddcf2b908c0b04ceb56dde8358126481ba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_c62a1b3b935b03095bfd617bfbd34ddcf2b908c0b04ceb56dde8358126481ba1->leave($__internal_c62a1b3b935b03095bfd617bfbd34ddcf2b908c0b04ceb56dde8358126481ba1_prof);

        
        $__internal_645a2b52810a8d6fd1aa9ae3c3f6ac0df9ac7382588456cb4f21cdc6d14bdb35->leave($__internal_645a2b52810a8d6fd1aa9ae3c3f6ac0df9ac7382588456cb4f21cdc6d14bdb35_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b0ad0a63867eb0de19066638ca8f10a227d58e66599fbb5c908b2d3b1bf71808 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0ad0a63867eb0de19066638ca8f10a227d58e66599fbb5c908b2d3b1bf71808->enter($__internal_b0ad0a63867eb0de19066638ca8f10a227d58e66599fbb5c908b2d3b1bf71808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0f98f530b7530cd7cf88db4250c4907e389760b55700fe1a1232a93ee575f7c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f98f530b7530cd7cf88db4250c4907e389760b55700fe1a1232a93ee575f7c1->enter($__internal_0f98f530b7530cd7cf88db4250c4907e389760b55700fe1a1232a93ee575f7c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_0f98f530b7530cd7cf88db4250c4907e389760b55700fe1a1232a93ee575f7c1->leave($__internal_0f98f530b7530cd7cf88db4250c4907e389760b55700fe1a1232a93ee575f7c1_prof);

        
        $__internal_b0ad0a63867eb0de19066638ca8f10a227d58e66599fbb5c908b2d3b1bf71808->leave($__internal_b0ad0a63867eb0de19066638ca8f10a227d58e66599fbb5c908b2d3b1bf71808_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_217bea743f31281342a207118afd99db74d3cdb12aba8e732a7149e664a62528 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_217bea743f31281342a207118afd99db74d3cdb12aba8e732a7149e664a62528->enter($__internal_217bea743f31281342a207118afd99db74d3cdb12aba8e732a7149e664a62528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_831ca4bb5b560e1f28c3dd72a0df64b42b86387b8d74a78c4fc5173059ee9b6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_831ca4bb5b560e1f28c3dd72a0df64b42b86387b8d74a78c4fc5173059ee9b6c->enter($__internal_831ca4bb5b560e1f28c3dd72a0df64b42b86387b8d74a78c4fc5173059ee9b6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_831ca4bb5b560e1f28c3dd72a0df64b42b86387b8d74a78c4fc5173059ee9b6c->leave($__internal_831ca4bb5b560e1f28c3dd72a0df64b42b86387b8d74a78c4fc5173059ee9b6c_prof);

        
        $__internal_217bea743f31281342a207118afd99db74d3cdb12aba8e732a7149e664a62528->leave($__internal_217bea743f31281342a207118afd99db74d3cdb12aba8e732a7149e664a62528_prof);

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
