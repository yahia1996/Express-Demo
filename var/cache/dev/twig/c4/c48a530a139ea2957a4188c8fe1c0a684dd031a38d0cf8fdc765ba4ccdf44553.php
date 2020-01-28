<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_960a022ff8ec56d14d8d002a5fa3c9af68dda0eeaac473918ea06bff2372a847 extends Twig_Template
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
        $__internal_fce1bba2dedc5d86bb73b3d3e18b61e4cf6001d6475f819eeb046f4f253bd81d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fce1bba2dedc5d86bb73b3d3e18b61e4cf6001d6475f819eeb046f4f253bd81d->enter($__internal_fce1bba2dedc5d86bb73b3d3e18b61e4cf6001d6475f819eeb046f4f253bd81d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_10eb4290482afe5059e444c38023827cbdc58b388afb9dc188ee1a158a18680b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10eb4290482afe5059e444c38023827cbdc58b388afb9dc188ee1a158a18680b->enter($__internal_10eb4290482afe5059e444c38023827cbdc58b388afb9dc188ee1a158a18680b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_fce1bba2dedc5d86bb73b3d3e18b61e4cf6001d6475f819eeb046f4f253bd81d->leave($__internal_fce1bba2dedc5d86bb73b3d3e18b61e4cf6001d6475f819eeb046f4f253bd81d_prof);

        
        $__internal_10eb4290482afe5059e444c38023827cbdc58b388afb9dc188ee1a158a18680b->leave($__internal_10eb4290482afe5059e444c38023827cbdc58b388afb9dc188ee1a158a18680b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "/Users/hakim/Sites/tunisie-express/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
