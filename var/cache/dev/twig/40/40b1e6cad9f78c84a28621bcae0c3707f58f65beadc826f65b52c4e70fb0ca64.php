<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c4e6ce0b183b62c1944b765fab1ba8683c5b50a3e30f29dedfb385357a712a6a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_bf243844045d133fa898a09e4ecc17effa0a07e6a2eda6574d6067bfa844c554 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf243844045d133fa898a09e4ecc17effa0a07e6a2eda6574d6067bfa844c554->enter($__internal_bf243844045d133fa898a09e4ecc17effa0a07e6a2eda6574d6067bfa844c554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_f597867bf9ad731f506098f3ba5cb57d94c9293301919360a40059bdc7812aca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f597867bf9ad731f506098f3ba5cb57d94c9293301919360a40059bdc7812aca->enter($__internal_f597867bf9ad731f506098f3ba5cb57d94c9293301919360a40059bdc7812aca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf243844045d133fa898a09e4ecc17effa0a07e6a2eda6574d6067bfa844c554->leave($__internal_bf243844045d133fa898a09e4ecc17effa0a07e6a2eda6574d6067bfa844c554_prof);

        
        $__internal_f597867bf9ad731f506098f3ba5cb57d94c9293301919360a40059bdc7812aca->leave($__internal_f597867bf9ad731f506098f3ba5cb57d94c9293301919360a40059bdc7812aca_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_23a43218b307431a47dff9552c6abb62923bf91941709465320db18ea7cf6a52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23a43218b307431a47dff9552c6abb62923bf91941709465320db18ea7cf6a52->enter($__internal_23a43218b307431a47dff9552c6abb62923bf91941709465320db18ea7cf6a52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f94b992dd5845f2568089886b62957acf002587d5ce608a7ca9109cc67d3f913 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f94b992dd5845f2568089886b62957acf002587d5ce608a7ca9109cc67d3f913->enter($__internal_f94b992dd5845f2568089886b62957acf002587d5ce608a7ca9109cc67d3f913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f94b992dd5845f2568089886b62957acf002587d5ce608a7ca9109cc67d3f913->leave($__internal_f94b992dd5845f2568089886b62957acf002587d5ce608a7ca9109cc67d3f913_prof);

        
        $__internal_23a43218b307431a47dff9552c6abb62923bf91941709465320db18ea7cf6a52->leave($__internal_23a43218b307431a47dff9552c6abb62923bf91941709465320db18ea7cf6a52_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ebc0ed2e6bacad869ecf08a29715a5e6a8ae788b03fbdf57093b5378754643ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebc0ed2e6bacad869ecf08a29715a5e6a8ae788b03fbdf57093b5378754643ec->enter($__internal_ebc0ed2e6bacad869ecf08a29715a5e6a8ae788b03fbdf57093b5378754643ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0275fa48121c6b815101d4ba9a93b7c9937ba5ebb545859bb6ba9d2890e02c5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0275fa48121c6b815101d4ba9a93b7c9937ba5ebb545859bb6ba9d2890e02c5e->enter($__internal_0275fa48121c6b815101d4ba9a93b7c9937ba5ebb545859bb6ba9d2890e02c5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0275fa48121c6b815101d4ba9a93b7c9937ba5ebb545859bb6ba9d2890e02c5e->leave($__internal_0275fa48121c6b815101d4ba9a93b7c9937ba5ebb545859bb6ba9d2890e02c5e_prof);

        
        $__internal_ebc0ed2e6bacad869ecf08a29715a5e6a8ae788b03fbdf57093b5378754643ec->leave($__internal_ebc0ed2e6bacad869ecf08a29715a5e6a8ae788b03fbdf57093b5378754643ec_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ac9c5854656812e16fd26ab7530aa0e02d8ed2cec744b6c4199405d353255c62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac9c5854656812e16fd26ab7530aa0e02d8ed2cec744b6c4199405d353255c62->enter($__internal_ac9c5854656812e16fd26ab7530aa0e02d8ed2cec744b6c4199405d353255c62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b0d19de6789b2ca0394dda7be500720ba18eed42cade2c3938b91f94c6ad619c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0d19de6789b2ca0394dda7be500720ba18eed42cade2c3938b91f94c6ad619c->enter($__internal_b0d19de6789b2ca0394dda7be500720ba18eed42cade2c3938b91f94c6ad619c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_b0d19de6789b2ca0394dda7be500720ba18eed42cade2c3938b91f94c6ad619c->leave($__internal_b0d19de6789b2ca0394dda7be500720ba18eed42cade2c3938b91f94c6ad619c_prof);

        
        $__internal_ac9c5854656812e16fd26ab7530aa0e02d8ed2cec744b6c4199405d353255c62->leave($__internal_ac9c5854656812e16fd26ab7530aa0e02d8ed2cec744b6c4199405d353255c62_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\Express-Demo\\Express-Demo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
