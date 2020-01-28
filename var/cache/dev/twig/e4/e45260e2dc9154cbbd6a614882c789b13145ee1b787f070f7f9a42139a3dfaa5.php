<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_d3266f2aa23b5d23cc31cc1dca0506f675c0d7c798ad3a808b1cf277fbf5a587 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bbe7ca8b6f49dba6f60c919d94ca4194d660eb0adcd1508821732cc8122ead34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbe7ca8b6f49dba6f60c919d94ca4194d660eb0adcd1508821732cc8122ead34->enter($__internal_bbe7ca8b6f49dba6f60c919d94ca4194d660eb0adcd1508821732cc8122ead34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_0d56879f061f5246e268b0a4661b00f4d5b4a79cddd412fe2f24791c4aa31279 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d56879f061f5246e268b0a4661b00f4d5b4a79cddd412fe2f24791c4aa31279->enter($__internal_0d56879f061f5246e268b0a4661b00f4d5b4a79cddd412fe2f24791c4aa31279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bbe7ca8b6f49dba6f60c919d94ca4194d660eb0adcd1508821732cc8122ead34->leave($__internal_bbe7ca8b6f49dba6f60c919d94ca4194d660eb0adcd1508821732cc8122ead34_prof);

        
        $__internal_0d56879f061f5246e268b0a4661b00f4d5b4a79cddd412fe2f24791c4aa31279->leave($__internal_0d56879f061f5246e268b0a4661b00f4d5b4a79cddd412fe2f24791c4aa31279_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_12c9da93673c6473b8c74a9f4fe53a8e0a6b6749a2034139a844c7d52b944d1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12c9da93673c6473b8c74a9f4fe53a8e0a6b6749a2034139a844c7d52b944d1a->enter($__internal_12c9da93673c6473b8c74a9f4fe53a8e0a6b6749a2034139a844c7d52b944d1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_70aa6cf170915a72ef1f1d5517587f962ea4da6f909a6f2091db68a427de2904 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70aa6cf170915a72ef1f1d5517587f962ea4da6f909a6f2091db68a427de2904->enter($__internal_70aa6cf170915a72ef1f1d5517587f962ea4da6f909a6f2091db68a427de2904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_70aa6cf170915a72ef1f1d5517587f962ea4da6f909a6f2091db68a427de2904->leave($__internal_70aa6cf170915a72ef1f1d5517587f962ea4da6f909a6f2091db68a427de2904_prof);

        
        $__internal_12c9da93673c6473b8c74a9f4fe53a8e0a6b6749a2034139a844c7d52b944d1a->leave($__internal_12c9da93673c6473b8c74a9f4fe53a8e0a6b6749a2034139a844c7d52b944d1a_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_3afafd0c9f130bf5af210248b3ba2370fcdac759ab04892c259f2e0367b82721 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3afafd0c9f130bf5af210248b3ba2370fcdac759ab04892c259f2e0367b82721->enter($__internal_3afafd0c9f130bf5af210248b3ba2370fcdac759ab04892c259f2e0367b82721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dce0a7c886f9afdc19f39ec79a73aa49fadfdb8206f8c2541c6d6b90235a64ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dce0a7c886f9afdc19f39ec79a73aa49fadfdb8206f8c2541c6d6b90235a64ac->enter($__internal_dce0a7c886f9afdc19f39ec79a73aa49fadfdb8206f8c2541c6d6b90235a64ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new Twig_Error_Runtime('Variable "file" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new Twig_Error_Runtime('Variable "filename" does not exist.', 15, $this->getSourceContext()); })()), (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 15, $this->getSourceContext()); })()),  -1);
        echo "
</div>
";
        
        $__internal_dce0a7c886f9afdc19f39ec79a73aa49fadfdb8206f8c2541c6d6b90235a64ac->leave($__internal_dce0a7c886f9afdc19f39ec79a73aa49fadfdb8206f8c2541c6d6b90235a64ac_prof);

        
        $__internal_3afafd0c9f130bf5af210248b3ba2370fcdac759ab04892c259f2e0367b82721->leave($__internal_3afafd0c9f130bf5af210248b3ba2370fcdac759ab04892c259f2e0367b82721_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/Users/hakim/Sites/tunisie-express/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
