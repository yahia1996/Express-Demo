<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_cb3bbe66549ccdf0a3728fef21bf84495f5a534c827ec0e7a7bdf195b3b7337a extends Twig_Template
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
        $__internal_5ecefa231eb2a5fe19b0e3aff26b297558483db5a0ae6cf8a7d93abc8388c366 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ecefa231eb2a5fe19b0e3aff26b297558483db5a0ae6cf8a7d93abc8388c366->enter($__internal_5ecefa231eb2a5fe19b0e3aff26b297558483db5a0ae6cf8a7d93abc8388c366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_b5317d3600d8d8e70e84da99c608f49cbef3286bee6f98881a27e32c5c56a23b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5317d3600d8d8e70e84da99c608f49cbef3286bee6f98881a27e32c5c56a23b->enter($__internal_b5317d3600d8d8e70e84da99c608f49cbef3286bee6f98881a27e32c5c56a23b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />
";
        
        $__internal_5ecefa231eb2a5fe19b0e3aff26b297558483db5a0ae6cf8a7d93abc8388c366->leave($__internal_5ecefa231eb2a5fe19b0e3aff26b297558483db5a0ae6cf8a7d93abc8388c366_prof);

        
        $__internal_b5317d3600d8d8e70e84da99c608f49cbef3286bee6f98881a27e32c5c56a23b->leave($__internal_b5317d3600d8d8e70e84da99c608f49cbef3286bee6f98881a27e32c5c56a23b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/Users/hakim/Sites/tunisie-express/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
