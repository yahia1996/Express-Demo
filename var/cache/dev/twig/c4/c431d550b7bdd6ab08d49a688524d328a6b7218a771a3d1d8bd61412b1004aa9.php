<?php

/* MorivenBundle:common:head.html.twig */
class __TwigTemplate_2aa63bfdb235a390486775343fa2ca82cd5251ac50b5ce7b6373f78763736222 extends Twig_Template
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
        $__internal_656ed7b3c945153edf693e150f5648888bf8759fc49a4fda863ecaa1b2c038dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_656ed7b3c945153edf693e150f5648888bf8759fc49a4fda863ecaa1b2c038dc->enter($__internal_656ed7b3c945153edf693e150f5648888bf8759fc49a4fda863ecaa1b2c038dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MorivenBundle:common:head.html.twig"));

        $__internal_bc51a01cd48a867f8af4d82acd5e92dede01687d335d1dc5822f8da67f165bd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc51a01cd48a867f8af4d82acd5e92dede01687d335d1dc5822f8da67f165bd4->enter($__internal_bc51a01cd48a867f8af4d82acd5e92dede01687d335d1dc5822f8da67f165bd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MorivenBundle:common:head.html.twig"));

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
        
        $__internal_656ed7b3c945153edf693e150f5648888bf8759fc49a4fda863ecaa1b2c038dc->leave($__internal_656ed7b3c945153edf693e150f5648888bf8759fc49a4fda863ecaa1b2c038dc_prof);

        
        $__internal_bc51a01cd48a867f8af4d82acd5e92dede01687d335d1dc5822f8da67f165bd4->leave($__internal_bc51a01cd48a867f8af4d82acd5e92dede01687d335d1dc5822f8da67f165bd4_prof);

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
