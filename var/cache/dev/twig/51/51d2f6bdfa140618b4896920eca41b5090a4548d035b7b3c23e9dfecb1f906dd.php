<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_0c95bd5a6a08d1db16709f06825b09e747fb619a572c5da4306c924fea1ca8af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_999b91afbf4feca2b7beaae8d9490f0eac38be3b5eba88783810bfd238a32558 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_999b91afbf4feca2b7beaae8d9490f0eac38be3b5eba88783810bfd238a32558->enter($__internal_999b91afbf4feca2b7beaae8d9490f0eac38be3b5eba88783810bfd238a32558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_8ff86c9542243f925ba2dddcc9123172d27d8e4562b471316f5122a83d8df37a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ff86c9542243f925ba2dddcc9123172d27d8e4562b471316f5122a83d8df37a->enter($__internal_8ff86c9542243f925ba2dddcc9123172d27d8e4562b471316f5122a83d8df37a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_999b91afbf4feca2b7beaae8d9490f0eac38be3b5eba88783810bfd238a32558->leave($__internal_999b91afbf4feca2b7beaae8d9490f0eac38be3b5eba88783810bfd238a32558_prof);

        
        $__internal_8ff86c9542243f925ba2dddcc9123172d27d8e4562b471316f5122a83d8df37a->leave($__internal_8ff86c9542243f925ba2dddcc9123172d27d8e4562b471316f5122a83d8df37a_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_6e9451eeaad27fd388b0d9a7f9fd246ccd62e9660f99d96c87c6490400aa5ed4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e9451eeaad27fd388b0d9a7f9fd246ccd62e9660f99d96c87c6490400aa5ed4->enter($__internal_6e9451eeaad27fd388b0d9a7f9fd246ccd62e9660f99d96c87c6490400aa5ed4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_29fc009cdd88f0ced363067aecc01d9d92af07edf29579c10235e9971df9037b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29fc009cdd88f0ced363067aecc01d9d92af07edf29579c10235e9971df9037b->enter($__internal_29fc009cdd88f0ced363067aecc01d9d92af07edf29579c10235e9971df9037b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 12, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 12, $this->getSourceContext()); })()), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 14, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 14, $this->getSourceContext()); })()), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_29fc009cdd88f0ced363067aecc01d9d92af07edf29579c10235e9971df9037b->leave($__internal_29fc009cdd88f0ced363067aecc01d9d92af07edf29579c10235e9971df9037b_prof);

        
        $__internal_6e9451eeaad27fd388b0d9a7f9fd246ccd62e9660f99d96c87c6490400aa5ed4->leave($__internal_6e9451eeaad27fd388b0d9a7f9fd246ccd62e9660f99d96c87c6490400aa5ed4_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_40dd6f3f5377489183245dff473e16b8342b0a3d171f44213179a8222eba7957 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40dd6f3f5377489183245dff473e16b8342b0a3d171f44213179a8222eba7957->enter($__internal_40dd6f3f5377489183245dff473e16b8342b0a3d171f44213179a8222eba7957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_267bc5b844709295fd504b8a259fdc083e63efa5ff4b63aace7e823cb2860c21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_267bc5b844709295fd504b8a259fdc083e63efa5ff4b63aace7e823cb2860c21->enter($__internal_267bc5b844709295fd504b8a259fdc083e63efa5ff4b63aace7e823cb2860c21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_267bc5b844709295fd504b8a259fdc083e63efa5ff4b63aace7e823cb2860c21->leave($__internal_267bc5b844709295fd504b8a259fdc083e63efa5ff4b63aace7e823cb2860c21_prof);

        
        $__internal_40dd6f3f5377489183245dff473e16b8342b0a3d171f44213179a8222eba7957->leave($__internal_40dd6f3f5377489183245dff473e16b8342b0a3d171f44213179a8222eba7957_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/Users/hakim/Sites/tunisie-express/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
