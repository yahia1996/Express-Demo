<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_b554dfc500ce1a0d273d6afa12314cee5800b68c5d5009dce8d77e614412c6cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6d1e25bc70822975d9cb2955ef2b645a6be803c9f5a28782c78c6a2757b409b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d1e25bc70822975d9cb2955ef2b645a6be803c9f5a28782c78c6a2757b409b5->enter($__internal_6d1e25bc70822975d9cb2955ef2b645a6be803c9f5a28782c78c6a2757b409b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_91c27419a241138bb78f7ddb906ffb93d81fcc467c580d1fca69915a506b6e5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91c27419a241138bb78f7ddb906ffb93d81fcc467c580d1fca69915a506b6e5c->enter($__internal_91c27419a241138bb78f7ddb906ffb93d81fcc467c580d1fca69915a506b6e5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d1e25bc70822975d9cb2955ef2b645a6be803c9f5a28782c78c6a2757b409b5->leave($__internal_6d1e25bc70822975d9cb2955ef2b645a6be803c9f5a28782c78c6a2757b409b5_prof);

        
        $__internal_91c27419a241138bb78f7ddb906ffb93d81fcc467c580d1fca69915a506b6e5c->leave($__internal_91c27419a241138bb78f7ddb906ffb93d81fcc467c580d1fca69915a506b6e5c_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_504d2ca1b7fc75a288307e4947079852de38fe67babfeafe4ec548ad7ac3d0a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_504d2ca1b7fc75a288307e4947079852de38fe67babfeafe4ec548ad7ac3d0a8->enter($__internal_504d2ca1b7fc75a288307e4947079852de38fe67babfeafe4ec548ad7ac3d0a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2d569a93cbac55302c8be5647549a1ad3f788888fceb9baf0f4ff9dd19427b4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d569a93cbac55302c8be5647549a1ad3f788888fceb9baf0f4ff9dd19427b4c->enter($__internal_2d569a93cbac55302c8be5647549a1ad3f788888fceb9baf0f4ff9dd19427b4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) || array_key_exists("tokenLifetime", $context) ? $context["tokenLifetime"] : (function () { throw new Twig_Error_Runtime('Variable "tokenLifetime" does not exist.', 7, $this->getSourceContext()); })())), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_2d569a93cbac55302c8be5647549a1ad3f788888fceb9baf0f4ff9dd19427b4c->leave($__internal_2d569a93cbac55302c8be5647549a1ad3f788888fceb9baf0f4ff9dd19427b4c_prof);

        
        $__internal_504d2ca1b7fc75a288307e4947079852de38fe67babfeafe4ec548ad7ac3d0a8->leave($__internal_504d2ca1b7fc75a288307e4947079852de38fe67babfeafe4ec548ad7ac3d0a8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "/Users/hakim/Sites/tunisie-express/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/check_email.html.twig");
    }
}
