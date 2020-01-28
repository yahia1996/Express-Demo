<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_5a57ff4c6c77b5be49334b2ee80bcb8f8125df44bdb13034ccdc0602d10819f2 extends Twig_Template
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
        $__internal_62b0ac9823be2cb3c9cd31dd15ddff83f8f29d78dc015352d553256e2879ec8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62b0ac9823be2cb3c9cd31dd15ddff83f8f29d78dc015352d553256e2879ec8a->enter($__internal_62b0ac9823be2cb3c9cd31dd15ddff83f8f29d78dc015352d553256e2879ec8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_a620e6f32abdcc3f99b13914001a159cc3bd1f974c786b0091e4a2ae58bf6ac5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a620e6f32abdcc3f99b13914001a159cc3bd1f974c786b0091e4a2ae58bf6ac5->enter($__internal_a620e6f32abdcc3f99b13914001a159cc3bd1f974c786b0091e4a2ae58bf6ac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_62b0ac9823be2cb3c9cd31dd15ddff83f8f29d78dc015352d553256e2879ec8a->leave($__internal_62b0ac9823be2cb3c9cd31dd15ddff83f8f29d78dc015352d553256e2879ec8a_prof);

        
        $__internal_a620e6f32abdcc3f99b13914001a159cc3bd1f974c786b0091e4a2ae58bf6ac5->leave($__internal_a620e6f32abdcc3f99b13914001a159cc3bd1f974c786b0091e4a2ae58bf6ac5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/Users/hakim/Sites/tunisie-express/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
