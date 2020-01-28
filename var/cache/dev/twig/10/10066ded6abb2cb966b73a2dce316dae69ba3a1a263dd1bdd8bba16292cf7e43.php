<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_62f0e98d0de74a6a0a6c9bbd10c8a20ba7ecd2f2dd7ebaac4b017ec8babe0b57 extends Twig_Template
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
        $__internal_4cdd0c0cadde827347bccfcef36f8822a6f9a49ef9ce393757861e10de827283 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cdd0c0cadde827347bccfcef36f8822a6f9a49ef9ce393757861e10de827283->enter($__internal_4cdd0c0cadde827347bccfcef36f8822a6f9a49ef9ce393757861e10de827283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_8962b8a1813cc04806afc33a88f6f58e647b5eaed253502b9b8c90f1522b8993 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8962b8a1813cc04806afc33a88f6f58e647b5eaed253502b9b8c90f1522b8993->enter($__internal_8962b8a1813cc04806afc33a88f6f58e647b5eaed253502b9b8c90f1522b8993_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_4cdd0c0cadde827347bccfcef36f8822a6f9a49ef9ce393757861e10de827283->leave($__internal_4cdd0c0cadde827347bccfcef36f8822a6f9a49ef9ce393757861e10de827283_prof);

        
        $__internal_8962b8a1813cc04806afc33a88f6f58e647b5eaed253502b9b8c90f1522b8993->leave($__internal_8962b8a1813cc04806afc33a88f6f58e647b5eaed253502b9b8c90f1522b8993_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.css.twig", "/Users/hakim/Sites/tunisie-express/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
