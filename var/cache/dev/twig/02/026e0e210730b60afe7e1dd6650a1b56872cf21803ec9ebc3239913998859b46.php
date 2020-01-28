<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_f82e1cc36cbcc1cb0b1fcc2fde073c7b5a3b9255967200f3b8275a15a11d8855 extends Twig_Template
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
        $__internal_461f004c1f4681cd401c6b35d026ce2b767a5826ed915ff71ae85e5da5c4baa7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_461f004c1f4681cd401c6b35d026ce2b767a5826ed915ff71ae85e5da5c4baa7->enter($__internal_461f004c1f4681cd401c6b35d026ce2b767a5826ed915ff71ae85e5da5c4baa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_828dfe26574ad58c97159bdcd9c2f1c7e51866c85838be6480c0274d7cdfd820 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_828dfe26574ad58c97159bdcd9c2f1c7e51866c85838be6480c0274d7cdfd820->enter($__internal_828dfe26574ad58c97159bdcd9c2f1c7e51866c85838be6480c0274d7cdfd820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_461f004c1f4681cd401c6b35d026ce2b767a5826ed915ff71ae85e5da5c4baa7->leave($__internal_461f004c1f4681cd401c6b35d026ce2b767a5826ed915ff71ae85e5da5c4baa7_prof);

        
        $__internal_828dfe26574ad58c97159bdcd9c2f1c7e51866c85838be6480c0274d7cdfd820->leave($__internal_828dfe26574ad58c97159bdcd9c2f1c7e51866c85838be6480c0274d7cdfd820_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/Users/hakim/Sites/tunisie-express/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
