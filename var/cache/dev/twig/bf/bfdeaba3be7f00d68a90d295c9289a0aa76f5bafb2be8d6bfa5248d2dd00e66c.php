<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_4684d98fc3a5fa6549fe26a8e8979a1e2c94ca66a586bcf966fb15f19bce0ee7 extends Twig_Template
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
        $__internal_6b7a0aa3bdc435a4979647d1dcb514b52b90975250e70254e7dd10a18fc79577 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b7a0aa3bdc435a4979647d1dcb514b52b90975250e70254e7dd10a18fc79577->enter($__internal_6b7a0aa3bdc435a4979647d1dcb514b52b90975250e70254e7dd10a18fc79577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_1fb30e64c1d1b512b2eae6e34f72181fed93bb436e704402bb88ade4726edc22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fb30e64c1d1b512b2eae6e34f72181fed93bb436e704402bb88ade4726edc22->enter($__internal_1fb30e64c1d1b512b2eae6e34f72181fed93bb436e704402bb88ade4726edc22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_6b7a0aa3bdc435a4979647d1dcb514b52b90975250e70254e7dd10a18fc79577->leave($__internal_6b7a0aa3bdc435a4979647d1dcb514b52b90975250e70254e7dd10a18fc79577_prof);

        
        $__internal_1fb30e64c1d1b512b2eae6e34f72181fed93bb436e704402bb88ade4726edc22->leave($__internal_1fb30e64c1d1b512b2eae6e34f72181fed93bb436e704402bb88ade4726edc22_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "/Users/hakim/Sites/tunisie-express/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
