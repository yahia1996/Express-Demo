<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_965b92dfbcfa8f73e2adb07ea867aabcc2ab4328b35d033d1156b7148c7d9ad5 extends Twig_Template
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
        $__internal_54d9a2d32cd6700dda6f4cd29b5af0f72aa0c1bf7ef4fe908e64dea790ec279d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54d9a2d32cd6700dda6f4cd29b5af0f72aa0c1bf7ef4fe908e64dea790ec279d->enter($__internal_54d9a2d32cd6700dda6f4cd29b5af0f72aa0c1bf7ef4fe908e64dea790ec279d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_e65a2111c192e8cb205a364a4ff9f21408d55b9726e959fb87b838c953c99cb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e65a2111c192e8cb205a364a4ff9f21408d55b9726e959fb87b838c953c99cb0->enter($__internal_e65a2111c192e8cb205a364a4ff9f21408d55b9726e959fb87b838c953c99cb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54d9a2d32cd6700dda6f4cd29b5af0f72aa0c1bf7ef4fe908e64dea790ec279d->leave($__internal_54d9a2d32cd6700dda6f4cd29b5af0f72aa0c1bf7ef4fe908e64dea790ec279d_prof);

        
        $__internal_e65a2111c192e8cb205a364a4ff9f21408d55b9726e959fb87b838c953c99cb0->leave($__internal_e65a2111c192e8cb205a364a4ff9f21408d55b9726e959fb87b838c953c99cb0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4304716a1abd1c40e5a27c82ac1ff6d1bad4a2e0803e10b553e7ac1ab43496f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4304716a1abd1c40e5a27c82ac1ff6d1bad4a2e0803e10b553e7ac1ab43496f0->enter($__internal_4304716a1abd1c40e5a27c82ac1ff6d1bad4a2e0803e10b553e7ac1ab43496f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_9bb1159fa8168bec3bbe14cd5fd80dd001d742e3d2f2504a6dee1b23a5d9864d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bb1159fa8168bec3bbe14cd5fd80dd001d742e3d2f2504a6dee1b23a5d9864d->enter($__internal_9bb1159fa8168bec3bbe14cd5fd80dd001d742e3d2f2504a6dee1b23a5d9864d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9bb1159fa8168bec3bbe14cd5fd80dd001d742e3d2f2504a6dee1b23a5d9864d->leave($__internal_9bb1159fa8168bec3bbe14cd5fd80dd001d742e3d2f2504a6dee1b23a5d9864d_prof);

        
        $__internal_4304716a1abd1c40e5a27c82ac1ff6d1bad4a2e0803e10b553e7ac1ab43496f0->leave($__internal_4304716a1abd1c40e5a27c82ac1ff6d1bad4a2e0803e10b553e7ac1ab43496f0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_98f71f6e34d47d47117e377741427ea26364eabb202d7b9e7212362cf93dbb33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98f71f6e34d47d47117e377741427ea26364eabb202d7b9e7212362cf93dbb33->enter($__internal_98f71f6e34d47d47117e377741427ea26364eabb202d7b9e7212362cf93dbb33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_96bc710836b77271f3b9af018c6d52737d31ac9d97f3ceabd538caea6f86a6eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96bc710836b77271f3b9af018c6d52737d31ac9d97f3ceabd538caea6f86a6eb->enter($__internal_96bc710836b77271f3b9af018c6d52737d31ac9d97f3ceabd538caea6f86a6eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_96bc710836b77271f3b9af018c6d52737d31ac9d97f3ceabd538caea6f86a6eb->leave($__internal_96bc710836b77271f3b9af018c6d52737d31ac9d97f3ceabd538caea6f86a6eb_prof);

        
        $__internal_98f71f6e34d47d47117e377741427ea26364eabb202d7b9e7212362cf93dbb33->leave($__internal_98f71f6e34d47d47117e377741427ea26364eabb202d7b9e7212362cf93dbb33_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9198658af79739867db93d507113a2142af90bce43d079412935aeea21fbcf8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9198658af79739867db93d507113a2142af90bce43d079412935aeea21fbcf8e->enter($__internal_9198658af79739867db93d507113a2142af90bce43d079412935aeea21fbcf8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_78333474ecc6f27f7bcefdedab3f78196eeef4ad049064a026f833ff3a7ecb8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78333474ecc6f27f7bcefdedab3f78196eeef4ad049064a026f833ff3a7ecb8d->enter($__internal_78333474ecc6f27f7bcefdedab3f78196eeef4ad049064a026f833ff3a7ecb8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_78333474ecc6f27f7bcefdedab3f78196eeef4ad049064a026f833ff3a7ecb8d->leave($__internal_78333474ecc6f27f7bcefdedab3f78196eeef4ad049064a026f833ff3a7ecb8d_prof);

        
        $__internal_9198658af79739867db93d507113a2142af90bce43d079412935aeea21fbcf8e->leave($__internal_9198658af79739867db93d507113a2142af90bce43d079412935aeea21fbcf8e_prof);

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
