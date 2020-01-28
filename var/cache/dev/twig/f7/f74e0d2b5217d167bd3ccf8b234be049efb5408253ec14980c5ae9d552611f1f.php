<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_a3c25c24ecec6ba54f8c4beb6953d43e6a1b9719172a8b465dae69b4594dea08 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a454efaa93440d1418052c9c9ef809f4a1191aa2b0b9e4ba5d17e9f6a0120a4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a454efaa93440d1418052c9c9ef809f4a1191aa2b0b9e4ba5d17e9f6a0120a4a->enter($__internal_a454efaa93440d1418052c9c9ef809f4a1191aa2b0b9e4ba5d17e9f6a0120a4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_77bace41b9639ca8ff6cc8b3e96ef593edef533deae337bd3778fd72bad9ceb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77bace41b9639ca8ff6cc8b3e96ef593edef533deae337bd3778fd72bad9ceb1->enter($__internal_77bace41b9639ca8ff6cc8b3e96ef593edef533deae337bd3778fd72bad9ceb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a454efaa93440d1418052c9c9ef809f4a1191aa2b0b9e4ba5d17e9f6a0120a4a->leave($__internal_a454efaa93440d1418052c9c9ef809f4a1191aa2b0b9e4ba5d17e9f6a0120a4a_prof);

        
        $__internal_77bace41b9639ca8ff6cc8b3e96ef593edef533deae337bd3778fd72bad9ceb1->leave($__internal_77bace41b9639ca8ff6cc8b3e96ef593edef533deae337bd3778fd72bad9ceb1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_dcacef1d4b4aa24c79d26a34660594e46af675f081685deeb45d5f0ca08aee48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcacef1d4b4aa24c79d26a34660594e46af675f081685deeb45d5f0ca08aee48->enter($__internal_dcacef1d4b4aa24c79d26a34660594e46af675f081685deeb45d5f0ca08aee48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_995a555b02413127bd1bb09249b9e3f976af24f8da911bd2148076bdf709cccd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_995a555b02413127bd1bb09249b9e3f976af24f8da911bd2148076bdf709cccd->enter($__internal_995a555b02413127bd1bb09249b9e3f976af24f8da911bd2148076bdf709cccd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_995a555b02413127bd1bb09249b9e3f976af24f8da911bd2148076bdf709cccd->leave($__internal_995a555b02413127bd1bb09249b9e3f976af24f8da911bd2148076bdf709cccd_prof);

        
        $__internal_dcacef1d4b4aa24c79d26a34660594e46af675f081685deeb45d5f0ca08aee48->leave($__internal_dcacef1d4b4aa24c79d26a34660594e46af675f081685deeb45d5f0ca08aee48_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b858adcc4a082e97e2b4ea52e786f16244746687c527ff2c3ec54f7634dbf05b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b858adcc4a082e97e2b4ea52e786f16244746687c527ff2c3ec54f7634dbf05b->enter($__internal_b858adcc4a082e97e2b4ea52e786f16244746687c527ff2c3ec54f7634dbf05b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6068a30aa43be4cecbb38b8c19a90bca83566cd016252164d1c123245cb7279a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6068a30aa43be4cecbb38b8c19a90bca83566cd016252164d1c123245cb7279a->enter($__internal_6068a30aa43be4cecbb38b8c19a90bca83566cd016252164d1c123245cb7279a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_6068a30aa43be4cecbb38b8c19a90bca83566cd016252164d1c123245cb7279a->leave($__internal_6068a30aa43be4cecbb38b8c19a90bca83566cd016252164d1c123245cb7279a_prof);

        
        $__internal_b858adcc4a082e97e2b4ea52e786f16244746687c527ff2c3ec54f7634dbf05b->leave($__internal_b858adcc4a082e97e2b4ea52e786f16244746687c527ff2c3ec54f7634dbf05b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/Users/hakim/Sites/tunisie-express/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
