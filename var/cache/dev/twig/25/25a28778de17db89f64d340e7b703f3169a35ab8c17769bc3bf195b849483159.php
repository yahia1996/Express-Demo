<?php

/* MorivenBundle:common:head.html.twig */
class __TwigTemplate_5be74bf51436fc591a60c69a33ef258177854770b6d93cc9e9a8bf70ad310340 extends Twig_Template
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
        $__internal_8336d911a53a39e395515b2f463cf82af7c32c214543c765b4f294a001b367ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8336d911a53a39e395515b2f463cf82af7c32c214543c765b4f294a001b367ed->enter($__internal_8336d911a53a39e395515b2f463cf82af7c32c214543c765b4f294a001b367ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MorivenBundle:common:head.html.twig"));

        $__internal_2aca44495d4aface2196f0e341a465350699708dbc2c1dfe499cf19620eda295 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2aca44495d4aface2196f0e341a465350699708dbc2c1dfe499cf19620eda295->enter($__internal_2aca44495d4aface2196f0e341a465350699708dbc2c1dfe499cf19620eda295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MorivenBundle:common:head.html.twig"));

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
        
        $__internal_8336d911a53a39e395515b2f463cf82af7c32c214543c765b4f294a001b367ed->leave($__internal_8336d911a53a39e395515b2f463cf82af7c32c214543c765b4f294a001b367ed_prof);

        
        $__internal_2aca44495d4aface2196f0e341a465350699708dbc2c1dfe499cf19620eda295->leave($__internal_2aca44495d4aface2196f0e341a465350699708dbc2c1dfe499cf19620eda295_prof);

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
</head>", "MorivenBundle:common:head.html.twig", "/Users/hakim/Sites/tunisie-express/src/MorivenBundle/Resources/views/common/head.html.twig");
    }
}
