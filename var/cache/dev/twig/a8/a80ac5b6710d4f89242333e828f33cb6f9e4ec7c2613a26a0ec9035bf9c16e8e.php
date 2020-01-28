<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_2cd779f4b12445e0cbcbb40bf2f206c2684e3578bab1833dd035b55fc6e62025 extends Twig_Template
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
        $__internal_5be47271f1a3fba6c5163103a9f34a31f7a4f338dacb21a07bd62d1d36908753 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5be47271f1a3fba6c5163103a9f34a31f7a4f338dacb21a07bd62d1d36908753->enter($__internal_5be47271f1a3fba6c5163103a9f34a31f7a4f338dacb21a07bd62d1d36908753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_aa727ac009383de6103d1d44e54a2ce655af2385607bd5aebc22b6845db05a46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa727ac009383de6103d1d44e54a2ce655af2385607bd5aebc22b6845db05a46->enter($__internal_aa727ac009383de6103d1d44e54a2ce655af2385607bd5aebc22b6845db05a46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_5be47271f1a3fba6c5163103a9f34a31f7a4f338dacb21a07bd62d1d36908753->leave($__internal_5be47271f1a3fba6c5163103a9f34a31f7a4f338dacb21a07bd62d1d36908753_prof);

        
        $__internal_aa727ac009383de6103d1d44e54a2ce655af2385607bd5aebc22b6845db05a46->leave($__internal_aa727ac009383de6103d1d44e54a2ce655af2385607bd5aebc22b6845db05a46_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/Users/hakim/Sites/tunisie-express/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
