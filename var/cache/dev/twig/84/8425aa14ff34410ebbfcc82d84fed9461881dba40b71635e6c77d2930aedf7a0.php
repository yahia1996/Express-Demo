<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_897bd2602135823543e818ed284f6b1da3f51b5ef253e44969bd687de36e7587 extends Twig_Template
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
        $__internal_fd2e90485614e564630a7a18d19a94e211849ad3274e30cf039c29743a027eaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd2e90485614e564630a7a18d19a94e211849ad3274e30cf039c29743a027eaf->enter($__internal_fd2e90485614e564630a7a18d19a94e211849ad3274e30cf039c29743a027eaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_8cb22deaa615b48360c916c7e13cd636888a03c4bac00e6a16384949f5dfa402 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cb22deaa615b48360c916c7e13cd636888a03c4bac00e6a16384949f5dfa402->enter($__internal_8cb22deaa615b48360c916c7e13cd636888a03c4bac00e6a16384949f5dfa402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo "

*/
";
        
        $__internal_fd2e90485614e564630a7a18d19a94e211849ad3274e30cf039c29743a027eaf->leave($__internal_fd2e90485614e564630a7a18d19a94e211849ad3274e30cf039c29743a027eaf_prof);

        
        $__internal_8cb22deaa615b48360c916c7e13cd636888a03c4bac00e6a16384949f5dfa402->leave($__internal_8cb22deaa615b48360c916c7e13cd636888a03c4bac00e6a16384949f5dfa402_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "/Users/hakim/Sites/tunisie-express/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
