<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_a1181f338639efcd099e7f4fc84f9b9ffae2127bc85d7a3ddbf0a9f4b5c96ea1 extends Twig_Template
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
        $__internal_0e8272ee5fb0efc88d760decff889c36217e49430266bbd51c477d8d87af5317 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e8272ee5fb0efc88d760decff889c36217e49430266bbd51c477d8d87af5317->enter($__internal_0e8272ee5fb0efc88d760decff889c36217e49430266bbd51c477d8d87af5317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_8f8b5974ff34096fc18166f4f84704ba15ec63fe4a960ab05b187d7d14a8f9d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f8b5974ff34096fc18166f4f84704ba15ec63fe4a960ab05b187d7d14a8f9d2->enter($__internal_8f8b5974ff34096fc18166f4f84704ba15ec63fe4a960ab05b187d7d14a8f9d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
";
        
        $__internal_0e8272ee5fb0efc88d760decff889c36217e49430266bbd51c477d8d87af5317->leave($__internal_0e8272ee5fb0efc88d760decff889c36217e49430266bbd51c477d8d87af5317_prof);

        
        $__internal_8f8b5974ff34096fc18166f4f84704ba15ec63fe4a960ab05b187d7d14a8f9d2->leave($__internal_8f8b5974ff34096fc18166f4f84704ba15ec63fe4a960ab05b187d7d14a8f9d2_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
", "WebProfilerBundle:Collector:exception.css.twig", "/Users/hakim/Sites/tunisie-express/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
