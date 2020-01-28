<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_865feb19c825c4710194054853c061049c95a3ceb8b542802edc97488b7b5162 extends Twig_Template
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
        $__internal_143233a1440012c6749b1a1e825c29f5ece12792c71c683d3d7fc64503567be0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_143233a1440012c6749b1a1e825c29f5ece12792c71c683d3d7fc64503567be0->enter($__internal_143233a1440012c6749b1a1e825c29f5ece12792c71c683d3d7fc64503567be0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_298b94bc599b4c55dc583d3c32a5c848bba45f01a52d6dfd6d96b8b3d9b4b3eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_298b94bc599b4c55dc583d3c32a5c848bba45f01a52d6dfd6d96b8b3d9b4b3eb->enter($__internal_298b94bc599b4c55dc583d3c32a5c848bba45f01a52d6dfd6d96b8b3d9b4b3eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_143233a1440012c6749b1a1e825c29f5ece12792c71c683d3d7fc64503567be0->leave($__internal_143233a1440012c6749b1a1e825c29f5ece12792c71c683d3d7fc64503567be0_prof);

        
        $__internal_298b94bc599b4c55dc583d3c32a5c848bba45f01a52d6dfd6d96b8b3d9b4b3eb->leave($__internal_298b94bc599b4c55dc583d3c32a5c848bba45f01a52d6dfd6d96b8b3d9b4b3eb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Users/hakim/Sites/tunisie-express/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
