<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_d74a7df42dec66c4579ecab7c0f0891b2443c8c2b2ec4649d41bc301a82cc622 extends Twig_Template
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
        $__internal_33f0cf6aee10a9fa8353d6eb3bd9535dfc120939d5e1058cf859d4fe244417b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33f0cf6aee10a9fa8353d6eb3bd9535dfc120939d5e1058cf859d4fe244417b3->enter($__internal_33f0cf6aee10a9fa8353d6eb3bd9535dfc120939d5e1058cf859d4fe244417b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_f3054380fbb68e24ef84144c9a26ced634fc9f50f48dcdd25426a23a59e8a6c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3054380fbb68e24ef84144c9a26ced634fc9f50f48dcdd25426a23a59e8a6c1->enter($__internal_f3054380fbb68e24ef84144c9a26ced634fc9f50f48dcdd25426a23a59e8a6c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_33f0cf6aee10a9fa8353d6eb3bd9535dfc120939d5e1058cf859d4fe244417b3->leave($__internal_33f0cf6aee10a9fa8353d6eb3bd9535dfc120939d5e1058cf859d4fe244417b3_prof);

        
        $__internal_f3054380fbb68e24ef84144c9a26ced634fc9f50f48dcdd25426a23a59e8a6c1->leave($__internal_f3054380fbb68e24ef84144c9a26ced634fc9f50f48dcdd25426a23a59e8a6c1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/Users/hakim/Sites/tunisie-express/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
