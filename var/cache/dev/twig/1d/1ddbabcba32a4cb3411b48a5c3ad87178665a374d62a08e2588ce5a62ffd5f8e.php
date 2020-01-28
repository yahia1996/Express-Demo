<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_cfe713236a16f2cc881607fae6d273820e663606ed5f03f4bd30244172b3aa8e extends Twig_Template
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
        $__internal_c911b92a76707cdde7f28abc8c03ac26a2f44c8b2c9f298928656000ce8d2e05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c911b92a76707cdde7f28abc8c03ac26a2f44c8b2c9f298928656000ce8d2e05->enter($__internal_c911b92a76707cdde7f28abc8c03ac26a2f44c8b2c9f298928656000ce8d2e05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_9e28e2f41ddd8067d412c1c1d6ee38def4401e9b955e82535b5d0097850abd7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e28e2f41ddd8067d412c1c1d6ee38def4401e9b955e82535b5d0097850abd7f->enter($__internal_9e28e2f41ddd8067d412c1c1d6ee38def4401e9b955e82535b5d0097850abd7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_c911b92a76707cdde7f28abc8c03ac26a2f44c8b2c9f298928656000ce8d2e05->leave($__internal_c911b92a76707cdde7f28abc8c03ac26a2f44c8b2c9f298928656000ce8d2e05_prof);

        
        $__internal_9e28e2f41ddd8067d412c1c1d6ee38def4401e9b955e82535b5d0097850abd7f->leave($__internal_9e28e2f41ddd8067d412c1c1d6ee38def4401e9b955e82535b5d0097850abd7f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/Users/hakim/Sites/tunisie-express/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
