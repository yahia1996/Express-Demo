<?php

/* MorivenBundle:common:head.html.twig */
class __TwigTemplate_8df5553c926de9fd1bc0ea180c89a87c3e66982c3b01609ac3b256ca5c4d267b extends Twig_Template
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
        return array (  37 => 16,  35 => 15,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "MorivenBundle:common:head.html.twig", "C:\\wamp64\\www\\Express-Demo\\Express-Demo\\src\\MorivenBundle/Resources/views/common/head.html.twig");
    }
}
