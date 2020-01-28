<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_ef9481118443d4be8074f20f0dd9020d2571e8f6464e7d029aee2ea03b1c99ce extends Twig_Template
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
        $__internal_37fc62093271426f1af024bb22479ef0580d65447be020b2ee517ed2fb9eb3ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37fc62093271426f1af024bb22479ef0580d65447be020b2ee517ed2fb9eb3ed->enter($__internal_37fc62093271426f1af024bb22479ef0580d65447be020b2ee517ed2fb9eb3ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_2c3efe64040f6a7c8b13a9668ebbb17b6ab67a6137965237391ac25bb282030d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c3efe64040f6a7c8b13a9668ebbb17b6ab67a6137965237391ac25bb282030d->enter($__internal_2c3efe64040f6a7c8b13a9668ebbb17b6ab67a6137965237391ac25bb282030d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_37fc62093271426f1af024bb22479ef0580d65447be020b2ee517ed2fb9eb3ed->leave($__internal_37fc62093271426f1af024bb22479ef0580d65447be020b2ee517ed2fb9eb3ed_prof);

        
        $__internal_2c3efe64040f6a7c8b13a9668ebbb17b6ab67a6137965237391ac25bb282030d->leave($__internal_2c3efe64040f6a7c8b13a9668ebbb17b6ab67a6137965237391ac25bb282030d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/Users/hakim/Sites/tunisie-express/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
