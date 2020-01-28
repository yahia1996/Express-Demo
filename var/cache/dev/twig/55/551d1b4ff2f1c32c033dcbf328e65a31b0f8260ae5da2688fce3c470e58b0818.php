<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_e14e460a5ebb9bf75c4d2fac4a503b03ecba817726567857f0621a9cd53867c0 extends Twig_Template
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
        $__internal_af707d8ac1a1ea3638147172e8c8ac5dc77b4fa4e8bdded1acef7aa2832b4228 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af707d8ac1a1ea3638147172e8c8ac5dc77b4fa4e8bdded1acef7aa2832b4228->enter($__internal_af707d8ac1a1ea3638147172e8c8ac5dc77b4fa4e8bdded1acef7aa2832b4228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_f19ba40f4c88b8d0c1e8f89b297c4ef39409e1b2074a85d7e2f5e82f10960c9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f19ba40f4c88b8d0c1e8f89b297c4ef39409e1b2074a85d7e2f5e82f10960c9f->enter($__internal_f19ba40f4c88b8d0c1e8f89b297c4ef39409e1b2074a85d7e2f5e82f10960c9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_af707d8ac1a1ea3638147172e8c8ac5dc77b4fa4e8bdded1acef7aa2832b4228->leave($__internal_af707d8ac1a1ea3638147172e8c8ac5dc77b4fa4e8bdded1acef7aa2832b4228_prof);

        
        $__internal_f19ba40f4c88b8d0c1e8f89b297c4ef39409e1b2074a85d7e2f5e82f10960c9f->leave($__internal_f19ba40f4c88b8d0c1e8f89b297c4ef39409e1b2074a85d7e2f5e82f10960c9f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
", "@Twig/Exception/exception.css.twig", "C:\\wamp64\\www\\Express-Demo\\Express-Demo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
