<?php

/* @moriven/views/index.html.twig */
class __TwigTemplate_2e1e0ad6ccd28a91099c17b1de72a7306db3a78f68cb28486ca3411fb5c35643 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@MorivenBundle/Resources/views/layout.html.twig", "@moriven/views/index.html.twig", 1);
        $this->blocks = array(
            'slider' => array($this, 'block_slider'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@MorivenBundle/Resources/views/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_slider($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->loadTemplate("MorivenBundle:parts:slider.html.twig", "@moriven/views/index.html.twig", 4)->display($context);
    }

    public function getTemplateName()
    {
        return "@moriven/views/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@moriven/views/index.html.twig", "C:\\wamp64\\www\\Express-Demo\\Express-Demo\\src\\MorivenBundle\\Resources\\views\\index.html.twig");
    }
}
