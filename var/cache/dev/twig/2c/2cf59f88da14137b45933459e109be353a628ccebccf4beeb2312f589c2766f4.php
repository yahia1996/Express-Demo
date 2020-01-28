<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_51fd7ba6399ef1668604853df160e9895b9614b310e7083afab9bab2c7f3b4eb extends Twig_Template
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
        $__internal_1bf68465eff0d0e5021b3bbcb31f5d2f847b8c1fa363653fac7535b620934fd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bf68465eff0d0e5021b3bbcb31f5d2f847b8c1fa363653fac7535b620934fd8->enter($__internal_1bf68465eff0d0e5021b3bbcb31f5d2f847b8c1fa363653fac7535b620934fd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_5b164155b41d1a0fed529053a271e4b8fdb78d22ba53a7f0c3987772918ea611 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b164155b41d1a0fed529053a271e4b8fdb78d22ba53a7f0c3987772918ea611->enter($__internal_5b164155b41d1a0fed529053a271e4b8fdb78d22ba53a7f0c3987772918ea611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_1bf68465eff0d0e5021b3bbcb31f5d2f847b8c1fa363653fac7535b620934fd8->leave($__internal_1bf68465eff0d0e5021b3bbcb31f5d2f847b8c1fa363653fac7535b620934fd8_prof);

        
        $__internal_5b164155b41d1a0fed529053a271e4b8fdb78d22ba53a7f0c3987772918ea611->leave($__internal_5b164155b41d1a0fed529053a271e4b8fdb78d22ba53a7f0c3987772918ea611_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "/Users/hakim/Sites/tunisie-express/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
