<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_82ba0e6798a315e346941414fdefa928c1e679bbd0ae090a8d22453b3ab0907e extends Twig_Template
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
        $__internal_14d41f7e750e7faf650836d0e3c2364ab758e02dc567b12a102c46efc37be851 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14d41f7e750e7faf650836d0e3c2364ab758e02dc567b12a102c46efc37be851->enter($__internal_14d41f7e750e7faf650836d0e3c2364ab758e02dc567b12a102c46efc37be851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_40bc50e00af84d1664af95073bbb261127dd2fecd1fb18ffa3b19ec26d976c95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40bc50e00af84d1664af95073bbb261127dd2fecd1fb18ffa3b19ec26d976c95->enter($__internal_40bc50e00af84d1664af95073bbb261127dd2fecd1fb18ffa3b19ec26d976c95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_14d41f7e750e7faf650836d0e3c2364ab758e02dc567b12a102c46efc37be851->leave($__internal_14d41f7e750e7faf650836d0e3c2364ab758e02dc567b12a102c46efc37be851_prof);

        
        $__internal_40bc50e00af84d1664af95073bbb261127dd2fecd1fb18ffa3b19ec26d976c95->leave($__internal_40bc50e00af84d1664af95073bbb261127dd2fecd1fb18ffa3b19ec26d976c95_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/Users/hakim/Sites/tunisie-express/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
