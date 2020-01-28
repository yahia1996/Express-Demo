<?php

/* MorivenBundle:common:head.html.twig */
class __TwigTemplate_61990ad276f95d858c2907d60138ed1d71d0c45bb6128b80dc4b90ec2704c31e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_684393d7ab20841cadf954b54a5e335e903b434ac7814e72ca19843b7d114d0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_684393d7ab20841cadf954b54a5e335e903b434ac7814e72ca19843b7d114d0e->enter($__internal_684393d7ab20841cadf954b54a5e335e903b434ac7814e72ca19843b7d114d0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MorivenBundle:common:head.html.twig"));

        $__internal_6cbe0067bd38245468426a6ae270dd067b49527b09753414f22613160c68bf70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cbe0067bd38245468426a6ae270dd067b49527b09753414f22613160c68bf70->enter($__internal_6cbe0067bd38245468426a6ae270dd067b49527b09753414f22613160c68bf70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MorivenBundle:common:head.html.twig"));

        // line 1
        echo "<head>
    <title>Tunisie express</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta charset=\"utf-8\">
    <meta name=\"keywords\" content=\"Tunisie expresse\" />
    <script>
        addEventListener(\"load\", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    ";
        // line 15
        $this->loadTemplate("MorivenBundle:common:styles.html.twig", "MorivenBundle:common:head.html.twig", 15)->display($context);
        // line 16
        echo "</head>";
        
        $__internal_684393d7ab20841cadf954b54a5e335e903b434ac7814e72ca19843b7d114d0e->leave($__internal_684393d7ab20841cadf954b54a5e335e903b434ac7814e72ca19843b7d114d0e_prof);

        
        $__internal_6cbe0067bd38245468426a6ae270dd067b49527b09753414f22613160c68bf70->leave($__internal_6cbe0067bd38245468426a6ae270dd067b49527b09753414f22613160c68bf70_prof);

    }

    public function getTemplateName()
    {
        return "MorivenBundle:common:head.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 16,  41 => 15,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<head>
    <title>Tunisie express</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta charset=\"utf-8\">
    <meta name=\"keywords\" content=\"Tunisie expresse\" />
    <script>
        addEventListener(\"load\", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    {% include 'MorivenBundle:common:styles.html.twig' %}
</head>", "MorivenBundle:common:head.html.twig", "C:\\wamp64\\www\\Express-Demo\\Express-Demo\\src\\MorivenBundle\\Resources\\views\\common\\head.html.twig");
    }
}
