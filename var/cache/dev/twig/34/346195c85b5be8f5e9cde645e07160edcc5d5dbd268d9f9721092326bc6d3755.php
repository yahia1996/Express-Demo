<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_bbe56eff1723549914ffdfac3155b951b34cda9f83d7136234209cf968340b39 extends Twig_Template
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
        $__internal_347c56a78fd5fd1ae0bade801ac4f247c0fae780bdcb66ca7dc0b22fc6585050 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_347c56a78fd5fd1ae0bade801ac4f247c0fae780bdcb66ca7dc0b22fc6585050->enter($__internal_347c56a78fd5fd1ae0bade801ac4f247c0fae780bdcb66ca7dc0b22fc6585050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_eceea79a8af5acc19eb6777a745d09f7499cf5a6c7488d7c2ee98bf3f3c9d302 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eceea79a8af5acc19eb6777a745d09f7499cf5a6c7488d7c2ee98bf3f3c9d302->enter($__internal_eceea79a8af5acc19eb6777a745d09f7499cf5a6c7488d7c2ee98bf3f3c9d302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_347c56a78fd5fd1ae0bade801ac4f247c0fae780bdcb66ca7dc0b22fc6585050->leave($__internal_347c56a78fd5fd1ae0bade801ac4f247c0fae780bdcb66ca7dc0b22fc6585050_prof);

        
        $__internal_eceea79a8af5acc19eb6777a745d09f7499cf5a6c7488d7c2ee98bf3f3c9d302->leave($__internal_eceea79a8af5acc19eb6777a745d09f7499cf5a6c7488d7c2ee98bf3f3c9d302_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.atom.twig", "/Users/hakim/Sites/tunisie-express/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
