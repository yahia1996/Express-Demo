<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_9b0cb570c83dcd916c72997de0427a31a40bc692cea73623768dc822db0191e0 extends Twig_Template
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
        $__internal_a7825dc85883812d2c8bc35f6738013983e38f582271a968903b9a9695efcf7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7825dc85883812d2c8bc35f6738013983e38f582271a968903b9a9695efcf7b->enter($__internal_a7825dc85883812d2c8bc35f6738013983e38f582271a968903b9a9695efcf7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_f400dcd08f2081b69e54e05e8ac6ed2bfb6dd10b04e5329f31342f5cfa961741 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f400dcd08f2081b69e54e05e8ac6ed2bfb6dd10b04e5329f31342f5cfa961741->enter($__internal_f400dcd08f2081b69e54e05e8ac6ed2bfb6dd10b04e5329f31342f5cfa961741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_a7825dc85883812d2c8bc35f6738013983e38f582271a968903b9a9695efcf7b->leave($__internal_a7825dc85883812d2c8bc35f6738013983e38f582271a968903b9a9695efcf7b_prof);

        
        $__internal_f400dcd08f2081b69e54e05e8ac6ed2bfb6dd10b04e5329f31342f5cfa961741->leave($__internal_f400dcd08f2081b69e54e05e8ac6ed2bfb6dd10b04e5329f31342f5cfa961741_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/Users/hakim/Sites/tunisie-express/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
