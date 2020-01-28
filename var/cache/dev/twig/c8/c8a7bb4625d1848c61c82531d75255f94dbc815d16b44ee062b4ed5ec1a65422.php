<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_be8ed55c70dc7c441a6d7fc764fa85fc47e3da7bbd50321cf59b50ee8487dd5d extends Twig_Template
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
        $__internal_cb5650b3be57c987da31b91b77f2433da1e74e9d70aaeb45e6ec9f29905b6e10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb5650b3be57c987da31b91b77f2433da1e74e9d70aaeb45e6ec9f29905b6e10->enter($__internal_cb5650b3be57c987da31b91b77f2433da1e74e9d70aaeb45e6ec9f29905b6e10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_5d0df8292b25790c4e4acaa96ba3de3ea23fe8c23e2b1204e73c4ef92aee1325 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d0df8292b25790c4e4acaa96ba3de3ea23fe8c23e2b1204e73c4ef92aee1325->enter($__internal_5d0df8292b25790c4e4acaa96ba3de3ea23fe8c23e2b1204e73c4ef92aee1325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_cb5650b3be57c987da31b91b77f2433da1e74e9d70aaeb45e6ec9f29905b6e10->leave($__internal_cb5650b3be57c987da31b91b77f2433da1e74e9d70aaeb45e6ec9f29905b6e10_prof);

        
        $__internal_5d0df8292b25790c4e4acaa96ba3de3ea23fe8c23e2b1204e73c4ef92aee1325->leave($__internal_5d0df8292b25790c4e4acaa96ba3de3ea23fe8c23e2b1204e73c4ef92aee1325_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/Users/hakim/Sites/tunisie-express/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
