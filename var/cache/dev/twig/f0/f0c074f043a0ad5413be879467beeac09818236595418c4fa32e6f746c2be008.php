<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_c2f543058edcd5155fcc1f6bfa24843504f8ce42c66a1def7835402e5d1fd1aa extends Twig_Template
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
        $__internal_aacdcf8a4e9ecfa2f04e34670d338c78e254faf43d0d6ce6fbc108239c81b697 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aacdcf8a4e9ecfa2f04e34670d338c78e254faf43d0d6ce6fbc108239c81b697->enter($__internal_aacdcf8a4e9ecfa2f04e34670d338c78e254faf43d0d6ce6fbc108239c81b697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_9050edd4d6b6a8bf1f5f8957ee88b6b5c941d8f0ecd9681c54b8b8b82f3ba562 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9050edd4d6b6a8bf1f5f8957ee88b6b5c941d8f0ecd9681c54b8b8b82f3ba562->enter($__internal_9050edd4d6b6a8bf1f5f8957ee88b6b5c941d8f0ecd9681c54b8b8b82f3ba562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo "

*/
";
        
        $__internal_aacdcf8a4e9ecfa2f04e34670d338c78e254faf43d0d6ce6fbc108239c81b697->leave($__internal_aacdcf8a4e9ecfa2f04e34670d338c78e254faf43d0d6ce6fbc108239c81b697_prof);

        
        $__internal_9050edd4d6b6a8bf1f5f8957ee88b6b5c941d8f0ecd9681c54b8b8b82f3ba562->leave($__internal_9050edd4d6b6a8bf1f5f8957ee88b6b5c941d8f0ecd9681c54b8b8b82f3ba562_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/Users/hakim/Sites/tunisie-express/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
