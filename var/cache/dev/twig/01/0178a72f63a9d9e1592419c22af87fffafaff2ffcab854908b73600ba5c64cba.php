<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_7a680ee82bf589b563e86fd1a0191c83fadfb700ff0de184692f045a4818c6db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
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
        $__internal_48189611838af9a1f1f2768e90eaf3fb388a74e0ddc0d972ae4ceb273fa78459 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48189611838af9a1f1f2768e90eaf3fb388a74e0ddc0d972ae4ceb273fa78459->enter($__internal_48189611838af9a1f1f2768e90eaf3fb388a74e0ddc0d972ae4ceb273fa78459_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_c79298401662f87f7bdcb4512a17950bb3a10a78f3a2c07488084a1099e8a987 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c79298401662f87f7bdcb4512a17950bb3a10a78f3a2c07488084a1099e8a987->enter($__internal_c79298401662f87f7bdcb4512a17950bb3a10a78f3a2c07488084a1099e8a987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48189611838af9a1f1f2768e90eaf3fb388a74e0ddc0d972ae4ceb273fa78459->leave($__internal_48189611838af9a1f1f2768e90eaf3fb388a74e0ddc0d972ae4ceb273fa78459_prof);

        
        $__internal_c79298401662f87f7bdcb4512a17950bb3a10a78f3a2c07488084a1099e8a987->leave($__internal_c79298401662f87f7bdcb4512a17950bb3a10a78f3a2c07488084a1099e8a987_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_60df0399e0554c6dcbbcbad0eef2ec90c1357ce4812618be6b884929e2441576 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60df0399e0554c6dcbbcbad0eef2ec90c1357ce4812618be6b884929e2441576->enter($__internal_60df0399e0554c6dcbbcbad0eef2ec90c1357ce4812618be6b884929e2441576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6627198316058b3d71b7fa19922bf176d137864823c70867024aee5941ae8233 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6627198316058b3d71b7fa19922bf176d137864823c70867024aee5941ae8233->enter($__internal_6627198316058b3d71b7fa19922bf176d137864823c70867024aee5941ae8233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_6627198316058b3d71b7fa19922bf176d137864823c70867024aee5941ae8233->leave($__internal_6627198316058b3d71b7fa19922bf176d137864823c70867024aee5941ae8233_prof);

        
        $__internal_60df0399e0554c6dcbbcbad0eef2ec90c1357ce4812618be6b884929e2441576->leave($__internal_60df0399e0554c6dcbbcbad0eef2ec90c1357ce4812618be6b884929e2441576_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b3793fd8de4e9ad25c7ae2b2f1e7bdb1ef7dfbc0026c2a2d1a2763192a0aadc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3793fd8de4e9ad25c7ae2b2f1e7bdb1ef7dfbc0026c2a2d1a2763192a0aadc5->enter($__internal_b3793fd8de4e9ad25c7ae2b2f1e7bdb1ef7dfbc0026c2a2d1a2763192a0aadc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_baa799e92dbcbd92cc7cdaf1a3f08ff196a1236b1faaa4f34485e8ffc0a44294 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baa799e92dbcbd92cc7cdaf1a3f08ff196a1236b1faaa4f34485e8ffc0a44294->enter($__internal_baa799e92dbcbd92cc7cdaf1a3f08ff196a1236b1faaa4f34485e8ffc0a44294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_baa799e92dbcbd92cc7cdaf1a3f08ff196a1236b1faaa4f34485e8ffc0a44294->leave($__internal_baa799e92dbcbd92cc7cdaf1a3f08ff196a1236b1faaa4f34485e8ffc0a44294_prof);

        
        $__internal_b3793fd8de4e9ad25c7ae2b2f1e7bdb1ef7dfbc0026c2a2d1a2763192a0aadc5->leave($__internal_b3793fd8de4e9ad25c7ae2b2f1e7bdb1ef7dfbc0026c2a2d1a2763192a0aadc5_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_272bdee366e18679f0e2659ef0b056b8dac22a2657de607e01c54842648dc542 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_272bdee366e18679f0e2659ef0b056b8dac22a2657de607e01c54842648dc542->enter($__internal_272bdee366e18679f0e2659ef0b056b8dac22a2657de607e01c54842648dc542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f084085e17b374d990aee8ae7ad3ffa9f80193cdc559f126e3bed60cc0c27cae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f084085e17b374d990aee8ae7ad3ffa9f80193cdc559f126e3bed60cc0c27cae->enter($__internal_f084085e17b374d990aee8ae7ad3ffa9f80193cdc559f126e3bed60cc0c27cae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_f084085e17b374d990aee8ae7ad3ffa9f80193cdc559f126e3bed60cc0c27cae->leave($__internal_f084085e17b374d990aee8ae7ad3ffa9f80193cdc559f126e3bed60cc0c27cae_prof);

        
        $__internal_272bdee366e18679f0e2659ef0b056b8dac22a2657de607e01c54842648dc542->leave($__internal_272bdee366e18679f0e2659ef0b056b8dac22a2657de607e01c54842648dc542_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
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
", "WebProfilerBundle:Collector:exception.html.twig", "/Users/hakim/Sites/tunisie-express/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
