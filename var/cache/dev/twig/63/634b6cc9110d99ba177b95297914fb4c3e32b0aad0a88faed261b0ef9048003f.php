<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_58b5c1dbdeec445cbf80ec3c744d94feeca0da0b9dbfa4fc92c97fe9186a9ae9 extends Twig_Template
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
        $__internal_00d4ffc66955ae965d2c1734543913ae7d93a24a2c01d7aa554ee044eec51ce4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00d4ffc66955ae965d2c1734543913ae7d93a24a2c01d7aa554ee044eec51ce4->enter($__internal_00d4ffc66955ae965d2c1734543913ae7d93a24a2c01d7aa554ee044eec51ce4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_1f8c46075a04ef68798615e02d0c0aac5e1788f8eac24e90d19b5e8a1d43dc3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f8c46075a04ef68798615e02d0c0aac5e1788f8eac24e90d19b5e8a1d43dc3d->enter($__internal_1f8c46075a04ef68798615e02d0c0aac5e1788f8eac24e90d19b5e8a1d43dc3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_00d4ffc66955ae965d2c1734543913ae7d93a24a2c01d7aa554ee044eec51ce4->leave($__internal_00d4ffc66955ae965d2c1734543913ae7d93a24a2c01d7aa554ee044eec51ce4_prof);

        
        $__internal_1f8c46075a04ef68798615e02d0c0aac5e1788f8eac24e90d19b5e8a1d43dc3d->leave($__internal_1f8c46075a04ef68798615e02d0c0aac5e1788f8eac24e90d19b5e8a1d43dc3d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/Users/hakim/Sites/tunisie-express/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
