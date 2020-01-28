<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_ccda895d3352d21e865c8afe3a6231ac42080e92066a3fb59da2f8f2f44d843b extends Twig_Template
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
        $__internal_55619009d96d8f1b1f657d70ebed9aca56e67e843bb5e25f4a2b23f1c043442f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55619009d96d8f1b1f657d70ebed9aca56e67e843bb5e25f4a2b23f1c043442f->enter($__internal_55619009d96d8f1b1f657d70ebed9aca56e67e843bb5e25f4a2b23f1c043442f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_6bd21c70c447383db1056659b1ff1eca76a1e10512bd985fd3f506586a444a1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bd21c70c447383db1056659b1ff1eca76a1e10512bd985fd3f506586a444a1a->enter($__internal_6bd21c70c447383db1056659b1ff1eca76a1e10512bd985fd3f506586a444a1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_55619009d96d8f1b1f657d70ebed9aca56e67e843bb5e25f4a2b23f1c043442f->leave($__internal_55619009d96d8f1b1f657d70ebed9aca56e67e843bb5e25f4a2b23f1c043442f_prof);

        
        $__internal_6bd21c70c447383db1056659b1ff1eca76a1e10512bd985fd3f506586a444a1a->leave($__internal_6bd21c70c447383db1056659b1ff1eca76a1e10512bd985fd3f506586a444a1a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/Users/hakim/Sites/tunisie-express/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
