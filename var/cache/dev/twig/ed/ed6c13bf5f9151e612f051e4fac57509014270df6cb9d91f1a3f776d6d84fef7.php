<?php

/* @Framework/Form/time_widget.html.php */
class __TwigTemplate_76562b1878f8abc0910b977c9b784e6a82699e8ca93c8d8fb9e4fb25722bcf0a extends Twig_Template
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
        $__internal_994468e10ca1ad5eb0b67df1fa3ec13713be031d56a460885dd6295742d7c75a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_994468e10ca1ad5eb0b67df1fa3ec13713be031d56a460885dd6295742d7c75a->enter($__internal_994468e10ca1ad5eb0b67df1fa3ec13713be031d56a460885dd6295742d7c75a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        $__internal_fb35e0569511f567dd2eae7b592f42d708eebf4a2e43839cb3045100bade8b29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb35e0569511f567dd2eae7b592f42d708eebf4a2e43839cb3045100bade8b29->enter($__internal_fb35e0569511f567dd2eae7b592f42d708eebf4a2e43839cb3045100bade8b29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
";
        
        $__internal_994468e10ca1ad5eb0b67df1fa3ec13713be031d56a460885dd6295742d7c75a->leave($__internal_994468e10ca1ad5eb0b67df1fa3ec13713be031d56a460885dd6295742d7c75a_prof);

        
        $__internal_fb35e0569511f567dd2eae7b592f42d708eebf4a2e43839cb3045100bade8b29->leave($__internal_fb35e0569511f567dd2eae7b592f42d708eebf4a2e43839cb3045100bade8b29_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/time_widget.html.php";
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
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
", "@Framework/Form/time_widget.html.php", "/Users/hakim/Sites/tunisie-express/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/time_widget.html.php");
    }
}
