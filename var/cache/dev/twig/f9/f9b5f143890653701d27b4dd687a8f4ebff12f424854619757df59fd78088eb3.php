<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_76de84d71e7bb58ee769e1bdfef47a466b6f6150b919646afa2191877097a790 extends Twig_Template
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
        $__internal_56a08abd058fdbc3fae9b756c46ac4b0263c660baf13089ce6f9dba6a0cf9843 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56a08abd058fdbc3fae9b756c46ac4b0263c660baf13089ce6f9dba6a0cf9843->enter($__internal_56a08abd058fdbc3fae9b756c46ac4b0263c660baf13089ce6f9dba6a0cf9843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_59bc07283126593076bf7b465059b67814df5f853b0deb000197e5cd47de29bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59bc07283126593076bf7b465059b67814df5f853b0deb000197e5cd47de29bb->enter($__internal_59bc07283126593076bf7b465059b67814df5f853b0deb000197e5cd47de29bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_56a08abd058fdbc3fae9b756c46ac4b0263c660baf13089ce6f9dba6a0cf9843->leave($__internal_56a08abd058fdbc3fae9b756c46ac4b0263c660baf13089ce6f9dba6a0cf9843_prof);

        
        $__internal_59bc07283126593076bf7b465059b67814df5f853b0deb000197e5cd47de29bb->leave($__internal_59bc07283126593076bf7b465059b67814df5f853b0deb000197e5cd47de29bb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/Users/hakim/Sites/tunisie-express/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
