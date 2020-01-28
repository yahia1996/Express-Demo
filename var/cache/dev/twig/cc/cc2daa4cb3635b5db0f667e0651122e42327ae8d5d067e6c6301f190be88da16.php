<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_11e59437113e67215af62e0dd95a6e170174cc4d5614a4c35413e3d47517b63a extends Twig_Template
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
        $__internal_f301855d4c6cc0c4eedc73287dde45e48b08e74204f5ab26e00a282d4f92e95d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f301855d4c6cc0c4eedc73287dde45e48b08e74204f5ab26e00a282d4f92e95d->enter($__internal_f301855d4c6cc0c4eedc73287dde45e48b08e74204f5ab26e00a282d4f92e95d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_086fbf02a48d67959d638e00c3ab83bba0624538b10f4ff8decc824368ff5c3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_086fbf02a48d67959d638e00c3ab83bba0624538b10f4ff8decc824368ff5c3b->enter($__internal_086fbf02a48d67959d638e00c3ab83bba0624538b10f4ff8decc824368ff5c3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_f301855d4c6cc0c4eedc73287dde45e48b08e74204f5ab26e00a282d4f92e95d->leave($__internal_f301855d4c6cc0c4eedc73287dde45e48b08e74204f5ab26e00a282d4f92e95d_prof);

        
        $__internal_086fbf02a48d67959d638e00c3ab83bba0624538b10f4ff8decc824368ff5c3b->leave($__internal_086fbf02a48d67959d638e00c3ab83bba0624538b10f4ff8decc824368ff5c3b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/Users/hakim/Sites/tunisie-express/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
