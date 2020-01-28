<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_bdd27fe6967b57f4b5caf66e82776400cbfb621f7ed0f472c2d06ddb335a7a48 extends Twig_Template
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
        $__internal_d81497c6717a8dfdf5d0b035c4d8c29ba56d5bfb2a32b58f9890be0dd9e3baf2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d81497c6717a8dfdf5d0b035c4d8c29ba56d5bfb2a32b58f9890be0dd9e3baf2->enter($__internal_d81497c6717a8dfdf5d0b035c4d8c29ba56d5bfb2a32b58f9890be0dd9e3baf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_c55c15558837a0962736867699a1db25bf78c53f082831cd53118e73a35c006c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c55c15558837a0962736867699a1db25bf78c53f082831cd53118e73a35c006c->enter($__internal_c55c15558837a0962736867699a1db25bf78c53f082831cd53118e73a35c006c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_d81497c6717a8dfdf5d0b035c4d8c29ba56d5bfb2a32b58f9890be0dd9e3baf2->leave($__internal_d81497c6717a8dfdf5d0b035c4d8c29ba56d5bfb2a32b58f9890be0dd9e3baf2_prof);

        
        $__internal_c55c15558837a0962736867699a1db25bf78c53f082831cd53118e73a35c006c->leave($__internal_c55c15558837a0962736867699a1db25bf78c53f082831cd53118e73a35c006c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "/Users/hakim/Sites/tunisie-express/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
