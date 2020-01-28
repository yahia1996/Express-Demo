<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_0b1d76635d4a3b4fdc9cfabe56bf7cbcb1c7bc74a73b3f0d3da77497af2325bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_1b5f1c5c269b317acf486b520e96bb7ea77bd6d358c9e8590f78d029fbd1b5ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b5f1c5c269b317acf486b520e96bb7ea77bd6d358c9e8590f78d029fbd1b5ae->enter($__internal_1b5f1c5c269b317acf486b520e96bb7ea77bd6d358c9e8590f78d029fbd1b5ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_3f5a97f983c43daafb4bdad77e5685af7936a44835e0afb2ebb24140eb15f098 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f5a97f983c43daafb4bdad77e5685af7936a44835e0afb2ebb24140eb15f098->enter($__internal_3f5a97f983c43daafb4bdad77e5685af7936a44835e0afb2ebb24140eb15f098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b5f1c5c269b317acf486b520e96bb7ea77bd6d358c9e8590f78d029fbd1b5ae->leave($__internal_1b5f1c5c269b317acf486b520e96bb7ea77bd6d358c9e8590f78d029fbd1b5ae_prof);

        
        $__internal_3f5a97f983c43daafb4bdad77e5685af7936a44835e0afb2ebb24140eb15f098->leave($__internal_3f5a97f983c43daafb4bdad77e5685af7936a44835e0afb2ebb24140eb15f098_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_eba96fabbb0c758a88a9f9b2568bd47dc48058d3cad72468b7c579b171c27fac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eba96fabbb0c758a88a9f9b2568bd47dc48058d3cad72468b7c579b171c27fac->enter($__internal_eba96fabbb0c758a88a9f9b2568bd47dc48058d3cad72468b7c579b171c27fac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_75331e6d5e1462f60c2fe0ec37a69b7bf0772905cb00423e2f21b64d065802dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75331e6d5e1462f60c2fe0ec37a69b7bf0772905cb00423e2f21b64d065802dc->enter($__internal_75331e6d5e1462f60c2fe0ec37a69b7bf0772905cb00423e2f21b64d065802dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_75331e6d5e1462f60c2fe0ec37a69b7bf0772905cb00423e2f21b64d065802dc->leave($__internal_75331e6d5e1462f60c2fe0ec37a69b7bf0772905cb00423e2f21b64d065802dc_prof);

        
        $__internal_eba96fabbb0c758a88a9f9b2568bd47dc48058d3cad72468b7c579b171c27fac->leave($__internal_eba96fabbb0c758a88a9f9b2568bd47dc48058d3cad72468b7c579b171c27fac_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_8ccfc38b25f15404744414f5881ae89d8d74dbb269d38e58b3140c4436f19265 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ccfc38b25f15404744414f5881ae89d8d74dbb269d38e58b3140c4436f19265->enter($__internal_8ccfc38b25f15404744414f5881ae89d8d74dbb269d38e58b3140c4436f19265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bcc0bc5b3cb793696edcf3d0b3ab7ced57988f3f3d4f25a3d1900dcece211db2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcc0bc5b3cb793696edcf3d0b3ab7ced57988f3f3d4f25a3d1900dcece211db2->enter($__internal_bcc0bc5b3cb793696edcf3d0b3ab7ced57988f3f3d4f25a3d1900dcece211db2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_bcc0bc5b3cb793696edcf3d0b3ab7ced57988f3f3d4f25a3d1900dcece211db2->leave($__internal_bcc0bc5b3cb793696edcf3d0b3ab7ced57988f3f3d4f25a3d1900dcece211db2_prof);

        
        $__internal_8ccfc38b25f15404744414f5881ae89d8d74dbb269d38e58b3140c4436f19265->leave($__internal_8ccfc38b25f15404744414f5881ae89d8d74dbb269d38e58b3140c4436f19265_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_0c7c2b677bbb8f632ac8f8ced1c591e369998345eb8e39b2e7a1f2609add6fc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c7c2b677bbb8f632ac8f8ced1c591e369998345eb8e39b2e7a1f2609add6fc2->enter($__internal_0c7c2b677bbb8f632ac8f8ced1c591e369998345eb8e39b2e7a1f2609add6fc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3bb406b4fe52df83447b30691b24a4e7387b20d1a23756412c60920af303fa04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bb406b4fe52df83447b30691b24a4e7387b20d1a23756412c60920af303fa04->enter($__internal_3bb406b4fe52df83447b30691b24a4e7387b20d1a23756412c60920af303fa04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_3bb406b4fe52df83447b30691b24a4e7387b20d1a23756412c60920af303fa04->leave($__internal_3bb406b4fe52df83447b30691b24a4e7387b20d1a23756412c60920af303fa04_prof);

        
        $__internal_0c7c2b677bbb8f632ac8f8ced1c591e369998345eb8e39b2e7a1f2609add6fc2->leave($__internal_0c7c2b677bbb8f632ac8f8ced1c591e369998345eb8e39b2e7a1f2609add6fc2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\Express-Demo\\Express-Demo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
