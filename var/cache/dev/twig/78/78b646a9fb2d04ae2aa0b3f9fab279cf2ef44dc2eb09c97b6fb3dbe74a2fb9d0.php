<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_18ddf397409f2ae246ce8d31b77576526bf922fc9e3cf2ff8b3ba612941b6c50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_330fe72f986d92387127473906306a43941eaf09aa84dbe2401b30303677efb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_330fe72f986d92387127473906306a43941eaf09aa84dbe2401b30303677efb1->enter($__internal_330fe72f986d92387127473906306a43941eaf09aa84dbe2401b30303677efb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_93d908a47bf79cbeafb4d43aa5c51712a91c8b8661b9abce713334861cada89c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93d908a47bf79cbeafb4d43aa5c51712a91c8b8661b9abce713334861cada89c->enter($__internal_93d908a47bf79cbeafb4d43aa5c51712a91c8b8661b9abce713334861cada89c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_330fe72f986d92387127473906306a43941eaf09aa84dbe2401b30303677efb1->leave($__internal_330fe72f986d92387127473906306a43941eaf09aa84dbe2401b30303677efb1_prof);

        
        $__internal_93d908a47bf79cbeafb4d43aa5c51712a91c8b8661b9abce713334861cada89c->leave($__internal_93d908a47bf79cbeafb4d43aa5c51712a91c8b8661b9abce713334861cada89c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8f4dfb1087cdadc1a9c4791f9d62ef11d99ca5b978e82080a7834bf8c663e44d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f4dfb1087cdadc1a9c4791f9d62ef11d99ca5b978e82080a7834bf8c663e44d->enter($__internal_8f4dfb1087cdadc1a9c4791f9d62ef11d99ca5b978e82080a7834bf8c663e44d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8e67d11a2f4fcd01bed9ad754ebdd00b2074906d293c577e721952858006671e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e67d11a2f4fcd01bed9ad754ebdd00b2074906d293c577e721952858006671e->enter($__internal_8e67d11a2f4fcd01bed9ad754ebdd00b2074906d293c577e721952858006671e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_8e67d11a2f4fcd01bed9ad754ebdd00b2074906d293c577e721952858006671e->leave($__internal_8e67d11a2f4fcd01bed9ad754ebdd00b2074906d293c577e721952858006671e_prof);

        
        $__internal_8f4dfb1087cdadc1a9c4791f9d62ef11d99ca5b978e82080a7834bf8c663e44d->leave($__internal_8f4dfb1087cdadc1a9c4791f9d62ef11d99ca5b978e82080a7834bf8c663e44d_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_9d4ace289c18919835d4042a6f8e31b706e0477111ac50067a9562306ac430a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d4ace289c18919835d4042a6f8e31b706e0477111ac50067a9562306ac430a8->enter($__internal_9d4ace289c18919835d4042a6f8e31b706e0477111ac50067a9562306ac430a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_026a1d11b254a5af217e9ba48a4d94e0f055a5c763f619af503876a0f170a402 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_026a1d11b254a5af217e9ba48a4d94e0f055a5c763f619af503876a0f170a402->enter($__internal_026a1d11b254a5af217e9ba48a4d94e0f055a5c763f619af503876a0f170a402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_026a1d11b254a5af217e9ba48a4d94e0f055a5c763f619af503876a0f170a402->leave($__internal_026a1d11b254a5af217e9ba48a4d94e0f055a5c763f619af503876a0f170a402_prof);

        
        $__internal_9d4ace289c18919835d4042a6f8e31b706e0477111ac50067a9562306ac430a8->leave($__internal_9d4ace289c18919835d4042a6f8e31b706e0477111ac50067a9562306ac430a8_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_9b2f9001930bcf7185f27685b728dd18cf3eb29b38d105a418100cd440259d5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b2f9001930bcf7185f27685b728dd18cf3eb29b38d105a418100cd440259d5b->enter($__internal_9b2f9001930bcf7185f27685b728dd18cf3eb29b38d105a418100cd440259d5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_468e7d45e89c0de5195fbf59241d62205b62bdf613421db894509f5dd08ed15f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_468e7d45e89c0de5195fbf59241d62205b62bdf613421db894509f5dd08ed15f->enter($__internal_468e7d45e89c0de5195fbf59241d62205b62bdf613421db894509f5dd08ed15f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_468e7d45e89c0de5195fbf59241d62205b62bdf613421db894509f5dd08ed15f->leave($__internal_468e7d45e89c0de5195fbf59241d62205b62bdf613421db894509f5dd08ed15f_prof);

        
        $__internal_9b2f9001930bcf7185f27685b728dd18cf3eb29b38d105a418100cd440259d5b->leave($__internal_9b2f9001930bcf7185f27685b728dd18cf3eb29b38d105a418100cd440259d5b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "/Users/hakim/Sites/tunisie-express/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
