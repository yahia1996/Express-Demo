<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_0dbdc485cfd59884c7eb97a8930fcdcf68955c7f26724bce6dadeb6532e1265d extends Twig_Template
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
        $__internal_e9ca0d57b5f244ac8baad66f86639a1ec4176942a4a1d3a5c97276adf658d5b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9ca0d57b5f244ac8baad66f86639a1ec4176942a4a1d3a5c97276adf658d5b9->enter($__internal_e9ca0d57b5f244ac8baad66f86639a1ec4176942a4a1d3a5c97276adf658d5b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_d7bc2cad5760a0772f72d247693b6aeaef7b1a09a05a6c7c4c3a925e2d5071f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7bc2cad5760a0772f72d247693b6aeaef7b1a09a05a6c7c4c3a925e2d5071f2->enter($__internal_d7bc2cad5760a0772f72d247693b6aeaef7b1a09a05a6c7c4c3a925e2d5071f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_e9ca0d57b5f244ac8baad66f86639a1ec4176942a4a1d3a5c97276adf658d5b9->leave($__internal_e9ca0d57b5f244ac8baad66f86639a1ec4176942a4a1d3a5c97276adf658d5b9_prof);

        
        $__internal_d7bc2cad5760a0772f72d247693b6aeaef7b1a09a05a6c7c4c3a925e2d5071f2->leave($__internal_d7bc2cad5760a0772f72d247693b6aeaef7b1a09a05a6c7c4c3a925e2d5071f2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/Users/hakim/Sites/tunisie-express/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
