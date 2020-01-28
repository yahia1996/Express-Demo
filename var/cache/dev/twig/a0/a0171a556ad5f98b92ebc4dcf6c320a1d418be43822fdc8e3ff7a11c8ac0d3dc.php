<?php

/* MorivenBundle:Registration:confirmed.html.twig */
class __TwigTemplate_50e7ccb5ef89c49f56ee7036465afa4cee27a2d51a8e9bd32ed7de40fb773ad5 extends Twig_Template
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
        $__internal_35cee61d0a379c0d648da6bc1bd1ad9c380d29a836fedbc6b9dc249f52cca2ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35cee61d0a379c0d648da6bc1bd1ad9c380d29a836fedbc6b9dc249f52cca2ba->enter($__internal_35cee61d0a379c0d648da6bc1bd1ad9c380d29a836fedbc6b9dc249f52cca2ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MorivenBundle:Registration:confirmed.html.twig"));

        $__internal_71fe27bf38ca8539b0b0d7c08956a3a7d1eae11c29b2884101bfb68da2784d69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71fe27bf38ca8539b0b0d7c08956a3a7d1eae11c29b2884101bfb68da2784d69->enter($__internal_71fe27bf38ca8539b0b0d7c08956a3a7d1eae11c29b2884101bfb68da2784d69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MorivenBundle:Registration:confirmed.html.twig"));

        // line 1
        $this->loadTemplate("@MorivenBundle/Resources/views/index.html.twig", "MorivenBundle:Registration:confirmed.html.twig", 1)->display($context);
        
        $__internal_35cee61d0a379c0d648da6bc1bd1ad9c380d29a836fedbc6b9dc249f52cca2ba->leave($__internal_35cee61d0a379c0d648da6bc1bd1ad9c380d29a836fedbc6b9dc249f52cca2ba_prof);

        
        $__internal_71fe27bf38ca8539b0b0d7c08956a3a7d1eae11c29b2884101bfb68da2784d69->leave($__internal_71fe27bf38ca8539b0b0d7c08956a3a7d1eae11c29b2884101bfb68da2784d69_prof);

    }

    public function getTemplateName()
    {
        return "MorivenBundle:Registration:confirmed.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@MorivenBundle/Resources/views/index.html.twig' %}", "MorivenBundle:Registration:confirmed.html.twig", "/Users/hakim/Sites/tunisie-express/src/MorivenBundle/Resources/views/Registration/confirmed.html.twig");
    }
}
