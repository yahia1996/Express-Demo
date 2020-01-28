<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_20ce79da4a4228bf57db06a7d5be95aee6cfb8c6362120cadfeedc46c45ddd89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_943928a2a4c3c08ac28a884ad985a0ddffed22e283c1396b3f864a7c39b67fce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_943928a2a4c3c08ac28a884ad985a0ddffed22e283c1396b3f864a7c39b67fce->enter($__internal_943928a2a4c3c08ac28a884ad985a0ddffed22e283c1396b3f864a7c39b67fce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_45d79f50de59b0c136de3dfc2710c03e02f7c74d4bc4c5fc6f752bc986adad79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45d79f50de59b0c136de3dfc2710c03e02f7c74d4bc4c5fc6f752bc986adad79->enter($__internal_45d79f50de59b0c136de3dfc2710c03e02f7c74d4bc4c5fc6f752bc986adad79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_943928a2a4c3c08ac28a884ad985a0ddffed22e283c1396b3f864a7c39b67fce->leave($__internal_943928a2a4c3c08ac28a884ad985a0ddffed22e283c1396b3f864a7c39b67fce_prof);

        
        $__internal_45d79f50de59b0c136de3dfc2710c03e02f7c74d4bc4c5fc6f752bc986adad79->leave($__internal_45d79f50de59b0c136de3dfc2710c03e02f7c74d4bc4c5fc6f752bc986adad79_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_0f719fd25d439f873dffba17711c4ec69d85aa9fb9f75c14fd53045afa7a0893 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f719fd25d439f873dffba17711c4ec69d85aa9fb9f75c14fd53045afa7a0893->enter($__internal_0f719fd25d439f873dffba17711c4ec69d85aa9fb9f75c14fd53045afa7a0893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_082f0ac075088c00ec93dceddec5a70f5f8d9b6902a1bb11a65e70f6df7ff92a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_082f0ac075088c00ec93dceddec5a70f5f8d9b6902a1bb11a65e70f6df7ff92a->enter($__internal_082f0ac075088c00ec93dceddec5a70f5f8d9b6902a1bb11a65e70f6df7ff92a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_082f0ac075088c00ec93dceddec5a70f5f8d9b6902a1bb11a65e70f6df7ff92a->leave($__internal_082f0ac075088c00ec93dceddec5a70f5f8d9b6902a1bb11a65e70f6df7ff92a_prof);

        
        $__internal_0f719fd25d439f873dffba17711c4ec69d85aa9fb9f75c14fd53045afa7a0893->leave($__internal_0f719fd25d439f873dffba17711c4ec69d85aa9fb9f75c14fd53045afa7a0893_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/Users/hakim/Sites/tunisie-express/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
