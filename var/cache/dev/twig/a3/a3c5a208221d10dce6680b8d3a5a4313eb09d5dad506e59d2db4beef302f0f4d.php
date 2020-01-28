<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_991f1d5d0015ac65d34fd1fe76a564ab68cb630811bff12ed9e7df8d4686aa50 extends Twig_Template
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
        $__internal_06b61f4dc08e7221d623f7c2d595d5a6774de35e5fa8c139fff18146c024d4bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06b61f4dc08e7221d623f7c2d595d5a6774de35e5fa8c139fff18146c024d4bc->enter($__internal_06b61f4dc08e7221d623f7c2d595d5a6774de35e5fa8c139fff18146c024d4bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_135a8e209fdce0bb4bccfcc448d9cf15ea6c9ac3c453c83c18e4ba9aa738bcf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_135a8e209fdce0bb4bccfcc448d9cf15ea6c9ac3c453c83c18e4ba9aa738bcf3->enter($__internal_135a8e209fdce0bb4bccfcc448d9cf15ea6c9ac3c453c83c18e4ba9aa738bcf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_06b61f4dc08e7221d623f7c2d595d5a6774de35e5fa8c139fff18146c024d4bc->leave($__internal_06b61f4dc08e7221d623f7c2d595d5a6774de35e5fa8c139fff18146c024d4bc_prof);

        
        $__internal_135a8e209fdce0bb4bccfcc448d9cf15ea6c9ac3c453c83c18e4ba9aa738bcf3->leave($__internal_135a8e209fdce0bb4bccfcc448d9cf15ea6c9ac3c453c83c18e4ba9aa738bcf3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "/Users/hakim/Sites/tunisie-express/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
