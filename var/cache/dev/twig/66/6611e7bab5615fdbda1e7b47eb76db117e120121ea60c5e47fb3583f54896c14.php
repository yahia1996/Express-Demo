<?php

/* @moriven/config/routing.yml */
class __TwigTemplate_7d57b4929ab7361ce3e9fdcf2ca3694cd5d3b84363895e7c259c081e8706ff9b extends Twig_Template
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
        $__internal_e12b1c0245938f1aaa6d7477091c3aaaf7218dea7f50ceea40a2bbee724e3e41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e12b1c0245938f1aaa6d7477091c3aaaf7218dea7f50ceea40a2bbee724e3e41->enter($__internal_e12b1c0245938f1aaa6d7477091c3aaaf7218dea7f50ceea40a2bbee724e3e41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@moriven/config/routing.yml"));

        $__internal_6dabe052e3dd24e70850126283db99f68b905913bf711fc01d4f83236a7e8b5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dabe052e3dd24e70850126283db99f68b905913bf711fc01d4f83236a7e8b5a->enter($__internal_6dabe052e3dd24e70850126283db99f68b905913bf711fc01d4f83236a7e8b5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@moriven/config/routing.yml"));

        // line 1
        echo "moriven:
    resource: \"@MorivenBundle/Controller/\"
    type:     annotation
    prefix:   /";
        
        $__internal_e12b1c0245938f1aaa6d7477091c3aaaf7218dea7f50ceea40a2bbee724e3e41->leave($__internal_e12b1c0245938f1aaa6d7477091c3aaaf7218dea7f50ceea40a2bbee724e3e41_prof);

        
        $__internal_6dabe052e3dd24e70850126283db99f68b905913bf711fc01d4f83236a7e8b5a->leave($__internal_6dabe052e3dd24e70850126283db99f68b905913bf711fc01d4f83236a7e8b5a_prof);

    }

    public function getTemplateName()
    {
        return "@moriven/config/routing.yml";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("moriven:
    resource: \"@MorivenBundle/Controller/\"
    type:     annotation
    prefix:   /", "@moriven/config/routing.yml", "/Users/hakim/Sites/tunisie-express/src/MorivenBundle/Resources/config/routing.yml");
    }
}
